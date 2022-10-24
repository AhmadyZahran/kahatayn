<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Event;
use App\Models\volunteer;
use App\Models\user_event;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Laravel\Socialite\Facades\Socialite;

class VolunteerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    //show register/create form
    public function create()
    {
        if (Auth::user()) {
            return view('index');
        }
        return view('volunteers.register');
    }

    public function newVol($id)
    {


        if (Auth::user()) {
            $userId = Auth::user()->id;
            $event = Event::find($id);
            $data = [
                'user_id' => $userId,
                'event_id' => $event->id
            ];
            if (DB::table("event_user")->where(['user_id' => $userId, 'event_id' => $event->id])->exists()) {
                return redirect('/profile')->with('message', 'لقد سجلت بهذه الفعالية بالفعل');
            } else {
                user_event::create($data);
                return redirect('/profile');
            }
        }
        return view('volunteers.register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //create new user
    public function store(Request $request)
    {
        //

        $formFields = $request->validate(
            [
                'name' => ['required', 'min:3'],
                'email' => ['required', 'email', Rule::unique('users', 'email')],
                'password' => 'required|confirmed|min:6',
                'phone' => ['required', 'max:10']
            ]
        );
        $formFields['image'] = base64_encode(file_get_contents($request->file('profile_image')));
        dd($formFields['image']);
        //
        //hash password
        $formFields['password'] = bcrypt($formFields['password']);

        //create user
        $user = User::create($formFields);

        // /auto log
        auth()->login($user);

        return redirect('/profile');
        // ->with
        //     ('message', 'User created and logged in');

    }
    //logout

    public function logout(Request $request)
    {

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
        // ->with('message','You have been logged out!');
    }

    public function login()
    {
        if (Auth::user()) {
            return view('index');
        }
        return view('volunteers.login');
    }



    public function authenticate(Request $request)
    {
        $formFields =  $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($formFields) && Gate::allows('admin')) {
            $request->session()->regenerate();

            return view('Dashboard.admin');
        } elseif (auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/profile');
        }
        return back()->withErrors(
            [
                'email' => 'Invalid Credentials'
            ]
        )->onlyInput('email');
    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function show(volunteer $volunteer)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $user = user::find($id);
        return view('edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        // dd($request);
        $user = User::find($id);
        // $formFields = $request->validate(
        //     [
        //         'name' => ['required', 'min:3'],
        //         'email' => ['required', 'email'],
        //         'password' => 'required|confirmed|min:6',
        //         'phone' => ['required', 'max:10']
        //     ]
        // );

        $image = base64_encode(file_get_contents($request->file('profile_image')));
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->image = $image;

        //hash password
        //create user
        $user->save();
        return redirect('profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\volunteer  $volunteer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // $ev = user_event::find($id);
        $ev = DB::table('event_user')->where('event_id', $id);
        // dd($ev);
        $ev->delete();
        return redirect('/profile');
    }

    //////////////
    // log with social
    public function github()
    {
        //send the user request to github
        return Socialite::driver('github')->stateless()->redirect();
    }

    public function githubRedirect()
    {
        //get auth request back to authenticate user

        $user = Socialite::driver('github')->stateless()->user();

        $this->_registerorLoginUser($user);
        return redirect('/');
    }



    public function google()
    {
        //send the user request to google
        return Socialite::driver('google')->stateless()->redirect();
    }

    public function googleRedirect()
    {
        //get auth request back to authenticate user
        $user = Socialite::driver('google')->stateless()->user();

        $this->_registerorLoginUser($user);
        return redirect('/');
    }



    public function facebook()
    {
        //send the user request to facebook
        return Socialite::driver('facebook')->stateless()->redirect();
    }

    public function facebookRedirect()
    {
        //get auth request back to authenticate user
        $user = Socialite::driver('facebook')->stateless()->user();

        $this->_registerorLoginUser($user);
        return redirect('/');
    }


    public function profile()
    {
        $user = Auth::user();
        $events = $user->events;
        return view('profile', ["user" => $user, "events" => $events]);
    }

    public function eventDescription($id)
    {
        $event = Event::find($id);

        return view('eventDescription', ["event" => $event]);
    }
}

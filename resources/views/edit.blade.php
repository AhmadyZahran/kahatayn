@extends('master')

@section('content')
<div
class="container-fluid page-header mb-5 wow fadeIn"
data-wow-delay="0.1s"
>
<div class="container text-center">
  <h1 class="display-4 text-white animated slideInDown mb-4">
    الملف الشخصي
  </h1>
</div>
</div>
<form action="/update/{{$user->id}}" method="POST" enctype="multipart/form-data">
    @csrf
{{-- @method('PUT') --}}
<section style="background-color: #eee;">
    <div class="container py-5">
      <div class="row">
        <div class="col">
          <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
            <ol class="breadcrumb mb-0">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active" aria-current="page">User Profile</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="card mb-4">
            <div class="card-body text-center">
              <img src="data:image/jpeg;base64,{{  $user->image}}" alt="avatar"
                class="rounded-circle img-fluid" style="width: 150px;">
              <h5 class="my-3">{{ $user->name }}</h5>
              <p class="text-muted mb-1">متطوع</p>


            </div>


          </div>

        </div>

        <div class="col-lg-8 ">
          <div class="card mb-4">
            <div class="card-body p-2">
                <div class="mb-6 text-end">
                    <div class="mb-6 text-end">
                        <label for="name" class="inline-block text-lg  mb-2">
                            الاسم
                        </label>
                        <input
                            type="text"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="name"
                            value="{{$user->name}}"
                        />
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    <br>
                    <div class="mb-6 text-end">
                        <label for="profile_image" class="inline-block text-lg  mb-2">
                            الصورة
                        </label>
                        <input
                            type="file"
                            class="border border-gray-200 rounded p-2 w-full"
                            name="profile_image"


                        />
                        @error('name')
                            <p class="text-red-500 text-xs mt-1">
                                {{$message}}
                            </p>
                        @enderror
                    </div>
                    <br>
                    <label for="email" class="inline-block text-lg mb-2"
                        >الايميل</label
                    >
                    <input
                        type="email"
                        class="border border-gray-200 rounded p-2 w-full"
                        name="email"
                        value="{{$user->email}}"
                    />
                    @error('email')
                    <p class="text-red-500 text-xs mt-1">
                        {{$message}}
                    </p>
                @enderror
                </div>
                <br>
                <div class="mb-6 text-end">
                  <label
                      for="phone"
                      class="inline-block text-lg mb-2"
                  >
                  الرقم            </label>
                  <input
                      type="number"
                      class="border border-gray-200 rounded p-2 w-full"
                      name="phone"
                      value="{{ $user->phone  }}"
                  />
                  @error('image')
                  <p class="text-red-500 text-xs mt-1">
                      {{$message}}
                  </p>
              @enderror
              </div>
              <br>
              <button type="submit" class="btn btn-info">update</button>

        </form>


        </div>
      </div>
    </div>

          </div>
        </div>


  </section>

@endsection

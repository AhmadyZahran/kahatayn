
<x-volunteers>

<div class="p-10 rounded max-w-lg mx-auto mt-24 bg-gray-50 border border-gray-200 ">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">
            مرحبا بك
        </h2>
        <p class="mb-4"></p>
    </header>

    

    <form action="/users/authenticate" method="POST">
        @csrf
        @method('POST')
             <div class="mb-6 text-end">
            <label for="email" class="inline-block text-lg mb-2"
                >الايميل</label
            >
            <input
                type="email"
                class="border border-gray-200 rounded p-2 w-full"
                name="email"
                value="{{old('email')}}"
            />
            @error('email')
            <p class="text-red-500 text-xs mt-1">
                {{$message}}
            </p>
        @enderror
        </div>

        <div class="mb-6 text-end">
            <label
                for="password"
                class="inline-block text-lg mb-2"
            >
                كلمة السر
            </label>
            <input
                type="password"
                class="border border-gray-200 rounded p-2 w-full"
                name="password"
            />
            @error('password')
            <p class="text-red-500 text-xs mt-1">
                {{$message}}
            </p>
        @enderror
        </div>


        <div class="mb-6 text-end">
            <button
                type="submit"
                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
            >
                سجل
            </button>
        </div>
    </form>
</div>
</x-volunteers>

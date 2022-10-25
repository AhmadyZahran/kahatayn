






<!DOCTYPE html>
<html lang="en">

<head>
    @include('dashboard.adds.head');
</head>

<body>
    <div class="container-xxl position-relative bg-light d-flex p-0">

        <!-- Sidebar Start -->
        @include('dashboard.adds.sidebar');
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('dashboard.adds.nav')
            <!-- Navbar End -->


            {{-- Add Events form --}}
            

{{-- Create event --}}	
{{-- name	image	date	location	 description --}}
<div style="display:flex;width:100%;" class="m-4">
    <form action="/updatedEvent/{{ $id }}" method="post" class="eventInfo" enctype="multipart/form-data">
        @csrf
        <div style="width:100%;">
            <p>NAME</p>
            <input name="name" type="text" value="{{ $event->name }}" autofocus>
            @error('name')
            <p class="text-danger text-end text-xs mt-1">
                {{$message}}
            </p>
        @enderror
        </div>
        <div style="width:100%;">
            <p>DESCRIPTION</p>
            <input name="description" type="text" value="{{ $event->description }}">
            @error('description')
            <p class="text-danger text-end text-xs mt-1">
                {{$message}}
            </p>
        @enderror
        </div>

        
        <div style="width:47%;">
            <p>DATE</p>
            <input name="date" type="date" value="{{ $event->date }}">
            @error('date')
            <p class="text-danger text-end text-xs mt-1">
                {{$message}}
            </p>
        @enderror
        </div>
        <div style="width:47%;margin-left:6%">
            <p>LOCATION</p>
            <input name="location" type="text" value="{{ $event->location }}">
            @error('location')
            <p class="text-danger text-end text-xs mt-1">
                {{$message}}
            </p>
        @enderror
        </div>
        <div style="width:100%;">
            <p>IMAGE</p>
            <input name="image" type="file">
            @error('image')
            <p class="text-danger text-end text-xs mt-1">
                {{$message}}
            </p>
        @enderror
        </div>
        <p>
        <button type="submit" class="btn ">Update</button>
        <a href="/events" class="btn">Cancel</a>
        </p>
    </form> 
</div>



           {{-- footer start --}}
           @include('dashboard.adds.footer');
           {{-- footer end --}}
</body>

</html>

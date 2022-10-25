






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
    <a href="/events">
        <ion-icon name="arrow-back-circle-outline" style="width: 60px;height:60px"></ion-icon>
    </a>
    <form action="/createEvent" method="post" class="eventInfo" enctype="multipart/form-data">
        @csrf
        <div style="width:100%;">
            <p>NAME</p>
            <input name="name" type="text" autofocus>
        </div>
        <div style="width:100%;">
            <p>DESCRIPTION</p>
            <input name="description" type="text">
        </div>

        
        <div style="width:47%;">
            <p>DATE</p>
            <input name="date" type="date">
        </div>
        <div style="width:47%;margin-left:6%">
            <p>LOCATION</p>
            <input name="location" type="text">
        </div>
        <div style="width:100%;">
            <p>IMAGE</p>
            <input name="image" type="file">
        </div>
        <p>
        <button type="submit" class="btn ">Add</button>
        </p>
    </form> 
</div>


<!-- Table End -->

           {{-- footer start --}}
           @include('dashboard.adds.footer');
           {{-- footer end --}}
</body>

</html>

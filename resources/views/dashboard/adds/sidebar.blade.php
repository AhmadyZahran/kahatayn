 <!-- Sidebar Start -->
 <div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="/" class="navbar-brand mx-4 mb-3">
            <img src="{{ asset('img/blackHand.png') }}" alt="" style="width:140px;">
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="{{ asset('img/admin.png') }}" alt="" style="width: 60px; height:60px;">
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{ auth()->user()->name }}</h6>
                <span>Admin</span>
            </div>
        </div>
        <div class="navbar-nav w-100">

        <a href="/dashboard" class="nav-item nav-link " ><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="/users" class="nav-item nav-link" ><i class="fa fa-user me-2"></i>Users</a>
            <a href="/events" class="nav-item nav-link"><i class="fa fa-calendar me-2"></i>Events</a>

        </div>
    </nav>
</div>
<script src="{{ asset('main.js') }}"></script>
<!-- Sidebar End -->

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

            <a href="{{ route('addEvent') }}" class="btn btn-dark">ADD EVENT</a>
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <h6 class="mb-4">Responsive Table</h6>

            <!-- Form End -->
            <section class="intro">
                <div class="bg-image h-100" style="background-color: #f5f7fa;">
                  <div class="mask d-flex align-items-center h-100">
                    <div class="container">
                      <div class="row justify-content-center">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-body p-0">
                              <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                                <table class="table table-striped mb-0">
                                  <thead style="background-color: #ff6f0f;">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col"> Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Date</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($events as $event)
                                <tr>
                                    <th scope="row">{{ $event->id }}</th>
                                    <td>{{ $event->name }}</td>
                                    <td style="width:40px;overflow: hidden">
                                        {{ $event->description }}
                                    </td>
                                    <td>{{ $event->location }}</td>
                                    <td>{{ explode(' ',$event->date)[0]  }}</td>
                                </tr>
                                @endforeach

                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

            {{-- footer start --}}
            @include('dashboard.adds.footer');
            {{-- footer end --}}
</body>

</html>

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


            {{-- Events table --}}

            <h3>Events</h3>

            <a href="{{ route('addEvent') }} " class=" m-2">
                <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
                <lord-icon
                    src="https://cdn.lordicon.com/xzksbhzh.json"
                    trigger="hover"
                    colors="primary:#ff6f0f,secondary:#ebe6ef"
                    style="width:80px;height:80px">
                </lord-icon></a>
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
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
            
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($events as $event)
                                    <tr>
                                        <th scope="row">{{ $event->id }}</th>
                                        <td>{{ $event->name }}</td>
                                        <td style="">
                                            <p style="width: 200px;overflow-y:scroll">
                                            {{ $event->description }}</p>
                                        </td>
                                        <td>{{ $event->location }}</td>
                                        <td>{{ explode(' ',$event->date)[0]  }}</td>
                                        <td>
                                            <a href="update/{{ $event->id }}">
                                                <ion-icon name="create-outline" style="color: green"></ion-icon>
                                            </a>
                                        </td>
                                        <td>
                                            <a  class="btn btn-danger" onclick="event.preventDefault()
                                            Swal.fire({
                                               title: 'هل انت متأكد؟',
                                               text: 'لا يمكنك التراجع عن هذه العملية',
                                               icon: 'warning',
                                               showCancelButton: true,
                                               confirmButtonColor: '#3085d6',
                                               cancelButtonColor: '#d33',
                                               cancelButtonText: 'الغاء',
                                               confirmButtonText: 'نعم'
                                             }).then((result) => {
                                               if (result.isConfirmed) {
                                                 Swal.fire(
                                                   'حذف',
                                                   'تم الحذف بنجاح',
                                                   'success'
                                                 ).then(window.location.href='delete/{{ $event->id }}')
                                               }
                                             })
                       
                                             "><ion-icon name="trash-outline"></ion-icon></a>






                                        </td>
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
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

              </section>
<!-- Table End -->

           {{-- footer start --}}
           @include('dashboard.adds.footer');
           {{-- footer end --}}
</body>

</html>


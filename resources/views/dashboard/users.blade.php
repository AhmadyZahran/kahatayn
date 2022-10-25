<!DOCTYPE html>
<html lang="en">


    <head>
        @include('dashboard.adds.head')
    </head>


<body>
    <div class="container-xxl position-relative bg-light d-flex p-0">

        <!-- Sidebar Start -->
        @include('dashboard.adds.sidebar')
        
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
        @include('dashboard.adds.nav')
            <!-- Navbar End -->


            <!-- Chart Start -->
            <section class="intro">
                <div class="bg-image h-100" style="background-color: #f5f7fa;">
                  <div class="mask d-flex align-items-center h-100">
                    <div class="container">
                      <div class="row justify-content-center">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-body p-0">
                              <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                                <h3>Users</h3>
                                <table class="table table-striped my-5">
                                  <thead style="background-color: #ff6f0f;">
                                    <tr>
                                      <th scope="col">ID</th>
                                      <th scope="col">IMAGE</th>
                                      <th scope="col">NAME</th>
                                      <th scope="col">PHOME</th>
                                      <th scope="col">EMAIL</th>
                                      <th scope="col">DELETE</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($allUsers as $User )
                                    <tr>
                                      <td>{{ $User['id'] }}</td>
                                      <td> <img src="data:image/jpeg;base64,{{ $User->image }}" alt="" style="width: 40px"></td>
                                      <td>{{ $User['name'] }}</td>
                                      <td>{{ $User['phone'] }}</td>
                                      <td>{{ $User['email'] }}</td>
                                      <td>
                                        {{-- <a href="/deleteU/{{$User['id']}}" onclick="if(confirm('are you sure?')){
                                         document.getElementById('delete-form').submit()};" class="nav-link">
                                         <i class="fas fa-trash-alt"></i></a> --}}
                                        
                                        
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
                                                 ).then(window.location.href='/deleteU/{{$User['id']}}')
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
            <!-- Chart End -->
            

            {{-- footer start --}}
            @include('dashboard.adds.footer');
            {{-- footer end --}}
</body>

</html>

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


            
            

            <!-- Sale & Revenue Start -->
            


            <!-- Recent Sales Start -->
            <section class="intro">
                <div class="bg-image" style="background-color: #f5f7fa;">
                  <div class="mask d-flex align-items-center h-100">
                    <div class="container">
                      <div class="row justify-content-center">
                        <div class="col-12">
                          <div class="card">
                            <div class="card-body p-0">
                              <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" >
                                <h3>Donations</h3>
                                <table class="table table-striped mb-0 my-5">
                                  <thead style="background-color: #ff6f0f;">
                                    <tr>
                                      <th scope="col">ID</th>
                                      <th scope="col">NAME</th>
                                      <th scope="col">CARD</th>
                                      <th scope="col">DATE</th>
                                      <th scope="col">AMOUNT</th>
                                      
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($allDonations as $Donation )
                                    <tr>
                                      <td>{{ $Donation['id'] }}</td>
                                      <td>{{ $Donation['name'] }}</td>
                                      <td>{{ $Donation['card'] }}</td>
                                      <td>{{ $Donation['date'] }}</td>
                                      <td>{{ $Donation['amount'] }}</td>
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
            <!-- Chart End -->



            <!-- Widgets Start -->
            <div class="container-fluid pt-4 px-4 bg-light">
                <div class="row g-4">

                    <div class="col-sm-12 col-md-6 col-xl-12">
                        <div class="h-100 bg-light rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Calender</h6>
                                <a href="">Show All</a>
                            </div>
                            <div id="calender"></div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Widgets End -->


           {{-- footer start --}}
           @include('dashboard.adds.footer');
           {{-- footer end --}}
</body>

</html>

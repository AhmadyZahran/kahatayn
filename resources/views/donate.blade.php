@extends('master')
<link rel="stylesheet" href="{{asset('css/visa.css')}}">
    @section('content')

        <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">تَبَرَّع</h1>
            <p class="display-4 text-white animated slideInDown mb-4">صدقةٌ تُزكي بها نفسك</p>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0 text-end">
                    <li class="breadcrumb-item "><a class="text-white" href="/">الصفحة الرئيسية</a></li>
                    <li class="breadcrumb-item" ><a class="text-white" href="/">/</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">تبرع</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
        <!-- Donate Start -->
        <div class="container-fluid py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-12 wow fadeIn" data-wow-delay="0.1s">


      <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">
                            تبرع الآن
                        </div>

                        <h1 class="display-6 mb-5" style="font-family: 'Amiri', serif; font-size:24px;">

                            أتَى النَّبيَّ صلَّى اللهُ عليه وسلَّم رجلٌ يشكو قسوةَ قلبِه قال أتحِبُّ أن يلينَ قلبُك وتُدرِكُ حاجتَك ارحَمِ اليتيمَ وامسَحْ رأسَه وأطعِمه من طعامِك يلِنْ قلبُك وتُدرِكْ حاجتَك                        </h1>
                        <p class="mb-0 fs-5 text-dark">

                           
                            ساهم في دعم كفالة يتيم عبر دفعك لجزء من مبلغ الكفالة أو بما تجود به نفسك
                            .<br>
                            مبلغ الكفالة يتم استخدامه في تكاليف الحياة اليومية (طعام، شراب، لباس)،التعليم، العناية الصحية وغيرها.


                        </p>
                        <br><br><br>
                    </div>
                </div>
            </div>
                <div class="row g-5 align-items-center">



                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100 bg-secondary p-5">
                            <form action = "/donate/details" method = "post">
                              @csrf
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-floating">
                                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                                            <input type="text"

                                            class="form-control   border-0"
                                             id="name" name="name"
                                             value="<?php  if(isset($fields->name)) echo $fields->name ?>"
                                               placeholder="Your Name">

                                            <label for="name">الاسم</label>
                                        </div>
                                        @error('name')
                                        <p class="text-danger text-end text-xs mt-1">
                                            {{$message}}
                                        </p>
                                    @enderror
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="email"
                                            class="form-control   border-0"
                                             id="email" name="email"
                                             value="<?php  if(isset($fields->email)) echo $fields->email ?>"
                                             placeholder="Your Email">
                                            <label for="email">البريد الالكتروني</label>
                                        </div>
                                        @error('email')
                                        <p class="text-danger text-end text-xs mt-1">
                                            {{$message}}
                                        </p>
                                    @enderror
                                    </div>

                                    {{-- /////////////////////////// --}}
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control   border-0 card-number-input" id="card"
                                             name="card"
                                             value="{{old('card')}}"
                                             placeholder="Your card">
                                            <label for="card">رقم البطاقة</label>
                                        </div>
                                        @error('card')
                                        <p class="text-danger text-end text-xs mt-1">
                                            {{$message}}
                                        </p>
                                    @enderror
                                    </div>

                                    <div class="col-12">
                                        <div class="form-floating ">
                                            <input type="text"
                                            class="form-control   border-0 card-holder-input"
                                             id="card-holder" name="card-holder"
                                             value="{{old('card-holder')}}"

                                             required placeholder="Your card holder">
                                            <label for="card-holder">اسم حامل البطاقة</label>
                                        </div>

                                    </div>
                                      <div>
                                       <label class="pe-5">(mm) الشهر</label >
                                             <label class="pe-5">(yy)  السنة</label >
                                             <label class="pe-5">cvv</label >

                                        </div>
                                        <br>
                                    <div class="d-inline-flex p-2">

                                        <div class="inputBox pe-5">
                                            <select name="" id="" class="month-input" required>
                                                <option value="month" selected disabled>شهر</option>
                                                <option value="01">01</option>
                                                <option value="02">02</option>
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>
                                            </select>
                                        </div>
                                        <div class="inputBox pe-5">
                                            <select name="" id="" class="year-input" required>
                                                <option value="year" selected disabled>سنة</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>
                                                <option value="2026">2026</option>
                                                <option value="2027">2027</option>
                                                <option value="2028">2028</option>
                                                <option value="2029">2029</option>
                                                <option value="2030">2030</option>
                                            </select>
                                        </div>
                                        <div class="inputBox pe-5">
                                            <input type="text" maxlength="4" required class="cvv-input">
                                        </div>
                                    </div>


                                    {{-- //////////////////////////////// --}}

                                    <div class="form-floating">
                                        <input type="number" name="amount" class="form-control   border-0"
                                          placeholder="Enter the amount to be donated"
                                           value="<?php  if(isset($fields->amount)) echo $fields->amount ?>">
                                        <label name="amount">مقدار التبرع</label>

                                        @error('amount')
                                        <p class="text-danger text-end text-xs mt-1">
                                            {{$message}}
                                        </p>
                                    @enderror
                                    </div>

                                    <div class="col-12 ">
                                        <button type = 'submit' class="btn btn-primary px-5" 
                                     

                                        name="Donate_bt"style="height: 60px;">
                                            تبرع الآن
                                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                                <i class="fa fa-arrow-left"></i>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                        {{-- //visa --}}
                        <div class="container">

                            <div class="card-container">

                                <div class="front">
                                    <div class="image">
                                        <img src="img/chip.png" alt="">
                                        <img src="img/visa.png" alt="">
                                    </div>
                                    <div class="card-number-box">################</div>
                                    <div class="flexbox">
                                        <div class="box">
                                            <span>card holder</span>
                                            <div class="card-holder-name">full name</div>
                                        </div>
                                        <div class="box">
                                            <span>expires</span>
                                            <div class="expiration">
                                                <span class="exp-month">mm</span>
                                                <span class="exp-year">yy</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="back">
                                    <div class="stripe"></div>
                                    <div class="box">
                                        <span>cvv</span>
                                        <div class="cvv-box"></div>
                                        <img src="img/visa.png" alt="">
                                    </div>
                                </div>

                            </div>
                        <script>

                        document.querySelector('.card-number-input').oninput = () =>{
                            document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
                        }

                        document.querySelector('.card-holder-input').oninput = () =>{
                            document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
                        }

                        document.querySelector('.month-input').oninput = () =>{
                            document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
                        }

                        document.querySelector('.year-input').oninput = () =>{
                            document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
                        }

                        document.querySelector('.cvv-input').onmouseenter = () =>{
                            document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
                            document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
                        }

                        document.querySelector('.cvv-input').onmouseleave = () =>{
                            document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
                            document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
                        }

                        document.querySelector('.cvv-input').oninput = () =>{
                            document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
                        }

                        </script>
                          </div>
                </div>
            </div>
        </div>
        <!-- Donate End -->
        <



       @endsection

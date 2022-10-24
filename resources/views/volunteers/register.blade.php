@extends('master')

@section('content')
<div
      class="container-fluid page-header wow fadeIn "
      data-wow-delay="0.1s"
    ></div>
<section class="vh-10  my-5 bg-light" >
    <div class="container h-100 ">
      <div class="row d-flex justify-content-center align-items-center h-100 ">
        <div class="col-lg-12 col-xl-11 ">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-0">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
  
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase py-1 my-5">
                            حساب جديد
                        </h2>
                        <p class="mb-4">سجل حساب جديد و ابدأ رحلتك كمتطوع معنا</p>
                    </header>
  
                  <form action="/volunteers" method="POST" enctype="multipart/form-data" class="mx-1 mx-md-4">
                    @csrf
                    @method('POST')
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-user fa-lg me-3 fa-fw mt-4 pt-2"></i>
                      <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="form3Example1c">الاسم </label>
                        <input type="text" id="form3Example1c" class="form-control" name="name" value="{{old('name')}}" />
                        @error('name')
                        <p class="text-red-500 text-xs mt-1">
                            {{$message}}
                        </p>
                    @enderror
                    </div>
                    </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i class="fas fa-envelope fa-lg me-3 fa-fw mt-4 pt-2"></i>
                      <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="form3Example3c">بريد الالكتروني</label>
                        <input type="email" id="form3Example3c" class="form-control" name="email" value="{{old('email')}}" />
                        @error('email')
                        <p class="text-red-500 text-xs mt-1">
                            {{$message}}
                        </p>
                    @enderror  
                    </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="bi bi-telephone-fill fa-lg me-3 fa-fw mt-4 pt-2"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example1c">رقم الهاتف</label>
                          <input type="number" name="phone" id="form3Example1c" class="form-control"  />
                          @error('image')
                          <p class="text-red-500 text-xs mt-1">
                              {{$message}}
                          </p>
                      @enderror
                        </div>
                      </div>
  
                    <div class="d-flex flex-row align-items-center mb-4">
                      <i style="margin-bottom: " class="  bi bi-image fa-lg me-3 fa-fw mt-4 pt-2"></i>
                      <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="form3Example4cc">الصورة الشخصية </label>
                        <input type="file" id="form3Example4cc" class="form-control" name="profile_image"/>
                        @error('image')
                        <p class="text-red-500 text-xs mt-1">
                            {{$message}}
                        </p>
                    @enderror
                      </div>
                    </div>

                    <div class="d-flex flex-row align-items-center mb-4">
                        <i class="fas fa-lock fa-lg me-3 fa-fw mt-4 pt-2"></i>
                        <div class="form-outline flex-fill mb-0">
                            <label class="form-label" for="form3Example4c">كلمة المرور</label>
                          <input type="password" id="form3Example4c" class="form-control" name="password" />
                          @error('password')
                          <p class="text-red-500 text-xs mt-1">
                              {{$message}}
                          </p>
                      @enderror
                        </div>
                      </div>
  
                    <div class="d-flex flex-row align-items-center mb-3">
                      <i class="fas fa-key fa-lg me-3 fa-fw mt-4 pt-2"></i>
                      <div class="form-outline flex-fill mb-0">
                          <label class="form-label" for="form3Example4cd">تأكيد كلمة المرور</label>
                        <input type="password" id="form3Example4cd" class="form-control" name="password_confirmation" />
                        @error('password_confirmation')
                        <p class="text-red-500 text-xs mt-1">
                            {{$message}}
                        </p>
                    @enderror 
                    </div>
                    </div>
  
                   <div    class=" d-flex justify-content-around py-4 ">
                     <button style="font-size:20px" type="submit" class=" btn btn-primary w-25 btn-sm btn-block">سجل</button>
                    <p  class="pe-5 pt-3  " >
                        لديك حساب بالفعل؟
                        <a href="/login" class="text-laravel"
                            >تسجيل الدخول</a
                        >
                    </p>
             
  
                    
                    </div>
  
                  </form>
                  
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
  
                  <img src="https://cdn.discordapp.com/attachments/1032593113778245635/1034122657865666560/pexels-julia-larson-6456137.jpg"
                    class="img-fluid w-100" alt="Sample image">
  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    @endsection
  

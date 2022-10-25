@extends('master')


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/child.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">
                                        قال رسول الله ﷺ:
                                        كافِل الْيتيمِ -لَهُ أَوْ لِغَيرِهِ- أَنَا وهُوَ كهَاتَيْنِ في الجَنَّةِ</h1>
                                    <!-- <p class="fs-5 text-white-50 mb-5 animated slideInDown">لا شيء يعادل ابتسامة طفل وعيون لامعه ونظرة متفائلة الى المستقبل</p> -->
                                    <br>
                                    <br>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="profile">
                                        كن شريكا
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-left"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/hands.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown"> لا شيء يعادل ابتسامة طفل وعيون لامعه ونظرة متفائلة الى المستقبل</h1>
                                    <!-- <p class="fs-5 text-white-50 mb-5 animated slideInDown">أكفل يتيم ب 15 دينار شهرياً</p> -->
                                    <br>
                                    <br>
                                    <a class="btn btn-primary py-2 px-3 animated slideInDown" href="donateshow">
                                        ساهم في إسعاد الأيتام
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-left"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div></div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5" src="img/team.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2 " src="img/pexels.jpg" alt="" style="width: 200px; height: 200px;" >
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">من نحن ؟ </div>
                        <h1 class="display-6 mb-5">شخص واحد يمكنه أن يحدث تغييراً. بالعمل سويًا نحقق تغييرات مستدامة</h1>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">نحن منظمة أردنية تعمل على رعاية وحماية الأطفال الأيتام وفاقدي السند الأسري أو المعرضين لخطر فقدان الرعاية الأسرية</p>
                            <!-- <span class="text-primary">Jhon Doe, Founder</span> -->
                        </div>
                        <p class="mb-5">نحن منظمة غير حكومية ولا ننتمي لجهة معينة. نحترم جميع الأديان والثقافات ونعمل مع شركاء موثوقين في الأماكن التي يمكننا المساهمة فيها في التنمية الاجتماعية.</p>
                        <a class="btn btn-primary py-2 px-3 me-3" href="about">
                            اقرأ المزيد
                            <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                <i class="fa fa-arrow-left"></i>
                            </div>
                        </a>
                        <a class="btn btn-outline-primary py-2 px-3" href="contact">
                            تواصل معنا
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-left"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Causes Start -->
    <div class="container-xxl bg-light my-5 py-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">البرامج والمشاريع</div>
                <h1 class="display-6 mb-5" style="line-height:69px ">
                    من خلال مشاركتكم معنا نستطيع سوياً تنفيذ مشروعٍ أو حملةٍ تساهم في دعم الأطفال الذين نرعاهم       </h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($events->take(3) as $event)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="causes-item d-flex flex-column bg-white border-top border-5 border-primary rounded-top overflow-hidden h-100">
                        <div class="text-center p-4 pt-0">
                            <div class="d-inline-block bg-primary text-white rounded-bottom fs-5 pb-1 px-3 mb-4">
                                <small>{{ explode(' ',$event->date)[0] }}</small>
                            </div>
                            <h5 class="mb-3">{{ $event->name }}</h5>
                            <p>
                                {{ $event->location }}
                              </p>
                            <div class="causes-progress bg-light p-3 pt-2">
                                <div class="d-flex justify-content-between">
                                    <p class="text-dark">$1,934 <small class="text-body">المبلغ الحالي</small></p>
                                    <p class="text-dark">$3,000 <small class="text-body">الهدف</small></p>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                        <span>68%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="position-relative mt-auto">
                            <div style="width:490px;height:300px"><img class="img-fluid" src="data:image/jpeg;base64,{{ $event->image }}" alt=""></div>                            <div class="causes-overlay">
                                <a class="btn btn-outline-primary" href="/eventDescription/{{ $event->id }}">
                                    قراءة المزيد
                                    <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                        <i class="fa fa-arrow-left"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
@endforeach


            </div>
        </div>
    </div>




    <!-- Causes End -->





    <!-- Donate Start -->
    <div class="container-fluid donate my-5 py-5 bg-dark" data-parallax="scroll" data-image-src="img/team.jpg">

        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">تبرع الأن</div>
                    <h1 class="display-6 text-white mb-5">أكفل يتيم ب 15 دينار شهرياً</h1>
                    <p class="text-white-50 mb-0">تعتمد جمعية كهَاتَيْنِ بشكل رئيسي على الداعمين من أفراد ومؤسسات وشركات, وذلك بهدف توفير منزل دافئ وعائلة للأطفال الأيتام وفاقدي السند الأسري</p>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="h-100 bg-white p-5">
                        <form method="POST" action="/donate" >
                            @csrf
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control bg-light border-0" name="name" id="name" placeholder="Your Name">
                                        <label for="name">أدخل أسمك</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="email" class="form-control bg-light border-0" name="email" id="email" placeholder="Your Email">
                                        <label for="email">أدخل بريدك الالكتروني</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="btn-group d-flex justify-content-around">
                                        <input type="radio" class="btn-check" value="15" name="amount" id="btnradio1" checked>
                                        <label class="btn btn-light py-3" for="btnradio1">15JD</label>

                                        <input type="radio" class="btn-check" value="20" name="amount" id="btnradio2">
                                        <label class="btn btn-light py-3" for="btnradio2">20JD</label>

                                        <input type="radio" class="btn-check" value="30" name="amount" id="btnradio3">
                                        <label class="btn btn-light py-3" for="btnradio3">30JD</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button  class="btn btn-primary px-5" style="height: 60px;">
                                        تبرع الان
                                        <div class="d-inline-flex btn-sm-square bg-white text-primary rounded-circle ms-2">
                                            <i class="fa fa-arrow-left"></i>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Donate End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-primary py-1 px-3 mb-3">ما نقوم به</div>
                <h1 class="display-6 mb-5">الرؤية والرسالة والقيم</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-1.png" alt="">
                        <h4 class="mb-3"> حق التعليم</h4>
                        <p class="mb-4">كل طفل ينتمي إلى عائلة ويجب أن ينمو في بيئة تعليمية مليئة بالحب والاحترام والأمان. لتخلق جيلاً حضارياً مثقفاً، قادراً على العطاء والنماء، لما يلعبه التعليم في بناء شخصية الإنسان الحضاري الواعي.</p>
                        <!-- <a class="btn btn-outline-primary px-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-left"></i>
                            </div>
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-2.png" alt="">
                        <h4 class="mb-3">الرعاية الصحية</h4>
                        <p class="mb-4"> تسعى كهاتين دائماً إلى تسخير الجهود، لتقديم خدمات نوعية مركزة، ذات مستويات عالية الجودة في مجال الصحة لشريحة الأيتام التي تختص برعايتها</p>
                        <!-- <a class="btn btn-outline-primary px-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-primary text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-left"></i>
                            </div>
                        </a> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-3.png" alt="">
                        <h4 class="mb-3">حق الحياة</h4>
                        <p class="mb-4"> حفظ حقهم في الحياة كما تعد مساهماتها صورة مشرفة ومثالاً تقتدي به مؤسسات المجتمع الأخرى، ليتحقق بتعاون الجميع التكافل الاجتماعي في هذا الوطن المعطاء</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Team Start -->

    <!-- Team End -->


    <!-- Testimonial Start -->

    <!-- Testimonial End -->


    <!-- Footer Start -->

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->

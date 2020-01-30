@extends('layouts.mainlayout')

@section('content')
  <!--================Home Banner Area =================-->
  <section class="home_banner_area mb-20">
    <div class="banner_inner" style="">
      <div class="container">
        <div class="banner_content row">
          <div class="col-md-7">
            <h3>فروشگاه اینترنتی پوشاک</h3>
            <a class="main_btn mt-40" href="#">مشاهده بیشتر</a>
          </div>
          <div class="col-md-5 home-banner-left">
            <img class="img-fluid" src="images/banner/shopping.png" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Home Banner Area =================-->

  <!-- Start feature Area -->
  <section class="feature-area ">
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-xs-6">
          <div class="single-feature first">
            <a href="#" class="title">
                <img src="images/flaticon/cash-on-delivery.png">
                {{-- <i class="flaticon-money"></i> --}}
                <h3>۷ روز ضمانت بازگشت</h3>
            </a>
        </div>
    </div>

    <div class="col-sm-3 col-xs-6">
        <div class="single-feature">
            <a href="#" class="title">
                <img src="images/flaticon/shipping.png">
              {{-- <i class="flaticon-truck"></i> --}}
              <h3>تحویل اکسپرس</h3>
            </a>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6">
          <div class="single-feature">
            <a href="#" class="title">
                <img src="images/flaticon/24-hours-support.png">
                {{-- <i class="flaticon-support"></i> --}}
              <h3>  پشتیبانی ۲۴ ساعته </h3>
            </a>
          </div>
        </div>

        <div class="col-sm-3 col-xs-6">
          <div class="single-feature">
            <a href="#" class="title">
                <img src="images/flaticon/barcode-scanner.png">
                {{-- <i class="flaticon-blockchain"></i> --}}
              <h3>ضمانت اصل‌بودن کالا</h3>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End feature Area -->





  <!--================ off=================-->
  <section class="feature_product_area  products">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="mb-20">پیشنهاد های شگفت انگیز</h2>
        </div>
      </div>
      <div class=" owl-carousel owl-theme " id="hot-product">
        {{-- <div class="col-lg-3 col-md-6"> --}}
          <div class="single-product item">
            <div class="product-img">
              <img class="img-fluid w-100" src="images/product/inspired-product/i1.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>کیف</h4>
              </a>
              <div class="mt-3">
                  <del>350.000</del>
                <span class="mr-4">250.000</span>
              </div>
            </div>
          </div>
        {{-- </div> --}}
        {{-- <div class="col-lg-3 col-md-6"> --}}
            <div class="single-product item">
              <div class="product-img">
                <img class="img-fluid w-100" src="images/product/inspired-product/i2.jpg" alt="" />
                <div class="p_icon">
                  <a href="#">
                    <i class="ti-eye"></i>
                  </a>
                  <a href="#">
                    <i class="ti-heart"></i>
                  </a>
                  <a href="#">
                    <i class="ti-shopping-cart"></i>
                  </a>
                </div>
              </div>
              <div class="product-btm">
                <a href="#" class="d-block">
                  <h4>شلوار</h4>
                </a>
                <div class="mt-3">
                    <del>300.000</del>
                  <span class="mr-4">200.000</span>
                </div>
              </div>
            </div>
          {{-- </div> --}}

          {{-- <div class="col-lg-3 col-md-6"> --}}
            <div class="single-product item">
              <div class="product-img">
                <img class="img-fluid w-100" src="images/product/inspired-product/i3.jpg" alt="" />
                <div class="p_icon">
                  <a href="#">
                    <i class="ti-eye"></i>
                  </a>
                  <a href="#">
                    <i class="ti-heart"></i>
                  </a>
                  <a href="#">
                    <i class="ti-shopping-cart"></i>
                  </a>
                </div>
              </div>
              <div class="product-btm">
                <a href="#" class="d-block">
                  <h4>ساعت</h4>
                </a>
                <div class="mt-3">
                    <del>500.000</del>
                  <span class="mr-4">400.000</span>
                </div>
              </div>
            </div>
          {{-- </div> --}}
          {{-- <div class="col-lg-3 col-md-6"> --}}
            <div class="single-product item">
                <div class="product-img">
                  <img class="img-fluid w-100" src="images/product/inspired-product/i4.jpg" alt="" />
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-eye"></i>
                    </a>
                    <a href="#">
                      <i class="ti-heart"></i>
                    </a>
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>کتونی</h4>
                  </a>
                  <div class="mt-3">
                      <del>300.000</del>
                    <span class="mr-4">200.000</span>
                  </div>
                </div>
              </div>
            {{-- </div> --}}
            {{-- <div class="col-lg-3 col-md-6"> --}}
          <div class="single-product item">
            <div class="product-img">
              <img class="img-fluid w-100" src="images/product/inspired-product/i5.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>ساعت</h4>
              </a>
              <div class="mt-3">
                  <del>350.000</del>
                <span class="mr-4">250.000</span>
              </div>
            </div>
          </div>
        {{-- </div> --}}
        {{-- <div class="col-lg-3 col-md-6"> --}}
          <div class="single-product item">
            <div class="product-img">
              <img class="img-fluid w-100" src="images/product/inspired-product/i6.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>کتونی</h4>
              </a>
              <div class="mt-3">
                  <del>300.000</del>
                <span class="mr-4">200.000</span>
              </div>
            </div>
          </div>
        {{-- </div> --}}

        {{-- <div class="col-lg-3 col-md-6"> --}}
          <div class="single-product item">
            <div class="product-img">
              <img class="img-fluid w-100" src="images/product/inspired-product/i7.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>کیف</h4>
              </a>
              <div class="mt-3">
                  <del>500.000</del>
                <span class="mr-4">400.000</span>
              </div>
            </div>
          {{-- </div> --}}
        </div>

        {{-- <div class="col-lg-3 col-md-6"> --}}
          <div class="single-product item">
            <div class="product-img">
              <img class="img-fluid w-100" src="images/product/inspired-product/i8.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>کفش</h4>
              </a>
              <div class="mt-3">
                  <del>300.000</del>
                <span class="mr-4">200.000</span>
              </div>
            </div>
          </div>
        {{-- </div> --}}

    </div>
    {{-- <a class="main_btn" style="display:block;margin:0 auto;width:15%" href="#">مشاهده بیشتر</a> --}}
    </div>
</section>
  <!--================ End off =================-->
<!--================ New=================-->
<section class="feature_product_area  new-product">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center ">
            <h2 class="mb-20">پرفروش ترین ها</h2>
        {{-- </div>
        <div class="col-lg-2 text-center ">
            <span></span> --}}
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 col-6 mb-20">
          <div class="single-product item">
            <div class="product-img">
              <img class="img-fluid w-100" src="images/product/inspired-product/i1.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>کیف</h4>
              </a>
              <div class="mt-3">
                  <del>350.000</del>
                <span class="mr-4">250.000</span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-6  mb-20">
            <div class="single-product item">
              <div class="product-img">
                <img class="img-fluid w-100" src="images/product/inspired-product/i2.jpg" alt="" />
                <div class="p_icon">
                  <a href="#">
                    <i class="ti-eye"></i>
                  </a>
                  <a href="#">
                    <i class="ti-heart"></i>
                  </a>
                  <a href="#">
                    <i class="ti-shopping-cart"></i>
                  </a>
                </div>
              </div>
              <div class="product-btm">
                <a href="#" class="d-block">
                  <h4>شلوار</h4>
                </a>
                <div class="mt-3">
                    <del>300.000</del>
                  <span class="mr-4">200.000</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-6 mb-20">
            <div class="single-product item">
              <div class="product-img">
                <img class="img-fluid w-100" src="images/product/inspired-product/i3.jpg" alt="" />
                <div class="p_icon">
                  <a href="#">
                    <i class="ti-eye"></i>
                  </a>
                  <a href="#">
                    <i class="ti-heart"></i>
                  </a>
                  <a href="#">
                    <i class="ti-shopping-cart"></i>
                  </a>
                </div>
              </div>
              <div class="product-btm">
                <a href="#" class="d-block">
                  <h4>ساعت</h4>
                </a>
                <div class="mt-3">
                    <del>500.000</del>
                  <span class="mr-4">400.000</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-6  mb-20">
            <div class="single-product item">
                <div class="product-img">
                  <img class="img-fluid w-100" src="images/product/inspired-product/i4.jpg" alt="" />
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-eye"></i>
                    </a>
                    <a href="#">
                      <i class="ti-heart"></i>
                    </a>
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>کتونی</h4>
                  </a>
                  <div class="mt-3">
                      <del>300.000</del>
                    <span class="mr-4">200.000</span>
                  </div>
                </div>
              </div>
            </div>

    </div>
    {{-- <a class="main_btn" style="display:block;margin:0 auto;width:15%" href="#">مشاهده بیشتر</a> --}}
    </div>
</section>
  <!--================ New=================-->
  <section class="feature_product_area  last-pro">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center text-white">
            <h2 class="mb-20">جدیدترین ها</h2>
        {{-- </div>
        <div class="col-lg-2 text-center ">
            <span></span> --}}
        </div>
      </div>
      <div class=" owl-carousel owl-theme">
        {{-- <div class="col-lg-3 col-md-6"> --}}
          <div class="single-product item">
            <div class="product-img">
              <img class="img-fluid w-100" src="images/product/inspired-product/i1.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>کیف</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">250.000</span>
              </div>
            </div>
          </div>
        {{-- </div> --}}
        {{-- <div class="col-lg-3 col-md-6"> --}}
            <div class="single-product item">
              <div class="product-img">
                <img class="img-fluid w-100" src="images/product/inspired-product/i2.jpg" alt="" />
                <div class="p_icon">
                  <a href="#">
                    <i class="ti-eye"></i>
                  </a>
                  <a href="#">
                    <i class="ti-heart"></i>
                  </a>
                  <a href="#">
                    <i class="ti-shopping-cart"></i>
                  </a>
                </div>
              </div>
              <div class="product-btm">
                <a href="#" class="d-block">
                  <h4>شلوار</h4>
                </a>
                <div class="mt-3">
                  <span class="mr-4">200.000</span>
                </div>
              </div>
            </div>
          {{-- </div> --}}

          {{-- <div class="col-lg-3 col-md-6"> --}}
            <div class="single-product item">
              <div class="product-img">
                <img class="img-fluid w-100" src="images/product/inspired-product/i3.jpg" alt="" />
                <div class="p_icon">
                  <a href="#">
                    <i class="ti-eye"></i>
                  </a>
                  <a href="#">
                    <i class="ti-heart"></i>
                  </a>
                  <a href="#">
                    <i class="ti-shopping-cart"></i>
                  </a>
                </div>
              </div>
              <div class="product-btm">
                <a href="#" class="d-block">
                  <h4>ساعت</h4>
                </a>
                <div class="mt-3">
                  <span class="mr-4">400.000</span>
                </div>
              </div>
            </div>
          {{-- </div> --}}
          {{-- <div class="col-lg-3 col-md-6"> --}}
            <div class="single-product item">
                <div class="product-img">
                  <img class="img-fluid w-100" src="images/product/inspired-product/i4.jpg" alt="" />
                  <div class="p_icon">
                    <a href="#">
                      <i class="ti-eye"></i>
                    </a>
                    <a href="#">
                      <i class="ti-heart"></i>
                    </a>
                    <a href="#">
                      <i class="ti-shopping-cart"></i>
                    </a>
                  </div>
                </div>
                <div class="product-btm">
                  <a href="#" class="d-block">
                    <h4>کتونی</h4>
                  </a>
                  <div class="mt-3">
                    <span class="mr-4">200.000</span>
                  </div>
                </div>
              </div>
            {{-- </div> --}}
            {{-- <div class="col-lg-3 col-md-6"> --}}
          <div class="single-product item">
            <div class="product-img">
              <img class="img-fluid w-100" src="images/product/inspired-product/i5.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>ساعت</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">250.000</span>
              </div>
            </div>
          </div>
        {{-- </div> --}}
        {{-- <div class="col-lg-3 col-md-6"> --}}
          <div class="single-product item">
            <div class="product-img">
              <img class="img-fluid w-100" src="images/product/inspired-product/i6.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>کتونی</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">200.000</span>
              </div>
            </div>
          </div>
        {{-- </div> --}}

        {{-- <div class="col-lg-3 col-md-6"> --}}
          <div class="single-product item">
            <div class="product-img">
              <img class="img-fluid w-100" src="images/product/inspired-product/i7.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>کیف</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">400.000</span>
              </div>
            </div>
          {{-- </div> --}}
        </div>

        {{-- <div class="col-lg-3 col-md-6"> --}}
          <div class="single-product item">
            <div class="product-img">
              <img class="img-fluid w-100" src="images/product/inspired-product/i8.jpg" alt="" />
              <div class="p_icon">
                <a href="#">
                  <i class="ti-eye"></i>
                </a>
                <a href="#">
                  <i class="ti-heart"></i>
                </a>
                <a href="#">
                  <i class="ti-shopping-cart"></i>
                </a>
              </div>
            </div>
            <div class="product-btm">
              <a href="#" class="d-block">
                <h4>کفش</h4>
              </a>
              <div class="mt-3">
                <span class="mr-4">200.000</span>
              </div>
            </div>
          </div>
        {{-- </div> --}}

    </div>
    {{-- <a class="main_btn" style="display:block;margin:0 auto;width:15%" href="#">مشاهده بیشتر</a> --}}
    </div>
</section>
  <!--================ End Hot=================-->
    {{-- ==================== category sum ========================== --}}
    <section class="feature_product_area  new-product">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div class="main_title">
                <h2 class="text-center mb-20"><span>بیش از <b id="allkalasum" class="darkredc">100000</b> کالا در دسته بندی های مختلف</p></span></h2>
            </div>
            </div>
          </div>
            <div class="icons">
                <div class="icon">
                    <img src="images/icons/device128.png" alt="electronic devices">
                    <h5>کالای دیجیتال</h5>
                    <h5>180000+</h5>
                </div>
                <div class="icon">
                    <img src="images/icons/kitchen128.png" alt="kitchen">
                    <h5>خانه و آشپزخانه</h5>
                    <h5>180000+</h5>
                </div>
                <div class="icon">
                    <img src="images/icons/clothes128.png" alt="clothes">
                    <h5>پوشاک</h5>
                    <h5>180000+</h5>
                </div>
                <div class="icon">
                    <img src="images/icons/makeup128.png" alt="makeup and skin care">
                    <h5>آرایشی و بهداشتی</h5>
                    <h5>180000+</h5>
                </div>
                <div class="icon">
                    <img src="images/icons/sport128.png" alt="sport">
                    <h5>ورزش</h5>
                    <h5>180000+</h5>
                </div>
            </div>
        </div>
    </section>
  {{-- ==================== End category sum ========================== --}}
@endsection

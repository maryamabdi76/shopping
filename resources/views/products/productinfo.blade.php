@extends('layouts.mainlayout')

@section('content')
<div class="product_image_area section_gap_top">
    <div class="container">
      <div class="row s_product_inner">
        <div class="col-lg-5">
          <div class="s_product_img ">
            <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                  <img src="{{asset('images/product/single-product/s-product-s-2.jpg')}}" alt=""/>
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1">
                  <img src="{{asset('images/product/single-product/s-product-s-3.jpg')}}" alt="" />
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2" >
                  <img src="{{asset('images/product/single-product/s-product-s-4.jpg')}}" alt="" />
                </li>
              </ol>
              <div class="carousel-inner ">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="{{asset('images/product/single-product/s-product-1.jpg')}}" alt="First slide" />
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('images/product/single-product/s-product-1.jpg')}}" alt="Second slide"/>
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="{{asset('images/product/single-product/s-product-1.jpg')}}" alt="Third slide" />
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-5 offset-lg-1">
          <div class="s_product_text">
            <h3>شلوار جین</h3>
            <h2>200.000 تومان</h2>
            <ul class="list">
              <li>
                <a class="active" href="#"> <span>دسته بندی</span>:  پوشاک/شلوار</a>
              </li>
            </ul>
            <p>
                لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.
            </p>

            <div class="pmbtns " style="margin:0 10px 40px 0">
                <label class="text-black ml-20 mt-10" for="qty">تعداد:</label>
                <div>
                    <button class="btn pmbtnsdiv1 cartbtnright cartbtncolorh" type="button">&plus;</button>
                </div>
                <div>
                    <input type="text" name="qty" id="sst" min="1" max="12" value="1" title="تعداد:" class="form-control2 text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                </div>
                <div>
                    <button class="btn pmbtnsdiv2 cartbtnleft cartbtncolorh" type="button">&minus;</button>
                </div>
            </div>

            <div class="card_area">
              <a class="main_btn" href="/cart">افزودن به سبد خرید</a>
              <a class="main_btn3" href="#">
                <i class="fa fa-heart"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->

  <!--================Product Description Area =================-->
  <section class="product_description_area">
    <div class="container">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="false">
              توضیحات
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">
              مشخصات
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="review" aria-selected="true">
              نظر
          </a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane " id="home" role="tabpanel" aria-labelledby="home-tab" >
          <p>
            لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد و زمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.

          </p>
          <p>
           لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.

          </p>
        </div>
        <div class="tab-pane " id="profile" role="tabpanel" aria-labelledby="profile-tab" >
          <div class="table-responsive">
            <table class="table">
              <tbody>
                <tr>
                  <td>
                    <h5>عرض</h5>
                  </td>
                  <td>
                    <h5>128mm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>ارتفاع</h5>
                  </td>
                  <td>
                    <h5>508mm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>عمق</h5>
                  </td>
                  <td>
                    <h5>85mm</h5>
                  </td>
                </tr>
                <tr>
                  <td>
                    <h5>وزن</h5>
                  </td>
                  <td>
                    <h5>52gm</h5>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="tab-pane  active " style="opacity:initial" id="review" role="tabpanel" aria-labelledby="review-tab" >
          <div class="row">
            <button class="submit_btn" id="review-btn">  نظر جدید  <i class="fa fa-comment"></i></button>
            <div class="col-lg-12 " id="review-content">
                <div class="review_box">
                  <h4>افزودن نظر :</h4>
                  <p>امتیاز کالا:</p>
                  <ul class="list">
                    <li>
                      <a href="#"> <i class="fa fa-star"></i> </a>
                    </li>
                    <li>
                      <a href="#"> <i class="fa fa-star"></i> </a>
                    </li>
                    <li>
                      <a href="#"> <i class="fa fa-star"></i> </a>
                    </li>
                    <li>
                      <a href="#"> <i class="fa fa-star"></i> </a>
                    </li>
                    <li>
                      <a href="#"> <i class="fa fa-star"></i> </a>
                    </li>
                  </ul>
                  <div class="row ptb-15 border-bottom">
                  <form class="col-md-5 contact_form mb-20" action="contact_process.php" method="post" id="contactForm">
                    {{-- <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="name" name="name" placeholder="نام ونام خانوادگی" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="email" class="form-control" id="email" name="email" placeholder="ایمیل" />
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <input type="text" class="form-control" id="number" name="number" placeholder="شماره تلفن" />
                      </div>
                    </div> --}}
                    <div class="col-md-12">
                      <div class="form-group" >
                        <textarea style="border: 1px solid #8e44ad;" class="form-control" name="message" id="message" rows="8" placeholder=" متن نظر" ></textarea>
                      </div>
                    </div>
                    <div class="col-md-12 text-right">
                      <button type="submit" value="submit" class="btn submit_btn" >
                        ارسال نظر
                      </button>
                    </div>
                  </form>
                  <div class="col-md-7 mb-20">
                    <h4>دیگران را با نوشتن نظرات خود، برای انتخاب این محصول راهنمایی کنید.</h4>
                    <p>لطفا پیش از ارسال نظر، خلاصه قوانین زیر را مطالعه کنید:
                    </p>
                    <p>فارسی بنویسید و از کیبورد فارسی استفاده کنید. بهتر است از فضای خالی (Space)
                        بیش‌از‌حدِ معمول، شکلک یا ایموجی استفاده نکنید و از کشیدن حروف یا کلمات با
                        صفحه‌کلید بپرهیزید.
                    </p>
                    <p>نظرات خود را براساس تجربه و استفاده‌ی عملی و با دقت به نکات فنی ارسال کنید؛ بدون
                        تعصب به محصول خاص، مزایا و معایب را بازگو کنید و بهتر است از ارسال نظرات
                        چندکلمه‌‌ای خودداری کنید.
                    </p>
                    <p>بهتر است در نظرات خود از تمرکز روی عناصر متغیر مثل قیمت، پرهیز کنید.</p><p>به کاربران و سایر اشخاص احترام بگذارید. پیام‌هایی که شامل محتوای توهین‌آمیز و
                        کلمات نامناسب باشند، حذف می‌شوند.
                    </p>
                    <p>از ارسال لینک‌های سایت‌های دیگر و ارایه‌ی اطلاعات شخصی خودتان مثل شماره تماس،
                        ایمیل و آی‌دی شبکه‌های اجتماعی پرهیز کنید.
                    </p>
                  </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-12">
              <div class="row total_rate ">
                <div class="col-md-6">
                    <br>
                  <div class="box_total">
                    <h5>نظرات کاربران :</h5>
                    <h4>4.0</h4>
                    <h6>(3نفر)</h6>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="rating_list text-center">
                      <br>
                    <h3 class="col-md-5">بر اساس 3 نظر :</h3>
                    <ul class="list col-md-7">
                      <li class="text-center">
                        <a href="#">5ستاره
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> 01</a
                        >
                      </li>
                      <li class="text-center">
                        <a href="#">4 ستاره
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> 01</a
                        >
                      </li>
                      <li class="text-center">
                        <a href="#">3 ستاره
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> 01</a
                        >
                      </li>
                      <li class="text-center">
                        <a href="#">2 ستاره
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> 01</a
                        >
                      </li>
                      <li class="text-center">
                        <a href="#">1 ستاره
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i> 01</a
                        >
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="review_list">
                <div class="review_item row">
                    <div class="media col-md-2">
                      <div class="d-flex">
                        <img src="{{asset('images/product/single-product/review-1.png')}}" alt=""/>
                      </div>
                      <div class="media-body">
                        <h4>نظر کاربر </h4>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                      </div>
                    </div>
                    <p class=" col-md-10">
                      لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.

                    </p>
                </div>
                <div class="review_item row">
                  <div class="media col-md-2">
                    <div class="d-flex">
                      <img src="{{asset('images/product/single-product/review-2.png')}}" alt="" />
                    </div>
                    <div class="media-body">
                      <h4>نظر کاربر </h4>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <p class="col-md-10">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.

                  </p>
                </div>
                <div class="review_item row">
                  <div class="media col-md-2">
                    <div class="d-flex">
                      <img src="{{asset('images/product/single-product/review-3.png')}}" alt="" />
                    </div>
                    <div class="media-body">
                      <h4>نظر کاربر </h4>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <p class="col-md-10">
                    لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.

                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Product Description Area =================-->

@endsection

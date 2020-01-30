@extends('layouts.mainlayout')

@section('content')

<section class="section_gap_top contactForm">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="contact-title">تماس با ما </h2>
      </div>
      <div class="col-lg-6">
        <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" >
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <input class="form-control" name="name" id="name" type="text" placeholder="نام و نام خانوادگی">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <input style="text-align:right" class="form-control" name="email" id="email" type="email" placeholder="ایمیل">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <input class="form-control" name="subject" id="subject" type="text" placeholder="موضوع">
              </div>
            </div>
            <div class="col-12">
                <div class="form-group">
                    <textarea class="form-control" name="message" id="message" rows="9" placeholder="متن پیام"></textarea>
                </div>
              </div>
          </div>
          <div class="form-group mt-3 mb-5">
            <button type="submit" class="main_btn ">ارسال</button>
          </div>
        </form>


      </div>

      {{-- <div class="col-lg-4">
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-home"></i></span>
          <div class="media-body">
            <h3>Buttonwood, California.</h3>
            <p>Rosemead, CA 91770</p>
          </div>
        </div>
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-tablet"></i></span>
          <div class="media-body">
            <h3><a href="tel:454545654">00 (440) 9865 562</a></h3>
            <p>Mon to Fri 9am to 6pm</p>
          </div>
        </div>
        <div class="media contact-info">
          <span class="contact-info__icon"><i class="ti-email"></i></span>
          <div class="media-body">
            <h3><a href="mailto:support@colorlib.com">support@colorlib.com</a></h3>
            <p>Send us your query anytime!</p>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
</section>
  <!-- ================ contact section end ================= -->

@endsection

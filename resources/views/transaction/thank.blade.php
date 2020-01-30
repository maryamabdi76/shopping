@extends('layouts.mainlayout')

@section('content')
    <!--================Home Banner Area =================-->
    <section class="cartbanner">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center">
                <div class=" page_link alignleft">
                    <p><a href="/" class="mg5 ared">خانه</a>/ <a href="/cart" class="mg5 ared"> سبد خرید</a>/ <a href="/factor" class="mg5 ared"> ارسال</a>/ <a href="/transaction" class="mg5 ared"> پرداخت</a>/ <a href="/thank" class="mg5"> ثبت</a></p>
                </div>
                <div>
                    <h2>ثبت سفارش</h2>
                </div>
                <div>
                    <img class="carticon" src="images/icons/lastshop64.png" alt="factor">
                </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

<div class="thank">
    <img class="carticon" src="images/icons/checked.png" alt="shopping bags check">
    <h3 class="lightredc">با تشکر از خرید شما</h3>
    <h4>سفارش شما با موفقیت ثبت شد</h4>
    <p><a href="/" class="btn btn-sm btn-primary cartbtncolorh">بازگشت به خانه</a></p>
</div>

@endsection

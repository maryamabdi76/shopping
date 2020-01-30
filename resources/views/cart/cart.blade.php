@extends('layouts.mainlayout')

@section('content')
    <!--================Home Banner Area =================-->
    <section class="cartbanner">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center">
                <div class=" page_link alignleft">
                    <p><a href="/" class="mg5 ared">خانه</a>/ <a href="/cart" class="mg5"> سبد خرید</a></p>
                </div>
                <div>
                    <h2>سبد خرید شما</h2>
                </div>
                <div>
                    <img class="carticon" src="images/icons/cart64.png" alt="cart">
                </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================Cart Area =================-->

      <div class="CTsite-section">
        <div class="container">
          <div class="row mb-5">
            <form class="col-md-12" method="post">
              <div class="CTsite-blocks-table">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      {{-- <th class="product-thumbnail">Image</th> --}}
                      <th class="product-name" colspan="2">کالا</th>
                      <th class="product-price">قیمت</th>
                      <th class="product-quantity">تعداد</th>
                      <th class="product-total">قیمت کل</th>
                      <th class="product-remove">حذف</th>
                    </tr>
                  </thead>
                  <tbody>

                        {{-- @foreach ($all as $value)
                            <tr>
                                <td class="product-thumbnail">
                                  <img src="images/product/single-product/{{$value->image->nameimage}}" alt="Image" class="img-fluid imgwh">
                                </td>
                                <td class="product-name">
                                  <h5 class="text-black">{{$value->kala->name}}</h5>
                                </td>
                                <td>{{$value->kala->price}}</td>
                                <td class="cartbtn">
                                  <div class=" input-group mb-3" style="max-width: 120px;">
                                  <div class="input-group-append">
                                      <button class="btn btn-outline-primary js-btn-plus cartbtnright cartbtncolorh" type="button">&plus;</button>
                                      </div>
                                    <input type="text" class="form-control text-center" value="{{$value->num}}" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                    <div class="input-group-prepend">
                                      <button class="btn btn-outline-primary js-btn-minus cartbtnleft cartbtncolorh" type="button">&minus;</button>
                                  </div>
                                  </div>

                                </td>
                                <td></td>
                                <td><a href="#" class="btn btn-primary cartdelbtn">X</a></td>
                            </tr>
                        @endforeach --}}

                    <tr>
                      <td class="product-thumbnail ">
                        <img src="images/product/inspired-product/i2.jpg" alt="Image" class=" imgwh">
                      </td>
                      <td class="product-name">
                        <h5 class="text-black">شلوار جین تیره زنانه</h5>
                      </td>
                      <td>149,000</td>
                      <td>
                        <div class="pmbtns">
                        <div>
                            <button class="btn pmbtnsdiv1 cartbtnright cartbtncolorh" type="button">&plus;</button>
                            </div>
                            <div>
                          <input type="text" class="form-control2 text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                            </div>
                          <div>
                            <button class="btn pmbtnsdiv2 cartbtnleft cartbtncolorh" type="button">&minus;</button>
                        </div>
                        </div>

                      </td>
                      <td>149,000</td>
                      <td><a href="#" class="btn btn-primary cartdelbtn">X</a></td>
                    </tr>

                    <tr>
                      <td class="product-thumbnail">
                        <img src="images/product/new-product/n1.jpg" alt="Image" class=" imgwh">
                      </td>
                      <td class="product-name">
                        <h5 class="text-black">کفش اسپورت زنانه</h5>
                      </td>
                      <td>225,000</td>
                      <td>
                        <div class="pmbtns">
                        <div>
                            <div>
                            <button class="btn pmbtnsdiv1 cartbtnright cartbtncolorh" type="button">&plus;</button>
                            </div>
                        </div>
                          <input type="text" class="form-control2 text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                          <div>
                            <button class="btn pmbtnsdiv2 cartbtnleft cartbtncolorh" type="button">&minus;</button>
                        </div>
                        </div>

                      </td>
                      <td>225,000</td>
                      <td><a href="#" class="btn btn-primary cartdelbtn" >X</a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </form>
          </div>



          <div class="row">
            <div class="col-md-6 mt-15">
                <div class="row mb-20">
                    <div class="col-6">
                    <button class="btn btn-primary btn-block cartbtncolor mwbtn cartbtnb2">بروزرسانی سبد خرید  </button>
                    </div>
                    <div class="col-6">
                    <button class="btn btn-outline-primary btn-block cartbtncolorh fpcart mwbtn cartbtnb2">ادامه خرید</button>
                    </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  {{-- <label class="text-black h4" for="coupon">تخفیف</label> --}}
                  <p class="rightalign"><b class="darkpurplec">کد تخفیف</b> خود را وارد کنید.</p>
                </div>
                <div class="col-8 mb-20">
                  <input type="text" class="form-control py-3" id="coupon" placeholder="کد تخفیف">
                </div>
                <div class="col-4">
                  <button class="btn cartbtncolorh1">اجرا</button>
                </div>
              </div>
            </div>

            <div class="col-md-6 pl-5 text-center" style="padding:0 50px">
                <div class="row">
                    <div class="col-md-12 text-right border-bottom mb-20">
                        <h3 class="text-black h4 text-uppercase text-center">مجموع</h3>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <span class="text-black ">قیمت کل</span>
                    </div>
                    <div class="col-6 ">
                        <strong class="text-black ">374,000</strong>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-6">
                      <span class="text-black ">با اعمال تخفیف</span>
                    </div>
                    <div class="col-6 ">
                      <strong class="text-black ">374,000</strong>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-lg py-3 btn-block cartbtncolorh1 mwbtn" onclick="window.location='/factor'">تائید و ادامه</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--================End Cart Area =================-->
    @endsection

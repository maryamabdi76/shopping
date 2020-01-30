@extends('layouts.mainlayout')

@section('content')
    <!--================Home Banner Area =================-->
    <section class="cartbanner ">
      <div class="banner_inner d-flex align-items-center">
        <div class="container">
          <div
            class="banner_content d-md-flex justify-content-between align-items-center">
                <div class=" page_link alignleft">
                    <p><a href="/" class="mg5 ared">خانه</a>/ <a href="/cart" class="mg5 ared"> سبد خرید</a>/ <a href="/factor" class="mg5"> ارسال</a></p>
                </div>
                <div>
                    <h2>ارسال سفارش</h2>
                </div>
                <div>
                    <img class="carticon" src="images/icons/factor64.png" alt="factor">
                </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start factor area ==================-->

    <div class="site-section factor">
        <div class="container">

            {{-- php if(empty(session::get('username'))):?> --}}
                <div class="row mb-4">
                    <div class="col-md-12">
                    <div class="border p-4 rounded" role="alert">
                        <p class="rightalign">حساب کاربری دارید ؟ <a href="/login" class="ared">وارد شوید</a> / <a href="/login" class="ared">ثبت نام کنید</a></p>
                    </div>
                    </div>
                </div>
            {{-- php endif;?> --}}

        {{-- php if(session::get('username')):?> --}}
          <div class="row ">
            <div class="col-lg-6 mb-4">

              <h2 class="h3 mb-3 text-black rightalign">جزئیات ارسال</h2>
              <div class="p-3 p-lg-5 border">
                {{-- <div class="form-group">
                  <label for="c_country" class="text-black">Country <span class="text-danger">*</span></label>
                  <select id="c_country" class="form-control">
                    <option value="1">Select a country</option>
                    <option value="2">bangladesh</option>
                    <option value="3">Algeria</option>
                    <option value="4">Afghanistan</option>
                    <option value="5">Ghana</option>
                    <option value="6">Albania</option>
                    <option value="7">Bahrain</option>
                    <option value="8">Colombia</option>
                    <option value="9">Dominican Republic</option>
                  </select>
                </div> --}}
                <div class="row mb-4">
                  <div class="col-md-6">
                    <label for="fullname" class="text-black rightfloat">نام<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fullname" name="fullname">
                  </div>
                  <div class="col-md-6">
                    <label for="username" class="text-black rightfloat">نام خانوادگی <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="username" name="username">
                  </div>
                </div>

                {{-- <div class="row">
                  <div class="col-md-12">
                    <label for="c_companyname" class="text-black">Company Name </label>
                    <input type="text" class="form-control" id="c_companyname" name="c_companyname">
                  </div>
                </div> --}}

                <div class="row mb-4">
                  <div class="col-md-12 factor-address">
                    <label for="selectedaddress" class="text-black  mb-3">آدرس <span class="text-danger">*</span></label>
                    <h6 class="color79  mb-3" style="margin-bottom:1rem">آدرس مورد نظر خود را انتخاب کنید :</h6>
                        <select id="selectedaddress" name="selectedaddress" class="mb-3">
                            <option disabled selected value="">آدرسی انتخاب نشده</option>
                            {{-- @foreach ($all as $value) --}}
                            {{-- <option value="{{$value->id}}">{{$value->address}}</option> --}}
                            {{-- @endforeach --}}
                            <option value="1">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است.</option>
                            <option value="2">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ است.</option>
                        </select>
                  </div>
                </div>

                <div class="row mb-4">
                  <div class="col-md-12">
                    <label for="newaddress" class="text-black  mb-3">آدرس جدید</label>
                      <div id="newaddress">
                        <div class="mb-2">
                            <input type="text" class="form-control" name="cellphone" placeholder="تلفن ثابت">
                        </div>
                        <div class="mb-2">
                            <input type="text" class="form-control" name="post" placeholder="کد پستی">
                        </div>
                        <div class="mb-2">
                            <input type="text" class="form-control" name="address" placeholder="آدرس کامل">
                        </div>
                      </div>
                    </div>
                </div>
                {{-- <div class="row">
                  <div class="col-md-6">
                    <label for="c_state_country" class="text-black rightfloat">State / Country <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                  </div>
                  <div class="col-md-6">
                    <label for="c_postal_zip" class="text-black rightfloat">Posta / Zip <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                  </div>
                </div> --}}

                {{-- <div class="row mb-4">
                  <div class="col-md-6">
                    <label for="c_email_address" class="text-black rightfloat"><span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                  </div>
                  <div class="col-md-6">
                    <label for="c_phone" class="text-black rightfloat">Phone <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
                  </div>
                </div> --}}

                {{-- <div class="form-group">
                  <label for="c_create_account" class="text-black rightfloat" data-toggle="collapse" href="#create_an_account" role="button" aria-expanded="false" aria-controls="create_an_account"><input type="checkbox" value="1" id="c_create_account"> Create an account?</label>
                  <div class="collapse" id="create_an_account">
                    <div class="py-2">
                      <p class="mb-3">Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                      <div class="form-group">
                        <label for="c_account_password" class="text-black rightfloat">Account Password</label>
                        <input type="email" class="form-control" id="c_account_password" name="c_account_password" placeholder="">
                      </div>
                    </div>
                  </div>
                </div> --}}


                {{-- <div class="form-group">
                  <label for="c_ship_different_address" class="text-black rightfloat" data-toggle="collapse" href="#ship_different_address" role="button" aria-expanded="false" aria-controls="ship_different_address"><input type="checkbox" value="1" id="c_ship_different_address"> Ship To A Different Address?</label>
                  <div class="collapse" id="ship_different_address">
                    <div class="py-2">

                      <div class="form-group">
                        <label for="c_diff_country" class="text-black rightfloat">Country <span class="text-danger">*</span></label>
                        <select id="c_diff_country" class="form-control">
                          <option value="1">Select a country</option>
                          <option value="2">bangladesh</option>
                          <option value="3">Algeria</option>
                          <option value="4">Afghanistan</option>
                          <option value="5">Ghana</option>
                          <option value="6">Albania</option>
                          <option value="7">Bahrain</option>
                          <option value="8">Colombia</option>
                          <option value="9">Dominican Republic</option>
                        </select>
                      </div>


                      <div class="row">
                        <div class="col-md-6">
                          <label for="c_diff_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="c_diff_fname" name="c_diff_fname">
                        </div>
                        <div class="col-md-6">
                          <label for="c_diff_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="c_diff_lname" name="c_diff_lname">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <label for="c_diff_companyname" class="text-black">Company Name </label>
                          <input type="text" class="form-control" id="c_diff_companyname" name="c_diff_companyname">
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-12">
                          <label for="c_diff_address" class="text-black">Address <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="c_diff_address" name="c_diff_address" placeholder="Street address">
                        </div>
                      </div>

                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)">
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <label for="c_diff_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="c_diff_state_country" name="c_diff_state_country">
                        </div>
                        <div class="col-md-6">
                          <label for="c_diff_postal_zip" class="text-black">Posta / Zip <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="c_diff_postal_zip" name="c_diff_postal_zip">
                        </div>
                      </div>

                      <div class="row mb-4">
                        <div class="col-md-6">
                          <label for="c_diff_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="c_diff_email_address" name="c_diff_email_address">
                        </div>
                        <div class="col-md-6">
                          <label for="c_diff_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                          <input type="text" class="form-control" id="c_diff_phone" name="c_diff_phone" placeholder="Phone Number">
                        </div>
                      </div>

                    </div>

                  </div>
                </div> --}}

                <div class="row mb-4">
                  <div class="col-md-12">
                    <label for="c_order_notes" class="text-black mb-3">توضیحات تکمیلی</label>
                  <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control mb-3" placeholder="توضیحات خود را اینجا بنویسید ..."></textarea>
                </div>
                </div>
              </div>

              {{-- <div class="row mb-4">
                    <div class="col-md-12">
                        <h2 class="h3 mb-3 mt-3 text-black rightalign">تخفیف</h2>
                        <div class="p-3 p-lg-5 border">

                        <label for="c_code" class="text-black mb-3 rightfloat"><b class="darkpurplec">کد تخفیف</b> خود را وارد کنید.</label>
                        <div class="input-group w-75">
                                <input type="text" class="form-control py-3" id="coupon" placeholder="کد تخفیف">
                        <div class="col-md-3 ">
                            <button class="btn cartbtncolorh1">اجرا</button>
                        </div>
                    </div>

                    </div>
                  </div>
                </div> --}}

            </div>

            <div class="col-lg-6 mb-4">
              <div class="row mb-4">
                <div class="col-md-12">
                  <h2 class="h3 mb-3 text-black rightalign">جزئیات صورتحساب</h2>
                  <div class="p-3 p-lg-5 border">
                    <table class="table site-block-order-table mb-4">
                      <thead>
                        <th class="btnone">کالا</th>
                        <th class="btnone">تعداد</th>
                        <th class="btnone">مجموع</th>
                      </thead>
                      <tbody class="rightalign">
                        <tr>
                          <td>شلوار جین تیره زنانه</td>
                          <td>1</td>
                          <td>149,000</td>
                        </tr>
                        <tr>
                          <td>کفش اسپورت زنانه</td>
                          <td>1</td>
                          <td>225,000</td>
                        </tr>
                        <tr>
                          <td class="text-black font-weight-bold" colspan="2"><strong>قیمت کل</strong></td>
                          <td class="text-black">374,000</td>
                        </tr>
                        <tr>
                          <td class="text-black font-weight-bold" colspan="2"><strong>با اعمال تخفیف</strong></td>
                          <td class="text-black font-weight-bold"><strong>374,000</strong></td>
                        </tr>
                      </tbody>
                    </table>
                    {{-- <div class="mb-4">
                        <div class="col-md-12" style="padding:0">
                        <label for="c_code" class="text-black mb-3 rightfloat"><b class="darkpurplec">کد تخفیف</b> خود را وارد کنید.</label>
                        <div class="input-group w-75">
                                <input type="text" class="form-control py-3" id="coupon" placeholder="کد تخفیف">
                            <div class="col-md-3 ">
                                <button class="btn cartbtncolorh1">اجرا</button>
                            </div>
                        </div> --}}
                        {{-- <div class="input-group w-100">
                            <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                            <button class="btn cartbtncolorh1 input-group-addon">اجرا</button>
                        </div> --}}
                    {{-- </div>
                    </div> --}}
                        <div class="row">
                          <div class="col-md-12">
                            {{-- <label class="text-black h4" for="coupon">تخفیف</label> --}}
                            <p class="rightalign"><b class="darkpurplec">کد تخفیف</b> خود را وارد کنید.</p>
                          </div>
                          <div class="col-8 mb-20">
                            <input type="text" class="form-control py-3" id="coupon" placeholder="کد تخفیف">
                          </div>
                          <div class="col-4">
                            <button class="btn cartbtncolorh1" style="margin:0">اجرا</button>
                          </div>
                        </div>

                    <div class="p-3">
                        <h6>
                            <a class="d-block apurple rightalign" data-toggle="collapse" href="#bank" role="button" aria-expanded="false" aria-controls="bank">
                                پرداخت اینترنتی
                                 <i class="fa fa-angle-left"></i>
                            </a>
                        </h6>
                            <div class="collapse" id="bank">
                              <div class="card card-body ">
                                درگاه بانکی مورد نظر خود را انتخاب کنید :
                              </div>
                            </div>
                      </div>

                    <div class="p-3">
                      <h6>
                        <a class="d-block apurple rightalign" data-toggle="collapse" href="#home" role="button" aria-expanded="false" aria-controls="home">
                            پرداخت درب منزل
                            <i class="fa fa-angle-left"></i>
                        </a>
                          </h3>
                          <div class="collapse" id="home">
                            <div class="card card-body ">
                                توضیحات .........
                            </div>
                          </div>
                    </div>

                    <div class="p-3">
                        <h6>
                            <a class="d-block apurple rightalign" data-toggle="collapse" href="#collapseEx" role="button" aria-expanded="false" aria-controls="collapseEx">
                            پرداخت از کیف پول
                            <i class="fa fa-angle-left"></i>
                        </a>
                        </h6>
                            <div class="collapse" id="collapseEx">
                              <div class="card card-body ">
                                قیمت کل از کیف پول حساب کاربری شما کسر خواهد شد .
                              </div>
                            </div>
                      </div>

                    <div class="form-group">
                      <button class="btn btn-primary btn-lg py-3 btn-block cartbtncolorh" onclick="window.location='/thank'">ثبت سفارش</button>
                    </div>
                        </div>
                  </div>
                    </div>
                </div>
              </div>

            </div>
          </div>
            {{-- php endif;?> --}}
            <!-- </form> -->
        </div>
      </div>

    <!--================ End factor area ==================-->
@endsection

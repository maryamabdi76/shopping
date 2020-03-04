@extends('layouts.mainlayout')

@section('content')


    <!--================Home Banner Area =================-->
    {{-- <section class="banner_area">
        <div class="banner_inner d-flex align-items-center">
          <div class="container">
            <div class="banner_content d-md-flex justify-content-between align-items-center">
              <div class="mb-3 mb-md-0">
                <h2>Shop Category</h2>
                <p>Very us move be blessed multiply night</p>
              </div>
              <div class="page_link">
                <a href="index.html">Home</a>
                <a href="category.html">Shop</a>
                <a href="category.html">Women Fashion</a>
              </div>
            </div>
          </div>
        </div>
      </section> --}}
      <!--================End Home Banner Area =================-->

      <!--================Category Product Area =================-->

      <section class="cat_product_area section_gap_top mb-20">

        <div class="container-fluid">
            <div class="row" style="width: 100%;margin:initial">
            <div class="mb-20 " id="sidebar">
                <div class="custom-menu">
                    <button type="button" id="sidebarCollapse" class="btn btn-primary">
                        <i class="fa fa-bars"></i>
                        <span class="sr-only">Toggle Menu</span>
                    </button>
                </div>
                <div class="left_sidebar_area" >
                  <aside class="left_widgets p_filter_widgets">
                    <div class="l_w_title">
                      <h3>دسته بندی ها</h3>
                    </div>
                    <div class="widgets_inner">
                      <ul class="list">
                        <li class="{{ ($catid==0) ? 'active' : ''}}">
                            <a href="/clothesproduct/category/0">همه</a>
                          </li>
                      @foreach($category as $v)
                        <li class="{{ ($v->id == $catid) ? 'active' : ''}}">
                          <a href="/clothesproduct/category/{{$v->id}}">{{$v->categoryname}}</a>
                        </li>
                        @endforeach
                      </ul>
                    </div>
                  </aside>

                  <aside class="left_widgets p_filter_widgets">
                    <div class="l_w_title">
                      <h3>تگ ها</h3>
                    </div>
                    <div class="widgets_inner">
                      <ul class="list">
                        <li class="{{ ($tagid==0) ? 'active' : ''}}">
                            <a href="/clothesproduct/tags/0">همه</a>
                          </li>
                        @foreach($tag as $v)
                        <li class="{{ ($v->id ==$tagid) ? 'active' : ''}}">
                        <a href="/clothesproduct/tags/{{$v->id}}">{{$v->name}}</a>
                        </li>
                        @endforeach
                      </ul>
                    </div>
                  </aside>

                  {{-- <aside class="left_widgets p_filter_widgets">
                    <div class="l_w_title">
                      <h3>قیمت</h3>
                    </div>
                    <div class="widgets_inner">
                      <div class="range_item">
                        <div id="slider-range"></div>
                        <div class="">
                          <input type="text" id="amount" readonly />
                        </div>
                      </div>
                    </div>
                  </aside> --}}
                </div>
              </div>


            <div class="mb-20 w-content" id="content">
                <div class="product_top_bar">
                    <div class="col-md-4" style="">
                        <select id="" name="" class="" >
                            <option value="">مرتب سازی</option>
                            <option value="2">به ترتیب قیمت</option>
                            <option value="4">به ترتیب بیشترین فروش</option>
                        </select>
                    </div>
                </div>

              <div class="latest_product_inner">
                <div class="row">

                @foreach($product as $v)
                {{-- {{dd($v->Images()->get())}} --}}
                  <div class="col-lg-3 col-sm-4 col-6">
                    <div class="single-product">
                        <div class="product-img">
                            <img class="img-fluid w-100" src="{{asset('/').$v->Images()->get()->first()->path}}" alt="" />
                          <div class="p_icon">
                            <a href="/productinfo/{{$v->id}}">
                              <i class="fa fa-eye"></i>
                            </a>
                            <a href="#">
                              <i class="fa fa-heart"></i>
                            </a>
                            <a href="#">
                              <i class="fa fa-shopping-basket"></i>
                            </a>
                          </div>
                        </div>
                        <div class="product-btm">
                          <a href="#" class="d-block">
                            <h4>{{$v->category->categoryname}} {{$v->name}}</h4>
                            {{-- <h6>{{$v->description}}</h6> --}}
                          </a>
                          <div class="mt-3">
                              {{-- <del>350.000</del> --}}
                            <span class="mr-4">{{$v->price}} تومان</span>
                          </div>
                        </div>
                    </div>
                  </div>
                  @endforeach


                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!--================End Category Product Area =================-->

@endsection

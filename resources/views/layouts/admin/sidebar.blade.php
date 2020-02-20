<aside class="main-sidebar sidebar-dark-primary elevation-4 text-right d-none d-lg-block">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      {{-- <img src="{{asset('images/AdminLTELogo.png')}}" alt="AdminLTE" class="brand-image img-circle elevation-3"
           style="opacity: .8"> --}}
      <span class="brand-text font-weight-light mr-4">سایت فروشگاه</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel pt-2 pb-2 pr-2 d-flex">
        <div class="image">
          <img src="{{asset('images/user4-128x128.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>

        </div>

      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="{{ route('home') }}" class="nav-link">
              <i class="nav-icon fa fa-tachometer"></i>
              <p>داشبورد</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.users.index') }}" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>کاربران</p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="{{ route('admin.category.index') }}" class="nav-link">
              <i class="nav-icon fa fa-folder-open-o"></i>
              <p>دسته بندی ها
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/addPro" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>اضافه کردن دسته بندی</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.category.index') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>مدیریت دسته بندی ها</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="{{ route('admin.product.index') }}" class="nav-link">
              <i class="nav-icon fa fa-cubes"></i>
              <p>محصولات
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/addProduct" class="nav-link">
                  <i class="fa fa-plus nav-icon"></i>
                  <p>اضافه کردن محصول</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.product.index') }}" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>مدیریت محصولات</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item">
            <a href="{{ route('admin.review.index') }}" class="nav-link">
                <i class="nav-icon fa fa-comments"></i>
                <p>نظرات</p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

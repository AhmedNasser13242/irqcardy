<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/dashboard')}}">
                <i class="mdi mdi-home menu-icon"></i>
                <span class="menu-title">رئيسية</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="mdi mdi-circle-outline menu-icon"></i>
                <span class="menu-title">الفئات</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{url('admin/category/create')}}">فئة البطاقة</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('admin/category')}}">شاهد الفئات</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#products" aria-expanded="false"
                aria-controls="ui-basic">
                <i class="mdi mdi-circle-outline menu-icon"></i>
                <span class="menu-title">بطاقات</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="products">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{url('admin/products/create')}}">اضافة بطاقة</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{url('admin/products')}}">شاهد البطاقات</a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/brands')}}">
                <i class="mdi mdi-view-headline menu-icon"></i>
                <span class="menu-title">نوع البطاقة</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{url('admin/sliders')}}">
                <i class="mdi mdi-chart-pie menu-icon"></i>
                <span class="menu-title">سلايدر الموقع</span>
            </a>
        </li>

    </ul>
</nav>

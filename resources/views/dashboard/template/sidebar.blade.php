<!--sidebar start-->
@if($user->hasRole('Administrator'))
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="{{setActiveParent('')}}" href="{{URL('dashboard')}}">
                <i class="icon-dashboard"></i>
                <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-user"></i>
                <span>Posts</span>
                </a>
                <ul class="sub">
                    <li><a  href="boxed_page.html">All Posts</a></li>
                    <li><a  href="horizontal_menu.html">Add New</a></li>
                    <li><a  href="language_switch_bar.html">Categories</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-book"></i>
                <span>Media</span>
                </a>
                <ul class="sub">
                    <li><a  href="general.html">Library</a></li>
                    <li><a  href="buttons.html">Add New</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-cogs"></i>
                <span>Pages</span>
                </a>
                <ul class="sub">
                    <li><a  href="grids.html">All Pages</a></li>
                    <li><a  href="calendar.html">Add New</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-tasks"></i>
                <span>Events</span>
                </a>
                <ul class="sub">
                    <li><a  href="form_component.html">All Events</a></li>
                    <li><a  href="advanced_form_components.html">Add New</a></li>
                </ul>
            </li>
            <!--Batas Side Menu -->
            <hr>
            <!--Batas Side Menu -->
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-th"></i>
                <span>Administrator</span>
                </a>
                <ul class="sub">
                    <li><a  href="basic_table.html">Hak Akses</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a class="{{setActiveParent('dashboard.mahasiswa')}}" href="inbox.html">
                <i class="icon-envelope"></i>
                <span>Mahasiswa</span>
                <span class="label label-danger pull-right mail-info">2</span>
                </a>
                <ul class="sub ">
                    <li class="{{setActiveSub(array('dashboard.mahasiswa.index', 'dashboard.mahasiswa.edit'))}} "><a  href="{{URL('dashboard/mahasiswa')}}">Lihat Mahasiswa</a></li>
                    <li class="{{setActiveSub(array('dashboard.mahasiswa.create'))}}"><a  href="{{URL('dashboard/mahasiswa/create')}}">Tambah Mahasiswa</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class=" icon-bar-chart"></i>
                <span>Absensi</span>
                </a>
                <ul class="sub">
                    <li><a  href="morris.html">Manage Absensi</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-shopping-cart"></i>
                <span>Rekening</span>
                </a>
                <ul class="sub">
                    <li><a  href="product_list.html">Manage Rekening</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-glass"></i>
                <span>Kegiatan</span>
                </a>
                <ul class="sub">
                    <li><a  href="blank.html">Manage Kegiatan</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-glass"></i>
                <span>Himpunan</span>
                </a>
            </li>
            <!--multi level menu start-->
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-sitemap"></i>
                <span>Settings</span>
                </a>
                <ul class="sub">
                 <li class="sub-menu">
                     <a  href="boxed_page.html">General</a>
                     <ul class="sub">
                         <li><a  href="javascript:;">Blog</a></li>
                         <li><a  href="javascript:;">Admin Page</a></li>
                     </ul>
                 </li>
                    <li class="sub-menu">
                        <a  href="boxed_page.html">Prodi</a>
                        <ul class="sub">
                            <li><a  href="javascript:;">Manage Angkatan</a></li>
                            <li><a  href="javascript:;">Manage Prodi</a></li>
                        </ul>
                    </li>
                    <li><a  href="javascript:;">Administrator Setting</a></li>
                </ul>
            </li>
            <!--multi level menu end-->
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>

@elseif($user->hasRole('Pengurus HIMA'))
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="{{URL('/')}}">
                <i class="icon-dashboard"></i>
                <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-user"></i>
                <span>Master Mahasiswa</span>
                </a>
                <ul class="sub">
                    <li><a  href="boxed_page.html">Boxed Page</a></li>
                    <li><a  href="horizontal_menu.html">Horizontal Menu</a></li>
                    <li><a  href="language_switch_bar.html">Language Switch Bar</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-book"></i>
                <span>Absensi</span>
                </a>
                <ul class="sub">
                    <li><a  href="general.html">General</a></li>
                    <li><a  href="buttons.html">Buttons</a></li>
                    <li><a  href="widget.html">Widget</a></li>
                    <li><a  href="slider.html">Slider</a></li>
                    <li><a  href="nestable.html">Nestable</a></li>
                    <li><a  href="font_awesome.html">Font Awesome</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-cogs"></i>
                <span>Components</span>
                </a>
                <ul class="sub">
                    <li><a  href="grids.html">Grids</a></li>
                    <li><a  href="calendar.html">Calendar</a></li>
                    <li><a  href="gallery.html">Gallery</a></li>
                    <li><a  href="todo_list.html">Todo List</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-tasks"></i>
                <span>Form Stuff</span>
                </a>
                <ul class="sub">
                    <li><a  href="form_component.html">Form Components</a></li>
                    <li><a  href="advanced_form_components.html">Advanced Components</a></li>
                    <li><a  href="form_wizard.html">Form Wizard</a></li>
                    <li><a  href="form_validation.html">Form Validation</a></li>
                    <li><a  href="dropzone.html">Dropzone File Upload</a></li>
                    <li><a  href="inline_editor.html">Inline Editor</a></li>
                    <li><a  href="image_cropping.html">Image Cropping</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-th"></i>
                <span>Data Tables</span>
                </a>
                <ul class="sub">
                    <li><a  href="basic_table.html">Basic Table</a></li>
                    <li><a  href="responsive_table.html">Responsive Table</a></li>
                    <li><a  href="dynamic_table.html">Dynamic Table</a></li>
                    <li><a  href="advanced_table.html">Advanced Table</a></li>
                    <li><a  href="editable_table.html">Editable Table</a></li>
                </ul>
            </li>
            <li>
                <a  href="inbox.html">
                <i class="icon-envelope"></i>
                <span>Mail </span>
                <span class="label label-danger pull-right mail-info">2</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class=" icon-bar-chart"></i>
                <span>Charts</span>
                </a>
                <ul class="sub">
                    <li><a  href="morris.html">Morris</a></li>
                    <li><a  href="chartjs.html">Chartjs</a></li>
                    <li><a  href="flot_chart.html">Flot Charts</a></li>
                    <li><a  href="xchart.html">xChart</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-shopping-cart"></i>
                <span>Shop</span>
                </a>
                <ul class="sub">
                    <li><a  href="product_list.html">List View</a></li>
                    <li><a  href="product_details.html">Details View</a></li>
                </ul>
            </li>
            <li>
                <a href="google_maps.html" >
                <i class="icon-map-marker"></i>
                <span>Google Maps </span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-glass"></i>
                <span>Extra</span>
                </a>
                <ul class="sub">
                    <li><a  href="blank.html">Blank Page</a></li>
                    <li><a  href="lock_screen.html">Lock Screen</a></li>
                    <li><a  href="profile.html">Profile</a></li>
                    <li><a  href="invoice.html">Invoice</a></li>
                    <li><a  href="search_result.html">Search Result</a></li>
                    <li><a  href="404.html">404 Error</a></li>
                    <li><a  href="500.html">500 Error</a></li>
                </ul>
            </li>
            <li>
                <a  href="login.html">
                <i class="icon-user"></i>
                <span>Login Page</span>
                </a>
            </li>
            <!--multi level menu start-->
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-sitemap"></i>
                <span>Multi level Menu</span>
                </a>
                <ul class="sub">
                    <li><a  href="javascript:;">Menu Item 1</a></li>
                    <li class="sub-menu">
                        <a  href="boxed_page.html">Menu Item 2</a>
                        <ul class="sub">
                            <li><a  href="javascript:;">Menu Item 2.1</a></li>
                            <li class="sub-menu">
                                <a  href="javascript:;">Menu Item 3</a>
                                <ul class="sub">
                                    <li><a  href="javascript:;">Menu Item 3.1</a></li>
                                    <li><a  href="javascript:;">Menu Item 3.2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!--multi level menu end-->
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>

@elseif($user->hasRole('Mahasiswa'))
<aside>
    <div id="sidebar"  class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
            <li>
                <a class="active" href="{{URL('/')}}">
                <i class="icon-dashboard"></i>
                <span>Dashboard</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-user"></i>
                <span>Master Mahasiswa</span>
                </a>
                <ul class="sub">
                    <li><a  href="boxed_page.html">Boxed Page</a></li>
                    <li><a  href="horizontal_menu.html">Horizontal Menu</a></li>
                    <li><a  href="language_switch_bar.html">Language Switch Bar</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-book"></i>
                <span>Absensi</span>
                </a>
                <ul class="sub">
                    <li><a  href="general.html">General</a></li>
                    <li><a  href="buttons.html">Buttons</a></li>
                    <li><a  href="widget.html">Widget</a></li>
                    <li><a  href="slider.html">Slider</a></li>
                    <li><a  href="nestable.html">Nestable</a></li>
                    <li><a  href="font_awesome.html">Font Awesome</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-cogs"></i>
                <span>Components</span>
                </a>
                <ul class="sub">
                    <li><a  href="grids.html">Grids</a></li>
                    <li><a  href="calendar.html">Calendar</a></li>
                    <li><a  href="gallery.html">Gallery</a></li>
                    <li><a  href="todo_list.html">Todo List</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-tasks"></i>
                <span>Form Stuff</span>
                </a>
                <ul class="sub">
                    <li><a  href="form_component.html">Form Components</a></li>
                    <li><a  href="advanced_form_components.html">Advanced Components</a></li>
                    <li><a  href="form_wizard.html">Form Wizard</a></li>
                    <li><a  href="form_validation.html">Form Validation</a></li>
                    <li><a  href="dropzone.html">Dropzone File Upload</a></li>
                    <li><a  href="inline_editor.html">Inline Editor</a></li>
                    <li><a  href="image_cropping.html">Image Cropping</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-th"></i>
                <span>Data Tables</span>
                </a>
                <ul class="sub">
                    <li><a  href="basic_table.html">Basic Table</a></li>
                    <li><a  href="responsive_table.html">Responsive Table</a></li>
                    <li><a  href="dynamic_table.html">Dynamic Table</a></li>
                    <li><a  href="advanced_table.html">Advanced Table</a></li>
                    <li><a  href="editable_table.html">Editable Table</a></li>
                </ul>
            </li>
            <li>
                <a  href="inbox.html">
                <i class="icon-envelope"></i>
                <span>Mail </span>
                <span class="label label-danger pull-right mail-info">2</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class=" icon-bar-chart"></i>
                <span>Charts</span>
                </a>
                <ul class="sub">
                    <li><a  href="morris.html">Morris</a></li>
                    <li><a  href="chartjs.html">Chartjs</a></li>
                    <li><a  href="flot_chart.html">Flot Charts</a></li>
                    <li><a  href="xchart.html">xChart</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-shopping-cart"></i>
                <span>Shop</span>
                </a>
                <ul class="sub">
                    <li><a  href="product_list.html">List View</a></li>
                    <li><a  href="product_details.html">Details View</a></li>
                </ul>
            </li>
            <li>
                <a href="google_maps.html" >
                <i class="icon-map-marker"></i>
                <span>Google Maps </span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-glass"></i>
                <span>Extra</span>
                </a>
                <ul class="sub">
                    <li><a  href="blank.html">Blank Page</a></li>
                    <li><a  href="lock_screen.html">Lock Screen</a></li>
                    <li><a  href="profile.html">Profile</a></li>
                    <li><a  href="invoice.html">Invoice</a></li>
                    <li><a  href="search_result.html">Search Result</a></li>
                    <li><a  href="404.html">404 Error</a></li>
                    <li><a  href="500.html">500 Error</a></li>
                </ul>
            </li>
            <li>
                <a  href="login.html">
                <i class="icon-user"></i>
                <span>Login Page</span>
                </a>
            </li>
            <!--multi level menu start-->
            <li class="sub-menu">
                <a href="javascript:;" >
                <i class="icon-sitemap"></i>
                <span>Multi level Menu</span>
                </a>
                <ul class="sub">
                    <li><a  href="javascript:;">Menu Item 1</a></li>
                    <li class="sub-menu">
                        <a  href="boxed_page.html">Menu Item 2</a>
                        <ul class="sub">
                            <li><a  href="javascript:;">Menu Item 2.1</a></li>
                            <li class="sub-menu">
                                <a  href="javascript:;">Menu Item 3</a>
                                <ul class="sub">
                                    <li><a  href="javascript:;">Menu Item 3.1</a></li>
                                    <li><a  href="javascript:;">Menu Item 3.2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!--multi level menu end-->
        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
@endif




<!--sidebar end-->

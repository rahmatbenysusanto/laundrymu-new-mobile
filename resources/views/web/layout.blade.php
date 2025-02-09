<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords" content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>@yield('title') | LaundryMu APP</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets2/img/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets2/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-duotone-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-thin.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-solid.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-regular.css">
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-light.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('assets2/css/style.css') }}">
</head>
<body>

<div class="main-wrapper">
    <div class="header">
        <div class="header-left active">
            <a href="index.html" class="logo logo-normal">
                <img src="{{ asset('assets2/img/logo.png') }}" alt>
            </a>
            <a href="index.html" class="logo logo-white">
                <img src="{{ asset('assets2/img/logo-white.png') }}" alt>
            </a>
            <a href="index.html" class="logo-small">
                <img src="{{ asset('assets2/img/logo-small.png') }}" alt>
            </a>
            <a id="toggle_btn" href="javascript:void(0);">
                <i data-feather="chevrons-left" class="feather-16"></i>
            </a>
        </div>
        <a id="mobile_btn" class="mobile_btn" href="#sidebar">
            <span class="bar-icon">
            <span></span>
            <span></span>
            <span></span>
            </span>
        </a>
        <ul class="nav user-menu">
            <li class="nav-item nav-searchinputs">
                <div class="top-nav-search">
                    <a href="javascript:void(0);" class="responsive-search">
                        <i class="fa fa-search"></i>
                    </a>
                </div>
            </li>
            <li>
                <a class="nav-link select-store">
                  <span class="user-info">
                      <span class="user-letter">
                          <img src="{{ asset('assets2/img/store/store-01.png') }}" alt="Store Logo" class="img-fluid">
                      </span>
                      <span class="user-detail">
                        <span class="user-name">{{ Session::get('toko')->nama }}</span>
                      </span>
                  </span>
                </a>
            </li>
            <li class="nav-item nav-item-box">
                <a href="javascript:void(0);" id="btnFullscreen">
                    <i data-feather="maximize"></i>
                </a>
            </li>
            <li class="nav-item dropdown nav-item-box">
                <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                    <i data-feather="bell"></i><span class="badge rounded-pill">2</span>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="activities.html">
                                    <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                    <img alt src="">
                                    </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">{{ Session::get('nama') }}</span> added
                                                new task <span class="noti-title">Patient appointment booking</span>
                                            </p>
                                            <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="activities.html">
                                    <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                    <img alt src="">
                                    </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">Tarah Shropshire</span>
                                                changed the task name <span class="noti-title">Appointment booking
                                          with payment gateway</span>
                                            </p>
                                            <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="activities.html">
                                    <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                    <img alt src="">
                                    </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">Misty Tison</span>
                                                added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span>
                                            </p>
                                            <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="activities.html">
                                    <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                    <img alt src="">
                                    </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">Rolland Webber</span>
                                                completed task <span class="noti-title">Patient and Doctor video conferencing</span>
                                            </p>
                                            <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="activities.html">
                                    <div class="media d-flex">
                                    <span class="avatar flex-shrink-0">
                                    <img alt src="">
                                    </span>
                                        <div class="media-body flex-grow-1">
                                            <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span>
                                                added new task <span class="noti-title">Private chat module</span>
                                            </p>
                                            <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="activities.html">View all Notifications</a>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown has-arrow main-drop">
                <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                  <span class="user-info">
                  <span class="user-letter">
                  <img src="" alt class="img-fluid">
                  </span>
                  <span class="user-detail">
                  <span class="user-name">{{ Session::get('nama') }}</span>
                  <span class="user-role">Super Admin</span>
                  </span>
                  </span>
                </a>
                <div class="dropdown-menu menu-drop-user">
                    <div class="profilename">
                        <div class="profileset">
                           <span class="user-img">
                                <img src="" alt>
                                <span class="status online"></span>
                           </span>
                            <div class="profilesets">
                                <h6>John Smilga</h6>
                                <h5>Super Admin</h5>
                            </div>
                        </div>
                        <hr class="m-0">
                        <a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i> My Profile</a>
                        <a class="dropdown-item" href="general-settings.html"><i class="me-2" data-feather="settings"></i>Settings</a>
                        <hr class="m-0">
                        <a class="dropdown-item logout pb-0" href="signin.html"><img src="" class="me-2" alt="img">Logout</a>
                    </div>
                </div>
            </li>
        </ul>
        <div class="dropdown mobile-user-menu">
            <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="profile.html">My Profile</a>
                <a class="dropdown-item" href="general-settings.html">Settings</a>
                <a class="dropdown-item" href="signin.html">Logout</a>
            </div>
        </div>
    </div>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="submenu-open">
                        <h6 class="submenu-hdr">Menu</h6>
                        <ul>
                            <li class="{{ $title == 'dashboard' ? 'active' : '' }}">
                                <a href="{{ route('web.dashboard') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu-open">
                        <h6 class="submenu-hdr">Transaksi</h6>
                        <ul>
                            <li class="{{ $title == 'tambah transaksi' ? 'active' : '' }}">
                                <a href="{{ route('web.createTransaksi') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                                    <span>Buat Transaksi</span>
                                </a>
                            </li>
                            <li class="{{ $title == 'list transaksi' ? 'active' : '' }}">
                                <a href="{{ route('web.listTransaksi') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                                    <span>Daftar Transaksi</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu-open">
                        <h6 class="submenu-hdr">Laundry</h6>
                        <ul>
                            <li class="{{ $title == 'pelanggan' ? 'active' : '' }}">
                                <a href="{{ route('web.pelanggan') }}">
                                    <i data-feather="users"></i>
                                    <span>Daftar Pelanggan</span>
                                </a>
                            </li>
                            <li class="{{ $title == 'layanan' ? 'active' : '' }}">
                                <a href="{{ route('web.layanan') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-speaker"><rect x="4" y="2" width="16" height="20" rx="2" ry="2"></rect><circle cx="12" cy="14" r="4"></circle><line x1="12" y1="6" x2="12.01" y2="6"></line></svg>
                                    <span>Layanan</span>
                                </a>
                            </li>
                            <li class="{{ $title == 'diskon' ? 'active' : '' }}">
                                <a href="{{ route('web.diskon') }}">
                                    <i data-feather="tag"></i>
                                    <span>Kelola Diskon</span>
                                </a>
                            </li>
                            <li class="{{ $title == 'pembayaran' ? 'active' : '' }}">
                                <a href="{{ route('web.pembayaran') }}">
                                    <i data-feather="credit-card"></i>
                                    <span>Pembayaran</span>
                                </a>
                            </li>
                            <li class="{{ $title == 'parfum' ? 'active' : '' }}">
                                <a href="{{ route('web.parfum') }}">
                                    <i data-feather="wind"></i>
                                    <span>Parfum</span>
                                </a>
                            </li>
                            <li class="{{ $title == 'pengiriman' ? 'active' : '' }}">
                                <a href="{{ route('web.pengiriman') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
                                    <span>Pengiriman</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu-open">
                        <h6 class="submenu-hdr">Outlet</h6>
                        <ul>
                            <li class="{{ $title == 'outlet' ? 'active' : '' }}">
                                <a href="{{ route('web.outlet') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                    <span>Daftar Outlet</span>
                                </a>
                            </li>
                            <li class="{{ $title == 'historyPembayaran' ? 'active' : '' }}">
                                <a href="{{ route('web.historyPembayaran') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                    <span>Pembayaran Lisensi</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu-open">
                        <h6 class="submenu-hdr">Pegawai</h6>
                        <ul>
                            <li class="{{ $title == 'pegawai' ? 'active' : '' }}">
                                <a href="{{ route('web.pegawai') }}">
                                    <i data-feather="users"></i>
                                    <span>Daftar Pegawai</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu-open">
                        <h6 class="submenu-hdr">Inventory</h6>
                        <ul>
                            <li>
                                <a href="#">
                                    <i data-feather="users"></i>
                                    <span>Daftar Pelanggan</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu-open">
                        <h6 class="submenu-hdr">Laporan</h6>
                        <ul>
                            <li>
                                <a href="#">
                                    <i data-feather="users"></i>
                                    <span>Laporan Transaksi</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i data-feather="users"></i>
                                    <span>Laporan Layanan</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i data-feather="users"></i>
                                    <span>Laporan Pelanggan</span>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="submenu-open">
                        <h6 class="submenu-hdr">Pertanyaan</h6>
                        <ul>
                            <li>
                                <a href="#">
                                    <i data-feather="users"></i>
                                    <span>Daftar Pelanggan</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="sidebar collapsed-sidebar" id="collapsed-sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu-2" class="sidebar-menu sidebar-menu-three">
                <aside id="aside" class="ui-aside">
                    <ul class="tab nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="tablinks nav-link active" href="#home" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" role="tab" aria-selected="true">
                                <img src="" alt>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="tablinks nav-link" href="#messages" id="messages-tab" data-bs-toggle="tab" data-bs-target="#product" role="tab" aria-selected="false">
                                <img src="" alt>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="tablinks nav-link" href="#profile" id="profile-tab" data-bs-toggle="tab" data-bs-target="#sales" role="tab" aria-selected="false">
                                <img src="" alt>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="tablinks nav-link" href="#report" id="report-tab" data-bs-toggle="tab" data-bs-target="#purchase" role="tab" aria-selected="true">
                                <img src="" alt>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="tablinks nav-link" href="#set" id="set-tab" data-bs-toggle="tab" data-bs-target="#user" role="tab" aria-selected="true">
                                <img src="" alt>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="tablinks nav-link" href="#set2" id="set-tab2" data-bs-toggle="tab" data-bs-target="#employee" role="tab" aria-selected="true">
                                <img src="" alt>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="tablinks nav-link" href="#set3" id="set-tab3" data-bs-toggle="tab" data-bs-target="#report" role="tab" aria-selected="true">
                                <img src="" alt>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="tablinks nav-link" href="#set4" id="set-tab4" data-bs-toggle="tab" data-bs-target="#document" role="tab" aria-selected="true">
                                <i data-feather="file-minus"></i>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="tablinks nav-link" href="#set5" id="set-tab6" data-bs-toggle="tab" data-bs-target="#permission" role="tab" aria-selected="true">
                                <i data-feather="user"></i>
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="tablinks nav-link" href="#set6" id="set-tab5" data-bs-toggle="tab" data-bs-target="#settings" role="tab" aria-selected="true">
                                <i data-feather="settings"></i>
                            </a>
                        </li>
                    </ul>
                </aside>
                <div class="tab-content tab-content-four pt-2">
                    <ul class="tab-pane active" id="home" aria-labelledby="home-tab">
                        <li class="submenu">
                            <a href="javascript:void(0);" class="active"><span>Dashboard</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="index.html" class="active">Admin Dashboard</a></li>
                                <li><a href="sales-dashboard.html">Sales Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Application</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="chat.html">Chat</a></li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);"><span>Call</span><span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="video-call.html">Video Call</a></li>
                                        <li><a href="audio-call.html">Audio Call</a></li>
                                        <li><a href="call-history.html">Call History</a></li>
                                    </ul>
                                </li>
                                <li><a href="calendar.html">Calendar</a></li>
                                <li><a href="email.html">Email</a></li>
                                <li><a href="todo.html">To Do</a></li>
                                <li><a href="notes.html">Notes</a></li>
                                <li><a href="file-manager.html">File Manager</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="tab-pane" id="product" aria-labelledby="messages-tab">
                        <li><a href="product-list.html"><span>Products</span></a></li>
                        <li><a href="add-product.html"><span>Create Product</span></a></li>
                        <li><a href="expired-products.html"><span>Expired Products</span></a></li>
                        <li><a href="low-stocks.html"><span>Low Stocks</span></a></li>
                        <li><a href="category-list.html"><span>Category</span></a></li>
                        <li><a href="sub-categories.html"><span>Sub Category</span></a></li>
                        <li><a href="brand-list.html"><span>Brands</span></a></li>
                        <li><a href="units.html"><span>Units</span></a></li>
                        <li><a href="varriant-attributes.html"><span>Variant Attributes</span></a></li>
                        <li><a href="warranty.html"><span>Warranties</span></a></li>
                        <li><a href="barcode.html"><span>Print Barcode</span></a></li>
                        <li><a href="qrcode.html"><span>Print QR Code</span></a></li>
                    </ul>
                    <ul class="tab-pane" id="sales" aria-labelledby="profile-tab">
                        <li><a href="sales-list.html"><span>Sales</span></a></li>
                        <li><a href="invoice-report.html"><span>Invoices</span></a></li>
                        <li><a href="sales-returns.html"><span>Sales Return</span></a></li>
                        <li><a href="quotation-list.html"><span>Quotation</span></a></li>
                        <li><a href="pos.html"><span>POS</span></a></li>
                        <li><a href="coupons.html"><span>Coupons</span></a></li>
                    </ul>
                    <ul class="tab-pane" id="purchase" aria-labelledby="report-tab">
                        <li><a href="purchase-list.html"><span>Purchases</span></a></li>
                        <li><a href="purchase-order-report.html"><span>Purchase Order</span></a></li>
                        <li><a href="purchase-returns.html"><span>Purchase Return</span></a></li>
                        <li><a href="manage-stocks.html"><span>Manage Stock</span></a></li>
                        <li><a href="stock-adjustment.html"><span>Stock Adjustment</span></a></li>
                        <li><a href="stock-transfer.html"><span>Stock Transfer</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Expenses</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="expense-list.html">Expenses</a></li>
                                <li><a href="expense-category.html">Expense Category</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="tab-pane" id="user" aria-labelledby="set-tab">
                        <li><a href="customers.html"><span>Customers</span></a></li>
                        <li><a href="suppliers.html"><span>Suppliers</span></a></li>
                        <li><a href="store-list.html"><span>Stores</span></a></li>
                        <li><a href="warehouse.html"><span>Warehouses</span></a></li>
                    </ul>
                    <ul class="tab-pane" id="employee" aria-labelledby="set-tab2">
                        <li><a href="employees-grid.html"><span>Employees</span></a></li>
                        <li><a href="department-grid.html"><span>Departments</span></a></li>
                        <li><a href="designation.html"><span>Designation</span></a></li>
                        <li><a href="shift.html"><span>Shifts</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Attendence</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="attendance-employee.html">Employee Attendence</a></li>
                                <li><a href="attendance-admin.html">Admin Attendence</a></li>
                            </ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Leaves</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="leaves-admin.html">Admin Leaves</a></li>
                                <li><a href="leaves-employee.html">Employee Leaves</a></li>
                                <li><a href="leave-types.html">Leave Types</a></li>
                            </ul>
                        </li>
                        <li><a href="holidays.html"><span>Holidays</span></a></li>
                        <li class="submenu">
                            <a href="payroll-list.html"><span>Payroll</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="payroll-list.html">Employee Salary</a></li>
                                <li><a href="payslip.html">Payslip</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="tab-pane" id="report" aria-labelledby="set-tab3">
                        <li><a href="sales-report.html"><span>Sales Report</span></a></li>
                        <li><a href="purchase-report.html"><span>Purchase report</span></a></li>
                        <li><a href="inventory-report.html"><span>Inventory Report</span></a></li>
                        <li><a href="invoice-report.html"><span>Invoice Report</span></a></li>
                        <li><a href="supplier-report.html"><span>Supplier Report</span></a></li>
                        <li><a href="customer-report.html"><span>Customer Report</span></a></li>
                        <li><a href="expense-report.html"><span>Expense Report</span></a></li>
                        <li><a href="income-report.html"><span>Income Report</span></a></li>
                        <li><a href="tax-reports.html"><span>Tax Report</span></a></li>
                        <li><a href="profit-and-loss.html"><span>Profit & Loss</span></a></li>
                    </ul>
                    <ul class="tab-pane" id="permission" aria-labelledby="set-tab4">
                        <li><a href="users.html"><span>Users</span></a></li>
                        <li><a href="roles-permissions.html"><span>Roles & Permissions</span></a></li>
                        <li><a href="delete-account.html"><span>Delete Account Request</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <span>Base UI</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="ui-alerts.html">Alerts</a></li>
                                <li><a href="ui-accordion.html">Accordion</a></li>
                                <li><a href="ui-avatar.html">Avatar</a></li>
                                <li><a href="ui-badges.html">Badges</a></li>
                                <li><a href="ui-borders.html">Border</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-buttons-group.html">Button Group</a></li>
                                <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                                <li><a href="ui-cards.html">Card</a></li>
                                <li><a href="ui-carousel.html">Carousel</a></li>
                                <li><a href="ui-colors.html">Colors</a></li>
                                <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>
                                <li><a href="ui-images.html">Images</a></li>
                                <li><a href="ui-lightbox.html">Lightbox</a></li>
                                <li><a href="ui-media.html">Media</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-offcanvas.html">Offcanvas</a></li>
                                <li><a href="ui-pagination.html">Pagination</a></li>
                                <li><a href="ui-popovers.html">Popovers</a></li>
                                <li><a href="ui-progress.html">Progress</a></li>
                                <li><a href="ui-placeholders.html">Placeholders</a></li>
                                <li><a href="ui-rangeslider.html">Range Slider</a></li>
                                <li><a href="ui-spinner.html">Spinner</a></li>
                                <li><a href="ui-sweetalerts.html">Sweet Alerts</a></li>
                                <li><a href="ui-nav-tabs.html">Tabs</a></li>
                                <li><a href="ui-toasts.html">Toasts</a></li>
                                <li><a href="ui-tooltips.html">Tooltips</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-video.html">Video</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <span>Advanced UI</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li><a href="ui-ribbon.html">Ribbon</a></li>
                                <li><a href="ui-clipboard.html">Clipboard</a></li>
                                <li><a href="ui-drag-drop.html">Drag & Drop</a></li>
                                <li><a href="ui-rangeslider.html">Range Slider</a></li>
                                <li><a href="ui-rating.html">Rating</a></li>
                                <li><a href="ui-text-editor.html">Text Editor</a></li>
                                <li><a href="ui-counter.html">Counter</a></li>
                                <li><a href="ui-scrollbar.html">Scrollbar</a></li>
                                <li><a href="ui-stickynote.html">Sticky Note</a></li>
                                <li><a href="ui-timeline.html">Timeline</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Charts</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="chart-apex.html">Apex Charts</a></li>
                                <li><a href="chart-c3.html">Chart C3</a></li>
                                <li><a href="chart-js.html">Chart Js</a></li>
                                <li><a href="chart-morris.html">Morris Charts</a></li>
                                <li><a href="chart-flot.html">Flot Charts</a></li>
                                <li><a href="chart-peity.html">Peity Charts</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Icons</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                <li><a href="icon-feather.html">Feather Icons</a></li>
                                <li><a href="icon-ionic.html">Ionic Icons</a></li>
                                <li><a href="icon-material.html">Material Icons</a></li>
                                <li><a href="icon-pe7.html">Pe7 Icons</a></li>
                                <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
                                <li><a href="icon-themify.html">Themify Icons</a></li>
                                <li><a href="icon-weather.html">Weather Icons</a></li>
                                <li><a href="icon-typicon.html">Typicon Icons</a></li>
                                <li><a href="icon-flag.html">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);">
                                <span>Forms</span><span class="menu-arrow"></span>
                            </a>
                            <ul>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">Form Elements<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="form-basic-inputs.html">Basic Inputs</a></li>
                                        <li><a href="form-checkbox-radios.html">Checkbox & Radios</a></li>
                                        <li><a href="form-input-groups.html">Input Groups</a></li>
                                        <li><a href="form-grid-gutters.html">Grid & Gutters</a></li>
                                        <li><a href="form-select.html">Form Select</a></li>
                                        <li><a href="form-mask.html">Input Masks</a></li>
                                        <li><a href="form-fileupload.html">File Uploads</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">Layouts<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="form-horizontal.html">Horizontal Form</a></li>
                                        <li><a href="form-vertical.html">Vertical Form</a></li>
                                        <li><a href="form-floating-labels.html">Floating Labels</a></li>
                                    </ul>
                                </li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-select2.html">Select2</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Tables</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="tables-basic.html">Basic Tables </a></li>
                                <li><a href="data-tables.html">Data Table </a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="tab-pane" id="document" aria-labelledby="set-tab5">
                        <li><a href="profile.html"><span>Profile</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Authentication</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">Login<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="signin.html">Cover</a></li>
                                        <li><a href="signin-2.html">Illustration</a></li>
                                        <li><a href="signin-3.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">Register<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="register.html">Cover</a></li>
                                        <li><a href="register-2.html">Illustration</a></li>
                                        <li><a href="register-3.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">Forgot Password<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="forgot-password.html">Cover</a></li>
                                        <li><a href="forgot-password-2.html">Illustration</a></li>
                                        <li><a href="forgot-password-3.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">Reset Password<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="reset-password.html">Cover</a></li>
                                        <li><a href="reset-password-2.html">Illustration</a></li>
                                        <li><a href="reset-password-3.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">Email Verification<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="email-verification.html">Cover</a></li>
                                        <li><a href="email-verification-2.html">Illustration</a></li>
                                        <li><a href="email-verification-3.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">2 Step Verification<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="two-step-verification.html">Cover</a></li>
                                        <li><a href="two-step-verification-2.html">Illustration</a></li>
                                        <li><a href="two-step-verification-3.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li><a href="lock-screen.html">Lock Screen</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Error Pages</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="error-404.html">404 Error </a></li>
                                <li><a href="error-500.html">500 Error </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Places</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="countries.html">Countries</a></li>
                                <li><a href="states.html">States</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="blank-page.html"><span>Blank Page</span> </a>
                        </li>
                        <li>
                            <a href="coming-soon.html"><span>Coming Soon</span> </a>
                        </li>
                        <li>
                            <a href="under-maintenance.html"><span>Under Maintenance</span> </a>
                        </li>
                    </ul>
                    <ul class="tab-pane" id="settings" aria-labelledby="set-tab6">
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>General Settings</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="general-settings.html">Profile</a></li>
                                <li><a href="security-settings.html">Security</a></li>
                                <li><a href="notification.html">Notifications</a></li>
                                <li><a href="connected-apps.html">Connected Apps</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Website Settings</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="system-settings.html">System Settings</a></li>
                                <li><a href="company-settings.html">Company Settings </a></li>
                                <li><a href="localization-settings.html">Localization</a></li>
                                <li><a href="prefixes.html">Prefixes</a></li>
                                <li><a href="preference.html">Preference</a></li>
                                <li><a href="appearance.html">Appearance</a></li>
                                <li><a href="social-authentication.html">Social Authentication</a></li>
                                <li><a href="language-settings.html">Language</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>App Settings</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="invoice-settings.html">Invoice</a></li>
                                <li><a href="printer-settings.html">Printer</a></li>
                                <li><a href="pos-settings.html">POS</a></li>
                                <li><a href="custom-fields.html">Custom Fields</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>System Settings</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="email-settings.html">Email</a></li>
                                <li><a href="sms-gateway.html">SMS Gateways</a></li>
                                <li><a href="otp-settings.html">OTP</a></li>
                                <li><a href="gdpr-settings.html">GDPR Cookies</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Financial Settings</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="payment-gateway-settings.html">Payment Gateway</a></li>
                                <li><a href="bank-settings-grid.html">Bank Accounts</a></li>
                                <li><a href="tax-rates.html">Tax Rates</a></li>
                                <li><a href="currency-settings.html">Currencies</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Other Settings</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="storage-settings.html">Storage</a></li>
                                <li><a href="ban-ip-address.html">Ban IP Address</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);"><span>Documentation</span></a></li>
                        <li><a href="javascript:void(0);"><span>Changelog v2.0.7</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="javascript:void(0);">Level 1.1</a></li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">Level 1.2<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Level 2.1</a></li>
                                        <li class="submenu submenu-two submenu-three">
                                            <a href="javascript:void(0);">Level 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
                                            <ul>
                                                <li><a href="javascript:void(0);">Level 3.1</a></li>
                                                <li><a href="javascript:void(0);">Level 3.2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="sidebar horizontal-sidebar">
        <div id="sidebar-menu-3" class="sidebar-menu">
            <ul class="nav">
                <li class="submenu">
                    <a href="index.html" class="active subdrop"><i data-feather="grid"></i><span> Main Menu</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);" class="active subdrop"><span>Dashboard</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="index.html" class="active">Admin Dashboard</a></li>
                                <li><a href="sales-dashboard.html">Sales Dashboard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Application</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="chat.html">Chat</a></li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);"><span>Call</span><span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="video-call.html">Video Call</a></li>
                                        <li><a href="audio-call.html">Audio Call</a></li>
                                        <li><a href="call-history.html">Call History</a></li>
                                    </ul>
                                </li>
                                <li><a href="calendar.html">Calendar</a></li>
                                <li><a href="email.html">Email</a></li>
                                <li><a href="todo.html">To Do</a></li>
                                <li><a href="notes.html">Notes</a></li>
                                <li><a href="file-manager.html">File Manager</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="" alt="img"><span> Inventory
                     </span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="product-list.html"><span>Products</span></a></li>
                        <li><a href="add-product.html"><span>Create Product</span></a></li>
                        <li><a href="expired-products.html"><span>Expired Products</span></a></li>
                        <li><a href="low-stocks.html"><span>Low Stocks</span></a></li>
                        <li><a href="category-list.html"><span>Category</span></a></li>
                        <li><a href="sub-categories.html"><span>Sub Category</span></a></li>
                        <li><a href="brand-list.html"><span>Brands</span></a></li>
                        <li><a href="units.html"><span>Units</span></a></li>
                        <li><a href="varriant-attributes.html"><span>Variant Attributes</span></a></li>
                        <li><a href="warranty.html"><span>Warranties</span></a></li>
                        <li><a href="barcode.html"><span>Print Barcode</span></a></li>
                        <li><a href="qrcode.html"><span>Print QR Code</span></a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="" alt="img"><span>Sales &amp; Purchase</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Sales</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="sales-list.html"><span>Sales</span></a></li>
                                <li><a href="invoice-report.html"><span>Invoices</span></a></li>
                                <li><a href="sales-returns.html"><span>Sales Return</span></a></li>
                                <li><a href="quotation-list.html"><span>Quotation</span></a></li>
                                <li><a href="pos.html"><span>POS</span></a></li>
                                <li><a href="coupons.html"><span>Coupons</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Purchase</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="purchase-list.html"><span>Purchases</span></a></li>
                                <li><a href="purchase-order-report.html"><span>Purchase Order</span></a></li>
                                <li><a href="purchase-returns.html"><span>Purchase Return</span></a></li>
                                <li><a href="manage-stocks.html"><span>Manage Stock</span></a></li>
                                <li><a href="stock-adjustment.html"><span>Stock Adjustment</span></a></li>
                                <li><a href="stock-transfer.html"><span>Stock Transfer</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Expenses</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="expense-list.html">Expenses</a></li>
                                <li><a href="expense-category.html">Expense Category</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="" alt="img"><span>User Management</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>People</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="customers.html"><span>Customers</span></a></li>
                                <li><a href="suppliers.html"><span>Suppliers</span></a></li>
                                <li><a href="store-list.html"><span>Stores</span></a></li>
                                <li><a href="warehouse.html"><span>Warehouses</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Roles &amp; Permissions</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="roles-permissions.html"><span>Roles & Permissions</span></a></li>
                                <li><a href="delete-account.html"><span>Delete Account Request</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Base UI</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="ui-alerts.html">Alerts</a></li>
                                <li><a href="ui-accordion.html">Accordion</a></li>
                                <li><a href="ui-avatar.html">Avatar</a></li>
                                <li><a href="ui-badges.html">Badges</a></li>
                                <li><a href="ui-borders.html">Border</a></li>
                                <li><a href="ui-buttons.html">Buttons</a></li>
                                <li><a href="ui-buttons-group.html">Button Group</a></li>
                                <li><a href="ui-breadcrumb.html">Breadcrumb</a></li>
                                <li><a href="ui-cards.html">Card</a></li>
                                <li><a href="ui-carousel.html">Carousel</a></li>
                                <li><a href="ui-colors.html">Colors</a></li>
                                <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                <li><a href="ui-grid.html">Grid</a></li>
                                <li><a href="ui-images.html">Images</a></li>
                                <li><a href="ui-lightbox.html">Lightbox</a></li>
                                <li><a href="ui-media.html">Media</a></li>
                                <li><a href="ui-modals.html">Modals</a></li>
                                <li><a href="ui-offcanvas.html">Offcanvas</a></li>
                                <li><a href="ui-pagination.html">Pagination</a></li>
                                <li><a href="ui-popovers.html">Popovers</a></li>
                                <li><a href="ui-progress.html">Progress</a></li>
                                <li><a href="ui-placeholders.html">Placeholders</a></li>
                                <li><a href="ui-rangeslider.html">Range Slider</a></li>
                                <li><a href="ui-spinner.html">Spinner</a></li>
                                <li><a href="ui-sweetalerts.html">Sweet Alerts</a></li>
                                <li><a href="ui-nav-tabs.html">Tabs</a></li>
                                <li><a href="ui-toasts.html">Toasts</a></li>
                                <li><a href="ui-tooltips.html">Tooltips</a></li>
                                <li><a href="ui-typography.html">Typography</a></li>
                                <li><a href="ui-video.html">Video</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Advanced UI</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="ui-ribbon.html">Ribbon</a></li>
                                <li><a href="ui-clipboard.html">Clipboard</a></li>
                                <li><a href="ui-drag-drop.html">Drag & Drop</a></li>
                                <li><a href="ui-rangeslider.html">Range Slider</a></li>
                                <li><a href="ui-rating.html">Rating</a></li>
                                <li><a href="ui-text-editor.html">Text Editor</a></li>
                                <li><a href="ui-counter.html">Counter</a></li>
                                <li><a href="ui-scrollbar.html">Scrollbar</a></li>
                                <li><a href="ui-stickynote.html">Sticky Note</a></li>
                                <li><a href="ui-timeline.html">Timeline</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Charts</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="chart-apex.html">Apex Charts</a></li>
                                <li><a href="chart-c3.html">Chart C3</a></li>
                                <li><a href="chart-js.html">Chart Js</a></li>
                                <li><a href="chart-morris.html">Morris Charts</a></li>
                                <li><a href="chart-flot.html">Flot Charts</a></li>
                                <li><a href="chart-peity.html">Peity Charts</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Primary Icons</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="icon-fontawesome.html">Fontawesome Icons</a></li>
                                <li><a href="icon-feather.html">Feather Icons</a></li>
                                <li><a href="icon-ionic.html">Ionic Icons</a></li>
                                <li><a href="icon-material.html">Material Icons</a></li>
                                <li><a href="icon-pe7.html">Pe7 Icons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Secondary Icons</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="icon-simpleline.html">Simpleline Icons</a></li>
                                <li><a href="icon-themify.html">Themify Icons</a></li>
                                <li><a href="icon-weather.html">Weather Icons</a></li>
                                <li><a href="icon-typicon.html">Typicon Icons</a></li>
                                <li><a href="icon-flag.html">Flag Icons</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span> Forms</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);"><span>Form Elements</span><span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="form-basic-inputs.html">Basic Inputs</a></li>
                                        <li><a href="form-checkbox-radios.html">Checkbox & Radios</a></li>
                                        <li><a href="form-input-groups.html">Input Groups</a></li>
                                        <li><a href="form-grid-gutters.html">Grid & Gutters</a></li>
                                        <li><a href="form-select.html">Form Select</a></li>
                                        <li><a href="form-mask.html">Input Masks</a></li>
                                        <li><a href="form-fileupload.html">File Uploads</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);"><span> Layouts</span><span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="form-horizontal.html">Horizontal Form</a></li>
                                        <li><a href="form-vertical.html">Vertical Form</a></li>
                                        <li><a href="form-floating-labels.html">Floating Labels</a></li>
                                    </ul>
                                </li>
                                <li><a href="form-validation.html">Form Validation</a></li>
                                <li><a href="form-select2.html">Select2</a></li>
                                <li><a href="form-wizard.html">Form Wizard</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Tables</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="tables-basic.html">Basic Tables </a></li>
                                <li><a href="data-tables.html">Data Table </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><i data-feather="user"></i><span>Profile</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="profile.html"><span>Profile</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Authentication</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">Login<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="signin.html">Cover</a></li>
                                        <li><a href="signin-2.html">Illustration</a></li>
                                        <li><a href="signin-3.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">Register<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="register.html">Cover</a></li>
                                        <li><a href="register-2.html">Illustration</a></li>
                                        <li><a href="register-3.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">Forgot Password<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="forgot-password.html">Cover</a></li>
                                        <li><a href="forgot-password-2.html">Illustration</a></li>
                                        <li><a href="forgot-password-3.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">Reset Password<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="reset-password.html">Cover</a></li>
                                        <li><a href="reset-password-2.html">Illustration</a></li>
                                        <li><a href="reset-password-3.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">Email Verification<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="email-verification.html">Cover</a></li>
                                        <li><a href="email-verification-2.html">Illustration</a></li>
                                        <li><a href="email-verification-3.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">2 Step Verification<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="two-step-verification.html">Cover</a></li>
                                        <li><a href="two-step-verification-2.html">Illustration</a></li>
                                        <li><a href="two-step-verification-3.html">Basic</a></li>
                                    </ul>
                                </li>
                                <li><a href="lock-screen.html">Lock Screen</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Pages</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="error-404.html">404 Error </a></li>
                                <li><a href="error-500.html">500 Error </a></li>
                                <li><a href="blank-page.html"><span>Blank Page</span> </a></li>
                                <li><a href="coming-soon.html"><span>Coming Soon</span> </a></li>
                                <li><a href="under-maintenance.html"><span>Under Maintenance</span> </a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Places</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="countries.html">Countries</a></li>
                                <li><a href="states.html">States</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Employees</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="employees-grid.html"><span>Employees</span></a></li>
                                <li><a href="department-grid.html"><span>Departments</span></a></li>
                                <li><a href="designation.html"><span>Designation</span></a></li>
                                <li><a href="shift.html"><span>Shifts</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Attendence</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="attendance-employee.html">Employee Attendence</a></li>
                                <li><a href="attendance-admin.html">Admin Attendence</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Leaves &amp; Holidays</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="leaves-admin.html">Admin Leaves</a></li>
                                <li><a href="leaves-employee.html">Employee Leaves</a></li>
                                <li><a href="leave-types.html">Leave Types</a></li>
                                <li><a href="holidays.html"><span>Holidays</span></a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="payroll-list.html"><span>Payroll</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="payroll-list.html">Employee Salary</a></li>
                                <li><a href="payslip.html">Payslip</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="" alt="img"><span>Reports</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li><a href="sales-report.html"><span>Sales Report</span></a></li>
                        <li><a href="purchase-report.html"><span>Purchase report</span></a></li>
                        <li><a href="inventory-report.html"><span>Inventory Report</span></a></li>
                        <li><a href="invoice-report.html"><span>Invoice Report</span></a></li>
                        <li><a href="supplier-report.html"><span>Supplier Report</span></a></li>
                        <li><a href="customer-report.html"><span>Customer Report</span></a></li>
                        <li><a href="expense-report.html"><span>Expense Report</span></a></li>
                        <li><a href="income-report.html"><span>Income Report</span></a></li>
                        <li><a href="tax-reports.html"><span>Tax Report</span></a></li>
                        <li><a href="profit-and-loss.html"><span>Profit & Loss</span></a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="javascript:void(0);"><img src="" alt="img"><span> Settings</span> <span class="menu-arrow"></span></a>
                    <ul>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>General Settings</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="general-settings.html">Profile</a></li>
                                <li><a href="security-settings.html">Security</a></li>
                                <li><a href="notification.html">Notifications</a></li>
                                <li><a href="connected-apps.html">Connected Apps</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Website Settings</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="system-settings.html">System Settings</a></li>
                                <li><a href="company-settings.html">Company Settings </a></li>
                                <li><a href="localization-settings.html">Localization</a></li>
                                <li><a href="prefixes.html">Prefixes</a></li>
                                <li><a href="preference.html">Preference</a></li>
                                <li><a href="appearance.html">Appearance</a></li>
                                <li><a href="social-authentication.html">Social Authentication</a></li>
                                <li><a href="language-settings.html">Language</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>App Settings</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="invoice-settings.html">Invoice</a></li>
                                <li><a href="printer-settings.html">Printer</a></li>
                                <li><a href="pos-settings.html">POS</a></li>
                                <li><a href="custom-fields.html">Custom Fields</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>System Settings</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="email-settings.html">Email</a></li>
                                <li><a href="sms-gateway.html">SMS Gateways</a></li>
                                <li><a href="otp-settings.html">OTP</a></li>
                                <li><a href="gdpr-settings.html">GDPR Cookies</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Financial Settings</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="payment-gateway-settings.html">Payment Gateway</a></li>
                                <li><a href="bank-settings-grid.html">Bank Accounts</a></li>
                                <li><a href="tax-rates.html">Tax Rates</a></li>
                                <li><a href="currency-settings.html">Currencies</a></li>
                            </ul>
                        </li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Other Settings</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="storage-settings.html">Storage</a></li>
                                <li><a href="ban-ip-address.html">Ban IP Address</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0);"><span>Documentation</span></a></li>
                        <li><a href="javascript:void(0);"><span>Changelog v2.0.7</span></a></li>
                        <li class="submenu">
                            <a href="javascript:void(0);"><span>Multi Level</span><span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="javascript:void(0);">Level 1.1</a></li>
                                <li class="submenu submenu-two">
                                    <a href="javascript:void(0);">Level 1.2<span class="menu-arrow inside-submenu"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);">Level 2.1</a></li>
                                        <li class="submenu submenu-two submenu-three">
                                            <a href="javascript:void(0);">Level 2.2<span class="menu-arrow inside-submenu inside-submenu-two"></span></a>
                                            <ul>
                                                <li><a href="javascript:void(0);">Level 3.1</a></li>
                                                <li><a href="javascript:void(0);">Level 3.2</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    <div class="page-wrapper">
        <div class="content">
            @yield('content')
        </div>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script src="{{ asset('assets2/js/feather.min.js') }}"></script>
<script src="{{ asset('assets2/js/jquery.slimscroll.min.js') }}"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
<script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.min.js"></script>
<script src="{{ asset('assets2/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets2/plugins/apexchart/apexcharts.min.js') }}"></script>
<script src="{{ asset('assets2/plugins/apexchart/chart-data.js') }}"></script>
<script src="{{ asset('assets2/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
<script src="{{ asset('assets2/plugins/sweetalert/sweetalerts.min.js') }}"></script>
<script src="{{ asset('assets2/js/script.js') }}"></script>

@yield('js')

@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Berhasil!',
            text: '{{ session('success') }}',
            showConfirmButton: true
        })
    </script>
@endif

@if (session('error'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Gagal!',
            text: '{{ session('error') }}',
            showConfirmButton: true
        })
    </script>
@endif

</body>
</html>


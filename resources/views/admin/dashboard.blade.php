@extends('../layouts.app')

@section('content')

    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->

        <div class="page-header">
          <div class="header-wrapper row m-0">
            <form class="form-inline search-full col" action="#" method="get">
              <div class="form-group w-100">
                <div class="Typeahead Typeahead--twitterUsers">
                  <div class="u-posRelative">
                    <input class="demo-input Typeahead-input form-control-plaintext w-100" type="text" placeholder="Search Cuba .." name="q" title="" autofocus>
                    <div class="spinner-border Typeahead-spinner" role="status"><span class="sr-only">Loading...</span></div><i class="close-search" data-feather="x"></i>
                  </div>
                  <div class="Typeahead-menu"></div>
                </div>
              </div>
            </form>
            <div class="header-logo-wrapper col-auto p-0">
              <div class="logo-wrapper"><a href="index.html"><img class="img-fluid" src="{{ asset('assets/images/logo/logo-1.png') }}" alt=""></a></div>
              <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
            </div>
            <div class="nav-right col-8 pull-right right-header p-0">
              <ul class="nav-menus">
                <li><span class="header-search"><i data-feather="search"></i></span></li>
                <li class="onhover-dropdown">
                  <div class="notification-box"><i data-feather="bell"> </i><span class="badge rounded-pill badge-secondary">4 </span></div>
                  <div class="onhover-show-div notification-dropdown">
                    <h6 class="f-18 mb-0 dropdown-title">Notitications                               </h6>
                    <ul>
                      <li class="b-l-primary border-4">
                        <p>Delivery processing <span class="font-danger">10 min.</span></p>
                      </li>
                      <li class="b-l-success border-4">
                        <p>Order Complete<span class="font-success">1 hr</span></p>
                      </li>
                      <li class="b-l-info border-4">
                        <p>Tickets Generated<span class="font-info">3 hr</span></p>
                      </li>
                      <li class="b-l-warning border-4">
                        <p>Delivery Complete<span class="font-warning">6 hr</span></p>
                      </li>
                      <li><a class="f-w-700" href="#">Check all</a></li>
                    </ul>
                  </div>
                </li>
                <li class="onhover-dropdown">
                  <div class="notification-box"><i data-feather="star"></i></div>
                  <div class="onhover-show-div bookmark-flip">
                    <div class="flip-card">
                      <div class="flip-card-inner">
                        <div class="front">
                          <h6 class="f-18 mb-0 dropdown-title">Bookmark</h6>
                          <ul class="bookmark-dropdown">
                            <li>
                              <div class="row">
                                <div class="col-4 text-center">
                                  <div class="bookmark-content">
                                    <div class="bookmark-icon"><i data-feather="file-text"></i></div><span>Forms</span>
                                  </div>
                                </div>
                                <div class="col-4 text-center">
                                  <div class="bookmark-content">
                                    <div class="bookmark-icon"><i data-feather="user"></i></div><span>Profile</span>
                                  </div>
                                </div>
                                <div class="col-4 text-center">
                                  <div class="bookmark-content">
                                    <div class="bookmark-icon"><i data-feather="server"></i></div><span>Tables</span>
                                  </div>
                                </div>
                              </div>
                            </li>
                            <li class="text-center"><a class="flip-btn f-w-700" id="flip-btn" href="javascript:void(0)">Add New Bookmark</a></li>
                          </ul>
                        </div>
                        <div class="back">
                          <ul>
                            <li>
                              <div class="bookmark-dropdown flip-back-content">
                                <input type="text" placeholder="search...">
                              </div>
                            </li>
                            <li><a class="f-w-700 d-block flip-back" id="flip-back" href="javascript:void(0)">Back</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="cart-nav onhover-dropdown">
                  <div class="cart-box"><i data-feather="shopping-cart"></i><span class="badge rounded-pill badge-primary">2</span></div>
                  <div class="cart-dropdown onhover-show-div">
                    <h6 class="f-18 mb-0 dropdown-title">Cart</h6>
                    <ul>
                      <li>
                        <div class="media"><img class="img-fluid b-r-5 me-3 img-60" src="../assets/images/other-images/cart-img.jpg" alt="">
                          <div class="media-body"><span>Furniture Chair for Home</span>
                            <div class="qty-box">
                              <div class="input-group"><span class="input-group-prepend">
                                  <button class="btn quantity-left-minus" type="button" data-type="minus" data-field="">-</button></span>
                                <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                                  <button class="btn quantity-right-plus" type="button" data-type="plus" data-field="">+</button></span>
                              </div>
                            </div>
                            <h6 class="font-primary">$500</h6>
                          </div>
                          <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                        </div>
                      </li>
                      <li>
                        <div class="media"><img class="img-fluid b-r-5 me-3 img-60" src="../assets/images/other-images/cart-img.jpg" alt="">
                          <div class="media-body"><span>Furniture Chair for Home</span>
                            <div class="qty-box">
                              <div class="input-group"><span class="input-group-prepend">
                                  <button class="btn quantity-left-minus" type="button" data-type="minus" data-field="">-</button></span>
                                <input class="form-control input-number" type="text" name="quantity" value="1"><span class="input-group-prepend">
                                  <button class="btn quantity-right-plus" type="button" data-type="plus" data-field="">+</button></span>
                              </div>
                            </div>
                            <h6 class="font-primary">$500.00</h6>
                          </div>
                          <div class="close-circle"><a class="bg-danger" href="#"><i data-feather="x"></i></a></div>
                        </div>
                      </li>
                      <li class="total">
                        <h6 class="mb-0">Order Total : <span class="f-right">$1000.00</span></h6>
                      </li>
                      <li class="text-center"><a class="d-block mb-3 view-cart f-w-700" href="cart.html">Go to your cart</a><a class="btn btn-primary view-checkout" href="checkout.html">Checkout</a></li>
                    </ul>
                  </div>
                </li>
                <li class="onhover-dropdown"><i data-feather="message-square"></i>
                  <div class="chat-dropdown onhover-show-div">
                    <h6 class="f-18 mb-0 dropdown-title">Messages</h6>
                    <ul class="py-0">
                      <li>
                        <div class="media"><img class="img-fluid b-r-5 me-2" src="../assets/images/user/1.jpg" alt="">
                          <div class="media-body">
                            <h6>Teressa</h6>
                            <p>Reference site about Lorem Ipsum, give information on its origins.</p>
                            <p class="f-8 font-primary mb-0">3 hours ago</p>
                          </div><span class="badge rounded-circle badge-primary">2</span>
                        </div>
                      </li>
                      <li>
                        <div class="media"><img class="img-fluid b-r-5 me-2" src="../assets/images/user/2.jpg" alt="">
                          <div class="media-body">
                            <h6>Kori Thomas</h6>
                            <p>Lorem Ipsum is simply dummy give information on its origins....</p>
                            <p class="f-8 font-primary mb-0">1 hr ago</p>
                          </div><span class="badge rounded-circle badge-primary">2</span>
                        </div>
                      </li>
                      <li>
                        <div class="media"><img class="img-fluid b-r-5 me-2" src="../assets/images/user/14.png" alt="">
                          <div class="media-body">
                            <h6>Ain Chavez</h6>
                            <p>Lorem Ipsum is simply dummy...</p>
                            <p class="f-8 font-primary mb-0">32 mins ago</p>
                          </div><span class="badge rounded-circle badge-primary">2</span>
                        </div>
                      </li>
                      <li class="text-center"> <a class="f-w-700" href="#">View All     </a></li>
                    </ul>
                  </div>
                </li>
                <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
                <li class="profile-nav onhover-dropdown p-0 me-0">
                  <div class="media profile-media"><img class="b-r-10" src="../assets/images/dashboard/profile.jpg" alt="">
                    <div class="media-body"><span>{{ Auth::user()->name}}</span>
                      <p class="mb-0 font-roboto">{{ Auth::user()->id }} <i class="middle fa fa-angle-down"></i></p>
                    </div>

                  </div>
                  <ul class="profile-dropdown onhover-show-div">
                    <li><a href="#"><i data-feather="user"></i><span>Account </span></a></li>
                    <li><a href="#"><i data-feather="mail"></i><span>Inbox</span></a></li>
                    <li><a href="#"><i data-feather="file-text"></i><span>Taskboard</span></a></li>
                    <li><a href="#"><i data-feather="settings"></i><span>Settings</span></a></li>
                    <li><a href="{{ route('logout') }}"><i data-feather="log-in"> </i><span>Log Out</span></a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <script class="result-template" type="text/x-handlebars-template">
              <div class="ProfileCard u-cf">
              <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
              <div class="ProfileCard-details">
              <div class="ProfileCard-realName">name</div>
              </div>
              </div>
            </script>
            <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
          </div>
        </div>
        <!-- Page Header Ends -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
          <!-- Page Sidebar Start-->
          <div class="sidebar-wrapper">
            <div>
              <div class="logo-wrapper"><a href="index.html"><img class="img-fluid for-light" src="{{ asset('assets/images/logo/logo-1.png') }}" alt=""><img class="img-fluid for-dark" src="{{ asset('assets/images/logo/logo-1.png') }}" alt=""></a>
                <div class="back-btn"><i class="fa fa-angle-left"></i></div>
                <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>
              </div>
              <div class="logo-icon-wrapper"><a href="index.html"><img class="img-fluid" src="../assets/images/logo/logo-icon.png" alt=""></a></div>
              <nav class="sidebar-main">
                <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
                <div id="sidebar-menu">
                  <ul class="sidebar-links" id="simple-bar">
                    <li class="sidebar-list"><a class="sidebar-link sidebar-title link-nav" href="support-ticket.html"><i data-feather="users"> </i><span>Support Ticket</span></a></li>
                    <li class="sidebar-list">
                      <a class="sidebar-link sidebar-title link-nav" href=""><span>Profile</span></a>
                    </li>
                    <li class="sidebar-list">
                      <a class="sidebar-link sidebar-title link-nav" href=""><span>Edit Profile</span></a>
                    </li>
                    <li class="sidebar-list">
                      <a class="sidebar-link sidebar-title link-nav" href=""><span>Delete Business</span></a>
                    </li>
                  </ul>
                </div>
                <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
              </nav>
            </div>
          </div>
          <!-- Page Sidebar Ends-->
          <div class="page-body">
            <div class="container-fluid">
              <div class="page-title">
                <div class="row">
                  <div class="col-6">
                    <h3>{{ Auth::user()->email }}</h3>
                  </div>
                  <div class="col-6">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="index.html">
                      <li data-feather="home"></i></a></li>
                      <li class="breadcrumb-item">Dashboard</li>
                      <li class="breadcrumb-item active">Default</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
              <div class="row second-chart-list third-news-update">
                <div class="col-xl-4 col-lg-12 xl-50 morning-sec box-col-12">
                  <div class="card profile-greeting">
                    <div class="card-body pb-0">
                      <div class="media">
                        <div class="media-body">
                          <div class="greeting-user">
                            <h4 class="f-w-600 font-primary" id="greeting">Good Morning</h4>
                            <p>Here whats happing in your account today</p>
                            <div class="whatsnew-btn"><a class="btn btn-primary">Whats New !</a></div>
                          </div>
                        </div>
                        <div class="badge-groups">
                          <div class="badge f-10"><i class="me-1" data-feather="clock"></i><span id="txt"></span></div>
                        </div>
                      </div>
                      <div class="cartoon"><img class="img-fluid" src="../assets/images/dashboard/cartoon.png" alt=""></div>
                    </div>
                  </div>
                </div>

                <div class="col-xl-4 col-lg-12 xl-50 calendar-sec box-col-6">
                  <div class="card gradient-primary o-hidden">
                    <div class="card-body">
                      <div class="setting-dot">
                        <div class="setting-bg-primary date-picker-setting pull-right">
                          <div class="icon-box"><i data-feather="more-horizontal"></i></div>
                        </div>
                      </div>
                      <div class="default-datepicker">
                        <div class="datepicker-here" data-language="en"></div>
                      </div><span class="default-dots-stay overview-dots full-width-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">                </span></span></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Container-fluid Ends-->
          </div>
          <!-- footer start-->
          <footer class="footer">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12 footer-copyright text-center">
                  <p class="mb-0">Copyright 2021 © MJBSoft  </p>
                </div>
              </div>
            </div>
          </footer>
        </div>
      </div>

@endsection

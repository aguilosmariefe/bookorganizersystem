<?php

          include_once("connection.php");
          $con = connection();

          $sql = "SELECT * from tbl_users";
          $books = $con->query($sql) or die ($con->error);
          $row = $books->fetch_assoc();

    

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Welcome - Organize Your Book</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="assets/css/app.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/book.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar sticky">
        <div class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg
									collapse-btn"> <i data-feather="align-justify"></i></a></li>
            <li><a href="#" class="nav-link nav-link-lg fullscreen-btn">
                <i data-feather="maximize"></i>
              </a></li>
          </ul>
        </div>
        <ul class="navbar-nav navbar-right">
          <li class="dropdown"><a href="#" data-toggle="dropdown"
              class="nav-link dropdown-toggle nav-link-lg nav-link-user"> <img alt="image" src="assets/img/users/user_1.jpg"
                class="user-img-radious-style"> <span class="d-sm-none d-lg-inline-block"></span></a>
            <div class="dropdown-menu dropdown-menu-right pullDown">
              <div class="dropdown-title">Hello Paige</div>
              <a href="profile.php" class="dropdown-item has-icon"> <i class="far
										fa-user"></i> Profile
              </a> 
              <div class="dropdown-divider"></div>
              <a href="auth-login.php" class="dropdown-item has-icon text-danger"> <i class="fas fa-sign-out-alt"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.php"> <img alt="image" src="assets/img/book-logo.png" class="header-logo" /> <h3
                class="logo-name">Organize Your Books</h3>
            </a>
          </div>
          <ul class="sidebar-menu">
            <li class="dropdown active">
              <a href="index.php" class="nav-link"><i class="fas fa-book-reader"></i><span>My Library</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="menu-toggle nav-link has-dropdown"><i
                  class="fas fa-bookmark"></i><span>Add to</span></a>
              <ul class="dropdown-menu">
                 <li><a class="nav-link" href="insert_book_info.php">My Book Lists</a></li>
              </ul>
            </li>


           <!-- side menu -->

          </ul>
        </aside>
      </div>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-body">
            <div class="row mt-sm-4">
              <div class="col-12 col-md-12 col-lg-4">
                <div class="card author-box">
                  <div class="card-body">
                  <?php do{ ?>
                    <div class="author-box-center">
                      <img alt="image" src="assets/img/users/user_1.jpg" class="rounded-circle author-box-picture">
                      <div class="clearfix"></div>
                      <div class="author-box-name">
                        <a href="#"><?php echo $row['name']; ?></a>
                      </div>
                      <div class="author-box-job"><?php echo $row['b_name']; ?></div>
                    </div>
                    <div class="text-center">
                      <div class="author-box-description">
                        <p><?php echo $row['bio']; ?>
                        </p>
                      </div>
                      <div class="mb-2 mt-3">
                        <div class="text-small font-weight-bold">Follow Paige On</div>
                      </div>
                      <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                        <i class="fab fa-twitter"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-github">
                        <i class="fab fa-github"></i>
                      </a>
                      <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                        <i class="fab fa-instagram"></i>
                      </a>
                      <div class="w-100 d-sm-none"></div>
                    </div>
                  </div>
                </div>
                <div class="card">
                  <div class="card-header">
                    <h4>Personal Details</h4>
                  </div>
                  <div class="card-body">
                    <div class="py-4">
                      <p class="clearfix">
                        <span class="float-left">
                          Birthday
                        </span>
                        <span class="float-right text-muted">
                        <?php echo $row['b_day']; ?>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Phone
                        </span>
                        <span class="float-right text-muted">
                        <?php echo $row['phone']; ?>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Mail
                        </span>
                        <span class="float-right text-muted">
                        <?php echo $row['mail']; ?>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Facebook
                        </span>
                        <span class="float-right text-muted">
                          <a href="#"><?php echo $row['fb_acc']; ?></a>
                        </span>
                      </p>
                      <p class="clearfix">
                        <span class="float-left">
                          Twitter
                        </span>
                        <span class="float-right text-muted">
                          <a href="#"><?php echo $row['twitter_acc']; ?></a>
                        </span>
                      </p>
                    </div>
                  </div>
                </div>
                <?php }while($row = $books->fetch_assoc()) ?>
                <div class="card">
                  <div class="card-header">
                    <h4>Status</h4>
                  </div>
                  <div class="card-body">
                    <ul class="list-unstyled user-progress list-unstyled-border list-unstyled-noborder">
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Want to Read</div>
                        </div>
                        <div class="media-progressbar p-t-10">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-primary" data-width="70%"></div>
                          </div>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Finished</div>
                        </div>
                        <div class="media-progressbar p-t-10">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-warning" data-width="80%"></div>
                          </div>
                        </div>
                      </li>
                      <li class="media">
                        <div class="media-body">
                          <div class="media-title">Currently Reading</div>
                        </div>
                        <div class="media-progressbar p-t-10">
                          <div class="progress" data-height="6">
                            <div class="progress-bar bg-green" data-width="48%"></div>
                          </div>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              
              <div class="col-12 col-md-12 col-lg-8">
                <div class="card">
                  <div class="card-header">
                    <h4>My Gallery</h4>
                  </div>
                  <div class="card-body">
                    <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/img/image-gallery/quotes/quotes_11.jpg" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="assets/img/image-gallery/quotes/quotes_11.jpg" alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/img/image-gallery/quotes/quote_2.jpg" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="assets/img/image-gallery/quotes/quote_2.jpg" alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/img/image-gallery/quotes/quote_3.jpg" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="assets/img/image-gallery/quotes/quote_3.jpg" alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/img/image-gallery/quotes/quote_4.jpg" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="assets/img/image-gallery/quotes/quote_4.jpg" alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/img/image-gallery/quotes/quote_5.jpg" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="assets/img/image-gallery/quotes/quote_5.jpg" alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/img/image-gallery/quotes/quote_6.jpg" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="assets/img/image-gallery/quotes/quote_6.jpg" alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/img/image-gallery/quotes/quote_7.jpg" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="assets/img/image-gallery/quotes/quote_7.jpg" alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/img/image-gallery/quotes/quotes_8.jpg" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="assets/img/image-gallery/quotes/quotes_8.jpg" alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/img/image-gallery/quotes/quotes_9.jpg" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="assets/img/image-gallery/quotes/quotes_9.jpg" alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/img/image-gallery/quotes/quotes_10.jpg" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="assets/img/image-gallery/quotes/quotes_10.jpg"
                            alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/img/image-gallery/quotes/quotes_11.jpg" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="assets/img/image-gallery/quotes/quotes_11.jpg"
                            alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/img/image-gallery/quotes/quotes_12.png" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="assets/img/image-gallery/quotes/quotes_12.png"
                            alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/img/image-gallery/quotes/quotes_13.png" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="assets/img/image-gallery/quotes/quotes_13.png"
                            alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/img/image-gallery/quotes/quotes_14.png" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="assets/img/image-gallery/quotes/quotes_14.png"
                            alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/img/image-gallery/quotes/quotes_15.jpg" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="assets/img/image-gallery/quotes/quotes_15.jpg"
                            alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/img/image-gallery/quotes/quotes_16.png" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="assets/img/image-gallery/quotes/quotes_16.png"
                            alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/img/image-gallery/quotes/quotes_17.jpg" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="assets/img/image-gallery/quotes/quotes_17.jpg"
                            alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/img/image-gallery/quotes/quotes_18.jpg" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="assets/img/image-gallery/quotes/quotes_18.jpg"
                            alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/img/image-gallery/quotes/quotes_19.jpg" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="assets/img/image-gallery/quotes/quotes_19.jpg"
                            alt="">
                        </a>
                      </div>
                      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <a href="assets/img/image-gallery/quotes/quotes_20.jpg" data-sub-html="Demo Description">
                          <img class="img-responsive thumbnail" src="assets/img/image-gallery/quotes/quotes_20.jpg"
                            alt="">
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

                        
                   
        </section>
        <div class="settingSidebar">
          <a href="javascript:void(0)" class="settingPanelToggle"> <i class="fa fa-spin fa-cog"></i>
          </a>
          <div class="settingSidebar-body ps-container ps-theme-default">
            <div class=" fade show active">
              <div class="setting-panel-header">Setting Panel
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Select Layout</h6>
                <div class="selectgroup layout-color w-50">
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="1" class="selectgroup-input-radio select-layout" checked>
                    <span class="selectgroup-button">Light</span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="value" value="2" class="selectgroup-input-radio select-layout">
                    <span class="selectgroup-button">Dark</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Sidebar Color</h6>
                <div class="selectgroup selectgroup-pills sidebar-color">
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="1" class="selectgroup-input select-sidebar">
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Light Sidebar"><i class="fas fa-sun"></i></span>
                  </label>
                  <label class="selectgroup-item">
                    <input type="radio" name="icon-input" value="2" class="selectgroup-input select-sidebar" checked>
                    <span class="selectgroup-button selectgroup-button-icon" data-toggle="tooltip"
                      data-original-title="Dark Sidebar"><i class="fas fa-moon"></i></span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <h6 class="font-medium m-b-10">Color Theme</h6>
                <div class="theme-setting-options">
                  <ul class="choose-theme list-unstyled mb-0">
                    <li title="white" class="active">
                      <div class="white"></div>
                    </li>
                    <li title="cyan">
                      <div class="cyan"></div>
                    </li>
                    <li title="black">
                      <div class="black"></div>
                    </li>
                    <li title="purple">
                      <div class="purple"></div>
                    </li>
                    <li title="orange">
                      <div class="orange"></div>
                    </li>
                    <li title="green">
                      <div class="green"></div>
                    </li>
                    <li title="red">
                      <div class="red"></div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="mini_sidebar_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Mini Sidebar</span>
                  </label>
                </div>
              </div>
              <div class="p-15 border-bottom">
                <div class="theme-setting-options">
                  <label class="m-b-0">
                    <input type="checkbox" name="custom-switch-checkbox" class="custom-switch-input"
                      id="sticky_header_setting">
                    <span class="custom-switch-indicator"></span>
                    <span class="control-label p-l-10">Sticky Header</span>
                  </label>
                </div>
              </div>
              <div class="mt-4 mb-4 p-3 align-center rt-sidebar-last-ele">
                <a href="#" class="btn btn-icon icon-left btn-primary btn-restore-theme">
                  <i class="fas fa-undo"></i> Restore Default
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

  <!-- General JS Scripts -->
  <script src="assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <script src="assets/bundles/apexcharts/apexcharts.min.js"></script>
  <!-- Page Specific JS File -->
  <script src="assets/js/page/index.js"></script>
  <!-- Template JS File -->
  <script src="assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="assets/js/custom.js"></script>
</body>


<!-- index.html  21 Nov 2019 03:47:04 GMT -->
</html>
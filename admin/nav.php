<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="../index.php">devent</a>
          <a class="sidebar-brand brand-logo-mini" href="../index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal"><?php echo $_SESSION['user']; ?></h5>
                  <!-- <span>Gold Member</span> -->
                </div>
              </div>
              <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
              <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                <!-- <a href="#" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-settings text-primary"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                  </div>
                </a> -->
                <div class="dropdown-divider"></div>
                <a href="change_password.php" class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-dark rounded-circle">
                      <i class="mdi mdi-onepassword  text-info"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
              </div>
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="product.php">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Product</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="testimonial.php">
              <span class="menu-icon">
                <i class="mdi mdi-android"></i>
              </span>
              <span class="menu-title">Testimonial</span>
            </a>
          </li>
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="services.php">
              <span class="menu-icon">
                <i class="mdi mdi-access-point-network"></i>
              </span>
              <span class="menu-title">Service</span>
            </a>
          </li> -->
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="package.php">
              <span class="menu-icon">
                <i class="mdi mdi-account-multiple"></i>
              </span>
              <span class="menu-title">Package</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="users.php">
              <span class="menu-icon">
                <i class="mdi mdi-account-circle"></i>
              </span>
              <span class="menu-title">Users</span>
            </a>
          </li> -->
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="order.php">
              <span class="menu-icon">
                <i class="mdi mdi-box-shadow"></i>
              </span>
              <span class="menu-title">Orders</span>
            </a>
          </li> -->
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="variant.php">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Variant</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="specification.php">
              <span class="menu-icon">
                <i class="mdi mdi-book-open-variant"></i>
              </span>
              <span class="menu-title">Specification</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="features.php">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Features</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="colour.php">
              <span class="menu-icon">
                <i class="mdi mdi-account-circle"></i>
              </span>
              <span class="menu-title">Car Colour</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="price.php">
              <span class="menu-icon">
                <i class="mdi mdi-grid"></i>
              </span>
              <span class="menu-title">Price</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="about.php">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Pages</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Other Specifications</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="engine_and_transmission.php">Engine and Transmission</a></li>
                <li class="nav-item"> <a class="nav-link" href="fuel_and_performance.php">Fuel & Performance</a></li>
                <li class="nav-item"> <a class="nav-link" href="suspension.php">Suspension, Steering & Brakes</a></li>
                <li class="nav-item"> <a class="nav-link" href="dimensions.php">Dimensions & Capacity</a></li>
                <li class="nav-item"> <a class="nav-link" href="comfort.php">Comfort & Convenience</a></li>
                <li class="nav-item"> <a class="nav-link" href="interior.php">Interior</a></li>
                <li class="nav-item"> <a class="nav-link" href="exterior.php">Exterior</a></li>
                <li class="nav-item"> <a class="nav-link" href="safety.php">Safety</a></li>
                <li class="nav-item"> <a class="nav-link" href="entertainment.php">Entertainment & Communication</a></li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="industry.php">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Industry</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="create_testimonial.php">
              <span class="menu-icon">
                <i class="mdi mdi-account-circle"></i>
              </span>
              <span class="menu-title">Testimonials</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="client_slider.php">
              <span class="menu-icon">
                <i class="mdi mdi-account"></i>
              </span>
              <span class="menu-title">Client Slider</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="tech_used.php">
              <span class="menu-icon">
                <i class="mdi mdi-android"></i>
              </span>
              <span class="menu-title">Technology Used</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="blog_category.php">
              <span class="menu-icon">
                <i class="mdi mdi-grid"></i>
              </span>
              <span class="menu-title">Blog Category</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="blog.php">
              <span class="menu-icon">
                <i class="mdi mdi-border-color"></i>
              </span>
              <span class="menu-title">Blog</span>
            </a>
          </li> -->
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="mdi.php">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Icons</span>
            </a>
          </li> -->
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="menu-icon">
                <i class="mdi mdi-security"></i>
              </span>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="blank-page.php"> Blank Page </a></li>
                <li class="nav-item"> <a class="nav-link" href="error-404.php"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="error-500.php"> 500 </a></li>
                <li class="nav-item"> <a class="nav-link" href="login.php"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="register.php"> Register </a></li>
              </ul>
            </div>
          </li> -->
          <!-- <li class="nav-item menu-items">
            <a class="nav-link" href="http://www.bootstrapdash.com/demo/corona-free/jquery/documentation/">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Documentation</span>
            </a>
          </li> -->
        </ul>
      </nav>
    <!-- left coll -->
    <div class="col-md-3 left_col">

    <!-- scroll view -->
      <div class="left_col scroll-view">

      <!-- nav title  -->
        <div class="navbar nav_title" style="border: 0;">
          <!-- <a href="<?=site_url('dashboard') ?>" class="site_title"><i class="fa fa-paw"></i> <span>Paymaxx</span></a> -->
        </div>
        <!-- /nav title -->

            <!-- clear fix -->
            <div class="clearfix"></div>
            <!-- /clear fix -->

            <!-- menu profile quick info  -->
            <div class="profile">
              <!-- <div class="profile_pic">
                <img src="<?=site_url('assets/images/img.jpg') ?>" alt="Foto de perfil" class="img-circle img-responsive profile_img">
              </div>
              <div class="profile_info">
                <span>Bem vindo,</span>
                <h2></h2>
              </div> -->
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">

                  <li><a><i class="fa fa-users"></i> Doctors <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li> <a href="<?=site_url('admin/doctors/') ?>"> <i class='fa fa-list'></i> All</a></li>
                      <li> <a class='menu' href="<?=site_url('admin/doctors/new-doctor') ?>"> <i class='fa fa-plus-square'></i> New doctor</a></li>
                    </ul>
                  </li>

                  <li>
                    <a>
                      <i class='fa fa-users'></i> Users <span class='fa fa-chevron-down'></span></a>
                    </a>
                    <ul class='nav child_menu'>
                        <li><a class='menu' href="<?=site_url('admin/users') ?>"> <i class='fa fa-list'></i> All </a></li>
                        <li><a class='menu' href="<?=site_url('admin/users/new-user') ?>"> <i class='fa fa-plus-square'></i> New user </a></li>
                    </ul>
                  </li>
                  
                  <li><a><i class="fa fa-users"></i> Patients <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li> <a class='menu' href="<?=site_url('admin/patients/') ?>"> <i class='fa fa-list'></i> All</a></li>
                      <li> <a class='menu' href="<?=site_url('admin/patients/new-patient') ?>"> <i class='fa fa-plus-square'></i> New patient</a></li>
                    </ul>
                  </li>

                  <li><a class='menu' href="<?=site_url('admin/orders') ?>"><i class="fa fa-reorder"></i> Exams </i></a></li>


                      <li> <a class='menu' href="<?=site_url('admin/patients/new-patient') ?>"> <span class="glyphicon glyphicon-off"></span> Logout</a></li>

                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav class="" role="navigation">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Administrator
                  </a>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
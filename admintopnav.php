<?php
include('connection.php');

$profile=mysqli_query($conn,"select * from admin where adminid='$adminid'");
$info=mysqli_fetch_array($profile);


?>
 <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light">
      <div class="navbar-wrapper">
        <div class="navbar-container content">
          <div class="collapse navbar-collapse show" id="navbar-mobile">
            <ul class="nav navbar-nav mr-auto float-left">
              <li class="nav-item d-block d-md-none"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
              <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <li class="nav-item dropdown navbar-search"><a class="nav-link dropdown-toggle hide" data-toggle="dropdown" href="#"><i class="ficon ft-search"></i></a>
                <ul class="dropdown-menu">
                  <li class="arrow_box">
                    <form>
                      <div class="input-group search-box">
                        <div class="position-relative has-icon-right full-width">
                          <input class="form-control" id="search" type="text" placeholder="Search here...">
                          <div class="form-control-position navbar-search-close"><i class="ft-x">   </i></div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">         
              <li class="dropdown dropdown-language nav-item"><span class="selected-language"></span></a>
                
              </li>
            </ul>
            <ul class="nav navbar-nav float-right">

              <li class="nav-item">
			 
              </li>
              <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">             <span class="avatar avatar-online"><img src="theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><i></i></span></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="arrow_box_right"><a class="dropdown-item" href="#"><span class="avatar avatar-online"><img src="theme-assets/images/portrait/small/avatar-s-19.png" alt="avatar"><span class="user-name text-bold-700 ml-1"><?php 
				  echo($info['firstname']);?></span></span></a>
                    <div class="dropdown-divider"></div><a class="dropdown-item" href="profile.php"><i class="ft-user"></i> Profile</a>
                    <div class="dropdown-divider"></div>
					<a class="dropdown-item" href="logout.php"><i class="ft-power"></i> Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- ////////////////////////////////////////////////////////////////////////////-->


    <div class="main-menu menu-fixed menu-light menu-accordion    menu-shadow " data-scroll-to-active="true" data-img="theme-assets/images/backgrounds/02.jpg">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">       
      
            
			  
        <img class="img-responsive" alt="Chameleon admin logo" src="images/logo1.jpg"/>

			  
          <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
      </div>

      <div class="main-menu-content">
	     

                       
									
								
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
		
			  <li class="nav-item " style="padding-left:0px;"><center><div class="navbar-brand" ><img alt="Chameleon admin logo" src="Images/sudeep.jpg" style="height:130px;width:130px;" class="img-thumbnail"/>
			  <br>
              <h3 class="brand-text"><center>Welcome,</center></h3><h3><?php echo($info['adminname']); ?></h3>
			 
              </span>
			  </div>
			  
			  </center></li>
			  <br>
          <li class=" nav-item"><a href="dashboard.php"><i class="ft-home"></i><span class="menu-title" data-i18n="">Dashboard</span></a>
          </li>

          <li class=" nav-item"><a href="testlistadmin.php"><i class="ft-pie-chart"></i><span class="menu-title" data-i18n="">Tests</span></a>
          </li>
          <li class=" nav-item"><a href="userslist.php"><i class="la la-user"></i><span class="menu-title" data-i18n="">Accounts</span></a>
          </li>
		   <li class=" nav-item"><a href="addmessage.php"><i class="la la-user"></i><span class="menu-title" data-i18n="">Add message</span></a>
          </li>
          <li class="nav-item"><a href="addtestinfo.php"><i class="ft-layers"></i><span class="menu-title" data-i18n="">Create test</span></a>
          </li>
             <li class="nav-item"><a href="ranklist.php"><i class="ft-layers"></i><span class="menu-title" data-i18n="">ranklist</span></a>
          </li>
        </ul>
      </div>
      <div class="navigation-background"></div>
    </div>

    <div class="app-content content">
      <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
          <div class="content-header-left col-md-4 col-12 mb-2">
            <h3 class="content-header-title"></h3>
          </div>
          <div class="content-header-right col-md-8 col-12">
            <div class="breadcrumbs-top float-md-right">
              <div class="breadcrumb-wrapper mr-1">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#"></a>
                  </li>
                  <li class="breadcrumb-item active">
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">
		<div class="">
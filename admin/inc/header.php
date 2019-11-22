 <header class="app-header navbar">

        <!--brand start-->
        <div class="navbar-brand">
            <a class="" href="dashboard.php">
            </a>
        </div>
        <!--brand end-->

        <!--left side nav toggle start-->
        <ul class="nav navbar-nav mr-auto">
            <li class="nav-item d-lg-none">
                <button class="navbar-toggler mobile-leftside-toggler" type="button"><i class="ti-align-right"></i></button>
            </li>
            <li class="nav-item d-md-down-none">
                <a class="nav-link navbar-toggler left-sidebar-toggler" href="#"><i class=" ti-align-right"></i></a>
            </li>
            
        </ul>
        <!--left side nav toggle end-->

        <!--right side nav start-->
        <ul class="nav navbar-nav ml-auto">

           
          <li class="nav-item dropdown dropdown-slide d-md-down-none">
                <a class="nav-link" onclick="cadic_update();" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class=" ti-reload"></i>
                    <span class="badge badge-danger notification-alarm"> </span>
                </a>
            </li>
          
            <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="assets/img/user.png" alt="John Doe">
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
                    <div class="dropdown-header pb-3">
                        <div class="media d-user">
                            <img class="align-self-center mr-3" src="assets/img/user.png" alt="John Doe">
                            <div class="media-body">
                                <h5 class="mt-0 mb-0"><?php echo $_SESSION['username']; ?></h5>
                                <span>ramya@gmail.com</span>
                            </div>
                        </div>
                    </div>

                    <a class="dropdown-item" href="change_password.php"><i class=" ti-reload"></i> Change Password</a>
                    <a class="dropdown-item" href="#"><i class=" ti-email"></i> Chat History</a>
                    <a class="dropdown-item" href="#"><i class=" ti-user"></i> Task History</a>
                    <a class="dropdown-item" href="#"><i class=" ti-layers-alt"></i> Report <span class="badge badge-primary">4</span> </a>

                    <div class="dropdown-divider"></div>

                    <a class="dropdown-item" href="#"><i class=" ti-layers"></i> Activity Log History</a>
                    <a class="dropdown-item" href="init.php?module=login&action=logout"><i class=" ti-unlock"></i> Logout</a>
                </div>
            </li>

            <!--right side toggler-->
            
            <li class="nav-item d-md-down-none">
                &nbsp;
            </li>
        </ul>

        <!--right side nav end-->
    </header>
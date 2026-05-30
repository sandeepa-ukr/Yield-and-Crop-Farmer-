<nav id="navbar-main" class="
        navbar navbar-main navbar-expand-lg
        bg-default
        navbar-light
        position-sticky
        top-0
        shadow
        py-0
      ">
    <div class="container">
        <ul class="navbar-nav navbar-nav-hover align-items-lg-center">
            <li class="nav-item dropdown">
                <a href="../index.php" class="navbar-brand mr-lg-5 text-white">
                    <img src="../assets/img/nav.png" style="width: 70%; padding:30px 50px 30px 0px;"/>
                </a>
            </li>
        </ul>

        <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbar_global"
            aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon text-white"></span>
        </button>
        <div class="navbar-collapse collapse bg-default" id="navbar_global">
            <div class="navbar-collapse-header">
                <div class="row">
                    <div class="col-10 collapse-brand">
                        <a href="../index.html">
                            <img src="../assets/img/nav.png" />
                        </a>
                    </div>
                    <div class="col-2 collapse-close bg-danger">
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global"
                            aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                </div>
            </div>

            <ul class="navbar-nav align-items-lg-center ml-auto">

                <li class="nav-item">
                    <a href="../contact.php" class="nav-link">
                        <span class="text-white nav-link-inner--text"><i class="text-white fas fa-address-card"></i>
                            Contact</span>
                    </a>
                </li>

                <li class="nav-item">
                    <div class="dropdown show ">
                        <a class="nav-link dropdown-toggle text-white " href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-white nav-link-inner--text"><i class="text-white fas fa-user-plus"></i>
                                Sign Up</span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="fregister.php">Farmer</a>
                            <a class="dropdown-item" href="../customer/cregister.php">Customer</a>
                        </div>
                    </div>
                </li>


                <li class="nav-item">
                    <div class="dropdown show ">
                        <a class="nav-link dropdown-toggle text-white " href="#" role="button" id="dropdownMenuLink"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="text-white nav-link-inner--text"><i class="text-white fas fa-sign-in-alt"></i>
                                Login</span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                            <a class="dropdown-item" href="flogin.php">Farmer</a>
                            <a class="dropdown-item" href="../customer/clogin.php">Customer</a>
                            <a class="dropdown-item" href="../admin/alogin.php">Admin </a>
                        </div>
                    </div>
                </li>



            </ul>
        </div>
    </div>
</nav>
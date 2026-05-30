<?php
include('cloginScript.php'); // Includes Login Script

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <style>
    body {
        margin: 0;
        padding: 0;
        min-height: 100vh;
        background: linear-gradient(135deg, #d8fff3, #9be7c4, #67d5b5);
        overflow-x: hidden;
        font-family: 'Poppins', sans-serif;
    }

    .shape {
        position: absolute;
        width: 100%;
        height: 100%;
        overflow: hidden;
        top: 0;
        left: 0;
        z-index: 0;
    }

    .shape span {
        position: absolute;
        border-radius: 50%;

        background: rgba(4, 145, 98, 0.45);

        filter: blur(3px);

        animation: float 10s infinite ease-in-out;
    }

    .shape span:nth-child(1) {
        width: 180px;
        height: 180px;
        top: 40px;
        left: 50px;
    }

    .shape span:nth-child(2) {
        width: 140px;
        height: 140px;
        top: 250px;
        left: 200px;
    }

    .shape span:nth-child(3) {
        width: 220px;
        height: 220px;
        bottom: 40px;
        left: 450px;
    }

    .shape span:nth-child(4) {
        width: 170px;
        height: 170px;
        top: 180px;
        right: 180px;
    }

    .shape span:nth-child(5) {
        width: 130px;
        height: 130px;
        bottom: 100px;
        right: 100px;
    }

    @keyframes float {

        0% {
            transform: translateY(0px);
        }

        50% {
            transform: translateY(-20px);
        }

        100% {
            transform: translateY(0px);
        }
    }

    .card-body {
        background: rgba(255, 255, 255, 0.18);
        border: 1px solid rgba(255, 255, 255, 0.3);
        backdrop-filter: blur(15px);
        -webkit-backdrop-filter: blur(15px);
        border-radius: 25px;
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
        color: #123;
        position: relative;
        z-index: 2;
    }

    .c-login {
        display: flex;
        align-item: center;
        justify-content: center;
    }

    .c-login p {
        font-size: xx-large;
        font-weight: bolder;
        color: black;
    }

    .button {
        background-color: #41ac8c !important;
    }
    </style>
    <link rel="icon" type="image/png" href="../assets/img/logo.png" />
    <title>Agriculture Portal</title>

    <!--     Fonts and icons     -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet"
        href=" https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css " />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />


    <link rel="stylesheet" href="../assets/css/creativetim.min.css" type="text/css">

</head>

<body class="bg-white" id="top">

    <section class="section section-shaped section-lg">
        <div class="shape">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <!-- ======================================================================================================================================== -->

    <!-- Navbar -->
    <?php require("nav.php");?>
    <!-- End Navbar -->
        <div class="container">

            <div class="row">

                <div class="col-sm-12">

                    <div class="c-login">
                        <p>Customer Login</p>
                    </div>


                    <div class="tab-content py-3 px-3 px-sm-0 bg-gradient-inf" id="nav-tabContent">


                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="card-body">




                                <form method="POST" action="">

                                    <div class="form-group row">
                                        <label for="email" class="col-md-3 col-form-label">
                                            <h6 class="text-black font-weight-bold">Email Id</h6>
                                        </label>
                                        <div class="col-md-9">
                                            <input type="text" class="form-control" required name="cust_email"
                                                placeholder="Enter Email ID" />
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="pass" class="col-md-3 col-form-label text-black"> Password </label>
                                        <div class="col-9">
                                            <div class="input-group mb-3">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text" id="basic-addon1"><i
                                                            class="fas fa-lock"></i></span>
                                                </div>
                                                <input name="cust_password" type="password" class="input form-control"
                                                    id="password" placeholder="Password" required="true"
                                                    aria-label="password" aria-describedby="basic-addon1" />
                                                <div class="input-group-append">
                                                    <span class="input-group-text" onclick="password_show_hide();">
                                                        <i class="fas fa-eye" id="show_eye"></i>
                                                        <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <div class="form-group row">
                                        <div class="offset-md-3 col-md-2">
                                            <button type="submit" class="btn button text-dark" name="customerlogin"
                                                id="submit">
                                                Login
                                            </button>
                                        </div>
                                    </div>

                                    <span><?php echo $error; ?></span>



                                </form>




                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <?php require("footer.php");?>

</body>

<script>
function password_show_hide() {
    var x = document.getElementById("password");
    var show_eye = document.getElementById("show_eye");
    var hide_eye = document.getElementById("hide_eye");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
    } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
    }
}
</script>

</html>
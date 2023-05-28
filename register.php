<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=DM+Sans&display=swap');

        body {
            background-color: #f2f7f8 !important;
            font-family: "DM Sans", sans-serif !important;
        }

        #login {
            border-radius: 25px;
            padding: 0.8em 1em !important;
            margin-top: 0.3em;
        }

        .content {
            margin-top: 20%;
            margin-bottom: 5%;
        }

        .card {
            border-radius: 0.65rem !important;
        }

        .card-header {
            background-color: #fff !important;
            border-bottom: none !important;
            padding: 2rem 1rem 1.25rem 1.25rem !important;
        }

        .card-title {
            color: #4D9399;
            font-weight: 500;
        }

        .card-subtitle {
            color: #000;
            font-weight: bolder;
            margin: 16px 0 !important;
        }

        .btn-primary:hover {
            box-shadow: 0 6px 10px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19) !important;
        }

        .btn-primary:active,
        .btn-primary:visited,
        .btn-primary:focus {
            box-shadow: none;
        }

        .content {
            flex: 1 0 auto;
        }

        .social-button {
            background-position: 50% 0px !important;
            box-sizing: border-box;
            color: rgb(255, 255, 255);
            cursor: pointer;
            display: inline-block;
            height: 50px;
            line-height: 50px;
            text-align: left;
            text-decoration: none;
            text-transform: uppercase;
            vertical-align: middle;
            width: auto;
            border-radius: 3px;
            margin: 10px auto;
            padding-left: 20%;
            transition: all 0.2s cubic-bezier(0.72, 0.01, 0.56, 1) 0s;
            -webkit-transition: all .3s ease;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
        }

        #facebook-connect {
            background: rgb(255, 255, 255) url('assets/images/facebook.svg') no-repeat scroll 5px 0px / 30px 50px padding-box border-box;
            border: 1px solid rgb(60, 90, 154);
        }

        #facebook-connect:hover {
            border-color: rgb(60, 90, 154);
            background: rgb(60, 90, 154) url('assets/images/facebook-white.svg') no-repeat scroll 5px 0px / 30px 50px padding-box border-box;
            -webkit-transition: all .8s ease-out;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease-out;
        }

        #facebook-connect span {
            box-sizing: border-box;
            color: rgb(60, 90, 154);
            cursor: pointer;
            text-align: center;
            text-transform: uppercase;
            border: 0px none rgb(255, 255, 255);
            outline: rgb(255, 255, 255) none 0px;
            -webkit-transition: all .3s ease;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
        }

        #facebook-connect:hover span {
            color: #FFF;
            -webkit-transition: all .3s ease;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
        }

        #google-connect {
            background: rgb(255, 255, 255) url('assets/images/google.svg') no-repeat scroll 5px 0px / 30px 50px padding-box border-box;
            border: 1px solid rgb(220, 74, 61);
        }

        #google-connect:hover {
            border-color: rgb(220, 74, 61);
            background: rgb(225 225 225 / 82%) url('assets/images/google.svg') no-repeat scroll 5px 0px / 30px 50px padding-box border-box;
            -webkit-transition: all .8s ease-out;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease-out;
        }

        #google-connect span {
            box-sizing: border-box;
            color: rgb(220, 74, 61);
            cursor: pointer;
            text-align: center;
            text-transform: uppercase;
            border: 0px none rgb(220, 74, 61);
            outline: rgb(255, 255, 255) none 0px;
            -webkit-transition: all .3s ease;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
        }

        #google-connect:hover span {
            color: #FFF;
            -webkit-transition: all .3s ease;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
        }

        #linkedin-connect {
            background: rgb(255, 255, 255) url('assets/images/linkedin.svg') no-repeat scroll 13px 0px / 28px 45px padding-box border-box;
            border: 1px solid rgb(0, 119, 181);
        }

        #linkedin-connect:hover {
            border-color: rgb(0, 119, 181);
            background: rgb(0, 119, 181) url('assets/images/linkedin-white.svg') no-repeat scroll 13px 0px / 28px 45px padding-box border-box;
            -webkit-transition: all .8s ease-out;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease-out;
        }

        #linkedin-connect span {
            box-sizing: border-box;
            color: rgb(0, 119, 181);
            cursor: pointer;
            text-align: center;
            text-transform: uppercase;
            border: 0px none rgb(0, 119, 181);
            outline: rgb(255, 255, 255) none 0px;
            -webkit-transition: all .3s ease;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
        }

        #linkedin-connect:hover span {
            color: #FFF;
            -webkit-transition: all .3s ease;
            -moz-transition: all .3s ease;
            -ms-transition: all .3s ease;
            -o-transition: all .3s ease;
            transition: all .3s ease;
        }

        @media (min-width: 400px) {
            .content {
                margin-top: 15% !important;
                margin-bottom: 5%;
            }
        }

        @media (min-width: 500px) {
            .content {
                margin-top: 10% !important;
                margin-bottom: 5%;
            }
        }

        .or {
            display: flex;
            align-items: center;
            text-align: center;
            margin-top: 50px;
            color: #454545;
        }

        .or::before,
        .or::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #454545;
        }

        .or:not(:empty)::before {
            margin-right: .25em;
        }

        .or:not(:empty)::after {
            margin-left: .25em;
        }

        .btn-primary {
            background-color: #4D9399 !important;
        }

        #forgotPassword {
            text-align: end;
            color: #4D9399;
        }

        #goToLogin {
            margin: 50px 0;
        }

        #goToLogin p {
            color: #717171;
        }

        #goToLogin p span {
            color: #4D9399;
        }

        #t-c {
            max-width: 90%;
        }
    </style>
</head>
<div class="row">
    <div class="card card-login mx-auto mt-5 col-md-6">
        <div class="card-header">Reset Password</div>
        <div class="card-body">
            <div class="text-center mb-4">
                <h4>Forgot your password?</h4>
                <p>Enter your email address and we will send you instructions on how to reset your password.</p>
            </div>
            <form>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" placeholder="Enter email address"
                            required="required" autofocus="autofocus">
                    </div>
                </div>
                <a class="btn btn-primary btn-block" href="login.html">Reset Password</a>
            </form>
        </div>
    </div>
</div>

<body>
    <div class="container content">
        <div class="row">
            <div class="card card-login mx-auto mt-5 col-md-8 col-lg-6 shadow">
                <div class="card-header text-center">
                    <h3 class="card-title">CVsWriter</h3>
                    <h5 class="card-subtitle">Stand Out In The Job Market</h5>
                    <div class="social_logins">
                        <div class="login-box">
                            <a href="#" class="social-button" id="facebook-connect"></a>
                            <a href="#" class="social-button" id="google-connect"></a>
                            <a href="#" class="social-button" id="linkedin-connect"></a>
                        </div>
                    </div>
                    <div class="or">OR</div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="inputEmail">Your Name :</label>
                                <input type="text" id="registerName" class="form-control" placeholder="Your Name"
                                    required="required" autofocus="autofocus">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="inputEmail">Email :</label>
                                <input type="email" id="registerEmail" class="form-control" placeholder="Email address"
                                    required="required" autofocus="autofocus">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="inputEmail">Password :</label>
                                <input type="password" id="registerPassword" class="form-control" placeholder="Password"
                                    required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="checkbox">
                                <label id="t-c">
                                    <input type="checkbox" value="agree">
                                    By clicking Sign Up, you agree to our <a href="#">Terms of Use</a> and <a
                                        href="#">Privacy Police</a>.
                                </label>
                            </div>
                        </div>
                </div>
                <a class="btn btn-primary btn-block" href="index.html">Sign Up</a>
                </form>
                <div class="text-center" id="goToLogin">
                    <p>Already have an account? <span>Sign In</span></p>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</body>
<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- jQuery easing plugin -->
<script src="http://thecodeplayer.com/uploads/js/jquery.easing.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
<link rel="stylesheet" href="assets/css/style.css" />
<script src="assets/js/script.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<link type="text/css" rel="stylesheet" href="assets/css/waitMe.css">
<link href="https://unpkg.com/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
<script src="https://unpkg.com/@yaireo/tagify"></script>
<script src="https://unpkg.com/@yaireo/tagify@3.1.0/dist/tagify.polyfills.min.js"></script>
<script src="assets/js/waitMe.js"></script>
<script src="assets/js/validin.js"></script>
<script src="assets/js/lightbox.js"></script>
<link rel="stylesheet" href="assets/css/lightbox.css">

</html>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">

    <link rel="stylesheet" href="{{asset('assets/landing/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/landing/css/bootstrap-datepicker.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/landing/css/bootstrap-datepicker.standalone.min.css')}}">
    <!-- Animate CSS -->
    <link href="{{asset('assets/landing/css/ion.rangeSlider.min.css')}}" rel="stylesheet">
    <!-- custom css -->
    <link rel="stylesheet" href="{{asset('assets/landing/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/landing/css/intlTelInput.css')}}">
    <style>
        .intl-tel-input .flag-container {
            height: 35px !important;
            padding: 0px !important;
        }

        .iti-flag {
            background-image: url("assets/landing/images/flags.png");
        }

        @media only screen and (-webkit-min-device-pixel-ratio: 2), only screen and (min--moz-device-pixel-ratio: 2), only screen and (-o-min-device-pixel-ratio: 2 / 1), only screen and (min-device-pixel-ratio: 2), only screen and (min-resolution: 192dpi), only screen and (min-resolution: 2dppx) {
            .iti-flag {
                background-image: url("assets/landing/images/flags@2x.png");
            }
        }

        #pswd_info {
            position:relative;
            /*bottom:-75px;*/
            /*bottom: -115px\9; !* IE Specific *!*/
            /*right:55px;*/
            width:250px;
            padding:15px;
            background:#fefefe;
            font-size:.875em;
            border-radius:5px;
            box-shadow:0 1px 3px #ccc;
            border:1px solid #ddd;
        }

        #pswd_info h4 {
            margin:0 0 10px 0;
            padding:0;
            font-weight:normal;
        }

        #pswd_info::before {
            content: "\25B2";
            position:absolute;
            top:-12px;
            left:45%;
            font-size:14px;
            line-height:14px;
            color:#ddd;
            text-shadow:none;
            display:block;
        }

        #pswd_info {
            display:none;
        }

        .invalid {
            background: url("assets/landing/images/invalid.png") no-repeat 0 50% !important;
            padding-left:22px !important;
            line-height:24px;
            color:#ec3f41;
        }
        .valid {
            background: url("assets/landing/images/valid.png") no-repeat 0 50% !important;
            padding-left:22px !important;
            line-height:24px;
            color:#3a7d34;
        }
    </style>
</head>

<body>
<?php
$countries = Countries::all()->pluck('name.common');
?>
<div class="acessWrap">
    <div class="container">
        <section class="accessArea">
            <div class="row">
                <div class="col-md-4">
                    <div class="registerLeft">
                        <div class="text-area">
                            <a href=""><img src="{{asset('assets/landing/images/logo.png')}}" alt=""></a>
                            <h5>Let's Get
                                <strong>Started</strong>
                            </h5>

                            <ul class="list-group list-group-horizontal justify-content-center">
                                <a href="" class="list-group-item"><i class="fab fa-facebook-f"></i></a>
                                <a href="" class="list-group-item"><i class="fab fa-google-plus-g"></i></a>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <h2 class="subTitle text-center mt-4 mb-2">Create an Account</h2>
                        <h6 class="text-center"></h6>
                        <div class="card-body">
                            <form action="{{ route('register') }}" method="POST" id="registerForm">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First Name</label>
                                            <input type="text" class="form-control"  placeholder="John" name="firstname" id="firstname">
                                            @if ($errors->has('firstname'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('firstname') }}
                                                </span>
                                            @endif

                                            <span class="invalid-feedback firstnameError" role="alert">
                                                <strong >First name is required</strong>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control"  placeholder="Doe" name="lastname" id="lastname">
                                            @if ($errors->has('lastname'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('lastname') }}
                                                </span>
                                            @endif

                                            <span class="invalid-feedback lastnameError" role="alert">
                                                <strong >Last name is required</strong>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>User Name</label>
                                            <input type="text" class="form-control"  placeholder="" name="username" id="username">

                                            @if ($errors->has('username'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('username') }}
                                                </span>
                                            @endif

                                            <span class="invalid-feedback usernameError" role="alert">
                                                <strong >Username is required</strong>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email Address</label>
                                            <input type="email" class="form-control"  placeholder="" name="email" id="email">
                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('email') }}
                                                </span>
                                            @endif

                                            <span class="invalid-feedback emailError" role="alert">
                                                <strong >Email is required</strong>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-12 ">
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" class="form-control"  placeholder="" name="phone" id="phone">
                                            <input id="hidden" type="hidden" name="phoneex">
                                            @if ($errors->has('phone'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('phone') }}
                                                </span>
                                            @endif

                                            <span class="invalid-feedback phoneError" role="alert">
                                                <strong >Mobile number is required</strong>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <select class="form-control custom-select" name="country" id="country">
                                                <option value="">Select A Country</option>
                                                @foreach($countries as $coutry)
                                                    <option value="{{$coutry}}">{{$coutry}}</option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('country'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('country') }}
                                                </span>
                                            @endif

                                            <span class="invalid-feedback countryError" role="alert">
                                                <strong >Country is required</strong>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Language</label>
                                            <input type="text" class="form-control"  placeholder="" name="lang" id="lang">
                                            @if ($errors->has('lang'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('lang') }}
                                                </span>
                                            @endif

                                            <span class="invalid-feedback langError" role="alert">
                                                <strong >Language is required</strong>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="form-control custom-select" name="gender">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Age</label>
                                            <input type="number" class="form-control"  placeholder="" name="age" id="age">
                                            @if ($errors->has('age'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('age') }}
                                                </span>
                                            @endif

                                            <span class="invalid-feedback ageError" role="alert">
                                                <strong >Age is required</strong>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control"  placeholder="" name="password" id="password">
                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback">
                                                    {{ $errors->first('password') }}
                                                </span>
                                            @endif

                                            <span class="invalid-feedback passwordError" role="alert">
                                                <strong id="passwordErrorSpan"></strong>
                                            </span>
                                        </div>

                                        <div id="pswd_info">
                                            <h4>Password must meet the following requirements:</h4>
                                            <ul>
                                                <li id="letter" class="invalid"> At least <strong>one letter</strong></li>
                                                <li id="capital" class="invalid"> At least <strong>one capital letter</strong></li>
                                                <li id="special" class="invalid"> At least <strong>one special letter</strong></li>
                                                <li id="number" class="invalid"> At least <strong>one number</strong></li>
                                                <li id="length" class="invalid"> Be at least <strong>8 characters</strong></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control"  placeholder="" name="conf_pass" id="conf_pass">
                                            <span class="invalid-feedback confpassError" role="alert">
                                                <strong >Mismatched confirm password</strong>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button class="btn btn-lg btn-orange btn-block" type="submit">Sign Up</button>
                                    </div>

                                    <div class="col-md-6">
                                        <a class="link" href="{{route('home')}}">Already User ? Login</a>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End welcome section  -->

    </div>
</div>

<script src="{{asset('assets/landing/js/jquery.js')}}"></script>
<script src="{{asset('assets/landing/js/poper.js')}}"></script>
<script src="{{asset('assets/landing/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/landing/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('assets/landing/js/ion.rangerSlider.min.js')}}"></script>
<script src="{{asset('assets/landing/js/main.js')}}"></script>
<script src="{{asset('assets/landing/js/intlTelInput.js')}}"></script>
<script>
    $("#phone").intlTelInput({
        allowDropdown: true,
        formatOnDisplay: true,
        dropdownContainer: 'body',
        initialCountry: "auto",
        autoPlaceholder: "polite",
        placeholderNumberType: "MOBILE",
        geoIpLookup: function(success, failure) {
            $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                success(countryCode);
            });
        },
        separateDialCode: true,

    });

    $("#phone").intlTelInput('loadUtils', "{{asset('assets/landing/js/utils.js')}}");

    function validate() {
        var isValid = true;
        if($("#firstname").val() == '') {
            isValid = false;
            $(".firstnameError").show();
        } else {
            isValid = true;
            $(".firstnameError").hide();
        }

        if($("#lastname").val() == '') {
            isValid = false;
            $(".lastnameError").show();
        } else {
            isValid = true;
            $(".lastnameError").hide();
        }

        if($("#username").val() == '') {
            isValid = false;
            $(".usernameError").show();
        } else {
            isValid = true;
            $(".usernameError").hide();
        }

        if($("#email").val() == '') {
            isValid = false;
            $(".emailError").show();
        } else {
            isValid = true;
            $(".emailError").hide();
        }

        if($("#phone").val() == '') {
            isValid = false;
            $(".phoneError").show();
        } else {
            isValid = true;
            $(".phoneError").hide();
        }

        if($("#country").val() == '') {
            isValid = false;
            $(".countryError").show();
        } else {
            isValid = true;
            $(".countryError").hide();
        }

        if($("#lang").val() == '') {
            isValid = false;
            $(".langError").show();
        } else {
            isValid = true;
            $(".langError").hide();
        }

        if($("#age").val() == '') {
            isValid = false;
            $(".ageError").show();
        } else {
            isValid = true;
            $(".ageError").hide();
        }

        if($("#password").val() == '') {
            isValid = false;
            $(".passwordError").show();
            $("#passwordErrorSpan").html('Password is required');
        } else {
            isValid = true;
            $(".passwordError").hide();
        }

        var passVal = $("#password").val()
        if(passVal.length<8 || !passVal.match(/[a-z]/) || !passVal.match(/[A-Z]/) || !passVal.match(/\d/) || !passVal.match(/[!@#$%^&_*]/)) {
            isValid = false;
            $(".passwordError").show();
            $("#passwordErrorSpan").html('Password doesn\'t meet requirement');
        } else {
            isValid = true;
            $(".passwordError").hide();
        }

        if($("#conf_pass").val() == '') {
            isValid = false;
            $(".confpassError").show();
            $("#confpassErrorSpan").html('Confirm Password is required');
        } else {
            isValid = true;
            $(".confpassError").hide();
        }

        if($("#password").val() !== $("#conf_pass").val()) {
            isValid = false;
            $(".confpassError").show();
            $("#confpassErrorSpan").html('Mismatched Confirm password');
        } else {
            isValid = true;
            $(".confpassError").hide();
        }

        return isValid;
    }

    $("#password").keyup(function() {
        var pswd = $(this).val();
        if ( pswd.length < 8 ) {
            $('#length').removeClass('valid').addClass('invalid');
        } else {
            $('#length').removeClass('invalid').addClass('valid');
        }

        if ( pswd.match(/[a-z]/) ) {
            $('#letter').removeClass('invalid').addClass('valid');
        } else {
            $('#letter').removeClass('valid').addClass('invalid');
        }

        if ( pswd.match(/[A-Z]/) ) {
            $('#capital').removeClass('invalid').addClass('valid');
        } else {
            $('#capital').removeClass('valid').addClass('invalid');
        }

        if ( pswd.match(/\d/) ) {
            $('#number').removeClass('invalid').addClass('valid');
        } else {
            $('#number').removeClass('valid').addClass('invalid');
        }

        if ( pswd.match(/[!@#$%^&_*]/) ) {
            $('#special').removeClass('invalid').addClass('valid');
        } else {
            $('#special').removeClass('valid').addClass('invalid');
        }
    }).focus(function() {
        $('#pswd_info').show();
    }).blur(function() {
        $('#pswd_info').hide();
    });

    $("#registerForm").submit(function() {
        if(validate()) {
            $("#hidden").val($("#phone").intlTelInput("getSelectedCountryData").dialCode);
        } else {
            event.preventDefault();
        }
    });

</script>
</body>
</html>

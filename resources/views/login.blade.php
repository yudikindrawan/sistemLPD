<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Log in | Sistem Informasi Akutansi Desa Tojan </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset ('lpd2.png')}}">
    <!-- Bootstrap -->
    <link href="{{ asset ('assets/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset ('assets/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset ('assets/vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{ asset ('assets/vendors/animate.css/animate.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset ('assets/build/css/custom.min.css') }}" rel="stylesheet">
    <!-- Toast-->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    @toastr_css
    <style>
    #loginform .error {
    color: red;
    }
    </style>
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form id="loginform" class="loginform" action="{{ route('postlogin') }}" method="post">
              {{csrf_field()}}
              <h1>Log in </h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" name="username" id="username" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" name="password" id="password" />
              </div>
              <div>
                <button class="btn btn-primary btn-block" type="submit">Login</button>

              </div>
              <div class="clearfix"></div>
              <div class="separator">
                <div class="clearfix"></div>
                <br />
                <div>
                  <img width="42" class="rounded-circle" src="{{ asset ('lpd2.png')}}" alt=""><h1> LPD Desa Tojan</h1>
                  <p>©2019 All Rights Reserved. LPD Desa Pekraman Tojan. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div class="has-feedback">
                <input type="text" class="form-control" placeholder="Username" />
              </div>
              <div class="has-feedback">
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>
                <div class="clearfix"></div>
                <br />
                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
    <!-- jQuery -->
    <script src="{{ asset('assets/vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script>
      $('.loginform').validate({
          rules: {
              username:{
                minlength:3,
                required: true
              },
              password:{
                minlength:3,
                required: true
              },
          },
           messages: {
             username: {
             required: "Username tidak boleh kosong",
             minlength: jQuery.validator.format("Kurang dari {0} karakter"),
             },
             password: {
             required: "Password tidak boleh kosong",
             minlength: jQuery.validator.format("Kurang dari {0} karakter"),
             },
           },
           highlight: function (element) {
              $(element).parent().addClass('error')
           },
           unhighlight: function (element) {
               $(element).parent().removeClass('error')
           }
      });
    </script>
  </body>
  @jquery
  @toastr_js
  @toastr_render
</html>

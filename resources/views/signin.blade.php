<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Elegant Dashboard | Sign In</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{asset('img/svg/logo.svg')}}" type="image/x-icon">
  <!-- Custom styles -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
  <div class="layer"></div>
<main class="page-center">
  <div class="logo-login">
    <img class="" src="{{asset('img/logo-main.svg')}}" alt="login" title="log" />
 </div>
  <article class="sign-up">   
    <form class="sign-up-form form" action="" method="">
      <h1 class="sign-up__title">Let's Get Started</h1>
      <p class="sign-up__subtitle">Create your free account.</p>
      <div class="row">
        <div class="col-md-7">
          <label class="form-label-wrapper">
            <p class="form-label">Email</p>
            <input class="form-input user-mail" type="email" placeholder="Enter your email" required>
          </label>
          <label class="form-label-wrapper">
            <p class="form-label">Password</p>
            <input class="form-input user-pass" type="password" placeholder="Enter your password" required>
          </label>
          <a class="link-info forget-link" href="##">Forgot your password?</a>
          <label class="form-checkbox-wrapper">
            <input class="form-checkbox" type="checkbox" required>
            <span class="form-checkbox-label">Remember me next time</span>
          </label>
          <button class="form-btn primary-default-btn transparent-btn">Sign in</button>
          
        </div>
        <div class="col-md-5">
           <img class="logimg" src="{{asset('img/login.svg')}}" alt="login" title="log" />
        </div>
        <!-- <p class="already">Don’t have an account?  <a class="al-lnk" href="##">Create an Account</a></p> -->
      </div>
      
    </form>
  </article>
</main>
<!-- Chart library -->
<script src="{{asset('plugins/chart.min.js')}}"></script>
<!-- Icons library -->
<script src="{{asset('plugins/feather.min.js')}}"></script>
<!-- Custom scripts -->
<script src="{{asset('js/script.js')}}"></script>
</body>

</html>
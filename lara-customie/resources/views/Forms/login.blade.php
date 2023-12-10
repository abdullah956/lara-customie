<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="{{ URL::asset('css/Forms/login.css') }}">
  <script src="{{ URL::asset('js/Forms/login.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>

<body>
  <div class="imgdiv">
    <center>
      <img src="../imgs/Icons/logo.PNG" alt="">
    </center>
  </div>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action="{{route('Form.Login')}}" method="post" onsubmit="return validateFormLogin()" id="form1">
        @csrf
        <span id="emailerror"></span>
        <input type="text" name="email" id="email" placeholder="Enter your email">
        <span id="passworderror"></span>
        <input type="password" name="password" id="password" placeholder="Enter your password">
        <a href="#">Forgot password?</a>
        <input type="submit" class="button" value="Login" name="loginbtn">
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
          <label for="check">Signup</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Signup</header>
      <form method="post" action="{{route('Form.StoreSignUp')}}" onsubmit="return validateFormSignUp()">
        @csrf
        <span id="usernameerror" class="error-span"></span>
        <input type="text" placeholder="Enter username" name="name" class="sign">
        <span id="semailerror" class="error-span"></span>
        <input type="text" placeholder="Enter your email" name="email" class="sign">
        <span id="spassworderror" class="error-span"></span>
        <input type="password" placeholder="Create a password" name="password" class="sign">
        <input type="submit" class="button" value="Signup" name="signup">
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
          <label for="check">Login</label>
        </span>
      </div>
    </div>
  </div>
  <script>
    //for login
    $(document).ready(function () {
      $("#email").click(function () {
        $("#emailerror").text("");
      });
    });
    $(document).ready(function () {
      $("#password").click(function () {
        $("#passworderror").text("");
      });
    });
    //for signup form
    $(document).ready(function () {
    $(".sign").click(function () {
      $(".error-span").text("");
    });
  });
  </script>
</body>

</html>
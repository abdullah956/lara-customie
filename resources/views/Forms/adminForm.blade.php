<!DOCTYPE html>
<!-- Coding By CodingNepal - codingnepalweb.com -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Registration/Login</title>
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
            <header>Admin Login</header>
            <form action="{{ route('Form.AdminLogin') }}" method="post" onsubmit="return validateFormLogin()"
                id="form1">
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
            <header>Admin Signup</header>
            <form action="{{ route('Form.StoreAdminSignUp') }}" method="post" onsubmit="return validateFormSignUp()">
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
        function validateFormLogin() {
            var email = document.forms[0]["email"].value;
            var password = document.forms[0]["password"].value;
            if (email.trim() === "") {
                var spantag = document.getElementById("emailerror");
                spantag.style.color = 'red';
                spantag.innerHTML = "Email can't be empty";
                return false;
            }
            if (!email.endsWith('@gmail.com')) {
                var spantag = document.getElementById("emailerror");
                spantag.style.color = 'red';
                spantag.innerHTML = "Please enter a valid Gmail address.";
                return false;
            }
            if (password.trim() === "") {
                var spantag = document.getElementById("passworderror");
                spantag.style.color = 'red';
                spantag.innerHTML = "Password cannot be empty.";
                return false;
            }
            if (password.length < 8) {
                var spantag = document.getElementById("passworderror");
                spantag.style.color = 'red';
                spantag.innerHTML = "Password must be at least 8 characters long.";
                return false;
            }
            return true;
        }

        function validateFormSignUp() {
            var username = document.forms[1]["name"].value;
            var email = document.forms[1]["email"].value;
            var password = document.forms[1]["password"].value;
            if (username.trim() === "") {
                var spantag = document.getElementById("usernameerror");
                spantag.style.color = 'red';
                spantag.innerHTML = "Username cannot be empty.";
                return false;
            }
            if (username.length > 15) {
                var spantag = document.getElementById("usernameerror");
                spantag.style.color = 'red';
                spantag.innerHTML = "Username must not exceed 15 characters.";
                return false;
            }
            if (email.trim() === "") {
                var spantag = document.getElementById("semailerror");
                spantag.style.color = 'red';
                spantag.innerHTML = "Email cannot be empty";
                return false;
            }
            if (!email.endsWith('@gmail.com')) {
                var spantag = document.getElementById("semailerror");
                spantag.style.color = 'red';
                spantag.innerHTML = "Please enter a valid Gmail address.";
                return false;
            }
            if (password.trim() === "") {
                var spantag = document.getElementById("spassworderror");
                spantag.style.color = 'red';
                spantag.innerHTML = "Password cannot be empty.";
                return false;
            }
            if (password.length < 8) {
                var spantag = document.getElementById("spassworderror");
                spantag.style.color = 'red';
                spantag.innerHTML = "Password must be at least 8 characters long.";
                return false;
            }
            return true;
        }
        //for login
        $(document).ready(function() {
            $("#email").click(function() {
                $("#emailerror").text("");
            });
        });
        $(document).ready(function() {
            $("#password").click(function() {
                $("#passworderror").text("");
            });
        });
        //for signup form
        $(document).ready(function() {
            $(".sign").click(function() {
                $(".error-span").text("");
            });
        });
    </script>
</body>

</html>

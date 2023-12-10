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
    var username = document.forms[1]["username"].value;
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
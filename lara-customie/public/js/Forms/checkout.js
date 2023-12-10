function validateFormCheckout() {
    var fname = document.forms[0]["fname"].value;
    var lname = document.forms[0]["lname"].value;
    var saddress = document.forms[0]["saddress"].value;
    var country = document.forms[0]["country"].value;
    var state = document.forms[0]["state"].value;
    var money = document.forms[0]["money"].value;
    var email = document.forms[0]["email"].value;
    var phone = document.forms[0]["phone"].value;
    var baddress = document.forms[0]["baddress"].value;
    var city = document.forms[0]["city"].value;
    var zip = document.forms[0]["zip"].value;
    if (fname.trim() === "") {
        var spantag = document.getElementById("fnameerror");
        spantag.style.color = 'red';
        spantag.innerHTML = "field can't be left empty.";
        document.forms[0]["fname"].focus();
        return false;
    }
    if (lname.trim() === "") {
        var spantag = document.getElementById("lnameerror");
        spantag.style.color = 'red';
        spantag.innerHTML = "field can't be left empty.";
        document.forms[0]["lname"].focus();

        return false;
    }

    if (saddress.trim() === "") {
        var spantag = document.getElementById("saddresserror");
        spantag.style.color = 'red';
        spantag.innerHTML = "field can't be left empty.";
        document.forms[0]["saddress"].focus();

        return false;
    }

    if (country === "") {
        var spantag = document.getElementById("countryerror");
        spantag.style.color = 'red';
        spantag.innerHTML = "field can't be left empty.";
        document.forms[0]["country"].focus();
    
        return false;
    }

    if (state.trim() === "") {
        var spantag = document.getElementById("stateerror");
        spantag.style.color = 'red';
        spantag.innerHTML = "field can't be left empty.";
        document.forms[0]["state"].focus();

        return false;
    }

    if (!money) {
        var spantag = document.getElementById("moneyerror");
        spantag.style.color = 'red';
        spantag.innerHTML = "field can't be left empty.";
        document.forms[0]["money"].focus();
  
        return false;
    }

    if (email.trim() === "") {
        var spantag = document.getElementById("emailerror");
        spantag.style.color = 'red';
        spantag.innerHTML = "field can't be left empty.";
        document.forms[0]["email"].focus();

        return false;
    }
    if (phone.trim() === "") {
        var spantag = document.getElementById("phoneerror");
        spantag.style.color = 'red';
        spantag.innerHTML = "field can't be left empty.";
        document.forms[0]["phone"].focus();

        return false;
    }
    if (baddress.trim() === "") {
        var spantag = document.getElementById("baddresserror");
        spantag.style.color = 'red';
        spantag.innerHTML = "field can't be left empty.";
        document.forms[0]["baddress"].focus();

        return false;
    }
    if (city.trim() === "") {
        var spantag = document.getElementById("cityerror");
        spantag.style.color = 'red';
        spantag.innerHTML = "field can't be left empty.";
        document.forms[0]["city"].focus();

        return false;
    }
    if (zip.trim() === "") {
        var spantag = document.getElementById("ziperror");
        spantag.style.color = 'red';
        spantag.innerHTML = "field can't be left empty.";
        document.forms[0]["zip"].focus();

        return false;
    }
    if (!email.endsWith('@gmail.com')) {
        var spantag = document.getElementById("emailerror");
        spantag.style.color = 'red';
        spantag.innerHTML = "Please enter a valid Gmail address.";
        document.forms[0]["email"].focus();
        return false;
    }
    if (zip.length > 6) {
        var spantag = document.getElementById("ziperror");
        spantag.style.color = 'red';
        spantag.innerHTML = "Zip must not exceed 6 digits.";
        document.forms[0]["zip"].focus();
        return false;
    }
    if (phone.length > 11) {
        var spantag = document.getElementById("phoneerror");
        spantag.style.color = 'red';
        spantag.innerHTML = "Phone must not exceed 11 digits.";
        document.forms[0]["phone"].focus();
        return false;
    }
    return true;
}

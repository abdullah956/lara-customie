function f() {
    var height = parseFloat(document.getElementById('height').value);
    var width = parseFloat(document.getElementById('width').value);
    var price = 25;
    var total = (height * width * price).toFixed(2); // Using toFixed to round to 2 decimal places
    document.getElementById('total').textContent = total;
}
function validateForm() {
    var fileInput = document.getElementById('uploadfile');
    var file = fileInput.files[0];
    if (!file) {
        var spantag = document.getElementById("fileerror");
        spantag.style.color = 'red';
        spantag.innerHTML = "Please upload a image design.";
        document.forms[0]["uploadfile"].focus();
        return false;
    }
    var fileExtension = file.name.split('.').pop().toLowerCase();
    if (fileExtension !== 'jpeg' && fileExtension !== 'jpg' && fileExtension !== 'png') {
        var spantag = document.getElementById("fileerror");
        spantag.style.color = 'red';
        
        spantag.innerHTML = "Invalid file type. Please select a JPEG or PNG file.";
        document.forms[0]["uploadfile"].focus();
        return false;

    }
    return true;
}
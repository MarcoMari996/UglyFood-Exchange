
function makeActive(obj) {
    const prof_classes = document.getElementById('profile').classList;
    const prod_classes = document.getElementById('products').classList;
    const contact_classes = document.getElementById('contact').classList;

    if (prod_classes.contains("active")) {
        prod_classes.remove("active");
    }
    if (prof_classes.contains("active")) {
        prof_classes.remove("active");
    }
    if (contact_classes.contains("active")) {
        contact_classes.remove("active");
    }

    obj.classList.add("active");
    var i;
    var maincontent = document.getElementsByClassName("maincontent");
    for (i = 0; i < maincontent.length; i++) {
        maincontent[i].style.display = "none";
    }
    var partName = obj.id + "Content";
    document.getElementById(partName).style.display = "block";
    closeNav();
}

function openNav() {
    document.getElementById('sidebar').style.width = "250px";
    document.getElementById('sidebar').style.transition = "0.3s";
}
function closeNav() {
    document.getElementById('sidebar').style.width = "0";
    document.getElementById('sidebar').style.transition = "0.6s";
}

function triggerImgUpdating() {
    document.getElementById("fileToUpload").click();
}
function triggerSubmit() {
    document.getElementById("submit").click();
}
function logout() {
    location = "../forms/loginForm/logIn.php";
}

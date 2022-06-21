function checkPasswords() {
    var psw1 = document.form.psw.value;
    var psw2 = document.form.conf_psw.value;
    if (psw2 !== psw1) {
        alert("password must match !");
        document.form.conf_psw.value = "";
        document.form.conf_psw.focus();
    }
}
function checkPswLength() {
    var p = document.form.psw.value;
    if (p.length <= 8) {
        alert('password must be longer than 8 character !');
        document.form.psw.value = "";
        document.form.psw.focus();
    }
}
function checkAge(birth) {
    if(!(document.form.birth.value.includes('/'))){
        if(!(document.form.birth.value.split('/')[1].includes('/'))) {
            alert('please insert a valid date!\nmust be dd/mm/yyyy');
            document.form.birth.value = "";
            document.form.birth.focus();
        }
    } else {
        var date = birth.split('/');
        var day = date[0];
        var month = date[1];
        var year = date[2];
        if (year) {
            if (year.length !== 4) {
                alert('please insert a valid date!\nmust be dd/mm/yyyy');
                document.form.birth.value = "";
                document.form.birth.focus();
            }
        }

        const currYear = new Date().getFullYear();
        if (currYear - parseInt(year) < 18) {
            document.form.birth.value = "";
            alert("You must be at least 18y.o. to sign in !");
            document.form.birth.focus();
        }
    }
}
function check(){
    var x = document.getElementById('E-mail').value;
    var y = document.getElementById('Pass').value;
    if((x.trim()) == '' || (y.trim()) == '')
    {
        return false;
    }
    else{
        return true;
    }
}
function sign_check(){
    var x = document.getElementById('E-mail').value;
    var y = document.getElementById('Pass').value;
    var z = document.getElementById('Cnf').value;
    var pass = /(?=^.{8,8}$)((?=.*\d)(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
    if((x.trim()) == '' || y == '' || z == '')
    {
        return false;
    }
    else if(y.match(pass)) {
        if((y.trim()) != (z.trim())){

            alert("Password and Confirm Password must be same");
            return false;
        }
        else {
            return true;
        }
    }
    else{
        alert("Password must be 8 disgit long with 1 char 1 uppercase and lowercase letter and contain 1 number");
        return false;
    }
}

function add(){
    var x = document.getElementById('add');
    var z = (x.innerHTML);
    if( (z.trim()) == "ADD NEW"){
        x.style.backgroundColor = "red";
        x.innerHTML = "Cancel";
        document.getElementById('work').style.display = "flex";
    }
    else {
        x.style.backgroundColor = "#2F0C49";
        x.innerHTML = "ADD NEW";
        document.getElementById('work').style.display = "none";
    }
}
function newsummit(){
    var exp = /[a-zA-Z0-9\s]{5,100}/;
    var text = document.getElementById('new_work').value;
    if(text == "")
    {
        alert("Enter the input first");
        return false;
    }
    else if(text.match(exp)){
        return true;
    }
    else{
        alert("Input must be alphanumeric and in between 5 to 100 letters");
        return false;
    }
}

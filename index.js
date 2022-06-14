function validateForm(){
    let name = document.getElementById("name").value;
    if (name.length < 7 | name.length > 12){
        alert("The name should be betwwen 7 and 12 letters");
    }
    let phone = document.getElementById("mobile").value;
    let phone1 = phone.toString();
    if (phone1.length != 10){
        alert("The phone number should be 10 digits");
    }
}
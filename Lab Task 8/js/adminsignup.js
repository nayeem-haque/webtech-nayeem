var flag = 0;

function change(x) 
{
    var format = /[@,#,$,%]/;
    var format2 = /^\d{11}$/;
    var format3 = /\S+@\S+\.\S+/;
    var format4 = /^\d{3}$/;
    var a = x.value;
    var d = new Date();

    if(a=="")
    {
        if(x.name=="username"){
            document.getElementById("usernameErr").innerHTML = "Username cannot be empty";
            document.getElementById("usernameErr").style.color = "red";
            document.getElementById("username").style.borderColor = "red";
        }
        else if(x.name=="id"){
            document.getElementById("idErr").innerHTML = "ID cannot be empty";
            document.getElementById("idErr").style.color = "red";
            document.getElementById("id").style.borderColor = "red";
        }

        else if(x.name=="name"){
            document.getElementById("nameErr").innerHTML = "Name cannot be empty";
            document.getElementById("nameErr").style.color = "red";
            document.getElementById("name").style.borderColor = "red";
        }   
        else if(x.name=="email"){
            document.getElementById("emailErr").innerHTML = "Email is required";
            document.getElementById("emailErr").style.color = "red";
            document.getElementById("email").style.borderColor = "red";
        }   
        else if(x.name=="phone"){
            document.getElementById("phoneErr").innerHTML = "Phone Cannot Be Empty";
            document.getElementById("phoneErr").style.color = "red";
            document.getElementById("phone").style.borderColor = "red";
        }                 
        else if(x.name=="gender"){
            document.getElementById("genderErr").innerHTML = "Gender cannot be empty";
            document.getElementById("genderErr").style.color = "red";
            document.getElementById("gender").style.borderColor = "red";
        }     
        else if(x.name=="Password"){
            document.getElementById("PasswordErr").innerHTML = "Password is required";
            document.getElementById("PasswordErr").style.color = "red";
            document.getElementById("Password").style.borderColor = "red";
        }       
        else if(x.name=="confirmpass" && !document.getElementById("Password").value==""){
            document.getElementById("confirmpassErr").innerHTML = "Retype the Password";
            document.getElementById("confirmpassErr").style.color = "red";
            document.getElementById("confirmpass").style.borderColor = "red";
        }       
    }
    else if((a.split(" ").length < 2) && x.name=="name")
    {
        document.getElementById("nameErr").innerHTML = "Name must have 2 words";
        document.getElementById("nameErr").style.color = "red";
        document.getElementById("name").style.borderColor = "red";
    }
    else if((!format4.test(a)) && x.name =="id")
    {
        document.getElementById("idErr").innerHTML = "Invalid id Number";
        document.getElementById("idErr").style.color = "red";
        document.getElementById("id").style.borderColor = "red";
    }
    else if((!format3.test(a)) && x.name =="email")
    {
        document.getElementById("emailErr").innerHTML = "Invalid email format";
        document.getElementById("emailErr").style.color = "red";
        document.getElementById("email").style.borderColor = "red";
    }

    
    else if((!format2.test(a)) && x.name =="phone")
    {
        document.getElementById("phoneErr").innerHTML = "Invalid Phone Number";
        document.getElementById("phoneErr").style.color = "red";
        document.getElementById("phone").style.borderColor = "red";
    }
    else if((a.length < 8) && x.name=="Password")
    {
        document.getElementById("PasswordErr").innerHTML = "Password must be 8 charecters";
        document.getElementById("PasswordErr").style.color = "red";
        document.getElementById("Password").style.borderColor = "red";
    }
    else if((!format.test(a)) && x.name=="Password")
    {
        document.getElementById("PasswordErr").innerHTML = "Password must contain at least one of the special characters (@, #, $, %)";
        document.getElementById("PasswordErr").style.color = "red";
        document.getElementById("Password").style.borderColor = "red";
    }
    else
    {
        if(x.name=="username"){
            document.getElementById("usernameErr").innerHTML = "\u2713";
            document.getElementById("usernameErr").style.color = "green";
            document.getElementById("username").style.borderColor = "";
        }
        else if(x.name=="name"){
            document.getElementById("nameErr").innerHTML = "\u2713";
            document.getElementById("nameErr").style.color = "green";
            document.getElementById("name").style.borderColor = "";
        }
        else if(x.name=="email"){
            document.getElementById("emailErr").innerHTML = "\u2713";
            document.getElementById("emailErr").style.color = "green";
            document.getElementById("email").style.borderColor = "";
        }
        else if(x.name=="id"){
            document.getElementById("idErr").innerHTML = "\u2713";
            document.getElementById("idErr").style.color = "green";
            document.getElementById("id").style.borderColor = "";
        }
        else if(x.name=="phone"){
            document.getElementById("phoneErr").innerHTML = "\u2713";
            document.getElementById("phoneErr").style.color = "green";
            document.getElementById("phone").style.borderColor = "";
        }
        else if(x.name=="gender"){
            document.getElementById("genderErr").innerHTML = "\u2713";
            document.getElementById("genderErr").style.color = "green";
            document.getElementById("gender").style.borderColor = "";
        }
        else if(x.name=="birthday"){
            document.getElementById("birthdayErr").innerHTML = "\u2713";
            document.getElementById("birthdayErr").style.color = "green";
            document.getElementById("birthday").style.borderColor = "";
        }
        else if(x.name=="Password"){
            document.getElementById("PasswordErr").innerHTML = "\u2713";
            document.getElementById("PasswordErr").style.color = "green";
            document.getElementById("Password").style.borderColor = "";
        }
        else if(x.name=="confirmpass" && x.value==document.getElementById("Password").value ){
            document.getElementById("confirmpassErr").innerHTML = "\u2713";
            document.getElementById("confirmpassErr").style.color = "green";
            document.getElementById("confirmpass").style.borderColor = "";
        }

        else if(x.name=="confirmpass" && !document.getElementById("Password").value==""){
            document.getElementById("confirmpassErr").innerHTML = "Password & Retyped Password Dosen't Match";
            document.getElementById("confirmpassErr").style.color = "red";
            document.getElementById("confirmpass").style.borderColor = "red";
        }
    }
}
function dobValidate(birth) {


        var today = new Date();
        var nowyear = today.getFullYear();
        var nowmonth = today.getMonth();
        var nowday = today.getDate();
        var b = document.getElementById('birthday').value;



        var birth = new Date(b);

        var birthyear = birth.getFullYear();
        var birthmonth = birth.getMonth();
        var birthday = birth.getDate();

        var age = nowyear - birthyear;
        var age_month = nowmonth - birthmonth;
        var age_day = nowday - birthday;


        if (age < 0 || (age == 0 && age_day < 0)) {
            age = parseInt(age) - 1;
            document.getElementById("birthdayErr").innerHTML = "<br>Birthdate cannot be later then current date";
            document.getElementById("birthdayErr").style.color = "red";
            document.getElementById("birthday").style.borderColor = "red";

        }
        else if (age_month == 0 && age_day == 0 && age==0) {
            age = parseInt(age) - 1;
            document.getElementById("birthdayErr").innerHTML = "<br>Current date cannot be Birthdate";
            document.getElementById("birthdayErr").style.color = "red";
            document.getElementById("birthday").style.borderColor = "red";

        }
        else if (age<16) {
            //age = parseInt(age) - 1;
            document.getElementById("birthdayErr").innerHTML = "<br>Age should be 16 or more";
            document.getElementById("birthdayErr").style.color = "red";
            document.getElementById("birthday").style.borderColor = "red";

        }
        else{
            document.getElementById("birthdayErr").innerHTML = "\u2713";
            document.getElementById("birthdayErr").style.color = "green";
            document.getElementById("birthday").style.borderColor = "";
        }
    }



function checkUsername(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("usernameErr").innerHTML = "Username Cannot Be Empty";
    document.getElementById("usernameErr").style.color = "red";
    document.getElementById("username").style.borderColor = "red";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    console.log(this.responseText);
    if (this.readyState == 4 && this.status == 200 && this.responseText!=0) {
       document.getElementById("usernameErr").innerHTML = "Username Already Exist";
       document.getElementById("usernameErr").style.color = "red";
       document.getElementById("username").style.borderColor = "red";
    }
    else{
       document.getElementById("usernameErr").innerHTML = "\u2713";
       document.getElementById("usernameErr").style.color = "green";
       document.getElementById("username").style.borderColor = "";
    }
  };
  xhttp.open("GET", "../model/usernameChecker.php?q="+str, true);
  xhttp.send();
}
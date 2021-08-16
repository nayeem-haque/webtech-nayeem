var flag = 0;

function change(x) 
{
    var format = /[@,#,$,%]/;
    var format2 = /^\d{11}$/;
    var format3 = /\S+@\S+\.\S+/;
    var a = x.value;
    

    if(a=="")
    {   if(x.name=="cpassword"){
            document.getElementById("cpasswordErr").innerHTML = "Current Password is required";
            document.getElementById("cpasswordErr").style.color = "red";
            document.getElementById("cpass").style.borderColor = "red";
        }
        else if(x.name=="npassword"){
            document.getElementById("npasswordErr").innerHTML = "New Password is required";
            document.getElementById("npasswordErr").style.color = "red";
            document.getElementById("npassword").style.borderColor = "red";
        }
        else if(x.name=="rnpassword"){
            document.getElementById("rnpasswordErr").innerHTML = "Retype The New the Password";
            document.getElementById("rnpasswordErr").style.color = "red";
            document.getElementById("rnpassword").style.borderColor = "red";
        }            
    }
    else if((a.length < 8) && x.name=="npassword")
    {
        document.getElementById("npasswordErr").innerHTML = "New Password must be 8 charecters";
        document.getElementById("npasswordErr").style.color = "red";
        document.getElementById("npassword").style.borderColor = "red";
    }
    else if((!format.test(a)) && x.name=="npassword")
    {
        document.getElementById("npasswordErr").innerHTML = "New Password must contain at least one of the special characters (@, #, $, %)";
        document.getElementById("npasswordErr").style.color = "red";
        document.getElementById("npassword").style.borderColor = "red";
    }
    else if(x.name=="npassword" && document.getElementById("cpassword").value==document.getElementById("npassword").value){
        document.getElementById("npasswordErr").innerHTML = "Current Password & New Password Shold Not Be Same";
        document.getElementById("npasswordErr").style.color = "red";
        document.getElementById("npassword").style.borderColor = "red";
    }
    else
    {
        if(x.name=="cpassword"){
            document.getElementById("cpasswordErr").innerHTML = "\u2713";
            document.getElementById("cpasswordErr").style.color = "green";
            document.getElementById("cpassword").style.borderColor = "";
        }
        else if(x.name=="npassword"){
            document.getElementById("npasswordErr").innerHTML = "\u2713";
            document.getElementById("npasswordErr").style.color = "green";
            document.getElementById("npassword").style.borderColor = "";
        }
        else if(x.name=="rnpassword" && x.value==document.getElementById("npassword").value ){
            document.getElementById("rnpasswordErr").innerHTML = "\u2713";
            document.getElementById("rnpasswordErr").style.color = "green";
            document.getElementById("rnpassword").style.borderColor = "";
        }

        else if(x.name=="rnpassword" && !document.getElementById("npassword").value==""){
            document.getElementById("rnpasswordErr").innerHTML = "New Password & Retyped Password Dosen't Match";
            document.getElementById("rnpasswordErr").style.color = "red";
            document.getElementById("rnpassword").style.borderColor = "red";
        }
    }

    
    
}
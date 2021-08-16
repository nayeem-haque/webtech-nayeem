var flag = 0;
function change(x) 
{
    var format = /[@,#,$,%,!,&,*]/;
    var format1 = /^\d{10}$/;
    var format2 = /^\d{11}$/;
    var format3 = /\S+@\S+\.\S+/;
    var a = x.value;
    
    if(a=="")
    {
        if(x.name=="id"){
            document.getElementById("idErr").innerHTML = "ID cannot be empty";
            document.getElementById("idErr").style.color = "red";
            document.getElementById("id").style.borderColor = "red";
        }                
        else if(x.name=="name"){
            document.getElementById("nameErr").innerHTML = "Name is required";
            document.getElementById("nameErr").style.color = "red";
            document.getElementById("name").style.borderColor = "red";
        }     
        else if(x.name=="stock"){
            document.getElementById("stockErr").innerHTML = "Stock is required";
            document.getElementById("stockErr").style.color = "red";
            document.getElementById("stock").style.borderColor = "red";
        }    
        else if(x.name=="variant"){
            document.getElementById("variantErr").innerHTML = "Variant is required";
            document.getElementById("variantErr").style.color = "red";
            document.getElementById("variant").style.borderColor = "red";
        }  
        else if(x.name=="planted"){
            document.getElementById("plantedErr").innerHTML = "Planted is required";
            document.getElementById("plantedErr").style.color = "red";
            document.getElementById("planted").style.borderColor = "red";
        }        
    }
    
    else
    {
        if(x.name=="id"){
            document.getElementById("idErr").innerHTML = "\u2713";
            document.getElementById("idErr").style.color = "green";
            document.getElementById("id").style.borderColor = "";
            flag=1;
        }

        if(x.name=="name"){
            document.getElementById("nameErr").innerHTML = "\u2713";
            document.getElementById("nameErr").style.color = "green";
            document.getElementById("name").style.borderColor = "";
            flag=1;
        }
         if(x.name=="stock"){
            document.getElementById("stockErr").innerHTML = "\u2713";
            document.getElementById("stockErr").style.color = "green";
            document.getElementById("stock").style.borderColor = "";
            flag=1;
        }
         if(x.name=="variant"){
            document.getElementById("variantErr").innerHTML = "\u2713";
            document.getElementById("variantErr").style.color = "green";
            document.getElementById("variant").style.borderColor = "";
            flag=1;
        }
         if(x.name=="planted"){
            document.getElementById("plantedErr").innerHTML = "\u2713";
            document.getElementById("plantedErr").style.color = "green";
            document.getElementById("planted").style.borderColor = "";
            flag=1;
        }
       
    }
    if(flag==1){
    document.getElementById("submit").disabled = false;
    }
}

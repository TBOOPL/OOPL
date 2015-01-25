function cekUsername(str) {
	if (str=="") {
		document.getElementById("txtUsername").innerHTML="";
		return;
	} 
	if (window.XMLHttpRequest) {
		// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlhttp=new XMLHttpRequest();
	} else { // code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
		if (xmlhttp.readyState==4 && xmlhttp.status==200) {
			document.getElementById("txtUsername").innerHTML=xmlhttp.responseText;
			return false;
			}
		else{
			return true;
		}
	}
		xmlhttp.open("GET","cekusername.php?id="+str,true);
		xmlhttp.send();
}
function validasi(){
 
    var nama_depan = document.getElementById('txt_nama');
    var username =document.getElementById('txt_username');
    var email = document.getElementById('txt_email');
	var password=document.getElementById('password');
	var password2=document.getElementById('password2');
	
		if(isAlphabet(nama_depan, "Nama hanya berisi huruf!")){
			if(lengthRestriction(username, 6, 16,"Harap isikan Username sebanyak ")){
				if(emailValidator(email, "Email anda salah!")){
					if(notEmpty(password,"Silahkan Isikan Password")){
						if(notEmpty(password2,"Silahkan Ketik Ulang Password")){
							if(lengthRestriction(password, 6, 16,"Harap isikan Password sebanyak")){
								if (matchPassword(password,password2,"Password Tidak Sama!")){
									return true;
								}
							}
						}
					}
				}
			}
		 }
   return false;
}
function matchPassword(elem,elem2,helperMsg){
		if(elem.value==elem2.value){
			return true;
		}
		else {
			alert(helperMsg);
			elem.focus();
			return false;
		}
}

function notEmpty(elem, helperMsg){
    if(elem.value.length == 0){
        alert(helperMsg);
        elem.focus();
        return false;
    }
    return true;
}
 
function isNumeric(elem, helperMsg){
    var numericExpression = /^[0-9]+$/;
    if(elem.value.match(numericExpression)){
        return true;
    }else{
        alert(helperMsg);
        elem.focus();
        return false;
    }
}
 
function isAlphabet(elem, helperMsg){
    var alphaExp = /^[a-zA-Z]+$/;
    if(elem.value.match(alphaExp)){
        return true;
    }else{
        alert(helperMsg);
        elem.focus();
        return false;
    }
}
 
function isAlphanumeric(elem, helperMsg){
    var alphaExp = /^[0-9a-zA-Z\-\ \.]+$/;
    if(elem.value.match(alphaExp)){
        return true;
    }else{
        alert(helperMsg);
        elem.focus();
        return false;
    }
}
function lengthRestriction(elem, min, max,helperMsg){
    var uInput = elem.value;
    if(uInput.length >= min && uInput.length <= max){
        return true;
    }else{
        alert(helperMsg +min+ " sampai " +max+ " karakter");
        elem.focus();
        return false;
    }
}
 

function emailValidator(elem, helperMsg){
    var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
    if(elem.value.match(emailExp)){
        return true;
    }else{
        alert(helperMsg);
        elem.focus();
        return false;
    }
}

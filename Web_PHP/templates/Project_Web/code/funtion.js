function myFunction() {
	var x = document.getElementById("myTopnav");
	if (x.className === "topnav") {
	    x.className += " responsive";
	} else {
	    x.className = "topnav";
	}
}
	var person = [];
	function signup(){
		var name = document.getElementById("inputName").value;
		person.push(name);
		var phone = document.getElementById("inputPhone").value;
		person.push(phone);
		var email = document.getElementById("inputEmail").value;
		person.push(email);
		var username = document.getElementById("inputUsername").value;
		person.push(username);
		var password = document.getElementById("inputPass").value;
		person.push(password);
		
	}
	function display(){
			document.getElementById("display").innerHTML = person.join(" * ");
		}
	function signin(){
		alert(person.join(" * "))
		var usernameSi = document.getElementById("Username").value;
		var passwordSi = document.getElementById("Password").value;
		var i;
		for ( i = 0; i < person.length; i++) {
			if (person[i].username == usernameSi && person[i].password == passwordSi) {
				alert("sssss");
			}
			else {
				alert("message?: DOMString")
			}
		}
		// if(usernameSi == "hhhh" && passwordSi == "00000"){
				
		// 	alert("Successful");
		// }
		// else{
		// 	alert("wrong!");
		// }		
	}
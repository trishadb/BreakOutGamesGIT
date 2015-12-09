/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready( function () {
	
$('#contact').on('submit', function(event) {
	event.preventDefault();
if(validate()){

$("span.Name").text($("input.Name").val());
$("span.Email").text($("input.Email").val());
$("span.Subject").text($("input.Subject").val());


}
});

function validate() {
    
  

$("input").css("border-color","white")
 	var success = true;
   

	var fill = $("input.Name");
        var fill1 = $("input.Email")
        var fill2 = $("input.Subject")
	
 	if(fill.val().length==0) {
 		fill.css("border-color","Red");
                success=false;
            }
         
    
    
    	if(fill1.val().length==0) {
 		fill1.css("border-color","Red");
                success=false;
    }
    
    if(fill2.val().length==0) {
 		fill2.css("border-color","Red");
                success=false;
    }
    
   return success;
}

});

////////////////////////////////////////////////////////////////////////////////////////


$(document).ready( function () {
	
$('#signLog').on('submit', function(event) {
	event.preventDefault();
if(validate()){

$("span.username").text($("input.username").val());
$("span.password").text($("input.password").val());
}
});

function validate() {
$("input").css("border-color","white")
 	var success = true;
   

	var fill = $("input.username");
        var fill1 = $("input.password")
        
	
 	if(fill.val().length==0) {
 		fill.css("border-color","Red");
                success=false;
            }
                
      
    	if(fill1.val().length==0) {
 		fill1.css("border-color","Red");
                success=false;
    }
    

    
   return success;
}

});


////////////////////////////////////////////////////////


$(document).ready( function () {
    
$('#signLogin').on('submit', function(event) {
    event.preventDefault();
if(validate()){

$("span.user").text($("input.user").val());
$("span.pass").text($("input.pass").val());
$("span.email").text($("input.email").val());
$("span.add").text($("input.add").val());
$("span.PhoneNumber").text($("input.PhoneNumber").val());

}
});

function validate() {
$("input").css("border-color","white")
    var success = true;
   

    var user = $("input.user");
    var pass = $("input.pass")
    var email = $("input.email");
    var add = $("input.add");
    var PhoneNumber = $("input.PhoneNumber")
        
    
    if(user.val().length==0) {
        user.css("border-color","Red");
                success=false;
            }
                
      
        if(pass.val().length==0) {
        pass.css("border-color","Red");
                success=false;
    }
    

    if(email.val().length==0) {
        email.css("border-color","Red");
                success=false;
    }

    if(add.val().length==0) {
        add.css("border-color","Red");
                success=false;
    }

    if(PhoneNumber.val().length==0) {
        PhoneNumber.css("border-color","Red");
                success=false;
    }

    
   return success;
}

});

/////////////////////////////////////////////////////////////////////////////////////////


$(document).ready( function () {
	
$('#contact').on('submit', function(event) {
	event.preventDefault();
if(validate()){

$("span.Name").text($("input.Name").val());
$("span.Email").text($("input.Email").val());
$("span.Subject").text($("input.Subject").val());


}
});

function validate() {
    
  

$("input").css("border-color","white")
 	var success = true;
   

	var fill = $("input.Name");
        var fill1 = $("input.Email")
        var fill2 = $("input.Subject")
	
 	if(fill.val().length==0) {
 		fill.css("border-color","Red");
                success=false;
            }
         
    
    
    	if(fill1.val().length==0) {
 		fill1.css("border-color","Red");
                success=false;
    }
    
    if(fill2.val().length==0) {
 		fill2.css("border-color","Red");
                success=false;
    }
    
   return success;
}

});

////////////////////////////////////////////////////////////////////////////////////////


$(document).ready( function () {
	
$('#roompage').on('submit', function(event) {
	event.preventDefault();
if(validate()){

$("span.type").text($("input.type").val());
$("span.arrival").text($("input.arrival").val());
$("span.departure").text($("input.departure").val());
$("span.people").text($("input.people").val());
}
});

function validate() {
$("input").css("border-color","white")
 	var success = true;
   

	var type = $("input.type");
        var arrival = $("input.arrival")
        var departure = $("input.departure");
        var people = $("input.people")
        
	
 	if(type.val().length==0) {
 		type.css("border-color","Red");
                success=false;
            }
                
      
    	if(arrival.val().length==0) {
 		arrival.css("border-color","Red");
                success=false;
    }
    
    if(departure.val().length==0) {
 		departure.css("border-color","Red");
                success=false;
    }
    
     if(people.val().length==0) {
 		people.css("border-color","Red");
                success=false;
    }

    
   return success;
}

});
///////////////////////////////////////////////////////////////////////////////////////

/*$(document).ready( function () {
	
$('#roompage').on('submit', function(event) {
	event.preventDefault();
if(validate()){

$("span.type").text($("input.type").val());
$("span.arrival").text($("input.arrival").val());
$("span.departure").text($("input.departure").val());
$("span.people").text($("input.people").val());

}
});

function validate() {
    
  

$("input").css("border-color","white")
 	var success = true;
   

	var typ= $("input.type");
        var arri = $("input.arrival")
        var dep = $("input.departure")
        var peo = $("input.people");
	
 	if(typ.val().length==0) {
 		typ.css("border-color","Red");
                success=false;
            }
         
    
    
    	if(arri.val().length==0) {
 		arri.css("border-color","Red");
                success=false;
    }
    
    if(dep.val().length==0) {
 		dep.css("border-color","Red");
                success=false;
    }

     if(peo.val().length==0) {
        peo.css("border-color","Red");
                success=false;
    }
    
   return success;
}

});*/

////////////////////////////////////////////////////////////////////////////////////////////







//////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////



/*function fillIt(){
    var username=document.getElementById("username");
    var password=document.getElementById("password");
    
    
     var fill4 = username.value;
		if (fill4 == null || fill4 == "") {
                   alert("Please complete the form.");
                    return false;
    }
    var fill5 = password.value;
		if (fill5 == null || fill5 == "") {
                   alert("Please complete the form.");
                    return false;
    }
    
}*/

//////////////////////////////////////////////////////////////////////////////////////

/*function fillMe(){
    var user=document.getElementById("user");
    var pass=document.getElementById("pass");
    var email=document.getElementById("email");
    var add=document.getElementById("add");
    var PhoneNumber=document.getElementById("PhoneNumber");
    
     var fill6 = user.value;
		if (fill6 == null || fill6 == "") {
                   alert("Please complete the form.");
                    return false;
    }
    var fill7 = pass.value;
		if (fill7 == null || fill7 == "") {
                   alert("Please complete the form.");
                    return false;
    }
    
     var fill8 = email.value;
		if (fill8 == null || fill8 == "") {
                   alert("Please complete the form.");
                    return false;
    }
     var fill9 = add.value;
		if (fill9 == null || fill9 == "") {
                   alert("Please complete the form.");
                    return false;
    }
    
     var fill10 = PhoneNumber.value;
		if (fill10 == null || fill10 == "") {
                   alert("Please complete the form.");
                    return false;
    }


    
}*/
//////////////////////////////////////////////////////////////////

/*function fillUp(){

    var Name = document.getElementById("Name");
    var Email = document.getElementById("Email");
    var Subject = document.getElementById("Subject");
    
    
    var fill = Name.value;
        if (fill == null || fill == "") {
                   alert("Please complete the form.");
                    return false;
    }
    var fill2 = Email.value;
        if (fill2 == null || fill2 == "") {
                   alert("Please complete the form.");
                    return false;
    }
    
     var fill3 = Subject.value;
        if (fill3 == null || fill3 == "") {
                   alert("Please complete the form.");
                    return false;
    }
}*/
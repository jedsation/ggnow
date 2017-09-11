function onSuccess(googleUser) {
      console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
    }
function onFailure(error) {
      console.log(error);
    }
function renderButton() {
      gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 240,
        'height': 50,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
      });
}
//function to validate email pattern
function ValidateEmail(email){
	var email_format =  /^[a-zA-Z0-9._\-]+@[a-zA-Z0-9]+([.\-]?[a-zA-Z0-9]+)?([\.]{1}[a-zA-Z]{2,4}){1,4}$/;
	return email_format.test(email); //return true if passed data matches the pattern
}

$(document).ready(function(){
	var reg_uname= "";
	var reg_email= "";
	var reg_pword1= "";
	var reg_pword2= "";

	//validate username
	$("#reg_uname").blur(function(){
		var reg_uname_value = $(this).val();
		if(reg_uname_value == ""){
			$("#reg_uname").css("border-color", "red");
			$("#reg_uname_error").html("Please enter username");
			reg_uname = "";
			$("#reg_uname").focus();
			return false;
		}
		else if(reg_uname_value.length < 3){
			$("#reg_uname").css("border-color", "red");
			$("#reg_uname_error").html("Username must be at least 3 characters long");
			reg_uname = "";
			$("#reg_uname").focus();
			return false;
		}
		else{
			$("#reg_uname").css("border-color", "");
			$("#reg_uname_error").html("");
			reg_uname = reg_uname_value;	
		}
		return true;
	});
	//validate email
	$("#reg_email").blur(function(){
		var reg_email_value = $(this).val();
			
		if(reg_email_value == "" || (!ValidateEmail(reg_email_value))){
			$("#reg_email").css("border-color", "red");
			$("#reg_email_error").html("Please enter a valid email!");
			reg_email = "";
			$("#reg_email").focus();
			return false;
		}
		else{
			$("#reg_email").css("border-color", "");
			$("#reg_email_error").html("");
			reg_email = reg_email_value;
			/*
			$.ajax({
				type:'POST',
				url:'../functions/reg_log_validate.php',
				data:'reg_email='+reg_email_value,
				success:function(message){
					$("#reg_email_error").html(message);
				}
			});*/
		}
		return true;
	});
	$("#reg_pword1").blur(function(){
		var reg_pass1_value = $(this).val();
		if(reg_pass1_value == ""){
			$("#reg_pword1").css("border-color", "red");
			$("#reg_pword1_error").html("Please enter a password");
			reg_pass1 = "";
			$("#reg_pword1").focus();
			return false;
		}
		else if(reg_pass1_value.length < 6){
			$("#reg_pword1").css("border-color", "red");
			$("#reg_pword1_error").html("Password must be at least 6 characters long");
			reg_pass1 = "";
			$("#reg_pword1").focus();
			return false;
		}
		else{
			$("#reg_email").css("border-color", "");
			$("#reg_pword1_error").html("");
			reg_pword1 = reg_pass1_value;
		}
		return true;
	});
	$("#reg_pword2").blur(function(){
		var reg_pass2_value = $(this).val();
		if(reg_pass2_value == ""){
			$("#reg_pword2").css("border-color", "red");
			$("#reg_pword2_error").html("Please enter a password");
			reg_pword2 = "";
			$("#reg_pword2").focus();
			return false;
		}
		else if(reg_pword1 !== reg_pass2_value){
			$("#reg_pword2").css("border-color", "red");
			$("#reg_pword2_error").html("Passwords do not match");
			reg_pword2 = "";
			$("#reg_pword1").focus();
			return false;
		}
		else{
			$("#reg_pword1").css("border-color", "");
			$("#reg_pword2_error").html("");
			reg_pword2 = reg_pass2_value;
		}
		return true;
	});
	
	$("#reg_submit").submit(function(){
		if( reg_uname == "" || reg_email == ""){
			$("#reg_form_error").html("Please fill out");
		}
		else{
			$("#reg_form_error").html("Success");
			$.ajax({
				type:'POST',
				url:'../functions/reg_log_validate.php',
				data:'reg_uname='+reg_uname_value,
				success:function(message){
					$("#reg_uname_error").html(message);
				}
			});
		}
		
	});

});
	



	





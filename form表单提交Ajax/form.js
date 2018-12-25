$(function(){
	$(".submit").click(function(){
		var username = $("#username").val();
		var email = $("#email").val();
		var tel = $("#phone").val();
		var message = $("#message").val();
		if(username.length == 0){
			alert("username cannot be empty!");
			return false;
		}
		// if(email.length == 0){
		// 	alert("email cannot be empty!");
		// 	return false;
		// }
		// var myreg1 = /^[a-z0-9]+([._\\-]*[a-z0-9])*@([a-z0-9]+[-a-z0-9]*[a-z0-9]+.){1,63}[a-z0-9]+$/;
	 //    if (!myreg1.test(email)) {
	 //    	alert("The email format is incorrect, please re-enter!");
	 //        return false;
	 //    }
		if(tel.length == 0){
			alert("tel cannot be empty!");
			return false;
		}
		var myreg2 = /^(((13[0-9]{1})|(15[0-9]{1})|(18[0-9]{1})|(17[0-9]{1}))+\d{8})$/;
	    if (!myreg2.test(tel)) {
	    	alert("The mobile phone format is incorrect, please re-enter!");
	        return false;
	    }
		if(message.length == 0){
			alert("message cannot be empty!");
			return false;
		}

		$.ajax({
			url:"ajax.php",
			type: "POST",
		   	data: {"username":username,"email":email,"tel":tel,"message":message},
		   	dataType: "json",
		   	success: function(msg){
		   		if(msg.status==1){
		   			alert(msg.err);
		   			$("#username").val('');
		   			$("#email").val('');
		   			$("#phone").val('');
		   			$("#message").val('');
		   		}else{
		   			alert(msg.err);
		   		}
		   	}
		})
	})
})
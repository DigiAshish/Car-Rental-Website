jQuery(document).ready(function() {

	$.backstretch("assets/img/backgrounds/1.JPG");

    //form functions for sign in labels
	$("#form-username").focus(function(){
		
       $("#form-username").blur(function(){
		    var reg =  new RegExp(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/);
			if($("#form-username").val()!=null && $("#form-username").val()=="")
			{
				$("#form-username").attr("placeholder", "Enter a valid email id"); 
				$("#form-username").addClass("error-border");				//when text is empty
			}
			else if(reg.test($("#form-username").val()) )
			{ 
				$("#form-username").removeClass("error-border");	
			}
			else
			{
				$("#form-username").attr("placeholder", "Invalid email id"); 
				$("#form-username").addClass("error-border");	
			}
			
	   });
    });
	
	$("#form-user-password").focus(function(){
		
       $("#form-user-password").blur(function(){
			if($("#form-user-password").val()!=null && $("#form-user-password").val()=="")
			{
				$("#form-user-password").attr("placeholder", "Enter a valid password");
				$("#form-user-password").addClass("error-border");				//when text is empty
			}
			else if($("#form-user-password").val().length>=8 )
			{ 
			    $("#form-user-password").removeClass("error-border");		
			}
			else
			{
				$("#form-user-password").addClass("error-border");	
			}
			
	   });
    });
	
	//form functions from sign up labels 
	$("#form-first-name").focus(function(){
		
       $("#form-first-name").blur(function(){
		    var reg = new RegExp('^[A-Z0-9a-z]+$');
			if($("#form-first-name").val()!=null && $("#form-first-name").val()=="")
			{
					$("#form-first-name").attr("placeholder", "Enter a valid name"); 
	                $("#form-first-name").addClass("error-border");					//when text is empty
			}
			else if(reg.test($("#form-first-name").val()) )
			{ 
				$("#form-first-name").removeClass("error-border");
				$("#form-first-name").show();
			}
			else
			{
				$("#form-first-name").attr("placeholder", "Invalid Name");
				$("#form-first-name").addClass("error-border");
			}
			
			
	   });
    });
	
    $("#form-last-name").focus(function(){
		
       $("#form-last-name").blur(function(){
		    var reg = new RegExp('^[A-Z0-9a-z]+$');
			if($("#form-last-name").val()!=null && $("#form-last-name").val()=="")
			{
					$("#form-last-name").attr("placeholder", "Enter a valid name");   //when text is empty
					$("#form-last-name").addClass("error-border");
			}
			else if(reg.test($("#form-last-name").val()) )
			{ 
				$("#form-last-name").removeClass("error-border");
			}
			else
			{
				$("#form-last-name").attr("placeholder", "Invalid Name");
				$("#form-last-name").addClass("error-border");
			}
			
			
	   });
    });
	$("#form-email").focus(function(){
		
       $("#form-email").blur(function(){
		    var reg =  new RegExp(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/);
			if($("#form-email").val()!=null && $("#form-email").val()=="")
			{
				$("#form-email").attr("placeholder", "Enter a valid email id"); 
				$("#form-email").addClass("error-border");				//when text is empty
			}
			else if(reg.test($("#form-email").val()) )
			{ 
				$("#form-email").removeClass("error-border");	
			}
			else
			{
				$("#form-email").attr("placeholder", "Invalid email id"); 
				$("#form-email").addClass("error-border");	
			}
			
	   });
    });
	$("#form-password").focus(function(){
		
       $("#form-password").blur(function(){
			if($("#form-password").val()!=null && $("#form-password").val()=="")
			{
				$("#form-password").attr("placeholder", "Enter a valid password");
				$("#form-password").addClass("error-border");				//when text is empty
			}
			else if($("#form-password").val().length>=8 )
			{ 
			    $("#form-password").removeClass("error-border");		
			}
			else
			{
				$("#form-password").addClass("error-border");	
			}
			
	   });
    });
	$("#form-license").focus(function(){
		
       $("#form-license").blur(function(){
			if($("#form-license").val()!=null && $("#form-license").val()=="")
			{
				$("#form-license").attr("placeholder", "Enter a valid license"); 
				$("#form-license").addClass("error-border");			//when text is empty
			}
			else if($("#form-license").val().length>=8 )
			{ 
				
				$("#form-license").removeClass("error-border");
				
			}
			else
			{
				$("#form-license").attr("placeholder", "Invalid license"); 
				$("#form-license").addClass("error-border");
			}
			
	   });
    });
});
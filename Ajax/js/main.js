$(document).ready(function(){ 

	//01 Ajax:- Check Username Availibility
	$('#username').blur(function(){
		var username = $(this).val();
			$.ajax({
				url:"check/checkuser.php",
				method: "POST",
				data:{username:username},
				dataType:"text",
				success:function(data){
					$('#userstatus').html(data);
				}
			});
	});

	//02 Ajax:- Autocomplete Textbox
	$(#skill).keyUp(function(){
		var skill = $(this).val(); 
		if(skill != ''){
			$.ajax({
				url:"check/checkskill.php",
				method: "POST",
				data:{skill:skill},
				dataType:"text",
				success:function(data){
					$('#statusskill').html(data);
				}
			});
		};
	});


 });  
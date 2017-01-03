  
			$(document).ready(function(){
				$("#boton").click(function(){
					var v_user=$("#user").val();
					var v_pass2=$("#pass").val();

					$.post("loginProceso.php",{user1:v_user, pass1:v_pass2}, function(result){
						$("#login").html(result);
					});
			});
			});
		
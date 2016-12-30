<script src="js/jquery-1.4.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$(".info").hide('fast');
	$("#loginform").validate({
		rules: {
				username: {required: true},		
				password: {required: true}
				},
		messages: {
				username: {required: " Username harus diisi"},
				password: {required: "Password harus diisi"}
				},
		errorPlacement: function(error, element) {
				error.appendTo(element.parent("td"));
				},
		submitHandler: function(form) {
				$(".info").hide('fast');
				var dataForm = $("#loginform").serialize();
				var username = $("input[name=username]").val();
				var password = $("input[name=password]").val();
				
				$(".info").html("Cheking ...");
				$.ajax({
					type:"POST",
					url:"modul/mod_login/login_action.php",
					data:dataForm,
					success: function(data){
						if(data=='sukses'){
							window.location.href = 'media.php?module=home';
						}
						else{
							$(".info").html(data);
							$(".info").slideDown(500);
							$(".info").fadeOut(5000);
						}
					}
				});
			return false;
		}
	});
})
</script>


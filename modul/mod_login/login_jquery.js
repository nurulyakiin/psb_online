<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$("#login").validate({
		rules: {
				no_peserta: {required: true,number: true},		
				password: {required: true}
				},
		messages: {
				no_peserta: {required: "No Peserta harus diisi",number: "No Peserta harus angka"},
				password: {required: "Password harus diisi"}
				},
		errorPlacement: function(error, element) {
				error.appendTo(element.parent("td"));
				},
		submitHandler: function(form) {
				var dataForm = $("#login").serialize();
				var no_peserta = $("input[name=no_peserta]").val();
				var password = $("input[name=password]").val();
				$.ajax({
					type:"POST",
					url:"modul/mod_login/login_action.php",
					data:dataForm,
					success: function(data){
						if(data=='sukses'){
							window.location.href = '?module=akun';
						}
						else{
							// window.location.href = '?module=akun';
							$("#info").html(data);
							$("#info").fadeOut(5000);
						}
					}
				});
			return false;
		}
	});
})
</script>

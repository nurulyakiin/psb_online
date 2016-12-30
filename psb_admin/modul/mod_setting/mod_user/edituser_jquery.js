<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$("#user").validate({
		rules: {		
					username: {required: true},
					password: {required: true,maxlength: 32},
					name: {required: true},
					alamat: {required: true},
					isenable: {required: true}
					},
		messages:	{
					username: {required: "Username Harus Diisi"},
					password: {required: "Password Harus Diisi"},
					name: {required: "Status Harus Diisi"},
					alamat: {required: "Alamat Harus Diisi"},
					isenable: {required: "Hak Akses Harus Diisi"}
					},
		errorPlacement: function(error, element) {
					error.appendTo(element.parent("td"));
					},
		submitHandler: function(form) {
				var dataForm = $("#user").serialize();
				var username = $("input[name=username]").val();
				var password = $("input[name=password]").val();
				var name = $("input[name=name]").val();
				var alamat = $("input[name=alamat]").val();
				var isenable = $("input[name=isenable]").val();

				$.ajax({
					type:"POST",
					url:"modul/mod_setting/mod_user/edituser_query.php",
					data:dataForm,
					success: function(data){
						if(data=='sukses'){
								$("#msg").html("Data Telah Tersimpan");
								$("#msg").fadeOut(5000);
								window.location.href = '?module=user';
						}
						else{
							$("#msg").html(data);
							$("#msg").fadeOut(5000);
						}
					}
				});
		return false;
		}
	});
})
</script>


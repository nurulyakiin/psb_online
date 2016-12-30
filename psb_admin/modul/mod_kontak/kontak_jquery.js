<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$("#kontak").validate({
			rules: {		
				email: {required: true,email: true},
				subjek:{required: true},
				pesan:{required: true}
				},
		messages: {
				email: {required: "Email Harus Diisi", email: "E-mail Tidak Valid"},
				subjek:{required: "Subjek Harus Diisi"},
				pesan:{required: "Pesan Harus Diisi"}
				},
		errorPlacement: function(error, element) {
				error.appendTo(element.parent("td"));
				},
		submitHandler: function(form) {
					var dataForm = $("#kontak").serialize();
					var email = $("input[name=email]").val();
					var subjek = $("input[name=subjek]").val();
					var pesan = $("input[name=pesan]").val();

					$.ajax({
						type:"POST",
						url:"modul/mod_kontak/kontak_query.php",
						data:dataForm,
						success: function(data){
							if(data=='sukses'){
								$("#msg").html("Data Telah Tersimpan");
								$("#msg").fadeOut(5000);
								window.location.href = '?module=kontak';
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


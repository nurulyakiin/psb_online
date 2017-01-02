<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$("#formulir").validate({
			rules: {		
					nisn: {required: true,number: true,minlength: 10,maxlength: 10},
					status: {required: true},
					no_peserta: {required: true},
					no_formulir: {required: true}
					},
		messages:	{
					nisn: {required: "NISN Harus Diisi",number: "NISN Harus Angka",minlength: "Minimal 10 Digit",maxlength: "Maksimal 10 Digit"},
					status : {required: "status"},
					no_peserta : {required: "no_peserta"},
					no_formulir : {required: "no_formulir"}
					},
		errorPlacement: function(error, element) {
					error.appendTo(element.parent("td"));
					},
		submitHandler: function(form) {
			var dataForm = $("#formulir").serialize();
			var nisn = $("input[name=nisn]").val();
			var status = $("input[name=status]").val();
			var no_peserta = $("input[name=no_peserta]").val();
			var no_formulir = $("input[name=no_formulir]").val();

			$.ajax({
				type:"POST",
				url:"modul/mod_admpdb/mod_formulir/formulir_query.php",
				data:dataForm,
				success: function(data){
					if(data=='sukses'){
						window.location.href = '?module=formulir';
						$("#msg").html("Data Telah Tersimpan");
						$("#msg").fadeOut(5000);
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


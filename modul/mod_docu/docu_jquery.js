<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$("#docu").validate({
			rules: {		
					id_keterangansiswa: {required: true},
					userfile: {required: true}
					},
		messages:	{
					id_keterangansiswa: {required: "Nama Siswa Harus Diisi"},
					userfile: {required: "NISN Harus Diisi"}
					},
		errorPlacement: function(error, element) {
					error.appendTo(element.parent("td"));
					},
		submitHandler: function(form) {
			var dataForm = $("#docu").serialize();
			var id_keterangansiswa = $("input[name=id_keterangansiswa]").val();
			var userfile = $("input[name=userfile]").val();

			$.ajax({
				type:"POST",
				url:"modul/mod_docu/docu_action.php",
				contentType: false,       // The content type used when sending data to the server.
				cache: false,             // To unable request pages to be cached
				processData:false,        // To send DOMDocument or non processed data file it is set to false
				data:dataForm,
				success: function(data){
					if(data=='sukses'){
						window.location.href = '?module=akun';
					}
					else{
						window.location.href = '?module=akun';
						// $("#info").html(data);
						// $("#info").fadeOut(5000);
					}
				}
			});
		return false;
		}
	});
})
</script>

<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$("#alamat").validate({
			rules: {		
					id_keterangansiswa: {required: true},
					jarak: {required: true,number: true,maxlength: 10},
					tempat: {required: true},
					kendar: {required: true},
					ref: {required: true}
					},
		messages:	{
					id_keterangansiswa: {required: "Nama Siswa Harus Diisi"},
					jarak: {required: "NISN Harus Diisi",number: "NISN Harus Angka",maxlength: "Maksimal 10 Digit"},
					tempat: {required: "Nama Siswa Harus Diisi"},
					kendar: {required: "Tempat Lahir Harus Diisi"},
					ref: {required: "Tanggal Lahir Harus Diisi"}
					},
		errorPlacement: function(error, element) {
					error.appendTo(element.parent("td"));
					},
		submitHandler: function(form) {
			var dataForm = $("#alamat").serialize();
			var id_keterangansiswa = $("input[name=id_keterangansiswa]").val();
			var jarak = $("input[name=jarak]").val();
			var tempat = $("input[name=tempat]").val();
			var kendar = $("input[name=kendar]").val();
			var ref = $("input[name=ref]").val();

			$.ajax({
				type:"POST",
				url:"modul/mod_alamat/alamat_action.php",
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

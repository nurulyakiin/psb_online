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
					jarak: {required: "Jarak ke Sekolah Harus di Isi",number: "Jarak Harus Angka",maxlength: "Maksimal 10 Digit"},
					tempat: {required: "Tinggal dengan harus diisi"},
					kendar: {required: "Kendaraan Harus Diisi"},
					ref: {required: "Referensi Harus Diisi"}
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
				url:"modul/mod_admpdb/mod_alamat/alamat_query.php",
				data:dataForm,
				success: function(data){
					if(data=='sukses'){
						window.location.href = '?module=alamat';
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


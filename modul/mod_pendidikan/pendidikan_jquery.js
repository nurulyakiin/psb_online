<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$("#pendidikan").validate({
			rules: {		
					id_keterangansiswa: {required: true},
					asal: {required: true},
					sttb: {required: true},
					lama: {required: true},
					tgl: {required: true},
					pindah: {required: true}
					},
		messages:	{
					id_keterangansiswa: {required: "Nama Siswa Harus Diisi"},
					asal: {required: "NISN Harus Diisi"},
					sttb: {required: "Nama Siswa Harus Diisi"},
					lama: {required: "Tempat Lahir Harus Diisi"},
					tgl: {required: "Tanggal Lahir Harus Diisi"},
					pindah: {required: "Tanggal Lahir Harus Diisi"}
					},
		errorPlacement: function(error, element) {
					error.appendTo(element.parent("td"));
					},
		submitHandler: function(form) {
			var dataForm = $("#pendidikan").serialize();
			var id_keterangansiswa = $("input[name=id_keterangansiswa]").val();
			var asal = $("input[name=asal]").val();
			var sttb = $("input[name=sttb]").val();
			var lama = $("input[name=lama]").val();
			var tgl = $("input[name=tgl]").val();
			var pindah = $("input[name=pindah]").val();

			$.ajax({
				type:"POST",
				url:"modul/mod_pendidikan/pendidikan_action.php",
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

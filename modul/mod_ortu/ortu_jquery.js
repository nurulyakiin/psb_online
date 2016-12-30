<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$("#ortu").validate({
			rules: {		
					id_keterangansiswa: {required: true},
					nmayh: {required: true},
					nmibu: {required: true},
					alamat: {required: true},
					notelp: {required: true},
					tmp_lahirayh: {required: true},
					tgl_lahirayh: {required: true},
					tmp_lahiribu: {required: true},
					tgl_lahiribu: {required: true},
					kerja_ayh: {required: true},
					hasil: {required: true},
					kerja_ibu: {required: true},
					pend_ayh: {required: true},
					pend_ibu: {required: true},
					agama_ayh: {required: true},
					agama_ibu: {required: true}
					},
		messages:	{
					id_keterangansiswa: {required: "Nama Siswa Harus Diisi"},
					nmayh: {required: "NISN Harus Diisi"},
					nmibu: {required: "Nama Siswa Harus Diisi"},
					alamat: {required: "Tempat Lahir Harus Diisi"},
					notelp: {required: "Tanggal Lahir Harus Diisi"},
					tmp_lahirayh: {required: "Tanggal Lahir Harus Diisi"},
					tgl_lahirayh: {required: "NISN Harus Diisi"},
					tmp_lahiribu: {required: "Nama Siswa Harus Diisi"},
					tgl_lahiribu: {required: "Tempat Lahir Harus Diisi"},
					kerja_ayh: {required: "Tanggal Lahir Harus Diisi"},
					hasil: {required: "Tanggal Lahir Harus Diisi"},
					kerja_ibu: {required: "NISN Harus Diisi"},
					pend_ayh: {required: "Nama Siswa Harus Diisi"},
					pend_ibu: {required: "Tempat Lahir Harus Diisi"},
					agama_ayh: {required: "Tanggal Lahir Harus Diisi"},
					agama_ibu: {required: "Tanggal Lahir Harus Diisi"}
					},
		errorPlacement: function(error, element) {
					error.appendTo(element.parent("td"));
					},
		submitHandler: function(form) {
			var dataForm = $("#pendidikan").serialize();
			var id_keterangansiswa = $("input[name=id_keterangansiswa]").val();
			var nmayh = $("input[name=nmayh]").val();
			var nmibu = $("input[name=nmibu]").val();
			var alamat = $("input[name=alamat]").val();
			var notelp = $("input[name=notelp]").val();
			var tmp_lahirayh = $("input[name=tmp_lahirayh]").val();
			var tgl_lahirayh = $("input[name=tgl_lahirayh]").val();
			var tmp_lahiribu = $("input[name=tmp_lahiribu]").val();
			var tgl_lahiribu = $("input[name=tgl_lahiribu]").val();
			var kerja_ayh = $("input[name=kerja_ayh]").val();
			var hasil = $("input[name=hasil]").val();
			var kerja_ibu = $("input[name=kerja_ibu]").val();
			var pend_ayh = $("input[name=pend_ayh]").val();
			var pend_ibu = $("input[name=pend_ibu]").val();
			var agama_ayh = $("input[name=agama_ayh]").val();
			var agama_ibu = $("input[name=agama_ibu]").val();

			$.ajax({
				type:"POST",
				url:"modul/mod_ortu/ortu_action.php",
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

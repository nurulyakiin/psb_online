<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$("#ortu").validate({
			rules: {		
					id_dataorangtua: {required: true},
					nmayh: {required: true},
					nmibu: {required: true},
					alamat: {required: true},
					notelp: {required: true, number:true},
					tmp_lahirayh: {required: true},
					tgl_lahirayh: {required: true},
					tmp_lahiribu: {required: true},
					tgl_lahiribu: {required: true},
					kerja_ayh: {required: true},
					hasil: {required: true, number: true},
					kerja_ibu: {required: true},
					pend_ayh: {required: true},
					pend_ibu: {required: true},
					agama_ayh: {required: true},
					agama_ibu: {required: true}
					},
		messages:	{
					id_dataorangtua: {required: "Nama Siswa Harus Diisi"},
					nmayh: {required: "Nama Ayah Harus Diisi"},
					nmibu: {required: "Nama Ibu Harus Diisi"},
					alamat: {required: "Alamat Harus Diisi"},
					notelp: {required: "No Telp Harus Diisi", number: "No Telp Harus Diisi Angka"},
					tmp_lahirayh: {required: "Tempat Tanggal Lahir Ayah Harus Diisi"},
					tgl_lahirayh: {required: "Tanggal Lahir Ayah Harus Diisi"},
					tmp_lahiribu: {required: "Tempat Tanggal Lahir Ibu Harus Diisi"},
					tgl_lahiribu: {required: "Tanggal Lahir Ibu Harus Diisi"},
					kerja_ayh: {required: "Pekerjaan Ayah Harus Diisi"},
					hasil: {required: "Penghasilan Ayah Harus Diisi", number: "Penghasilan Harus Diisi Angka"},
					kerja_ibu: {required: "Pekerjaan Ibu Harus Diisi"},
					pend_ayh: {required: "Pendidikan Ayah Harus Diisi"},
					pend_ibu: {required: "Pendidikan Ibu Harus Diisi"},
					agama_ayh: {required: "Agama Ayah Harus Diisi"},
					agama_ibu: {required: "Agama Ibu Harus Diisi"}
					},
		errorPlacement: function(error, element) {
					error.appendTo(element.parent("td"));
					},
		submitHandler: function(form) {
			var dataForm = $("#ortu").serialize();
			var id_dataorangtua = $("input[name=id_dataorangtua]").val();
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
				url:"modul/mod_admpdb/mod_ortu/ortu_query.php",
				data:dataForm,
				success: function(data){
					if(data=='sukses'){
						window.location.href = '?module=ortu';
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


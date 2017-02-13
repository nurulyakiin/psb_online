<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$("#wali").validate({
			rules: {		
					id_wali: {required: true},
					nmwali: {required: true},
					alamat: {required: true},
					notelp: {required: true},
					tmp_lahirwali: {required: true},
					tgl_lahirwali: {required: true},
					kerja: {required: true}
					},
		messages:	{
					id_wali: {required: "Nama Siswa Harus Diisi"},
					nmwali: {required: "Nama Wali Harus Diisi"},
					alamat: {required: "Alamat Wali Harus Diisi"},
					notelp: {required: "No Telp Harus Diisi"},
					tmp_lahirwali: {required: "Tempat Lahir Harus Diisi"},
					tgl_lahirwali: {required: "Tanggal Lahir Harus Diisi"},
					kerja: {required: "Pekerjaan Harus Diisi"}
					},
		errorPlacement: function(error, element) {
					error.appendTo(element.parent("td"));
					},
		submitHandler: function(form) {
			var dataForm = $("#wali").serialize();
			var id_wali = $("input[name=id_wali]").val();
			var nmwali = $("input[name=nmwali]").val();
			var alamat = $("input[name=alamat]").val();
			var notelp = $("input[name=notelp]").val();
			var tmp_lahirwali = $("input[name=tmp_lahirwali]").val();
			var tgl_lahirwali = $("input[name=tgl_lahirwali]").val();
			var kerja = $("input[name=kerja]").val();

			$.ajax({
				type:"POST",
				url:"modul/mod_admpdb/mod_wali/wali_query.php",
				data:dataForm,
				success: function(data){
					if(data=='sukses'){
						window.location.href = '?module=wali';
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


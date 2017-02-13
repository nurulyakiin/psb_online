<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$("#pendidikan").validate({
			rules: {		
					id_pendidikan: {required: true},
					asal: {required: true},
					sttb: {required: true},
					lama: {required: true,number: true},
					tgl: {required: true}
					},
		messages:	{
					id_pendidikan: {required: "Nama Siswa Harus Diisi"},
					asal: {required: "Asal Sekolah Harus Diisi"},
					sttb: {required: "STTB Harus Diisi"},
					lama: {required: "Lamanya Harus Diisi",number: "Lamanya Harus Angka"},
					tgl: {required: "Tanggal Harus Diisi"}
					},
		errorPlacement: function(error, element) {
					error.appendTo(element.parent("td"));
					},
		submitHandler: function(form) {
			var dataForm = $("#pendidikan").serialize();
			var id_pendidikan = $("input[name=id_pendidikan]").val();
			var asal = $("input[name=asal]").val();
			var sttb = $("input[name=sttb]").val();
			var lama = $("input[name=lama]").val();
			var tgl = $("input[name=tgl]").val();

			$.ajax({
				type:"POST",
				url:"modul/mod_admpdb/mod_pendidikan/pendidikan_query.php",
				data:dataForm,
				success: function(data){
					if(data=='sukses'){
						window.location.href = '?module=pendidikan';
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


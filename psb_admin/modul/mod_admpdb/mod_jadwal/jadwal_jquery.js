<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$("#jadwal").validate({
			rules: {		
					kelas: {required: true},
					isi: {required: true},
					aktif: {required: true}
					},
		messages:	{
					kelas: {required: "Kelas Harus Diisi"},
					isi: {required: "Jadwal Harus Diisi"},
					aktif: {required: ""}
					},
		errorPlacement: function(error, element) {
					error.appendTo(element.parent("td"));
					},
		submitHandler: function(form) {
			var dataForm = $("#jadwal").serialize();
			var kelas 	= $("input[name=kelas]").val();
			var isi 	= $("input[name=isi]").val();
			var aktif 	= $("input[name=aktif]").val();

			$.ajax({
				type:"POST",
				url:"modul/mod_admpdb/mod_jadwal/jadwal_query.php",
				data:dataForm,
				success: function(data){
					if(data=='sukses'){
						window.location.href = '?module=jadwal';
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


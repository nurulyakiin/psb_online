<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$("#bantuan").validate({
		rules: {
				nama: {required: true},		
				email: {required: true,email: true},
				subjek: {required: true},	
				pesan: {required: true},
				kode:{required: true}
				},
		messages: {
				nama: {required: "Nama Harus Diisi"},		
				email: {required: "Email Harus Diisi",email: "Email Tidak VAlid"},
				subjek: {required: "Subjek Harus Diisi"},	
				pesan: {required: "Pesan Harus Diisi"},
				kode:{required: "Kode Harus Diisi"}
				},
		errorPlacement: function(error, element) {
				error.appendTo(element.parent("td"));
				},
		submitHandler: function(form) {
				var dataForm = $("#bantuan").serialize();
				var nama = $("input[name=nama]").val();
				var email = $("input[name=email]").val();
				var subjek = $("input[name=subjek]").val();
				var pesan = $("input[name=pesan]").val();
				
				$.ajax({
					type:"POST",
					url:"modul/mod_bantuan/pesan/bantuan_action.php",
					data:dataForm,
					success: function(data){
						if(data=='berhasil'){
							$("#info").html("Pesan Telah Terkirim");
							window.location.href = '?module=home';
							$("#info").fadeOut(5000);
						}
						else{
							$("#info").html(data);
							$("#info").fadeOut(5000);
						}
					}
				});
			return false;
		}
	})
});
</script>

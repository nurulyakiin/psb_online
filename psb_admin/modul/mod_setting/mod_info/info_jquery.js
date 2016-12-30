<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$(".msg").hide('fast');
	$("#info").validate({
			rules: {		
					isi: {required: true},
					aktif: {required: true}
					},
		messages:	{
					isi: {required: "Informasi Harus Diisi"},
					aktif: {required: ""}
					},
		errorPlacement: function(error, element) {
					error.appendTo(element.parent("td"));
					},
		submitHandler: function(form) {
				$(".msg").hide('fast');
				var dataForm = $("#info").serialize();
				var isi 	= $("input[name=isi]").val();
				var aktif 	= $("input[name=aktif]").val();
				$(".msg").html("Cheking ...");
				$.ajax({
					type:"POST",
					url:"modul/mod_setting/mod_info/info_query.php",
					data:dataForm,
					success: function(data){
						if(data=='sukses'){
							$(".msg").html("<font color='#00CC00'>Data Telah Tersimpan</font>");
							$(".msg").slideDown(500);
							$(".msg").fadeOut(5000);
						}
						else{
							$(".msg").html(data);
							$(".msg").slideDown(500);
							$(".msg").fadeOut(5000);
						}
					}
				});
		return false;
		}
	});
})
</script>
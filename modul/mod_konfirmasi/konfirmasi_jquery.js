<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$("#nopes").change(function(){ 
	// $('#pesan').html("<img src='images/loader.gif' /> checking ...");
    var nopes = $("#nopes").val(); 
	// $.ajax({
	// 	type:"POST",
	// 	url:"modul/mod_daftar/daftar_checking.php",
	// 	data: "nisn=" + nisn,
	// 	success: function(data){
	// 		if(data==0){
	// 			if(nisn.length == 0 || nisn.length < 10 || nisn.length > 10){
	// 				$('#pesan').html("");
	// 				$('#nisn').css('border', '1px #C33 solid');
	// 			}
	// 			else{
	// 				$("#pesan").html('<img src="images/tick.png"> NISN belum digunakan');
	// 				$('#nisn').css('border', '1px #090 solid');	
	// 				$("#submit").fadeIn();
	// 			}
	// 		}  
	// 		else{
	// 			$("#pesan").html('<img src="images/cross.png"> NISN sudah dipakai');       
	// 			$('#nisn').css('border', '1px #C33 solid');	
	// 			$("#submit").fadeOut();
	// 		}
	// 	}
	// });
	})
	$("#konfirmasi").validate({
		rules: {	
				noform: {required: true},		
				nopes: {required: true},
				jns: {required: true},
				email: {required: true},
				nabank: {required: true},
				narim: {required: true},
				tgl: {required: true},
				norek: {required: true,number: true},
				tobay: {required: true,number: true},
				captcha:{required: true}
				},
		messages: {
				noform: {required: "No Formulir harus diisi"},
				nopes: {required: "No Peserta harus diisi"},
				jns: {required: "Jenis Pembayaran harus diisi"},
				email: {required: "Email harus diisi"},
				nabank: {required: "Nama Bank harus diisi"},
				narim: {required: "Nama Pengirim harus diisi"},
				tgl: {required: "Tanggal Kirim harus diisi"},
				norek: {required: "No Rekening harus diisi",number: "No rekening harus Angka"},
				tobay: {required: "Total Bayar harus diisi"},
				captcha:  "Captcha harus diisi"
				},
		errorPlacement: function(error, element) {
				error.appendTo(element.parent("td"));
				},
		submitHandler: function(form) {
				var dataForm = $("#konfirmasi").serialize();
				var noform = $("input[name=noform]").val();
				var nopes = $("input[name=nopes]").val();
				var email = $("input[name=email]").val();
				var jns = $("input[name=jns]").val();
				var nabank = $("input[name=nabank]").val();
				var narim = $("input[name=narim]").val();
				var norek = $("input[name=norek]").val();
				var tobay = $("input[name=tobay]").val();
				var tgl = $("input[name=tgl]").val();
				$.ajax({
					type:"POST",
					url:"modul/mod_konfirmasi/konfirmasi_action.php",
					data:dataForm,
					success: function(data){
						if(data=='berhasil'){
							window.location.href = '?module=konfirmasi-selesai&id='+nopes;
						}
						else{
							// window.location.href = '?module=konfirmasi-selesai&id='+nopes;
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

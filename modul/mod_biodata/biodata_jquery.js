<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$("#biodata").validate({
			rules: {		
					id_formulir: {required: true},
					nisn: {required: true,number: true,maxlength: 10},
					nmlkp: {required: true},
					tmp_lahir: {required: true},
					tgl_lahir: {required: true},
					kelamin: {required: true},
					agama: {required: true},
					urut_anak: {required: true,number:true,maxlength:1},
					urut_anak1: {required: true,number:true,maxlength:1},
					status_anak: {required: true},
					hp_siswa: {required: true, number: true, minlength: 11, maxlength: 12},
					nmpgl: {required: true},
					brtbdn: {required: true,number: true,minlength: 2,maxlength: 3},	
					tgibdn: {required: true,number: true,minlength: 3,maxlength: 3},
					goldar: {required: true},
					pykt: {required: true},
					jasman: {required: true},
					kkn: {required: true},
					seragam: {required: true},
					bhs: {required: true}
					},
		messages:	{
					id_formulir: {required: "Nama Siswa Harus Diisi"},
					nisn: {required: "NISN Harus Diisi",number: "NISN Harus Angka",maxlength: "Maksimal 10 Digit"},
					nmlkp: {required: "Nama Siswa Harus Diisi"},
					tmp_lahir: {required: "Tempat Lahir Harus Diisi"},
					tgl_lahir: {required: "Tanggal Lahir Harus Diisi"},
					kelamin: {required: "Jenis Kelamin Harus Diisi"},
					agama: {required: "Agama Harus Diisi"},
					urut_anak: {required: "Harus Diisi",number:"Hanya Boleh Angka",maxlength:"Maksimal 1 Digit"},
					urut_anak1: {required: "Harus Diisi",number:"Hanya Boleh Angka",maxlength:"Maksimal 1 Digit"},
					status_anak: {required: "Status Anak Harus Diisi"},
					hp_siswa: {required: "Nomor HP Harus Diisi",number: "Nomor HP Hanya Boleh Angka",minlength: "Nomor HP Minimal 11 Digit",maxlength: "Nomor HP Maksimal 12 Digit"},
					alamat: {required: "Alamat Siswa Harus Diisi"},
					goldar: {required: "Harus Diisi"},
					jasman: {required: "Harus Diisi"},	
					brtbdn: {required: "Harus Diisi",number: "Hanya Boleh Angka",minlength: "Minimal 2 Digit",maxlength: "Maksimal 3 Digit"},	
					tgibdn: {required: "Harus Diisi",number: "Hanya Boleh Angka",minlength: "Minimal 3 Digit",maxlength: "Maksimal 3 Digit"},	
					nmpgl: {required: "Harus Diisi"},
					pykt: {required: "Harus Diisi"},	
					kkn: {required: "Harus Diisi"},
					seragam: {required: "Seragam Harus Diisi"},
					bhs: {required: "Harus Diisi"}
					},
		errorPlacement: function(error, element) {
					error.appendTo(element.parent("td"));
					},
		submitHandler: function(form) {
			var dataForm = $("#biodata").serialize();
			var id_formulir = $("input[name=id_formulir]").val();
			var nisn = $("input[name=nisn]").val();
			var nmlkp = $("input[name=nmlkp]").val();
			var tmp_lahir = $("input[name=tmp_lahir]").val();
			var tgl_lahir = $("input[name=tgl_lahir]").val();
			var kelamin = $("input[name=kelamin]").val();
			var agama = $("input[name=agama]").val();
			var urut_anak = $("input[name=urut_anak]").val();
			var urut_anak1 = $("input[name=urut_anak1]").val();
			var status_anak = $("input[name=status_anak]").val();
			var hp_siswa = $("input[name=hp_siswa]").val();
			var alamat = $("input[name=alamat]").val();
			var goldar = $("input[name=goldar]").val();
			var jasman = $("input[name=jasman]").val();
			var brtbdn = $("input[name=brtbdn]").val();
			var tgibdn = $("input[name=tgibdn]").val();
			var nmpgl = $("input[name=nmpgl]").val();
			var pykt = $("input[name=pykt]").val();
			var kkn = $("input[name=kkn]").val();
			var bhs = $("input[name=bhs]").val();
			var seragam = $("input[name=seragam]").val();

			$.ajax({
				type:"POST",
				url:"modul/mod_biodata/biodata_action.php",
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

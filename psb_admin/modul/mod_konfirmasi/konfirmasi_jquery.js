<script type="text/javascript" src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js" type="text/javascript"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
$.metadata.setType("attr", "validate");
$(document).ready(function() {
	$("#biodata").validate({
			rules: {		
					nisn: {required: true,number: true,minlength: 10,maxlength: 10},
					nm_siswa: {required: true},
					tmp_lahir: {required: true},
					tgl_lahir: {required: true},
					kelamin: {required: true},
					agama: {required: true},
					urut_anak: {required: true,number:true,maxlength:1},
					urut_anak1: {required: true,number:true,maxlength:1},
					status_anak: {required: true},
					hp_siswa: {required: true,number: true,minlength: 11,maxlength: 12},
					almt_siswa: {required: true},
					tmpt_siswa: {required: true},
					kendaraan: {required: true},	
					berat_bdn: {required: true,number: true,minlength: 2,maxlength: 3},	
					tggi_bdn: {required: true,number: true,minlength: 3,maxlength: 3},	
					darah: {required: true},
					asal_sklh: {required: true},
					almt_sklh: {required: true},
					kpl_sekolah: {required: true},
					asal_kls: {required: true},
					tlp_sklh: {required: true,number: true,minlength: 10,maxlength: 10},
					nm_ayah: {required: true},
					nm_ibu: {required: true},
					nm_ibu: {required: true},
					almt_ortu: {required: true},
					hp_ortu: {required: true,number: true,minlength: 11,maxlength: 12},
					kerja_ayah: {required: true},	
					kerja_ibu: {required: true},
					hasil_ortu: {required: true,number: true},	
					biaya: {required: true}
					},
		messages:	{
					nisn: {required: "NISN Harus Diisi",number: "NISN Harus Angka",minlength: "Minimal 10 Digit",maxlength: "Maksimal 10 Digit"},
					nm_siswa: {required: "Nama Siswa Harus Diisi"},
					tmp_lahir: {required: "Tempat Lahir Harus Diisi"},
					tgl_lahir: {required: "Tanggal Lahir Harus Diisi"},
					kelamin: {required: "Jenis Kelamin Harus Diisi"},
					agama: {required: "Agama Harus Diisi"},
					urut_anak: {required: "Harus Diisi",number:"Hanya Boleh Angka",maxlength:"Maksimal 1 Digit"},
					urut_anak1: {required: "Harus Diisi",number:"Hanya Boleh Angka",maxlength:"Maksimal 1 Digit"},
					status_anak: {required: "Status Anak Harus Diisi"},
					hp_siswa: {required: "Nomor HP Harus Diisi",number: "Nomor HP Hanya Boleh Angka",minlength: "Nomor HP Minimal 11 Digit",maxlength: "Nomor HP Maksimal 12 Digit"},
					almt_siswa: {required: "Alamat Siswa Harus Diisi"},
					tmpt_siswa: {required: "Harus Diisi"},
					kendaraan: {required: "Harus Diisi"},	
					berat_bdn: {required: "Harus Diisi",number: "Hanya Boleh Angka",minlength: "Minimal 2 Digit",maxlength: "Maksimal 3 Digit"},	
					tggi_bdn: {required: "Harus Diisi",number: "Hanya Boleh Angka",minlength: "Minimal 3 Digit",maxlength: "Maksimal 3 Digit"},	
					darah: {required: "Harus Diisi"},
					asal_sklh: {required: "Harus Diisi"},
					almt_sklh: {required: "Harus Diisi"},
					kpl_sekolah: {required: "Harus Diisi"},
					asal_kls: {required: "Harus Diisi"},
					tlp_sklh: {required: "No Telepon Harus Diisi",number: "Hanya Boleh Angka",minlength: "Minimal 10 Digit",maxlength: "Maksimal 10 Digit"},
					nm_ayah: {required: "Harus Diisi"},
					nm_ibu: {required: "Harus Diisi"},
					nm_ibu: {required: "Harus Diisi"},
					almt_ortu: {required: "Harus Diisi"},
					hp_ortu: {required: "No HP Harus Diisi",number: "Hanya Boleh Angka",minlength: "Minimal 11 Digit",maxlength: "Maksimal 12 Digit"},
					kerja_ayah: {required: "Harus Diisi"},	
					kerja_ibu: {required: "Harus Diisi"},
					hasil_ortu: {required: "Harus Diisi",number: "Hanya Boleh Angka"},	
					biaya: {required: "Harus Diisi"}
					},
		errorPlacement: function(error, element) {
					error.appendTo(element.parent("td"));
					},
		submitHandler: function(form) {
			var dataForm = $("#biodata").serialize();
			var nisn = $("input[name=nisn]").val();
			var nm_siswa = $("input[name=nm_siswa]").val();
			var tmp_lahir = $("input[name=tmp_lahir]").val();
			var tgl_lahir = $("input[name=tgl_lahir]").val();
			var kelamin = $("input[name=kelamin]").val();
			var agama = $("input[name=agama]").val();
			var urut_anak = $("input[name=urut_anak]").val();
			var urut_anak1 = $("input[name=urut_anak1]").val();
			var status_anak = $("input[name=status_anak]").val();
			var hp_siswa = $("input[name=hp_siswa]").val();
			var almt_siswa = $("input[name=almt_siswa]").val();
			var tmpt_siswa = $("input[name=tmpt_siswa]").val();
			var kendaraan = $("input[name=kendaraan]").val();
			var berat_bdn = $("input[name=berat_bdn]").val();
			var tggi_bdn = $("input[name=tggi_bdn]").val();
			var darah = $("input[name=darah]").val();
			var asal_sklh = $("input[name=asal_sklh]").val();
			var almt_sklh = $("input[name=almt_sklh]").val();
			var kpl_sekolah = $("input[name=kpl_sekolah]").val();
			var asal_kls = $("input[name=asal_kls]").val();
			var tlp_sklh = $("input[name=tlp_sklh]").val();
			var nm_ayah = $("input[name=nm_ayah]").val();
			var nm_ibu = $("input[name=nm_ibu]").val();
			var almt_ortu = $("input[name=almt_ortu]").val();
			var hp_ortu = $("input[name=hp_ortu]").val();
			var kerja_ayah = $("input[name=kerja_ayah]").val();
			var kerja_ibu = $("input[name=kerja_ibu]").val();
			var hasil_ortu = $("input[name=hasil_ortu]").val();
			var biaya = $("input[name=biaya]").val();

			$.ajax({
				type:"POST",
				url:"modul/mod_admpdb/mod_biodata/biodata_query.php",
				data:dataForm,
				success: function(data){
					if(data=='sukses'){
						window.location.href = '?module=biodata';
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


<script type="text/javascript" src="js/jquery.validate.js"></script>
<link rel="stylesheet" href="css/style.css" type="text/css" />

<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery("#rapor").validate({
		rules: {
				bhs: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},
				bhs1: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},
				bhs2: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},
				bhs3: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},
				bhs4: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},
				big: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},	
				big1: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},
				big2: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},	
				big3: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},	
				big4: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},	
				mat: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},	
				mat1: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},	
				mat2: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},	
				mat3: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},	
				mat4: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},	
				ipa: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},	
				ipa1: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},	
				ipa2: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},	
				ipa3: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},	
				ipa4: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},	
				ips: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},	
				ips1: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},						  
				ips2: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},	
				ips3: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100},						  
				ips4: {required: true,number: true,minlength: 2,maxlength: 3, min:75, max:100}	  
				},
		messages: {
				bhs: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				bhs1: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},		
				bhs2: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				bhs3: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				bhs4: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				big: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				big1: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				big2: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				big3: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				big4: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				mat: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				mat1: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				mat2: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				mat3: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				mat4: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				ipa: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				ipa1: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				ipa2: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				ipa3: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				ipa4: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				ips: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				ips1: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},						  			
				ips2: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},	
				ips3: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""},						  			
				ips4: {required: "",number: "",minlength: "",maxlength: "", min:"", max:""}	
				},
		errorPlacement: function(error, element) {
			error.appendTo(element.parent("td"));
		},
		submitHandler: function(form) {
				var dataForm = $("#rapor").serialize();
				var bhs = $("input[name=bhs]").val();
				var bhs1 = $("input[name=bhs1]").val();
				var bhs2 = $("input[name=bhs2]").val();
				var bhs3 = $("input[name=bhs3]").val();
				var bhs4 = $("input[name=bhs4]").val();
				var totalBhs = $("input[name=totalBhs]").val();
				var big = $("input[name=big]").val();
				var big1 = $("input[name=big1]").val();
				var big2 = $("input[name=big2]").val();
				var big3 = $("input[name=big3]").val();
				var big4 = $("input[name=big4]").val();
				var totalbig = $("input[name=totalbig]").val();
				var mat = $("input[name=mat]").val();
				var mat1 = $("input[name=mat1]").val();
				var mat2 = $("input[name=mat2]").val();
				var mat3 = $("input[name=mat3]").val();
				var mat4 = $("input[name=mat4]").val();
				var totalmat = $("input[name=totalmat]").val();
				var ipa = $("input[name=ipa]").val();
				var ipa1 = $("input[name=ipa1]").val();
				var ipa2 = $("input[name=ipa2]").val();
				var ipa3 = $("input[name=ipa3]").val();
				var ipa4 = $("input[name=ipa4]").val();
				var totalipa = $("input[name=totalipa]").val();
				var ips = $("input[name=ips]").val();
				var ips1 = $("input[name=ips1]").val();
				var ips2 = $("input[name=ips2]").val();
				var ips3 = $("input[name=ips3]").val();
				var ips4 = $("input[name=ips4]").val();
				var totalips = $("input[name=totalips]").val();
				
				$("#info").html("<img src='images/loader.gif' /> checking ...");
				$.ajax({
					type:"POST",
					url:"modul/mod_rapor/rapor_action.php",
					data:dataForm,
					success: function(data){
						if(data=='sukses'){
							window.location.href = '?module=akun';
						}
						else{
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

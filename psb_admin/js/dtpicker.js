<script type="text/javascript" src="asset/calendar/ui/ui.core.js"></script>
<script type="text/javascript" src="asset/calendar/ui/ui.datepicker.js"></script>
<script type="text/javascript" src="asset/calendar/ui/i18n/ui.datepicker-id.js"></script>

<script type="text/javascript"> 
	jQuery(document).ready(function(){
	jQuery("#tanggal").datepicker({
	dateFormat:"yy-mm-dd",
	changeMonth:true,
	changeYear:true,
	showOn:"button",
	buttonImage:"asset/calendar/themes/le-frog/images/calendar.gif",
	buttonImageOnly:true
});
});
</script>

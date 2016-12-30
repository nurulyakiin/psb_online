<script type="text/javascript">
      $(document).ready(function(){
	     // pastikan message/pesan selalu berada di bagian atas browser
	     $(window).scroll(function(){
  		    $('#message_box').animate({top:$(window).scrollTop()+"px" },{queue: false, duration: 350});  
	     });
       // ketika tombol silang di klik 
	     $('#close_message').click(function(){
		      $('#message_box').animate({ top:"+=15px",opacity:0 }, "slow");
	     });
      });
</script>
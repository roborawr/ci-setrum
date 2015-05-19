	</div><!-- end of row in header template before lef content -->
	</div><!-- end of container in header template -->
        <div class="push"></div>
    </div><!-- end of wrapper in header template -->


	<footer>
		<div class="container">
        <div class="col-md-4" >
           <p class="text-white">Dimas Abdurrahman S | Teknik Informatika <br> Universitas Negeri Malang <br> dimas.abdurrahmans@gmail.com</p>
        </div>
        <div class="col-md-4">
            <img src="<?php echo base_url() ?>assets/images/logo/logosetrumheader.png" class="img-responsive center-block" style="display:inline-block;height: 80px;">
            <img src="<?php echo base_url() ?>assets/images/logo/lbgray.png" class="img-responsive center-block" style="display:inline-block">
        </div>
        <div class="col-md-4"> 
            <p class="text-white text-right">Universitas Negeri Malang <br>Jl. Semarang 5 Malang 65145<br>Telp. (0341) 551312</p>
        </div>
      </div>
	</footer>

	<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js" type="text/javascript" charset="utf-8"></script> -->
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/media/js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>	
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/swfobject/swfobject.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/videojs/video.js"></script>

	<script type="text/javascript" charset="utf-8">
		$('input').click(function(){
			$(this).select();	
		});
	</script>

	<script type="text/javascript">

		function loadSWF(url){
			var flashvars = {};
			var params = { scale: "exactFit" };
			var attributes = {};
		  swfobject.embedSWF(url, "flashcontent", "100%", "100%", "7", false, flashvars, params, attributes);
		}
	</script>
	

</body>
</html>
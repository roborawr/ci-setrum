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

	
	<script type="text/javascript" src="<?php echo base_url(); ?>/assets/media/js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>/assets/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/formvalidation/jquery.form-validator.min.js"></script>	
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/formvalidation/file.js"></script>

	<script type="text/javascript" charset="utf-8">
		$('input').click(function(){
			$(this).select();	
		});
	</script>

    <script>
      $.validate({
        modules : 'file',
      });

      $('#deskripsi').restrictLength( $('#max-length-element') );
    </script>

	<script type="text/javascript">
        $(document).ready(function() {
            $('#DosenProduk').dataTable({
            "bProcessing": true,
            "bServerSide": true,
            "bInfo": true,
            "bAutoWidth": false,
            "sAjaxSource": '<?php echo base_url(); ?>dosen/ctrl_dosen/DosenJsonProduk',
            "sPaginationType": "full_numbers",
            "aoColumnDefs": [
                { 'bSortable': false, 'aTargets': [ 0 ] },
                { 'bSortable': false, 'aTargets': [ 1 ] },
                { 'bSortable': false, 'aTargets': [ 2 ] },
                { 'bSortable': false, 'aTargets': [ 3 ] },
                { 'bSortable': false, 'aTargets': [ 4 ] },
                { 'bSortable': false, 'aTargets': [ 5 ] },
            
                
            ],
            
            "iDisplayStart ": 20,   
                
            "fnServerData": function (sSource, aoData, fnCallback) {
                $.ajax
                ({
                    'dataType': 'json',
                    'type': 'POST',
                    'url': sSource,
                    'data': aoData,
                    'success': fnCallback
                });
            }
        });

        
        });

    </script>

</body>
</html>
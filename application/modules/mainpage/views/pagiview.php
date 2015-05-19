<html>
<head>
	<title></title>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
	<style type="text/css">
		table tr {
			padding: 0;
			margin-bottom: 1px;

		}
	</style>
</head>
<body>
	<div class="container">

		<div class="row">
			<div class="row">
				
					<table class="table table-condensed table table-hover">

						<thead>
							<th>ID</th>
							<th>Country Code</th>
							<th>Country Name</th>
						</thead>
						<?php foreach ($records as $row ) { ?>
							<tr>
								<td><?php echo $row->id ?></td>
								<td><?php echo $row->country_code ?></td>
								<td><?php echo $row->country_name ?></td>
							</tr>
							<?php } ?>
					</table>
				
			</div>
			<div class="col-md-12">
				<?php echo $this->pagination->create_links(); ?>
			</div>
		</div>
	</div>
</body>
</html>
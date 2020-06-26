<!DOCTYPE html>
<html>
<head>
	<title>NOTA</title>
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"  rel="stylesheet" >

	<!-- Javascript -->
	<script src="<?php echo base_url(); ?>/assets/vendors/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="nota"></div>

	<script type="text/javascript">

		$("#nota").empty();

		$.getJSON('<?php echo base_url(); ?>index.php/transaksi/get_detail_transaksi_by_id/<?php echo $this->uri->segment(3); ?>',  function(data){
			$("#nota").html(data.show_detail);

			window.print();
		});

	</script>

</body>
</html>
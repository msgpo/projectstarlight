<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<title><?php echo $title;?></title>
	<script type="text/javascript" src="<?php echo base_url(); ?>/scripts/requestUtils.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/scripts/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/scripts/sportValidation.js"></script>
</head>
<body>

<h1><?php echo $headline;?></h1>

<?php $this->load->view($include);?>

</body>
</html>
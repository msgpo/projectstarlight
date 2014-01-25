<p>Here are the sports allowed for all leagues.</p>
<br />
<?php echo $data_table; ?>
<p>
If you do not see your prefered sport listed, add it here.
</p>
<?php 
	echo $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'] . '/addsport'; 
	echo '<br />';
?>
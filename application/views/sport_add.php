<form method="post" action="<?php echo base_url();?>/index.php/sport/createsport">
	<label for="sport_name">Sport Name: </label><br />
    <input id="sport_name" name="sport_name" type="text" value="" /><br />
	<!-- PHP auto-generates the following submit button. -->
	<?php echo form_submit('', 'Add Sport'); ?> 
</form>
<br />

<div id="searchresultdata" class="faq-articles"> </div>
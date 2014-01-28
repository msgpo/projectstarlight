<?php 

echo form_open('sport/createsport');

echo '<p>Sport Name';
echo form_input('sport_name') . '</p>';

// not setting the value attribute omits the submit from the $_POST array
echo form_submit('', 'Add Sport'); 

echo form_close();

?>
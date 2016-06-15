<h2>The World Is Here</h2>
<?php
echo validation_errors(); 
echo '<br />';

echo form_open('Isaza/login');
echo form_input('name');
echo form_password('password');
echo form_submit('submit','login');
echo form_close();

if (isset($thanks)){
	echo $thanks;
}
?>

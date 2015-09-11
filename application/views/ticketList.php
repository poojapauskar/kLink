<!doctype html>
<html>
    <head>
        <h1>Ticket List</h1>

    </head>
    <body>
       <div class="container">
        <?php $this->load->helper('url'); ?>



<form action="<?= site_url('')?>" name="Form" method="post"/>

<?php foreach ($details as $key) {
	//print_r($key);
	print_r($key->user_name);
	echo "<br>";
	print_r($key->phone);
	echo "<br>";
	print_r($key->vz_id);
	echo "<br>"; ?>
	<a href="<?= site_url('/ticketResponse/?id='.$key->ticket_id)?>"><?php print_r($key->ticket_id);?></a>
	<?php echo "<br>";
	print_r($key->question);
	echo "<br>";
	print_r($key->item);
	echo "<br>";
	print_r($key->description);
	echo "<br>";
	print_r($key->cost);
	echo "<br>";
	print_r($key->date_created);
	echo "<br>";
	print_r($key->date_validity);
	echo "<br>";
	echo "<br>";
		# code...

	# code...
}?>




</form>
</div>
</body>
</html>
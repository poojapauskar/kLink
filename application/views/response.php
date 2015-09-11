<!doctype html>
<html>
    <head>
        <h1>Response</h1>

    </head>
    <body>
       <div class="container">
        <?php $this->load->helper('url'); ?>


<form action="<?= site_url('')?>" name="Form" method="post"/>

<h1>Connector</h1>
<?php print_r($details['phone'])?> 

<h1>User 1</h1>
<?php print_r($phone1);?>
<br>

<a href="<?= site_url('/ticketDetails/?id='.$ticket1)?>"><?php print_r($ticket1);?></a>

<h2>User 2</h2>
<?php print_r($phone2);?>
<br>

<a href="<?= site_url('/ticketDetails/?id='.$ticket2)?>"><?php print_r($ticket2);?></a>



</form>
</div>
</body>
</html>
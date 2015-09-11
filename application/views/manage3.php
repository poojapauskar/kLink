<!doctype html>
<html>

    <head>
        <h1>Manage</h1>
    </head>
    <body>
       <div class="container">
        <?php $this->load->helper('url'); ?>
        <?php //print_r($id); ?>
<?php
foreach ($details->result() as $row)  
         { $id = $row->ticket_id; ?>
<form action="<?= site_url('/manage1/?id='.$id)?>" method="post">


<br><br>
<label for="name">Name</label><br>
<label> <?php echo $row->name;?></label><br>
<label for="reion">Region</label><br>
<label> <?php echo $row->region;?></label><br>
<label for="team">Team</label><br>
<label><?php echo $row->team;?> </label><br>
<label for="query">Query</label><br>
<label> <?php echo $row->query;?></label><br>
<br><br>

<?php }?>

<label for="resolution">Resolution</label>
<input type="text" name="resolution"/><br><br>
<label>Status</label>
<input type="radio" name="status" value="Open" checked>Open</input>
<input type="radio" name="status" value="Closed">Closed</input>
<input type="radio" name="status" value="Resolved">Resolved</input>


<input type="submit" value="Add" name="add"/><br><br>
</form>
</div>
</body>
</html>
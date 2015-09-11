<!doctype html>
<html>
    <head>
        <h1>Create</h1>
    </head>
    <body>
       <div class="container">
        <?php $this->load->helper('url'); ?>
        <?php //print_r($id); ?>

<form action="<?= site_url('/createObject')?>" method="post">

<label for="name">Name</label>
<input type="text" name="name"/><br><br>
<label for="region">Region</label>
<input type="text" name="region"/><br><br>
<label for="team">Team</label>
<input type="text" name="team"/><br><br>
<label for="query">Query</label>
<input type="text" name="query"/><br><br>


<input type="submit" value="Add" name="add"/><br><br>
</form>
</div>
</body>
</html>
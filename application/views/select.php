<!doctype html>
<html>
    <head>
        <h1>Mention the Contact nos. and Ticket IDs of Contacts
        </h1>

    </head>
    <body>
       <div class="container">
        <?php $this->load->helper('url'); ?>

<form action="<?= site_url('/connectUser/?id='.$id)?>" name="Form" method="post" onsubmit="return checkRegistration()"/>

<h1>User 1</h1>
<label for="phone1">Phone No.</label>
<input type="text" name="phone1" id="phone1" required/><br><br>
<label for="ticket1">Ticket ID</label>
<input type="text" name="ticket1" id="ticket1" required/><br><br>

<h2>User 2</h2>
<label for="phone2">Phone No.</label>
<input type="text" name="phone2" id="phone2" required/><br><br>
<label for="ticket2">Ticket ID</label>
<input type="text" name="ticket2" id="ticket2" required/><br><br>


<input type="submit" value="Connect" name="Connect"/><br><br>
</form>
</div>
</body>
</html>
<!doctype html>
<html>
    <head>
        <p>Token has been sent to your phone no. and email id</p>
        <h3>Token Confirmation</h3>
    </head>
    <body>
       <div class="container">
        <?php $this->load->helper('url'); ?>

<form action="<?= site_url('/tokenConfirmation')?>" name="Form" method="post" onsubmit="return checkRegistration()"/>
<label for="username">Token</label>
<input type="text" name="token" id="token" required/><br><br>


<input type="submit" value="Submit" name="submit"/><br><br>
</form>
</div>
</body>
</html>
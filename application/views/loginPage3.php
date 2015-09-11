<!doctype html>
<html>
    <head>
        <h1>Login</h1>

<style>
.error {color: #FF0000;}
</style>

<script>


function checkRegistration(){
  var form_valid = (document.getElementById('username').value);

  var form_valid1 = (document.getElementById('password').value);

  var matches = form_valid.match(/^[a-zA-Z ]*$/);

  

  var matches2 = form_valid1.match(/^\d{8}$/);

  if(form_valid == "" || form_valid1 == ""){
        alert('Please fill the details');
        return false;
  }if(matches == null){
        alert("Username : Only letters and white space allowed");
        return false;
  }if(form_valid1.length < 8){
        alert("Password must contain atleast 8 digits");
        return false;
  }
 

}
</script>

    </head>
    <body>
       <div class="container">
        <?php $this->load->helper('url'); ?>

<form action="<?= site_url('/loginUsers')?>" name="Form" method="post" onsubmit="return checkRegistration()"/>
<label for="username">User Name</label>
<input type="text" name="username" id="username" required/><br><br>
<label for="password">Password</label>
<input type="password" name="password" id="password" required/><br><br>


<input type="submit" value="Login" name="login"/><br><br>
</form>
</div>
</body>
</html>
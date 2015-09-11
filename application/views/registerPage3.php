<!DOCTYPE HTML> 
<html>
<head>
<h1>Register</h1>
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


<?php $this->load->helper('url'); ?>

<form method="post" action="<?= site_url('/addUsers')?>" onsubmit="return checkRegistration()"> 
   Username: <input type="text" id="username" name="username" value="">
   
   <br><br>


   Password: <input type="password" id="password" name="password" value="">
   
   <br><br>

   <input type="submit" name="submit" value="Submit"> 
</form>

</body>
</html>
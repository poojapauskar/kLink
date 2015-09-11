<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<style>
.navbar-default {
    background-color: #2096F3;
    padding:25px;
}

.navbar-brand img {
width: 65% \9; /*Force IE10 and below to size SVG images correctly*/
max-width: 65%;
margin-top:-13%
}



@media (max-width:1400px) { 
.navbar-brand img {
    width: 60% \9; /*Force IE10 and below to size SVG images correctly*/
    max-width: 60% !important;
    margin-top:-11%
}
.navbar-default {
    background-color: #2096F3;
    padding:25px;
}
}

@media (max-width:1400px) { 
.navbar-brand img {
    width: 55% \9; /*Force IE10 and below to size SVG images correctly*/
    max-width: 55% !important;
    margin-top:-11%
}
.navbar-default {
    background-color: #2096F3;
    padding:25px;
}
}

@media (max-width:1000px) { 
.navbar-brand img {
    width: 50% \9; /*Force IE10 and below to size SVG images correctly*/
    max-width: 50% !important;
    margin-top:-9%
}
.navbar-default {
    background-color: #2096F3;
    padding:15px;
}
}

@media (max-width:800px) { 
.navbar-brand img {
    width: 45% \9; /*Force IE10 and below to size SVG images correctly*/
    max-width: 45% !important;
    margin-top:-8%
}
.navbar-default {
    background-color: #2096F3;
    padding:12px;
}
}

@media (max-width:600px) { 
.navbar-brand img {
    width: 38% \9; /*Force IE10 and below to size SVG images correctly*/
    max-width: 38% !important;
    margin-top:-4%
}
.navbar-default {
    background-color: #2096F3;
    padding:15px;
}
}


@media (max-width:480px) { 
.navbar-brand img {
    width: 30% \9; /*Force IE10 and below to size SVG images correctly*/
    max-width: 30% !important;
    margin-top:-4%
}
.navbar-default {
    background-color: #2096F3;
    padding:15px;
}
}

@media (max-width:440px) { 
.navbar-brand img {
    width: 30% \9; /*Force IE10 and below to size SVG images correctly*/
    max-width: 30% !important;
    margin-top:-3%
}
.navbar-default {
    background-color: #2096F3;
    padding:8px;
}
}

@media (max-width:420px) { 
.navbar-brand img {
    width: 30% \9; /*Force IE10 and below to size SVG images correctly*/
    max-width: 30% !important;
    margin-top:-3%
}
.navbar-default {
    background-color: #2096F3;
    padding:5px;
}
}


@media (max-width:415px) { 
.navbar-brand img {
    width: 30% \9; /*Force IE10 and below to size SVG images correctly*/
    max-width: 30% !important;
    margin-top:-3%
}
.navbar-default {
    background-color: #2096F3;
    padding:2px;
}
}

@media (max-width:409px) { 
.navbar-brand img {
    width: 30% \9; /*Force IE10 and below to size SVG images correctly*/
    max-width: 30% !important;
    margin-top:-3%
}
.navbar-default {
    background-color: #2096F3;
    padding:1px;
}
}

@media (max-width:405px) { 
.navbar-brand img {
    width: 30% \9; /*Force IE10 and below to size SVG images correctly*/
    max-width: 30% !important;
    margin-top:-20%
}
.navbar-default {
    background-color: #2096F3;
    padding:0.1px;
}
}

.container{
  width:100%;
  height:100%;
}

.btn-primary {
    background: #2096F3;
    color: black;
}

.nav .active { background:blue }

.navbar { 
  border-color: white !important;
}

</style>

</head>


<body style="background-color:#5ECC11">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>  
      </button>
      <a class="navbar-brand" href="#">
        <img class="img-responsive" style="" src="C:\wamp\www\VzCards\application\views\logo.png"/>
      </a>
    </div>
   
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right" >
        
        <li><a href="#home">Home</a></li>

        <li><a href="#about">About</a></li>
        
        
<!--
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Services
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#android">Android Application</a></li>
            <li><a href="#web">Web Development</a></li>
            <li><a href="#ios">iOS Application</a></li>
            <li><a href="#dm">Digital Marketing</a></li> 
          </ul>
        </li> -->

       <li><a href="#services">Services</a></li>
        <li><a href="#contact">Find Us</a></li> 
      </ul>
      
    </div>
  </div>
</nav>
 
 <br>
 <br>  <br>
 <br>  <br>
 <br> 


<div id="home" class="container">
  <div style="background-color:#5ECC11" class="jumbotron">
    <br><br>
    <h2>Home</h2>      
    <p>Whether you want an interactive game built, a social media app or if an app to keep tabs on ur daily tasks would suffice, We will do it for you.</p>
    <br><br>      
  </div>
</div>

<div id="about" class="container">
  <div style="background-color:white" class="jumbotron">
    <br><br>
    <h2>About Us</h2>      
    <p>The key to the success of any web app is understanding your requirements and developing 
an optimized interface that is quintessential for its adaptation. We use the latest technology to 
ensure that you get the best application for your business.
</p> 
<p>We can proudly say that several enterprises are using our mobile app to accelerate their growth. The experience that our employees bring to the table is immense, be it for B2B or B2C Apps, in native apps.
 </p> 
 <br><br>    
  </div>
</div>

<div id="services" class="container">
  <div style="background-color:#5ECC11" class="jumbotron">
    <br><br>
    <h2>Services</h2>
            
              <div class="row">
                  <div class="col-sm-3"><a href="#android" class="btn btn-primary" role="button">Android Application</a></div>
                  <div class="col-sm-3"><a href="#web" class="btn btn-primary" role="button">Web Development</a></div>
                  <div class="col-sm-3"><a href="#ios" class="btn btn-primary" role="button">iOS Application</a></div>
                  <div class="col-sm-3"><a href="#dm" class="btn btn-primary" role="button">Digital Marketing</a></div>
             </div>
         
    <br><br>
  </div>
</div>

<div id="android" class="container">
  <div style="background-color:white" class="jumbotron">
    <br><br>
    <h3>Android Application</h3>
    <br><br>
   </div>
</div>

<div id="web" class="container">
  <div style="background-color:#5ECC11" class="jumbotron">
    <br><br>
    <h3>Web Development</h3>
    <br><br>
  </div>
</div>

<div id="ios" class="container">
  <div style="background-color:white" class="jumbotron">
    <br><br>
    <h3>iOS Application</h3>
    <br><br>
  </div>
</div>

<div id="dm" class="container">
  <div style="background-color:#5ECC11" class="jumbotron">
    <br><br>
    <h3>Digital Marketing</h3>
    <p>Our digital marketing team has experience working for some of the biggest companies in India and with this rich experience, we are equipped to provide your business with the growth and exposure it needs. We do optimize your apps for the Play store and app store for better ranking and visibility.</p>
    <br><br>
   </div>
</div>




<div id="contact" class="container">
  <div style="background-color:white" class="jumbotron">
    <br><br>
    <h2>Find Us</h2>      
    <p>
Email: contact@bitjini.com <br>
Phone: +91-8971238365; +91-7798899252 <br>
Belgaum, KA - India</p>
<br><br>      
  </div>
</div>

</body>
</html>

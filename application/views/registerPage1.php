<?php
 
session_start();



 
?>
<html>
    <head>
        <style>
            .center {
                margin-left: auto;
                margin-right: auto;
                margin-top: 25px;
            }
 
            #submit { float: right; }
 
            form { border-style: solid; padding: 10px; width: 300px; }
 
            input[type="button"], input[type="text"], input[type="password"]
                { float: right; }
 
            div { text-align: center; width: 500px; }
        </style>
    </head>
    <body>
        <div class="center">
            
 
            <span id="message">
                <?php
                $action = (!($this->session->userdata('logged_in'))) ? 'token' : 'login';
                ?>
            </span>
        </div>

        <?php $this->load->helper('url'); ?>
        <form id="reset-form" action="<?= site_url('/addUsers_reg')?>" method="POST" class="center">
            <input type="hidden" name="action" value="<?php echo $action; ?>" />
            <p>Username: <input type="text" name="username" id="username" /></p>
 
            <?php if (!($this->session->userdata('logged_in'))) { ?>
                <p>Phone Number: <input type="text" name="phone_number" id="phone_number" /></p>
                Preferred method:<br />
                SMS: <input type="radio" name="method" value="sms" checked="checked" />
                Voice: <input type="radio" name="method" value="voice" />
            <?php } else { ?>
                
                <p>Password: <input type="password" name="password" id="password" /></p>
            <?php } ?>
 
            <p><input type="submit" name="submit" id="submit" value="login!" /></p>
            <p>&nbsp;</p>
        </form>
    </body>
</html>
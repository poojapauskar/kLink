<html>  

<?php $this->load->helper('url'); ?>

   <head>  
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
      <title>Tickets</title>  
   </head>  
   <table border="1">  
      <tbody>  
         <tr>  
            <td>Name</td>  
            <td>Region</td> 
            <td>Team</td>
            <td>Query</td> 
            <td>Resolution</td> 
            <td>Status</td>
            <td>Manage</td>  
            <td>Refer</td> 
         </tr>  
         <?php  
         foreach ($details->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->name;?></td>  
            <td><?php echo $row->region;?></td>
            <td><?php echo $row->team;?></td> 
            <td><?php echo $row->query;?></td>
            <td><?php echo $row->resolution;?></td>
            <td><?php echo $row->status;?></td>
            <td><button type="button" class="btn btn-success" id="<?php $row->ticket_id;?>" 
            onclick="location.href='<?php echo site_url('/manage/?id=');?><?php echo $row->ticket_id;?>'">Manage</button></td>
            <td><button type="button" class="btn btn-success" id="<?php $row->ticket_id;?>" 
            onclick="location.href='<?php echo site_url('/refer/?id=');?><?php echo $row->ticket_id;?>'">Refer</button></td>   
            </tr>  
         <?php }  
         ?>  
      </tbody>  
   </table>  
<body>
<?php if($isAdmin ==1){ ?>
<button type="button" class="btn btn-success" id="" 
            onclick="location.href='<?php echo site_url('/register/');?>'">Add Users</button>
<?php }?> 
</body> 


 
</html> 
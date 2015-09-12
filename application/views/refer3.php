<?php foreach ($details as $row)  
         {  
            ?><tr>  
            <td>Call <?php echo $row->phone;?></td> <br><br> 
            <td>Mail to :<?php echo $row->email;?></td>
             <br><br>
           
            
           
            
            <button type="button" class="btn btn-success" id="" 
            onclick="location.href='mailto:<?php echo $row->email;?>'">Send mail</button>
            </tr>  
         <?php }?>
         
       
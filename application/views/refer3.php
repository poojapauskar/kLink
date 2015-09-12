<?php foreach ($details as $row)  
         {  
            ?><tr>  
            <td>Call <?php echo $row->phone;?></td> <br><br> 
            <td>Mail to :<?php echo $row->email;?></td>
             <br><br>
             <button type="button" class="btn btn-success" id="" 
            onclick="location.href='<?php echo site_url('/mail/?id=');?><?php echo $row->user_id;?>'">Send mail</button>
            
            </tr>  
         <?php }?>
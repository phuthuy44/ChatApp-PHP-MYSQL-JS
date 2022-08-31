
<?php
while($row=mysqli_fetch_assoc($sql)){
    $sql2= "SELECT * FROM message WHERE (incomming_id={$row['unique_id']}
                                    OR outcomming_id={$row['unique_id']}) 
                                    AND (outcomming_id='{$outgoing_id}' OR outcomming_id='{$outgoing_id}') 
                                    ORDER BY msg_id DESC LIMIT 1";

    $query2=mysqli_query($conn,$sql2);
    $row2=mysqli_fetch_assoc($query2);
    if(mysqli_num_rows($query2)>0){
        $result=$row2['msg'];
    }else{
        $result="No message available";
    }
    
    (strlen($result)>28) ? $msg=substr($result, 0, 28).'...' : $msg=$result;
    ($outgoing_id == isset($row2['outcomming_id']))? $you="You:" : $you="";
    ($row['status']=="Offline now")? $offline="offline":$offline="";
    $output .= '<a href="chat.php?user_id='.$row['unique_id'].'">
                    <div class="content">
                        <img src="../img/'.$row['image'].'" alt="">
                        <div class="details">
                            <span>'.$row['firstname']." ".$row['lastname'].'</span>
                            <p>'.$you.''.$msg.'</p>
                        </div>
                    </div>
                    <div class="status-dot '.$offline.'">
                        <i class="fas fa-circle"></i>
                    </div>
                </a>';
}

?>
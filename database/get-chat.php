<?php
session_start();
if(isset($_SESSION['unique_id'])){
    include_once "config.php";
    $outgoing_id= mysqli_real_escape_string($conn,$_POST['outgoing_id']);
    $incomming_id= mysqli_real_escape_string($conn,$_POST['incomming_id']);

    $output="";
    $sql="SELECT * FROM message 
                    LEFT JOIN users ON users.unique_id = message.incomming_id
                    WHERE (outcomming_id= {$outgoing_id} AND incomming_id={$incomming_id})
                    OR (outcomming_id= {$incomming_id} AND incomming_id={$outgoing_id}) ORDER BY msg_id ";
    
    $query=mysqli_query($conn,$sql);
    if(mysqli_num_rows($query)>0){
        while($row=mysqli_fetch_assoc($query)){
            if($row['outcomming_id'] === $outgoing_id){
                $output .= '<div class="chat outgoing">
                               
                                <div class="details">
                                <p>'.$row['msg'].'</p>
                                </div>
                            </div>';
            }else{
                $output .= '<div class="chat incoming">
                                <img src="../img/'.$row['image'].'" alt="">
                                <div class="details">
                                    <p>'.$row['msg'].'</p>
                                </div>
                            </div>';
            }
        }
    }   echo $output;
}else{
    header("Location:index.php");
}

?>
<?php
session_start();
if(!isset($_SESSION['unique_id'])){
    header("location:login.php");
}
?>
<?php
 include_once "header.php";
 ?>
    <body>
        <div class="wrapper">
            <section class="chat-area">
                <header>
                <?php
                    include_once "../database/config.php";
                    $user_id=mysqli_real_escape_string($conn,$_GET['user_id']);
                    $sql=mysqli_query($conn,"SELECT *FROM users WHERE unique_id='{$user_id}'");
                    if(mysqli_num_rows($sql)>0){
                        $row=mysqli_fetch_assoc($sql);
                    }
                    ?>
                    <a href="user.php"class="back-icon"><i class="fas fa-arrow-left"></i></a>
                    <img src="./../img/<?php echo $row['image']?>" alt="">
                    <div class="details">
                        <span><?php
                        echo $row['firstname']." ".$row['lastname'];
                        ?></span>
                        <p><?php
                                echo $row['status'];
                            ?></p>
                    </div>
                   
                </header>
                <div class="chat-box">
                    <!--div class="chat outgoing">
                       
                        <div class="details">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </!--div>
                    <div-- class="chat incoming">
                        <img src="../img/tải xuống.jfif" alt="">
                        <div class="details">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>
                    </div-->
                    
                </div>
                <form action="" class="typing-area" autocomlete="off">
                    <input type="text" name="outgoing_id" value="<?php echo $_SESSION['unique_id'];?>" hidden>
                    <input type="text" name="incomming_id"value="<?php echo $user_id;?>"hidden>
                    <input type="text"name="message"class="input-fields"placeholder="Typing a message here...">
                    <button>Send</button>
                </form>
            </section>
        </div>
        
        <script>
            const form=document.querySelector(".typing-area");
            const inputField=form.querySelector(".input-fields");
            const sendBtn=form.querySelector("button");
            const chatBox=document.querySelector(".chat-box");
            
            
            form.onsubmit=(e)=>{
                e.preventDefault();
            }
            sendBtn.onclick=()=>{
                let xhr= new XMLHttpRequest();
                xhr.open("POST","./../../ChatApp/database/insert-chat.php",true);
                xhr.onload = ()=>{
                    if(xhr.readyState === XMLHttpRequest.DONE){
                        if(xhr.status===200){
                        inputField.value="";//once mess inserted into database then leave blank the input field
                        scrollToBottom();
                    }
                }
            }
            let formData = new FormData(form);
            xhr.send(formData);
        }
        chatBox.onmouseenter=()=>{
            chatBox.classList.add("active");
        }
        chatBox.onmouseleave=()=>{
            chatBox.classList.remove("active");
        }
        setInterval(() => {
                let xhr= new XMLHttpRequest();
                xhr.open("POST","../database/get-chat.php",true);
                xhr.onload = ()=>{
                if(xhr.readyState === XMLHttpRequest.DONE){
                    if(xhr.status===200){
                     let data=xhr.response;
                        //console.log(data);
                        chatBox.innerHTML=data;
                        //scrollToBottom();
                        if(!chatBox.classList.contains("active")){
                            scrollToBottom();
                        }
                        
                    }
                }
            }   
            let formData = new FormData(form);
            xhr.send(formData);
                //xhr.send();
                 }, 500);
         function scrollToBottom(){
            chatBox.scrollTop=chatBox.scrollHeight;
         }
        </script>
    </body>
</html>
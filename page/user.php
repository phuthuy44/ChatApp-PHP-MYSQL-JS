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
            <section class="users">
                <header>
                    <?php
                    include_once "../database/config.php";
                    $sql=mysqli_query($conn,"SELECT *FROM users WHERE unique_id='{$_SESSION['unique_id']}'");
                    if(mysqli_num_rows($sql)>0){
                        $row=mysqli_fetch_assoc($sql);
                    }
                    ?>
                    <div class="content">
                        <img src="../img/<?php echo $row['image']?>" alt="">
                        <div class="details">
                            <span><?php
                            echo $row['firstname']." ".$row['lastname'];
                            
                            ?></span>
                            <p><?php
                                echo $row['status'];
                            ?></p>
                        </div>
                    </div>
                    <a href="../database/logout.php?logoutuser_id=<?php echo $row['unique_id']?>" class="logout">Logout</a>
                </header>
                <div class="search">
                    <!--span class="text">Select an user to start chat.</!--span-->
                    <input type="text"  placeholder="Enter name to search..." >
                    <button><i class="fas fa-search"></i></button>
                </div>
                <div class="users-list">
                </div>
            </section>
        </div>
        <script>
            const searchBar=document.querySelector(".users .search input[type='text']");
            const searchBtn=document.querySelector(".users .search button");
            const userList=document.querySelector(".users .users-list");
                    searchBtn.onclick=()=>{
                    searchBtn.classList.toggle("active");
                    //searchBar.classList.toggle("active");
                    //searchBar.focus();
            }
            searchBar.onkeyup=()=>{
                let searchTerm=searchBar.value;
                 /*if(searchTerm!=""){
                   searchBar.classList.add("active");

                }else{
                    searchBar.classList.remove("active");
                }*/
                let xhr= new XMLHttpRequest();
                xhr.open("POST","../database/search.php",true);
                xhr.onload = ()=>{
                if(xhr.readyState === XMLHttpRequest.DONE){
                    if(xhr.status===200){
                     let data=xhr.response;
                       // console.log(data);
                         userList.innerHTML=data;
                       
                        
                    }
                }
            }
            xhr.setRequestHeader("Content-type","application/x-www-form-urlencoded");
            xhr.send("searchTerm="+ searchTerm);
            }
            setInterval(() => {
                let xhr= new XMLHttpRequest();
                xhr.open("GET","../database/users.php",true);
                xhr.onload = ()=>{
                if(xhr.readyState === XMLHttpRequest.DONE){
                    if(xhr.status===200){
                     let data=xhr.response;
                        //console.log(data);
                        userList.innerHTML=data;
                       /*if(searchBar.classList.contains("active")){
                            userList.innnerHTML=data;
                        }*/
                        
                        
                    }
                }
            }
                xhr.send();
                 }, 500);
        </script>
    </body>
</html>
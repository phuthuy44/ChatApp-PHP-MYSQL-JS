<?php
session_start();
if(isset($_SESSION['unique_id'])){
    header("Location:../../../ChatApp/page/user.php");
}
?>
<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Realtime Chat App</title>
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    </head>
    <body>
        <div class="wrapper">
            <section class="form signup">
                <header>Realtime Chat App</header>
                <form action="#" enctype="multipart/form-data" autocomplete="off">
                    <div class="error-txt">
                        <!--This is an error message!-->
                    </div>
                    <div class="name-details">
                        <div class="field input">
                            <label >First Name</label>
                            <input type="text" name="firstname" placeholder="First Name"required>
                        </div>
                        <div class="field input">
                            <label >Last Name</label>
                            <input type="text" name="lastname"placeholder="Last Name"required>
                        </div>
                    </div>
                        <div class="field input">
                            <label >Email Address</label>
                            <input type="text" name="email"placeholder="Email Address"required>
                        </div>
                        <div class="field input">
                            <label >Password</label>
                            <input type="password" name="password" placeholder="Enter new password"required>
                            <i class="fas fa-eye"></i>
                            
                        </div>
                        <div class="field image">
                            <label >Select Image</label>
                            <input type="file" name="image" required>
                        </div>
                        <div class="field button">
                            <input type="submit"value="Continue to chat">
                        </div>
                    
                </form>
                <div class="link">
                    Already signed up?<a href="../ChatApp/page/login.php">Login now</a>
                </div>
            </section>
        </div>
        <script src="./js/script.js"></script>
    </body>
</html>
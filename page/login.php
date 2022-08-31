<?php
 include_once "header.php";
 ?>
    <body>
        <div class="wrapper">
            <section class="form login">
                <header>Realtime Chat App</header>
                <form action="#" autocomplete="off">
                    <div class="error-txt">
                        <!--This is an error message! -->
                    </div>
                        <div class="field input">
                            <label >Email Address</label>
                            <input type="text" name="email"placeholder="Email Address" required>
                        </div>
                        <div class="field input">
                            <label >Password</label>
                            <input type="password" name="password"placeholder="Enter your password" required>
                            <i class="fas fa-eye"></i>
                        </div>
                        <div class="field button">
                            <input type="submit"value="Continue to chat">
                        </div>
                    
                </form>
                <div class="link">
                    Not yet signed up?<a href="../index.php">Signup now</a>
                </div>
            </section>
        </div>
        <script src="../js/script.js"></script>
        <script src="../js/Login.js"></script>
    </body>
</html>
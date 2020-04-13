<!DOCTYPE html> 
<html>
<head>
</head>
<body>

<?php
        $session_confirmation = $_SESSION["confirmation"];
        $post_confirmation = $_POST['confirmation'];
        if(!isset($session_confirmation)){
            $session_confirmation = "some value";
        }

        if(!isset($post_confirmation)){
            $post_confirmation = "some value";
        }


?>

    <form method="post" name="csfrForm" action="csfr.php">
             

               	<div>
	                <input type="text" placeholder="Username" name="username" id="username" required>
	            </div>
	            <div>
	                <input type="password" placeholder="" name="password" id="password" required>
	            </div>
	          
	          
	            <div>
	                <input class="submit" type="submit" name='submit' value="SUBMIT" style="width: 200px;">
	            </div>
	</form>

    <?php 
    if(isset($_POST["username"]) and isset($_POST["password"])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        if($username == "host" and $password == "pass") {
            echo '   <div>
            <div id="msg" placeholder="" name="message" id="needs">
                Success!
            </div>
        </div>';
        }
        else {
            echo '   <div>
            <div id="msg" placeholder="" name="message" id="needs">
                Wrong username or password!
            </div>
        </div>';
        }
    }
       

    ?>
</body>
</html>
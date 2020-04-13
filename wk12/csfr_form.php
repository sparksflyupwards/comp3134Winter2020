<html>

<body>

<?php 
    $_SESSION["confirmation"] =     "some random value";
    
?>
<form method="POST" id="csfrForm" action="csfr.php">
    <div>
        <input type="text" name="username" id="username" value="host" required>
    </div>
    <div>
        <input type="password" placeholder="" name="password" id="password" value="pass" required>
    </div>
        <input type="hidden" name="hidden" id="hidden" >
  
  
	           
</form>

<script>
document.getElementById("hidden").value = "<?php echo $_SESSION["confirmation"] ?>"
document.getElementById("csfrForm").submit()</script>

</body>

</html>
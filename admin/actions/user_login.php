<?php

require('session.php');

if (isset($_POST['btnlogin'])) {
    $user_email = $_POST['user_email'];
    $pass = $_POST['password'];

if ($pass == ''){
     ?>    <script type="text/javascript">
                alert("Debes ingresar tu password");
                window.location = "../login.php";
                </script>
        <?php
}else{

        ?>    <script type="text/javascript">
              window.location = "admin/admin.php";
          </script>
        <?php       
    }   
}
?>
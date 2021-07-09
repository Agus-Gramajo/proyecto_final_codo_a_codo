<?php
 
session_start();
 

unset($_SESSION['USER_ID']);

 
 session_destroy();
?>
<script type="text/javascript">
window.location = "./index.php";
</script>
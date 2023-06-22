<?php
    session_start();
    session_destroy();
    echo "<script>window.location='/projectEG-php/index.php'</script>";
?>
<?php
        session_start();
        if(!$_SESSION['verified']) {
                die("<script>location.href='http://kobegmartin.xyz/editor/login.php';</script>");
        }
?>
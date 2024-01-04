<!DOCTYPE html>
<html>
<head>
        <link rel="stylesheet" type="text/css" href="login.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script>
                function login() {
                var user = $("#user").val();
                var pass = $("#pass").val();
                        $.post("system/account.php",{operation:"login", username: user, password: pass}, function(data) {
                                if(data.startsWith("Err")) {
                                        alert("Error 102, YOU SUCK")
                                }
                        })
                }
        </script>
<body>
    <div class='header'>
        <center>Please Login to Continue</center>
    </div>
    <br>
        <input class="input" type="text" placeholder="Username" id="user" onkeydown="if(event.keyCode == 13){login();}"/>
        <br>
        <input class="input" type="password" placeholder="Password" id="pass" onkeydown="if(event.keyCode == 13){login();}"/>
        <br>
        <p id="enter"></p>
        
        <script>
                function myFunction() {
                    var length = LENGTH OF PASSWORD; 
                    var prompt;
                    if (length < 3) {
                        prompt = "";
                    } else {
                        prompt = "Press Enter to Continue";
                    }
                    document.getElementById("enter").innerHTML = prompt;
                }
        </script>
        
<div class='footer'>
&copy; 2015-<?php echo date("Y");?> by Martin & Stoddard
</div>

</body>
</html>
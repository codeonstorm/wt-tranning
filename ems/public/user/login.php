<?php
require_once __DIR__.'/../partitions/header.php';
require_once __DIR__.'/../partitions/navbar.php';
?>
    <div id="">
        <h2>Login</h2>
        <form id="login" method="post">
            <input type="text" id="login-username" placeholder="Username" required><br><br>
            <input type="password" id="login-password" placeholder="Password" required><br><br>
            <button id="login-button" type="submit">Login</button>
        </form>
        <div id="login-message"></div>
    </div>

 <!-- Add Bootstrap and jQuery scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
        // Login
        $("#login").submit(function(e) {
            e.preventDefault();
            var username = $("#login-username").val();
            var password = $("#login-password").val();
            
            $.ajax({
                type: "POST",
                url: "auth.php",
                data: {
                    username: username,
                    password: password
                },
                success: function(response) {
                    $("#login-message").html(response);
                }
            });
        });
    });
    </script>
</body>
</html>

<?php
require_once __DIR__.'/partitions/header.php';
require_once __DIR__.'/partitions/navbar.php';
?>
<body>
     <div id="signup-form">
        <h2>Signup</h2>
        <form id="signup-form" method="post">
            <input type="text" id="signup-username" placeholder="Username" required><br><br>
            <input type="password" id="signup-password" placeholder="Password" required><br><br>
            <button id="signup-button" type="button">Signup</button>
        </form>
        <div id="signup-message"></div>
    </div>
<!-- Add Bootstrap and jQuery scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <script>
     
    // Signup
    $("#signup-button").submit(function() {
        var username = $("#signup-username").val();
        var password = $("#signup-password").val();
        
        $.ajax({
            type: "POST",
            url: "signup.php",
            data: {
                username: username,
                password: password
            },
            success: function(response) {
                $("#signup-message").html(response);
            }
        });
    });
 

    </script>
</body>
</html>

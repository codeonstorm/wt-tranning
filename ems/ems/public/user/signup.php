<?php
require_once __DIR__.'/../partitions/header.php';
require_once __DIR__.'/../partitions/navbar.php';
?>
<div id="">
    <h2>signup</h2>
    <form id="signup" method="post">
        <input type="text" id="signup-username" placeholder="Username" required><br><br>
        <input type="email" id="signup-email" placeholder="email" required><br><br>
        <input type="password" id="signup-password" placeholder="Password" required><br><br>
        <button id="signup-button" type="submit">signup</button>
    </form>
    <div id="signup-message"></div>
</div>

 <!-- Add Bootstrap and jQuery scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
        // signup
        $("#signup").submit(function(e) {
            e.preventDefault();
               var fname = $("#signup-username").val();
                var lname = $("#signup-username").val();
                var mobile = $("#signup-username").val();
                var email = $("#signup-email").val();
                var password = $("#signup-password").val();
            
            $.ajax({
                type: "POST",
                url: "auth.php",
                data: {
                    fname: fname,
                    lname: lname,
                    mobile: '12345678',
                    email: email,
                    password: password,
                    type: 'signup'
                },
                success: function(response) {
                    $("#signup-message").html(response);
                }
            });
        });
    });
    </script>
</body>
</html>

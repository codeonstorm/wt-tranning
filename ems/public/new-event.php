<?php
require_once __DIR__.'/partitions/header.php';
require_once __DIR__.'/partitions/navbar.php';
?>
    

<section>
    <h1>Event Registration</h1>
    <div id="message"></div>
    <form id="registrationForm">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br><br>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email"><br><br>

    <button type="button" id="registerButton">Register</button>
    </form>
</section>

<?php
require_once __DIR__.'/partitions/footer.php';
?>

<!-- Add Bootstrap and jQuery scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
<script>
$(document).ready(function() {
    $("#registerButton").click(function() {
    var name = $("#name").val();
    var email = $("#email").val();

    $.ajax({
        type: "POST",
        url: "register.php",
        data: {
            name: name,
            email: email
        },
        success: function(data) {
            $("#message").html(data);
            $("#registrationForm")[0].reset();
        }
    });
    });
});
</script>
</body>
</html>

 

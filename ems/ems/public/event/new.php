<?php
require_once __DIR__.'/../partitions/header.php';
require_once __DIR__.'/../partitions/navbar.php';
?>
<div id="">
    <h2>Login</h2>
    <form id="event" method="post">
        <input type="text" id="organiser_name" name="organiser_name" placeholder="organiser name" ><br><br>
        <input type="text" id="title" name="title" placeholder="title" ><br><br>
        <textarea name="description" id="" cols="30" rows="10" placeholder="Add description..."></textarea>
        <input type="email" id="event_email" name="event_email" placeholder="email" ><br><br>
        <input type="email" id="event_mobile" name="event_mobile"  placeholder="mobile" ><br><br>
        <textarea name="venue" id="venue" cols="30" rows="10" placeholder="Add address..."></textarea>
        <br><br>
        <input type="file" id="banner" name="banner" placeholder="venue" ><br><br>
        <br><br>
        <input type="datetime-local" id="start_time" name="start_time" placeholder="venue" ><br><br>
        <input type="datetime-local" id="end_time" name="end_time" ><br><br>
        <input type="checkbox" id="accepted_policy" name="accepted_policy" >zcxcxc<br><br>
        <input type="submit" name="event_submit" value="submit">
    </form>
    <div id="event-message"></div>
</div>

 <!-- Add Bootstrap and jQuery scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
        // Login
        $("#event").submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: "POST",
                url: "event_submit.php",
                data: $(this).serialize(),
                success: function(response) {
                    $("#event-message").html(response);
                }
            });
        });
    });
    </script>
</body>
</html>

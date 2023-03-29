<?php
    $name = $_POST['complete_name'];
    $email = $_POST['email'];
    $type = $_POST['type'];
    $satisfaction = $_POST['satisfaction_level'];
    $message = $_POST['message'];
?>


<h2>Thank you!</h2>
<p>Received <?php echo $type; ?> message from <?php echo $name . " " . $email; ?></p>
<p><?php echo $message ?></p>
<p>Satisfaction Level: <?php echo $satisfaction; ?> </p>

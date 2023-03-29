<h1>Feedback Form</h1>
<form method="POST" action="thankyou.php">
Name: <input type="text" name="complete_name" /><br />
Email Address: <input type="email" name="email" /><br />
Type:
<select name="type">
<option value="Inquiry">Inquiry</option>
<option value="Feedback">Feedback</option>
<option value="Other">Other</option>
</select>
<br />
Level of satisfaction: <input type="range" name="satisfaction_level"  min="1" max="10" /><br />
Feedback Message: <input type="text" name="message" /><br/>
<button>Submit</button>
</form>


<?php
endif;
?>

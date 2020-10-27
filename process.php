<?php
mail($_POST["email"],"Email Confirmation","Hello, " + $_POST["First Name"] + ", you have signed up for Great Talk. Please click <a href='https://great-talk.github.io'>this link</a> to confirm.","From: signup@great-talk.github.io");
echo ("A message has been sent to your inbox. If you did not recieve it, click ")
?>
<button onClick="history.reload()">this button</button>.

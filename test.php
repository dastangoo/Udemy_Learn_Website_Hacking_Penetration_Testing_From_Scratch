<?php 
// $textbox1 = admin' union select <something> #
SELECT * FROM accounts WHERE username='admin' union select <something> #'

// Safe:
// Using PDO driver concludes to some code like below:
PDO->prepare(SELECT * FROM accounts WHERE username = "'admin' union select <something> #'");
PDO->execute(array('admin' union select <something> #'));
?>
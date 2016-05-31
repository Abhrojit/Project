<?php
	exec("sudo killall python");
	exec("sudo python /var/www/html/iris/pyscripts/testledON.py 2>&1",$output);

?>
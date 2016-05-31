<?php
	exec("sudo killall python");
	exec("sudo python /var/www/html/iris/pyscripts/redledON.py 2>&1",$output);
?>
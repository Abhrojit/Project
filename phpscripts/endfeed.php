<?php
	exec("sudo killall webcamDaemon mjpg_streamer");
	exec("sudo python /var/www/html/iris/pyscripts/testledOFF.py");
?>
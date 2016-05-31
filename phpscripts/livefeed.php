<?php
	exec ("sudo /usr/local/bin/mjpg_streamer -i '/usr/local/lib/input_uvc.so -d /dev/video0 -y -r 320x240 -f 15' -o '/usr/local/lib/output_http.so -w /usr/local/www'");
	echo "<script>window.top.location='http://localhost:8080/test.html'</script>";
?>
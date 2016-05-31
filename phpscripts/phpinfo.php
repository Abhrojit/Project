<!doctype html>
<html>
        <style type="text/css">
                #form{font: bold 30px/30px Georgia, serif;}
                button{background: rgba(255,255,0,0.99);width250px;height:180px$
                #container{margin:0px;auto;width:80%;min-width:40%;}
        </style>
        <body>
                <div id = "container">
                        <form id = "form" action="test.php" method="post">
                                <center>
                                <button name="on">ON</button>
                                <button name="off">OFF</button>
                                <button name="blink">BLINK</button>
				<button name="livefeed">LIVE FEED</button>
				<button name="end">END FEED</button>
                        </form>
                </div>
        </body>
</html>

<?php
	if(isset($_POST['on']))
	{
		exec("sudo killall python");
		exec("sudo python /var/www/html/iris/pyscripts/testledON.py 2>&1",$output);
	}
	else if(isset($_POST['off']))
        {
                exec("sudo killall python");
                exec("sudo python /var/www/html/iris/pyscripts/testledOFF.py");
        }
	else if(isset($_POST['blink']))
        {
                exec("sudo killall python");
                exec("sudo python /var/www/html/iris/pyscripts/testledBLINK.py");
        }
	else if(isset($_POST['livefeed']))
	{
		exec ("sudo /usr/local/bin/mjpg_streamer -i '/usr/local/lib/input_uvc.so -d /dev/video0 -y -r 320x240 -f 15' -o '/usr/local/lib/output_http.so -w /usr/local/www'");
//  	        header("Location: http://localhost:8080/test.html,true");
		echo "<script>window.top.location='http://localhost:8080/test.html'</script>";
		echo "helllo";

	}
	else if(isset($_POST['end']))
	{
		exec("sudo killall webcamDaemon mjpg_streamer");
		exec("sudo python /var/www/html/iris/pyscripts/testledOFF.py");
	}
?>




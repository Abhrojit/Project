

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
                                <button name="redon">RED ON</button>
                                <button name="redoff">RED OFF</button>
                                <button name="redblink">RED BLINK</button>
                                <button name="greenon">GREEN ON</button>
                                <button name="greenoff">GREEN OFF</button>
                                <button name="greenblink">GREEN BLINK</button>
                                <button name="blueon">BLUE ON</button>
                                <button name="blueoff">BLUE OFF</button>
                                <button name="blueblink">BLUE BLINK</button>
				<button name="livefeed" onclick="window.open("http://www.google.com");"‌>LIVE FEED</button>
				<button name="end">END FEED</button>
                        </form>
                </div>
		<DIV>
			<iframe src="http://www.google.com"></iframe>
		<DIV>
        </body>
</html>



<!-- <?php
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
        else if(isset($_POST['redon']))
	{
		exec("sudo killall python");
		exec("sudo python /var/www/html/iris/pyscripts/redledON.py 2>&1",$output);
	}
	else if(isset($_POST['redoff']))
        {
                exec("sudo killall python");
                exec("sudo python /var/www/html/iris/pyscripts/redledOFF.py");
        }
	else if(isset($_POST['redblink']))
        {
                exec("sudo killall python");
                exec("sudo python /var/www/html/iris/pyscripts/redledBLINK.py");
        }
        else if(isset($_POST['greenon']))
	{
		exec("sudo killall python");
		exec("sudo python /var/www/html/iris/pyscripts/greenledON.py 2>&1",$output);
	}
	else if(isset($_POST['greenoff']))
        {
                exec("sudo killall python");
                exec("sudo python /var/www/html/iris/pyscripts/greenledOFF.py");
        }
	else if(isset($_POST['greenblink']))
        {
                exec("sudo killall python");
                exec("sudo python /var/www/html/iris/pyscripts/greenledBLINK.py");
        }
        else if(isset($_POST['blueon']))
	{
		exec("sudo killall python");
		exec("sudo python /var/www/html/iris/pyscripts/blueledON.py 2>&1",$output);
	}
	else if(isset($_POST['blueoff']))
        {
                exec("sudo killall python");
                exec("sudo python /var/www/html/iris/pyscripts/blueledOFF.py");
        }
	else if(isset($_POST['blueblink']))
        {
                exec("sudo killall python");
                exec("sudo python /var/www/html/iris/pyscripts/blueledBLINK.py");
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
?> -->


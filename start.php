<?php
	if(!empty($_GET['ram']) && ctype_digit($_GET['ram'])) {
		$ram = trim($_GET['ram']);
	} else {
		$ram = '1500';
	}
	echo shell_exec('java -Xmx'.$ram.'M -jar server.jar nogui');
?>

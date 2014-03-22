<?php

	// Template string to print
	$template = <<<EOF


(L-R)



 Write about something without thinking
 too much (outcome)

 Identify a border with a catchy title

 Question the economy to start a
 conversation

 Spend time thinking about time with your
 hands

 Continue the notion of work without
 telling anyone

 Observe weeds in pen

 Re-write collective action inside a
 square

















EOF;

	// Putting the template in a file
	file_put_contents('/tmp/print.txt',$template);
	
	// Print command
	shell_exec('lpr /tmp/print.txt');

	// Escape sequence to a
	//shell_exec("echo '\x1b\x69' | lpr -l");	
	
	// Removing temporary file
	shell_exec('rm /tmp/print.txt');

	// Return string
	$s = '{"success":"true"}';
	// Return a JSON to account for AJAX print requests as JSONP
	if (isset($_REQUEST['callback']))
	{
		$s = $_REQUEST['callback'].'('.$s.')';	
	}
	header("Content-Type: application/json");
	echo $s;
?>

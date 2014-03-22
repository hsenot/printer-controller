<?php

	// Template string to print
	$template = <<<EOF


(L-R)


 Write about something without thinking
 too much (statement)

 Draw a circle inside a square

 Colour sticks intuitively

 Copy currency in black and white

 Reinvent a game of cards like a robot

 Introduce a set of instructions in the
 gallery

 Paint a flagpole in 11 seconds

 Photocopy free time during business 
 hours



















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

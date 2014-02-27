<?php

	// Decoding the request parameters
	$to_print = 'This is a test string';

	if (isset($_REQUEST['mystring']))
	{
		$to_print = $_REQUEST['mystring'];
	}

	// Template string to print
	$template = <<<EOF






$to_print







  Visit: http://www.temporary-agency.com




            Your assignment is:

EOF;

	// Putting the template in a file
	file_put_contents('/tmp/print.txt',$template);
	
	// Print command
	shell_exec('lpr /tmp/print.txt');

	// Escape sequence to a
	shell_exec("echo '\x1b\x69' | lpr -l");	
	
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

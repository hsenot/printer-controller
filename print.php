<?php

	// Decoding the request parameters
	$to_print = 'This is a test string';

	if (isset($_REQUEST['mystring']))
	{
		$to_print = $_REQUEST['mystring'];
	}

	// Template string to print
	$template = <<<EOF
123456789012345678901234567890123456789012
$to_print
3
4
5
6
7
8
9
10
Visit: http://temporary-agency.com
12
13
Your assignment is:
15
16
17
18
19
20
EOF;

	// Putting the template in a file
	file_put_contents('/tmp/print.txt',$template);

	// Print command
	shell_exec('lpr /tmp/print.txt');

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

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
1
2
3
4
5
6
7
8
9
10
11
12
EOF;

	// Putting the template in a file
	file_put_contents('/tmp/print.txt',$template);

	// Print command
	shell_exec('lpr /tmp/print.txt');

	// Removing temporary file
	shell_exec('rm /tmp/print.txt');

?>
<?php

	// Template string to print
	$template = <<<EOF


(L-R)


 Trial staples as an indulgence

 Find a piece of paper during business
 hours

 Ruin the first 10 things you see
 spontaneously

 Spend time thinking about an image
 based on searching your computer for
 'action' randomly
 (perceived, and real)

 Scuplt rubber bands unacceptably



















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

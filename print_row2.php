<?php

	// Template string to print
	$template = <<<EOF


(L-R)


 Plant a circle on the wall

 Replicate 'X' in the wrong order

 Sew something with a double meaning to
 create a completely new image

 Consider a net inside an irregular
 shape

 Replicate elastic bands and combine

 Collage an orchestra as a pie chart

 Record nothing once

 Copy something in the size of a book



















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

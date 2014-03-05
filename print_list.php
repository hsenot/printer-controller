<?php

	// Template string to print
	$template = <<<EOF

Assignment Bank: 
(L-R)


 Replicate 'X' in the wrong order

 Sew something with a double meaning to 
 create a completely new image

 Ruin the first 10 things you see 
 spontaneously

 Replicate elastic bands and combine

 Collage an orchestra as a pie chart

 Record nothing once

 Copy something in the size of a book

 Draw a circle inside a square

 Colour sticks intuitively

 Copy currency in black and white

 Reinvent a game of cards like a robot

 Introduce a set of instructions in the 
 gallery

 Paint a flagpole in 11 seconds

 Find a piece of paper during business 
 hours

 Trial staples as an indulgence

 Question the economy to start a 
 conversation

 Spend time thinking about time with your 
 hands

 Continue the notion of work without 
 telling anyone

 Observe weeds in pen


















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

<?php

	// Template string to print
	$template = <<<EOF

Assignment Bank: 
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

 Write about something without thinking
 too much (outcome)

 Identify a border with a catchy title

 Question the economy to start a
 conversation

 Spend time thinking about time with your
 hands

 Continue the notion of work without
 telling anyone (statement, and outcome)

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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTMLTransitional//EN" "http://www.w3.org/
TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/
xhtml" xml:lang="en" lang="en">
 <head>
 	 <meta http-equiv="Content-Type"
content="text/html; charset=utf-8" />
	 <title>Strings</title>
     <button id='test' onClick=function() {
            
     }> </button>
 </head>
<body>
<?php # Script 1.6 - strings.php
 // Create the variables:
$first_name = 'Haruki';
 $last_name = 'Murakami';
 $book = 'Kafka on the Shore';
$full_name = $first_name. ' '.$last_name;
 // Print the values:
echo "<p>The book <em>$book</em>
was written by $first_name
$last_name.</p>";	
echo $full_name;
?>
</body>
</html>
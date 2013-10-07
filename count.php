<html>
<head>
</head>
<body>

<h2>
Phil McBride<br />
PHP Test Program<br />
10-4-2013 12:31 pm<br /></h2><h3>
This program will count the number of times these words appear in the 
file hello:  "the" , "I", and "occur".
</h3>

<h3>Type the word you would like to search for below</h3>

<!--  <field???></field><submit???</submit type=post name=submit> -->





<?php 



/*This program will count the number of times certain words appear in the 
file hello.  It is written to be run in your browser. */


//number_of_times variables for the, I, and occur
$t=0;
$i=0;
$o=0;


$filecontents = file_get_contents('hello');
$file = file('hello');



//array of words in "hello"
$words = preg_split('/[\s]+/', $filecontents, -1, PREG_SPLIT_NO_EMPTY);

foreach ($words as $word) {
 if ($word == 'the') {
 $t++;}
 if ($word == 'I') {
 $i++;}
 if ($word == 'occur') {
 $o++;
 }
}

echo "<h3>";
echo 'The word "the" appears &nbsp;' . $t . '&nbsp; times.<br />';
echo 'The word "I" appears &nbsp;' . $i . '&nbsp; times.<br />';
echo 'The word "occur" appears &nbsp;' . $o . '&nbsp; times.<br />';
echo "</h3>";
echo "<h4>";
echo 'Here is the text of the file hello: <br />&nbsp;<br /><i>';

foreach ($file as $line_num => $lines) {
 echo $lines . '<br />';
 }

echo "</i></h4>";




?>
</body>
</html>
<html>
<head>
</head>
<body>

<h2>
Phil McBride<br />
PHP Test Program<br />
10-4-2013 12:31 pm<br /></h2><h3>
This program will count the number of times words appear in a file.
</h3>

<h3>Please choose the file you would like to search</h3>

<!--  <drop down field???></field><submit???</submit type=get name=file_choice> -->
<?php
/*Code to find files in local directory  list all files in local directory and also 
list "no file selected" if "no file selected" is highlighted, default value is "null"*/
?>


<h3>Type the word you would like to search for below</h3>

<!--  <input type="" name ="">
field???></field><submit???</submit type=get name=search_word> -->

<?php 
/* Code to search for a certain word in a file.  Default value if no word is input is "null"
*/
?>

<?php 

// variables for file chosen and word to search for
$file = (isset($_GET['file_choice'])) ? $_GET['file_choice'] : null;
$word = (isset($_GET['search_word'])) ? $_GET['search_word'] : null;

//number_of_times variable for selected search word
$w=0;

$file_contents = file_get_contents($file);

//array of words in "hello"
$file_words = preg_split('/[\s]+/', $file_contents, -1, PREG_SPLIT_NO_EMPTY);

foreach ($file_words as $x) {
 if ($x == $word) {
 $w++;}
}

if $word != null {
echo "<h3>";
echo 'The word "' . $words . '" appears &nbsp;' . $w . '&nbsp; times.<br />';
echo "</h3>";}

else {
echo "No Word Chosen";
}

if $file != null {
 echo "<h4>";
 echo 'Here is the text of the file' . $file . ': <br />&nbsp;<br /><i>';

 foreach ($file_words as $y) {
  if ($y == $word) { 
   echo '<span bgcolor="yellow">' . $y . '</span>' . /*symbole for a space??*/;
  }
  else {
  echo $y . /*symbol for a space*/;
  }
 }

 echo "</i></h4>";
}
else {
echo "No File Chosen"}




?>
</body>
</html>
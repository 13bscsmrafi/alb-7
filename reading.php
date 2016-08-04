<?php

/*  loading the json into string  */


$string = file_get_contents("file.json");
$json_a=json_decode($string,true);

$word=$_POST['word'];
echo $word.'<br>';


/*   testing is the word is set  */

if (isset($_POST['word'])) {
	if (!empty($_POST['word'])) {
		/*echo "The word is set".'<br>';*/
	}
	else
	{
		echo "Enter word please".'<br>';
	}
}

print ($json_a[$word]);
 /*  outputting the meaning  */
?>

<!--  php form    -->

<form action='reading.php' method='POST'>
Name 
<input type='text' name='word'>
<br><br>
<input type='submit' value='Find Meaning'>

</form>
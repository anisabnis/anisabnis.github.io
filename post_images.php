<!DOCTYPE html>
<html>
<body>

<?php
for($i = 0; $i < 10; $i++)
{
		 $random = rand(1,100);
		 $file = fopen("./data/".$random.".txt" , "a");

		 fwrite($file, $_POST['city1'.$i]);
		 $ret = fwrite($file, " ");

		 fwrite($file, $_POST['city2'.$i]);
		 fwrite($file, " ");

		 fwrite($file, $_POST['city3'.$i]);
		 fwrite($file, " ");

		 fwrite($file, $_POST['city4'.$i]);
		 fwrite($file, " ");

		 if ($_POST[$i] == 'Yes') {
		     fwrite($file, "y");
		 } else if ($_POST[$i] == 'No') {
		     fwrite($file, "n");
		 }		 
		 fwrite($file, "\n");
		 fclose($file);

}
?>

<meta http-equiv="refresh" content="0;url=https://people.cs.umass.edu/~asabnis/quest.php" />

</body>
</html>

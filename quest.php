<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>

</head>
<body>
<center><h3>Answer "yes" or "no" to the following question. Once you answer the question, you will be prompted with a new question. The more questions you answer, the better results we get :) So please answer as many as you can ! Thank you for volunteering ! </h3></center>

<?php

   // Find which query to ask
   
   $city5 = array();
   $state5 = array();
   $city6 = array();
   $state6 = array();
   $city7 = array();
   $state7 = array();
   $city8 = array();
   $state8 = array();
   
   $f_content = file("./number_queries.txt");
   $random = intval($f_content[0]);

   $file = fopen("./number_queries.txt", "w");
   fwrite($file, $random + 10);
   
   $f_content1 = file("./queries.txt");
   
   for ($i = 1; $i <= 10; $i++)
		      {
		      $random = $random + 1;
		      $line_num = $random % 1000;		       

		      $line = $f_content1[$line_num]; 
		      $vals = split(" ", $line);

		      array_push($city5, $vals[0]);
		      array_push($state5, $vals[1]);

		      array_push($city6, $vals[2]);
		      array_push($state6, $vals[3]);

		      array_push($city7, $vals[4]);
		      array_push($state7, $vals[5]);

		      array_push($city8, $vals[6]);
		      $s = $vals[7];
		      $s = str_replace(array("\r", "\n"), '', $state8);
		      array_push($state8, $s);
		      }

?>

<form action="post_quest.php" method="post">

  <br>Distance(<i>city1</i>, <i>city2</i>) denotes the distance between the two cities. <br> <br><br>

  <?php
     $array = array(0, 1, 2, 3, 4, 5 ,6 ,7, 8, 9);
  ?>

  <?php foreach ($array as $i) : ?>
  Q.  Is Distance(<i><?php echo $city5[$i]?>, <?php echo $city6[$i]?></i>) &lt Distance(<i><?php echo $city7[$i]?>, <?php echo $city8[$i]?></i>) ? <br> <br>
  <input type="radio" name=<?php echo $i ?> value="Yes"> Yes
  <input type="radio" name=<?php echo $i ?> value="No"> No <br> <br>

  <input type="hidden" name=<?php echo "city1".$i?> value=<?php echo $city5[$i]?>>
  <input type="hidden" name=<?php echo "city2".$i?> value=<?php echo $city6[$i]?>>
  <input type="hidden" name=<?php echo "city3".$i?> value=<?php echo $city7[$i]?>>
  <input type="hidden" name=<?php echo "city4".$i?> value=<?php echo $city8[$i]?>>

  <?php endforeach ?>			  


 <input type="submit" name="action" value="Submit" style="height:30px; width:100px"> <br>

</form> 
  <!-- Customise the Thankyou Message People See when they submit the form: -->
  <div style="display:none;" id="thankyou_message">
    <h2><em>Thanks</em> for contacting us!
      We will get back to you soon!</h2>
  </div>

 <script data-cfasync="false" type="text/javascript"
  src="https://cdn.rawgit.com/dwyl/html-form-send-email-via-google-script-without-server/master/form-submission-handler.js"></script>
  <!-- <script data-cfasync="false" type="text/javascript"
  src="/form-submission-handler.js"></script> -->
<!-- END -->
</body>
</html>


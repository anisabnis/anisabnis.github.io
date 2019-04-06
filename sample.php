
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
<center><h2>Answer "yes" or "no" to the following question. Once you answer the question, you will be prompted with a new question. The more questions you answer, the better results we get :) So please answer as many as you can ! Thank you for volunteering ! </h2></center>

<?php
   // Read these values from the cities database or a txt file

   $f_content = file("./number_queries.txt");
   $random = intval($f_content[0]);

   $random = $random + 1;

   $file = fopen("./number_queries.txt", "w");
   fwrite($file, $random);

   $f_content1 = file("./queries.txt");
   $line_num = $random % 1000;
   $line = $f_content1[$line_num];

   $vals = split(" ", $line);

   $city5 = $vals[0];
   $state5 = $vals[1];
   $city6 = $vals[2];
   $state6 = $vals[3];
   $city7 = $vals[4];
   $state7 = $vals[5];
   $city8 = $vals[6];
   $state8 = $vals[7];
   $state8 = str_replace(array("\r", "\n"), '', $state8);

?>

<form action="post.php" method="post">

 <pre>
  <br>Distance(<i>city1</i>, <i>city2</i>) denotes the distance between the two cities. <br> <br><br>
  <b>Q.  Is Distance(<i><?php echo $city5?>, <?php echo $city6?></i>) &lt Distance(<i><?php echo $city7?>, <?php echo $city8?></i>) ? </b> 
 <pre>

 <input type="submit" name="action" value="Yes"> <br>
 <input type="submit" name="action" value="No">

 <br>
 <i>Hint :</i> <br>
 <i><?php echo $city5?></i> is in <?php echo $state5?>, USA <br>
 <i><?php echo $city6?></i> is in <?php echo $state6?>, USA<br>
 <i><?php echo $city7?></i> is in <?php echo $state7?>, USA<br>
 <i><?php echo $city8?></i> is in <?php echo $state8?>, USA<br><br>
 
 <input type="hidden" name="city1" value=<?php echo $city5?>>
 <input type="hidden" name="city2" value=<?php echo $city6?>>
 <input type="hidden" name="city3" value=<?php echo $city7?>>
 <input type="hidden" name="city4" value=<?php echo $city8?>>



    					    
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


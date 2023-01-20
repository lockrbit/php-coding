  <?php

  $name = $_POST['name'];
  $affiliation = $_POST['syozoku'];
  $opinions = $_POST['opinions'];

  print "氏名：".$name."<br>";
  print "趣味：";

  	if(isset($_POST['hobby'])){
  		for($i = 0; $i < count($_POST['hobby']); $i++){
  			print $_POST['hobby'][$i]."、";
  		}
      print "<br>";
  	}else{
      print "<br>";
    }
    return ;

  print "所属：".$affiliation."<br>";
  print "ご意見：".$opinions."<br>";

  ?>

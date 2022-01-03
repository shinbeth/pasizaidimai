        <?php 
        

  $monthYear = "2021-12"; //get the month
  $fDate =  $monthYear."-01"; //get the starting month
  $sDate = 1; //statically start day
  $eDate = date("t", strtotime($fDate)); //get the last day of the month
   $headings = array('Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday');
  ?>
 <table border="1">
   <tr>
   <?php
     for($x=0;$x<7;$x++){
        echo"<td>$headings[$x]</td>";
     }
    ?>
  </tr>
    <?php
    $z = 0;
    for($y=$sDate;$y<=$eDate;$y++){

        if($y < 10){
          //proper day initiator format
          $day = "0".$y;
          $date = $monthYear."-".$day; //build the date 
          $test = date("w", strtotime($date));
        } else {
          $day = $y;
          $date = $monthYear."-".$day; //build the date 
          $test = date("w", strtotime($date));
        }


        if($z == 0){
          //this is the initiator to get what day should the calendar start
          echo"<tr>";
          for($w=0; $w<$test; $w++){
            echo"<td></td>";
          }
          echo"<td>$day</td>";
          $z++;
        } else {
          echo"<td>$day</td>";
        }

        if($test == 6){
          //closer and new closer
          echo"</tr><tr>";
        }

        if($y == $eDate){
          //month closer
          echo"</tr>";
        }
     }
    ?>
</table>


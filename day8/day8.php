 <!-- true false 
  and && or ||  not !  -->
  <?php 
  $is_hot = true;   #bahr grmi h tho
  $have_money = true;
  $buy = $is_hot && $have_money;
  echo "can i buy ice cream?\n";
  var_dump($buy);


  


  $is_hot=true;
  $have_money = false;
  $buy = $is_hot && $have_money;
  echo "can i buy ice cream? \n";
  var_dump($buy);



//   or operator 
$is_holiday = false;
$not_busy = true;

$can = $is_holiday || $not_busy;
echo "can i watch movie\n";
var_dump($can);



// not operator 
$is_sunny = true;
$caryy = !$is_sunny;
echo "should i carry umbrella?";
var_dump($caryy);
  
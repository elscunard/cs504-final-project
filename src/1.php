 <?php
$result = array();
for ($x=1; $x<=5; $x++){
  $rand = rand(1,10);
  if($rand % 2 == 0){
    $result[] = $rand;
  }
}
echo json_encode($result);
?>
<?php
  	# operator
  $numfile = fopen("count.txt","r");
  $read = fscanf($numfile,"%f");
  $value = $read[0];
  fclose($numfile);
  $value = increase($value);
  echo $value;


  function increase($v){
    $newV = $v+1;
    $numfile = fopen("count.txt","w");
    fwrite($numfile, $newV);
    fclose($numfile);
    return $newV;
  }
?>

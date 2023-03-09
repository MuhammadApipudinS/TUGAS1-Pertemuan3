<?php
  $nilai1    = -3;
  $nilai2    = 3+5;
  $nilai3    = 8-4.5;
  $nilai4    = 2*5;
  $nilai5    = 3+8/5-3;
  $nilai6    = 10 % 4;
   
  echo "hasil1    ="; var_dump($nilai1);echo "<br />"; // hasil1 =int(-3) 
  echo "hasil2    ="; var_dump($nilai2);echo "<br />"; // hasil2 =int(8) 
  echo "hasil3    ="; var_dump($nilai3);echo "<br />"; // hasil3 =float(3.5) 
  echo "hasil4    ="; var_dump($nilai4);echo "<br />"; // hasil4 =int(10) 
  echo "hasil5    ="; var_dump($nilai5);echo "<br />"; // hasil5 =float(1.6) 
  echo "hasil6    ="; var_dump($nilai6);echo "<br />"; // hasil6 =int(2)
  ?>
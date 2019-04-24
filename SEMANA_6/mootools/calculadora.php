<?php
 $n1 = $_GET['n1'];
 $n2 = $_GET['n2'];
 $op = $_GET['op'];
 switch($op)
 {
 case 'suma':
 $output = $n1 + $n2;
 echo $output;
 break;
 case 'resta':
 $output = $n1 - $n2;
 echo $output;
 break;
 case 'multiplicacion':
 $output = $n1 * $n2;
 echo $output;
 break;
 case 'division':
 $output = $n1 / $n2;
 echo $output;
 break;
 default:
 echo $output = "Por favor solamente enteros o decimales";
 }
?>
<?php
 $n1 = $_POST['n1'];
 $n2 = $_POST['n2'];
 $op = $_POST['op'];
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
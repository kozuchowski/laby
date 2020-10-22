<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <h2>Typy PHP</h2>
    <body>
        <?php
        $x= 134;
        $y= 67.67;
        $z= 1;
        $c=0;
        $true = true;
        $znak= "0";
        $napis="Typy w PHP";
        $tab= [1, 2, 3, 4];
        $tab2=[];
        $tab3= ["zielony" , "czerwony" , "niebieski"];
        $date = new \DateTime();
        
        $zmienna_logiczna = false;
        $zmienna_x = 0;
 
              echo '$x = '. $x . '<br>';
              echo '$y = '. $y . '<br>';
              echo '$z = '. $z . '<br>';
              echo '$c = '. $c . '<br>';
              echo '$true = '. $true . '<br>';
              echo '$znak = '. $znak . '<br>';
              echo '$napis = '. $napis . '<br>';
              echo '$date = '. $date->format('Y-m-d H:i') . '<br>';
         
   //zad 3a           
              
         for ($zmienna=0; $zmienna < count($tab); $zmienna++) 
         {
             echo '$tab[' . $zmienna . '] = ' .  $tab[$zmienna] . '<br>';
             
         }
         echo 'count($tab) = ' . count($tab)  . '<br>';
         
         for ($zmienna=0; $zmienna < count($tab3); $zmienna++) 
         {
             echo '$tab3[' . $zmienna . '] = ' .  $tab3[$zmienna] . '<br>';
         }
         echo 'count($tab3) = ' . count($tab3)  . '<br>';
 
   //zad 3b      
         
         echo 'is_bool($x), = ' . is_bool($x)  . '<br>';
       //  var_dump(is_bool($x)); sprawdzanie wartości, wartość się wyświetli nie tak jak wyżej
         echo 'is_int($x), = ' . is_int($x)  . '<br>';
         //itd
         
 //zad 3c
         var_dump($tab); 
         echo '<br>';
         var_dump($tab2);
         echo '<br>';
         var_dump($tab3);
         echo '<br>';
         //var dump wyświetli wartość, print_r nie

    //zad 4:
         
         if ($zmienna_logiczna == $zmienna_x) {
             echo 'takie samo <br>';
         }
         if ($zmienna_logiczna === $zmienna_x) {
             echo 'identyczne <br>';
         }
        // == porównują wartości
       //  === porównują typy
        ?>

    </body>
</html>

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
    <body>
        <?php
        $x= 134;
        $y= 67.67;
        $z= 1;
        $c=0;
        $znak= "0";
        $napis="Typy w PHP";
        $tab[1]= 1;
        $tab[2]= 2; 
        $tab[3]=3; 
        $tab[4]=4;
        $tab2[]="";
        $tab3[]= "zielony";
        $tab3[]= "czerwony";
        $tab3[]= "niebieski";
        $date_string= '2020-0-15';
 
         echo "<p> x= $x <br> y= $y <br> z= $z <br> c= $c</p>";
         
         for ($zmienna=0; $zmienna<=4; $zmienna++) 
         {
              echo "<p> tablica= $tab[$zmienna]= </p>";
         }
        ?>
    </body>
</html>

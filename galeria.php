<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title> Galeria zdjęć </title>
    </head>
    <h2 style="width: 250px; margin: 0 auto"> Galeria zdjęć </h2>
    <body style="background-color: blue">
        
        
        <?php
        function galeria($rows, $cols)
{               
            $obraz = 1;
               print '<table style= "width: 500px; margin: 0 auto">';
               
              for ($i = 0; $i <=$rows; $i++) {
                  print '<tr>';
                  
                  for ($j = 0; $j <=$cols; $j++) {
                      $nazwa = 'obraz' . $obraz++;
                    print '<td>';
                    print("<img src='obrazki/$nazwa.JPG' alt= '$nazwa' />");
                    print '<td>';
                      
                  }
                 print '</tr>';
              }
              print '</table>';
}

 galeria(2,3);
?>

    </body>
</html>

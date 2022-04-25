<html> 
     <head> 
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
  <h3>Chess Board using Nested For Loop</h3>
   <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">
    <!-- hier begint table, in HTML. cell 270px wide, border 1 px  -->
     
  <?php
            for($row=1;$row<=8;$row++)
            #for loop begint op nummer 1 en eindigt op nummer 8. Als row lager dan of gelijk is aan 8, voeg 1 toe.
	  {
          echo "<tr>";
          #tr = een rij cellen in table,
          for($col=1;$col<=8;$col++)
		  {
          $total=$row+$col;
          if($total%2==0)
          # $total loopt op met 1, als verschil $total tov 2 gelijk is aan 0,
		  {
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
          #geef dan output kleur wit in cel
          }
		  else
		  {
          echo "<td height=30px width=30px bgcolor=#000000></td>";
          #anders geef output kleur zwart in cel
          }
          }
          echo "</tr>";
          #hier stopt de rij
    }
    #hier stopt de outer for loop
          ?>
          
  </table>
  <!--- hier eindigt table(in html) -->
  </body>
  </html>
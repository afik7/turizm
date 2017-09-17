<?php
 include("head.inc");
 include ("script.inc");

 ?>
 </td>
  <td >

 <?php
 if(isset($c))
 {   $country=substr($c,3);
 $cont=substr($c,0,2);
   // include ("db_func.php");

   // $conn = db_connect();
    $sql="SELECT *
			FROM travel
			WHERE country_t = '$country'";
      $res = mysql_query($sql, $conn);


   echo"<table class=tab width=100%><tr aligh=center><td><h3>";
   switch($cont)
   {
   case "sa" :
   		echo"Северная Америка";
        break;
   case "ua" :
        echo"Южная Америка";
        break;
   case "as" :
        echo"Азия";
        break;
   case "ab" :
        echo"Австралия";
        break;
   case "eu" :
        echo"Европа";
        break;
   case "af" :
        echo"Африка";
        break;
   }
 ?>
 </h3></td><td align=right>
   <form action=index.php method=get>
    <input type=submit name=back value=Назад class="box" style="width:125px;cursor:hand;">
    </form>
    </td></tr>
    <?php
   echo"<tr ><th colspan=2  >".$country."</th></tr>";
   $n=mysql_num_rows($res);
   for($i=0;$i<$n;$i++)
   {     $result_aut=mysql_result($res,$i,"writer");
   echo"<tr><td colspan=2 align=center>Автор: &nbsp;".$result_aut;
    $sql_mail="SELECT mail
			FROM user
			WHERE name = '$result_aut'";
      $res_m = mysql_query($sql_mail, $conn);
   $result_mail=mysql_result($res_m,0,"mail");
   if(($result_mail!="")&&($result_mail))
   		echo"&nbsp;-&gt;Писать:&nbsp;<a href=mailto://".$result_mail.">".
        $result_mail."</a>";
   echo "</td></tr>";
   echo"<tr><td>";
    $result_im=mysql_result($res,$i,"picture");
   	if(($result_im!="")&&($result_im))
  		 echo"<img src='pictures\\".$result_im."'>";
   $result_txt=mysql_result($res,$i,"story_text");
   echo"</td><td style=padding-right:20px><p>".$result_txt."</p></td></tr>";

   $result_date=mysql_result($res,$i,"created");
   echo"<tr><td colspan=2>Дата написания:&nbsp;".$result_date."
   <hr color='#6666cc'></td></tr>";

   }
   echo"</table>";
 }
 else
  echo"<script>history.back();</script>";
 ?>
  </td></tr></table>
</body>
</html>
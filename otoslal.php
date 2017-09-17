<?php

include("head.inc");
 include ("script.inc");
?>
</td>
  <td align=center >

  <?php

  $feild=0;
  if(!isset($uname)||$uname=="")
  {
    echo
     "Введите Ваше имя!!!<br>";
    ++$feild;
    }
  if(!isset($country_w)||$country_w=="")
  {
    echo "Введите страну о которой будете писать!!!<br>";
     ++$feild;
  }

   if(!isset($mess)||$mess=="")
   {
    echo "Введите текст сообщения!!!<br>";
     ++$feild;
   }
    if($feild>0) //Проверка заполнения обязательных полей
    { echo $feild."&nbsp;&nbsp;обязательных поля незаполнены.<br>";
    ?>

    <?php
  }
  ///////////////////////////////////////////////////
  else //if we have what to write to DB
  { //Подключаемся к базе
   // include "db_func.php";
    //$conn = db_connect();

	$time = date("j-m-Y,H:i:s");

    if($mess) //Text exists
    {
    	echo "<br> Спасибо&nbsp; ".$uname."&nbsp;за вашу статью!!:)<br>";
     	$mess_text=addslashes($mess);
      	$sql_prov="select id_u from user
      			where name='$uname'";

      	$result_prov = mysql_query($sql_prov, $conn);
        $prov= mysql_fetch_row($result_prov);
        trim($country_u);
        trim($country_w) ;
        if($prov[0]==0)
        {
      		$sql = "insert into user
           		 	(name, mail, country_u)
         	 		values
            		('".$uname."', '".$mail."', '".$country_u."')";
             $result = mysql_query($sql, $conn);

            if (!$result)
     		{
  				print "There was a database error when executing <PRE>$sql</PRE>";
  				print mysql_error();
  				exit;
            }
        }

      	$sql_t= "insert into travel
            	(writer, continent, country_t,story_text,picture,
            	created,food,transport,house,fun)
          		values
            	('$uname', '$continent', '$country_w','$mess_text',\" \",
            	'$time','$food','$transp','$house','$fun')";
         $result_t = mysql_query($sql_t, $conn);

    	if(!$result_t)
    	{
    		print "There was a database error when executing 8888888<PRE>$sql_t</PRE>";
  			print mysql_error();
  			exit;
     	}
         else  echo"Вы добавили свою статью в базу<br>";
    }  //end Text if
    //Image procesing
    if ( ($pict) && ($pict != "none") )
    {
    	$type = basename($pict_type);
         include "langv_func.php";
         $count_transl=transliterate($country_w);
         $count_3=substr($count_transl,0,3);
         //$count_3=substr($country_w,0,3);

         $sql_m="select max(id_t) from travel" ;
         $result = mysql_query($sql_m, $conn);
         $id_t=mysql_fetch_row($result);
         $id=$id_t[0];
         //echo $id."=id";
    	switch ($type)
     	{
   			 case "jpeg":
    	     case "pjpeg":

    				$filename = "pictures\/".$continent."-".$count_3."-".$id.".jpg";
                   	copy ($pict, $filename);
                    $sql = "update travel
                               set picture = '$filename'
                           where id_t = $id";
                   	$result = mysql_query($sql, $conn);
                    if(!$result)
        	        {
	                    print "There was a database error when executing <PRE>$sql</PRE>";
	                    print mysql_error();
	                    exit;
	                }
                    echo"&nbsp;Ваша картинка успешно отправлена на сервер<br> ";
                    break;
             case "gif":
             		$filename = "pictures\/".$continent."-".$count_3."-".$id.".gif";
                   	copy ($pict, $filename);
                    $sql = "update travel
                               set picture = '$filename'
                           where id_t = $id";
                   	$result = mysql_query($sql, $conn);
                    echo"&nbsp;Ваша картинка: успешно отправлена на сервер<br> ";
                    break;

    		default:
                    print "Неверный формат изображения: $picture_type";
 		 }//switch end

    } //end image procesing
    echo "<br>Вы нам написали". $time."<br>";
}//end write to DB
  ?>  <form action=gbook.php method=get>
    <input type=submit name=back value=Назад class="box" style="width:125px;cursor:hand;">
    </form>
  </td></tr>

  </table>

</body>
</html>
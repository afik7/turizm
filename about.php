<?php
 include("head.inc");
 include ("script.inc");

 ?>
 </td>
  <td >
  <table width=100% class=tab>
    <tr><td ><h3>&quot;�������&quot; - ������������� �����</h3></td>
    <td><h5>�� ���������:</h5></td></tr>
    <tr><td width=70% style=" padding-right: 20px; border-right: 1px double #6666cc;
    border-bottom: 1px double #6666cc;    ">
    <p>�� ����� ������� ���� � ������������� �������.
    ���� ������� ��������� �� ������ �� �����������, ����� ����������.
    ���� ���� ������ ��� ����, ����� �� ������������ � ��������
    ����� ����� �������� ����������������. ����� �� �������� ����������
    �� &quot;������ ���&quot;, ������� ������ �����������,
     �������� ������ ����������� ������.</p><p>&quot;�������&quot;
     ���������� ���� ������� ��������� � ����� ���� ��������.</p></td>
     <td valign=top>������� <br>�. ������� - 61124<br>
     �������� �������� �. 123<br> �. 7333744, 71265768<br>
     ����� ������ 9-00 �� 18-00 <br>
     (��������� ����� �����.)<br>
     WEB-�����:<br><a href=http://arianda.com.ua>http://arianda.com.ua</a>
     </td></tr>
    <tr><td colspan=2 align=center valign=top><h5>����������:</h5></td></tr>
  </table>
  <table border=0 class=t><tr>
  <td class=graph colspan=4>������������ �����</td></tr>
  <?php
  $color="red";
 // include "db_func.php";
  //  $conn = db_connect();
     $sql="SELECT country_t, avg( food )
			FROM travel
			GROUP BY country_t
			ORDER BY food ";
      $res = mysql_query($sql, $conn);
      $n=mysql_num_rows($res);
   for($i=0;$i<$n;$i++)
   {     $result_country=mysql_result($res,$i,"country_t");
          $result_f=mysql_result($res,$i,"avg( food )");

  		echo"<tr ><td class=graph>".$result_country."</td>";
        echo"<td class=t2 bgcolor=red width=10 ></td>";
        if($result_f>1)
    		echo"<td class=t2 width=10 bgcolor=".$color." ></td>";
        else
            echo"<td class=t2 width=10 bgcolor=white ></td>";
        if($result_f>2)
    		echo"<td class=t2 width=10 bgcolor=".$color." ></td>";
        else
            echo"<td class=t2 width=10 bgcolor=white ></td>";

    echo"</tr>";
    }
     $t=(1+$n)*14.15;

     ?>
 </table>

   <table border=0 class=t style="position: relative;left:150;top:
   <?php echo "-".$t;?>">
   <tr><td colspan=4 class=graph>���������</td></tr>
 <?php
  $color="green";
 // include "db_func.php";
  //  $conn = db_connect();
     $sql="SELECT country_t, avg( transport )
			FROM travel
			GROUP BY country_t
			ORDER BY transport ";
      $res = mysql_query($sql, $conn);
      $n=mysql_num_rows($res);
   for($i=0;$i<$n;$i++)
   {     $result_country=mysql_result($res,$i,"country_t");
          $result_t=mysql_result($res,$i,"avg( transport )");

  		echo"<tr ><td class=graph >".$result_country."</td>";
        echo"<td bgcolor=green width=10 class=t2></td>";
        if($result_t>1)
    		echo"<td class=t2 bgcolor=".$color." width=10></td>";
        else
            echo"<td class=t2 bgcolor=white width=10></td>";
        if($result_t>2)
    		echo"<td class=t2 bgcolor=".$color." width=10></td>";
        else
            echo"<td class=t2 bgcolor=white width=10></td>";

    echo"</tr>";
    }

    $t=2*(1+$n)*14.15;

     ?>
  </table>
   <table border=0 class=t style="position: relative;left:300;top:
    <?php echo "-".$t;?>">
   <tr><td class=graph colspan=4>�����</td></tr>
  <?php
  $color="yellow";
 // include "db_func.php";
  //  $conn = db_connect();
     $sql="SELECT country_t, avg( house )
			FROM travel
			GROUP BY country_t
			ORDER BY house ";
      $res = mysql_query($sql, $conn);
      $n=mysql_num_rows($res);
   for($i=0;$i<$n;$i++)
   {     $result_country=mysql_result($res,$i,"country_t");
          $result_h=mysql_result($res,$i,"avg( house )");

  		echo"<tr ><td class=graph>".$result_country."</td>";
        echo"<td  class=t2  bgcolor=yellow width=10></td>";
        if($result_h>1)
    		echo"<td  class=t2  bgcolor=".$color." width=10></td>";
        else
            echo"<td  class=t2  bgcolor=white width=10></td>";
        if($result_h>2)
    		echo"<td  class=t2  bgcolor=".$color." width=10></td>";
        else
            echo"<td  class=t2  bgcolor=white width=10></td>";

    echo"</tr>";
    }
    $t=3*(1+$n)*14.15;

     ?>
  </table>
   <table border=0 class=t  style="position: relative;left:445;top:
   <?php echo "-".$t;?>">
   <tr ><td colspan=4 class=graph>�����������</td></tr>
 <?php
  $color="blue";
 // include "db_func.php";
  //  $conn = db_connect();
     $sql="SELECT country_t, avg( fun )
			FROM travel
			GROUP BY country_t
			ORDER BY fun ";
      $res = mysql_query($sql, $conn);
      $n=mysql_num_rows($res);
   for($i=0;$i<$n;$i++)
   {     $result_country=mysql_result($res,$i,"country_t");
          $result_u=mysql_result($res,$i,"avg( fun )");

  		echo"<tr ><td class=graph>".$result_country."</td>";
        echo"<td  class=t2  bgcolor=blue width=10></td>";
        if($result_u>1)
    		echo"<td  class=t2  bgcolor=".$color." width=10></td>";
        else
            echo"<td  class=t2  bgcolor=white width=10></td>";
        if($result_u>2)
    		echo"<td  class=t2  bgcolor=".$color." width=10></td>";
        else
            echo"<td  class=t2  bgcolor=white width=10></td>";

    echo"</tr>";
    }

     ?>
  </table>
 </td></tr></table>
</body>
</html>
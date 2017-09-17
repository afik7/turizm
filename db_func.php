
<?php

  function db_connect()
{
   $result = @mysql_pconnect("localhost", "root","");
   if (!$result)
   {
   echo"root Cant conect ";
      return false;
      }
   if (!@mysql_select_db("turizm"))
      return false;
mysql_set_charset ('cp1251');
   return $result;
}
	function res_country($continent,$c)
    {
      $sql="SELECT country_t
			FROM travel
			WHERE continent = '$continent'
			GROUP BY country_t ";
      $res = mysql_query($sql, $c);
      return $res;
    }

?>
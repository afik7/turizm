	<script language="JavaScript1.2" src="coolmenus.js">

</script>
<script >

//Cоздание обекта меню
oMenu=new menuObj('oMenu') ;

//Установка переменніх для меню


oMenu.clMain='padding:5px; font-family:verdana; font-size:12px; font-weight:bold' //стиль главного меню
oMenu.clSub='padding:5px; font-family:verdana; font-size:10px' //стиль субменю

oMenu.clAMain='text-decoration:none; color:#ffccff' //стиль главных ссылок
oMenu.clASub='text-decoration:none; color:#ffccff' //стиль субссылок




//Background bar свойства
oMenu.backgroundbar=1 //0 , если без backgroundbar
oMenu.backgroundbarfromleft=0 //левое положение backgroundbar в pixel или %
oMenu.backgroundbarfromtop=200 //верхнее положение backgroundbar в pixel или %
oMenu.backgroundbarsize="92%" //размер bar в pixel или %
oMenu.backgroundbarcolor='#6666cc' //backgroundcolor для bar

oMenu.mainheight=25 //Высота элемента главного меню в pixel или %
oMenu.mainwidth=140 //Ширина элемента главного меню в pixel или %

//субменю
oMenu.subwidth=120 // ширина submenus
oMenu.subheight=20 //высота элемента субменю в pixel или %


oMenu.makeStyle()

oMenu.subplacement=oMenu.mainwidth //относительное расположение меню

oMenu.mainbgcoloroff='#6666cc' //backgroundcolor элементов главного меню
oMenu.mainbgcoloron='#9966cc' //backgroundcolor на mouseover элементов главного меню
oMenu.subbgcoloroff='#6666cc' // backgroundcolor элементов субменю
oMenu.subbgcoloron='#9966cc' //backgroundcolor на mouseover элементов субменю

oMenu.stayoncolor=0 //Сохранять цвет меню как при mouseover после щелча на меню?

oMenu.menuspeed=5 //Скорость появления меню in px
oMenu.menusubspeed=7 //Скорость появления субменю in px

oMenu.menurows=0 //Установить 0, если нужны ряды или 1- для колонок

oMenu.menueventon="mouse"
oMenu.menueventoff="mouse"

//Элементы меню



//Друг за другом

oMenu.menuplacement=0

//Сколько пикселей между меню (для Друг за другом всегда=0)
oMenu.pxbetween=0 //в pixel или %

//расположение слева
oMenu.fromleft=0 //в pixel или %

//расположение сверху
oMenu.fromtop=144 //в pixel или %

/********************************************************************************
Строю свое меню
********************************************************************************/

//MAIN 0

//Главное меню єлемент 0:
// makeMain(MAIN_NUM,'TEXT','LINK','FRAME_TARGET') (устанавливаю link в 0 если есть субменю у єтого єлемента)
<?php
if(isset($menu))
{  if($menu=="a") //мы на странице about
    {echo "oMenu.makeMain(0,'Домой','index.php')\n"; //!!DO NOT FORGET \n without it javascript won`t work
    echo"oMenu.makeMain(1,'Гостевая','gbook.php?menu=g')\n";
  }
  else if($menu=="g")//мы настранице gbook
  {echo "oMenu.makeMain(0,'Домой','index.php')\n";
    echo"oMenu.makeMain(1,'О нас','about.php?menu=a')\n";
  }
}
else
{
echo "oMenu.makeMain(0,'О нас','about.php?menu=a')\n";
 echo"oMenu.makeMain(1,'Гостевая','gbook.php?menu=g')\n";
}
?>

 //MAIN 8
 //Выбор стран из базы
 <?php
 include ("db_func.php");
  $conn = db_connect();

        //$res=mysql_result($result,);
       // $country= mysql_fetch_row($result);

 ?>
//MAIN 2
 oMenu.makeMain(2,'::Континенты ::','index.php')

//MAIN 3
oMenu.makeMain(3,'Австралия','veiw.php')//0
<?php
		$co="ab";
       	$result =res_country($co,$conn);
		$n=mysql_num_rows($result);

   for($i=0;$i<$n;$i++)
    {

     	$res=mysql_result($result,$i,"country_t");
		echo "oMenu.makeSub(3,".$i.",'".$res."','veiw.php?c=".$co."_".$res."',".$n.")\n";

    }
	//oMenu.makeSub(3,1,'Новая Зеландaия','ab_2.php',2)
    ?>
//MAIN 4
oMenu.makeMain(4,'Азия',0)
    <?php
    	$co="as";
       	$result =res_country($co,$conn);
		$n=mysql_num_rows($result);

   for($i=0;$i<$n;$i++)
    {

     	$res=mysql_result($result,$i,"country_t");
		echo "oMenu.makeSub(4,".$i.",'".$res."','veiw.php?c=".$co."_".$res."',".$n.")\n";
       // oMenu.makeSub(4,0,'Индия','ai_1.php',2)
   // oMenu.makeSub(4,1,'Монголия','ai_2.php',2)
    }
   ?>
//MAIN 5
oMenu.makeMain(5,'Америка Северная',0)
<?php
    	$co="sa";
       	$result =res_country($co,$conn);
		$n=mysql_num_rows($result);

   for($i=0;$i<$n;$i++)
    {

     	$res=mysql_result($result,$i,"country_t");
		echo "oMenu.makeSub(5,".$i.",'".$res."','veiw.php?c=".$co."_".$res."',".$n.")\n";
       // oMenu.makeSub(5,0,'США','as_1.php',2)
//	oMenu.makeSub(5,1,'Канада','as_2.php',2)
    }
   ?>


 //MAIN 6
oMenu.makeMain(6,'Америка Южная',0)
<?php
    	$co="ua";
       	$result =res_country($co,$conn);
		$n=mysql_num_rows($result);

   for($i=0;$i<$n;$i++)
    {

     	$res=mysql_result($result,$i,"country_t");
		echo "oMenu.makeSub(6,".$i.",'".$res."','veiw.php?c=".$co."_".$res."',".$n.")\n";
       //oMenu.makeSub(6,0,'Бразилия','au_1.php',2)
//	oMenu.makeSub(6,1,'Чили','au_2.php',2)
    }
?>


 //MAIN 7
oMenu.makeMain(7,'Африка',0)
     <?php
    	$co="af";
       	$result =res_country($co,$conn);
		$n=mysql_num_rows($result);

   for($i=0;$i<$n;$i++)
    {

     	$res=mysql_result($result,$i,"country_t");
		echo "oMenu.makeSub(7,".$i.",'".$res."','veiw.php?c=".$co."_".$res."',".$n.")\n";
       //oMenu.makeSub(7,0,'Египет','aw_1.php',3)
	//oMenu.makeSub(7,1,'Алжир','aw_2.php',3)
//	 	oMenu.makeSub(7,2,'Конго','aw_3.php',3)
    }
?>

 //MAIN 8
oMenu.makeMain(8,'Европа',0)
     <?php
    	$co="eu";
       	$result =res_country($co,$conn);
		$n=mysql_num_rows($result);

   for($i=0;$i<$n;$i++)
    {

     	$res=mysql_result($result,$i,"country_t");
		echo "oMenu.makeSub(8,".$i.",'".$res."','veiw.php?c=".$co."_".$res."',".$n.")\n";
       //oMenu.makeSub(8,0,'Украина','e_1.php',3)
	//oMenu.makeSub(8,1,'Венгрия','e_2.php',3)
	//	oMenu.makeSub(8,2,'Италия','e_3.php',3)
    }
?>


	//Субэлементы:
	// makeSub(MAIN_NUM,SUB_NUM,'TEXT','LINK',TOTAL,'FRAME_TARGET') (устанавливаем link в 0 если хотим субменю для этого элемента)



/********************************************************************************
Конец конструирования меню
********************************************************************************/


//Когда все элементы меню созданы инициализируем меню
oMenu.construct()
</script>
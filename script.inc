	<script language="JavaScript1.2" src="coolmenus.js">

</script>
<script >

//C������� ������ ����
oMenu=new menuObj('oMenu') ;

//��������� ���������� ��� ����


oMenu.clMain='padding:5px; font-family:verdana; font-size:12px; font-weight:bold' //����� �������� ����
oMenu.clSub='padding:5px; font-family:verdana; font-size:10px' //����� �������

oMenu.clAMain='text-decoration:none; color:#ffccff' //����� ������� ������
oMenu.clASub='text-decoration:none; color:#ffccff' //����� ���������




//Background bar ��������
oMenu.backgroundbar=1 //0 , ���� ��� backgroundbar
oMenu.backgroundbarfromleft=0 //����� ��������� backgroundbar � pixel ��� %
oMenu.backgroundbarfromtop=200 //������� ��������� backgroundbar � pixel ��� %
oMenu.backgroundbarsize="92%" //������ bar � pixel ��� %
oMenu.backgroundbarcolor='#6666cc' //backgroundcolor ��� bar

oMenu.mainheight=25 //������ �������� �������� ���� � pixel ��� %
oMenu.mainwidth=140 //������ �������� �������� ���� � pixel ��� %

//�������
oMenu.subwidth=120 // ������ submenus
oMenu.subheight=20 //������ �������� ������� � pixel ��� %


oMenu.makeStyle()

oMenu.subplacement=oMenu.mainwidth //������������� ������������ ����

oMenu.mainbgcoloroff='#6666cc' //backgroundcolor ��������� �������� ����
oMenu.mainbgcoloron='#9966cc' //backgroundcolor �� mouseover ��������� �������� ����
oMenu.subbgcoloroff='#6666cc' // backgroundcolor ��������� �������
oMenu.subbgcoloron='#9966cc' //backgroundcolor �� mouseover ��������� �������

oMenu.stayoncolor=0 //��������� ���� ���� ��� ��� mouseover ����� ����� �� ����?

oMenu.menuspeed=5 //�������� ��������� ���� in px
oMenu.menusubspeed=7 //�������� ��������� ������� in px

oMenu.menurows=0 //���������� 0, ���� ����� ���� ��� 1- ��� �������

oMenu.menueventon="mouse"
oMenu.menueventoff="mouse"

//�������� ����



//���� �� ������

oMenu.menuplacement=0

//������� �������� ����� ���� (��� ���� �� ������ ������=0)
oMenu.pxbetween=0 //� pixel ��� %

//������������ �����
oMenu.fromleft=0 //� pixel ��� %

//������������ ������
oMenu.fromtop=144 //� pixel ��� %

/********************************************************************************
����� ���� ����
********************************************************************************/

//MAIN 0

//������� ���� ������� 0:
// makeMain(MAIN_NUM,'TEXT','LINK','FRAME_TARGET') (������������ link � 0 ���� ���� ������� � ����� ��������)
<?php
if(isset($menu))
{  if($menu=="a") //�� �� �������� about
    {echo "oMenu.makeMain(0,'�����','index.php')\n"; //!!DO NOT FORGET \n without it javascript won`t work
    echo"oMenu.makeMain(1,'��������','gbook.php?menu=g')\n";
  }
  else if($menu=="g")//�� ���������� gbook
  {echo "oMenu.makeMain(0,'�����','index.php')\n";
    echo"oMenu.makeMain(1,'� ���','about.php?menu=a')\n";
  }
}
else
{
echo "oMenu.makeMain(0,'� ���','about.php?menu=a')\n";
 echo"oMenu.makeMain(1,'��������','gbook.php?menu=g')\n";
}
?>

 //MAIN 8
 //����� ����� �� ����
 <?php
 include ("db_func.php");
  $conn = db_connect();

        //$res=mysql_result($result,);
       // $country= mysql_fetch_row($result);

 ?>
//MAIN 2
 oMenu.makeMain(2,'::���������� ::','index.php')

//MAIN 3
oMenu.makeMain(3,'���������','veiw.php')//0
<?php
		$co="ab";
       	$result =res_country($co,$conn);
		$n=mysql_num_rows($result);

   for($i=0;$i<$n;$i++)
    {

     	$res=mysql_result($result,$i,"country_t");
		echo "oMenu.makeSub(3,".$i.",'".$res."','veiw.php?c=".$co."_".$res."',".$n.")\n";

    }
	//oMenu.makeSub(3,1,'����� ������a��','ab_2.php',2)
    ?>
//MAIN 4
oMenu.makeMain(4,'����',0)
    <?php
    	$co="as";
       	$result =res_country($co,$conn);
		$n=mysql_num_rows($result);

   for($i=0;$i<$n;$i++)
    {

     	$res=mysql_result($result,$i,"country_t");
		echo "oMenu.makeSub(4,".$i.",'".$res."','veiw.php?c=".$co."_".$res."',".$n.")\n";
       // oMenu.makeSub(4,0,'�����','ai_1.php',2)
   // oMenu.makeSub(4,1,'��������','ai_2.php',2)
    }
   ?>
//MAIN 5
oMenu.makeMain(5,'������� ��������',0)
<?php
    	$co="sa";
       	$result =res_country($co,$conn);
		$n=mysql_num_rows($result);

   for($i=0;$i<$n;$i++)
    {

     	$res=mysql_result($result,$i,"country_t");
		echo "oMenu.makeSub(5,".$i.",'".$res."','veiw.php?c=".$co."_".$res."',".$n.")\n";
       // oMenu.makeSub(5,0,'���','as_1.php',2)
//	oMenu.makeSub(5,1,'������','as_2.php',2)
    }
   ?>


 //MAIN 6
oMenu.makeMain(6,'������� �����',0)
<?php
    	$co="ua";
       	$result =res_country($co,$conn);
		$n=mysql_num_rows($result);

   for($i=0;$i<$n;$i++)
    {

     	$res=mysql_result($result,$i,"country_t");
		echo "oMenu.makeSub(6,".$i.",'".$res."','veiw.php?c=".$co."_".$res."',".$n.")\n";
       //oMenu.makeSub(6,0,'��������','au_1.php',2)
//	oMenu.makeSub(6,1,'����','au_2.php',2)
    }
?>


 //MAIN 7
oMenu.makeMain(7,'������',0)
     <?php
    	$co="af";
       	$result =res_country($co,$conn);
		$n=mysql_num_rows($result);

   for($i=0;$i<$n;$i++)
    {

     	$res=mysql_result($result,$i,"country_t");
		echo "oMenu.makeSub(7,".$i.",'".$res."','veiw.php?c=".$co."_".$res."',".$n.")\n";
       //oMenu.makeSub(7,0,'������','aw_1.php',3)
	//oMenu.makeSub(7,1,'�����','aw_2.php',3)
//	 	oMenu.makeSub(7,2,'�����','aw_3.php',3)
    }
?>

 //MAIN 8
oMenu.makeMain(8,'������',0)
     <?php
    	$co="eu";
       	$result =res_country($co,$conn);
		$n=mysql_num_rows($result);

   for($i=0;$i<$n;$i++)
    {

     	$res=mysql_result($result,$i,"country_t");
		echo "oMenu.makeSub(8,".$i.",'".$res."','veiw.php?c=".$co."_".$res."',".$n.")\n";
       //oMenu.makeSub(8,0,'�������','e_1.php',3)
	//oMenu.makeSub(8,1,'�������','e_2.php',3)
	//	oMenu.makeSub(8,2,'������','e_3.php',3)
    }
?>


	//�����������:
	// makeSub(MAIN_NUM,SUB_NUM,'TEXT','LINK',TOTAL,'FRAME_TARGET') (������������� link � 0 ���� ����� ������� ��� ����� ��������)



/********************************************************************************
����� ��������������� ����
********************************************************************************/


//����� ��� �������� ���� ������� �������������� ����
oMenu.construct()
</script>
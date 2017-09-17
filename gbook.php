
 <?php
 include("head.inc");
 include ("script.inc");

 ?>
 </td>
  <td >   <form action=otoslal.php method=post enctype=multipart/form-data>

        <INPUT TYPE=HIDDEN NAME="MAX_FILE_SIZE" VALUE="50240">
 <table align='center'>
 <tr align=center><th colspan=2 >Раскажите о стране где вы побывали</th></tr>
 <tr align=left><td >*Ваше имя:</td><td>
 	<input style="width: 377px;" type=text name=uname value=""></td></tr>
 <tr align=left><td >Электронная почта:</td><td>
 	<input style="width: 377px;" type=text name=mail value=""></td></tr>
 <tr><td align=left>Страна проживания:</td><td>
 	<input style="width: 377px;" type=text name=country_u value=""></td></tr>
 <tr><td align=left>*Континет где вы <br>путешествовали:</td>
 <td><select name=continent value=" " class=box>
 		<option value="sa">Северная Америка</option>
 		<option value="ua" >Южная Америка</option>
        <option  value="ab">Австралия</option>
        <option  value="af" >Африка</option>
        <option   value="as">Азия</option>
        <option  value="eu" >Европа</option></select></td></tr>
 <tr><td align=left>*Страна о которой<br> будете писать :</td><td>
 		<input style="width: 377px;" type=text name=country_w value=""></td></tr>
 <tr><td align=left>*Текст сообщения:</td><td><textarea  style="width: 377px;" name=mess rows=5></textarea></td></tr>
 <tr align=left><td>Загрузить избражение до 100КБ:</td>
 <td ><input style="width: 377px;border:1px double #6666cc"  type=file name=pict value=""></td></tr>

<tr align=center><th colspan=2 >Несколько вопросов о стране:<br>*Оцените пожалуйста в 3-х бальной системе (1-самый худший)</th></tr>
<tr ><td align=left>&nbsp;
Национальная Кухня:<select name=food value=" " class=box><option >1</option><option >2</option><option >3</option></select>&nbsp;&nbsp;</td>
<td>
Транспорт:<select name=transp value=" " class=box><option >1</option><option >2</option><option >3</option></select>&nbsp;&nbsp;
Жилье:<select name=house value=" " class=box><option >1</option><option >2</option><option >3</option></select>&nbsp;&nbsp;
Развлечения:<select name=fun value=" " class=box><option >1</option><option >2</option><option >3</option></select>&nbsp;&nbsp;</td></tr>
 <tr align=center><td colspan=2><input class="box" style="width:125px;cursor:hand;" type="submit" value="Отправить" name="add" onmouseover="this.style.backgroundColor='#9966cc';" onmouseout="this.style.backgroundColor='#6666cc';">    * - поля обязательные для заполнения.</td></tr>
 </table> </form>
 </td></tr></table>
</body>
</html>

 <?php
 include("head.inc");
 include ("script.inc");

 ?>
 </td>
  <td >   <form action=otoslal.php method=post enctype=multipart/form-data>

        <INPUT TYPE=HIDDEN NAME="MAX_FILE_SIZE" VALUE="50240">
 <table align='center'>
 <tr align=center><th colspan=2 >��������� � ������ ��� �� ��������</th></tr>
 <tr align=left><td >*���� ���:</td><td>
 	<input style="width: 377px;" type=text name=uname value=""></td></tr>
 <tr align=left><td >����������� �����:</td><td>
 	<input style="width: 377px;" type=text name=mail value=""></td></tr>
 <tr><td align=left>������ ����������:</td><td>
 	<input style="width: 377px;" type=text name=country_u value=""></td></tr>
 <tr><td align=left>*�������� ��� �� <br>��������������:</td>
 <td><select name=continent value=" " class=box>
 		<option value="sa">�������� �������</option>
 		<option value="ua" >����� �������</option>
        <option  value="ab">���������</option>
        <option  value="af" >������</option>
        <option   value="as">����</option>
        <option  value="eu" >������</option></select></td></tr>
 <tr><td align=left>*������ � �������<br> ������ ������ :</td><td>
 		<input style="width: 377px;" type=text name=country_w value=""></td></tr>
 <tr><td align=left>*����� ���������:</td><td><textarea  style="width: 377px;" name=mess rows=5></textarea></td></tr>
 <tr align=left><td>��������� ���������� �� 100��:</td>
 <td ><input style="width: 377px;border:1px double #6666cc"  type=file name=pict value=""></td></tr>

<tr align=center><th colspan=2 >��������� �������� � ������:<br>*������� ���������� � 3-� ������� ������� (1-����� ������)</th></tr>
<tr ><td align=left>&nbsp;
������������ �����:<select name=food value=" " class=box><option >1</option><option >2</option><option >3</option></select>&nbsp;&nbsp;</td>
<td>
���������:<select name=transp value=" " class=box><option >1</option><option >2</option><option >3</option></select>&nbsp;&nbsp;
�����:<select name=house value=" " class=box><option >1</option><option >2</option><option >3</option></select>&nbsp;&nbsp;
�����������:<select name=fun value=" " class=box><option >1</option><option >2</option><option >3</option></select>&nbsp;&nbsp;</td></tr>
 <tr align=center><td colspan=2><input class="box" style="width:125px;cursor:hand;" type="submit" value="���������" name="add" onmouseover="this.style.backgroundColor='#9966cc';" onmouseout="this.style.backgroundColor='#6666cc';">����* - ���� ������������ ��� ����������.</td></tr>
 </table> </form>
 </td></tr></table>
</body>
</html>
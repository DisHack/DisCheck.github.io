<? // WR-forum v 1.0  //  20.11.04�.  //  Miha-ingener@yandex.ru

$fname="WR-����� �� ����� wr.zgr.ru";  // ��� ������ ������������ � ���� TITLE � ���������

// ����� ������������� �������� �����: ���� ����; ���� ���������� �������, ���� ����
// ��� ������ ����� - ��������������� � � �������������� ������� ��������� //

$bdcolor="#79BBEF";  $fcolor="#FFFFFF"; $bagcolor="#FFFFFF"; // �������������
//$bdcolor="#FF9A00"; $fcolor="#FFFFFF"; $bagcolor="#FFE1B0"; // ���������
//$bdcolor="#FFE51A"; $fcolor="#00253B"; $bagcolor="#FFF0A0"; // Ƹ����
//$bdcolor="#00E900"; $fcolor="#00253B"; $bagcolor="#D2FFE1"; // ������-�������
//$bdcolor="#007800"; $fcolor="#FFFFFF"; $bagcolor="#D2FFE1"; // ����� �������
//$bdcolor="#D2A500"; $fcolor="#FFFFFF"; $bagcolor="#FFD292"; // �������
//$bdcolor="#BCC0C0"; $fcolor="#FFFFFF"; $bagcolor="#E0E0E0"; // �����
//$bdcolor="#00253B"; $fcolor="#FFFFFF"; $bagcolor="#258FC0"; // �����-�����

$hrcolor="#224488";  // ��� HR - ���� �������������� �����

$s2="<img src='smile/biggrin.gif' border=0>";  // �������� ;-)
$s1="<img src='smile/smile.gif' border=0>";
$s3="<img src='smile/razz.gif' border=0>";
$s4="<img src='smile/cool.gif' border=0>";
$s5="<img src='smile/mad.gif' border=0>";
$s6="<img src='smile/redface.gif' border=0>";
$s7="<img src='smile/wink.gif' border=0>";
$s8="<img src='smile/rolleyes.gif' border=0>";
$s9="<img src='smile/confused.gif' border=0>";
$s10="<img src='smile/eek.gif' border=0>";
$s11="<img src='smile/cry.gif' border=0>";
$s12="<font color=#ff0000><B>";

// ���� ����� ������ �� �������

$data = date("d.m.Y");
print "<html>
<head>
<title>$fname</title>
<link rel=stylesheet type='text/css' href=style.css>
<SCRIPT language=JavaScript>
<!--
function x () {return;}
function FocusText() {
    document.REPLIER.mess.focus();
    document.REPLIER.mess.select();
    return true; }
function DoSmilie(addSmilie) {
    var revisedMessage;
    var currentMessage = document.REPLIER.mess.value;
    revisedMessage = currentMessage+addSmilie;
    document.REPLIER.mess.value=revisedMessage;
    document.REPLIER.mess.focus();
    return;
}
function DoPrompt(action) { var revisedMessage; var currentMessage = document.REPLIER.qmessage.value; }
//-->
</SCRIPT>
</head>
<body onLoad='return FocusText();' bgcolor=$bagcolor>
<center><TABLE style=\"FILTER: glow(color=$bdcolor, strength=2)\"><a href=index.php><h3>$fname</h3></a></table>
<table width=85% cellpadding=1 cellspacing=0 bgcolor=$bdcolor><tr><td>

<font color=$fcolor>������� <b>$data</b></font></td><td>
<b><div align=right><a href=index.php><font color=$fcolor>������� ������</font></a> :: <a href=admin.php><font color=$fcolor>�������</font></a> ::</div></b>
</td></tr><tr><td colspan=2 width=100%>
<table width=100% cellpadding=0 cellspacing=0 bgcolor=#FFFFFF><tr><td>
";
print "<table width=100% height=25>
  <TR><TD colspan=3><hr color=$hrcolor size=-1 width=98%></TD></TR>
    <tr><td width=65%><center>���� / �����</td>
    <td width=20%><center>�����</td>
    <td width=15%><center>����</td></tr>
  <TR><TD colspan=3><hr color=$hrcolor size=-1 width=98%></TD></TR>
</table>
";



if ($event=="")
{ print"<table bgcolor=#F4F4F4 border=1 bordercolor=#FFFFFF cellpadding=10 cellspacing=0 width=100% height=25>";

  $n = "0"; $g = "0";
          $fill="forum.dat";
          $test = file("$fill");
      $size = sizeof($test);
$num = $size;  
do { 
$data = explode("|", $test[$num]);   
if ($data[0] != "") {              

print"<tr><td width=65% height=25><a href=\"index.php?event=topic&id=$data[5]\">$data[2]</a></td>
    <td width=20% ><center><a href=mailto:$data[1]>$data[0]</a></td>
    <td width=15% ><center><font size=-1>$data[4]</font></td></tr>";
}

$num3 = $num+17;
if ($g == "17") 
{print "<tr><td colspan=2><hr size=1>";
$num4 = $num3/17;
$num4 = explode(".", $num4);
$n = "0";
do {
$nn = $n+1;
$n++;
 } while($n < $num4[0]);

 exit; } 

$g++;   
$num--; 
$n++;
} while ($n < "$size");
print "</table>
<BR></tr></td></table>
<center><b><font size=+1 color=$fcolor>�������� ����</font></b></center>
<table width=100% cellpadding=0 cellspacing=0 bgcolor=#FFFFFF><tr><td>
<BR><center><table><tr><td valign=top>
<B>���</B> � E-mail<BR>
<B>��������� ����</B><BR>
<B>���������</B>
</td><td>
<form action=index.php?event=addtopic method=post name=REPLIER>
<input type=text  value='' name=name size=16>
<input type=text  value='' name=mail size=21><br> 
<input type=text  value='' name=zag size=40><br> 
<textarea cols=40 rows=5 size=500 name=mess></textarea>
<center><input type=submit  value='��������'></form></td></tr></table>
";
}



if ($event =="topic")
{
if ($id == "") { print "error"; exit; }

$data1 = file("$id.dat");
$data1size = sizeof($data1);
$n = "0";
$m1= "0";

    do {
    $datatext = explode("|", $data1[$n]);
if ($n == "0") { $col = $id; $subject = "$datatext[3]"; } else { $col = $id; }
if ($datatext[3] != "") {

if ($m1 == "0") {
print"
</tr></td></table>
<center><font color=$fcolor><b>����: $datatext[2]</b></font></center>
<table width=100% bgcolor=#FFFFFF><tr><td>
<table bgcolor=#F4F4F4 border=1 bordercolor=#FFFFFF cellpadding=10 cellspacing=1 width=100% height=25>
"; $m1="1";}
print"<tr><td width=65% height=40>$datatext[3]</td>
      <td width=20%><center><a href=mailto:$datatext[1]>$datatext[0]</a></td>
      <td width=15%><center><font size=-1>$datatext[4]</font></td></tr>";
}
$n++; } while($n < $data1size);

print "</table>

<BR></tr></td></table>
<center><font color=$fcolor><b>��������</b></font></center>
<table width=100% cellpadding=0 cellspacing=0 bgcolor=#FFFFFF><tr><td>
<BR><center><table><tr><td valign=top>
<B>���</B> � E-mail<BR>
<B>���������</B>
<table width=90 height=70><tr><td valign=top>
<A href='javascript:%20x()' onclick=\"DoSmilie(' :-))');\">$s1</a>
<a href='javascript:%20x()' onclick=\"DoSmilie(' :-)');\">$s2</a>
<a href='javascript:%20x()' onclick=\"DoSmilie(' :-P');\">$s3</a>
<a href='javascript:%20x()' onclick=\"DoSmilie(' 8-)');\">$s4</a>
<a href='javascript:%20x()' onclick=\"DoSmilie(' :-(');\">$s5</a>
<A href='javascript:%20x()' onclick=\"DoSmilie(' :-O');\">$s6</a>
<A href='javascript:%20x()' onclick=\"DoSmilie(' ;-)');\">$s7</a>
<A href='javascript:%20x()' onclick=\"DoSmilie(':roll:');\">$s8</a>
<A href='javascript:%20x()' onclick=\"DoSmilie(':rf:');\">$s9</a>
<A href='javascript:%20x()' onclick=\"DoSmilie(' 8-(');\">$s10</a>
<A href='javascript:%20x()' onclick=\"DoSmilie(' `-(');\">$s11</a>
<A href='javascript:%20x()' onclick=\"DoSmilie(':REDBOLD: ');\"><font color=red><B>RB</b></font></a>
</tr></td></table>
</td><td>
<form action=index.php?event=addanswer method=post name=REPLIER>
<input type=hidden name=id value=$datatext[5]>
<input type=hidden name=zag value=\"$datatext[2]\">
<input type=text value='' name=name size=20>&nbsp;
<input type=text value='' name=mail size=26><br> 
<textarea cols=49 rows=5 size=500 name=mess></textarea>
<center><input type=submit  value='��������'></form></td></tr></table>
";
}


// ������� - ����� ��������
if (($event =="addtopic") or ($event =="addanswer")) 
{
if ($name == "") {print "<center><B>��������� <a href='javascript:history.back(1)'>�����</a> � ������� ���!</B></center>"; exit;}
if ($mess == "") {print "<center><B>��������� <a href='javascript:history.back(1)'>�����</a> � ������� �����!</B></center>"; exit;}
if ($datatext[2] =="")
{if ($zag == "") {print "<center><B>��������� <a href='javascript:history.back(1)'>�����</a> � ������� ���������!</B></center>"; exit;}}
else
{if ($zag == "") {$zag == "$datatext[2]"; exit;} } //���������-����
if (!eregi("^([0-9a-z]([-_.]?[0-9a-z])*@[0-9a-z]([-.]?[0-9a-z])*\\.[a-wyz][a-z](fo|g|l|m|mes|o|op|pa|ro|seum|t|u|v|z)?)$", $mail) and $mail != "") 
{print "<center><B>��������� <a href='javascript:history.back(1)'>�����</a> � ������� ���������� E-mail �����!</B></center>"; exit;}
$er = 1;

if ($event =="addtopic") { $id = date("dmGs"); }

$date=date("d.m.Y");
$text="$name|$mail|$zag|$mess|$date|$id";
$text=stripslashes($text);
$text=htmlspecialchars($text);
$text=str_replace("\r\n", "<br>", $text);
$text=str_replace(":-))",$s1,$text);
$text=str_replace(":-)",$s2,$text);
$text=str_replace(":-P",$s3,$text);
$text=str_replace("8-)",$s4,$text);
$text=str_replace(":-(",$s5,$text);
$text=str_replace(":-O",$s6,$text);
$text=str_replace(";-)",$s7,$text);
$text=str_replace(":roll:",$s8,$text);
$text=str_replace(":rf:",$s9,$text);
$text=str_replace("8-(",$s10,$text);
$text=str_replace("`-(",$s11,$text);
$text=str_replace(":REDBOLD:",$s12, $text);
$text1=$text;
$text=substr($text,0,900);
}


if ($event =="addtopic")  // ���������� ����
{
print "<script language='Javascript'><!--
function reload() {location = 'index.php'}; setTimeout('reload()', 2500);
//--></script>
<BR><BR><BR><center><table border=1 cellpadding=10 cellspacing=0 bordercolor=#224488 width=300><tr><td><center>
������� <B>$name</B>, �� ���������� ����! ����� ��������� ������ �� ������ ������������� ����������� �� ������� ��������.
���� ����� �� ����������, ������� <B><a href=index.php>�����</a></B>.</td></tr></table></center><BR><BR><BR>";

$fp=fopen("forum.dat","a");
fputs($fp,"\r\n $text");
fclose($fp);
$fp=fopen("$id.dat","a");
fputs($fp,"\r\n $text");
fclose($fp);
@chmod("$id.dat", 0644);
}


if ($event =="addanswer")  //����� � ����
{
print "<script language='Javascript'><!--
function reload() {location = 'index.php?event=topic&id=$id\'}; setTimeout('reload()', 2500);
//--></script>
<BR><BR><BR><center><table border=1 cellpadding=7 cellspacing=0 bordercolor=#224488 width=300><tr><td><center>
������� <B>$name</B>, ��� ����� ������� ��������. ����� ��������� ������ �� ������ ������������� ����������� � ������� ����.
���� ����� �� ����������, ��� �������� � ���� <BR><B>'$zag'</B><BR> ������� <B><a href=\"index.php?event=topic&id=$id\"> �����</a></B> </td></tr></table></center><BR><BR><BR>";

$fp=fopen("$id.dat","a");
fputs($fp,"\r\n $text");
fclose($fp);
@chmod("$fp", 0644);
}


print "</td></tr></table></td></tr></table>
<center><font size=-2>Copyrights (C) <a href='http://wr.zgr.ru'>WR</a></font>
</body></html>";
?>

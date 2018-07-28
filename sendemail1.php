<html>
<head>
<script type="text/javascript" src="js/prototype.js"></script>
<script type="text/javascript" src="js/scriptaculous.js?load=effects,builder"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
<title>Corn Maze Fun</title>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
<link href="style.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style4 {font-size: 24px}
-->
</style>
<script type="text/javascript">
<!--
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onLoad="MM_preloadImages('image/index_hover_03.gif','image/index_hover_04.gif','image/index_hover_05.gif','image/index_hover_06.gif','image/index_hover_07.gif')">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><img src="image/indexc_01.jpg" width="827" height="444" alt=""></td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><img src="image/indexb_02.jpg" width="173" height="64" alt=""></td>
          </tr>
          <tr>
            <td><a href="index.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image10','','image/index_hover_03.gif',1)"><img src="image/indexb_03.gif" name="Image10" width="173" height="44" border="0"></a></td>
          </tr>
          <tr>
            <td><a href="country_directions.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image11','','image/index_hover_04.gif',1)"><img src="image/indexb_04.gif" name="Image11" width="173" height="41" border="0"></a></td>
          </tr>
          <tr>
            <td><a href="image/brian/MartindaleMaze08.gif" rel="lightbox[roadtrip]" title="2008" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image12','','image/index_hover_05.gif',1)"><img src="image/indexb_05.gif" name="Image12" width="173" height="39" border="0"></a></td>
          </tr>
          <tr>
            <td><a href="country_pricing.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image13','','image/index_hover_06.gif',1)"><img src="image/indexb_06.gif" name="Image13" width="173" height="39" border="0"></a></td>
          </tr>
          <tr>
            <td><a href="country_video.html" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image14','','image/index_hover_07.gif',1)"><img src="image/indexb_07.gif" name="Image14" width="173" height="45" border="0"></a></td>
          </tr>
          <tr>
            <td><img src="image/indexb_08.jpg" width="173" height="172" alt=""></td>
          </tr>
          
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td background="image/index_09.gif">&nbsp;
        <table width="100%" border="0" cellspacing="10" cellpadding="0">
          <tr>
            <td width="6%"><h2>&nbsp;</h2></td>
            <td width="89%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td><table width="100%" border="0" cellspacing="5" cellpadding="0">
                      <tr>
                        <td width="29%" valign="top"><p><span class="style4">
                          <?php

$ip = $_POST['ip'];
$httpref = $_POST['httpref'];
$httpagent = $_POST['httpagent'];
$visitor = $_POST['visitor'];
$visitormail = $_POST['visitormail'];
$notes = $_POST['notes'];
$attn = $_POST['attn'];


if (eregi('http:', $notes)) {
die ("Do NOT try that! ! ");
}
if(!$visitormail == "" && (!strstr($visitormail,"@") || !strstr($visitormail,".")))
{
echo "<h2>Use Back - Enter valid e-mail</h2>\n";
$badinput = "<h2>Feedback was NOT submitted</h2>\n";
echo $badinput;
die ("Go back! ! ");
}

if(empty($visitor) || empty($visitormail) || empty($notes )) {
echo "<h2>Use Back - fill in all fields</h2>\n";
die ("Use back! ! ");
}

$todayis = date("l, F j, Y, g:i a") ;

$attn = $attn ;
$subject = $attn;

$notes = stripcslashes($notes);

$message = " $todayis [EST] \n
Attention: $attn \n
Message: $notes \n
From: $visitor ($visitormail)\n
Additional Info : IP = $ip \n
Browser Info: $httpagent \n
Referral : $httpref \n
";

$from = "From: $visitormail\r\n";


mail("mazefun@invisalink.net", $subject, $message, $from);

?>

                        </span> </p>
                        <div align="center" class="style4">Thank You!            </div>
              <p align="left" class="style17 style4">
Date: <?php echo $todayis ?>
<br />
Thank You : <?php echo $visitor ?> ( <?php echo $visitormail ?> )
<br />

Attention: <?php echo $attn ?>
<br />
Message:<br />
<?php $notesout = str_replace("\r", "<br/>", $notes);
echo $notesout; ?>
<br />
<?php echo $ip ?></p>
                        <p>&nbsp;</p>
                        </td>
                      </tr>
                  </table></td>
                </tr>
                <tr>
                  <td><table width="100%" border="0" cellspacing="10" cellpadding="0">
                      <tr>
                        <td width="20%" align="center">&nbsp;</td>
                        <td width="20%" align="center">&nbsp;</td>
                        <td width="20%" align="center">&nbsp;</td>
                        <td width="20%" align="center">&nbsp;</td>
                        <td width="20%" align="center"><a href="image/brian/MartindaleMaze07.gif" rel="lightbox[roadtrip]" title="2007"></a><a href="image/brian/MartindaleMaze06.gif" rel="lightbox[roadtrip]" title="2006"></a><a href="image/brian/MartindaleMaze05.gif" rel="lightbox[roadtrip]" title="2005"></a><a href="image/brian/MartindaleMaze04.gif" rel="lightbox[roadtrip]" title="2004"></a><a href="image/brian/MartindaleMaze03.gif" rel="lightbox[roadtrip]" title="2003"></a><a href="image/brian/MartindaleMaze02.gif" rel="lightbox[roadtrip]" title="2002"></a><a href="image/brian/MartindaleMaze01.gif" rel="lightbox[roadtrip]" title="2001"></a></td>
                    </tr>
                  </table></td>
                </tr>
            </table></td>
            <td width="5%">&nbsp;</td>
          </tr>
      </table></td>
  </tr>
</table>
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td height="102" background="image/index_19.gif"><table width="100%" border="0" cellspacing="10" cellpadding="0">
      <tr>
        <td width="64%" class="yellow-text-regular p1"><a href="#"><strong>Terms of Use</strong></a><strong> |</strong> <a href="#"><strong>Privacy</strong> <strong>Statement</strong></a></td>
        <td width="36%" align="center">&copy; 2008 Your Corporation. All rights reserved</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
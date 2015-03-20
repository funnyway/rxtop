<?php
if(!defined('InEmpireCMS'))
{
        exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>显示最新10条新闻例子</title>
</head>
<body>
<br>
<br>
<br>
<table width="500" border="0" align="center" cellpadding="3" cellspacing="1" bgcolor="#CCCCCC">
  <tr> 
    <td height="25"><strong>显示最新10条新闻：</strong></td>
  </tr>
  <tr> 
    <td height="25" bgcolor="#FFFFFF">
                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <?php
                while($r=$empire->fetch($sql))        //循环获取查询记录
                {
                        $titleurl=sys_ReturnBqTitleLink($r);        //标题链接
                ?>
                <tr>
                <td width="67%" height="25">·<a href="<?=$titleurl?>" target="_blank"> 
                <?=esub(stripslashes($r[title]),32)?>
                </a></td>
                <td width="33%"><div align="center">[<?=date('Y-m-d',$r[newstime])?>]</div></td>
                </tr>
                <?php
                }
                ?>
                </table>
    </td>
  </tr>
</table>
</body>
</html>
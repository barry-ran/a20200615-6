<?
include("../../../../config/conn.php");
include("../../../../config/function.php");
?>

<!--底部B-->
<div class="bfb ibottom fontyh">
<div class="yjcode">
 <ul class="u1">
 <li class="l1"><img src="<?=weburl?>homeimg/zhen.gif" width="131" height="153" /></li>
 <? while1("*","yjcode_helptype where admin=1 order by xh asc limit 4");while($row1=mysql_fetch_array($res1)){?>
 <li class="l2">
 <span class="cap"><a href="<?=weburl?>help/search_j<?=$row1[id]?>v.html"><?=$row1[name1]?></a></span>
 <? 
 while2("*","yjcode_helptype where admin=2 and name1='".$row1[name1]."' order by xh asc limit 5");while($row2=mysql_fetch_array($res2)){
 $aurl="search_j".$row1[id]."v_k".$row2[id]."v.html";
 if(returncount("yjcode_help where ty1id=".$row1[id]." and ty2id=".$row2[id])==1){
 while3("id,ty1id,ty2id","yjcode_help where ty1id=".$row1[id]." and ty2id=".$row2[id]);$row3=mysql_fetch_array($res3);
 $aurl="view".$row3[id].".html";
 }
 ?>
 <a href="<?=weburl?>help/<?=$aurl?>" class="a1"><?=$row2[name2]?></a><br>
 <? }?>
 </li>
 <? }?>
 <li class="l2">
 <span class="cap">二维码扫描</span>
 <a href="<?=weburl?>mt/" target="_blank"><img border="0" src="<?=weburl?>tem/getqr.php?u=<?=weburl."m/"?>&size=3" style="margin:5px 0 0 0;" /></a>
 </li>
 </ul>
 <ul class="u2">
 <li class="l1">友情链接：</li>
 <li class="l2">
 <? while0("*","yjcode_ad where adbh='ADI14' and zt=0 and type1='文字' order by xh asc");while($row=mysql_fetch_array($res)){?>
 <a href="<?=$row[aurl]?>"><?=$row[tit]?></a>
 <? }?>
 </li>
 </ul>
 
</div>
</div>
<!--底部E-->

<!--B B-->
<div class="bfb bottomy fontyh">
<div class="yjcode">
 <div class="d1">
 <a href="<?=weburl?>">网站首页</a> | 
 <a href="<?=weburl?>help/aboutview2.html">关于我们</a> | 
 <a href="<?=weburl?>help/aboutview3.html">广告合作</a> | 
 <a href="<?=weburl?>help/aboutview4.html">联系我们</a> | 
 <a href="<?=weburl?>help/aboutview5.html">隐私条款</a> | 
 <a href="<?=weburl?>help/aboutview6.html">免责声明</a> | 
 <a href="<?=weburl?>">返回首页</a><br>
 Copyright 2014-<?=date("Y")+1?> <?=webname?>,All Rights Reserved 版权所有<br>
 客服热线：<?=$rowcontrol[webtelv]?>（周一至周五：8:00-7:00） <?=$rowcontrol[beian]?> <?=$rowcontrol[webtj]?>
  </div>
</div>
</div>
<!--B E-->
<? while1("*","yjcode_ad where adbh='ADKF' and zt=0 order by xh asc limit 1");if($row1=mysql_fetch_array($res1)){echo $row1[txt];}?>

<!--***********右侧浮动开始*************-->
<div id="floatTips" class="floatTips" style="display:<? if($rowcontrol[ifkf]=="off"){?>none<? }?>;">

<div id="gdqqh" style="display:none;">
<ul class="uqq">
<li class="l1"><img src="<?=weburl?>img/qqr1.gif" style="cursor:pointer;" onclick="gdqqhout()" width="16" height="16" /></li>
<?
$qq=preg_split("/,/",$rowcontrol[webqqv]);
for($qqi=0;$qqi<count($qq);$qqi++){
$qv=preg_split("/\*/",$qq[$qqi]);
if($qv[0]!=""){
if($qv[1]==""){$qtit="网站客服";}else{$qtit=$qv[1];}
?>
<li class="l2"><a href="http://wpa.qq.com/msgrd?v=3&uin=<?=$qv[0]?>&site=<?=weburl?>&menu=yes" target="_blank"><?=$qtit?></a></li>
<?
}
}
?>
<li class="l4">咨询热线</li>
<li class="l5"><?=$rowcontrol[webtelv]?></li>
<li class="l6"><a href="#"><img src="<?=weburl?>img/qq3.gif" width="113" height="15" border="0" /></a></li>
</ul>
</div>

<div class="gdqqn" id="gdqqn" onclick="gdqqnover()"><img src="<?=weburl?>img/qqy1.jpg" width="53" height="200" /></div>

</div>
<script type="text/javascript">
initFloatTips();
</script>
<div style="display:none"><a href="http://www.ytaomb.com">源码论坛</a></div>
<!--**********右侧浮动结束***************-->

<style> 
.divcss5{ border:1px solid #000; width:100%; height:100px} 
.divcss5 img{width:100%; height:100px} 
</style> 
<?php include('head.php'); ?>

  
<div class="backgg" style="    background-image: url(assets/img/nvhai.jpg);
">
</div>

<div class= 'xinwencontent'>
  <div class="xinwenxf" style="text-align: center;">  <span style="color: #FFFFFF;font-family:'SimSun';font-size: 26px;">心理测评</span> </div>
   <div class="xinwensubxf" > <a style="font-size: 24px;color:#000000; " href="aiqing.php"> 爱情测试</a> </div>
    <div class="xinwensubxf2"> <a style="font-size: 24px;color:#000000; " href="xingge.php"> 性格测试 </a>  </div>
    <div class="xinwensubxf3"> <a style="font-size: 24px;color:#000000; " href="shejiao.php"> 社交测试 </a>  </div>
    <div class="xinwensubxf4"> <a style="font-size: 24px;color:#000000; " href="xinli.php"> 心理健康测试 </a>  </div>
    <div class="xinwencontent">
      <div class="biaoti">
      <span class="biaotifont">性格测试</span><br></br>
    </div>  
    <br><br>


<script Language="JavaScript">
function processForm(form){
var xf,hc1, hc2, hc3, hc4, hc5, hc6, hc7, hc8, hc9,hc10,hc11,hc12,hc13;
xf=hc1=hc2=hc3=hc4=hc5=hc6=hc7=hc8=hc9=hc10=hc11=hc12=hc13=0;
//loops through the radio buttons finding out which one is selected
if (form.c1[1].checked==1) hc1=1;
if (form.c1[2].checked==1) hc1=2;
if (form.c2[0].checked==1) hc2=2;
if (form.c2[1].checked==1) hc2=1;
if (form.c3[0].checked==1) hc3=2;
if (form.c3[1].checked==1) hc3=1;
if (form.c4[1].checked==1) hc4=1;
if (form.c4[2].checked==1) hc4=2;
if (form.c5[2].checked==1) hc5=2;
if (form.c5[1].checked==1) hc5=1;
if (form.c6[1].checked==1) hc6=1;
if (form.c6[2].checked==1) hc6=2;
if (form.c7[1].checked==1) hc7=1;
if (form.c7[2].checked==1) hc7=2;
if (form.c8[1].checked==1) hc8=1;
if (form.c8[0].checked==1) hc8=2;
if (form.c9[0].checked==1) hc9=2;
if (form.c9[1].checked==1) hc9=1;
if (form.c10[2].checked==1) hc10=2;
if (form.c10[1].checked==1) hc10=1;
if (form.c11[2].checked==1) hc11=2;
if (form.c11[1].checked==1) hc11=1;
if (form.c12[0].checked==1) hc12=2;
if (form.c12[1].checked==1) hc12=1;
if (form.c13[0].checked==1) hc13=2;
if (form.c13[1].checked==1) hc13=1;
xf=hc1+hc2+hc3+hc4+hc5+hc6+hc7+hc8+hc9+hc10+hc11+hc12+hc13;   
form.answer.value="你的得分为"+xf+"分";
}</script>



<form name="see">
  <div align="center"><center><table border="0" cellpadding="10" cellspacing="0" width="886" height="1" bgcolor="#FFFFFF">
    <tr>
      <td width="517" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">1、你你不擅长说笑话，讲趣事。<br>
      <input name="c1" type="radio" value="1">是的。<input name="c1" type="radio" value="3">难以确定。<input
      name="c1" type="radio" value="5">不是的。</span></td>
    </tr>
    <tr>
      <td width="517" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">2、多数人认为你是一个说话风趣的人。<br>
      <input name="c2" type="radio" value="3">是的。<input name="c2" type="radio" value="1">不一定。<input
      name="c2" type="radio" value="5">不是的。</span></td>
    </tr>
    <tr>
      <td width="517" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">3、喜欢看电影或参加其他娱乐活动。<br>
      <input name="c3" type="radio" value="5">超过一般人。<input name="c3" type="radio"
      value="1">和一般人相仿。<input name="c3" type="radio" value="3">比一般人少。 </span></td>
    </tr>
    <tr>
      <td width="517" height="35" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">4、和一般人相比，你的朋友的确太少。<br>
      <input name="c4" type="radio" value="51">是的。<input name="c4" type="radio" value="11">难以确定。<input
      name="c4" type="radio" value="31">不是的。</span></td>
    </tr>
    <tr>
      <td width="517" height="35" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">5、不到万不得已，你总是避免参加应酬性活动。<br>
      <input name="c5" type="radio" value="52">是的。<input name="c5" type="radio" value="12">难以确定。<input
      name="c5" type="radio" value="32">不是的。</span></td>
    </tr>
    <tr>
      <td width="517" height="35" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">6、单独跟异性谈话时，总显得不太自然。<br>
      <input name="c6" type="radio" value="53">是的。<input name="c6" type="radio" value="13">不太确定。<input
      name="c6" type="radio" value="33">不是的。</span></td>
    </tr>
    <tr>
      <td width="517" height="35" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">7、在接人待物方面，一直不太成功。<br>
      <input name="c7" type="radio" value="3">是的。<input name="c7" type="radio" value="5">不完全这样。<input
      name="c7" type="radio" value="1">不是的。 </span></td>
    </tr>
    <tr>
      <td width="517" height="35" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">8、喜欢向朋友讲述一些你个人有趣的经历。<br>
      <input name="c8" type="radio" value="3">是的。<input name="c8" type="radio" value="5">不一定。<input
      name="c8" type="radio" value="1">不是的。 </span></td>
    </tr>
    <tr>
      <td width="517" height="35" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">9、你宁愿做一个－－<br>
      <input name="c9" type="radio" value="53">演员。<input name="c9" type="radio" value="13">不确定。<input
      name="c9" type="radio" value="33">建筑师。</span></td>
    </tr>
    <tr>
      <td width="517" height="35" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">10、你爱穿朴素的衣服，不欣赏华丽的服装。<br>
      <input name="c10" type="radio" value="3">是的。<input type="radio" name="c10" value="5">不太确定。<input
      type="radio" name="c10" value="1">不是的。</span></td>
    </tr>
    <tr>
      <td width="517" height="35" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">11、你认为安静的自娱远远胜过热闹的宴会。<br>
      <input type="radio" name="c11" value="V1">是的。<input type="radio" name="c11"
      value="V2">不确定。<input type="radio" name="c11" value="V3">不是的。</span></td>
    </tr>
    <tr>
      <td width="517" height="35" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">12、通常人们认为你是一个活跃热情的人。<br>
      <input type="radio" name="c12" value="V4">是的。<input type="radio" name="c12"
      value="V5">说不准。<input type="radio" name="c12" value="V6">不是的。</span></td>
    </tr>
    <tr>
      <td width="517" height="35" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">13、喜欢借出差机会多做一些工作。<br>
      <input type="radio" name="c13" value="V7">是的。<input type="radio" name="c13"
      value="V8">不一定。<input type="radio" name="c13" value="V9">不是的。</span></td>
    </tr>
    <tr>
      <td width="517" height="25" align="center" style="background-color: #DCF2EE"><p><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">
                              <input type="button"
      value="都选择完了，结果怎样?" onClick="processForm(this.form)"
      style="font-size: 20px; font-family: 宋体">
                              <input type="text" name="answer" size="20"
      style="font-family: 宋体; font-size: 20px; color: rgb(255,0,0)">
                              </span></p>
                            <p>说明 <br>
                              分数为13--26:你轻松自在、随遇而安。通常活泼、愉快健谈，对人、对事热心而富于感情；有时可能过分激动，以至行为波动多变化。记住：遇事要冷静。</p>
                            <p>分数为9--12:你处于中间，既不沉默寡言，也不夸夸其谈，做事稳健可靠。</p>
                            <p>分数为0--8:你严肃、审慎，且寡言。通常行为比较拘谨，内省而不轻易发言，表现较消极、抑郁。有时可能过分深思熟虑，而近乎骄傲自满，是一位认真可靠的工作人员。你的这种个性像无形的障碍，使别人不免与你保持距离，对你有敬畏感。<br>
                            </p></td>
    </tr>
  </table>         
  </center></div>         
</form>         


                                    
</TD>
              <TD width=30 height=229>&nbsp;</TD>
            </TR>
            <TR> 
              <TD width=1 bgColor=#cc99ff height=13>&nbsp;</TD>
              <TD width=29 height=13><IMG height=21 
              <TD width=478 height=13>&nbsp;</TD>
              <TD width=30 background="" bgColor=#cc99ff height=13><IMG height=21 
            </TR>
            <TR> 
              <TD width=1 bgColor=#cc99ff height=13>&nbsp;</TD>
              <TD width=29 bgColor=#cc99ff height=13>&nbsp;</TD>
              <TD width=478 bgColor=#cc99ff height=13><IMG height=14 
              <TD width=30 bgColor=#cc99ff height=13>&nbsp;</TD>
            </TR>
            <TR> 
              <TD width=1 bgColor=#cc99ff height=18>&nbsp;</TD>
              <TD width=29 bgColor=#cc99ff height=18>&nbsp;</TD>
              <TD width=478 bgColor=#cc99ff height=18>&nbsp;</TD>
              <TD width=30 bgColor=#cc99ff height=18>&nbsp;</TD>
            </TR>
            <TR> 
              <TD width=1 bgColor=#cc99ff height=65>&nbsp;</TD>
              <TD width=29 bgColor=#cc99ff height=65>&nbsp;</TD>
              <TD width=478 bgColor=#cc99ff height=65> <TABLE borderColor=#cc66ff height=60 cellSpacing=0 
            borderColorDark=#ffccff cellPadding=0 width=468 
            borderColorLight=#ccccff border=0>
                  <TBODY>
                    <TR borderColor=#9900ff> 
                      <TD height=47> 
                      </TD>
                    </TR>
                  </TBODY>
                </TABLE></TD>
              <TD width=30 bgColor=#cc99ff height=65>&nbsp;</TD>
            </TR>
            <TR> 
              <TD width=1 bgColor=#cc99ff height=17>&nbsp;</TD>
            <FONT class=ui_engl 
      color=#ffffff>Copyright &copy; 2011</FONT><FONT class=ui_engl><FONT 
      color=white>烟雨女人网</FONT><FONT 
      color=#ff0000><STRONG><a href="http://www.nvrenjk.com"><font color="#FFFFFF">女人网</font></a></STRONG></FONT><a href="http://bbs.nvrenjk.com"><FONT color=#ffffff>女人社区</FONT></a><FONT color=#ffffff>. 
                  All rights reserved.
                  <script>var tc_user="nvrenjk.com";var tc_class="2";</script>
                  </FONT></FONT></DIV></TD>
            </TR>
          </TBODY>
        </TABLE></TD></TR></TBODY></TABLE><BR>
<SCRIPT language=JavaScript1.2>
<!-- 
var no = 25; 
var speed = 10; 
var snowflake = "../img/heart.gif"; 
var ns4up = (document.layers) ? 1 : 0; 
var ie4up = (document.all) ? 1 : 0;
var dx, xp, yp; 
var am, stx, sty; 
var i, doc_width = 800, doc_height = 600;
if (ns4up) {
doc_width = self.innerWidth;
doc_height = self.innerHeight;
} else if (ie4up) {
doc_width = document.body.clientWidth;
doc_height = document.body.clientHeight;
}
dx = new Array();
xp = new Array();
yp = new Array();
am = new Array();
stx = new Array();
sty = new Array();
for (i = 0; i < no; ++ i) { 
dx[i] = 0; 
xp[i] = Math.random()*(doc_width-50);
yp[i] = Math.random()*doc_height;
am[i] = Math.random()*20; 
stx[i] = 0.02 + Math.random()/10; 
sty[i] = 0.7 + Math.random(); 
if (ns4up) { 
if (i == 0) {
document.write("<layer name=\"dot"+ i +"\" left=\"15\" ");
document.write(snowflake + "\" border=\"0\"></layer>");
} else {
document.write("<layer name=\"dot"+ i +"\" left=\"15\" ");
document.write(snowflake + "\" border=\"0\"></layer>");
}
} else if (ie4up) {
if (i == 0) {
document.write("<div id=\"dot"+ i +"\" style=\"POSITION: ");
document.write("absolute; Z-INDEX: "+ i +"; VISIBILITY: ");
document.write(snowflake + "\" border=\"0\"></div>");
} else {
document.write("<div id=\"dot"+ i +"\" style=\"POSITION: ");
document.write("absolute; Z-INDEX: "+ i +"; VISIBILITY: ");
document.write(snowflake + "\" border=\"0\"></div>");
}
}
}
function snowNS() { // Netscape main animation function
for (i = 0; i < no; ++ i) { // iterate for every dot
yp[i] += sty[i];
if (yp[i] > doc_height-50) {
xp[i] = Math.random()*(doc_width-am[i]-30);
yp[i] = 0;
stx[i] = 0.02 + Math.random()/10;
sty[i] = 0.7 + Math.random();
doc_width = self.innerWidth;
doc_height = self.innerHeight;
}
dx[i] += stx[i];
document.layers["dot"+i].top = yp[i];
document.layers["dot"+i].left = xp[i] + am[i]*Math.sin(dx[i]);
}
setTimeout("snowNS()", speed);
}
function snowIE() { // IE main animation function
for (i = 0; i < no; ++ i) { // iterate for every dot
yp[i] += sty[i];
if (yp[i] > doc_height-50) {
xp[i] = Math.random()*(doc_width-am[i]-30);
yp[i] = 0;
stx[i] = 0.02 + Math.random()/10;
sty[i] = 0.7 + Math.random();
doc_width = document.body.clientWidth;
doc_height = document.body.clientHeight;
}
dx[i] += stx[i];
document.all["dot"+i].style.pixelTop = yp[i];
document.all["dot"+i].style.pixelLeft = xp[i] + am[i]*Math.sin(dx[i]);
}
setTimeout("snowIE()", speed);
}
if (ns4up) {
snowNS();
} else if (ie4up) {
snowIE();
}
//-->
</SCRIPT>





    </div>

      <!-- <li class="xf2">  </li> -->
</div>
<?php include('footer.php'); ?>







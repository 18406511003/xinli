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
      <span class="biaotifont">社交测试</span><br></br>
    </div>  
    <br><br>

<script Language="JavaScript">
function processForm(form){
var xf,hc1, hc2, hc3, hc4, hc5, hc6, hc7, hc8, hc9,hc10,hc11,hc12;
xf=hc1=hc2=hc3=hc4=hc5=hc6=hc7=hc8=hc9=hc10=hc11=hc12=0;
//loops through the radio buttons finding out which one is selected
if (form.c1[0].checked==1) hc1=1;
if (form.c1[1].checked==1) hc1=3;
if (form.c1[2].checked==1) hc1=5;
if (form.c2[0].checked==1) hc2=3;
if (form.c2[1].checked==1) hc2=1;
if (form.c2[2].checked==1) hc2=5;
if (form.c3[0].checked==1) hc3=5;
if (form.c3[1].checked==1) hc3=1;
if (form.c3[2].checked==1) hc3=3;
if (form.c4[0].checked==1) hc4=5;
if (form.c4[1].checked==1) hc4=1;
if (form.c4[2].checked==1) hc4=3;
if (form.c5[0].checked==1) hc5=5;
if (form.c5[1].checked==1) hc5=1;
if (form.c5[2].checked==1) hc5=3;
if (form.c6[0].checked==1) hc6=5;
if (form.c6[1].checked==1) hc6=1;
if (form.c6[2].checked==1) hc6=3;
if (form.c7[0].checked==1) hc7=3;
if (form.c7[1].checked==1) hc7=5;
if (form.c7[2].checked==1) hc7=1;
if (form.c8[0].checked==1) hc8=3;
if (form.c8[1].checked==1) hc8=5;
if (form.c8[2].checked==1) hc8=1;
if (form.c9[0].checked==1) hc9=3;
if (form.c9[1].checked==1) hc9=5;
if (form.c9[2].checked==1) hc9=1;
if (form.c10[0].checked==1) hc10=3;
if (form.c10[1].checked==1) hc10=5;
if (form.c10[2].checked==1) hc10=1;
if (form.c11[0].checked==1) hc11=1;
if (form.c11[1].checked==1) hc11=3;
if (form.c11[2].checked==1) hc11=5;
if (form.c12[0].checked==1) hc12=1;
if (form.c12[1].checked==1) hc12=3;
if (form.c12[2].checked==1) hc12=5;
xf=hc1+hc2+hc3+hc4+hc5+hc6+hc7+hc8+hc9+hc10+hc11+hc12;    
form.answer.value="你的得分为"+xf+"分";
}</script>



<form name="see">
  <div align="center"><center><table border="0" cellpadding="10" cellspacing="0" width="886" height="1" bgcolor="#FFFFFF">
    <tr>
      <td width="517" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 20px; line-height: 30px">1、与人初次会面，经过一番交谈，你能对他(她)的举止谈吐、知识能力等方面作出积极、准确的评价吗？<br>
      <input name="c1" type="radio" value="1">不能。<input name="c1" type="radio" value="3">很难说。<input
      name="c1" type="radio" value="5">我想可以。</span></td>
    </tr>
    <tr>
      <td width="517" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 20px; line-height: 30px">2、你和别人告别时，下次相会的时间地点是――<br>
      <input name="c2" type="radio" value="3">对方提出的。<input name="c2" type="radio"
      value="1">谁也没有提这事。<input name="c2" type="radio" value="5">我提议的。 </span></td>
    </tr>
    <tr>
      <td width="517" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 20px; line-height: 30px">3、当你第一次见到某个人，你的表情是――<br>
      <input name="c3" type="radio" value="5">热情诚恳，自然大方。<input name="c3"
      type="radio" value="1">大大咧咧，漫不经心。<br>
      <input name="c3" type="radio" value="3">紧张局促，羞怯不安。 </span></td>
    </tr>
    <tr>
      <td width="517" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 20px; line-height: 30px">4、你是否在寒暄之后，很快就找到双方共同感兴趣的话题？<br>
      <input name="c4" type="radio" value="5">是的，对此我很敏锐。<input name="c4"
      type="radio" value="1">我觉得这很难。<br>
      <input name="c4" type="radio" value="3">必须经过较长一段时间才能找到。 </span></td>
    </tr>
    <tr>
      <td width="517" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 20px; line-height: 30px">5、你与人谈话时的坐姿通常是――<br>
      <input name="c5" type="radio" value="5">两膝靠拢。<input name="c5" type="radio"
      value="1">两腿叉开。<input name="c5" type="radio" value="3">跷起“二郎腿”。 </span></td>
    </tr>
    <tr>
      <td width="517" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 20px; line-height: 30px">6、你同他(她)谈话时，眼睛望着何处？<br>
      <input name="c6" type="radio" value="5">直视对方的眼睛。<input name="c6"
      type="radio" value="1">看着其他的东西或人。<br>
      <input name="c6" type="radio" value="3">盯着自己的钮扣，不停玩弄。 </span></td>
    </tr>
    <tr>
      <td width="517" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 20px; line-height: 30px">7、你选择的交谈话题是――<br>
      <input name="c7" type="radio" value="3">两人都喜欢的。<input name="c7" type="radio"
      value="5">对方所感兴趣的。<input name="c7" type="radio" value="1">自己所热衷的。 
      </span></td>
    </tr>
    <tr>
      <td width="517" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 20px; line-height: 30px">8、通过第一次交谈，你们分别所占用的时间是――<br>
      <input name="c8" type="radio" value="3">差不多。<input name="c8" type="radio"
      value="5">他多我少。<input name="c8" type="radio" value="1">我多于他。 </span></td>
    </tr>
    <tr>
      <td width="517" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 20px; line-height: 30px">9、会面时你说话的音量总是――<br>
      <input name="c9" type="radio" value="3">很低，以致别人听得较困难。<input
      name="c9" type="radio" value="5">柔和而低沉。<input name="c9" type="radio" value="1">声音高亢热情。 
      </span></td>
    </tr>
    <tr>
      <td width="517" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 20px; line-height: 30px">10、你说话时姿态是否丰富？<br>
      <input name="c10" type="radio" value="3">偶尔做些手势。<input type="radio"
      name="c10" value="5">从不指手划脚。<input type="radio" name="c10" value="1">我常用姿势补充言语表达。</span></td>
    </tr>
    <tr>
      <td width="517" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 20px; line-height: 30px">11、你讲话的速度怎么样？<br>
      <input type="radio" name="c11" value="1">频率相当高。<input type="radio" name="c11"
      value="3">十分缓慢。<input type="radio" name="c11" value="5">节律适中。</span></td>
    </tr>
    <tr>
      <td width="517" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 20px; line-height: 30px">12、假若别人谈到了你兴趣索然的话题，你将――<br>
      <input type="radio" name="c12" value="1">打断别人，另起一题。<input type="radio"
      name="c12" value="3">显得沉闷、忍耐。<br>
      <input type="radio" name="c12" value="5">仍然认真听，从中寻找乐趣。</span></td>
    </tr>
    <tr>
      <td width="517" align="center" style="background-color: #DCF2EE"><p><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">
                              <input type="button"
      value="都选择完了，结果怎样?" onClick="processForm(this.form)"
      style="font-size: 20px; font-family: 宋体">
                              <input type="text" name="answer" size="20"
      style="font-family: 宋体; font-size: 20px; color: rgb(255,0,0)">
                              </span></p>
                            <p>说明<br>
                              分数为0--22:首次效应差。也许你感到吃惊，因为很可能你只是依着自己的习惯行事而已。你本心是很愿意给别人一个美好印象的，可是你的不经心或缺乏体贴、或言语无趣，无形中却为来人做出关于你的错误的勾勒。必须记住交往是种艺术，而艺术是不能不修边幅的。</p>
                            <p>分数为23--46:首次效应一般。你的表现中存在着某些令人愉快的成分，但同时又偶有不够精彩之处；这使得别人不会对你印象恶劣，却也不会产生很强的吸引力。如果你希望提高自己的魅力，首先必须心理上重视努力在“交锋”的第一回合显示出最佳形象。</p>
                            <p>分数为47--60:首次效应好。你的适度、温和、合作给第一次见到你的人留下了深刻的印象。无论对方是你工作范围抑或私人生活中的接触者，无疑他们都有与你进一步接触的愿望。你的问题只在于注意那些单向的对你“一见钟情”者。<br>
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







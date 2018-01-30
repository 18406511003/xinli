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
var xf,hc1, hc2, hc3, hc4, hc5, hc6, hc7, hc8, hc9,hc10;
xf=hc1=hc2=hc3=hc4=hc5=hc6=hc7=hc8=hc9=hc10=0;
//loops through the radio buttons finding out which one is selected
if (form.c1[1].checked==1) hc1=1;
if (form.c1[2].checked==1) hc1=2;
if (form.c2[0].checked==1) hc2=2;
if (form.c2[1].checked==1) hc2=1;
if (form.c3[1].checked==1) hc3=1;
if (form.c3[2].checked==1) hc3=2;
if (form.c4[1].checked==1) hc4=1;
if (form.c4[2].checked==1) hc4=2;
if (form.c5[0].checked==1) hc5=2;
if (form.c5[1].checked==1) hc5=1;
if (form.c6[1].checked==1) hc6=1;
if (form.c6[2].checked==1) hc6=2;
if (form.c7[1].checked==1) hc7=1;
if (form.c7[2].checked==1) hc7=2;
if (form.c8[0].checked==1) hc8=2;
if (form.c8[1].checked==1) hc8=1;
if (form.c9[0].checked==1) hc9=2;
if (form.c9[1].checked==1) hc9=1;
if (form.c10[0].checked==1) hc10=2;
if (form.c10[1].checked==1) hc10=1;
xf=hc1+hc2+hc3+hc4+hc5+hc6+hc7+hc8+hc9+hc10;    
form.answer.value="你的得分为"+xf+"分";
}</script>



<form name="see">
  <div align="center"><center><table border="0" cellpadding="10" cellspacing="0" width="886" height="1" bgcolor="#FFFFFF">
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">1、在匆忙的路上，别人向你打招呼：“你好啊!”你会停下脚步，认真回答他们吗？<br>
      <input name="c1" type="radio" value="12">是。　<input name="c1" type="radio" value="32">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">2、你是否自动地、不经思考地随便表示意见？　　<input
      name="c2" type="radio" value="11">是。&nbsp; <input name="c2" type="radio" value="31">否。  
      </span></td> 
    </tr> 
    <tr> 
      <td width="560" height="1" style="background-color: #DCF2EE"><span 
      style="font-family: 宋体; font-size: 20px; line-height: 30px">3、你喜欢独自进餐吗？　<input
      name="c3" type="radio" value="11">是。&nbsp;&nbsp;<input name="c3" type="radio"
      value="31">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">4、你看不看报上的社会新闻？<input
      name="c4" type="radio" value="13">是。&nbsp;&nbsp;<input name="c4" type="radio"
      value="33">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">5、你是否觉得你的3位最好的朋友都不如你？　<input
      name="c5" type="radio" value="14">是。&nbsp;&nbsp;<input name="c5" type="radio"
      value="34">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">6、你是不是爱向别人吐露自己遭遇的挫折以及个人的种种问题，找别人“诉苦”？　<br>
      <input name="c6" type="radio" value="15">是。&nbsp;&nbsp;<input name="c6" type="radio"
      value="35">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">7、你常向别人借钱吗？　<input
      name="c7" type="radio" value="16">是。&nbsp;&nbsp;<input name="c7" type="radio"
      value="36">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">8、你和别人一道出去，是不是一定要大家平均分摊费用？<input
      name="c8" type="radio" value="17">是。&nbsp;&nbsp;<input name="c8" type="radio"
      value="37">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">9、有时你会与朋友谈论一些他们不感兴趣的话题，只因为这些话题引起你的兴趣!　<br>
      <input name="c9" type="radio" value="18">是。&nbsp;&nbsp;<input name="c9" type="radio"
      value="38">否。 </span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">10、打电话时你总是说个没完，让其他人在一旁等得着急吗？<br>
      <input name="c10" type="radio" value="19">是。&nbsp;&nbsp;<input name="c10" type="radio"
      value="39">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">11、你可把自己喜欢的画片挂在大办公室墙的当中？<input
      name="c11" type="radio" value="110">是。&nbsp;&nbsp;<input name="c11" type="radio"
      value="310">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">12、告诉别人一个事件时，你是否喜欢独占谈话时的话题，并且把细枝末节都说得很清楚吗？<br>
      <input name="c12" type="radio" value="111">是。&nbsp;&nbsp;<input name="c12"
      type="radio" value="311">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">13、你肯不惜金钱招待朋友吗？　<input
      name="c13" type="radio" value="112">是。&nbsp;&nbsp;<input name="c13" type="radio"
      value="312">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">14、你认为自己说话毫不隐讳的态度是对的吗？　<input
      name="c14" type="radio" value="113">是。&nbsp;&nbsp;<input name="c14" type="radio"
      value="313">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">15、你与朋友约会时，是否让别人等你？　　<input
      name="c15" type="radio" value="114">是。&nbsp;&nbsp;<input name="c15" type="radio"
      value="314">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">16、你是否经常发现朋友的短处。要求他们去改进？<input
      name="c16" type="radio" value="115">是。&nbsp;&nbsp;<input name="c16" type="radio"
      value="315">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">17、你真正喜欢孩子(不是你自己的孩子)吗？<input
      name="c17" type="radio" value="115">是。&nbsp;&nbsp;<input name="c17" type="radio"
      value="315">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">18、你喜欢拿别人开玩笑，丝毫不顾别人的心情、自尊吗？<input
      name="c18" type="radio" value="116">是。&nbsp;&nbsp;<input name="c18" type="radio"
      value="316">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">19、在打桥牌或玩类似的游戏时，你喜欢把牌散开在合起来并不停地反复吗？<br>
      <input name="c19" type="radio" value="117">是。&nbsp;&nbsp;<input name="c19"
      type="radio" value="317">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">20、你认为中年人恋爱是愚蠢、可笑的吗？<input
      name="c20" type="radio" value="118">是。&nbsp;&nbsp;<input name="c20" type="radio"
      value="318">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">21、你确实不喜欢的人，超过7个了吗？<input
      name="c21" type="radio" value="119">是。&nbsp;&nbsp;<input name="c21" type="radio"
      value="319">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">22、不到每个人都疲倦之极，你就不会告辞吗？<input
      name="c22" type="radio" value="120">是。&nbsp;&nbsp;<input name="c22" type="radio"
      value="320">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">23、你讲话是不是常常用“坏透了”、“气死人”、“真要命”一类字眼？<br>
      <input name="c23" type="radio" value="121">是。&nbsp;&nbsp;<input name="c23"
      type="radio" value="321">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">24、电话接线员和商品推销员会惹你大发脾气吗？<input
      name="c24" type="radio" value="122">是。&nbsp;&nbsp;<input name="c24" type="radio"
      value="322">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">25、你讲的故事或轶事总是又长又复杂，别人得耐下心来才听得进去吗？<br>
      <input name="c25" type="radio" value="123">是。&nbsp;&nbsp;<input name="c25"
      type="radio" value="323">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">26、你爱好音乐、书籍、运动，别人不喜欢，你是不是觉得他面目可憎、言语无味？<br>
      <input name="c26" type="radio" value="124">是。&nbsp;&nbsp;<input name="c26"
      type="radio" value="324">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">27、你言而无信吗？(多想一次再回答)<input
      name="c27" type="radio" value="125">是。&nbsp;&nbsp;<input name="c27" type="radio"
      value="325">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">28、你是不是常常当面批评家里的人、好朋友或下属？<input
      name="c28" type="radio" value="126">是。&nbsp;&nbsp;<input name="c28" type="radio"
      value="326">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">29、你遇到不如意的事，是否精神沮丧、意志消沉？<input
      name="c29" type="radio" value="127">是。&nbsp;&nbsp;<input name="c29" type="radio"
      value="327">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">30、你自己运气坏而你的朋友成功的时候，你是不是真的替朋友高兴？<br>
      <input name="c30" type="radio" value="128">是。&nbsp;&nbsp;<input name="c30"
      type="radio" value="328">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">31、你喜欢跟人聊天吗？<input
      name="c31" type="radio" value="129">是。&nbsp;&nbsp;<input name="c31" type="radio"
      value="329">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">32、你坚持要朋友阅读你认为有趣或值得一读的东西吗？<input
      name="c32" type="radio" value="130">是。&nbsp;&nbsp;<input name="c32" type="radio"
      value="330">否。</span></td>
    </tr>
    <tr>
      <td width="560" height="27" align="center" style="background-color: #DCF2EE"><p><span
      style="font-family: 宋体; font-size: 20px; line-height: 30px">
                              <input type="button"
      value="都选择完了，结果怎样?" onClick="processForm(this.form)"
      style="font-size: 20px; font-family: 宋体">
                              <input type="text" name="answer" size="20"
      style="font-family: 宋体; font-size: 20px; color: rgb(255,0,0)">
                              </span></p>
                            <p>说明<br>
                              得分愈多，就表示你愈受人欢迎。最高的分数当然是32分，但是，假使你的分数不到32分，你也不要认为自己不受欢迎，只要有21分，你就是一个很讨人喜欢的人。<br>
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







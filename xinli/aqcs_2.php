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
      <span class="biaotifont">爱情测试</span><br></br>
    </div>  
    <br><br>






<!-- 粘贴区域 -->

<script Language="JavaScript">
function processForm(form){
var xf=0;
hc=new Array(15);
var roll_call=hc.length;
for (i=roll_call;i>0;i--)
{hc[i-1]=1};
//loops through the radio buttons finding out which one is selected
if (form.c1[1].checked==1) hc[0]=3;
if (form.c1[2].checked==1) hc[0]=5;
if (form.c2[1].checked==1) hc[1]=3;
if (form.c2[2].checked==1) hc[1]=5;
if (form.c3[0].checked==1) hc[2]=5;
if (form.c3[1].checked==1) hc[2]=3;
if (form.c4[0].checked==1) hc[3]=5;
if (form.c4[2].checked==1) hc[3]=3;
if (form.c5[0].checked==1) hc[4]=5;
if (form.c5[2].checked==1) hc[4]=3;
if (form.c6[0].checked==1) hc[5]=5;
if (form.c6[2].checked==1) hc[5]=3;
if (form.c7[0].checked==1) hc[6]=5;
if (form.c7[1].checked==1) hc[6]=3;
if (form.c8[1].checked==1) hc[7]=5;
if (form.c8[2].checked==1) hc[7]=3;
if (form.c9[0].checked==1) hc[8]=5;
if (form.c9[2].checked==1) hc[8]=3;
if (form.c10[1].checked==1) hc[9]=5;
if (form.c10[2].checked==1) hc[9]=3;
if (form.c11[1].checked==1) hc[10]=5;
if (form.c11[2].checked==1) hc[10]=3;
if (form.c12[0].checked==1) hc[11]=5;
if (form.c12[2].checked==1) hc[11]=3;
if (form.c13[0].checked==1) hc[12]=3;
if (form.c13[2].checked==1) hc[12]=5;
if (form.c14[0].checked==1) hc[13]=5;
if (form.c14[2].checked==1) hc[13]=3;
if (form.c15[0].checked==1) hc[14]=5;
if (form.c15[2].checked==1) hc[14]=3;
if (form.c16[1].checked==1) hc[15]=5;
if (form.c16[2].checked==1) hc[15]=3;
if (form.c17[0].checked==1) hc[16]=3;
if (form.c17[2].checked==1) hc[16]=5;
if (form.c18[0].checked==1) hc[17]=5;
if (form.c18[2].checked==1) hc[17]=3;
for (i=roll_call;i>0;i--)
{xf+=hc[i-1]};  
form.answer.value="你的得分为"+xf+"分";
}</script>
        

<form name="see">
  <div align="center"><center><table border="0" cellpadding="10" cellspacing="0" width="886" height="1" bgcolor="#FFFFFF">
    <tr>
      <td height="49" align="center" style="background-color: #DCF2EE"><div align="left"><p><span style="font-size: 15px; line-height: 20px">你是一个诚恳而体谅的情人，抑或是爱自己多于一切？ 
      </span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">1、男（女）友梳了个不适合他（她）的发型，问你觉得好不好看，你会：<br>
      <input type="radio" name="c1" value="1">说很好看。　　<input type="radio" name="c1" value="2">说不适合他。　　<input type="radio" name="c1" value="3">不作声，只是微笑。　</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">2、在朋友家拿起一个洋娃娃来看，不慎弄断了洋娃姓的腿，你会：<br>
      <input type="radio" name="c2" value="1">悄悄地把洋娃娃放回原处。　<input type="radio" name="c2" value="2">买个新的赔偿给朋友。　　<input type="radio" name="c2" value="3">向朋友道歉后便离开。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">3、你知道父母的出生日期吗？<br>
      <input type="radio" name="c3" value="1">知道。　　<input type="radio" name="c3" value="2">知道其中一个的。　<input type="radio" name="c3" value="3">不知道。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">4、和男（女）朋友约会时碰见旧情人，他（她）还向你打招呼，你会： 
      <br>
      <input type="radio" name="c4" value="1">把男（女）友介绍。　<input type="radio" name="c4" value="2">装作看不见。　<input type="radio" name="c4" value="3">打眼色，然后离去</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">5、家里发生火警，你会带着什么逃生？<br>
      <input type="radio" name="c5" value="1">装着情书的盒子。　<input type="radio" name="c5" value="2">存有结婚费用的银行户口存摺。　　<input type="radio" name="c5" value="2">有纪念价值的礼物。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">6、小时有没有说过谎？<br>
      <input type="radio" name="c6" value="1">没有。　<input type="radio" name="c6" value="2">忘了。　<input type="radio" name="c6" value="3">有。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">7、和男（女）性约会，到餐厅吃饭，对方点一客牛排，你会；<br>
      <input type="radio" name="c7" value="1">点相同的菜。　<input type="radio" name="c7" value="2">点不同的菜，但价格和对方点的牛排差不多。　<input type="radio" name="c7" value="3">点自己喜欢的菜。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">8、想拒绝别人的要求，当着对方的面却不好意思开口，你是这样的人吗？<br>
      <input type="radio" name="c8" value="1">是。　<input type="radio" name="c8" value="2">不是。　<input type="radio" name="c8" value="3">不知道。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">9、打电给朋友，知道他（她）已卧病在床三天，你会： 
      <br>
      <input type="radio" name="c9" value="1">马上去探望。　<input type="radio" name="c9" value="2">相信对方的病没什么，不予理会。　<input type="radio" name="c9" value="3">过两天再打电话问候。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">10、你能否和朋友一起庆祝他的成功？ 
      <br>
      <input type="radio" name="c10" value="1">不能，因为觉得酸溜溜的。　　<input type="radio" name="c10" value="2">能够。　<input type="radio" name="c10" value="3">不知道。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">11、有说过朋友的坏话吗？<br>
      <input type="radio" name="c11" value="1">有。　<input type="radio" name="c11" value="2">没有。　<input type="radio" name="c11" value="3">也许有，但记不清楚了。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">12、约了人但晚了半小时，这时你会：<br>
      <input type="radio" name="c12" value="1">飞奔前往。　<input type="radio" name="c12" value="2">相信对方会谅解，所以保持平常的速度。　<input type="radio" name="c12" value="3">慢慢的走，因为反正都晚了。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">13、家中养的鸟儿病重，你会：<br>
      <input type="radio" name="c13" value="1">把小鸟放回山林。　<input type="radio" name="c13" value="2">把小鸟人道毁灭。　<input type="radio" name="c13" value="3">继续饲养，直至小鸟死去。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">14、有戏弄过男（女）友吗？<br>
      <input type="radio" name="c14" value="1">有。　<input type="radio" name="c14" value="2">没有。　<input type="radio" name="c14" value="3">有时想这样做。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">15、看到有失明人士要过马路，会牵他过去吗？<br>
      <input type="radio" name="c15" value="1">会。　<input type="radio" name="c15" value="2">不会。　<input type="radio" name="c15" value="3">如果没有急事就会。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">16、隔壁的男女传出古怪的声音，你会窥视他们吗？<br>
      <input type="radio" name="c16" value="1">会。　<input type="radio" name="c16" value="2">不会。　<input type="radio" name="c16" value="3">不知道。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">17、你的男（女）友患了绝症，只余下三个月命，你会：<br>
      <input type="radio" name="c17" value="1">聘请名医诊治。　<input type="radio" name="c17" value="2">和他（她）去外地旅游。　<input type="radio" name="c17" value="3">马上和他（她）结婚。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">18、比你年轻的人劝告你，是言之成理的，你会接受吗？<br>
      <input type="radio" name="c18" value="1">会。<input type="radio" name="c18" value="2">不会。　<input type="radio" name="c18" value="3">不知道。</span></p>
      </div>
                            <p>
                              <input type="button" value="都选择完了，结果怎样?" onClick="processForm(this.form)" style="font-size: 15px; font-family: 宋体">
                              <input type="text" name="answer" size="20" style="font-family: 宋体; font-size: 15px; color: rgb(255,0,0)">
                            <p>说明<br>
                              分数为72以上:你是一个诚实、纯品的人，很会体贴别人，即使是很细微的事情也能够留意到，对于自己的男友，更是会竭尽所能的去关心他、爱护他。
                            <p>分数为53--71:你谈恋爱诚恳而又真心，但可能你不擅于表达，所以你的心意往往未能令人领会。</p>
                            <p>分数为35--52:你会因对象和心情作出不同反应；即使对着同样一个人，你有时会热情得很，有时又会很冷漠。你算是一个诚实的人，但你不能和恋人坦诚相对，以致对方可能觉得你喜怒无常，难以捉摸。 
                            </p>
                            <p>分数为35以下:你非常自我，对于自己和别人的事情划分得很清楚，不会干预别人行动，也不希望别人干涉你。你表面上很冷漠，但有时又会变得很执着。即使谈恋爱时，也是重视自己的感受多过对方。 
                            </p>
                            <p></p></td>
    </tr>
  </table>         
  </center></div>         
</form>         

                                    
</TD>
              <TD width=30 height=229>&nbsp;</TD>
            </TR>
            <TR> 
              <TD width=1 bgColor=#cc99ff height=13>&nbsp;</TD>
                      <TD width=478 height=13>&nbsp;</TD>
              
            </TR>
            <TR> 
              <TD width=1 bgColor=#cc99ff height=13>&nbsp;</TD>
              <TD width=29 bgColor=#cc99ff height=13>&nbsp;</TD>
              
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
document.write("top=\"15\" visibility=\"show\"><img src=\"");
document.write(snowflake + "\" border=\"0\"></layer>");
} else {
document.write("<layer name=\"dot"+ i +"\" left=\"15\" ");
document.write("top=\"15\" visibility=\"show\"><img src=\"");
document.write(snowflake + "\" border=\"0\"></layer>");
}
} else if (ie4up) {
if (i == 0) {
document.write("<div id=\"dot"+ i +"\" style=\"POSITION: ");
document.write("absolute; Z-INDEX: "+ i +"; VISIBILITY: ");
document.write("visible; TOP: 15px; LEFT: 15px;\"><img src=\"");
document.write(snowflake + "\" border=\"0\"></div>");
} else {
document.write("<div id=\"dot"+ i +"\" style=\"POSITION: ");
document.write("absolute; Z-INDEX: "+ i +"; VISIBILITY: ");
document.write("visible; TOP: 15px; LEFT: 15px;\"><img src=\"");
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







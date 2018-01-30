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




<script Language="JavaScript">
function processForm(form){
var xf=0;
hc=new Array(15);
var roll_call=hc.length;
for (i=roll_call;i>0;i--)
{hc[i-1]=0};
if (form.c1[1].checked==1) hc[0]=1;
if (form.c2[1].checked==1) hc[1]=1;
if (form.c3[1].checked==1) hc[2]=1;
if (form.c4[1].checked==1) hc[3]=1;
if (form.c5[1].checked==1) hc[4]=1;
if (form.c6[1].checked==1) hc[5]=1;
if (form.c7[1].checked==1) hc[6]=1;
if (form.c8[1].checked==1) hc[7]=1;
if (form.c9[1].checked==1) hc[8]=1;
if (form.c10[1].checked==1) hc[9]=1;
if (form.c11[1].checked==1) hc[10]=1;
if (form.c12[1].checked==1) hc[11]=1;
if (form.c13[1].checked==1) hc[12]=1;
if (form.c14[1].checked==1) hc[13]=1;
if (form.c15[1].checked==1) hc[14]=1;
for (i=roll_call;i>0;i--)
{xf+=hc[i-1]};  
form.answer.value="你的得分为"+xf+"分";
}</script>
        

<form name="see">
  <div align="center"><center><table border="0" cellpadding="10" cellspacing="0" width="886" height="1" bgcolor="#FFFFFF">
    <tr>
      <td height="49" align="center" style="background-color: #DCF2EE"><div align="left"><p><span style="font-size: 15px; line-height: 20px">1、他是否经常咬手指？　<input name="c1" type="radio" value="12">是。　<input name="c1" type="radio" value="32">否。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">2、他有没有抖动腿部的习惯？　<input name="c2" type="radio" value="11">是。&nbsp;  
          <input name="c2" type="radio" value="31">否。  
      </span></p> 
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">3、他是否经常拨弄头发？　<input name="c3" type="radio" value="11">是。&nbsp;&nbsp;<input name="c3" type="radio" value="31">否。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">4、他是否经常揉鼻子？　<input name="c4" type="radio" value="13">是。&nbsp;&nbsp;<input name="c4" type="radio" value="33">否。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">5、他是否喜欢低着头走路？　<input name="c5" type="radio" value="14">是。&nbsp;&nbsp;<input name="c5" type="radio" value="34">否。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">6、他是否从不说“哎呦”等没有具体意思的助语词？　<input name="c6" type="radio" value="15">是。&nbsp;&nbsp;<input name="c6" type="radio" value="35">否。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">7、他是否不由自主地用手轻敲桌面？　<input name="c7" type="radio" value="16">是。&nbsp;&nbsp;<input name="c7" type="radio" value="36">否。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">8、他是否喜欢雪糕、蛋糕等甜食？（正在减肥除外）　<input name="c8" type="radio" value="17">是。&nbsp;&nbsp;<input name="c8" type="radio" value="37">否。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">9、他笑的时候，笑声或动作是否有点夸张?　<input name="c9" type="radio" value="18">是。&nbsp;&nbsp;<input name="c9" type="radio" value="38">否。 </span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">10、他在思索时，是否喜欢双手抱在胸前?　<input name="c10" type="radio" value="19">是。&nbsp;&nbsp;<input name="c10" type="radio" value="39">否。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">11、他是否习惯盘腿而坐?　<input name="c11" type="radio" value="1">是。&nbsp;&nbsp;<input name="c11" type="radio" value="3">否。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">12、他坐公共汽车时，是否总带着睡意，希望进入梦乡?　<input name="c12" type="radio" value="1">是。&nbsp;&nbsp;<input name="c12" type="radio" value="3">否。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">13、别人搭他的肩膀，他是否毫不在意，完全沒有不自然的模样?　<input name="c13" type="radio" value="2">是。&nbsp;&nbsp;<input name="c13" type="radio" value="3">否。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">14、与他共餐，他是否花很多时间研究餐牌上的食品?　<input name="c14" type="radio" value="1">是。&nbsp;&nbsp;<input name="c14" type="radio" value="3">否。</span></p>
      </div><div align="left"><p><span style="font-size: 15px; line-height: 20px">15、他喜欢在饭后用牙签吗?　<input name="c15" type="radio" value="1">是。&nbsp;&nbsp;<input name="c15" type="radio" value="3">否。</span></p>
      </div><div align="center">
                              <p>
                                <input type="button" value="都选择完了，结果怎样?" onClick="processForm(this.form)" style="font-size: 15px; font-family: 宋体">
                                <input type="text" name="answer" size="20" style="font-family: 宋体; font-size: 15px; color: rgb(255,0,0)">
                              <p>说明 <br>
                                分数为0--4:他喜欢懂得思考的女性，不用他天天担心。<br>
                                透过刚才对生活细节的测验和分析，你的男朋友属于典型的「理性动物」。凡事讲求逻辑，做事或分析问题都颇具自信。因此，他期望女朋友的独立性较強，懂得照顾自己，因此，太蠢或依赖性太強的女人都对他毫无吸引力。当然，狂妄自大並不等同独立性強，他喜欢女朋友做事井井有条，有次序、有计划，却并非只足一股自以为是的臭脾气。 
                              <p>分数为5--7:他喜欢你关心世界，对万物保持有好奇心。<br>
                                根据你刚才所提供的资料，看來，你的男朋友好奇心比一般人强。所以，这类男人也喜欢女朋友关心世界，对世事保持好奇心，这样，才能跟他的思路合拍。倘若你的兴趣狹窄，他容易感到与你格格不入。当然，这并不代表你必须是一位博学多才的女子，纵使你是井底之蛙，只要你拥有好学、喜欢发问的性格，他仍然不会嫌弃你。 
                              </p>
                              <p>分数为8--11:他需要一个开朗、活泼的女子相伴左右。<br>
                                你的男朋友做人的宗旨只有一个，就是「寻找快乐」。当然，违背良心的事，他仍是坚持不做。但是，他会感到人生无非是寻找快乐、活得开心。他选择的终生伴侣必须也是性格开朗，懂得寻找和享受生活乐趣的女子，能与他一起在人生路途上快快乐乐地生活。 
                              </p>
                              <p>分数为12--15:不妨娇羞、柔弱一点，他喜欢女朋友听询他的意见。<br>
                                他有点大男人主义，带有保守的性格。他认为「男人要时刻保护女人」，加上他本身又懂得照顾別人，因此，他心目中理想的女朋友必须显得柔弱一点，好让他发挥其「男性本能」。沒有错的话，每当你愁眉莫展之时，他必然細心慰问，因为能够替女性解决烦忧是最令他感到骄傲的事，要博取他的欢心，不妨展露你弱不禁风的一面。 
                                <br>
                              </p>
                              <p>&nbsp; </div>
      </td>
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

<!-- 粘贴区域 -->










    </div>

      <!-- <li class="xf2">  </li> -->
</div>
<?php include('footer.php'); ?>







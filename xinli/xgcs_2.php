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
var xf=0;
hc=new Array(50);
var roll_call=hc.length;
for (i=roll_call;i>0;i--)
{hc[i-1]=0};
//loops through the radio buttons finding out which one is selected
if (form.c0[0].checked==1) hc[0]=2;
if (form.c0[1].checked==1) hc[0]=1;
if (form.c1[1].checked==1) hc[1]=1;
if (form.c1[2].checked==1) hc[1]=2;
if (form.c2[0].checked==1) hc[2]=2;
if (form.c2[1].checked==1) hc[2]=1;
if (form.c3[2].checked==1) hc[3]=2;
if (form.c3[1].checked==1) hc[3]=1;
if (form.c4[0].checked==1) hc[4]=2;
if (form.c4[1].checked==1) hc[4]=1;
if (form.c5[1].checked==1) hc[5]=1;
if (form.c5[2].checked==1) hc[5]=2;
if (form.c6[0].checked==1) hc[6]=2;
if (form.c6[1].checked==1) hc[6]=1;
if (form.c7[1].checked==1) hc[7]=1;
if (form.c7[2].checked==1) hc[7]=2;
if (form.c8[0].checked==1) hc[8]=2;
if (form.c8[1].checked==1) hc[8]=1;
if (form.c9[1].checked==1) hc[9]=1;
if (form.c9[2].checked==1) hc[9]=2;
if (form.c10[0].checked==1) hc[10]=2;
if (form.c10[1].checked==1) hc[10]=1;
if (form.c11[1].checked==1) hc[11]=1;
if (form.c11[2].checked==1) hc[11]=2;
if (form.c12[0].checked==1) hc[12]=2;
if (form.c12[1].checked==1) hc[12]=1;
if (form.c13[1].checked==1) hc[13]=1;
if (form.c13[2].checked==1) hc[13]=2;
if (form.c14[0].checked==1) hc[14]=2;
if (form.c14[1].checked==1) hc[14]=1;
if (form.c15[1].checked==1) hc[15]=1;
if (form.c15[2].checked==1) hc[15]=2;
if (form.c16[0].checked==1) hc[16]=2;
if (form.c16[1].checked==1) hc[16]=1;
if (form.c17[1].checked==1) hc[17]=1;
if (form.c17[2].checked==1) hc[17]=2;
if (form.c18[0].checked==1) hc[18]=2;
if (form.c18[1].checked==1) hc[18]=1;
if (form.c19[1].checked==1) hc[19]=1;
if (form.c19[2].checked==1) hc[19]=2;
if (form.c20[0].checked==1) hc[20]=2;
if (form.c20[1].checked==1) hc[20]=1;
if (form.c21[1].checked==1) hc[21]=1;
if (form.c21[2].checked==1) hc[21]=2;
if (form.c22[0].checked==1) hc[22]=2;
if (form.c22[1].checked==1) hc[22]=1;
if (form.c23[1].checked==1) hc[23]=1;
if (form.c23[2].checked==1) hc[23]=2;
if (form.c24[0].checked==1) hc[24]=2;
if (form.c24[1].checked==1) hc[24]=1;
if (form.c25[1].checked==1) hc[25]=1;
if (form.c25[2].checked==1) hc[25]=2;
if (form.c26[0].checked==1) hc[26]=2;
if (form.c26[1].checked==1) hc[26]=1;
if (form.c27[1].checked==1) hc[27]=1;
if (form.c27[2].checked==1) hc[27]=2;
if (form.c28[0].checked==1) hc[28]=2;
if (form.c28[1].checked==1) hc[28]=1;
if (form.c29[1].checked==1) hc[29]=1;
if (form.c29[2].checked==1) hc[29]=2;
if (form.c30[0].checked==1) hc[30]=2;
if (form.c30[1].checked==1) hc[30]=1;
if (form.c31[1].checked==1) hc[31]=1;
if (form.c31[2].checked==1) hc[31]=2;
if (form.c32[0].checked==1) hc[32]=2;
if (form.c32[1].checked==1) hc[32]=1;
if (form.c33[1].checked==1) hc[33]=1;
if (form.c33[2].checked==1) hc[33]=2;
if (form.c34[0].checked==1) hc[34]=2;
if (form.c34[1].checked==1) hc[34]=1;
if (form.c35[1].checked==1) hc[35]=1;
if (form.c35[2].checked==1) hc[35]=2;
if (form.c36[0].checked==1) hc[36]=2;
if (form.c36[1].checked==1) hc[36]=1;
if (form.c37[1].checked==1) hc[37]=1;
if (form.c37[2].checked==1) hc[37]=2;
if (form.c38[0].checked==1) hc[38]=2;
if (form.c38[1].checked==1) hc[38]=1;
if (form.c39[1].checked==1) hc[39]=1;
if (form.c39[2].checked==1) hc[39]=2;
if (form.c40[0].checked==1) hc[40]=2;
if (form.c40[1].checked==1) hc[40]=1;
if (form.c41[1].checked==1) hc[41]=1;
if (form.c41[2].checked==1) hc[41]=2;
if (form.c42[0].checked==1) hc[42]=2;
if (form.c42[1].checked==1) hc[42]=1;
if (form.c43[1].checked==1) hc[43]=1;
if (form.c43[2].checked==1) hc[43]=2;
if (form.c44[0].checked==1) hc[44]=2;
if (form.c44[1].checked==1) hc[44]=1;
if (form.c45[1].checked==1) hc[45]=1;
if (form.c45[2].checked==1) hc[45]=2;
if (form.c46[0].checked==1) hc[46]=2;
if (form.c46[1].checked==1) hc[46]=1;
if (form.c47[1].checked==1) hc[47]=1;
if (form.c47[2].checked==1) hc[47]=2;
if (form.c48[0].checked==1) hc[48]=2;
if (form.c48[1].checked==1) hc[48]=1;
if (form.c49[1].checked==1) hc[49]=1;
if (form.c49[2].checked==1) hc[49]=2;
for (i=roll_call;i>0;i--)
{xf+=hc[i-1]};  
form.answer.value="你的性向指数为"+xf;
}</script>



<form name="see">
  <div align="center"><center><table border="0" cellpadding="10" cellspacing="0" width="886" height="1" bgcolor="#FFFFFF">
    <tr>
      <td height="1" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">1、与观点不同的人也能友好往来。<input
      name="c0" type="radio" value="12">符合。<input name="c0" type="radio" value="32">难以回答。<input
      type="radio" name="c0" value="V1">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="1" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">2、你读书较慢，力求完全看懂。<input
      name="c1" type="radio" value="13">符合。<input name="c1" type="radio" value="33">难以回答。<input
      type="radio" name="c1" value="V2">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="19" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">3、你做事较快，但较粗糙。　<input
      name="c2" type="radio" value="14">符合。<input name="c2" type="radio" value="34">难以回答。<input
      type="radio" name="c2" value="V3">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="19" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">4、你经常分析自己、研究自己。<input
      name="c3" type="radio" value="15">符合。<input name="c3" type="radio" value="35">难以回答。<input
      type="radio" name="c3" value="V4">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="19" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">5、生气时，你总不加抑制地把怒气发泄出来。<input
      name="c4" type="radio" value="16">符合。<input name="c4" type="radio" value="36">难以回答。<input
      type="radio" name="c4" value="V5">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="19" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">6、在人多的场合你总是力求不引人注意。　<input
      name="c5" type="radio" value="17">符合。<input name="c5" type="radio" value="37">难以回答。<input
      type="radio" name="c5" value="V6">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="19" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">7、你不喜欢写日记。　<input
      name="c6" type="radio" value="18">符合。<input name="c6" type="radio" value="38">难以回答。<input
      type="radio" name="c6" value="V7">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="19" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">8、你待人总是很小心。<input
      name="c7" type="radio" value="19">符合。<input name="c7" type="radio" value="39">难以回答。<input
      type="radio" name="c7" value="V8">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="19" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">9、你是个不拘小节的人。<input
      name="c8" type="radio" value="110">符合。<input name="c8" type="radio" value="310">难以回答。<input
      type="radio" name="c8" value="V9">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="19" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">10、你不敢在众人面前发表演说。<input
      name="c9" type="radio" value="111">符合。<input name="c9" type="radio" value="311">难以回答。<input
      type="radio" name="c9" value="V10">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="19" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">11、你能够做好领导团体的工作。　<input
      name="c10" type="radio" value="112">符合。<input name="c10" type="radio" value="312">难以回答。<input
      type="radio" name="c10" value="V11">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="19" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">12、你常会猜疑别人。　<input
      name="c11" type="radio" value="113">符合。<input name="c11" type="radio" value="313">难以回答。<input
      type="radio" name="c11" value="V12">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="19" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">13、受到表扬后你会工作得更努力。　<input
      name="c12" type="radio" value="114">符合。<input name="c12" type="radio" value="314">难以回答。<input
      type="radio" name="c12" value="V13">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="19" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">14、你希望过平静、轻松的生活。　<input
      name="c13" type="radio" value="115">符合。<input name="c13" type="radio" value="315">难以回答。<input
      type="radio" name="c13" value="V14">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="19" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">15、你从不考虑自己几年后的事情。　　<input
      name="c14" type="radio" value="116">符合。<input name="c14" type="radio" value="316">难以回答。<input
      type="radio" name="c14" value="V15">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="19" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">16、你常会一个人想入非非。　　<input
      name="c15" type="radio" value="117">符合。<input name="c15" type="radio" value="317">难以回答。<input
      type="radio" name="c15" value="V16">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="19" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">17、你喜欢经常变换工作。　　<input
      name="c16" type="radio" value="118">符合。<input name="c16" type="radio" value="318">难以回答。<input
      type="radio" name="c16" value="V17">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="19" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">18、你常常回忆自己过去的生活。　　<input
      name="c17" type="radio" value="119">符合。<input name="c17" type="radio" value="319">难以回答。<input
      type="radio" name="c17" value="V18">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="19" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">19、你很喜欢参加集体娱乐活动。　<input
      name="c18" type="radio" value="120">符合。<input name="c18" type="radio" value="320">难以回答。<input
      type="radio" name="c18" value="V19">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="19" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">20、你总是三思而后行。　　<input
      name="c19" type="radio" value="121">符合。<input name="c19" type="radio" value="321">难以回答。<input
      type="radio" name="c19" value="V20">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="12" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">21、使用金钱时你从不精打细算。<input
      name="c20" type="radio" value="122">符合。<input name="c20" type="radio" value="322">难以回答。<input
      type="radio" name="c20" value="V21">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="12" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">22、你讨厌在工作时有人在旁边观看。<input
      name="c21" type="radio" value="123">符合。<input name="c21" type="radio" value="323">难以回答。<input
      type="radio" name="c21" value="V22">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="12" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">23、你始终以乐观的态度对待人生。<input
      name="c22" type="radio" value="124">符合。<input name="c22" type="radio" value="324">难以回答。<input
      type="radio" name="c22" value="V23">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="12" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">24、你总是独立思考回答问题。<input
      name="c23" type="radio" value="125">符合。<input name="c23" type="radio" value="325">难以回答。<input
      type="radio" name="c23" value="V24">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">25、你不怕应付麻烦的事情。<input
      name="c24" type="radio" value="126">符合。<input name="c24" type="radio" value="326">难以回答。<input
      type="radio" name="c24" value="V25">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">26、对陌生人你从不轻易相信。<input
      name="c25" type="radio" value="127">符合。<input name="c25" type="radio" value="327">难以回答。<input
      type="radio" name="c25" value="V26">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">27、你几乎从不主动订学习或工作计划。<input
      name="c26" type="radio" value="128">符合。<input name="c26" type="radio" value="328">难以回答。<input
      type="radio" name="c26" value="V27">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">28、你不善于结交朋友。<input
      name="c27" type="radio" value="129">符合。<input name="c27" type="radio" value="329">难以回答。<input
      type="radio" name="c27" value="V28">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">29、你的意见和观点常会发生变化。<input
      name="c28" type="radio" value="130">符合。<input name="c28" type="radio" value="330">难以回答。<input
      type="radio" name="c1" value="V29">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">30、你很注意交通安全。<input
      name="c29" type="radio" value="131">符合。<input name="c29" type="radio" value="331">难以回答。<input
      type="radio" name="c29" value="V30">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="12" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">31、你肚里有话藏不住，总想对人说出来。<input
      name="c30" type="radio" value="132">符合。<input name="c30" type="radio" value="332">难以回答。<input
      type="radio" name="c30" value="V31">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">32、你常有自卑感。<input
      name="c31" type="radio" value="133">符合。<input name="c31" type="radio" value="333">难以回答。<input
      type="radio" name="c31" value="V32">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">33、你不大会注意自己的服装是否整洁。<input
      name="c32" type="radio" value="134">符合。<input name="c32" type="radio" value="334">难以回答。<input
      type="radio" name="c32" value="V33">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">34、你很会关心别人会对你有什么看法。<input
      name="c33" type="radio" value="135">符合。<input name="c33" type="radio" value="33">难以回答。<input
      type="radio" name="c33" value="V34">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">35、和别人在一起时，你的话总比别人多。<input
      name="c34" type="radio" value="136">符合。<input name="c34" type="radio" value="336">难以回答。<input
      type="radio" name="c34" value="V35">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">36、你喜欢独自一个人在房内休息。<input
      name="c35" type="radio" value="137">符合。<input name="c35" type="radio" value="337">难以回答。<input
      type="radio" name="c35" value="V36">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">37、你的情绪很容易波动。<input
      name="c36" type="radio" value="138">符合。<input name="c36" type="radio" value="338">难以回答。<input
      type="radio" name="c36" value="V37">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">38、看到房间里杂乱无章，你就静不下心来。<input
      name="c37" type="radio" value="139">符合。<input name="c37" type="radio" value="339">难以回答。<input
      type="radio" name="c37" value="V38">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">39、遇到不懂的问题你就去问别人。<input
      name="c38" type="radio" value="140">符合。<input name="c38" type="radio" value="340">难以回答。<input
      type="radio" name="c38" value="V39">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">40、旁边若有说话声或广播声，你总无法静下心来学习。<input
      name="c39" type="radio" value="141">符合。<input name="c39" type="radio" value="341">难以回答。<input
      type="radio" name="c39" value="V40">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">41、你的口头表达能力还不错。<input
      name="c40" type="radio" value="142">符合。<input name="c40" type="radio" value="342">难以回答。<input
      type="radio" name="c40" value="V41">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">42、你是一个沉默寡言的人。<input
      name="c41" type="radio" value="143">符合。<input name="c41" type="radio" value="343">难以回答。<input
      type="radio" name="c41" value="V42">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">43、在一个新的环境里你很快就能熟悉了。<input
      name="c42" type="radio" value="144">符合。<input name="c42" type="radio" value="344">难以回答。<input
      type="radio" name="c42" value="V43">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">44、要你同陌生人打交道，常感到为难。<input
      name="c43" type="radio" value="145">符合。<input name="c43" type="radio" value="345">难以回答。<input
      type="radio" name="c43" value="V44">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">45、常会过高地估计自己的能力。<input
      name="c44" type="radio" value="146">符合。<input name="c44" type="radio" value="346">难以回答。<input
      type="radio" name="c44" value="V45">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">46、遭到失败后你总是忘却不了。<input
      name="c45" type="radio" value="147">符合。<input name="c45" type="radio" value="347">难以回答。<input
      type="radio" name="c45" value="V46">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">47、你感到脚踏实地地干比探索理论原理更重要。<input
      name="c46" type="radio" value="148">符合。<input name="c46" type="radio" value="348">难以回答。<input
      type="radio" name="c46" value="V47">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">48、你很注意同伴们的工作或学习成绩。<input
      name="c47" type="radio" value="149">符合。<input name="c47" type="radio" value="349">难以回答。<input
      type="radio" name="c47" value="V48">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="24" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">49、比起小说和看电影来，你更喜欢郊游和跳舞。<input
      name="c48" type="radio" value="150">符合。<input name="c48" type="radio" value="350">难以回答。<input
      type="radio" name="c48" value="V49">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="12" style="background-color: #DCF2EE"><span style="font-family: 宋体; font-size: 15pt">50、买东西时，你常常犹豫不决。<input
      name="c49" type="radio" value="151">符合。<input name="c49" type="radio" value="351">难以回答。<input
      type="radio" name="c49" value="V50">不符合。</span></td>
    </tr>
    <tr>
      <td width="560" height="25" align="center" style="background-color: #DCF2EE"><p><span
      style="font-family: 宋体; font-size: 15pt">
                              <input type="button"
      value="都选择完了，结果怎样?" onClick="processForm(this.form)"
      style="font-size: 15pt; font-family: 宋体">
                              <input type="text" name="answer" size="24"
      style="font-family: 宋体; font-size: 15pt; color: rgb(255,0,0)">
                              </span> </p>
                            <p>说明 <br>
                              性向指数在0与100之间。由性向指数的数值就可以了解一个人内倾或外倾的程度。 </p>
                            <table width="100%" border="0" cellspacing="0">
                              <tr>
                                <td width="16%" height="39">性向指数<br></td>
                                <td width="16%">0--19<br></td>
                                <td width="13%">20--39<br></td>
                                <td width="19%">40--59<br></td>
                                <td width="15%">60--79<br></td>
                                <td width="21%"><br>
                                  80--100</td>
                              </tr>
                              <tr>
                                <td height="53">性格倾向<br></td>
                                <td>内向<br></td>
                                <td>偏内向<br></td>
                                <td>中间型(混合型)<br></td>
                                <td>偏外向<br></td>
                                <td>外向<br></td>
                              </tr>
                            </table>
                            <p><br>
                              <br>
                            </p>
                            <p>&nbsp; </p></td>
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







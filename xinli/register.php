<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>注册</title>
<?php 
  include('head.php');
  include('include/conf.php');
  require 'include/common.inc.php';


if(isset($_GET['action']) && $_GET['action'] = 'register') {
  //先判断验证码是否正确
  //_check_code($_POST['code'], $_SESSION['code']);
  
  //创建一个空数组，用来存放提交过来的合法数据
  $_data = Array();
  // $_data['uniqid'] = _check_uniqid($_POST['uniqid'], $_SESSION['uniqid']);
  $_data['active'] = _generate_uniqid(); //生成一个唯一id码作为激活码
  $_data['username'] = _check_username($_POST['username'], 2, 20);
  $_data['password'] = _check_password($_POST['password'], $_POST['notpassword'], 6);
  $_data['question'] = _check_question($_POST['question'], 2, 20);
  $_data['answer'] = _check_answer($_POST['answer'], $_POST['question'], 2, 20);
  $_data['sex'] = $_POST['sex'];
  $_data['face'] = $_POST['face'];
  $_data['email'] = _check_email($_POST['email'], 6, 40);
  //print_r($_data);

  //先检查用户名是否已经被注册过
  $_sql = "SELECT us_name FROM user WHERE us_name = '{$_data['username']}' LIMIT 1";
  $_result = mysql_query($_sql);
  if(mysql_fetch_array($_result)) {
    _alert_back('对不起，此用户已被注册！');
    mysql_free_result($_result);
  }
  
  //若数据不重复，则插入数据
  $_sql = "INSERT INTO user(us_uniqid, us_active, us_name, us_password, us_question, us_answer, us_sex, us_face, us_email, us_reg_time, us_login_time, us_last_ip)
    VALUES('Null', 'Null', '{$_data['username']}', '{$_data['password']}', '{$_data['question']}', '{$_data['answer']}', '{$_data['sex']}',
      '{$_data['face']}','{$_data['email']}', NOW(), NOW(), '{$_SERVER["REMOTE_ADDR"]}')";
  mysql_query($_sql);
  
  //如果成功插入一条数据，并跳转到激活页面
  if(mysql_affected_rows() == 1) {
    //关闭数据库
    mysql_close();
    unset($_SESSION['uniqid']);
    //注册成功后，跳转到账号激活页面,同时将激活码也传递过去
    _location('恭喜您，注册成功！', 'index.php');
  } else {
    //关闭数据库
    mysql_close();
    unset($_SESSION['uniqid']);
    //注册失败后，重新跳转到注册页面
    _location('很遗憾，注册失败！', 'register.php');
  } 
} 
?>



<script type="text/javascript" src="assets/css/style.css"></script>
</head>
<body>

<div style="position: absolute;left: 700px;top:150px;padding: 10px;margin: 10px;line-height: 40px;font-size: 20px;">
  <span style="text-align: center"><h2>会员注册</h2></span>
  <form name="register" action="?action=register" method="post">
    <input type="hidden" name="uniqid" value="<?=$_uniqid?>" />
    <dl>
      <span style="text-align: center;font-size: 22px">   <dt>请认真填写以下内容</dt></span>
      <span style="float: left"><dd>用 户 名：<input type="text" name="username" class="text" > (*必填，2-20位)</dd>
      <dd>密&nbsp; &nbsp;&nbsp;&nbsp; 码：<input type="password" name="password" class="text"/> (*必填，至少六位)</dd>
      <dd>性&nbsp; &nbsp;&nbsp;&nbsp; 别：<input type="radio" name="sex" value="男" checked="checked"/>男
        <input type="radio" name="sex" value="女" />女
      </dd>
      <dd>密码确认：<input type="password" name="notpassword" class="text"/> (*必填，同上)</dd>
      <dd>密码提示：<input type="text" name="question" class="text"/> (*必填，2-20位)</dd>
      <dd>问题回答：<input type="text" name="answer" class="text"/> (*必填，2-20位)</dd>
      
</span>
      
      <dd>电子邮件：<input type="text" name="email" class="text"/> (*必填，6-40位)</dd>
        <span style="text-align: center">  <dd><input type="submit" style="width: 60px;height: 40px;margin-top: 30px;font-size: 21px;" class="submit" value="注册"/></dd></span>
      
    </dl> 
  </form>
</div>

</body>
</html>
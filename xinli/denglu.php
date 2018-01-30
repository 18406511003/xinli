<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>登陆</title>

<?php 
  include('head.php');
  include('include/conf.php');
  require 'include/common.inc.php';


if(isset($_GET['action']) && $_GET['action'] == 'login') {
  //先判断验证码是否正确
  //_check_code($_POST['code'], $_SESSION['code']);
  
  //获得用户名，密码，保留时间信息
  $_username = $_POST['username'];
  $_password = sha1($_POST['password']);
  $_time = $_POST['time'];
  
  //将用户名与密码和数据库进行对比(注意激活码)
  $_sql = "SELECT us_name, us_uniqid,us_active,us_level FROM user WHERE us_name='$_username' AND us_password='$_password' LIMIT 1";
  $_result = mysql_query($_sql);
  if(!!$_row = mysql_fetch_array($_result, MYSQL_ASSOC)) {
    $_data = array();
    $_data['active'] = $_row['us_active'];
    $_data['username'] = $_row['us_name'];
    $_data['uniqid'] = $_row['us_uniqid'];
    $_data['level'] = $_row['us_level'];
    mysql_free_result($_result);
    //如果激活码存在，则跳转到激活页面

      //将用户名和唯一标识符存入cookie
      _set_login_cookies($_data['username'], $_data['uniqid'], $_time);
      //如果是管理员就将管理员标志存入到session中去
      $_SESSION['iiid']=1;
      $_SESSION['uuser']=$_username;
      //更新用户的登录时间
      $_data['login_time'] = _date();
      $_sql = "UPDATE user SET us_login_time='{$_data['login_time']}' WHERE us_name='{$_data['username']}'";
      mysql_query($_sql);
      mysql_close();
      _location('亲爱的'.$_data['username'].'，欢迎回来！', 'index.php');
  } else {
    mysql_close();
    _location('用户名或密码不正确！', 'denglu.php');
  } 
}

?>


<?php 
  include ROOT_PATH.'/import.inc.php';
?>
</head>
<body>
<!-- 包含头部文件 -->

<div id="login" style="position: relative;left: 40%;text-align: center;width: 20%;font-size: 26px"><br>
  <h2><strong>会员登录</strong></h2>
  <form name="login" action="?action=login" method="post">
    <dl>
      <dd>用 户 名：<input type="text" name="username" class="text"/></dd>
      <dd>密&nbsp;&nbsp;&nbsp; &nbsp; 码：<input type="password" name="password" class="text"/></dd>

      <!-- <dd> -->
       &nbsp; <input type="submit" class="button" value="登录"/>
      <!-- </dd> -->
    </dl> 
  </form>
</div>

</body>
</html>
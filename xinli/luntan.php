

<style> 
.divcss5{ border:1px solid #000; width:100%; height:100px} 
.divcss5 img{width:100%; height:100px} 
</style> 
<?php 
include('head.php'); 
include('include/conf.php');
if (empty($_SESSION['iiid'])) {
  header('location:denglu.php');
}

if(isset($_GET['action'])) {
  
  $_sql = "SELECT us_uniqid,last_wtopic_time FROM user WHERE us_name='{$_SESSION['uuser']}' LIMIT 1";
  // echo $_sql;
  // echo $_sql;
  $_result = mysql_query($_sql);
  $_row = mysql_fetch_array($_result, MYSQL_ASSOC);// echo $_COOKIE['uniqid'].'|'.$_row['us_uniqid'];
    $_data = array();
    $_data['last_wtopic_time'] = $_row['last_wtopic_time']; //$_data['last_wtopic_time']保存的是上一次该用户新建主题的时间戳    
    mysql_free_result($_result);
    
    
    $_data['username'] = $_SESSION['uuser'];
    // $_data['type'] = $_POST['type'];
    $_data['title'] = $_POST['title'];
    $_data['content'] = $_POST['content'];
  
    $_sql = "INSERT INTO topic(top_type,top_title,top_content,us_name,top_create_date,top_last_access_date) "
        ."VALUES(2,'{$_data['title']}','{$_data['content']}','{$_data['username']}',NOW(),NOW())";
    // echo $_sql;
    mysql_query($_sql);

        // if(mysql_affected_rows() == 1) {
    // echo "done!!";
    echo "<script>alert('您已成功创建一个主题！')</script>";
   header('location:luntan.php');
     
  // }else{
  //       echo "<script>alert('异常！！')</script>";

  }



?>




<div class="backgg" style="    background-image: url(assets/img/nvhai.jpg);
">
</div>


<?php  include('include/conf.php'); 
$sql = "SELECT top_id,top_title,top_type,top_readcount,top_replycount FROM topic WHERE reply_for=0 ORDER BY top_last_access_date DESC;";
$_result = mysql_query($sql);
// echo mysql_num_rows($_result);
// $school = mysql_fetch_assoc($_result);
?>
 



<div class= 'xinwencontent' id='xinwen'>
      <div class="biaoti">
      <span class="biaotifont">心理论坛<button id="lland" style="float: right;font-size: 20px;color: black;font-family: 宋体" onclick="liuyan()"  >发布主题</button></span><br></br>
    </div>  

<div>
  <br>



 <?php
      $_topic = array();    
      $i=0;
      while(!!$_row = mysql_fetch_array($_result, MYSQL_ASSOC)) {
        $_topic['id'] = $_row['top_id'];
        $_topic['type'] = $_row['top_type'];
        $_topic['readcount'] = $_row['top_readcount'];
        $_topic['replycount'] = $_row['top_replycount'];
        $_topic['title'] = $_row['top_title'];
        // $_topic = _html_chars($_topic);
        echo '<li style="text-indent:2em;list-style:none">
          <a href="s_topic.php?id='.$_topic['id'].'">'. $_topic['title'] .'</a>  <span style="float:right">浏览(<strong>'.$_topic['readcount'].'</strong>) '
          .'留言(<strong>'.$_topic['replycount'].'</strong>)</span> </li>';
      }
      mysql_free_result($_result);
      mysql_close();
    ?>

<!-- <?php
      $_topic = array();    
      while(!!$_row = mysql_fetch_array($_result,MYSQL_ASSOC)) {
         print_r($_row);
      $_topic['id'] = $_row['top_id'];
        $_topic['type'] = $_row['top_type'];
        $_topic['readcount'] = $_row['top_readcount'];
        $_topic['replycount'] = $_row['top_replycount'];
        $_topic['title'] = $_row['top_title'];
        // $_topic = _html_chars($_topic);

        echo '<li style="text-indent:2em;list-style:none">
          <a href="s_topic.php?id='.$_topic['id'].'">'. $_topic['title'] .'</a>  <span style="float:right">浏览(<strong>'.$_topic['readcount'].'</strong>) '
          .'留言(<strong>'.$_topic['replycount'].'</strong>)</span> </li>';
      }
      mysql_free_result($_result);
      ?> -->
</div>
    


 
<div class="page" style="margin-top: 20px;text-align: center;">
      <a href="#" style="color: red">1</a>
      <a href="#">2</a>
      <a href="#">3</a>
      <a href="#">4</a>
      <a href="#">5</a>
      <a href="#">6</a>
      <a href="#">7</a>
      <a href="#">8</a>
      <a href="#">9</a>
    </div>
    <!-- </div> -->
    

      <!-- <li class="xf2">  </li> -->
</div>



<div id="landing" style="display:none;position: relative;left: 25%;top: 10%;width: 50%;height: 50%;text-align: center;">
  <h2>新建主题</h2>
  <form method="post" name="w_topic" action="?action=huati">
    <dl>
      <dt>请认真填写一下内容</dt>
      
      <dd>标&nbsp; &nbsp; 题：
        <input type="text" name="title" class="text" /> (*必填，2-40位)
      </dd>
      
      <dd>内&nbsp; &nbsp; 容：
       <textarea name="content" rows="9" style="width:38%"></textarea>
      </dd>
      <dd>       <input type="submit" class="submit" value="新建主题" />
</dd>
    </dl>
  </form>
</div>











<?php include('footer.php'); ?>

<?php
include('include/conf.php');
include('include/common.inc.php');



if(isset($_GET['id'])) { //功能一:获取给定id的主题数据，并显示该主题的相关信息
	// $_sql = "SELECT us_uniqid,last_read_time FROM user WHERE us_name='{$_COOKIE['username']}' LIMIT 1";
	// echo $_sql;
	// $_result = mysql_query($_sql);
	// $_row = mysql_fetch_array($_result, MYSQL_ASSOC);
	// //在将数据写入数据库中时先检查客户端的用户的唯一id号是否与数据库中的保持一致，以防cookie的伪造
	// 	$_data = array(); //此处数组会在页面中显示
	// 	$_data['last_read_time'] = $_row['last_read_time'];
	// 	mysql_free_result($_result);
		
		//选出给定id的主题
		$_sql = "SELECT * FROM topic WHERE top_id={$_GET['id']} AND reply_for=0";
		// echo $_sql;
		$_result = mysql_query($_sql);
		$_row = mysql_fetch_array($_result, MYSQL_ASSOC);
		if($_row) {
			//对于同一个主题，同一个用户间隔半个小时后才能对不是自己创建的主题的浏览量产生影响（使浏览量加一），防止不停刷新对浏览量的影响
			
			//获取主题的数据
			$_data['top_id'] = $_row['top_id'];
			$_data['top_username'] = $_row['us_name'];
			$_data['title'] = $_row['top_title'];
			$_data['type'] = $_row['top_type'];
			$_data['content'] = $_row['top_content'];
			$_data['readcount'] = $_row['top_readcount'];
			$_data['commendcount'] = $_row['top_replycount'];
			$_data['nice'] = $_row['top_nice'];
			$_data['top_last_access_date'] = $_row['top_last_access_date'];
			$_data['top_create_date'] = $_row['top_create_date'];
			$_data['top_last_modify_date'] = $_row['top_last_modify_date'];
			$_data['reply_for'] = $_data['top_id']; //为回复该主题做准备
			mysql_free_result($_result);
	
			//拿出用户名，去查找用户信息
			$_sql = "SELECT us_id,us_sex,us_face,us_email FROM user WHERE us_name='{$_data['top_username']}' LIMIT 1";
			$_result = mysql_query($_sql);
			$_row = mysql_fetch_array($_result, MYSQL_ASSOC);

			//读取主题的所有留言信息
			$_sql = "SELECT top_id FROM topic WHERE reply_for='{$_data['reply_for']}'";
			// echo "2" . $_sql;
			$_result = mysql_query("SELECT us_name,top_type,top_title,top_content,top_create_date FROM topic WHERE 
				reply_for='{$_data['reply_for']}' ORDER BY top_create_date ");
			// echo "SELECT us_name,top_type,top_title,top_content,top_create_date FROM topic WHERE 
			// 	reply_for='{$_data['reply_for']}' ORDER BY top_create_date ASC LIMIT {$GLOBALS['start_row']},{$GLOBALS['page_size']}";
	}
}  


if(isset($_GET['action']) && $_GET['action'] == 'reply') { //功能二：对主题的回复功能
	//验证码判断
	//_check_code($_POST['code'],$_SESSION['code']); 
	
	$_sql = "SELECT us_uniqid,last_reply_time FROM user WHERE us_name='{$_SESSION['uuser']}' LIMIT 1";
	$_result = mysql_query($_sql);
	$_row = mysql_fetch_array($_result, MYSQL_ASSOC);
	//在将数据写入数据库中时先检查客户端的用户的唯一id号是否与数据库中的保持一致，以防cookie的伪造
		//获取提交过来的数据
		$_data['reply_for'] = $_POST['reply_for'];
		$_data['type'] = $_POST['type'];
		$_data['title'] = _check_topic_title($_POST['title'], 2, 40);
		$_data['content'] = _check_topic_content($_POST['content'], 2);
		$_data['username'] = $_SESSION['uuser'];
		
		$_sql = "INSERT INTO topic(top_type,top_title,top_content,us_name,top_create_date,top_last_access_date,reply_for) "
				."VALUES({$_data['type']},'{$_data['title']}','{$_data['content']}','{$_data['username']}',NOW(),NOW(),{$_data['reply_for']})";
		mysql_query($_sql);
		if(mysql_affected_rows() == 1) {
			$_data['time'] = _date();
			//更新用户最近一次的留言时间戳
			mysql_query("UPDATE user SET last_reply_time='{$_data['time']}' WHERE us_name='{$_SESSION['uuser']}'");
			//累积主题的留言数量和主题最近一次被访问的时间
			mysql_query("UPDATE topic SET top_replycount=top_replycount+1,top_last_access_date='{$_data['time']}' WHERE reply_for=0 AND top_id='{$_data['reply_for']}'");
			mysql_close();
			_location('留言成功！','s_topic.php?id='.$_data['reply_for']);
		} else {
			mysql_close();
			_alert_back('留言失败！');
		}	
	} 




?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


<div >
	<span style="text-align: center;color: black;font-family:楷体 ;font-size: 40px;"><li style="text-align: center;">主题详情</li></span>
	
	
	<?php 
	if (1 == 1) {
	?>
	<div class="luntancontent">
		<div > 
 			<div class="user">
				<span>
					1#
				</span><?php echo $_data['top_username']?> | 发表于：<?php echo $_data['top_create_date']?> | 最近访问时间：<?php echo $_data['top_last_access_date']?>
 			</div>
			<span><h3>主题：<?php echo $_data['title']?> </h3></span>
 			<div class="detail">
				<?php echo $_data['content']?>
			</div> 
 			<div class="read"> 
				浏览：(<?php echo $_data['readcount']?>)  &nbsp;留言：(<?php echo $_data['commendcount']?>)
 			</div> 
		</div>
	</div>	
	<?php }?>
	
 	<p class="line"></p>
 	 
 	<?php 
		$_floor = 2; //标记楼层数
		while (!!$_row = mysql_fetch_array($_result)) {
			$_data['reply_username'] = $_row['us_name'];
			$_data['type'] = $_row['top_type'];
			$_data['reply_title'] = $_row['top_title'];
			$_data['reply_content'] = $_row['top_content'];
			$_data['reply_firsttime'] = $_row['top_create_date'];
	
			$_resource = mysql_query("SELECT us_id,us_sex,us_face,us_email FROM user WHERE us_name='{$_data['reply_username']}' LIMIT 1");
			if (!!$_row = mysql_fetch_array($_resource, MYSQL_ASSOC)) {
				//提取留言用户的信息
				$_data['us_id'] = $_row['us_id'];
				$_data['sex'] = $_row['us_sex'];
				$_data['face'] = $_row['us_face'];
				$_data['email'] = $_row['us_email'];
				mysql_free_result($_resource);
				
				//楼层
				if ($GLOBALS['curr_page'] == 1 && $_floor == 2) {
					if ($_data['reply_username'] == $_data['top_username']) { //说明该回复是楼主对其他人的留言的回复
						$_data['username_html'] = $_data['top_username'].'(楼主)';
					} else {
						$_data['username_html'] = $_data['reply_username'].'(沙发)';
					}
				} else {
					$_data['username_html'] = $_data['reply_username'];
				}	
			} else {
				//这个用户可能已经被删除了
			}
			
			//跟帖回复
			if ($_COOKIE['username']) {
				$_data['reply'] = '<span>[<a href="#reply" name="re" title="回复'.($_floor + (($GLOBALS['curr_page']-1) * $GLOBALS['page_size'])).'楼的'.$_data['reply_username'].'">回复</a>]</span>';
			}
	?>
 	
 	<div class="reply">
	
		<div class="content"> 
 			<div class="user">
				<span><?php echo $_floor + (($GLOBALS['curr_page']-1) * $GLOBALS['page_size']);?>#</span>
				<?php echo $_data['username_html']?> | 发表于：<?php echo $_data['reply_firsttime']?>
 			</div>
			<h3><?php echo $_data['reply_title']?>  <?php echo $_data['reply']?></h3>
 			<div class="detail">
				<?php echo $_data['reply_content']?>
			</div> 
			
		</div>
	</div>
 	<p class="line"></p>
 	<?php 
			$_floor ++;		
		}
		mysql_free_result($_result);
		
	?>

	<span style="font-size: 30px;"><li style="position: relative; left: 10%;"><strong>留言</strong></li></span>
	<form method="post" action="?action=reply">
		<input type="hidden" name="reply_for" value="<?=$_data['reply_for']?>" />
		<input type="hidden" name="type" value="<?=$_data['type']?>" />
			<li style="list-style: none; position: relative; left: 12%;color:black">标题：
				<input type="text" name="title" class="text" value="RE2：<?=$_data['title']?>"  /> (*必填，2-40位)
			</li>
			<br>
			<div style="position: relative; left: 12%;width: 80%">
				<textarea name="content" rows="9" style="width: 77%"></textarea>
			</div>
			<br>
			<div style="position: relative; left: 12%;">
				<input type="submit" class="submit" value="发表留言" />
			</div>
	</form>
</div>

<br><br>
</body>
</html>
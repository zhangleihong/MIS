<?php
session_start();
require_once("./nusoapClient.php");
$info = my_info($_SESSION['sid'],$_SESSION['password']);
//判断是否登录
require_once("./fun.php");
if(!isset($_SESSION['sid']) || !isset($_SESSION['password'])){
	echo "<p><h1>Invalid!</h1></p>";
	echo "<p><a href='$url'>Click here to log in.</a></p>";
	exit();
}else{
	check_valid($_SESSION['sid'],$_SESSION['password']);
}
//显示页面
$menu = "up_info";
require_once("./file/top.php");
?>
<!--中间内容部分开始-->
<div class="container" style="padding-top:50px;padding-left:100px;">
	<form class="form-horizontal" enctype="multipart/form-data" method="post" action="do_update_info.php">

	  <div class="form-group">
	    <label for="sid" class="col-sm-2 control-label">学号</label>
	    <div class="col-sm-10">
	      <input type="text" style="width:30%" class="form-control" name="sid" value="<?php echo $info['sid'];?>" disabled>
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label for="name" class="col-sm-2 control-label">姓名</label>
	    <div class="col-sm-10">
	      <input type="text" style="width:30%" class="form-control" name="name" value="<?php echo $info['name'];?>">
	    </div>
	  </div>

	  <div class="form-group">
	  	<label for="sex" class="col-sm-2 control-label">性别</label>
	    <div class="col-sm-10">
	       <label class="radio-inline">
              <input type="radio" name="sex" id="sex1" value="1" <?php if($info['sex']==1) echo "checked";?>> 男
            </label>
            <label class="radio-inline">
              <input type="radio" name="sex" id="sex2" value="0"  <?php if($info['sex']==0) echo "checked";?>> 女
            </label>
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="idnum" class="col-sm-2 control-label">身份证号</label>
	    <div class="col-sm-10">
	      <input type="text" style="width:30%" class="form-control" name="idnum" value="<?php echo $info['idnum'];?>">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="email" class="col-sm-2 control-label">邮箱</label>
	    <div class="col-sm-10">
	      <input type="text" style="width:30%" class="form-control" name="email" value="<?php echo $info['email'];?>">
	    </div>
	  </div>
	  
	  <div class="form-group">
	    <label for="phone" class="col-sm-2 control-label">电话</label>
	    <div class="col-sm-10">
	      <input type="text" style="width:30%" class="form-control" name="phone" value="<?php echo $info['phone'];?>">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="addr" class="col-sm-2 control-label">家庭住址</label>
	    <div class="col-sm-10">
	      <input type="text" style="width:30%" class="form-control" name="addr" value="<?php echo $info['addr'];?>">
	    </div>
	  </div>

	  <div class="form-group">
	    <label for="pic" class="col-sm-2 control-label">上传照片</label>
	    <div class="col-sm-10">
   		  <input type="file" name="pic">
	    </div>
	  </div>

	  <div class="form-group">
	    <div class="col-sm-offset-2 col-sm-10">
	      <button type="submit" class="btn btn-primary">确　认</button>
	    </div>
	  </div>

	</form>
</div>
<!--中间内容部分结束-->
<?php require_once('./file/footer.php');?>
</div><!--container end-->
</body>
</html>
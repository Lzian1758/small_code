<?php
	include("../public/safe.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="../public/layui/css/layui.css">
		<style>
			form
			{
				margin:5% auto;
				width: 80%;
			}
			.layui-form-item
			{
				margin: 10px 0;
			}
			.btn2
			{
				margin: 30px 40%;
			}
		</style>
	</head>
	<body>
		<form class="layui-form" action="addnav.php"method="post">
		  <div class="layui-form-item">
		    <label class="layui-form-label">标题</label>
		    <div class="layui-input-block">
		      <input type="text" name="navtitle" lay-verify="required" placeholder="请输入标题内容" autocomplete="off" class="layui-input">
		    </div>
		  </div>
		  <div class="layui-form-item">
		    <label class="layui-form-label">跳转链接</label>
		    <div class="layui-input-block">
		      <input type="text" name="address"  lay-verify="required" placeholder="请输入链接地址" autocomplete="off" class="layui-input">
		    </div>
		  </div>
		  <div class="layui-form-item">
		    <div class="layui-input-block btn2">
		      <button class="layui-btn" lay-submit lay-filter="formDemo">提交</button>
		    </div>
		  </div>
		</form>
	</body>
</html>
<?php
	include("../../public/common/config.php");
	include("../public/safe.php");
	$sql1="SELECT * FROM navigation ORDER BY id";
	$max="SELECT MAX(id) FROM navigation";
	$maxid=$db->query($max)->fetch_array();
	$result1=$db->query($sql1);
	$navs=[];
	while($nav=$result1->fetch_array())
	{
		$navs[]=$nav;
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="../public/layui/css/layui.css">
		<style>
			button
			{
				margin: 15px;
			}
			body
			{
				padding: 0 10%;
			}
		</style>
	</head>
	<body>
		<button class="layui-btn layui-btn-sm"onclick="location='add.php'"style="float: right;">
		  <i class="layui-icon">&#xe608;</i> 添加
		</button>
		<table class="layui-table"lay-even lay-skin="line" lay-size="lg">
			<colgroup>
			    <col width="200">
			    <col width="200">
			    <col>
			</colgroup>
			<thead>
			<tr>
				<th>排序</th>
				<th>标题</th>
				<th>链接</th>
				<th>状态</th>
				<th>处理</th>
				<th>调序</th>
				<th>删除</th>
			</tr>
			</thead>
			<tbody>
			<?php
			foreach($navs as $nav){
			?>
			<tr>
				<td><?php echo $nav['id'];?></td>
				<td><?php echo $nav['navtitle'];?></td>
				<td><a href="<?php echo $nav['address'];?>"target="_blank"><?php echo $nav['address'];?></a></td>
				<td>
					<?php if($nav['state']==1):?>
						正在使用
					<?php else:?>
						已禁用
					<?php endif;?>
				</td>
				<td>
					<?php if($nav['state']==1):?>
						<button class="layui-btn layui-btn-primary layui-btn-sm"onclick="location='ban.php?id=<?php echo $nav['id'];?>'">
						  禁用
						</button>
					<?php else:?>
						<button class="layui-btn layui-btn-normal layui-btn-sm"onclick="location='start.php?id=<?php echo $nav['id'];?>'">
						  启用
						</button>
					<?php endif;?>
				</td>
				<td>
					<?php if($nav['id']==1):?>
							<a href="downsort.php?id=<?php echo $nav['id'];?>"><i class="layui-icon">&#xe61a;</i></a>
					<?php elseif($nav['id']==$maxid[0]):?>
							<a href="upsort.php?id=<?php echo $nav['id'];?>"><i class="layui-icon"style="color:#1E9FFF ;">&#xe619;</i></a>
					<?php else:?>
							<a href="upsort.php?id=<?php echo $nav['id'];?>"><i class="layui-icon"style="color:#1E9FFF ;">&#xe619;</i></a>&nbsp;&nbsp;
							<a href="downsort.php?id=<?php echo $nav['id'];?>"><i class="layui-icon">&#xe61a;</i></a>
					<?php endif;?>
				</td>
				<td>
					<button class="layui-btn layui-btn-danger layui-btn-sm"onclick="location='deletenav.php?id=<?php echo $nav['id'];?>'">
					  <i class="layui-icon">&#xe640;</i> 删除
					</button>
				</td>
			</tr>
			<?php } ?>
			</tbody>
		</table>

		
		<!--layui.js引入-->
		<script src="admin/public/layui/layui.all.js"></script>	

	</body>
</html>
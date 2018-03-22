<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>国际物流开发者平台API列表</title>
    <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<h1 class="text-center">EBAY国际物流开发者平台API列表</h1>
	<table class="table-responsive table table-condensed table-hover table table-striped">
		<tr>
			<th>接口名称</th>
			<th>接口描述</th>
			<th>文档路径</th>
		</tr>
		<?php foreach($data as $item):?>
		<tr>
			<td><?php echo $item['name']?></td>
			<td><a href="/<?php echo $item['name']?>"><?php echo $item['title']?></a></td>
			<td><?php echo $item['path']?></td>
		</tr>
		<?php endforeach;?>
	</table>
</body>
</html>
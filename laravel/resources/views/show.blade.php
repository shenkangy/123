<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>显示页面</title>
</head>
<body>
<table border="1" class="table">
    <tr>
        <td>编号</td>
        <td>标题</td>
        <td>留言内容</td>
        <td>操作</td>
    </tr>
    <?php foreach($data as $v):?>
    <tr>
        <td><?=$v->id?></td>
        <td><?=$v->title?></td>
        <td><?=$v->message?></td>
        <td><a href="del/{{ $v->id }}">删除</a>|<a href="up/{{ $v->id }}">修改</a></td>
    </tr>
    <?php endforeach;?>
</table>
{!! $data->links() !!}
</body>
</html>
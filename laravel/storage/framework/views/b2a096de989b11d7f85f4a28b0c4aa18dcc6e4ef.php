<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="<?php echo e(URL('/update')); ?>" method="post">
    <table>
        <tr>
            <td>标题：</td>
            <td><input type="text" name="title" value="<?=$arr->title?>"/></td>
        </tr>
        <tr>
            <td>内容：</td>
            <td><textarea name="message" id="" cols="30" rows="10"><?=$arr->message?></textarea></td>
        </tr>
        <tr>
            <td><input type="hidden" name="id" value="<?=$arr->id?>"/></td>
            <td><input type="submit" value="修改"/></td>
        </tr>
    </table>
</form>
</body>
</html>
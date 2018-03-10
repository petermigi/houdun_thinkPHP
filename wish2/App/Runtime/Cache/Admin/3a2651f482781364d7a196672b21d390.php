<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="__PUBLIC__/Css/public.css"> -->
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/public.css" />
    <script type="text/javascript" src="__PUBLIC__/Js/jquery-1.7.2.min.js"></script>
</head>
<body>
    <table class='table'>
        <tr>
                <th>ID</th>
                <th>发布者</th>
                <th>内容</th>
                <th>发布时间</th>
                <th>操作</th>
        </tr>

        <?php if(is_array($wish)): foreach($wish as $key=>$v): ?><tr>
                <td><?php echo ($v["id"]); ?></td>
                <td><?php echo ($v["username"]); ?></td>
                <td><?php echo (replace_phiz($v["content"])); ?></td>               
                <td><?php echo (date('Y-m-d H:i', $v["time"])); ?></td>
                <td>
                    <a href="<?php echo U('Admin/MsgManage/delete',array('id' => $v['id']));?>">删除</a>
                </td>
            </tr><?php endforeach; endif; ?>

        <tr>
            <td colspan='5' align='center'>
                <?php echo ($page); ?>
            </td>
        </tr>
        
    </table>
</body>
</html>
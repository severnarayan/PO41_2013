<?php
require_once('dbconn.php'); // коннект к базе
$id = 1; // id поста, для примера указан в ручную
// запрос значений из таблицы
$data = mysql_fetch_object(mysql_query('SELECT `like`,`unlike` FROM posts WHERE id="'.(int)$id.'"'));
?>
<html>
    <head>
        <script src="jquery-1.6.1.min.js"></script>
    </head>
<body>
    <script type="text/javascript">
        function doAction(id,type){
            $.post('doAjax.php', {id:id, type:type}, function(data){
                if(isNaN(parseFloat(data))){
                   alert(data);
                }else{
                    $('#'+id+'_'+type+'s').text(data);
                }
            });
        }
    </script>
<a href="javascript:;" onclick="doAction('<?=$id;?>','like');">Нравится (<span id="<?=$id;?>_likes"><?=$data->like;?></span>)</a>
<a href="javascript:;" onclick="doAction('<?=$id;?>','unlike');">Не нравится (<span id="<?=$id;?>_unlikes"><?=$data->unlike;?></span>)</a>
</body>
</html>
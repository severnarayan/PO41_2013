<?php
require_once('dbconn.php');
 
if($_POST['id'] != '' && $_POST['type'] != ''){
 
$alreadyExist = mysql_num_rows(mysql_query('SELECT * FROM likes WHERE post_id="'.(int)$_POST['id'].'" AND  ip="'.$_SERVER['REMOTE_ADDR'].'"'));
 
        if($alreadyExist == 0){
 
            if($_POST['type']=='like'){
 
                mysql_query('UPDATE posts SET `like`=`like`+1 WHERE id="'.(int)$_POST['id'].'"');
                $num = mysql_fetch_row(mysql_query('SELECT `like` FROM posts WHERE id="'.(int)$_POST['id'].'" LIMIT 1'));
 
            }elseif($_POST['type']=='unlike'){
 
                mysql_query(' UPDATE posts SET `unlike`=`unlike`+1 WHERE id="'.(int)$_POST['id'].'"');
                $num = mysql_fetch_row(mysql_query('SELECT `unlike` FROM posts WHERE id="'.(int)$_POST['id'].'" LIMIT 1'));
 
            }
            echo $num[0];
 
            mysql_query('INSERT INTO likes (`post_id`,`ip`) VALUES ("'.(int)$_POST['id'].'","'.$_SERVER['REMOTE_ADDR'].'")');
 
        }else{
            echo 'Вы уже проголосовали';
        }
    }
 
?>
<?php
if($_SERVER["HTTP_X_REQUESTED_WITH"] == "XMLHttpRequest") {
        print  "DATA #: ".$_GET["data"]; echo "  text:";
        $get=$_GET["data"];
        if($get=="1"){ echo " Hello";
		} elseif ($get=="2"){ echo " Hello2";
		}
}
?>
<? //echo 1; 
$name=$_POST['name'];
$name2=$_POST['name2'];
echo $name;
echo $name2;

?>

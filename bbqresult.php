<meta charset="utf-8">
<?php
if (isset($_POST['id'])) {
    $id=$_POST['id'];
    $name=$_POST['name'];
    

    echo "學號：".$id."<br/>";
    echo "姓名：".$name."<br/>";
    echo "報名成功";
    
}else{
    echo "資料輸入錯誤";
}










?>
<?php


if($_POST['sel']=="1-18"){
    echo $_POST['lastname'].$_POST['name'].' Вам '.$_POST['sel'].' вы не подходите'."<br/>";
}

if($_POST['sel']=="19-30"){
    echo $_POST['lastname'].$_POST['name'].'Вам '.$_POST['sel'].' вы подходите'."<br/>";
}
if($_POST['sel']=="31-50"){
    echo $_POST['lastname'].$_POST['name'].'Вам '.$_POST['sel'].' вы подходите'."<br/>";
}
if($_POST['sel']==">50"){
    echo $_POST['lastname'].$_POST['name'].'Вам '.$_POST['sel'].' вы не подходите'."<br/>";
}
if(isset($_POST['pred'])){
    echo "Ваше предпочтение - " . $_POST['pred'];
}
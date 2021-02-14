<?php
$message = "Hello World!";

var_dump($message);
echo '<br>';

$x = 8;
$y = 5.55;
var_dump($x);
echo '<br>';
var_dump($y);

echo '<br>';

$flag = true;
var_dump($flag);

echo '<br>';
$emp = null;
var_dump($emp);

echo '<br>';
$en_words = "Hello World!";
var_dump($en_words);

echo '<br>';
$ja_words = "こんにちは";
var_dump($ja_words);

echo '<br>';
define("ADMIN_EMAIL","u-i-group@gmail.com");
define("LIST_COUNT",15);

echo '<br>';
echo ADMIN_EMAIL;
echo '<br>';
echo LIST_COUNT;

$x = 5;

echo '<br>';
// 連結演算子　文字と文字の連結
echo "hello"."World!";

echo '<br>';
$hello = "hello";
$world = "World!";
echo $hello.$world;

echo '<br>';
echo 1 + 1;
echo '<br>';
echo 10 - 1;
echo '<br>';
echo 2 * 2;
echo '<br>';
echo 10 / 5;
echo '<br>';
echo 5 % 3;

echo '<br>';
$x++;
echo $x;

echo '<br>';
$x--;
echo $x;

echo '<br>';
$x += 7;
echo $x;

echo '<br>';
$x -= 2;
echo $x;

echo '<br>';
$x *= 8;
echo $x;

echo '<br>';
$age = 27;
if($age >= 20){
    echo "お酒が飲めるぞ！";
}else {
    echo "お酒は２０歳になってから！";
}

echo '<br>';
$is_student = true;
if($age < 25 && $is_student){
    echo '学割パックが使えるよ';
}else if($age < 25){
    echo '若者応援割引が使えるよ';
}

$blood = "B";

switch($blood){
    case 'A':
        print 'A型です';
        break;
    case 'B':
        print 'B型です';
        break;
    case 'O':
        print 'O型です';
        break;
    case 'AB':
        print 'AB型です';
        break;
    default:
    echo 'A/B/O/ABから選択してください';
}

echo '<br>';
$name = "";
if($name != ""){
    echo '名前を受け付けました';
} else{
    echo '名前を入力してください';
}

echo '<br>';
echo($name != "") ? '名前を受け付けました':'名前を入力してください';


// チャレンジ
echo '<br>';
$name = "taro";
$password = "pess";

if($name === "taro" && $password === "pass"){
    echo "ログイン成功です";
}elseif($name === "taro" && $password !== "pass"){
    echo "パスワードが間違っています。";
}elseif($name !== "taro" && $password === "pass"){
    echo "名前が間違っています。";
}elseif($name !== "taro" && $password !== "pass"){
    echo "入力情報が間違っています。";
}

echo '<br>';
$num = 0;
while($num < 10){
    echo $num;
    $num++;
}

echo '<br>';
do {
    echo $num;
    $num++;
} while($num <10);

echo '<br>';
$i = 0;
for($i=0;$i<10;$i++){
    echo $i;
}

$num = 0;
echo '<br>';
while($num < 10){
    echo $num;
    $num++;
    if($num == 5){
        break;
    }
}
// チャレンジ
$num =0;
while($num < 101){
    echo $num;
    echo '<br>';
    $num++;
}

?>
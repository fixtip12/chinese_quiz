<?php
session_start();

//選択した解答をセット
// switch文で管理せず、配列にユーザーが答えた回答を保持するようにする(array_pushを使用)
// このファイル名の変更 sample.php→〇〇○.php(sample.phpだとなにやってるファイルか分からない)

if (isset($select_answer)){
  array_push($select_answer, $_POST['select']);//引数に$_POSTを指定しない方がいい？
} else {
  $select_answer = $_POST['select'];//$select_answerを配列として認識してない？
}

   

if (isset($_SESSION['countPage'])){
   $_SESSION['countPage']++;
   //$page変数は不要なので削除
}

if (isset($_SESSION['countQuiz'])){
    $_SESSION['countQuiz']++;
    //$quiz変数削除
 }

$totalPage = 10;
// 質問数10問終わったら解答ページへ
if ($_SESSION['countPage'] <= $totalPage) {
    header("Location:index.php");
    exit;
   } else {
    header("Location:check_answer.php");
    exit;
   }

?>

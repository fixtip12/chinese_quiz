<?php
session_start();

//選択した解答をセット
switch ($_SESSION['countPage']){
    case 1: $_SESSION['result1'] = $_POST['select'];
    break;
    case 2: $_SESSION['result2'] = $_POST['select'];
    break;
    case 3: $_SESSION['result3'] = $_POST['select'];
    break;
    case 4: $_SESSION['result4'] = $_POST['select'];
    break;
    case 5: $_SESSION['result5'] = $_POST['select'];
    break;
    case 6: $_SESSION['result6'] = $_POST['select'];
    break;
    case 7: $_SESSION['result7'] = $_POST['select'];
    break;
    case 8: $_SESSION['result8'] = $_POST['select'];
    break;
    case 9: $_SESSION['result9'] = $_POST['select'];
    break;
    case 10: $_SESSION['result10'] = $_POST['select'];
    break;
  }
  
if (isset($_SESSION['countPage'])){
   $_SESSION['countPage']++;
   $page = $_SESSION['countPage'];
}

if (isset($_SESSION['countQuiz'])){
    $_SESSION['countQuiz']++;
    $quiz = $_SESSION['countQuiz'];
 }

 $totalPage = 10;
// 質問数10問終わったら解答ページへ 
if ($page <= $totalPage) {
    header("Location:index.php");
    exit;
   } else {
    header("Location:answer_page.php");
    exit;
   }  

//正解数カウント
// $selectAnswer = $_POST['select'];
// if ($selectAnswer == $_SESSION['answer']) {
//     $_SESSION['correctCount']++;
//    }

?>

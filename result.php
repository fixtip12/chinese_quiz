<?php
require_once(__DIR__ . '/quiz/quiz.php');
session_start();
if ($_SESSION['userAnswers'] === null || $_SESSION['pageNum'] === null) {
  $_SESSION['errorMessage'] = 'あんたなんかいたずらしたわね';
  header("Location:index.php");
  exit;
}
$quizObject = new Quiz($_SESSION['pageNum'] - 1, $_SESSION['userAnswers']);

if(count($_SESSION['userAnswers']) !== $quizObject->getTotalQuizNum()){
  $_SESSION['errorMessage'] = 'あんたなんかいたeeetewずらしたわね';
  header("Location:index.php");
  exit;
}

/** @var Quiz[] */
$quizzes = $quizObject->getQuizzez();
$percentageOfCorrectAnswers = $quizObject->calculateQuizGrade();

$_SESSION['reAnswer'] = true;
?>
<!doctype html>
<html lang="ja"> <?php // 言語設定をなおす
                  ?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <title>答え合わせ</title>
</head>

<body>
  <br>
  <h4 class="text-center">回答お疲れさまでした！！</h4>
  <br>
  <h3 class="text-center">あなたの正答率は<?php echo $percentageOfCorrectAnswers; ?>%です。</h3> <?php //classのtext-centerを使う(align属性使ってるとこすべて)
                                                                                      ?>
  <br>
  <table class="table table-striped container">
    <thead>
      <tr>
        <th></th>
        <th>あなたの回答</th>
        <th>正しい回答</th>
      </tr>
    </thead>
    <?php foreach ($quizzes as $quizNum => $quiz) : ?>
      <tbody>
        <tr class="<?php echo $quiz->getCorrectAnswer() !== $_SESSION['userAnswers'][$quizNum] ? 'table-danger' : ''; ?>">
          <th><?php echo $quizNum + 1 ?>問目</th>
          <td><?php echo $quiz->getCorrectAnswer(); ?></td> <!-- // 配列をforeachして表示させる(range関数を使えば実現可？)  -->
          <td><?php echo $_SESSION['userAnswers'][$quizNum]; ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
  </table>
  <br>
  <h3 class="text-center">正解数:<?php echo $quizObject->getCorrectNum(); ?>/<?php echo $quizObject->getTotalQuizNum(); ?>問 不正解数:<?php echo $quizObject->getInCorrectNum(); ?>/<?php echo $quizObject->getTotalQuizNum(); ?>問</h3>
  <br>
  <h4 class="text-center">TOPに戻る</h4>
</body>

</html>

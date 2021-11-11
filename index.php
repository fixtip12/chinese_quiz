<?php
require_once(__DIR__ . '/quiz/quiz.php');
session_start();

// 結果ページからブラウザバックされた際にセッションを空にする
if (!empty($_SESSION['reAnswer'])) {
    $_SESSION = [];
}

//ページ数管理
if (!isset($_SESSION['pageNum'])) {
    $_SESSION['pageNum'] = 1;
}


if (isset($_SESSION["errorMessage"])) {
    $error = $_SESSION["errorMessage"];
    unset($_SESSION["errorMessage"]);
} else {
    $error = "";
}

$quizObject = new Quiz($_SESSION['pageNum'] - 1);
$quiz = $quizObject->getQuiz();
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
</head>
<body class="container-sm mt-5 bg-info">
  <form method="POST" action="./confirm.php" id="form">
    <h2 class="text-center">
      <h3 class="text-danger"><?php echo $error; ?></h3>
      <?php echo $_SESSION['pageNum'] ?>問目
    </h2>
    <div class="form-group">
      <h2>問題:<?php echo $quiz->getQuestionText(); ?></h2>
      <div class="form-check">
        <?php foreach ($quiz->getQuestionChoices() as $key => $answer) : ?>
          <input class="form-check-input" type="radio" name="answer" value="<?php echo $answer ?>" id="answer<?php echo $key; ?>">
          <label class="form-check-label" for="answer<?php echo $key; ?>">
            <?php echo $answer ?>
          </label>
          <br>
        <?php endforeach; ?>
      </div>
      <button type="submit" class="btn btn-primary">決定</button>
    </div>
  </form>
</body>
</html>
<script>
  // ブラウザバックされた際に選択済みの回答をリセット
  // window.onpageshow = function() {
  //   var form = document.getElementById('form');
  //   form.reset();
  // }
</script>

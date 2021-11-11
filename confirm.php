<?php
session_start();
require_once(__DIR__ . '/quiz/quiz.php');

$userAnswer = htmlspecialchars($_POST['answer'], ENT_QUOTES);

if (isset($_SESSION['userAnswers'])) {
    array_push($_SESSION['userAnswers'], $userAnswer);
} else {
    $_SESSION['userAnswers'] = [$userAnswer];
}

$quiz = new Quiz($_SESSION['pageNum'] - 1);

if ($quiz->hasNextQuiz()) {
    $_SESSION['pageNum']++;
    header("Location:index.php");
    exit;
} else {
    header("Location:result.php");
    exit;
}

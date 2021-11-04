<?php
session_start(); 
$questions = array(
                  ['question' => '背包',
                  'answer' => ['リュックサック', 'りんご', 'きのこ', 'くだもの']
                  ],
                  ['question' => '蛋糕',
                  'answer' => ['ケーキ', 'たまご', 'もち', 'ちまき']
                  ],
                  ['question' => '退烧药',
                  'answer' => ['解熱剤', '風邪薬', '痛み止め', 'アスピリン']
                  ],
                  ['question' => '蜈蚣',
                  'answer' => ['ムカデ', 'カタツムリ', 'ミミズ', 'アリ']
                  ],
                  ['question' => '扣子',
                  'answer' => ['襟', 'ポケット', '裾', 'ボタン']
                  ],
                  ['question' => '手刹',
                  'answer' => ['サイドブレーキ', 'アクセル', 'ブレーキ', 'ワイパー']
                  ],
                  ['question' => '萝卜',
                  'answer' => ['だいこん', 'にんじん', 'かぶ', 'れんこん']
                  ],
                  ['question' => '药方',
                  'answer' => ['処方箋', 'カルテ', '診断書', '保険証']
                  ],
                  ['question' => '考拉',
                  'answer' => ['コアラ', 'アリクイ', 'ナマケモノ', 'カンガルー']
                  ],
                  ['question' => '争端',
                  'answer' => ['紛争', 'テロ', 'デモ', '暴動']
                  ]
             );

            //  $_SESSION = [];
//ページ管理
if (!isset($_SESSION['countPage'])){
  $_SESSION['countPage'] = 1;
}
  $page = $_SESSION['countPage'];
 
//質問管理
if (!isset($_SESSION['countQuiz'])){
  $_SESSION['countQuiz'] = 0;
}
  $quiz = $_SESSION['countQuiz'];

// if (!isset($_SESSION['correctCount'])){
//   $_SESSION['correctCount'] = 0;
// }
//   $correctCount = $_SESSION['correctCount'];
  
//正解は必ず一つ目  
// $_SESSION['answer'] = $questions[$quiz]['answer'][0];

//選択肢をシャッフル
shuffle($questions[$quiz]['answer']);

//正解をセット
$_SESSION['answer1'] = $questions[0]['answer'][0];
$_SESSION['answer2'] = $questions[1]['answer'][0];
$_SESSION['answer3'] = $questions[2]['answer'][0];
$_SESSION['answer4'] = $questions[3]['answer'][0];
$_SESSION['answer5'] = $questions[4]['answer'][0];
$_SESSION['answer6'] = $questions[5]['answer'][0];
$_SESSION['answer7'] = $questions[6]['answer'][0];
$_SESSION['answer8'] = $questions[7]['answer'][0];
$_SESSION['answer9'] = $questions[8]['answer'][0];
$_SESSION['answer10'] = $questions[9]['answer'][0];

?>

<!DOCTYPE html>
<html>
<head>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
</head>
<body class="container-sm mt-5 bg-info">
  <form method="POST" action="sample.php">
  　<h2 class="text-center">
    　<?php echo $page ?>問目
    </h2>
    <div class="form-group">
    　<h2>問題:<?php echo $questions[$quiz]['question']; ?></h2>
    <div class="form-check">
    　<?php foreach ($questions[$quiz]['answer'] as $answer): ?>
      <input class="form-check-input" type="radio" name="select" value="<?php echo $answer ?>">
      <label class="form-check-label" for="<?php echo $answer ?>">
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

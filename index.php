<?php
session_start();
$questions = [ // arrayを[]に修正
                  ['question' => '背包',
                  'answer' => ['リュックサック', 'りんご', 'きのこ', 'くだもの'],
                  'correctAnswer' => 'リュックサック'
                  ],
                  ['question' => '蛋糕',
                  'answer' => ['もち', 'たまご', 'ケーキ', 'ちまき'],
                  'correctAnswer' => 'ケーキ'
                  ],
                  ['question' => '退烧药',
                  'answer' => ['アスピリン', '風邪薬', '痛み止め', '解熱剤'],
                  'correctAnswer' => '解熱剤'
                  ],
                  ['question' => '蜈蚣',
                  'answer' => ['ムカデ', 'カタツムリ', 'ミミズ', 'アリ'],
                  'correctAnswer' => 'ムカデ'
                  ],
                  ['question' => '扣子',
                  'answer' => ['ボタン', 'ポケット', '裾', '襟'],
                  'correctAnswer' => '襟'
                  ],
                  ['question' => '手刹',
                  'answer' => ['ブレーキ', 'アクセル', 'サイドブレーキ', 'ワイパー'],
                  'correctAnswer' => 'サイドブレーキ'
                  ],
                  ['question' => '萝卜',
                  'answer' => ['かぶ', 'にんじん', 'だいこん', 'れんこん'],
                  'correctAnswer' => 'だいこん'
                  ],
                  ['question' => '药方',
                  'answer' => ['診断書', 'カルテ', '処方箋', '保険証'],
                  'correctAnswer' => '処方箋'
                  ],
                  ['question' => '考拉',
                  'answer' => ['アリクイ', 'コアラ', 'ナマケモノ', 'カンガルー'],
                  'correctAnswer' => 'コアラ'
                  ],
                  ['question' => '争端',
                  'answer' => ['紛争', 'テロ', 'デモ', '暴動'],
                  'correctAnswer' => '紛争'
                  ]
              ];

//ページ管理
if (!isset($_SESSION['countPage'])){
  $_SESSION['countPage'] = 1;
}

//質問管理
if (!isset($_SESSION['countQuiz'])){
  $_SESSION['countQuiz'] = 0;
}

// 選択肢をシャッフルする処理は削除してよし(今回の要件に含まれてないため)
// 正しい答えはセッションで管理せず、配列のキー（ex.correctAnswer)で値を保持しておく

?>

<!DOCTYPE html>
<html>
<head>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
</head>
<body class="container-sm mt-5 bg-info">
  <form method="POST" action="select_answer.php">
  <h2 class="text-center">
    <?php echo $_SESSION['countPage'] ?>問目
    </h2>
    <div class="form-group">
    <h2>問題:<?php echo $questions[$_SESSION['countQuiz']]['question'] ?></h2>
    <div class="form-check">
    <?php foreach ($questions[$_SESSION['countQuiz']]['answer'] as $answer): ?>
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

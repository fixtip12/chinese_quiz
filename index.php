<?php
$questions = [
  'りんご',
  'リュックサック',
  'きのこ',
  'くだもの'
]
?>
<!DOCTYPE html>
<html>

<head>
  <!-- CSS only -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
</head>

<body class="container-sm mt-5 bg-info">
  <form method="POST" action="./sample.php">
    <h2 class="text-center">
      1問目
    </h2>

    <div class="form-group">
      <h2>問題:背包</h2>
      <div class="form-check">

        <?php foreach ($questions as $key => $question) : ?>
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="<?php $question ?>">
          <label class="form-check-label" for="flexRadioDefault<?php $key ?>">
            <?= $question ?>
          </label>
        <?php endforeach; ?>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </form>
</body>

</html>

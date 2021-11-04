<?php session_start(); ?>
<!doctype html>
<html lang="en">
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
   <h4 align="center">回答お疲れさまでした！！</h4>
   <br>
   <h3 align="center">あなたの正答率は〇〇%です。</h3>
   <br> 
  <table class="table table-striped container">
   <thead>
    <tr>
      <th></th>
      <th>あなたの回答</th>
      <th>正しい回答</th>
    </tr>
   </thead>
   <tbody>
    <tr>
      <th>1問目</th>
      <td><?php echo $_SESSION['result1'] ?></td>
      <td><?php echo $_SESSION['answer1'] ?></td> 
    </tr>
    <tr>
      <th>2問目</th>
      <td><?php echo $_SESSION['result2'] ?></td>
      <td><?php echo $_SESSION['answer2'] ?></td>
    </tr>
    <tr>
      <th>3問目</th>
      <td><?php echo $_SESSION['result3'] ?></td>
      <td><?php echo $_SESSION['answer3'] ?></td>
    </tr>
    <tr>
      <th>4問目</th>
      <td><?php echo $_SESSION['result4'] ?></td>
      <td><?php echo $_SESSION['answer4'] ?></td>
    </tr>
    <tr>
      <th>5問目</th>
      <td><?php echo $_SESSION['result5'] ?></td>
      <td><?php echo $_SESSION['answer5'] ?></td>
    </tr>
    <tr>
      <th>6問目</th>
      <td><?php echo $_SESSION['result6'] ?></td>
      <td><?php echo $_SESSION['answer6'] ?></td>
    </tr>
    <tr>
      <th>7問目</th>
      <td><?php echo $_SESSION['result7'] ?></td>
      <td><?php echo $_SESSION['answer7'] ?></td>
    </tr>
    <tr>
      <th>8問目</th>
      <td><?php echo $_SESSION['result8'] ?></td>
      <td><?php echo $_SESSION['answer8'] ?></td>
    </tr>
    <tr>
      <th>9問目</th>
      <td><?php echo $_SESSION['result9'] ?></td>
      <td><?php echo $_SESSION['answer9'] ?></td>
    </tr>
    <tr>
      <th>10問目</th>
      <td><?php echo $_SESSION['result10'] ?></td>
      <td><?php echo $_SESSION['answer10'] ?></td>
    </tr>
   </tbody>
  </table>
   <br>
   <h3 align="center">正解数：〇〇/10問　不正解数：〇〇/10問</h3>
   <br>
   <h4 align="center">TOPに戻る</h4>
  </body>
</html>
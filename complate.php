<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
extract($_POST);
$errors = [];
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'test';
$mysqli = @new mysqli(
  $db_host,
  $db_user,
  $db_password,
  $db_db
);
if ($mysqli->connect_error) {
 $errors[]="[{$myqli->connect_errno}]::MySQLのエラーです";
}else{
    // 接続成功時の処理
  $query  = "INSERT INTO `form1` (`namaeee`, `namana`, `huri`, `mei`, `ie`, `denn`, `seo`, `kodo`, `hunn`, `eiga`, `okane`, `kaiin`, `sigoto`) VALUES (?, ?, ?, ?, ?,  ?, ?, ?, ?, ?,  ?, ?, ?)";
  $stmt   = $mysqli->prepare($query);
  try{
  $stmt->bind_param('ssssssssiisis',
  $namaeee, $namaena, $huri, $mei, $ie, $denn, $seo, $kodo, $hunn, $eiga, $okane, $kaiin, $sigoto);
 $stmt->execute();
  }catch(Exception $e){
    $errors[99999]="[{$myqli->connect_errno}]::{$e->getMessage()}";
  }
}
$mysqli->close();
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<body>
    <div class="container">
        <h1>映画観覧予約フォーム</h1>
        <?php if (empty($errors)) { ?>
            <div class="alert alert-success" role="alert">
                予約完了しました。
            </div>
        <?php } else { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo implode("<br>", $errors); ?>
            </div>
        <?php } ?>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
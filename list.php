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
$wheres = [];
if (!empty($name)) {
  $wheres[] = "(namaeee LIKE '%{$name}%' OR namaena LIKE '%{$name}%')";
}

//開始と終了がどちらも入っている時
if(!empty($created_at_start) && !empty($created_at_end)){
}
//開始しか入っていない時
else if(!empty($created_at_start)){
    $wheres [] = "created_at >= '($created_at_start)'";
}
//終了しか入っていない時
else if(!empty($created_at_end)){
    $wheres [] = "created_at <= '($created_at_end)'";
}

if ($mysqli->connect_error) {
    $errors[] = "[{$mysqli->connect_errno}]::MySQLのエラーです";
} else {
    // 接続成功時の処理
    // 接続成功時の処理
$query  = "SELECT id, created_at, namaeee, namana, eiga, hunn, kaiin FROM form1 ORDER BY id ASC";
$stmt   = $mysqli->prepare($query);

if (!empty($wheres)) {
  $where  = implode(" AND ", $wheres);
  $query  = "SELECT id, created_at, namaeee, namana, eiga, hunn, kaiin FROM form1 WHERE {$where} ORDER BY id ASC";
  $stmt   = $mysqli->prepare($query);
}
    try {
        $stmt->execute();
        $rows = [];
        $result = $stmt->get_result();
        while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $rows[] = $row;
        }
    } catch (Exception $e) {
        $errors[] = "[99999]::{$e->getMessage()}";
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
            <table class="table table-primary table-striped">
                <thead>
                    <th>ID</th>
                    <th>予約日時</th>
                    <th>名前</th>
                    <th>映画タイトル</th>
                    <th>来場予定時間</th>
                    <th>会員所番号</th>
                </thead>
                <tbody>
                    <?php foreach ($rows as $row) { ?>
                        <tr>
                            <td><?php echo htmlspecialchars ($row['id']); ?></td>
                            <td><?php echo htmlspecialchars ($row['created_at']); ?></td>

                            <td><?php echo htmlspecialchars ("{$row['namaeee']} {$row['huri']}"); ?></td>

                            <td><?php echo htmlspecialchars ($row['eiga']); ?></td>
                            <td><?php echo htmlspecialchars ($row['hunn']); ?></td>
                            <td><?php echo htmlspecialchars ($row['kaiin']); ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
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
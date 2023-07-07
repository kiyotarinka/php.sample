<?php
extract($_POST);
$errors = [];
//名前
if (empty($namaeee)) {
    $errors['namaeee'] = "名前（姓）が未入力です";
}
if (empty($namaena)) {
    $errors['namaena'] = "名前（名）が未入力です";
}
if (empty($huri)) {
    $errors['huri'] = "ふりがな（せい）が未入力です";
}
if (empty($mei)) {
    $errors['mei'] = "ふりがな（めい）が未入力です";
}
if (empty($ie)) {
    $errors['ie'] = "住所が未入力です";
}
if (empty($denn)) {
    $errors['denn'] = "電話番号が未入力です";
}
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
            <form action="./complate.php" method="post">
                <div class="mb-3 row">
                    <label for="namaeee" class="col-sm-2 col-form-label">名前（姓）</label>
                    <div class="col-sm-10">
                        <input type="text" name="namaeee" readonly class="form-control-plaintext" id="namaeee" value="<?php echo $_POST['namaeee']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="namaena" class="col-sm-2 col-form-label">名前（名）</label>
                    <div class="col-sm-10">
                        <input type="text" name="namaena" class="form-control" id="namaena" value="<?php echo $_POST['namaena']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="huri" class="col-sm-2 col-form-label">ふりがな（せい）</label>
                    <div class="col-sm-10">
                        <input type="text" name="huri" class="form-control" id="huri" value="<?php echo $_POST['huri']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="mei" class="col-sm-2 col-form-label">ふりがな（めい）</label>
                    <div class="col-sm-10">
                        <input type="text" name="mei" class="form-control-t" id="mei" value="<?php echo $_POST['mei']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="ie" class="col-sm-2 col-form-label">住所</label>
                    <div class="col-sm-10">
                        <input type="text" name="ie" class="form-control-t" id="ie" value="<?php echo $_POST['ie']; ?>">
                    </div>
                    <div class="mb-3 row">
                        <label for="denn" class="col-sm-2 col-form-label">電話番号</label>
                        <div class="col-sm-10">
                            <input type="number" name="denn" class="form-control-" id="denn" value="<?php echo $_POST['denn']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="seo" class="col-sm-2 col-form-label">席数（大人）</label>
                        <div class="col-sm-10">
                            <input type="number" name="seo" class="form-control" id="seo" value="<?php echo $_POST['seo']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kodo" class="col-sm-2 col-form-label">席数（子供）</label>
                        <div class="col-sm-10">
                            <input type="number" name="kodo" class="form-controlt" id="kodo" value="<?php echo $_POST['kodo']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="hunn" class="col-sm-2 col-form-label">時間</label>
                        <div class="col-sm-10">
                            <input type="time" name="hunn" class="form-control" id="hunn" value="<?php echo $_POST['hunn']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="eiga" class="col-sm-2 col-form-label">閲覧映画</label>

                        <div class="col-sm-10">
                            <?php echo $_POST['eiga']; ?>
                            <input type="hidden" name="eiga" value="<?php echo $_POST['eiga']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="支払い" class="col-sm-2 col-form-label">支払い</label>
                        <div class="col-sm-10">
                            <?php echo $_POST['okane']; ?>
                            <input type="hidden" name="支払い" value="<?php echo $_POST['hidden']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kaiin" class="col-sm-2 col-form-label">会員証</label>
                        <div class="col-sm-10">
                            <input type="password" name="kaiin" class="form-control" id="inputPassword" value="<?php echo $_POST['kaiin']; ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">職業</label>
                        <div class="col-sm-10">
                            <?php echo $_POST['sigoto']; ?>
                            <input type="hidden" name="sigoto" value="<?php echo $_POST['sigoto']; ?>">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } else { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo implode("<br>", $errors); ?>
            </div>
            <form action="./complate.php" method="post">
                <div class="mb-3 row">
                    <label for="namaeee" class="col-sm-2 col-form-label">名前（姓）</label>
                    <div class="col-sm-10">
                        <input type="text" name="namaeee" class="form-control <?php echo in_array("aname", array_keys($errors)) ? "is-invalid" : "" ?>" id="namaeee" value="<?php echo $_POST['namaeee']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="namaena" class="col-sm-2 col-form-label">名前（名）</label>
                    <div class="col-sm-10">
                        <input type="text" name="namaena" class="form-control <?php echo in_array("namaena", array_keys($errors)) ? "is-invalid" : "" ?>" id="namaena" value="<?php echo $_POST['namaena']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="huri" class="col-sm-2 col-form-label">ふりがな（せい）</label>
                    <div class="col-sm-10">
                        <input type="text" name="huri" class="form-control <?php echo in_array("huri", array_keys($errors)) ? "is-invalid" : "" ?>" id="huri" value="<?php echo $_POST['huri']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="mei" class="col-sm-2 col-form-label">ふりがな（めい）</label>
                    <div class="col-sm-10">
                        <input type="text" name="mei" class="form-control <?php echo in_array("mei", array_keys($errors)) ? "is-invalid" : "" ?>" id="mei" value="<?php echo $_POST['mei']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="ie" class="col-sm-2 col-form-label">住所</label>
                    <div class="col-sm-10">
                        <input type="text" name="ie" class="form-control <?php echo in_array("ie", array_keys($errors)) ? "is-invalid" : "" ?>" id="ie" value="<?php echo $_POST['ie']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="denn" class="col-sm-2 col-form-label">電話番号</label>
                    <div class="col-sm-10">
                        <input type="number" name="denn" class="form-control <?php echo in_array("denn", array_keys($errors)) ? "is-invalid" : "" ?>" id="dennwa" value="<?php echo $_POST['denn']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="seo" class="col-sm-2 col-form-label">席数（大人）</label>
                    <div class="col-sm-10">
                        <input type="number" name="seo" class="form-control" id="seo" value="<?php echo $_POST['seo']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kodo" class="col-sm-2 col-form-label">席数（子供）</label>
                    <div class="col-sm-10">
                        <input type="number" name="kodo" class="form-control" id="kodo" value="<?php echo $_POST['kodo']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="hunn" class="col-sm-2 col-form-label">時間</label>
                    <div class="col-sm-10">
                        <input type="time" name="hunn" class="form-control" id="hunn" value="<?php echo $_POST['hunn']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="eiga" class="col-sm-2 col-form-label">閲覧映画</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="eiga" id="eiga">
                            <option selected disabled>選択してください</option>
                            <option <?php if ($_POST["eiga"] === '天気の子') echo " selected"; ?> value="経営者・役員">経営者・役員</option>
                            <option <?php if ($_POST["eiga"] === 'ビリギャル') echo " selected"; ?> value="経営者・役員">経営者・役員</option>
                            <option <?php if ($_POST["eiga"] === '君の名は') echo " selected"; ?> value="経営者・役員">経営者・役員</option>
                            <option <?php if ($_POST["eiga"] === '君の名は') echo " selected"; ?> value="経営者・役員">経営者・役員</option>
                            <option <?php if ($_POST["eiga"] === 'アンパンマン') echo " selected"; ?> value="経営者・役員">経営者・役員</option>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="支払い" class="col-sm-2 col-form-label">支払い</label>
                    <div class="col-sm-10">
                        <?php echo $_POST['okane']; ?>
                        <input type="hidden" name="okane" value="<?php echo $_POST['hidden']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kaiin" class="col-sm-2 col-form-label">会員証</label>
                    <div class="col-sm-10">
                        <input type="password" name="kaiin" class="form-control" id="inputPassword" value="<?php echo $_POST['kaiin']; ?>">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">職業</label>
                    <div class="col-sm-10">
                        <?php echo $_POST['sigoto']; ?>
                        <input type="hidden" name="sigoto" value="<?php echo $_POST['sigoto']; ?>">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        <?php } ?>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
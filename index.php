<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<body>
    <div class="container">
        <h1>映画観覧予約フォーム</h1>
        <form action="confirm.php" method="post">
            <div class="mb-3 row">
                <label for="namaeee" class="col-sm-2 col-form-label">名前（姓）</label>
                <div class="col-sm-10">
                    <input type="text" name="namaeee" class="form-control" id="namaeee">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="namaena" class="col-sm-2 col-form-label">名前（名）</label>
                <div class="col-sm-10">
                    <input type="text" name="namaena" class="form-control" id="namaena">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="huri" class="col-sm-2 col-form-label">ふりがな（せい）</label>
                <div class="col-sm-10">
                    <input type="text" name="huri" class="form-control" id="huri">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="mei" class="col-sm-2 col-form-label">ふりがな（めい）</label>
                <div class="col-sm-10">
                    <input type="text" name="mei" class="form-control" id="mei">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="ie" class="col-sm-2 col-form-label">住所</label>
                <div class="col-sm-10">
                    <input type="text" name="ie" class="form-control" id="ie">
                </div>
                </div>
                <div class="mb-3 row">
                    <label for="denn" class="col-sm-2 col-form-label">電話番号</label>
                    <div class="col-sm-10">
                        <input type="tel" name="denn" class="gname" id="denn">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="seo" class="col-sm-2 col-form-label">席数（大人）</label>
                    <div class="col-sm-10">
                        <input type="number" name="seo" class="form-control" id="seo">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="kodo" class="col-sm-2 col-form-label">席数（子供）</label>
                    <div class="col-sm-10">
                        <input type="number" name="kodo" class="form-control" id="kodo">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="hunn" class="col-sm-2 col-form-label">時間</label>
                    <div class="col-sm-10">
                        <input type="time" name="hunn" class="form-control" id="hunn">
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="eiga" class="col-sm-2 col-form-label">閲覧映画</label>
                <div class="col-sm-10">
                    <select class="form-select" name="eiga" id="eiga">
                        <option selected disabled>選択してください</option>
                        <option selected value="天気の子">天気の子</option>
                        <option value="ビリギャル">ビリギャル</option>
                        <option value="君の名は">君の名は</option>
                        <option value="アンパンマン">アンパンマン</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="okane" class="col-sm-2 col-form-label">支払い</label>
                <div class="col-sm-10">
                    <select class="form-select" name="okane" id="okane">
                        <option selected disabled>選択してください</option>
                        <option selected value="カード">カード</option>
                        <option value="現金">現金</option>
                        <option value="交通系">交通系</option>
                    </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kaiin" class="col-sm-2 col-form-label">会員証</label>
                <div class="col-sm-10">
                    <input type="password" name="kaiin" class="form-control" id="inputPassword">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputPassword" class="col-sm-2 col-form-label">職業</label>
                <div class="col-sm-10">
                    <select class="form-select" name="sigoto" id=sigoto>
                        <option selected disabled>選択してください</option>
                        <option selected value="自営業">自営業</option>
                        <option value="経営者・役員">経営者・役員</option>
                        <option value="会社員">会社員</option>
                        <option value="契約社員">契約社員</option>
                        <option value="パート・アルバイト">パート・アルバイト</option>
                        <option value="公務員">公務員</option>
                        <option value="医療関係者">医療関係者</option>
                        <option value="主婦">主婦</option>
                        <option value="学生">学生</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
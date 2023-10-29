<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <p>情報をデータベースに登録しました</p>
        <form action="./home" method="POST">
            @csrf
            <input type="submit" name="submit" value="トップ画面へ戻る" />
        </form>
    </body>
</html>
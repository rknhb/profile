<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action="./confirm" method="POST">
            @csrf
            <p>プロフィール入力画面</p>
            <p>NAME:<input type="text" name="name" value="" /></p>
            <p>COMMENT:<input type="text" name="comment" value="" /></p>
            <p><input type="submit" name="submit" value="確認画面へ" />
        </form>
    </body>
</html>
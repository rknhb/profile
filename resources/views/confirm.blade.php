<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form action="./finish" method="POST">
            @csrf
            <p>プロフィール画面</p>
            <p>NAME:{{$name}}</p>
            <p>COMMENT:{{$comment}}</p>
            <input type="hidden" name="name" value="{{$name}}" />
            <input type="hidden" name="comment" value="{{$comment}}" />
            <p><input type="submit" name="submit" value="完了画面へ"/></p>
        </form>
    </body>
</html>
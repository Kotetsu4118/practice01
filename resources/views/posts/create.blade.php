<!DOCTYPE html>
<html>

<head>
    <title>show</title>
</head>

<body style="padding: 0 10px;">
    <div>
        <form action="/posts" method="post">
            @csrf
            <p>
                入力：<br>
                <textarea name="post[title]" cols="30" rows="3" placeholder="タイトル"></textarea>
            </p>
            <p>
                本文：<br>
                <textarea name="post[body]" cols="30" rows="10" placeholder="本文"></textarea>
            </p>
                <input type="submit" value="保存"/>
        </form>
    </div>
    
    <div style="position: absolute; left: 10px; bottom: 50px;">
        <button>Back to Home</button>
    </div>

</body>
    
</html>
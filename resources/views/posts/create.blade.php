<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Blog</title>
</head>

<body>
    
    <form action="/posts" method="POST">
        @csrf
        
        
        <div class="title">
            タイトル：<br>
            <textarea name="post[title]" cols="30" rows="3" placeholder="タイトル"></textarea>
        </div>
        
        <div class="body">
            本文：<br>
            <textarea name="post[body]" cols="30" rows="10" placeholder="本文"></textarea>
        </div>
        
        <input type="submit" value="保存"/>
    </form>

    
    <div class="footer">
        <button onclick="location.href='/'">Back to Home</button>
    </div>

</body>
    
</html>
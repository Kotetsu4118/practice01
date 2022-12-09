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
            <textarea name="post[title]" cols="30" rows="3" placeholder="タイトル">{{ old('post.title') }}</textarea>
            <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
        </div>
        
        <div class="body">
            本文：<br>
            <textarea name="post[body]" cols="30" rows="10" placeholder="本文">{{ old('post.body') }}</textarea>
            <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
        </div>
        
        <input type="submit" value="保存"/>
    </form>

    
    <div class="footer">
        <button onclick="location.href='/'">Back to Home</button>
    </div>

</body>
    
</html>
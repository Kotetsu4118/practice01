<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Edit</title>
</head>

<body>
    {{--formタグではPUTメソッドを使えない--}}
    <form action="/posts/{{$post->id}}" method="POST">
        @csrf
        @method("PUT")
        
        <div class="title">
            タイトル：<br>
            <input type="text" placeholder="タイトル" value="{{$post->title}}">
            <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
        </div>
        
        <div class="body">
            本文：<br>
            <textarea name="post[body]" cols="30" rows="10" placeholder="本文">{{ $post->body}}</textarea>
            <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
        </div>
        
        <input type="submit" value="保存"/>
    </form>

    
    <div class="footer">
        <button onclick="location.href='/'">Back to Home</button>
    </div>
    
    
    
    
</body>



</html>
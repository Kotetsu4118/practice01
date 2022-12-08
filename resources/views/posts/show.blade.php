<!DOCTYPE html>
<html>

<head>
    <title>show</title>
</head>

<body style="padding: 0 10px;">
    <div>
        <hr>
        <h1 class="title">{{$post->title}}</h1> <!-- {{--後で変数に変更 --}} -->
        <hr>

        <p class="content">{{$post->body}}</p> <!-- {{--後で変数に変更 --}} -->
    </div>
    
    <div style="position: absolute; left: 10px; bottom: 50px;">
        <button onclick="location.href='/'">Back to Home</button>
    </div>

</body>

</html>
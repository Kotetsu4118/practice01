<!DOCTYPE html>
<html>
<head>
    <title>index</title>
    
</head>
<body style="padding: 0 10px;">
    <h1>Site-name</h1>
    
    <p id="topics">
        <hr>
        <div>XXX XXX XXX XXX XXX</div>
        <hr>
    </p>

    <div class="posts">
        @foreach($posts as $post)
         
            <div class="post">
                <h3 class="title">{{$post->title}}</h3>
                <p class="body">{{$post->body}}updated_at:{{$post->updated_at}}</p>
            </div>
            
        @endforeach
    </div>
    
    <div>class="paginete">{{ $posts->links()}}</div>
</body>

</html>
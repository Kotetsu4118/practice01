<!DOCTYPE html>
<html>
<head>
    <title>index</title>
    <script>
        function deletePost(id){
            "use strict;"
            if(window.confirm("削除しますか？")){
                 document.getElementById(`form_${id}`).submit();
            }
        }
        
    </script>
    
</head>
<body style="padding: 0 10px;">
    <h1>Site-name</h1>
    
    <p id="topics">
        <hr>
        <div>XXX XXX XXX XXX XXX</div>
        <hr>
    </p>
    
    <a href='/posts/create'>create</a>
    
    <div class="posts">
        @foreach($posts as $post)
            <hr>
            <div class="post">
                <a href="/posts/{{$post->id}}"><h3 class="title">{{$post->title}}</h3></a>
                <p class="body">{{$post->body}}updated_at:{{$post->updated_at}}</p>
            </div>
            
            <form action="/posts/{{$post->id}}" id="form_{{ $post->id }}" method="POST">
                @csrf
                @method("DELETE")
                
                <p>
                    <button type="button" onclick="deletePost({{$post->id}})">削除</button>
                </p>
            </form>
            
            <hr>
        @endforeach
    </div>
    
    <div class="paginete">{{ $posts->links()}}</div>
</body>

</html>
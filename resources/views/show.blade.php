<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
            <title> Blog</title>
        <!-- Fonts -->
        <link href="https:/fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
                <div class='post'>
                    <h2 class='title'>{{ $post->title }}</h2>
                    <p class='body'>{{ $post->body }}</p>
                    <p class='updated_at'>{{ $post->updated_at }}</p>
                </div>
                <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
                <div class='back'>[<a href='/'>back</a>]</div>
                <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <p class="delete">[<span onclick="return deletebutton(this);">delete</span>]</p>
                </form>
                
                <script>
                    function deletebutton(e){
                        'use strict'
                        if(confirm('本当に削除しますか？')){
                            document.getElementById("form_{{ $post->id }}").submit()
                        }
                    }
                </script>
                
                
    </body>
</html>
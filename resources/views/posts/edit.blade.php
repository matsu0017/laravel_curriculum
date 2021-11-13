<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <!--特定の記事に関する変更なのでpostの後ろにIDで指定する-->
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                <!--HTMLではPUTメソッドをサポートしていないためformの中ではPOSTで下にPUTと記入-->
                @method('PUT')
                <div class='content__title'>
                    <h2>タイトル</h2>
                    <input type='text' name='post[title]' value="{{ $post->title }}">
                </div>
                <div class='content__body'>
                    <h2>本文</h2>
                    <input type='text' name='post[body]' value="{{ $post->body }}">
                </div>
                <input type="submit" value="update">
            </form>
            <div class="back">[<A href="posts/{{ $post->id }}">back</a></div>
        </div>
    </body>
</html>
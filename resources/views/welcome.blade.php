<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <title>Welcome</title>
       <link rel="stylesheet" href="{{ asset('css/app.css') }}">
       <script src="{{ asset('js/app.js') }}"></script>

       <h1>Welcome To Task Manager backend </h1>

<a href="{{ route('post.create') }}">Create New Post</a>
<a href="{{ route('post.show', ['id' => 5]) }}">View Post</a>

{{-- Example form using the named route to store a post --}}
<form action="{{ route('post.store') }}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Post Title">
    <button type="submit">Submit</button>
</form>

    </body>
</html>

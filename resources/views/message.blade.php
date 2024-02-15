<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>create message</h1>
    <form action="{{route('createMsg')}}" method='post'>
        @csrf
        <textarea name="message" id="" cols="30" rows="10" placeholder="enter the message"></textarea>
        <button type="submit">create Message</button>
    </form>
</body>

</html>
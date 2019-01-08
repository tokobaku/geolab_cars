<!DOCTYPE html>
<html>
<head>
    <title>Index</title>
</head>
<body>
    <form action="/subscriber" method="POST">
        @csrf
        
        <input type="text" name="name" required="">
        <input type="email" name="mail" required="">
        <input type="submit" name="submit" value="Send">
    </form>
</body>
</html>
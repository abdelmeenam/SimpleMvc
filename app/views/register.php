<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
</head>

<body>
    <form action="postregister" method="POST">
        <input type="text" placeholder="Username" name="name">
        <input type="text" placeholder="Enter your email" name="email">
        <input type="password" placeholder="Password" name="password">
        <input type="submit">
    </form>
</body>

</html>
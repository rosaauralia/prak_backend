<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <form action="ceklog.php" method="post">
        <div class="container">
            <h1>Madam Rose` Florist</h1>
            <div class="box">
            <label for="username"><b>Username</b></label>
            <div>
            <input type="text" placeholder="Enter Username" name="username" required>
            </div>
            <div class="box">
            <label for="password"><b>Password</b></label>
            <div>
            <input type="password" placeholder="Enter Password" name="password" required>
            </div>
            <button type="submit" class="submit" name="submit">Login</button>
        </div>
    </form>
</body>
</html>
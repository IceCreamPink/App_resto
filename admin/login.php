<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="login">
        <form action="proseslogin.php" method="post">
            <input type="hidden" name="idpetugas">
            <table>
                <tr>
                    <td>
                        Username :
                    </td>
                    <td>
                        <input type="text" name="username" placeholder="Username" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Password :
                    </td>
                    <td>
                        <input type="password" name="password" placeholder="Password" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <button type="submit" class="btn-checkout" name="login" value="login"> Log In</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
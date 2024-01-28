<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="login">
        <form action="prosesregister.php" method="post">
            <table>
                <tr>
                    <td>Nama </td>
                    <td>
                        <input type="text" name="nama_pelanggan" placeholder="Nama" required>
                    </td>
                </tr>
                <tr>
                    <td>Alamat </td>
                    <td>
                        <input type="text" name="alamat" placeholder="Alamat" required>
                    </td>
                </tr>
                <tr>
                    <td>No Hp</td>
                    <td>
                        <input type="number" name="nohp" placeholder="0" required>
                    </td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username" placeholder="Username" required>
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" placeholder="Password" required>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <button type="submit" name="register" class="btn-checkout" value="register">Register</button>
                    </td>

                    <td>
                        <a href="login.php" class="btn-checkout">Login</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <h1>REGISTER</h1>
        <form action="proses_register_enkripsi.php" method="POST">
            <table>
                <tr>
                    <td>Nama lengkap</td>
                    <td><input type="text" name="nama_lengkap"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="text" name="password"></td>
                </tr>
                <tr>
                    <td>outlet</td>
                    <td>
                        <select name="id_outlet" id="">
                            <?php
                                include_once "../koneksi.php";
                                $query = mysqli_query($koneksi, "SELECT * FROM tb_outlet");
                                while($hasil = mysqli_fetch_assoc($query)){

                            ?>
                            <option value="<?=$hasil['id'];?>"><?=$hasil['nama'];?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Level User</td>
                    <td>
                        <select name="role" id="">
                            <option value="admin">Admin</option>
                            <option value="kasir">Kasir</option>
                            <option value="owner">Owner</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Register"></td>
                </tr>
            </table>
        </form>

    </center>
</body>

</html>
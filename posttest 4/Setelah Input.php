<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest 4</title>
    <link rel="stylesheet" href="Desain Daftar Input.css">
</head>
<body>
    <div class="Awal">
        <table border="1">
            <h3> Inputan</h3>
            <tr>
                <td>Jenis Cupang</td>
                <td>:</td>
                <td><?php echo $_POST["nama"] ?></td>
            </tr>
            <tr>
                <td>Warna Cupang</td>
                <td>:</td>
                <td><?php echo $_POST["warna"] ?></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td><?php echo $_POST["Gender"] ?></td>
            </tr>
            <tr>
                <td>Bentuk Ekor</td>
                <td>:</td>
                <td><?php echo $_POST["Model"] ?></td>
            </tr>
            <tr>
                <td>Jenis Perlombaan</td>
                <td>:</td>
                <td><?php echo $_POST["Lomba"] ?></td>
            </tr>
        </table>
        <br>
    </div>
    
</body>
</html>
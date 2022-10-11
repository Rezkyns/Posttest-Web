<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link rel="stylesheet" href="desain input.css">
</head>
<body>
    <div class = "Akhir">
        <form action = "Setelah input.php" method="POST" class = "drop">
                <table>
                    <tr>
                        <td class="judul" colspan="3">Input Jenis Cupang</td>
                    </tr>
                    <tr>
                        <td>Jenis Cupang</td>
                        <td>:</td>
                        <td><input type="text" name="nama" placeholder= "input jenis"></td>
                    </tr>
                    <tr>
                        <td>Warna Cupang</td>
                        <td>:</td>
                        <td><input type="text" name="warna" placeholder= "warna"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><input type="radio" name="Gender" value= "Jantan">Jantan
                        <input type="radio" name="Gender" value= "Betina">Betina</td>
                    </tr>
                    <tr>
                        <td>Bentuk Ekor</td>
                        <td>:</td>
                        <td><select name= "Model" id="">
                            <option value="Kipas">Kipas</option>
                            <option value="Serit">Serit</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>Jenis Perlombaan</td>
                        <td>:</td>
                        <td><select name= "Lomba" id="">
                            <option value="Kecantikan">Kecantikan</option>
                            <option value="Beradu">Beradu</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="input" >
                            <input type="reset" name="Refresh" value="Refresh" class="daf">
                            <input type="submit" name="regis" value="Input" class="daf"> 
                        </td>
                    </tr>
                </table>
        </form>
        
    </div>
</body>
</html>
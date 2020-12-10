<html>
<head>
    <title>Tambah User</title>
</head>

<body>
    <a href="index.php">Go to Home</a>
    <br/><br/>

    <form action="tambah.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nim</td>
                <td><input type="text" name="nim"></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $nim    = $_POST['nim'];
        $nama   = $_POST['nama'];
        $alamat = $_POST['alamat'];

        // include database connection file
        include_once("../config.php");

        // Insert user data into table
        $hasil = mysqli_query($koneksi, "INSERT INTO user(nim,nama,alamat) VALUES('$nim','$nama','$alamat')");

        // Show message when user added
        echo "Data berhasil ditambahkan !. <a href='index.php'>View Users</a>";
    }
    ?>
</body>
</html>
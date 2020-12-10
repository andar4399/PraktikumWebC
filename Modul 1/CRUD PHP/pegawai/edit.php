<?php
    include_once("../config.php");

    if(isset($_POST['update'])){   
        $id     = $_POST['id'];
        $nim    = $_POST['nim'];
        $nama   = $_POST['nama'];
        $alamat = $_POST['alamat'];

        // update data user
        $hasil = mysqli_query($koneksi, "UPDATE user SET nim='$nim',nama='$nama',alamat='$alamat' WHERE id=$id");
        header("Location: index.php");
    }
?>

<?php
    $id = $_GET['id'];
    $hasil  = mysqli_query($koneksi, "SELECT * FROM user WHERE id=$id");

    while($user_data = mysqli_fetch_array($hasil)){
    $nim    = $user_data['nim'];
    $nama   = $user_data['nama'];
    $alamat = $user_data['alamat'];
    }
?>

<html>
<head>  
    <title>Edit Data User</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nim</td>
                <td><input type="text" name="nim" value=<?php echo $nim;?>></td>
            </tr>
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr> 
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>
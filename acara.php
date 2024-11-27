<?php
require_once "koneksi.php";
$query = "SELECT * FROM tab1";
$result = mysqli_query($koneksi, $query);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Insert Data to acara</title>
</head>
<body>
    <h1><a href="admin.php">kembali</a></h1>
    <h2>Insert Data into acara</h2>
    <form action="update.php" method="post">
        <label for="judul">judul:</label><br>
        <input type="text" id="judul" name="judul"><br><br>
        
        <label for="waktu">waktu:</label><br>
        <textarea id="waktu" name="waktu" rows="4" cols="50"></textarea><br><br>
        
        <label for="deskripsi">deskripsi:</label><br>
        <textarea id="deskripsi" name="deskripsi" rows="4" cols="50"></textarea><br><br>
      
        
        <input type="submit" value="Submit">
    </form>
    <hr>
    <table border="1">
        <tr>
        </tr>
        <tr>
            <th>no</th>
            <th>judul</th>
            <th>waktu</th>
            <th>deskripsi</th>
            
        </tr>
        <tr>

        </tr>
    <?php
        while ($row = mysqli_fetch_assoc($result)) {
            ?>

            <tr>
                <td><?php echo $row["nomer"]; ?></td>
                <td><?php echo $row["judul"]; ?></td>
                <td><?php echo $row["waktu"]; ?></td>
                <td><?php echo $row["deskripsi"]; ?></td>
                  
                <td>
                    <button><a href="delete.php?id=<?php echo $row["nomer"]; ?>">Delete</a></button>
                   

                </td>
               
            </tr>

            <?php
        }
        ?>
        </table>
</body>
</html>
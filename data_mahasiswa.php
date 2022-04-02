<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Data Mahasiswa</title>

    <style type="text/css">
        body{
            font-family: cursive;
            background-color: linen;
        }
    </style>
</head>
<body>
    <h1 align="center">TABEL DATA MAHASISWA</h1> <br>
       
    <!-- Form Inputan -->
   <!--  <div class="container">     

        <form class="form-horizontal" method="post" action="action.php">
            <div class="form-group">
                <label class="control-label col-sm-2" for="nama_mhs">Nama Mahasiswa:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" name="nama_mhs">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="nim_mhs">Nim Mahasiswa:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="nim_mhs" name="nim_mhs">
                </div>
            </div> 

            <div class="form-group">
                <label class="control-label col-sm-2" for="alamat_mhs">Alamat Mahasiswa:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="alamat_mhs" name="alamat_mhs">
                </div>
            </div><br>

            <button type="submit" class="btn btn-danger">Tambah Data</button><br><br>
        </form>     
    </div> -->

    <!-- bosstrap -->
    <div class="container">
         <table class="table table-striped table-danger">
        <thead>
            <tr>
                <th scope="col">ID Mahasiswa</th>
                <th scope="col">Nama Mahasiswa</th>
                <th scope="col">Nim Mahasiswa</th>
                <th scope="col">Alamat Mahasiswa</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            include 'koneksi.php';
            $sql = "SELECT * FROM tbl_018";//untuk query menampilkan data
            $hasil = mysqli_query ($koneksi, $sql);
            //mengolah hasil query
            while($row = mysqli_fetch_array($hasil))
            {
            ?>

            <tr>
                <td><?php echo $row["id_mhs"];?></td>
                <td><?php echo $row["nama_mhs"];?></td>
                <td><?php echo $row["nim_mhs"];?></td>
                <td><?php echo $row["alamat_mhs"];?></td>

                <td>
                    <a class="btn btn-sm btn-primary" href="form_editmhs.php?id=<?=$row["id_mhs"]?>" class="button no-1" target="_self">Update</a>
                    <a class="btn btn-sm btn-danger" href="delete.php?id=<?=$row["id_mhs"]?> "class="button no-2" target="_self">Delete</a></td>
                </td>
                
            </tr>

        </tbody>
    </div>

            <?php } 
            ?>

            
        
    </table>
     <a class="btn btn-sm btn-danger" href="form_tambahmhs.php" class="button no-1" target="_self">Tambah Data</a>
</body>
</html>

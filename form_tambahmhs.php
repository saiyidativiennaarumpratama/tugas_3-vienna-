<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Form Tambah Mahasiswa</title>


    <style type="text/css">
        .container{
            position: center;
            margin-top: 100px;
            /*margin-left: 20px;*/
            left: 50%;
            top: 50%;
            right: 50%;
            width: 800px;
            height: 400px;
            background-color: rosybrown;
            font-family: cursive;
            font-size: 20;
            color: white;
        }
    body{
            font-family: cursive;
            background-color: linen;
        }
    </style>
</head>
<body>


 <div class="container" align="center" >     
    <h1>FORM TAMBAH DATA MAHASISWA</h1> 
        <form class="form-horizontal" method="post" action="action.php">

            <div class="form-group">
                <label class="control-label col-sm-8" for="nama_mhs">Nama Mahasiswa:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" name="nama_mhs"><br>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-8" for="nim_mhs">Nim Mahasiswa:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="nim_mhs" name="nim_mhs"><br>
                </div>
            </div> 

            <div class="form-group">
                <label class="control-label col-sm-8" for="alamat_mhs">Alamat Mahasiswa:</label>
                <div class="col-sm-7">
                    <input type="text" class="form-control" id="alamat_mhs" name="alamat_mhs">
                </div>
            </div><br>

            <button type="submit" class="btn btn-danger">Tambah Data</button><br><br>
        </form>     
    </div>
</body>
</html>
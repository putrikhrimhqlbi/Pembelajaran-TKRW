<!DOCTYPE HTML>
<html>
    
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<head>
    <title></title>
</head>

<body>
    <h1 style-"text-align: center">DAFTAR ARSIP</h1>
    <a href="index.php">Beranda</a>
    <br>
    <a href="inputarsip.php">Tambah Arsip</a>
<table class="table">
  <thead class="thead-dark">
                    <tr>
                    <th>Judul Arsip</th>
                    <th>Arsip kelas</th>
                    <th>Tahun</th>
                    <th>Aksi</th>
                    </tr>
                </thead>
                <?php
        include './koneksi.php';
        $query = "SELECT * FROM arsip_sch";  
        $result = mysqli_query($koneksi, $query);
        if (mysqli_num_rows($result) > 0){
            while ($data = mysqli_fetch_array($result)) {?>
                <tr>
                    <td><?php echo $data["judul_arsip"]?></td>
                    <td><?php echo $data["arsip_kelas"]?></td>
                    <td><?php echo $data["tahun"]?></td>
                    <td>
                        <button>Hapus</button>
                        <a href="editarsip.php" ]?>edit</a>
                 
                <?php }
        }
        else
         echo "data tdk ada ";        
        ?>
            </table>
            <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
                integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
                crossorigin="anonymous">
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
                integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
                crossorigin="anonymous">
            </script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
                integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
                crossorigin="anonymous">
            </script>
        </div>
    </div>
    </div>

</body>

</html>
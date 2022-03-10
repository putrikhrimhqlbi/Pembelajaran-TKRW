<!DOCTYPE html>
<html>
    <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <head>
        <title></title>
    </head>

    <body>
    <div class="mt-3 col-sm-8 container">
        <div class="card-header bg-secondary text-black ">Edit Data Arsip</div>
        <div class="card-body">
        
        <form action="simpanarsip.php" method="POST">
        <div class="form-row">
            <div class="form-group col-md-5">
                <div class="form-group col-md">    
                   
                    <label>Judul Arsip</label>
                    <input type="edit" name="judul_arsip" value="<?php echo($data['judul_arsip']);?>">
                    <br><br>

                    <label>Arsip Kelas</label>
                    <input type="number" name="arsip_kelas" value="<?php echo($data['arsip_kelas']);?>">
                    <br><br>

                    <label>Tahun</label>
                    <input type="number" name="tahun"value="<?php echo($data['tahun']);?>">
                     <br><br>
                     <input type="submit" value="simpan">

                     </div>
                     </div>

  </form>          
</div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    </body>
</html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
        </title>
        <link rel="stylesheet" href="sidebar.css">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>
    <body>
                    <!-- The sidebar -->
            <div class="sidebar">
            <a class="active" href="#home">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
            </div>

<!-- Page content -->
<div class="content">
    
        <center>
            <table border="1" cellpadding="40" cellspacing="">
                <tr style="background-color: #04AA6D";
>
                    <th style="color:white;">Id</th>
                    <th style="color:white;">Nama Outlet</th>
                    <th style="color:white;">Alamat</th>
                    <th style="color:white;">No Telp</th>
                    <th style="color:yellow;">edit</th>
                    <th style="color:red;">delete</th>
                </tr>
                <?php
                    include "../koneksi.php";
                     $query = mysqli_query($koneksi, "SELECT * FROM tb_outlet");
    
                    while($baris = mysqli_fetch_assoc($query)){
                        // var_dump($baris);
                ?>
                <tr>
                    <td><?= $baris['id'];?></td>
                    <td><?= $baris['nama'];?></td>
                    <td><?= $baris['alamat'];?></td>
                    <td><?= $baris['tlp'];?></td>
                    <td><a class="btn btn-warning"
                          href="dashboard.php?page=edit_obat&idobat=<?= $baris['id'];?>">edit</a>
                    </td>
                <td><a class="btn btn-danger" href="../delete/delete_outlet.php?id=<?= $baris['id'];?>">delete</a>
                </td> 
    
                </tr>
                <?php
                }
                ?>
            </table>
            <center><a class="btn btn-success my-4" href="dashboard.php?page=tambah_obat">+ Tambah data Obat</a></center>
        </center>
</div>
        
       
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
    </html>











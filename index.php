<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
       html, body {
        height: 100%;
    }
</style>
</head>
<body class="container d-flex flex-column h-100">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
            <div class="container">
                <a class="navbar-brand" href="#">Pemrograman Web: 2101020060_bhismadeva</a>
                <button class="btn btn-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    Sidebar
                </button>
            </div>
        </nav>
    </header>

    <div class="container flex-grow-1" id="content">
        <div class="row h-100">
            <div class="col-md-2 p-3 collapse" id="collapseExample">
                <div class="p-3 text-white bg-dark border border-dark">
                    <a class="text-white" href="index.php?page=kategori">Kategori</a>        
                </div>
                <div class="p-3 text-white bg-dark border border-dark mt-2">
                    <a class="text-white" href="index.php?page=produk">Produk</a>        
                </div>
                <div class="p-3 text-white bg-dark border border-dark mt-2">
                    <a class="text-white" href="index.php?page=pesanan">Pesanan</a>       
                </div>
            </div>

            <div class="col p-3 h-100">
                <div class="p-3">
                    <?php
                    include "connection.php"; 
                    $halaman = isset($_GET['page']) ? $_GET['page'] : 'produk';

                    switch ($halaman) {
                        case 'kategori':
                            include('kategori.php'); 
                            break;
                        case 'pesanan':
                            include('pesanan.php'); 
                            break;
                        default:
                            include('produk.php'); 
                            break;
                    }
                    ?>     
            </div>
        </div>
    </div>
</div>

<footer class="bg-dark text-white p-3" >
    <a>&copy; 2023</a>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
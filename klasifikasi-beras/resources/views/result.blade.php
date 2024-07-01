<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Klasifikasi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
        .gambar-beras {
            max-width: 100%;
            height: auto;
        }
        .gambar-container {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .gambar-container img {
            max-width: 30%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body text-center">
                <h1 class="card-title">Hasil Klasifikasi</h1>
                <p class="card-text">Jenis Beras: {{ $result }}</p>
                <div class="gambar-container">
                    <img src="{{ asset('images/beras_' . strtolower($result) . '_1.jpeg') }}" class="img-fluid gambar-beras" alt="Beras {{ $result }} 1">
                    <img src="{{ asset('images/beras_' . strtolower($result) . '_2.jpeg') }}" class="img-fluid gambar-beras" alt="Beras {{ $result }} 2">
                    <img src="{{ asset('images/beras_' . strtolower($result) . '_3.jpeg') }}" class="img-fluid gambar-beras" alt="Beras {{ $result }} 3">
                </div>
                <a href="/upload" class="btn btn-primary">Klasifikasi Lagi</a>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js" integrity="sha384-LBwnIB1Ec7SG3qwHfnsnJ6F3paUyX/lUU8B/D2kIdF1R6rjWZ7Ij/kdiy4slXP4j" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyFw/Ja5cqL4J3K3Y6t3BcdtLkW2Cgmhaw" crossorigin="anonymous"></script>
</body>
</html>

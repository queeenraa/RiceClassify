<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasifikasi Beras</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card mb-3">
                    <img src="{{ asset('images/beras.png') }}" class="card-img-top" alt="Beras">
                    <div class="card-body">
                      <h5 class="card-title">RiceClassify</h5>
                      <p class="card-text">Upload gambar beras Anda untuk dilakukan klasifikasi jenis beras.</p>
                      <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image" required>
                            <label class="custom-file-label" for="image">Pilih file...</label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block mt-3">Klasifikasikan</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js" integrity="sha384-LBwnIB1Ec7SG3qwHfnsnJ6F3paUyX/lUU8B/D2kIdF1R6rjWZ7Ij/kdiy4slXP4j" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyFw/Ja5cqL4J3K3Y6t3BcdtLkW2Cgmhaw" crossorigin="anonymous"></script>

    <!-- Script untuk mengubah teks label pada input file -->
    <script>
        // Mengubah teks label pada input file saat file dipilih
        document.getElementById('image').addEventListener('change', function() {
            var fileName = this.files[0].name;
            var nextSibling = this.nextElementSibling;
            nextSibling.innerText = fileName;
        });
    </script>
</body>
</html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <main class="container my-5">
        <h2 class="text-white">BUKU</h2>
        <div class="card">
            <div class="card-body">
                <form action="create.php" method="post" class="row g-3 needs-validation" novalidate>
                    <div class="col-md-12">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" required>
                        <div class="invalid-feedback">
                            Judul wajib di isi!
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="pengarang" class="form-label">Pengarang</label>
                        <input type="text" name="pengarang" class="form-control" id="pengarang" required>
                        <div class="invalid-feedback">
                          Pengarang wajib di isi!  
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                        <input type="number" name="tahun_terbit" class="form-control" maxlength="4" min="1800" max="2023" id="tahun_terbit" required>
                        <div class="invalid-feedback">
                            Tahun Terbit wajib di isi!
                        </div>
                    </div>
                    <div class="col-md-12">
                        <label for="isbn" class="form-label">ISBN</label>
                        <input type="number" name="isbn" class="form-control" id="isbn" required>
                        <div class="invalid-feedback">
                            ISBN wajib di isi!
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>

    </main>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script>
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()
    </script>
</body>

</html>
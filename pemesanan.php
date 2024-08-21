<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat form input data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container bg-light">
        <h2 class="text-center">Form Pemesanan Paket Wisata</h2>
        <hr>
        <form action="simpan.php" method="post" class="needs-validation" novalidate>
            <div class="mb-3 row">
                <label for="inputNama" class="col-sm-2 col-form-label">Nama Pemesan:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama" name="nama_pemesan" required>
                    <div class="invalid-feedback">
        
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputNama" class="col-sm-2 col-form-label">Nomor HP/Telp:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama" name="no_hp" required>
                    <div class="invalid-feedback">
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
    <label for="paket_wisata" class="col-sm-2 col-form-label">Pilih Paket Wisata:</label>
    <div class="col-sm-10"> 
        <select id="paket_wisata" name="paket_wisata" class="form-select">
            <option value="">--Pilih Paket Wisata--</option>
            <option value="Pulau Komodo">Pulau Komodo</option>
            <option value="Danau Toba">Danau Toba</option>
            <option value="Candi Borobudur">Candi Borobudur</option>
            <option value="Taman Nasional Bunaken">Taman Nasional Bunaken</option>
        </select>
    </div>
</div>
            
            <div class="mb-3 row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Pesan:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tanggal" name="tanggal_pesan" required>
                    <div class="invalid-feedback">
                    </div>
                </div>
            </div>
            
            

   
            <div class="mb-3 row">
                <label for="inputNama" class="col-sm-2 col-form-label">Waktu Pelaksanaan Perjalanan:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama" name="waktu_pelaksanaan_perjalanan" required>
                    <div class="invalid-feedback">
                    </div>
                </div>
            </div>
        
            <div class="mb-3 row">
                <label for="inputNama" class="col-sm-2 col-form-label">Pelayanan Paket Perjalanan:</label>
                <div class="col-sm-10">
                <form action="your_script.php" method="post">
    <label for="akomodasi">Akomodasi (Rp 1.000.000)</label>
    <input type="checkbox" name="akomodasi" value="Y"><br>

    <label for="transportasi">Transportasi (Rp 1.200.000)</label>
    <input type="checkbox" name="transportasi" value="Y"><br>

    <label for="service">Servis/Makanan (Rp 500.000)</label>
    <input type="checkbox" name="servis_makanan" value="Y"><br>

</form>

                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputNama" class="col-sm-2 col-form-label">Jumlah Peserta:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama" name="jumlah_peserta" required>
                    <div class="invalid-feedback">
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputNama" class="col-sm-2 col-form-label">Harga Paket Perjalanan:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama" name="harga_paket_perjalanan" required>
                    <div class="invalid-feedback">
                    </div>
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="inputNama" class="col-sm-2 col-form-label">Jumlah Tagihan:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama" name="jumlah_tagihan" required>
                    <div class="invalid-feedback">
                    </div>
                </div>
            </div>

            <div class="mb-3 row text-center">
                <div class="col-sm-12 mb-4">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="hitung" class="btn btn-secondary">Hitung</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </div>
        </form>
    </div>
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.prototype.slice.call(forms)
            .forEach(function(form) {
                form.addEventListener('submit', function(event) {
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
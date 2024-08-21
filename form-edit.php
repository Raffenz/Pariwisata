<?php
use LDAP\Result;
include 'koneksi.php';
$id_wisata =$_GET['id_wisata'];
$paket_wisata = mysqli_query($koneksi,"SELECT * from paket_wisata WHERE id='$id_wisata'");
$row = mysqli_fetch_array($paket_wisata);

$paket_wisata = array('Pulau Komodo', 'Danau Toba', 'Candi Borobudur', 'Taman Nasional Bunaken');
function active_radio_button($value, $input){
    $result = $value==$input?'checked' :'';
    return $result;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital talent</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h2 class="text-center">Form Edit Data Pesanan</h2>
        <hr>
        <form action="update.php" method="post">
        <input type="hidden" value="<?= $row['id'];?>" name="id_wisata">
      
        <div class="mb-3 row">
                <label for="inputNama" class="col-sm-2 col-form-label">Nama Pemesan:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama" name="nama_pemesan" value="<?=$row['nama_pemesan'] ?>" required>
                    <div class="invalid-feedback">
        
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputNama" class="col-sm-2 col-form-label">Nomor HP/Telp:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama" name="no_hp" value="<?=$row['no_hp'] ?>" required>
                    <div class="invalid-feedback">
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
    <label for="paket_wisata" class="col-sm-2 col-form-label">Pilih Paket Wisata:</label>
    <div class="col-sm-10"> 
        <select id="paket_wisata" aria-label="Default select example" name="paket_wisata" class="form-select">
            <option value="">--Pilih Paket Wisata--</option>
            <option value="Pulau Komodo">Pulau Komodo</option>
            <option value="Danau Toba">Danau Toba</option>
            <option value="Candi Borobudur">Candi Borobudur</option>
            <option value="Taman Nasional Bunaken">Taman Nasional Bunaken</option>
            <?php 
                        foreach($paket_wisata as $p){
                            echo "<option value='$p'";
                            echo $row['paket_wisata'] == $p ? 'selected="selected"' : '';
                            echo ">$p</option>";
                        }
                        ?>
        </select>
    </div>
</div>
            
            <div class="mb-3 row">
                <label for="tanggal" class="col-sm-2 col-form-label">Tanggal Pesan:</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="tanggal" name="tanggal_pesan" <?=$row['tanggal_pesan']?> required>
                    <div class="invalid-feedback">
                    </div>
                </div>
            </div>
            
            

   
            <div class="mb-3 row">
                <label for="inputNama" class="col-sm-2 col-form-label">Waktu Pelaksanaan Perjalanan:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama" name="waktu_pelaksanaan_perjalanan" <?=$row['waktu_pelaksanaan_perjalanan']?> required>
                    <div class="invalid-feedback">
                    </div>
                </div>
            </div>
        
            <div class="mb-3 row">
                <label for="inputNama" class="col-sm-2 col-form-label">Pelayanan Paket Perjalanan:</label>
                <div class="col-sm-10">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="penginapan"  value="Penginapan">
                        <label class="form-check-label">Penginapan (Rp1.000.000)</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="transportasi"  value="Transportasi">
                        <label class="form-check-label" >Transportasi (Rp1.200.000)</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="servis_makan"  value="Servis/Makan">
                        <label class="form-check-label">Servis/Makan (Rp500.000)</label>
                    </div>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="inputNama" class="col-sm-2 col-form-label">Jumlah Peserta:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama" name="jumlah_peserta" <?=$row['jumlah_peserta']?> required>
                    <div class="invalid-feedback">
                    </div>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputNama" class="col-sm-2 col-form-label">Harga Paket Perjalanan:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama" name="harga_paket_perjalanan" <?=$row['harga_paket_perjalanan']?> required>
                    <div class="invalid-feedback">
                    </div>
                </div>
            </div>
            
            <div class="mb-3 row">
                <label for="inputNama" class="col-sm-2 col-form-label">Jumlah Tagihan:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNama" name="harga_paket_perjalanan" <?=$row['harga_paket_perjalanan']?> required>
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
</body>

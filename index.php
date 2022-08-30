<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />

    <title>NILAI PELATIHAN</title>
  </head>
  <body>
    <section id="iqqo1" class="gpd-section">
      <div id="iost7" class="gpd-container">
        <h1 id="ikb9j" data-anim-type="fadeInUp" class="gpd-header">
          <strong>NILAI PELATIHAN</strong>
        </h1>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" id="i61d" data-redirect="" class="form">
          <div class="gpd-text" id="if20e">INPUT NILAI</div>
          <div class="form-group">
            <label class="label" id="iqlh">Nilai Praktik</label>
            <input
              type="number"
              placeholder="Masukan Nilai Praktik"
              name="praktik"
              required
              class="input"
            />
          </div>
          <div class="form-group">
            <label class="label" id="iqo9m">Nilai Pilihan Ganda</label>
            <input
              type="number"
              placeholder="Masukan Nilai Pilihan Ganda"
              name="pilihanganda"
              required
              class="input"
            />
          </div>
          <div class="form-group">
            <label class="label" id="ik3ms">Nilai Kehadiran</label>
            <input
              type="number"
              placeholder="Masukan Nilai Kehadiran"
              name="kehadiran"
              required
              class="input"
            />
          </div>
          <div class="form-group">
            <label class="label" id="i47af">Nilai Sikap</label>
            <input
              type="number"
              placeholder="Masukan Nilai Sikap"
              name="sikap"
              required
              class="input"
            />
          </div>
          <div class="form-group">
            <button
              type="submit"
              name='submit'
              id="i5d15"
              data-anim-type="tada"
              class="button"
            >
              Hitung
            </button>
          </div>
          <div data-form-state="success" class="state-success" id="islyc">
            Thanks! We received your request
          </div>
          <div data-form-state="error" class="state-error" id="i4xi5">
            An error occurred on processing your request, try again!
          </div>
        </form>

        <?php
          $_NA = "";
          $kriteria = "";

          if(isset($_POST['submit'])){
            $praktik = $_POST['praktik'];
            $pilihanganda = $_POST['pilihanganda'];
            $kehadiran = $_POST['kehadiran'];
            $sikap = $_POST['sikap'];
            $_NA = (0.6*$praktik) + (0.3*$pilihanganda) + (0.05*$kehadiran) + (0.05*$sikap);
            if(($_NA >= 100) || ($_NA < 0)){
              $kriteria = 'Nilai tidak valid';
            } elseif($_NA >= 95) {
              $kriteria = 'Memuaskan';
            } elseif($_NA >= 85) {
              $kriteria = 'Baik sekali';
            } elseif($_NA >= 75) {
              $kriteria = 'Baik';
            } elseif($_NA >= 65) {
              $kriteria = 'Cukup';
            } else {
              $kriteria = 'Tidak lulus';
            }
          }

            echo "Nilai akhir : {$_NA}<br>";

            echo "Predikat : {$kriteria}";
            

             ?>
      </div>
    </section>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
    <style>
      html {
        scroll-behavior: smooth;
      }
    </style>
  </body>
</html>

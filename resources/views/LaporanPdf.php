<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Laporan Patroli</title>
  <style>
    .table-padding tr td,
    .table-padding tr th {
      padding: 5px;
    }
    .table-bordered {
      border-collapse: collapse;
    }
    .table-bordered,
    .table-bordered tr,
    .table-bordered td, 
    .table-bordered th {
      border: 1px solid black;
    }
  </style>
</head>
<body>
  <div id="top-section">
    <h2>LAPORAN KEGIATAN HARIAN PATROLI TERPADU & POSKO PENCEGAHAN KARHUTLA WILAYAH KERJA DAOPS <?=strtoupper($daops['nama'])?> PROVINSI <?=strtoupper($daops['provinsi']['nama'])?></h2>
    <h3>Tanggal: <?=$tanggal?></h3>
  </div>

  <hr style="color: grey;">

  <div id="pelaksana">
    <h3>1. Pelaksana</h3>
    <table>
      <?php foreach($kategoriAnggota as $ka): ?>
      <tr>
        <td><?=$ka['nama']?></td>
        <td>:</td>
        <td><?=$ka['count_anggota']?></td>
      </tr>
      <?php endforeach ?>
    </table>
  </div>

  <div id="posko">
    <h3>2. Posko Patroli Terpadu</h3>
    <table class="table-padding table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Desa / Kelurahan</th>
          <th>Kabupaten</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($kegiatanPatroli['patroli_darat'] as $key => $pd): ?>
        <tr>
          <td><?=++$key?></td>
          <td><?=ucwords($pd['desa_kelurahan']['nama'])?></td>
          <td><?=ucwords($pd['desa_kelurahan']['kecamatan']['kotakab']['nama'])?></td>
        </tr>
        <?php endforeach ?>
        <?php foreach($kegiatanPatroli['patroli_udara'] as $key => $pu): ?>
        <tr>
          <td><?=++$key?></td>
          <td><?=ucwords($pu['desa_kelurahan']['nama'])?></td>
          <td><?=ucwords($pu['desa_kelurahan']['kecamatan']['kotakab']['nama'])?></td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>

  <div id="kondis-cuaca">
    <h3>3. Kondisi Cuaca</h3>
    <table class="table-padding table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Posko</th>
          <th>Pagi</th>
          <th>Siang</th>
          <th>Sore</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($kegiatanPatroli['patroli_darat'] as $key => $pd): ?>
        <tr>
          <td><?=++$key?></td>
          <td><?=ucwords($pd['desa_kelurahan']['nama'])?></td>
          <td><?=ucwords($pd['cuaca_pagi']['nama'])?></td>
          <td><?=ucwords($pd['cuaca_siang']['nama'])?></td>
          <td><?=ucwords($pd['cuaca_sore']['nama'])?></td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>

  <div id="kegiatan-patroli">
    <h3>4. Kegiatan Patroli</h3>
    <table class="table-padding table-bordered">
      <thead>
        <tr>
          <th>No</th>
          <th>Area Rawan Terbakar</th>
          <th>Koordinat</th>
          <th>Vegetasi</th>
          <th>Jenis Tanah</th>
          <th>Kedalaman Gambut</th>
          <th>Sumber Air</th>
          <th>Ketinggian Muka Air</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($kegiatanPatroli['patroli_darat'] as $key => $pd): ?>
        <tr>
          <!-- No -->
          <td><?=++$key?></td>

          <!-- Area Rawan Terbakar -->
          <td>
            Ds. <?=ucwords($pd['desa_kelurahan']['nama'])?>
            Kec. <?=ucwords($pd['desa_kelurahan']['kecamatan']['nama'])?>
            Kab. <?=ucwords($pd['desa_kelurahan']['kecamatan']['kotakab']['nama'])?>
            Prov. <?=ucwords($pd['desa_kelurahan']['kecamatan']['kotakab']['daops']['provinsi']['nama'])?>
          </td>

          <!-- Koordinat -->
          <td>
            <?php
              if (!empty($pd['kondisi_vegetasi']) && isset($pd['kondisi_vegetasi'])) {
                echo "Lat: ".$pd['kondisi_vegetasi'][0]['latitude'] . "<br>";
                echo "Long: ".$pd['kondisi_vegetasi'][0]['longitude'];
              }
              else if (!empty($pd['kondisi_sumber_air']) && isset($pd['kondisi_sumber_air'])) {
                echo "Lat: ".$pd['kondisi_sumber_air'][0]['latitude'] . "<br>";
                echo "Long: ".$pd['kondisi_sumber_air'][0]['longitude'];
              }
            ?>
          </td>

          <!-- Vegetasi -->
          <td>
            <?php
              $vegs = [];
              foreach($pd['kondisi_vegetasi'] as $kv) {
                array_push($vegs, ucwords($kv['vegetasi']['nama']));
              }
              $vegs = implode(',', $vegs);
              echo $vegs;
            ?>
          </td>

          <!-- Jenis Tanah -->
          <td>
            <?php
              $soils = [];
              $gambutDeeps = [];
              foreach($pd['kondisi_tanah'] as $kt) {
                array_push($soils, ucwords($kt['tanah']['nama']));
                array_push($gambutDeeps, $kt['kedalaman_gambut']);
              }
              $soils = implode(',', $soils);
              echo $soils;
            ?>
          </td>

          <!-- Kedalaman Gambut -->
          <td>
            <?php
              $gambutDeeps = implode(',', $gambutDeeps);
              echo $gambutDeeps;
            ?>
          </td>

          <!-- Sumber air -->
          <td>
            <?php
              $waterSources = [];
              $waterDeeps = [];
              foreach($pd['kondisi_sumber_air'] as $ksa) {
                array_push($waterSources, ucwords($ksa['sumber_air']['name']));
                array_push($waterDeeps, $ksa['kedalaman']);
              }
              $waterSources = implode(',', $waterSources);
              echo $waterSources;
            ?>
          </td>

          <!-- Ketinggian muka air -->
          <td>
            <?php
              $waterDeeps = implode(',', $waterDeeps);
              echo $waterDeeps;
            ?>
          </td>
        </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>

  <div id="pemadaman">
    <h3>4. Pemadaman</h3>
    <?php foreach($kegiatanPatroli['patroli_darat'] as $pd): ?>
      <?php if (!empty($pd['pemadaman'])): ?>
        <?php foreach($pd['pemadaman'] as $key => $pemadaman): ?>
          <table class="table-padding table-bordered">
            <tr>
              <td>No</td>
              <td><?=++$key?></td>
            </tr>
            <tr>
              <td>Koordinat</td>
              <td>
                Lat: <?=$pemadaman['latitude']?>
                Long: <?=$pemadaman['longitude']?>
              </td>
            </tr>
            <tr>
              <td>Wilayah</td>
              <td>
                Ds. <?=ucwords($pd['desa_kelurahan']['nama'])?>
                Kec. <?=ucwords($pd['desa_kelurahan']['kecamatan']['nama'])?>
                Kab. <?=ucwords($pd['desa_kelurahan']['kecamatan']['kotakab']['nama'])?>
              </td>
            </tr>
            <tr>
              <td>Luas Terbakar</td>
              <td>
                <?=$pemadaman['luas_terbakar']?> Ha
              </td>
            </tr>
            <tr>
              <td>Luas Dipadamkan</td>
              <td><?=$pemadaman['luas_dipadamkan']?> Ha</td>
            </tr>
            <tr>
              <td>Tipe Kebakaran</td>
              <td></td>
            </tr>
            <tr>
              <td>Vegetasi</td>
              <td>
              <?php
                $vegs = [];
                foreach($pd['kondisi_vegetasi'] as $kv) {
                  array_push($vegs, ucwords($kv['vegetasi']['nama']));
                }
                $vegs = implode(',', $vegs);
                echo $vegs;
              ?>
              </td>
            </tr>
            <tr>
              <td>Jenis Tanah</td>
              <td>
              <?php
                $soils = [];
                $gambutDeeps = [];
                foreach($pd['kondisi_tanah'] as $kt) {
                  array_push($soils, ucwords($kt['tanah']['nama']));
                  array_push($gambutDeeps, $kt['kedalaman_gambut']);
                }
                $soils = implode(',', $soils);
                echo $soils;
              ?>
              </td>
            </tr>
            <tr>
              <td>Kedalaman Gambut</td>
              <td>
                <?php
                  $gambutDeeps = implode(',', $gambutDeeps);
                  echo $gambutDeeps;
                ?>
              </td>
            </tr>
            <tr>
              <td>Sumber Air</td>
              <td>
                <?php
                  $waterSources = [];
                  $waterDeeps = [];
                  foreach($pd['kondisi_sumber_air'] as $ksa) {
                    array_push($waterSources, ucwords($ksa['sumber_air']['name']));
                    array_push($waterDeeps, $ksa['kedalaman']);
                  }
                  $waterSources = implode(',', $waterSources);
                  echo $waterSources;
                ?>
              </td>
            </tr>
            <tr>
              <td>Pemilik Lahan</td>
              <td></td>
            </tr>
            <tr>
              <td>Hasil Pemadaman</td>
              <td><?=$pemadaman['hasil_pemadaman']?></td>
            </tr>
          </table>
        <?php endforeach ?>
      <?php else: ?>
        <p>-</p>
      <?php endif ?>
    <?php endforeach ?>
  </div>
</body>
</html>
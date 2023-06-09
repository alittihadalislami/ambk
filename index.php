<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="30">
    <title>AMBK - MA Al Ittihad Al Islami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body >
    <?php 
        $jadwal = [
            ["Senin, 13 Maret 2023. 07.30-09.00", "https://tinyurl.com/ambkski", "SKI"],
            ["Senin, 13 Maret 2023. 09.30-11.00", "https://tinyurl.com/ambkindonesia", "Bahasa Indonesia"],
            ["Selasa, 14 Maret 2023. 07.30-09.00", "https://tinyurl.com/ambkaqidah", "Aqidah Ahlak"],
            ["Selasa, 14 Maret 2023. 09.30-11.00", "https://tinyurl.com/ambkhadis", "Ilmu Hadist"],
            ["Rabu, 15 Maret 2023. 07.30-09.00", "https://tinyurl.com/ambkarabw", "Bahasa Arab W"],
            ["Rabu, 15 Maret 2023. 09.30-11.00", "https://tinyurl.com/ambkpkn", "PKn"],
            ["Kamis, 16 Maret 2023. 07.30-09.00", "https://tinyurl.com/ambkmtk", "Matematika W"],
            ["Kamis, 16 Maret 2023. 09.30-11.00", "https://tinyurl.com/ambksejarahw", "Sejarah W"],
            ["Sabtu, 18 Maret 2023. 07.30-09.00", "https://tinyurl.com/ambkqurdis", "Qurdis"],
            ["Sabtu, 18 Maret 2023. 09.30-11.00", "https://tinyurl.com/ambkilmutafsir", "Ilmu Tafsir"],
            ["Ahad, 19 Maret 2023. 07.30-09.00", "https://tinyurl.com/ambkfikih", "Fikih"],
            ["Ahad, 19 Maret 2023. 09.30-11.00", "https://tinyurl.com/ambkinggris", "Bahasa Inggris"],
            ["Senin, 20 Maret 2023. 07.30-09.00", "https://tinyurl.com/ambkarabp", "Bahasa Arab P"],
            ["Senin, 20 Maret 2023. 09.30-11.00", "https://tinyurl.com/ambkusul", "Usul Fikih"]
        ]
    ?>
    <div class="container">
    <div class="col-md-8 mx-auto">
        <div class="row mb-2 text-center">
            <div class="col-md-12 mx-auto mt-5">
                <img src="basmalah.png" width="130px">
            </div>
            <div class="col-md-12 mx-auto mt-3">
                <img src="logo_mii.svg" width="120px">
            </div>
            <div class="mt-3 col-lg-12 mx-auto">
                <h2>Asesmen Madrasah Berbasis Komputer (AMBK)</h2> 
                <h3>MA AL ITTIHAD AL ISLAMI</h3>
                <h5 class="h6 mb-2"><i>Tahun Pelajaran 2022-2023</i></h5>
                <?php 
                // echo "zona waktu dari server: " . date('Y-m-d G:i:s') . " <br>";
                $tz = 'Asia/Jakarta';
                $dt = new DateTime("now", new DateTimeZone($tz));
                $timestamp = $dt->format('d/m/Y G:i:s');
                echo "<div class='fs-6 mt-4'>Saat ini: $timestamp, silahkan refresh (tekan F5)</div>".'<br>';
                ?>
            </div>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Mata Pelajaran</th>
                    <th scope="col">Link Ujian</th>
                </tr>
            </thead>
            <?php  
            
            ?>
            <tbody>
                <?php $no=1; foreach ($jadwal as $jd) : ?>
                <tr class="fw-bold align-middle">
                    <td class="fw-normal"><?=$no++?></td>
                    <td scope="row" class="fw-normal">
                    <?php 
                        date_default_timezone_set("Asia/Jakarta");
                        // echo '<br>';
                        $saat_ini  = date("d-m-Y",time());
                        // echo $jd[0];
                        $x = explode(" ", $jd[0]);
                        echo 'Hari: '.$x[0].'<br>';
                        echo 'Tanggal: '.$x[1].' '.$x[2].' '.$x[3].'<br>';
                        echo 'Jam: '.$x[4];
                        $jam_start = explode("-",$x[4])[0];
                        // echo '<br>';
                        $jam_end = explode("-",$x[4])[1];
                        $jadwal_hari = $x[1]."-03-2023";
                        // echo "<hr>";
                        // echo "sekarang: " . var_dump(time());
                        // echo "<hr>";
                        $jadwal_jam_start = $x[1]."-03-2023 ".$jam_start;
                        // echo " | ";
                        $jadwal_jam_end = $x[1]."-03-2023 ".$jam_end;
                        // echo "<br>";
                        // var_dump( time() > strtotime($jadwal_jam_start) );
                        $cek_mulai = time() > strtotime($jadwal_jam_start);
                        // echo " | ";
                        // var_dump( time() < strtotime($jadwal_jam_end));
                        $cek_selesai = time() < strtotime($jadwal_jam_end);
                    ?>
                    </td>
                    <th><?=$jd[2]?></th>
                    <td>
                        <?php if ($cek_selesai): ?>
                            <?php if ($cek_mulai): ?>
                                <a href="<?=$jd[1]?>">Bismillah, mulai ujian</a>
                            <?php else: ?>
                                <p class="fw-light">Belum waktunya</p>
                            <?php endif ?>
                        <?php else: ?>
                            <p class="fw-light">Selesai</p>
                        <?php endif ?>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <div class="text-right mt-5 mb-5">
            <span>
                <i>Panitia Ujian MII</i> &copy; <?= date('Y'); ?>
            </span>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
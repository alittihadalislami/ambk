<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="30">
    <title>AMBK - MA Al Ittihad Al Islami</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="logo_web.ico" />
    <style>
        body{
            background-color: #0a290a;
            background-image: linear-gradient(349deg, #0a290a 0%, #6bbeb2 50%, #dfd4a8 100%);
        }
        .table>thead,
        .table>thead>tr,
        .table>thead>tr>td, 
        .table>thead>tr>th {
            border-top: 2px solid #f0ad4e;
        }
    </style>
</head>
  <body>
    <?php 
        $curl_handle = curl_init();
        $url = "https://opensheet.elk.sh/1G8VuY7S3K3bDrFbayuf99MDwIWNsfViKVYnGPHbdTMU/1";
        curl_setopt($curl_handle, CURLOPT_URL, $url);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
        $curl_data = curl_exec($curl_handle);
        curl_close($curl_handle);
        $jadwal = json_decode($curl_data);
        // var_dump($jadwal[0]);
        // $jadwal = [
        //     ["Senin, 26 Februari 2023. 07.30-09.00", "https://tinyurl.com/ambkski", "SKI"],
        //     ["Senin, 26 Februari 2023. 09.30-11.00", "https://tinyurl.com/ambkindonesia", "Bahasa Indonesia"],
        //     ["Selasa, 27 Februari 2023. 07.30-09.00", "https://tinyurl.com/ambkaqidah", "Aqidah Ahlak"],
        //     ["Selasa, 27 Februari 2023. 09.30-11.00", "https://tinyurl.com/ambkhadis", "Ilmu Hadist"],
        //     ["Rabu, 28 Februari 2023. 07.30-09.00", "https://tinyurl.com/ambkarabw", "Bahasa Arab W"],
        //     ["Rabu, 28 Februari 2023. 09.30-11.00", "https://tinyurl.com/ambkpkn", "PKn"],
        //     ["Kamis, 29 Februari 2023. 07.30-09.00", "https://tinyurl.com/ambkmtk", "Matematika W"],
        //     ["Kamis, 29 Februari 2023. 09.30-11.00", "https://tinyurl.com/ambksejarahw", "Sejarah W"],
        //     ["Sabtu, 02 Maret 2023. 07.30-09.00", "https://tinyurl.com/ambkqurdis", "Qurdis"],
        //     ["Sabtu, 02 Maret 2023. 09.30-11.00", "https://tinyurl.com/ambkilmutafsir", "Ilmu Tafsir"],
        //     ["Ahad, 03 Maret 2023. 07.30-09.00", "https://tinyurl.com/ambkfikih", "Fikih"],
        //     ["Ahad, 03 Maret 2023. 09.30-11.00", "https://tinyurl.com/ambkinggris", "Bahasa Inggris"],
        //     ["Senin, 04 Maret 2023. 07.30-09.00", "https://tinyurl.com/ambkarabp", "Bahasa Arab P"],
        //     ["Senin, 04 Maret 2023. 09.30-11.00", "https://tinyurl.com/ambkusul", "Usul Fikih"]
        // ]
    ?>
    <div class="container">
    <div class="col-md-8 mx-auto">
        <div class="row mb-2 text-center">
            <div class="col-md-12 mx-auto mt-5">
                <img src="basmalah.png" width="130px">
            </div>
            <div class="col-md-12 mx-auto mt-3 flex">
                <div class="ml-2 mb-1">
                    <!-- <img src="logo_mii.svg" width="120px"> -->
                    <img src="logo_MA.png" width="300px">
                </div>
                <div class="mt-5">
                    <img src="logo_am_2024.png" width="700px">
                </div>
            </div>
            <div class="mt-4 col-lg-12 mx-auto">
                <!-- <a href="https://docs.google.com/forms/d/e/1FAIpQLSfykt4pgOMHLjmtXOBb2FPDakpvVX48rKFaF8Za7NfPmibUXw/viewform" class="btn btn-danger" role="button" aria-disabled="true">COBAAM</a> -->
                <!-- <h2>Asesmen Madrasah Berbasis Komputer (AMBK)</h2>  -->
                <!-- <h3>MA AL ITTIHAD AL ISLAMI</h3> -->
                <!-- <h5 class="h6 mb-2"><i>Tahun Pelajaran 2023-2024</i></h5> -->
                <?php 
                // echo "zona waktu dari server: " . date('Y-m-d G:i:s') . " <br>";
                $tz = 'Asia/Jakarta';
                $dt = new DateTime("now", new DateTimeZone($tz));
                $timestamp = $dt->format('d/m/Y G:i:s');
                echo "<div class='fs-6 mt-3'>Saat ini: $timestamp, silahkan refresh (tekan F5)</div>".'<br>';
                ?>
            </div>
        </div>
        <table class="table table-striped table-success table-hover">
            <thead>
                <tr class="text-center">
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
                    <td class="fw-normal text-center"><?=$no++?></td>
                    <td scope="row" class="fw-normal">
                    <?php 
                        date_default_timezone_set("Asia/Jakarta");
                        // echo '<br>';
                        $saat_ini  = date("d-m-Y",time());
                        // echo $jd->hari_str;
                        echo 'Hari: '.$jd->hari.'<br>';
                        echo 'Tanggal: '.$jd->hari_str.'<br>';
                        echo 'Jam: '.$jd->jam_start.' sd. '.$jd->jam_end.'<br>';
                        // echo "<hr>";
                        // echo "sekarang: " . var_dump(time());
                        // echo "<hr>";
                        $jadwal_jam_start = $jd->tgl_str;
                        // echo "jadwal jam start = " . $jadwal_jam_start;
                        // echo " | ";
                        $jadwal_jam_end = $jd->tgl_end;
                        // echo "<br>";
                        // var_dump( time() > strtotime($jadwal_jam_start) );
                        $cek_mulai = time() > strtotime($jadwal_jam_start);
                        // echo " | ";
                        // var_dump( time() < strtotime($jadwal_jam_end));
                        $cek_selesai = time() < strtotime($jadwal_jam_end);
                    ?>
                    </td>
                    <th><?=$jd->mapel?></th>
                    <td>
                        <?php if ($cek_selesai): ?>
                            <?php if ($cek_mulai): ?>
                                <a class="text-danger text-decoration-none" href="<?=$jd->link?>">
                                    Bismillah, mulai ujian
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                                        <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                                    </svg>
                                </a>
                            <?php else: ?>
                                <p class="fw-light">Belum waktunya</p>
                            <?php endif ?>
                        <?php else: ?>
                            <p class="fw-light text-success">
                                Selesai
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check2-all" viewBox="0 0 16 16">
                                    <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0zm-4.208 7-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0"/>
                                    <path d="m5.354 7.146.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708"/>
                                </svg>
                            </p>
                        <?php endif ?>
                    </td>
                </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        <div class="text-right mt-5 mb-5">
            <span class="text-light fw-bold">
                <i>Panitia Ujian MII</i> &copy; <?= date('Y'); ?>
            </span>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>
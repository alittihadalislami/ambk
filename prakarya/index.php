<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIK PRAKARYA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="https://icon.horse/icon/alittihadalislami.org" type="image/x-icon">
    <style>
        body {
            background: rgb(99,224,196);
            background: linear-gradient(90deg, rgba(125,226,203,1) 54%, rgba(255,255,255,1) 100%);
        }
    </style>
</head>
<body>

    <div class="container mt-5 py-5">
        <div class="row">
            <h1 class="mt-4 text-center"> Ujian Praktik TIK-PRAKARYA</h1>
        </div>

        <div class="row mt-4">
            <div class="col-12">
                <div class="input-group">
                    <input type="text" maxlength="16" id="nik" class="fw-bold form-control form-control-lg is-invalid" placeholder="Masukkan nomor NIK yang terdaftar pada SIM-Ma'had" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><a class="text-decoration-none text-dark fw-bold" href="#">N I K</a></span>
                </div>
                <span id="ket_nik" class="fw-light ml-5">Silahkan masukkan nik, 16 angka</span>

                <table id="tabel" class="table table-striped mt-5 d-none">
                    <tbody>
                        <tr>
                            <td class="col-3">Madrasah</td>
                            <td class="fw-bold fs-5">MA AL ITTIHAD AL ISLAMI</td>
                        </tr>
                        <tr>
                            <td>Tahun</td>
                            <td class="fw-bold fs-5"><?php echo date("Y"); ?></td>
                        </tr>
                        <!-- <tr>
                            <td>Mata Pelajaran</td>
                            <td class="fw-bold fs-5">TIK - Prakarya</td>
                        </tr> -->
                        <tr>
                            <td>Hari, Tanggal dan Jam</td>
                            <?php
                                setlocale(LC_TIME, 'id_ID'); // Mengatur lokalisasi ke bahasa Indonesia
                                $time = time(); // Mendapatkan waktu saat ini dalam bentuk timestamp
                                // Mengubah format waktu menggunakan fungsi date() dan strtotime()
                                $formattedTime = strftime("%d %B %Y %H:%M:%S", $time);
                            ?>
                            <td class="fw-bold fs-5"><?=$formattedTime?></td>
                        </tr>
                        <tr>
                            <td>Token</td>
                            <td class="fw-bold fs-5" id="token">xxxx</td>
                        </tr>
                        <!-- <tr>
                            <td>Nama</td>
                            <td class="fw-bold fs-5">Ahmad Mustofa</td>
                        </tr> -->
                        <tr>
                            <td>Soal Praktik</td>
                            <td>
                                <span id="nama" class="fs-4  fw-bold">Mustofa</span>, tugas praktik untuk anda adalah:
                                <br>
                                <span class="fw-bold">Praktik 1:</span> Silahkan screeshot halaman ini dan simpan dengan format ".JPG", untuk diupload pada form praktik 2, pada hasil screeshot nama madrasah sampai dengan detail tugas praktik harus terlihat dan dapat dibaca.
                                <br>
                                <span class="fw-bold">Praktik 2:</span> Klik <a class="text-success fw-bold text-decoration-none" href="https://docs.google.com/forms/d/e/1FAIpQLScr8edpb0PevjimTlGzhpaxsylCbJln3D2GyRWKmxHXRP1WbQ/viewform" target="_blank">link berikut</a>, dan isi form dengan data valid dari KK dan Ijazah terakhir, melalui akun Gmail masing-masing peserta
                                <br>
                                <span class="fw-bold">Praktik 3:</span> Berikan/tuliskan komentar terhadap 1 postingan dari salah satu media sosial Ma'had Al-Ittihad Al Islami dengan <a href="https://youtu.be/7wJOsGEaz0Y">prinsip INSAN "Internet Sehat dan Aman"</a> dan di akhir komentar <span class="fw-bold">wajib</span> diberikan 2 hashtags <span class="fw-bold">#praktikPrakarya2024 dan <span id="t_token">#12A00007</span></span> (sesuai token masing-masing)
                                <br> medsos pilihan untuk anda:
                                <span id="sosial">
                                    <img src='fb.svg' width='20px'><a class=' text-secondary fw-bold text-decoration-none' target='_blank' href='https://web.facebook.com/mahadalittihadalislami/'> facebook</a>
                                </span>
                                <hr>
                                <span class="fw-bold">Penting!!</span> Pilihan medsos dan token berbeda dengan peserta lain, harus mengikuti dengan intruksi dan link yang ada.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>
        f_nik = document.getElementById('nik')
        f_nama = document.getElementById('nama')
        f_sosial = document.getElementById('sosial')
        f_token = document.getElementById('token')
        t_token = document.getElementById('t_token')
        tabel = document.getElementById('tabel')
        ket_nik = document.getElementById('ket_nik')

        document.querySelector("input").addEventListener("keypress", function (evt) {
            if (evt.which < 48 || evt.which > 57)
            {
                evt.preventDefault();
            }
        });

        async function fetchData(nik) {
            try {
                // Lakukan permintaan GET menggunakan Axios dengan async/await
                const url ='https://opensheet.elk.sh/1pKPekhbDzXQh1APxs3cexeR-xU6UgF3gKI5JgfX_v3I/1'
                const response = await axios.get(url);
                // console.log(response.data);
                hasil = response.data;
                
                const filteredData = hasil.filter(function(item) {
                    return item['no'] == nik; 
                })

                if (filteredData.length < 1){
                    ket_nik.innerHTML = 'NIK tidak ditemukan'
                    return
                }else{
                    ket_nik.innerHTML = 'Alhamdulillah, NIK ditemukan'

                    nik_ = filteredData[0]['no']
                    nama = filteredData[0]['nama']
                    sosial = filteredData[0]['sosial']
                    token = filteredData[0]['token']
                    f_nama.innerHTML = nama
                    f_token.innerHTML = token
                    t_token.innerHTML = '#'+token
                    f_sosial.innerHTML = sosial

                    tabel.classList.remove('d-none')
                }
            } catch (error) {
                console.error(error);
            }
        }
        
        document.getElementById('nik').addEventListener('input', function() {
            // Ambil nilai dari input
            var nik = this.value;

            // Buat regex untuk memeriksa apakah hanya terdiri dari angka dan memiliki panjang 16 digit
            var regex = /^\d{16}$/;

            // Lakukan validasi
            if (regex.test(nik)) {
                // Jika valid, tambahkan kelas 'is-valid' dan hapus kelas 'is-invalid'
                this.classList.add('is-valid');
                this.classList.remove('is-invalid');

                fetchData(nik)

            } else {
                // Jika tidak valid, tambahkan kelas 'is-invalid' dan hapus kelas 'is-valid'
                this.classList.add('is-invalid');
                this.classList.remove('is-valid');
                tabel.classList.add('d-none')

                ket_nik.innerHTML = 'Silahkan masukkan nik, sesuai kartu keluarga, sebanyak 16 angka!'
            }
        });
    </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAKTIK PRAKARYA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

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
                    <input type="text" maxlength="16" id="nik" class="form-control is-invalid" placeholder="Masukkan nomor NIK yang terdaftar pada SIM-Ma'had" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2"><a href="#">N I K</a></span>
                </div>
                <span class="fw-lighter ml-5">jika NIK sudah benar tapi tetap tidak ditemukan, silahkan menghubungi TU</span>
                <table class="table table-striped mt-5">
                    <tbody>
                        <tr>
                            <td class="col-3">Madrasah</td>
                            <td class="fw-bold fs-5">MA AL ITTIHAD AL ISLAMI</td>
                        </tr>
                        <tr>
                            <td>Tahun</td>
                            <td>2024</td>
                        </tr>
                        <tr>
                            <td>Mata Pelajaran</td>
                            <td>TIK - Prakarya</td>
                        </tr>
                        <tr>
                            <td>Hari, Tanggal dan Jam</td>
                            <td>Senin, 20-12-2024</td>
                        </tr>
                        <tr>
                            <td>Token</td>
                            <td>20241220.45456</td>
                        </tr>
                        <tr>
                            <td>Nama</td>
                            <td>Ahmad Mustofa</td>
                        </tr>
                        <tr>
                            <td>Soal Praktik</td>
                            <td>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                                    <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3z"/>
                                </svg>
                                <span class="fw-bold">Praktik 1:</span> Silahkan screeshot halaman ini dan simpan dengan format ".JPG", untuk upload di google drive nanti.
                                <br>
                                <span class="fw-bold">Praktik 2:</span> <a href="https://docs.google.com/forms/d/e/1FAIpQLScr8edpb0PevjimTlGzhpaxsylCbJln3D2GyRWKmxHXRP1WbQ/viewform" target="_blank">Isi form pada link berikut, dengan akun email masing-masing</a>
                                <br>
                                <span class="fw-bold">Praktik 3:</span> Berikan/tuliskan komentar yang baik dan usul yang membangun, terhadap 1 postingan dari media sosial Ma'had Al-Ittihad Al Islami dan di akhir komentar <span class="fw-bold">wajib</span> diberikan hashtags <span class="fw-bold">#praktikPrakarya2024</span>
                                <br>
                                <span class="fw-bold">Penting!!</span> Soal bisa berbeda dengan peserta lain, harap sesuai dengan intruksi dan link yang ada.
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
        async function fetchData() {
            try {
                // Lakukan permintaan GET menggunakan Axios dengan async/await
                const response = await axios.get('https://jsonplaceholder.typicode.com/posts/1');
                console.log(response.data);
            } catch (error) {
                console.error(error);
            }
        }
        fetchData()
        document.getElementById('nik').addEventListener('input', function() {
            // Ambil nilai dari input
            var nik = this.value;

            // Buat regex untuk memeriksa apakah hanya terdiri dari angka dan memiliki panjang 16 digit
            var regex = /^\d{16}$/;

            // Lakukan validasi
            if (regex.test(nik)) {
                // Jika valid, tambahkan kelas 'is-valid' dan hapus kelas 'is-invalid'
                console.log('valid')
                this.classList.add('is-valid');
                this.classList.remove('is-invalid');
            } else {
                // Jika tidak valid, tambahkan kelas 'is-invalid' dan hapus kelas 'is-valid'
                console.log('tidak valid')
                this.classList.add('is-invalid');
                this.classList.remove('is-valid');
            }
        });
    </script>
</body>
</html>
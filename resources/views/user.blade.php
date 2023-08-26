<!DOCTYPE html>
<!-- Design by foolishdeveloper.com -->
<html lang="en">

<head>
    <title>Aplikasi Lembur Pegawai</title>
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&family=Roboto+Mono:wght@700&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link href="adminOld\assets\css\bootstrap.min.css" rel="stylesheet">
    <style media="screen">
        *,
        *:before,
        *:after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background: #448aff;
        }

        .container2 {
            background-color: #ffffff;
            width: 40%;
            min-width: 500px;
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 50%;
            padding: 20px 0;
            padding-bottom: 50px;
            border-radius: 10px;
        }

        .timerDisplay {
            position: relative;
            width: 92%;
            background: #ffffff;
            left: 4%;
            padding: 40px 0;
            font-family: 'Roboto mono', monospace;
            color: #0381bb;
            font-size: 40px;
            display: flex;
            align-items: center;
            justify-content: space-around;
            border-radius: 5px;
            box-shadow: 0 0 20px rgba(0, 139, 253, 0.25);
        }

        .buttons {
            width: 90%;
            margin: 60px auto 0 auto;
            display: flex;
            justify-content: space-around;
        }

        .buttons button {
            width: 120px;
            height: 45px;
            background-color: #205e94;
            color: #ffffff;
            border: none;
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            outline: none;
        }

        .tombol {

            width: 120px;
            height: 45px;
            background-color: #205e94;
            color: #ffffff;
            border: none;
            font-family: 'Poppins', sans-serif;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            outline: none;

        }

        .buttons button:nth-last-child(2) {
            background-color: #d23332;
        }

        .buttons button:nth-last-child(1) {
            background-color: #20b380;
        }
    </style>

</head>

<body>

    <div class="container2" style="margin-top: 200px;">
        <div class="d-flex bg-success">
            <div style="margin-left: 20px;" class="text-left text-white py-2">
                <small class="" style="margin-left: 30px;">Lembur Pegawai PIPENTECH.COM</small>
            </div>
            <div class=" text-white py-2" style="margin-left: 160px;">
                <div class="btn btn-sm btn-light"><a href="/" class="text-dark" onclick="return confirm('Apakah Anda yakin ingin meninggalkan halaman ini?')" style="text-decoration: none;"> Logout </a></div>
            </div>
        </div>
        <div class="timerDisplay mt-4">
            00 : 00 : <span id="jam">00</span> : 000
        </div>
        <div class="buttons">
            <button id="pauseTimer">Pause</button>
            <button id="startTimer">Start</button>
            <a href="#kirim" class="tombol py-2" id="selesai" style="background-color: white; color:white; padding-left:40px; text-decoration:none"> </a>
        </div>
        <div class="container" style="margin-top: 20px;">
            <form action="/tambahLembur" method="post">
                @csrf
                <div class="card">
                    <div class="text-left" style="margin-left: 10px;">
                        <table class="table table-striped">

                            <tr>
                                <th>Nama Pegawai</th>
                                <td>: {{ $nama_pegawai }} </td>
                                <input type="hidden" name="nama_pegawai" value="{{ $nama_pegawai }}">
                            </tr>
                            <tr>
                                <th>Nomor HP</th>
                                <td>: {{ $nomor_hp }} </td>
                                <input type="hidden" name="nomor_hp" value="{{ $nomor_hp }}">
                            </tr>
                            <tr>
                                <th>Jabatan</th>
                                <td>: {{ $jabatan }} </td>
                                <input type="hidden" name="jabatan" value="{{ $jabatan }}">
                            </tr>
                            <tr>
                                <th>Tanggal Lembur</th>
                                <td id="tanggal_lembur">: <span id="spanTanggal"></span> </td>
                                <input type="hidden" id="spanTanggalInput" name="tanggal_lembur" value="">
                            </tr>
                            <tr>
                                <th>Jam Mulai</th>
                                <td id="mulai">: <span id="spanMulai"></span> </td>
                                <input type="hidden" id="spanMulaiInput" name="jam_mulai" value="">
                            </tr>
                            <tr>
                                <th>Jam Selesai</th>
                                <td id="selesai">: <span id="spanSelesai"></span> </td>
                                <input type="hidden" id="spanSelesaiInput" name="jam_selesai" value="">
                            </tr>
                            <tr>
                                <th>Upah PerJam</th>
                                <td>: <span id="upah_perjam"> {{ $upah_perjam }} </span></td>
                                <input type="hidden" id="upah_perjam" name="upah_perjam" value="{{ $upah_perjam }}">
                            </tr>
                            <tr>
                                <th>Total Jam</th>
                                <td id="totalJam">: <span id="spanTotalJam"></span></td>
                            </tr>
                            <tr>
                                <th>Total Upah</th>
                                <td id="totalUpah">: Rp<span id="spanTotalUpah"></span> </td>
                                <input type="hidden" id="spanTotalUpahInput" name="total_upah" value="">
                            </tr>
                            <tr>
                                <th>Hal Yang Dikerjakan</th>
                                <td>: <input type="text" class="" name="hal_yang_dikerjakan" id="coba" required> </td>
                            </tr>
                            <input type="hidden" name="status" value="belum">
                        </table>
                    </div>
                </div>
                <div id="kirim" class="mt-2">
                    <button type="submit" onclick="return confirm('Apakah anda yakin akan keluar?')" class="btn btn-success">Kirim dan Keluar</button>
                    <button type="button" onclick="window.location.reload();" class="btn btn-warning">Reset Data Lembur</button>
                </div>
            </form>
        </div>

    </div>

    <script>
        arrbulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
        date = new Date();
        millisecond = date.getMilliseconds();
        detik = date.getSeconds();
        menit = date.getMinutes();
        jam = date.getHours();
        hari = date.getDay();
        tanggal = date.getDate();
        bulan = date.getMonth();
        tahun = date.getFullYear();
        // document.write(tanggal + "-" + arrbulan[bulan] + "-" + tahun + "<br/>" + jam + " : " + menit + " : " + detik + "." + millisecond);
        // let jam = document.getElementById('jam').innerHTML;
        let tanggalLembur = document.getElementById('spanTanggal');
        let jamMulai = document.getElementById('spanMulai');
        let jamSelesai = document.getElementById('spanSelesai');
        let [milliseconds, seconds, minutes, hours] = [0, 0, 0, 0];
        let timerRef = document.querySelector('.timerDisplay');
        let int = null;
        // document.getElementById('selesai').classList.add('text-success');
        document.getElementById('startTimer').addEventListener('click', () => {
            if (int !== null) {
                clearInterval(int);
            }
            int = setInterval(displayTimer, 10);
        });

        document.getElementById('pauseTimer').addEventListener('click', () => {
            date = new Date();
            detik = date.getSeconds();
            menit = date.getMinutes();
            jam = date.getHours();
            jamSelesai.innerHTML = jam + " : " + menit + " : " + detik;
            document.getElementById('spanSelesaiInput').setAttribute("value", jam + " : " + menit);
            clearInterval(int);
            document.getElementById('selesai').classList.add('text-white');
            document.getElementById('selesai').classList.add('bg-success');
            document.getElementById('selesai').innerHTML = "Kirim";
        });

        document.getElementById('resetTimer').addEventListener('click', () => {
            clearInterval(int);
            [milliseconds, seconds, minutes, hours] = [0, 0, 0, 0];
            timerRef.innerHTML = '00 : 00 : 00 : 000 ';
        });

        function displayTimer() {
            tanggalLembur.innerHTML = tanggal + "-" + arrbulan[bulan] + "-" + tahun;
            document.getElementById('spanTanggalInput').setAttribute("value", tanggal + "-" + arrbulan[bulan] + "-" + tahun);
            jamMulai.innerHTML = jam + " : " + menit + " : " + detik;
            document.getElementById('spanMulaiInput').setAttribute("value", jam + " : " + menit);
            milliseconds += 10;
            if (milliseconds == 1000) {
                milliseconds = 0;
                seconds++;
                if (seconds == 60) {
                    seconds = 0;
                    minutes++;
                    if (minutes == 60) {
                        minutes = 0;
                        hours++;
                    }
                }
            }
            let h = hours < 10 ? "0" + hours : hours;
            let m = minutes < 10 ? "0" + minutes : minutes;
            let s = seconds < 10 ? "0" + seconds : seconds;
            let ms = milliseconds < 10 ? "00" + milliseconds : milliseconds < 100 ? "0" + milliseconds : milliseconds;

            timerRef.innerHTML = ` ${h} : ${m} : ${s} : ${ms}`;
            document.getElementById('spanTotalJam').innerHTML = ` ${h} Jam : ${m} Menit`
            let ansel = s * document.getElementById('upah_perjam').innerHTML;
            document.getElementById('spanTotalUpah').innerHTML = ansel;
            document.getElementById('spanTotalUpahInput').setAttribute("value", ansel);
            // document.getElementById('coba').value = s;
        }
    </script>
</body>

</html>
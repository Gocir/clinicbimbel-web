@extends('base.main')
@section('title', 'Presensi Tentor')
@section('container')
    {{-- Jumbotron --}}
    <div class="container">
        <section class="presence py-5">
            <div class="row justify-content-center">
                <div class="col-xl-4 col-lg-5 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Presensi Bulan Juli-Desember</h4>
                        </div>
                        <div class="card-body">
                            <form
                                action="https://docs.google.com/forms/u/0/d/e/1FAIpQLSd7xX7rYtsrIQC05BAKwvCNc78AgL_JwInsXQpk1Hx7fgm5WQ/formResponse">
                                <div class="mb-3">
                                    <label for="lessonDateSelect" class="form-label">Tanggal Les</label>
                                    <input type="date" class="form-control" id="lessonDate" name="entry.664744930">
                                </div>
                                <div class="mb-3">
                                    <label for="tentorList" class="form-label">Nama Tentor</label>
                                    <input class="form-control" name="entry.733215749" list="tentorListOptions"
                                        id="tentorList" placeholder="Cari Nama Tentor..." required>
                                    <datalist id="tentorListOptions">
                                        <option value="Bimbel">Bimbel</option>
                                        <option value="Adinda">Adinda</option>
                                        <option value="Adm Dina">Adm Dina</option>
                                        <option value="Adm Riska">Adm Riska</option>
                                        <option value="Adm Eni">Adm Eni</option>
                                        <option value="Adm Sukma">Adm Sukma</option>
                                        <option value="Altri">Altri</option>
                                        <option value="Anisa">Anisa</option>
                                        <option value="Anggraeni">Anggraeni</option>
                                        <option value="Annisa Maulidya">Annisa Maulidya</option>
                                        <option value="Ardila">Ardila</option>
                                        <option value="Arina">Arina</option>
                                        <option value="Atta">Atta</option>
                                        <option value="Aulia">Aulia</option>
                                        <option value="Dina">Dina</option>
                                        <option value="Erni">Erni</option>
                                        <option value="Faila">Faila</option>
                                        <option value="Fasya">Fasya</option>
                                        <option value="Fitriana">Fitriana</option>
                                        <option value="Hana">Hana</option>
                                        <option value="Ina">Ina</option>
                                        <option value="Kumala">Kumala</option>
                                        <option value="Kurnia">Kurnia</option>
                                        <option value="Lailatul">Lailatul</option>
                                        <option value="Maharani">Maharani</option>
                                        <option value="Maratun">Maratun</option>
                                        <option value="Mauliddiyah">Mauliddiyah</option>
                                        <option value="Millenda">Millenda</option>
                                        <option value="Minnati">Minnati</option>
                                        <option value="Nisa">Nisa</option>
                                        <option value="Novita">Novita</option>
                                        <option value="Nuke">Nuke</option>
                                        <option value="Nur Hikmah">Nur Hikmah</option>
                                        <option value="Regina">Regina</option>
                                        <option value="Rifatun">Rifatun</option>
                                        <option value="Riska">Riska</option>
                                        <option value="Sabila">Sabila</option>
                                        <option value="Sari Devi">Sari Devi</option>
                                        <option value="Sela">Sela</option>
                                        <option value="Shania">Shania</option>
                                        <option value="Shofa">Shofa</option>
                                        <option value="Safira">Safira</option>
                                    </datalist>
                                </div>
                                <div class="mb-3">
                                    <label for="studentList" class="form-label">Nama Siswa</label>
                                    <input class="form-control" name="entry.1566153838" list="studentListOptions"
                                        id="studentList" placeholder="Cari Nama Siswa..." required>
                                    <datalist id="studentListOptions">
                                        <option value="Abyan">Abyan</option>
                                        <option value="Adeeva">Adeeva</option>
                                        <option value="Aira">Aira</option>
                                        <option value="Alisha">Alisha</option>
                                        <option value="Alisyah Alatas">Alisyah Alatas</option>
                                        <option value="Alvaro_Ngaji">Alvaro_Ngaji</option>
                                        <option value="Alvaro_SD">Alvaro_SD</option>
                                        <option value="Alwi">Alwi</option>
                                        <option value="Amanda">Amanda</option>
                                        <option value="Ammara">Ammara</option>
                                        <option value="Anindita_TK">Anindita_TK</option>
                                        <option value="Anindita_Ngaji">Anindita_Ngaji</option>
                                        <option value="Arfan">Arfan</option>
                                        <option value="Arsyilatus">Arsyilatus</option>
                                        <option value="Aufar">Aufar</option>
                                        <option value="Aurelia & Sean 1">Aurelia & Sean 1</option>
                                        <option value="Azka">Azka</option>
                                        <option value="Azkya">Azkya</option>
                                        <option value="Calista">Calista</option>
                                        <option value="Daffa & Daffi_Ngaji">Daffa & Daffi_Ngaji</option>
                                        <option value="Delisha">Delisha</option>
                                        <option value="Deta">Deta</option>
                                        <option value="Desy">Desy</option>
                                        <option value="Dwi Lestari">Dwi Lestari</option>
                                        <option value="Fafa">Fafa</option>
                                        <option value="Fakhira">Fakhira</option>
                                        <option value="Fakhri">Fakhri</option>
                                        <option value="Farida">Farida</option>
                                        <option value="Farrel">Farrel</option>
                                        <option value="Fawnia">Fawnia</option>
                                        <option value="Gauri">Gauri</option>
                                        <option value="Ghifari">Ghifari</option>
                                        <option value="Habibi">Habibi</option>
                                        <option value="Haidar">Haidar</option>
                                        <option value="Hansel">Hansel</option>
                                        <option value="Immanuel">Immanuel</option>
                                        <option value="Isca">Isca</option>
                                        <option value="Kayana">Kayana</option>
                                        <option value="Kindo">Kindo</option>
                                        <option value="KI Karasyifa">KI Malika</option>
                                        <option value="KI Malika">KI Malika</option>
                                        <option value="KI Naura">KI Naura</option>
                                        <option value="KI Saintek">KI Saintek</option>
                                        <option value="KI Soshum 5">KI Soshum 5</option>
                                        <option value="KE 11 IPA">KE 11 IPA</option>
                                        <option value="KE Adhisti">KE Adhisti</option>
                                        <option value="KE Alby">KE Alby</option>
                                        <option value="KE Atilla, Aurora">KE Atilla, Aurora</option>
                                        <option value="KE Badarudin">KE Badarudin</option>
                                        <option value="KE Daffa Al">KE Daffa Al</option>
                                        <option value="KE Damai">KE Damai</option>
                                        <option value="KE Difa_Ngaji">KE Difa_Ngaji</option>
                                        <option value="KE Difa_TK">KE Difa_TK</option>
                                        <option value="KE Defan">KE Defan</option>
                                        <option value="KE Fairuz">KE Fairuz</option>
                                        <option value="KE Fara">KE Fara</option>
                                        <option value="KE Hannan">KE Hannan</option>
                                        <option value="KE Nagam">KE Nagam</option>
                                        <option value="KE Navila dkk">KE Navila dkk</option>
                                        <option value="KE Nur">KE Nur</option>
                                        <option value="KE Raisa">KE Raisa</option>
                                        <option value="KE Rayya">KE Rayya</option>
                                        <option value="KE Rizka">KE Rizka</option>
                                        <option value="KE Zaki">KE Zaki</option>
                                        <option value="KE Qorina">KE Qorina</option>
                                        <option value="Kevin">Kevin</option>
                                        <option value="Khansa">Khansa</option>
                                        <option value="Langit">Langit</option>
                                        <option value="M Habibie">M Habibie</option>
                                        <option value="M Risqi">M Risqi</option>
                                        <option value="M Reza">M Reza</option>
                                        <option value="Marshall">Marshall</option>
                                        <option value="Muhammad">Muhammad</option>
                                        <option value="Mouri">Mouri</option>
                                        <option value="Mulya">Mulya</option>
                                        <option value="Nabihan">Nabihan</option>
                                        <option value="Nabihan_SD">Nabihan_SD</option>
                                        <option value="Nadia">Nadia</option>
                                        <option value="Naira Maulida">Naira Maulida</option>
                                        <option value="Nasrul">Nasrul</option>
                                        <option value="Naswa Rizqi">Naswa Rizqi</option>
                                        <option value="Nataya">Nataya</option>
                                        <option value="Naufal El">Naufal El</option>
                                        <option value="Navila">Navila</option>
                                        <option value="Prabaswara">Prabaswara</option>
                                        <option value="Raja">Raja</option>
                                        <option value="Risni">Risni</option>
                                        <option value="Rizma">Rizma</option>
                                        <option value="Reinissa">Reinissa</option>
                                        <option value="Retno">Retno</option>
                                        <option value="Sabrina Salsa">Sabrina Salsa</option>
                                        <option value="Shabrina">Shabrina</option>
                                        <option value="Shafiyya">Shafiyya</option>
                                        <option value="Shakila">Shakila</option>
                                        <option value="Salwa Rizqi">Salwa Rizqi</option>
                                        <option value="SP2_Aisya, Cintya">SP2_Aisya, Cintya</option>
                                        <option value="SP2_Afna, Talitha">SP2_Afna, Talitha</option>
                                        <option value="SP2_Azalia, Sifa">SP2_Azalia, Sifa</option>
                                        <option value="SP2_Faza, Yolanda SAINTEK">SP2_Faza, Yolanda SAINTEK</option>
                                        <option value="SP2_Naura & Nayla">SP2_Naura & Nayla</option>
                                        <option value="SP2_Raka, Raya">SP2_Raka, Raya</option>
                                        <option value="SP3_Elvina, Kurnia, Rufaida">SP3_Elvina, Kurnia, Rufaida</option>
                                        <option value="SP3_Fadhil, Najwa, Naurah">SP3_Fadhil, Najwa, Naurah</option>
                                        <option value="SP4_Bita, Haikal, Nadya, Raissa">SP4_Bita, Haikal, Nadya, Raissa
                                        </option>
                                        <option value="SP4_Diva">SP4_Diva</option>
                                        <option value="SP4_Dellis dkk">SP4_Dellis dkk</option>
                                        <option value="SP4_Fina, Luthfiyyah, Naura, Tsania">SP4_Fina, Luthfiyyah, Naura,
                                            Tsania</option>
                                        <option value="SP4_Mat, Rey, Salm, Zid">SP4_Mat, Rey, Salm, Zid</option>
                                        <option value="SP5_Bilqis, Jihan, Nabilah, Rosi, Safrina">SP5_Bilqis, Jihan,
                                            Nabilah, Rosi, Safrina</option>
                                        <option value="SP5_Faizul, Ikhsan, Najwa, Ryan, Sakna">SP5_Faizul, Ikhsan, Najwa,
                                            Ryan, Sakna</option>
                                        <option value="Surayah">Surayah</option>
                                        <option value="Syakila">Syakila</option>
                                        <option value="Syarifah_Ngaji">Syarifah_Ngaji</option>
                                        <option value="Syifa">Syifa</option>
                                        <option value="Tuhfa">Tuhfa</option>
                                        <option value="Unggul">Unggul</option>
                                        <option value="Vay">Vay</option>
                                        <option value="Wulan">Wulan</option>
                                        <option value="Xavier">Xavier</option>
                                        <option value="Zahra">Zahra</option>
                                        <option value="Zahrakhan">Zahrakhan</option>
                                        <option value="Zahrotun">Zahrotun</option>
                                        <option value="Zulfan">Zulfan</option>
                                    </datalist>
                                    </select>
                                    <div id="studentNameHelp" class="form-text">*Nama Siswa yang dipilih harus sesuai
                                        jadwal.
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="inputDuration" class="form-label">Durasi Les</label>
                                    <div class="input-group flex-nowrap">
                                        <input type="number" name="entry.606126148" class="form-control"
                                            placeholder="Contoh: 30" aria-label="Duration" min="1" max="180"
                                            aria-describedby="addon-wrapping" required>
                                        <span class="input-group-text" id="addon-wrapping">menit</span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="inputJenjang" class="form-label">Jenjang</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="entry.229765173" id="flexRadioTK"
                                            value="TK">
                                        <label class="form-check-label" for="flexRadioTK">TK</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="entry.229765173" id="flexRadioSD"
                                            value="SD">
                                        <label class="form-check-label" for="flexRadioSD">SD</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="entry.229765173"
                                            id="flexRadioSMP" value="SMP">
                                        <label class="form-check-label" for="flexRadioSMP">SMP</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="entry.229765173"
                                            id="flexRadioSMA" value="SMA">
                                        <label class="form-check-label" for="flexRadioSMA">SMA/K</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="entry.229765173"
                                            id="flexRadioUTBK" value="UTBK/Dinas/Kuliah/Mandiri">
                                        <label class="form-check-label"
                                            for="flexRadioUTBK">UTBK/Dinas/Kuliah/Mandiri</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="entry.229765173"
                                            id="flexRadioMengajiA" value="NGAJI A">
                                        <label class="form-check-label" for="flexRadioMengajiA">Mengaji A</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="entry.229765173"
                                            id="flexRadioMengajiB" value="NGAJI B">
                                        <label class="form-check-label" for="flexRadioMengajiB">Mengaji B</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="classSelect" class="form-label">Kelas</label>
                                    <select id="classSelect" class="form-select" name="entry.85848459" required>
                                        <option name="name" value="1" disabled selected>Pilih Jenjang</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="inputSubject" class="form-label">Mata Pelajaran</label>
                                    <input type="text" name="entry.1536804292" class="form-control" id="inputSubject"
                                        aria-describedby="subjectHelp" placeholder="Contoh: Bahasa Inggris" required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputMaterial" class="form-label">Materi</label>
                                    <input type="text" name="entry.1647132480" class="form-control" id="inputMaterial"
                                        aria-describedby="materialHelp" placeholder="Contoh: Aljabar Linier" required>
                                </div>
                                <div class="mb-3">
                                    <label for="inputAdditionalReport" class="form-label">Laporan Tambahan</label>
                                    <textarea class="form-control" name="entry.1311512187" id="FormControlTextarea"
                                        rows="3"
                                        placeholder="Tuliskan Nama Siswa dan Jumlah Uang, apabila ada yang menitipkan."></textarea>
                                </div>
                                <button type="submit" class="btn btn-action fw-bold">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    {{-- End of Jumbotron --}}
    <script>
        var listTK = [{
            name: 'Kelas 0',
            value: '0'
        }];

        var listSD = [{
            name: 'Kelas 1',
            value: '1'
        }, {
            name: 'Kelas 2',
            value: '2'
        }, {
            name: 'Kelas 3',
            value: '3'
        }, {
            name: 'Kelas 4',
            value: '4'
        }, {
            name: 'Kelas 5',
            value: '5'
        }, {
            name: 'Kelas 6',
            value: '6'
        }];

        var listSMP = [{
            name: 'Kelas 7',
            value: '7'
        }, {
            name: 'Kelas 8',
            value: '8'
        }, {
            name: 'Kelas 9',
            value: '9'
        }];

        var listSMA = [{
            name: 'Kelas 10',
            value: '10'
        }, {
            name: 'Kelas 11',
            value: '11'
        }, {
            name: 'Kelas 12',
            value: '12'
        }];

        var listKuliah = [{
            name: 'Kelas 13',
            value: '13'
        }];

        var listNgajiA = [{
            name: 'Kelas 14',
            value: '14'
        }];

        var listNgajiB = [{
            name: 'Kelas 15',
            value: '15'
        }];

        $(document).ready(function() {
            $("input[name='entry.229765173']").on('change', function() {

                if ($(this).is(':checked') && $(this).val() == 'TK') {
                    $('#classSelect').empty()
                    $.each(listTK, function(index, value) {
                        $('#classSelect').append('<option value="' + value.value + '">' + value
                            .name +
                            '</option>');
                    });
                } else if ($(this).is(':checked') && $(this).val() == 'SD') {
                    $('#classSelect').empty()
                    $.each(listSD, function(index, value) {
                        $('#classSelect').append('<option value="' + value.value + '">' + value
                            .name +
                            '</option>');
                    });
                } else if ($(this).is(':checked') && $(this).val() == 'SMP') {
                    $('#classSelect').empty()
                    $.each(listSMP, function(index, value) {
                        $('#classSelect').append('<option value="' + value.value + '">' + value
                            .name +
                            '</option>');
                    });
                } else if ($(this).is(':checked') && $(this).val() == 'SMA') {
                    $('#classSelect').empty()
                    $.each(listSMA, function(index, value) {
                        $('#classSelect').append('<option value="' + value.value + '">' + value
                            .name +
                            '</option>');
                    });
                } else if ($(this).is(':checked') && $(this).val() == 'UTBK/Dinas/Kuliah/Mandiri') {
                    $('#classSelect').empty()
                    $.each(listKuliah, function(index, value) {
                        $('#classSelect').append('<option value="' + value.value + '">' + value
                            .name +
                            '</option>');
                    });
                } else if ($(this).is(':checked') && $(this).val() == 'NGAJI A') {
                    $('#classSelect').empty()
                    $.each(listNgajiA, function(index, value) {
                        $('#classSelect').append('<option value="' + value.value + '">' + value
                            .name +
                            '</option>');
                    });
                } else if ($(this).is(':checked') && $(this).val() == 'NGAJI B') {
                    $('#classSelect').empty()
                    $.each(listNgajiB, function(index, value) {
                        $('#classSelect').append('<option value="' + value.value + '">' + value
                            .name +
                            '</option>');
                    });
                } else {}
            });
        });
    </script>
@endsection

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=320, height=device-height, target-densitydpi=medium-dpi" />
    <link href = "bootstrap css.css" rel = "stylesheet">
    <link href = "responsive.css" rel = "stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Percobaan Bootstrap Hilda </title>
  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" id = "headeratas">
        <div class="container">
          <a class="navbar-brand" href="#">HZEP</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#aboutme">About Me</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#riwayatpendidikan">Riwayat Pendidikan</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#riwayatorganisasi">Riwayat Organisasi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#hubungisaya">Contact Person</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#KritikSaran">Kritik dan Saran</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- akhir navbar -->
    <!-- Jumbotron -->
    <section class="jumbotron">
      <div class="jumbotron jumbotron-fluid">
        <div class="container" id = "container1">
            <h1 class="text-center">WELCOME TO MY PROFILE.</h1>
            <p class="text-center">Ini adalah portofolio singkatku.</p>
        </div>
      </div>
      <div class="container" id = "container2">
        <section id = "aboutme">
          <div class="row" id = "row1">
            <div class="col-md-2">
             <img src="image/IMG_9865.JPG" class="rounded-circle">
            </div>
            <div class="col-md-8">
              <h2 style="color: #36486b; font-size: 35px;">About Me</h2>
             <p>Saya seorang junior developer dan mahasiswi semester 5 di Jurusan Matematika yang berfokus pendalaman pada Ilmu Komputer dengan IPK 3.74. Saya memiliki keterampilan dalam bahasa pemrograman, khususnya HTML, CSS, Python dan SQL. Saya sekarang mencari untuk lebih mengembangkan dan menggunakan 
              keterampilan saya untuk magang di penempatan industri, khususnya dalam data science dan machine learning.</p>
            </div>
          </div>
        </section>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#87bdd8" fill-opacity="1" d="M0,64L30,58.7C60,53,120,43,180,74.7C240,107,300,181,360,218.7C420,256,480,256,540,250.7C600,245,660,235,720,197.3C780,160,840,96,900,90.7C960,85,1020,139,1080,154.7C1140,171,1200,149,1260,165.3C1320,181,1380,235,1410,261.3L1440,288L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
        <section id = "riwayatpendidikan">
          <div class="row" id = "row2" >
            <h4 class = "fw-bold" style="text-align: center; color: #36486b;">RIWAYAT PENDIDIKAN</h4>
          <div class="col-md-6">
            <h5 class = "fw-bold" style="text-align: center; color: #87bdd8;">PENDIDIKAN FORMAL</h5>
            <table class="table table-borderless">
              <tbody class = "text-center">
                <tr>
                  <td class = "fw-bold">UIN Maulana Malik Ibrahim Malang</td>
                  <td class="text-start">
                    <ul class = "list-unstyled">
                      <li>S1 - Matematika</li>
                      <li><small>Agustus 2020 - Sekarang</small></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td class="fw-bold">MAS AL-HAMID Jakarta Timur</td>
                  <td class = "text-start">
                    <small>Juli 2017 - Juli 2020</small>
                  </td>
                </tr>
            </table>
            </div>
            <div class="col-md-5">
              <h5 class = "fw-bold" style="text-align: center; color: #87bdd8">PENDIDIKAN NON-FORMAL</h5>
              <table class="table table-borderless">
                <tbody class = "text-center">
                  <tr>
                    <td class = "fw-bold">Pondok Pesantren AL-HAMID Jakarta Timur</td>
                    <td class="text-start">
                      <ul class = "list-unstyled">
                        <li>Salafiyah</li>
                        <li><small>Juni 2012 - Juli 2017</small></li>
                      </ul>
                    </td>
                  </tr>
                    <tr>
                      <td class = "fw-bold">Fresh Graduate Academy (FGA) - Digitalent Kominfo</td>
                      <td class="text-start">
                        <ul class = "list-unstyled">
                          <li>Big Data Using Python</li>
                          <li><small>Juli - September 2022</small></li>
                        </ul>
                      </td>
                  </tr>
              </table>
        </div>
      </section>
         <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 120 1350 190"><path fill="#daebe8" fill-opacity="1" d="M0,256L48,245.3C96,235,192,213,288,213.3C384,213,480,235,576,250.7C672,267,768,277,864,272C960,267,1056,245,1152,213.3C1248,181,1344,139,1392,117.3L1440,96L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
         <section id = "riwayatorganisasi">
          <div class="row" id = "row3">
            <h4 class = "text-center fw-bold" id = "isibio">RIWAYAT ORGANISASI</h4>
            <table class="table table-borderless">
              <thead>
                <tr>
                  <th><img class = "rounded-circle" id = "logohmps" src="image/0. HMPS INTEGRAL MATEMATIKA.png"></th>
                  <th><img class = "rounded-circle" id = "logohmps" src="image/0. HMPS INTEGRAL MATEMATIKA.png"></th>
                  <th><img id = "logoosis" class = "rounded-circle" src="image/osis.jpg"></th>
                </tr>
              </thead>
              <tbody class = "container">
                <tr id ="ketorganisasi">
                  <td id="ket1">
                    <p class = "fw-bold">HMPS "Integral" Matematika</p>
                    <p>Sekretaris 1</p>
                    <small class="text-start">Juni 2022 - Present</small>
                    <small>
                    <ul style="text-align: left;">
                      <li>Bertanggung Jawab atas manajemen atau pengelolaan administrasi kesekretariatan organisasi</li>
                      <li>Memimpin dan mengoordinasi pelaksanaan mekanisme operasional kesekretariatan</li>
                    </ul>
                  </small>
                  </td>
                  <td id = "ket1">
                    <p class = "fw-bold">HMPS "Integral" Matematika</p>
                    <p>Divisi Peminatan Minat dan Bakat</p>
                    <small>Juni 2021 - November 2021</small>
                    <small>
                      <ul style="text-align: left;">
                        <li>Mewadahi dan menyalurkan minat bakat mahasiswa Matematika UIN Malang</li>
                        <li>Mengadakan kegiatan-kegiatan dalam rangka pengembangan dan peningkatan kemampuan sesuai minat dan bakat mahasiswa Matematika UIN Malang</li>
                      </ul>
                    </small>
                  </td>
                  <td id = "ket2">
                    <p class = "fw-bold">OSIS MAS AL-HAMID JAKARTA</p>
                    <p>Ketua Divisi Kesenian</p>
                    <small>Januari 2019 - Juli 2019</small>
                    <small>
                      <ul style="text-align: left;">
                        <li>Mengonsep seluruh dekorasi dan desain kegiatan OSIS MAS AL-HAMID</li>
                        <li>Mewadahi kreativitas siswa MAS AL-HAMID dalam bidang desain</li>
                      </ul>
                    </small>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
         </section>  
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#daebe8" fill-opacity="1" d="M0,32L30,53.3C60,75,120,117,180,149.3C240,181,300,203,360,197.3C420,192,480,160,540,165.3C600,171,660,213,720,240C780,267,840,277,900,240C960,203,1020,117,1080,117.3C1140,117,1200,203,1260,208C1320,213,1380,139,1410,101.3L1440,64L1440,0L1410,0C1380,0,1320,0,1260,0C1200,0,1140,0,1080,0C1020,0,960,0,900,0C840,0,780,0,720,0C660,0,600,0,540,0C480,0,420,0,360,0C300,0,240,0,180,0C120,0,60,0,30,0L0,0Z"></path></svg>
              <section id = "hubungisaya">
              <div class="container">
                <div class="text-center mt-5">
                  <h5 class="fw-bold" style="color: #36486b;">CONTACT PERSON</h5></div>
             </div>
             <table class="table table-borderless" id = "kontakperson">
              <tbody class = "text-center mb-5">
                <tr>
                  <td class="fw-bold" style="color: #667292;">GITHUB</td>
                  <td><nav><a href="https://github.com/hildazaqya"><img src="image/github.png" width="50px"></a></nav></td>
                </tr>
                <tr>
                  <td class="fw-bold" style="color: #667292;">INSTAGRAM</td>
                  <td><nav><a href="https://www.instagram.com/hildazaqya/"><img src="https://cdn-icons-png.flaticon.com/512/174/174855.png" width="50px"></a></nav></td>
                </tr>
                <tr>
                  <td class="fw-bold" style="color: #667292;">TWITTER</td>
                  <td ><nav><a href="https://twitter.com/sambatanpemalas"><img src="image/twitter1.png" width="53px" height= "80px" id = "twt" style="margin-left: 10px;"></nav></a></td>
                    </tr>
                    </tbody>
            </table>
              <section id="KritikSaran">
                <form>
                 <label id="kritiksaran" class="form-label fw-bold" style="color: #36486b; padding-top: 30px;">KRITIK DAN SARAN</label>
                 <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                 <div id="emailHelp" class="form-text">We'll never share your text with anyone else.</div>
               <div class="mb-3 form-check">
                 <input type="checkbox" class="form-check-input" id="exampleCheck1">
                 <label class="form-check-label text-center" for="exampleCheck1">Check me out</label>
               </div>
               <button type="submit" id = "submit" class="btn">Submit</button>
             </form>
            </section>
             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 150 1040 170"><path fill="#87bdd8" fill-opacity="0.9" d="M0,224L34.3,208C68.6,192,137,160,206,154.7C274.3,149,343,171,411,197.3C480,224,549,256,617,250.7C685.7,245,754,203,823,197.3C891.4,192,960,224,1029,234.7C1097.1,245,1166,235,1234,240C1302.9,245,1371,267,1406,277.3L1440,288L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
        </section>
    <div class="footer">
      <div class="footer-logo">HZEP Website</div>
      <div class="footer-list">
        <ul>
          <li><a class = "nav-link" href = "#aboutme">About Me</a></li>
          <li><a class = "nav-link" href = "#riwayatpendidikan">Riwayat Pendidikan</a></li>
          <li><a class = "nav-link" href = "#riwayatorganisasi">Riwayat Organisasi</a></li>
          <li><a class = "nav-link" href = "#Kritiksaran">Kritik dan Saran</a></li>
          <li><a class = "nav-link" href = "#hubungisaya">Contact Person</a></li>
        </ul>
      </div>
    </div>
    <!-- Akhir Jumbotron -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
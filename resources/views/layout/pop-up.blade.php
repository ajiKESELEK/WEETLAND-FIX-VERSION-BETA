<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/style_dashboard.css') }}" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- ===============>POP UP - FATURES<====================== -->
    <div class="Pop-up-new text-white" id="popUp_Features">
        <h1 class="features-header">FEATURES</h1>

        <div class="d-grid gap-2 m-5">
            <button class="btn active text-white" id="btn-tutup">Tutup</button>
        </div>
    </div>
    </div>

    <!-- ===============>POP UP - LEARN<====================== -->
    <div class="Pop-up-new text-white" id="popUp_Learn2">
        <h1 class="features-header">LEARN</h1>
        <div class="d-grid gap-2 m-5">
            <button class="btn active text-white" id="btn-tutup2">Tutup</button>
        </div>
    </div>
    </div>

    <!-- ===============>POP UP - ABOUT<====================== -->
    <div class="Pop-up-new text-white" id="popUp_About">
        <h1 class="features-header">ABOUT</h1>
        <hr>
        <div class="m-5">
            <h2>About game:</h2>
            <p>
                Kalimantan Wetland adalah Implementasi Permainan Game Arcade untuk Mengenal Ekosistem di Lahan Basah
                Kalimantan Selatan adalah sebuah permainan yang bertujuan untuk memperkenalkan dan mengedukasi pemain
                mengenai keunikan dan keindahan lahan basah (wetland) yang terdapat di daerah Banjarmasin, Indonesia.
                Game ini dirancang dengan grafis yang menarik dan detail, sehingga pemain dapat merasakan pengalaman
                yang mendalam saat menjelajahi lahan basah virtual. Selain itu, game ini juga akan menyajikan informasi
                mengenai lahan basah di Banjarmasin, termasuk keanekaragaman hayati yang ada di sana, peran ekosistem
                lahan basah dalam menjaga keseimbangan lingkungan, serta upaya konservasi yang dilakukan untuk
                melestarikan lahan basah tersebut.
            </p>
        </div>
        <hr>
        <h2 class="ms-5">Developer:</h2>
        <div class="flex-container_2">
            <div>
              <a href="https://www.instagram.com/aku_aji.blend?igsh=cmd6eWtkMjRieGE=" target="_blank" style="text-decoration: none; color: inherit;">
                <img src="img/aji.jpg" class="image_profil">
                <h4>Abdul Hayyi</h4>
                <p>Full stack developer</p>
                <p>Click to Instagram</p>
            </div>
            <div>
              <a href="https://www.instagram.com/akuraihaan?igsh=MXJndG5ueWxheWhxdw==" target="_blank" style="text-decoration: none; color: inherit;">
                <img src="img/rehan.jpg" class="image_profil">
                <h4>Taufik Raihandani</h4>
                <p>Full stack developer</p>
                <p>Click to Instagram</p>
              </a>
            </div>        
            <div>
              <a href="https://www.instagram.com/m.ardhabilly__?igsh=MXg3YWN4aTY5d3Qzbw==" target="_blank" style="text-decoration: none; color: inherit;">
                <img src="img/billy.jpg" class="image_profil">
                <h4>Muchammad Ardhabilly</h4>
                <p>Full stack developer</p>
                <p>Click to Instagram</p>
              </a>
            </div>
        </div>
        <div class="d-grid gap-2 m-5">
            <button class="btn active text-white" id="btn-tutup3">Tutup</button>
        </div>
    </div>
    </div>
</body>

<script>
    const btnFeatures = document.getElementById('btn-pop-up');
    const popUp_Features = document.getElementById('popUp_Features');
    const btntutup = document.getElementById('btn-tutup');
    btnFeatures.addEventListener('click', () => {
        popUp_Features.classList.add('show');
    });
    btntutup.addEventListener('click', () => {
        popUp_Features.classList.remove('show');
    });

    const btnLearn = document.getElementById('btn-pop-up2');
    const popUp_Learn2 = document.getElementById('popUp_Learn2');
    const btntutup2 = document.getElementById('btn-tutup2');
    btnLearn.addEventListener('click', () => {
        popUp_Learn2.classList.add('show');
    });
    btntutup2.addEventListener('click', () => {
        popUp_Learn2.classList.remove('show');
    });

    const btnAbout = document.getElementById('btn-pop-up3');
    const popUp_About = document.getElementById('popUp_About');
    const btntutup3 = document.getElementById('btn-tutup3');
    btnAbout.addEventListener('click', () => {
        popUp_About.classList.add('show');
    });
    btntutup3.addEventListener('click', () => {
        popUp_About.classList.remove('show');
    });
</script>

</html>

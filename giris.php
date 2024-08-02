<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);
include ("baglanti.php");

$ad_err = "";
$soyad_err = "";
$cep_no_err = "";
$il_err = "";
$ilce_err = "";
$adres_err = "";

if (isset($_POST["kaydet"])) {

    //AD
    if (empty($_POST["ad"])) {
        $ad_err = "İsim boş geçilemez !";
    } else {
        $ad = $_POST["ad"];
    }

    //SOYAD
    if (empty($_POST["soyad"])) {
        $soyad_err = "Soyisim boş geçilemez !";
    } else {
        $soyad = $_POST["soyad"];
    }
    //cep-NO
    if (empty($_POST["cep_no"])) {
        $cep_no_err = "Cep no boş geçilemez!";
    } else {
        $cep_no = $_POST["cep_no"];
    }


    //İL
    if (empty($_POST["il"])) {
        $il_err = "İL boş geçilemez !";
    } else {
        $il = $_POST["il"];
    }

    //İLCE
    if (empty($_POST["ilce"])) {
        $ilce_err = "İiçe boş geçilemez !";
    } else {
        $ilce = $_POST["ilce"];
    }

    //ADRES
    if (empty($_POST["adres"])) {
        $adres_err = "Adres boş geçilemez !";
    } else {
        $adres = $_POST["adres"];
    }

    //  $il =$_POST["il"];
    //  $ilce =$_POST["ilce"];
    //  $adres =$_POST["adres"];
    //  $cep_no = $_POST["cep_no"];  

    if (empty($ad_err) && empty($soyad_err) && empty($cep_no_err) && empty($il_err) && empty($ilce_err) && empty($adres_err)) {
        $query = $baglanti->prepare("INSERT INTO kisiler (ad, soyad, cep_no, il, ilce, adres) VALUES (?, ?, ?, ?, ?, ?)");
        $insert = $query->execute(array($ad, $soyad, $cep_no, $il, $ilce, $adres));
        if ($insert) {

            echo '<script>
            document.addEventListener("DOMContentLoaded", function() {
                showThankYou("' . htmlspecialchars($ad) . '", "' . htmlspecialchars($soyad) . '");
            });
        </script>';
            // Form verilerini temizle
            $ad = $soyad = $cep_no = $il = $ilce = $adres = "";
        } else {
            echo "Kayıt eklenirken bir hata oluştu.";
        }
    }

}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>4 Eylül Sivas Kongresi</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="MyraStudio" />

    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Magnificpopup Css -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">

    <!--Material Icon -->
    <link rel="stylesheet" type="text/css" href="css/materialdesignicons.min.css" />

    <!--Font Awesome -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />

    <!--Slider-->
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.theme.css" />
    <link rel="stylesheet" href="css/owl.transitions.css" />

    <!-- Custom  Css -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" href="stil.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky">
        <div class="container">
            <a class="navbar-brand logo" href="giris.php">4 EYLÜL SİVAS KONGRESİ</a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" onclick="showLogin()">
                <!-- <i class="mdi mdi-menu"></i> -->
            </button>
        </div>
    </nav>
    <!-- NAVBAR END-->

    <!-- HOME START-->
    <section class="section bg-home" id="home">
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="row vertical-content">
                        <div class="col-lg-7 mt-3">
                            <h5 class="home-small-title text-uppercase text-white-50 mb-4"></h5>

                            <h2 class="home-title text-white mb-4">4 Eylül Sivas Kongresinin Önemi</h2>
                            <!-- <img src="https://js.cx/clipart/boat.png" id="boat"> -->

                            <p class="home-desc text-white" style="display:none;" id="info1">
                                Gazi Mustafa Kemal Atatürk, 19 Mayıs 1919'da Samsun'da başlattığı ulusal kurtuluş
                                mücadelesini Amasya'dan sonra, 27 Haziran 1919'da "güvenilir kent" olarak gördüğü
                                Sivas'a gelerek devam ettirdi. Sivas'ta yapılan toplantıda ülkenin durumu görüşülerek en
                                kısa zamanda kentte milli bir kongre yapılmasına karar verildi.</p>

                            <p class="home-desc text-white" style="display:none;" id="info2">
                                Atatürk başkanlığında 4-11 Eylül 1919 tarihlerinde gerçekleştirilen Sivas Kongresi ile
                                Mustafa Kemal Paşa'nın gençlik yıllarından beri düşündüğü ve seslendirdiği, Samsun'a
                                çıktığı andan itibaren resmi yazışmalarında en önemli mesele olarak yer verdiği "milli
                                egemenlik" ve "milli irade" kavramları devlet hayatına yansıtılmaya başladı.</p>

                            <p class="home-desc text-white" style="display:none;" id="info3">
                                Halkın bütününü kapsayan ilk örgütsel faaliyet Sivas'ta gerçekleştirildi ve Sivas
                                Kongresi, şekli ve içeriği itibarıyla adeta milli bir meclis işlevi gördü. Kongrede yeni
                                seçilen üyelerin katılımıyla yurdun tamamını kapsayan Heyeti Temsiliye, ülkenin
                                kaderinde birinci derecede söz sahibi bir kurul halini aldı, ulusal hareketin meşru
                                organları biçimlendirilmiş oldu.</p>
                            <p class="home-desc text-white" style="display:none;" id="info4">
                                Sivas
                                Kongresi, 7 günlük çalışmayla devletin önündeki
                                engelleri ortadan kaldırarak, halkı bir bütün halinde, çizdiği program doğrultusunda
                                harekete geçirmeyi sağladı. Bu hareket, 9 Eylül 1922'de büyük bir zafere kapı açıp, 29
                                Ekim 1923'te ise Cumhuriyet'in ilanıyla taçlandı.</p>

                        </div>

                        <div class="wrapper">
                            <div class="rec-prism">

                                <div class="face face-front">
                                    <div class="content">
                                        <h2>4 Eylül Anı Kartı</h2>
                                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                            method="post" enctype="multipart/form-data">


                                            <div class="field-wrapper">
                                                <label for="ad" id="ad-label">Ad</label>
                                                <input type="text" class="field-wrapper <?php if (!empty($ad_err)) {
                                                    echo "is-invalid";
                                                } ?>" id="ad" name="ad">
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    <?php echo $ad_err; ?>
                                                </div>
                                            </div>

                                            <div class="field-wrapper">
                                                <label for="soyad" id="soyad-label">Soyad</label>
                                                <input type="text" class="field-wrapper <?php if (!empty($soyad_err)) {
                                                    echo "is-invalid";
                                                } ?>" id="soyad" name="soyad">
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    <?php echo $soyad_err; ?>
                                                </div>
                                            </div>

                                            <div class="field-wrapper">
                                                <label for="cep_no" id="cepno-label">Telefon Numarası</label>
                                                <input type="text" class="field-wrapper <?php if (!empty($cep_no_err)) {
                                                    echo "is-invalid";
                                                } ?>" id="cep_no" name="cep_no">
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    <?php echo $cep_no_err; ?>
                                                </div>
                                            </div>


                                            <div class="field-wrapper">
                                                <div class="row g-3">
                                                    <!-- İL -->
                                                    <div class="col-6">
                                                        <div class="field-wrapper">
                                                            <label for="il" id="il-label">İl *</label>
                                                            <select class="is-invalid <?php if (!empty($il_err)) {
                                                                echo "is-invalid";
                                                            } ?>" id="il" name="il">
                                                                <option value="0"></option>
                                                                <?php
                                                                $iller = $baglanti->query("SELECT * FROM iller")->fetchAll(PDO::FETCH_ASSOC);
                                                                foreach ($iller as $il) {
                                                                    $il_id = $il['il_id'];
                                                                    $il_adi = $il['il_adi'];
                                                                    ?>
                                                                    <option value="<?php echo $il_adi; ?>">
                                                                        <?php echo $il_adi; ?>
                                                                    </option>
                                                                <?php } ?>
                                                            </select>
                                                            <div id="validationServerUsernameFeedback"
                                                                class="invalid-feedback"><?php echo $il_err; ?>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- İLCE  -->
                                                    <div class="col-6">
                                                        <div class="field-wrapper">
                                                            <label for="ilce" id="ilce-label">İlçe *</label>
                                                            <select class="is-invalid <?php if (!empty($ilce_err)) {
                                                                echo "is-invalid";
                                                            } ?>" id="ilce" name="ilce">
                                                                <option value="0"> </option>
                                                            </select>
                                                            <div id="validationServerUsernameFeedback"
                                                                class="invalid-feedback">
                                                                <?php echo $ilce_err; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="field-wrapper">
                                                <label for="adres" id="adres-label">Adres</label>
                                                <input type="text" class="field-wrapper <?php if (!empty($adres_err)) {
                                                    echo "is-invalid";
                                                } ?>" id="adres" name="adres">
                                                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                                    <?php echo $adres_err; ?>
                                                </div>
                                            </div>

                                            <div class="field-wrapper">

                                                <button type="submit" name="kaydet" id="loadImage"
                                                    onclick="showThankYou()">KAYDET</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                                <div class="face face-bottom">

<div class="content">


                                    <div class="thank-you-msg">
                                    </div>
                                    <canvas id="imageCanvas" width="210" height="210" style="display: none;"></canvas>
                                    <img id="randomImage" src="" alt="Rastgele Resim" width="210px;" height="210px;"
                                        ondblclick="openImageInNewTab()">
                                    <!-- <button id="loadImage" onclick="showThankYou()">Yeni
                                     Resim</button> -->

                                     </div>
                                </div>
                            </div>
                        </div>

                        <!-- </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- HOME END-->

    <!-- FOOTER START -->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="footer-menu">

                        <img src="images/about/indir.jpeg" class="img-fluid rounded" alt="">
                        <img src="images/about/belediye.jpeg" class="img-fluid rounded" alt="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <h5 class="mb-4 text-uppercase">4 eylül</h5>
                    <div class="text-white">

                        <a href="#facebook"><i class="mdi mdi-facebook facebook footer_mdi"></i></a>
                        <a href="#twitter"><i class="mdi mdi-twitter twitter footer_mdi"></i></a>
                        <a href="#google"><i class="mdi mdi-google google footer_mdi"></i></a>
                    </div>
                    <p class="mb-0">2024 © Dört Eylül Sivas Kongresi</p>

                </div>

            </div>
    </section>
    <!-- FOOTER END -->

    <!-- JAVASCRIPTS -->
    <script src="js/jquery.min.js"></script>
    <!-- SCROLL -->
    <script src="js/scrollspy.min.js"></script>
    <!-- SCROLL -->
    <script src="js/feather.min.js"></script>
    <!--  -->
    <!-- bootstrap -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <!-- easing -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- Portfolio -->
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/isotope.js"></script>
    <!-- scroll -->
    <script src="js/scrollspy.min.js"></script>
    <!-- Counter -->
    <script src="js/jquery.counterup.min.js"></script>
    <!-- Owl Carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Custom -->
    <script src="js/app.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.slim.js"
        integrity="sha256-dWvV84T6BhzO4vG6gWhsWVKVoa4lVmLnpBOZh/CAHU4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>

        // İl seçildiğinde
        $(document).ready(function () {
            $("select[name='il']").on("change", function () {
                let ilId = $(this).val();

                // İl etiketi gizleme
                if (ilId !== "0") {
                    $("#il-label").addClass('hidden');
                } else {
                    $("#il-label").removeClass('hidden');
                }

                // AJAX isteği oluşturma
                $.ajax({
                    url: 'get_ilceler.php',
                    method: 'POST',
                    data: { il: ilId },
                    dataType: 'json',
                    success: function (response) {
                        // Başarılı yanıt işleme
                        let ilceSelect = $("select[name='ilce']");
                        ilceSelect.empty();

                        $.each(response, function (key, value) {
                            ilceSelect.append("<option value='" + value.ilce_adi + "'>" + value.ilce_adi + "</option>");
                        });

                        // İlçe etiketi gizleme
                        if (response.length > 0) {
                            $("#ilce-label").addClass('hidden');
                        } else {
                            $("#ilce-label").removeClass('hidden');
                        }
                    },
                    error: function (xhr, status, error) {
                        // Hata durumunda işleme
                        console.error(error);
                    }
                });
            });
        });

        function hideLabelOnInput(inputId, labelId) {
            var inputElement = document.getElementById(inputId);
            var labelElement = document.getElementById(labelId);

            inputElement.addEventListener('input', function () {
                if (this.value.length > 0) {
                    labelElement.classList.add('hidden');
                } else {
                    labelElement.classList.remove('hidden');
                }
            });
        }

        hideLabelOnInput('ad', 'ad-label');
        hideLabelOnInput('soyad', 'soyad-label');
        hideLabelOnInput('cep_no', 'cepno-label');
        hideLabelOnInput('adres', 'adres-label');

        let prism = document.querySelector(".rec-prism");
        function showLogin() {
            prism.style.transform = "translateZ(-100px)";
        }
        function showThankYou(ad, soyad) {
            let prism = document.querySelector(".rec-prism");
            prism.style.transform = "translateZ(-100px) rotateX(90deg)";

            // Kullanıcı adı ve soyadı ile teşekkür mesajını güncelle
            document.querySelector(".thank-you-msg").innerText = `${ad} ${soyad}`;


            const imageElement = document.getElementById('randomImage');
            const  button =document.getElementById('loadImage');
            function loadRandomImage() {
                fetch('get_images.php')
                    .then(response => response.json())
                    .then(images => {
                        if (images.length > 0) {
                            const randomIndex = Math.floor(Math.random() * images.length);
                            const randomImage = images[randomIndex];
                            imageElement.src = randomImage;
                            const canvas = document.createElement('canvas');
                            const ctx = canvas.getContext('2d');

                            // Resmi yükle ve canvas üzerine çiz
                            const img = new Image();
                            img.src = randomImage;
                            img.onload = function () {
                                canvas.width = img.width;
                                canvas.height = img.height;
                                ctx.drawImage(img, 0, 0);

                                // Metni resmin üzerine yaz
                                ctx.font = '40px Bebas Neue';
                                ctx.fillStyle = 'white';
                                ctx.textAlign = 'left';
                                ctx.textBaseline = 'bottom';
                                ctx.fillText(`${ad} ${soyad}`, 10, canvas.height - 10);

                                imageElement.src = canvas.toDataURL(); // Güncellenmiş resmi göstermek için src'yi değiştir
                                openImageInNewTab(canvas.toDataURL());
                            };
                        } else {
                            imageElement.alt = 'No images found';
                        }
                    })
                    .catch(error => console.error('Error fetching images:', error));
            }

            // Sayfa yüklendiğinde rastgele bir resim yükle
            loadRandomImage();
            button.addEventListener('click',loadRandomImage);
        }

        function openImageInNewTab(imageUrl) {
            var imageElement = document.getElementById('randomImage');
            var imageUrl = imageElement.src;

            if (imageUrl) {
                var img = new Image();
                img.src = imageUrl;

                img.onload = function () {
                    var canvas = document.createElement('canvas');
                    canvas.width = img.width;
                    canvas.height = img.height;
                    var ctx = canvas.getContext('2d');

                    ctx.drawImage(img, 0, 0);

                    // Metni resmin sol alt köşesine yaz
                    ctx.font = '40px Bebas Neue';
                    ctx.fillStyle = 'white';
                    ctx.textAlign = 'left';
                    ctx.textBaseline = 'bottom';
                    ctx.fillText(document.querySelector(".thank-you-msg").innerText, 10, canvas.height - 10);

                    var newTab = window.open();
                    if (newTab) {
                        newTab.document.body.style.margin = '0';
                        newTab.document.body.style.display = 'flex';
                        newTab.document.body.style.justifyContent = 'center';
                        newTab.document.body.style.alignItems = 'center';
                        newTab.document.body.style.height = '100vh';
                        newTab.document.body.style.backgroundColor = 'black';
                        newTab.document.body.innerHTML = '<img src="' + canvas.toDataURL() + '" alt="Rastgele Resim" style="max-width: 100%; max-height: 100%;">';
                        newTab.document.body.innerHTML = '<img src="' + canvas.toDataURL() + '" alt="Rastgele Resim">';
                    } else {
                        console.error('Yeni sekme açılamadı.');
                    }
                };
            } else {
                console.error('Resim URL\'si bulunamadı.');
            }
        }

        window.onload = function () {

            let numOfInfos = 4; // p etiketlerinin sayısı
            let infoElements = [];
            let currentIndex = 0; // Şu anda görünen p etiketinin indexi
            let displayDuration = 20000; // Her p etiketi için görünür olma süresi (10 saniye)
            let fadeDuration = 20000; // Geçiş süresi (2 saniye)

            // p etiketlerini dizine ekle
            for (let i = 1; i <= numOfInfos; i++) {
                let element = document.getElementById(`info${i}`);
                if (element) {
                    infoElements.push(element);
                    element.style.opacity = 0; // Başlangıçta gizle
                    element.style.display = "none"; // Başlangıçta gizle
                }
            }

            function showNextInfo() {
                if (infoElements.length === 0) return;

                // Önceki p etiketini gizle
                if (infoElements.length > 0) {
                    let prevIndex = currentIndex;
                    let prevElement = infoElements[prevIndex];
                    prevElement.style.transition = `opacity ${fadeDuration}ms`;
                    prevElement.style.opacity = 0;
                    setTimeout(() => {
                        prevElement.style.display = "none";
                    }, fadeDuration);
                }

                // Şu anda görünen p etiketini göster
                let currentElement = infoElements[currentIndex];
                currentElement.style.display = "block";
                setTimeout(() => {
                    currentElement.style.transition = `opacity ${fadeDuration}ms`;
                    currentElement.style.opacity = 1;
                }, 1000);

                currentIndex++;
                if (currentIndex >= numOfInfos) {
                    currentIndex = 0; // Başlangıca dön
                }

                // Sonraki p etiketini göstermek için zamanlayıcı
                setTimeout(showNextInfo, displayDuration);
            }

            // İlk p etiketini göster
            showNextInfo();
        }

        // this.onclick = null; // only the first click should start the animation

        // let times = 1;

        // function go() {
        //     if (times % 2) {
        //         boat.classList.remove('back');
        //         boat.style.marginLeft = 30 * times + 200 + '%';
        //     } else {
        //         boat.classList.add('back');
        //         boat.style.marginLeft = 50 * times - 200 + '%';
        //     }

        // }

        // go();

        // boat.addEventListener('transitionend', function () {
        //     // times++;
        //     go();
        // });

        document.addEventListener('DOMContentLoaded', function () {
            var cepNoInput = document.getElementById('cep_no');
            var feedback = document.getElementById('validationServerUsernameFeedback');

            cepNoInput.addEventListener('input', function () {
                var value = this.value.replace(/\D/g, ''); // Sadece rakamları al

                if (value.length > 11) {
                    value = value.slice(0, 11); // Maksimum 11 rakam olacak şekilde kes
                }

                // Format: 0XXX XXX XX XX
                if (value.length > 7) {
                    value = value.replace(/(\d{4})(\d{0,3})/, '$1 $2'); // 0XXX XXX
                }
                if (value.length > 10) {
                    value = value.replace(/(\d{4}) (\d{3})(\d{0,2})/, '$1 $2 $3'); // 0XXX XXX XX
                }
                if (value.length > 13) {
                    value = value.replace(/(\d{4}) (\d{3}) (\d{2})(\d{0,2})/, '$1 $2 $3 $4'); // 0XXX XXX XX XX
                }

                this.value = value; // Formatlı değeri geri ata
            });

            document.getElementById('phone-form').addEventListener('submit', function (event) {
                event.preventDefault(); // Formun gönderilmesini engelle

                var value = cepNoInput.value.replace(/\D/g, ''); // Sadece rakamları al
                if (!validatePhoneNumber(value)) {
                    feedback.textContent = 'Geçersiz telefon numarası!';
                    feedback.style.display = 'block';
                } else {
                    feedback.style.display = 'none';
                    // Form verilerini işleyin (örneğin, sunucuya gönderin)
                    console.log('Form gönderildi:', cepNoInput.value);
                }
            });

            function validatePhoneNumber(number) {
                // Türkiye telefon numarası formatı (önyüz 0 ile başlar ve toplam 11 rakam olmalıdır)
                var phoneRegex = /^0\d{10}$/;
                return phoneRegex.test(number);
            }
        });


    </script>

</body>

</html>
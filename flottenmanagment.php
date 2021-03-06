<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>Flottenmanagement</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-160623800-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-160623800-1');
</script>
</head>

<body>
    <?php 
    $page = 'mobile';
    include 'header.html' ?>

    <!-- CAROUSEL -->

    <div class="container-fluid carousel_hidden p-0">
        <div class="row">
            <div class="col-lg-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/Fuhrparkmanagment-Flottenmanagement.png" class="d-block w-100" alt="...">
                        </div>
                        
                        <div class="carousel-content_mobile">
                            <span>Flottenmanagement</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- /ALL TARIF/ -->

    <div class="container-fluid mobile_marketing_section_one ">
        <div class="row swap_rows">
            <div class="col-lg-6 mobile_marketing_left_content flottenmanagment_list">
                       <h3>Alle Vorteile auf einen Blick</h3>
                        <ul>
                            <li>mehr Transparenz und Sicherheit</li>
                            <li>weniger Kraftstoffkosten</li>
                            <li>umweltfreundlicher Fuhrpark</li>
                            <li>weniger Verwaltung und h??here Effizienz</li>
                            <li>weniger Leerlaufbetrieb</li>
                            <li>unbefugte Nutzung verhindern</li>
                        </ul>
                        <p>Sie sind sich noch nicht sicher, ob dies das passende Produkt f??r Sie ist? Wir beraten Sie gerne im Detail!
                        </p>
                        <p>Dazu senden Sie uns bitte eine Anfrage ??ber unser Kontaktformular.</p>
                        <p>Wir melden uns in K??rze mit einem individuellen Angebot!</p>
                        <p>Wir haben Ihr Interesse geweckt? Fordern Sie jetzt eine kostenlose Beratung an und einer unserer Vertriebspartner wird Sie gerne kontaktieren.</p>
                        <!-- <a href="index.php#top"" class="btn btn-primary btn_telefonie_producte">Ihr individuelles Angebot
</a>     -->
                         <form action="index.php#top" method="post">
                                <button type="submit" name="suburb" class="btn btn-primary btn_telefonie_producte" value="Business Internet 500">Ihr individuelles Angebot</button>
                        </form>
                
            </div>
            <div class="col-lg-6">
                <img src="assets/img/macbook-mock-dribbble.png" class="mac_image"alt="">
            </div>

        </div>
    </div>

   

    <!-- /FOOTER -->

    <?php include 'footer.html' ?>

    <script src="js/scripts.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

</body>

</html>
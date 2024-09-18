<!DOCTYPE html>
<html lang="en">
<head>
    <meta property="og:title" content="Hamsa Multisains Indonesia">
<meta property="og:description" content="Your partner solutions.">
<meta property="og:image" content="https://www.hamsamultisains.com/v4/logo.png">
<meta property="og:url" content="https://www.hamsamultisains.com">
<meta property="og:type" content="website">


<link rel="icon" href="logo.png" type="image/x-icon"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <?php $version = time(); ?>
    <link rel="stylesheet" href="styles.css?v=<?php echo $version; ?>">
    <script src="script.js?v=<?php echo $version; ?>"></script>

    <title>Hamsa Multisains Indonesia</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }
        .container {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .container img {
            width: 100%;
            max-width: 100%;
            height: auto;
            display: block;
        }
        .form-container {
            padding: 20px;
            background-color: #f4f4f4;
            text-align: center;
        }
        .form-container form {
            max-width: 500px;
            margin: 0 auto;
        }
        .form-container input[type="text"], .form-container input[type="email"], .form-container input[type="tel"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        .form-container input[type="submit"] {
            padding: 12px 25px;
            background-color: #25D366; /* Warna hijau seperti icon WhatsApp */
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
            width: 100%;
            max-width: 200px;
        }

        /* WhatsApp Floating Button */
        .whatsapp-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            text-align: center;
            z-index: 1000;
        }
        .whatsapp-text {
            font-size: 12px;
            color: #25D366;
            font-weight: bold;
            margin-bottom: 5px;
            font-family: 'Arial', sans-serif;
        }
        .whatsapp-button {
            background-color: #25D366;
            color: white;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            cursor: pointer;
        }
        .whatsapp-button img {
            width: 30px;
            height: 30px;
        }

        /* Responsive Design */
        @media (min-width: 768px) {
            .container img {
                width: 60%; /* Gambar 60% dari layar di perangkat lebih besar */
            }
        }
    </style>
    <script>
        function redirectToWhatsApp(event) {
            event.preventDefault(); // Mencegah form submit standar
            var name = document.querySelector('input[name="name"]').value;
            var phone = document.querySelector('input[name="phone"]').value;
            var email = document.querySelector('input[name="email"]').value;
            var message = `Halo, Nama saya ${name}. Email saya ${email}. Saya ingin menghubungi Anda.`;
            var whatsappURL = `https://wa.me/6281376443470?text=${encodeURIComponent(message)}`;
            window.open(whatsappURL, '_blank');
        }

        function openWhatsAppDirect() {
            var whatsappURL = `https://wa.me/6281376443470?text=Halo, Saya Ingin Konsultasi`;
            window.open(whatsappURL, '_blank');

        }
    </script>
</head>
<body>

    <div class="container">
        <img src="Hamsa Page 1.jpg" alt="Hamsa Page 1">
        <img src="Hamsa Page 2.jpg" alt="Hamsa Page 2">
        <img src="Hamsa Page 3.jpg" alt="Hamsa Page 3">
        <img src="Hamsa Page 4.jpg" alt="Hamsa Page 4">
        <img src="Hamsa Page 5.jpg" alt="Hamsa Page 5">
        <img src="Hamsa Page 6.jpg" alt="Hamsa Page 6">
    </div>

    <div class="form-container">
        <h2>FREE KONSULTASI</h2>
        <p>
            MASUKKAN NAMA, EMAIL DAN NOMOR WHATSAPP UNTUK KONSULTASI GRATIS TENTANG PENGOLAHAN AIR DAN PENGOLAHAN LIMBAH SERTA URUSAN CAT UNTUK INDUSTRI ANDA
        </p>
        <form onsubmit="redirectToWhatsApp(event)">
            <input type="text" name="name" placeholder="Nama Anda" required>
            <input type="email" name="email" placeholder="Email Anda" required>
            <input type="tel" name="phone" placeholder="Nomor Handphone" value="+62" required>
            <input type="submit" value="Submit">
        </form>
    </div>

    <!-- WhatsApp Floating Button with Text -->
    <div class="whatsapp-container">
        <div class="whatsapp-button" onclick="openWhatsAppDirect()">
            <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" alt="WhatsApp Icon">
        </div>
        <div class="whatsapp-text">Free Konsultasi</div>
    </div>

</body>
</html>

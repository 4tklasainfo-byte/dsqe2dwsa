<?php
// Opcjonalne nagłówki lub logika PHP
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona z tłem PHP</title>
    <style>
        /* Reset podstawowych stylów */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        /* Styl dla pełnoekranowego tła z obrazkiem */
        body {
            position: relative;
            min-height: 100vh;
            font-family: Arial, sans-serif;
            color: #ffffff;
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background-image: url('gorilla.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            z-index: -1; /* Umieszcza obrazek pod całą treścią strony */
        }

        /* Przykładowy kontener na treść */
        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 40px;
            background: rgba(0, 0, 0, 0.6); /* Półprzezroczyste tło */
            margin-top: 50px;
            border-radius: 8px;
        }
    </style>
</head>

<body>
    <div class="content">
        <h1>Witaj na stronie PHP</h1>
        <p>Ta strona została napisana w PHP i ma ustawiony obrazek <strong>gorilla.png</strong> jako tło na całą stronę.</p>
        
        <?php
        // Przykład użycia kodu PHP w treści
        echo '<p style="margin-top: 15px; color: #ffeb3b;">Aktualny czas serwera: ' . date('Y-m-d H:i:s') . '</p>';
        ?>
    </div>
</body>

</html>
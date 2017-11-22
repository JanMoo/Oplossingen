<?php
//niet vergeten locake tijd in te stellen in het nederlands
setlocale( 'LC_ALL', 'nld_nld' );
// mktime(u min sec maand dag jaar)

$timestamp	=	mktime(22, 35, 25, 01, 21, 1904);

// d= als cijfers, F= Full text maand, Y= jaar in cijfers volledig
$datum	=	date('d F Y, g:i:s A', $timestamp);

//datum omzetten naar nederlands
$datumNl	=	strftime('%d %B %Y, %H:%M:%S %p', $timestamp);
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Opdracht date</title>
        <link rel="stylesheet" href="http://web-backend.local/css/global.css">
    </head>
    <body class="web-backend-opdracht">
        <section class="body">
            <h1>Opdracht date: deel 1</h1>

            <ul>
                <li>Maak een geldig HTML document</li> 

                <li>Zet deze datum 22u 35m 25sec 21 januari 1904 om naar een timestamp</li>

                <li>Toon deze timestamp daarna in het volgende formaat: 21 January 1904, 10:35:25 pm</li>
            </ul>
                 <h2>oploosiing deel 1</h2>
                  <p><?= $datum ?></p>
            <h1>Opdracht date: deel 2</h1>
                
                

            <ul>
                <li>Zorg dat de benamingen in het Nederlands komen te staan</li>
            </ul>
                
                <h2>oplossing deel 2</h2>
                <p><?= $datumNl ?></p>
                
        </section>
    </body>
</html>

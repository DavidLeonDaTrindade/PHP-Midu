
<?php
    const API_URL = "https://whenisthenextmcufilm.com/api";
    //Inicializamos una nueva sesion de curl
    $ch = curl_init(API_URL);
    //Indicar que queremos recibir el resultado de la peticion y no mostrarla en pantalla
    curl_setopt($ch , CURLOPT_RETURNTRANSFER, true);
    //Ejecutar la peticion y gurdar el resultado
    $result = curl_exec($ch);
    $data = json_decode($result, true);

    curl_close($ch);

    
?>
<head>
    <title>La proxima pelicula de marvel</title>
    <!-- Centered viewport -->
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
>
</head>

<main>
    
    <section>
        <img src="<?= $data["poster_url"]; ?>" width="300" alt="poster de <?=$data['title']; ?>"/>
    </section>
    <hgroup>
        <h2><?= $data["title"];?>Se estrena en <?= $data["days_until"]?> dias</h2>
        <p>Fecha de estreno: <?= $data["release_date"];?></p>
        <p>La siguiente es: <?= $data["following_production"]["title"];?></p>
    </hgroup>
</main>
<style>
    :root{
        color-scheme: light dark;
    }
    body{
        display: grid;
        place-content: center;
    }
    section{
        display: flex;
        justify-content: center;
    }
    img{
        margin: 0 auto;
    }
    hgroup{
        display: flex;
        text-align: center;
        flex-direction: column;
        justify-content: center;
    }
</style>

<?php
//Variables
    $nombre = "David";
    $isDev = true;
    $age = 35;
//Variable global
define('logo_url','https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg');

//Mostramos el tipo de dato
    var_dump($nombre);
    var_dump($isDev);
    var_dump($age);

    //Variables constantes
    const NAME = "Pepe";

    //boleanos
    $isOld = $age < 40;

?>
<img src="<?= logo_url?>" alt="PHP LOGO" width="200">
<h1>
    <?php
    echo"Hola " .  $nombre . " Soy " . NAME . "<br>";
    if($isOld){
        echo "<h2>David es menor de 40 años</h2>";
    }else{
        echo "<h2>David es mayor de 40 años</h2>";
    }
    //Ternaria
    $outputAge = $isOld ? 'Eres joven' : 'Eres viejo';
    echo $outputAge . "<br>";
    //match
    $outputAge = match(true) {
        $age < 2 => "Eres un bebé $nombre",
        $age < 10 => "Eres un niño $nombre",
        $age < 18 => "Eres un adolescente $nombre",
        default => "Eres un adulto, $nombre"
    };
    echo $outputAge;
    
    //Arrays
    $bestLanguages = ["PHP", "JAVASCRIPT", "PYTHON"];
    $bestLanguages[] = "JAVA";
    //Arrays asociativos llave valor
    $persona = [
        "name" => "David",
        "edad" => 35,
        "isDev" => true,
        "languagues" => ["PHP", "JavaScript", "Python"]
    ];
?>



    <ul>
        <?php foreach($bestLanguages as $key => $language) : ?>
            <li>
                <?=$key . " " . $language?>
            </li>
        <?php endforeach; ?>
    </ul>    
    <h3>
        El mejor lenguaje es: <?= $bestLanguages[0]?>
    </h3>
</h1>
<style>
    :root{
        color-scheme: light dark;
    }
    body{
        display: grid;
        place-content: center;
    }
</style>
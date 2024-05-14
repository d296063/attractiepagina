<?php
session_start();
require_once 'admin/backend/config.php';
?>

<!doctype html>
<html lang="nl">

<head>
    <title>Attractiepagina</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@400;600;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/normalize.css">
    <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
    <link rel="icon" href="<?php echo $base_url; ?>/favicon.ico" type="image/x-icon" />
</head>

<body>

    <?php require_once 'header.php'; ?>
    <div class="container content">
        <aside>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia modi dolore magnam! Iste libero voluptatum autem, sapiente ullam earum nostrum sed magnam vel laboriosam quibusdam, officia, esse vitae dignissimos nulla?
        </aside>
        <main>
            <?php
            //PDO een fetchall van de database rides 
            ?>
            <div class="cards">
                <div class="card">
                    <div class="background" style="background-image:url('img/attracties/adger-kang-oiyzr-SgjBY-unsplash.jpg">
                    </div>
                    <div class="cardinfo">
                        <h2>adventureland</h2>
                        <h3>speedyxl</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda odit totam libero maiores possimus incidunt quibusdam suscipit? Suscipit debitis dolore dicta dignissimos repellendus quod eos dolores autem perferendis incidunt. Sint.</p>
                        <p class="length"> 120 cm minimale lengte</p>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <div class="card fastpas">
        <div class="background" style="background-image:url('img/attracties/adger-kang-oiyzr-SgjBY-unsplash.jpg">
        </div>
        <div class="fpinfo">
            <div class="cardinfo">
                2>adventureland</h2>
                <h3>speedyxl</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda odit totam libero maiores possimus incidunt quibusdam suscipit? Suscipit debitis dolore dicta dignissimos repellendus quod eos dolores autem perferendis incidunt. Sint.</p>
                <p class="length"> 120 cm minimale lengte</p>
            </div>
            <div class="cardinfo">
                <p>deze attractie is alleen te bezoeken met een fastpass</p>
                <p>boek nu en sla de wachtrij over</p>
                <button><img src="img/Ticket.png" alt=""> fastpass</button>
            </div>
        </div>
    </div>


</body>

</html>
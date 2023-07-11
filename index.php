<?php

require_once __DIR__."/models/products.php";
require_once __DIR__."/models/food.php";
require_once __DIR__."/models/accessories.php";
require_once __DIR__."/models/games.php";

$products=
[
    new food('https://www.pets-house.it/5767-large_default/royal-canin-mini-adult-800-gr.jpg', 'Royal Canin Mini Adult', 'Cane <i class="fa-solid fa-dog"></i>', 'Prezzo: € 43,99', 'Peso netto: 545g', 'Ingredienti: prosciutto, riso'),

    new food('https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', 'Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'Cane <i class="fa-solid fa-dog"></i>', 'Prezzo: € 44,99', 'Peso netto: 600g', 'Ingredienti: manzo, cereali'),

    new food('https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 'Almo Nature Cat Daily Lattina', 'Gatto <i class="fa-solid fa-cat"></i>', 'Prezzo: € 34,99', 'Peso netto: 400g', 'Ingredienti: tonno, pollo, prosciutto'),

    new food('https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'Mangime per Pesci Guppy in Fiocchi', 'Pesce <i class="fa-solid fa-fish-fins"></i>', 'Prezzo: € 2,95', 'Peso netto: 30g', 'Ingredienti: Pesci e sottoprodotti dei pesci, Cereali, Lieviti, Alghe'),

    new accessories('https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Voliera Wilma in Legno', 'Uccello <i class="fa-solid fa-dove"></i>', 'Prezzo: € 184,99', 'Materiale: Legno', 'Dimensioni: M: L 83 x P 67 x H 153 cm'),

    new accessories('https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Cartucce Filtranti per Filtro EasyCrystal', 'Pesce <i class="fa-solid fa-fish-fins"></i>', 'Prezzo: € 2,29', 'Materiale: Materiale espanso', 'Dimensioni: ND'),

    new games('https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', 'Kong Classic', 'Cane <i class="fa-solid fa-dog"></i>', 'Prezzo: € 13,49', 'Caratteristiche: Galleggia e rimbalza', 'Dimensioni: 8,5 cm x 10 cm'),

    new games('https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', 'Topini di peluche Trixie', 'Gatto <i class="fa-solid fa-cat"></i>', 'Prezzo: € 4,99', 'Caratteristiche: Morbido con codina in corda', 'Dimensioni: 8,5 cm x 10 cm')
]

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>php-oop-2</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <?php foreach($products as $product) { ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                        <div class="card p-4">
                            <img src="<?php echo $product->image ?>" alt="img">
                            <?php echo $product->name ?>
                            <?php echo $product->type ?>
                            <?php echo $product->price ?>
                            <?php if(property_exists($product, 'weight')) 
                            { ?>
                                <?php echo $product->weight ?>
                            <?php } ?>
                            <?php if(property_exists($product, 'ingredients')) 
                            { ?>
                                <?php echo $product->ingredients ?>
                            <?php } ?>
                            <?php if(property_exists($product, 'materials')) 
                            { ?>
                                <?php echo $product->materials ?>
                            <?php } ?>
                            <?php if(property_exists($product, 'characteristics')) 
                            { ?>
                                <?php echo $product->characteristics ?>
                            <?php } ?>
                            <?php if(property_exists($product, 'size')) 
                            { ?>
                                <?php echo $product->size ?>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </body>
</html>

<?php

    require_once __DIR__ ."/classes/User.php";
    require_once __DIR__ ."/classes/Premium.php";

    $user1 = new User("Giordano","Rossi");
    $user1->email = "giordano.rossi@gmail.com";
    $user1->setAddress("via roma 111");
    $user1->setPassword("bho123");
    $user1->setPhoneNumber(123575919);
    $user1->setNumCard("4026600065952555");//utilizziamo una stringa invece dei numeri,perchè con numeri troppo grandi diventa float
    $user1->setCvv("021");//controllo lenght 3
    $user1->setExpirationDate("02/22");
    $user1->setCart($product1->name,$product2->name);

    $user2 = new User("Giuseppe","Verdi");
    $user2->email = "giuseppe.verdi@libero.it";
    $user2->setAddress("via verdi 120");
    $user2->setPassword("abc321");
    $user2->setPhoneNumber(684651861);
    $user2->setNumCard("65168158615151561");//utilizziamo una stringa invece dei numeri,perchè con numeri troppo grandi diventa float
    $user2->setCvv("515");//controllo lenght 3
    $user2->setExpirationDate("11/10");
    $user2->setCart();

    $user3 = new Premium("Ugo","De ughi");
    $user3->email = "pincopallino@hotmail.it";
    $user3->setAddress("via dei platani 22");
    $user3->setPassword("ughetto1");
    $user3->setPhoneNumber(198451651545);
    $user3->setNumCard("651651681810808");//utilizziamo una stringa invece dei numeri,perchè con numeri troppo grandi diventa float
    $user3->setCvv("322");//controllo lenght 3
    $user3->setExpirationDate("07/25");
    $user3->setCart($product1->name,$product2->name,$product3->name);
    $user3->setFidelityCard(55151);
    $user3->setPointsPremium(321);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1><?php echo $user1->getInfoUser() ?></h1>
    <h1><?php echo $user2->getInfoUser() ?></h1>
    <hr>
    <h1>Lista utenti premium</h1>
    <h1><?php echo $user3->getInfoPremium() ?></h1>
    <hr>
    <h1>Prodotti in offerta</h1>
    <h1><?php echo $product1->getInfoProduct() ?></h1>
    <h1><?php echo $product2->getInfoProduct() ?></h1>
    <h1><?php echo $product3->getInfoProduct() ?></h1>

</body>
</html>
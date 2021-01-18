<!-- - Crea e modellizza classi per gestire i prodotti di uno shop.
- Come fatto in classe questa mattina creare una classe generale e poi creare altre classi che estendono questa classe generale.
- Eseguire poi degli output istanziando oggetti delle varie classi.
Sfruttate questa occasione per giocare anche con le keyword di accesso (public, protected, private) -->

<?php 
include_once __DIR__ . '/classes/producer.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<header>
    <h1>Products</h1>
</header>

<main>
    <section>
        <h2>Section 1 - produttore</h2>

        <?php  //istanza prodotto

            $producer = new Producer('Avvitatore', 'Avvitatore Brushless con percussione', '50')

         ?>

         <h2>Descrizione Prodotto:</h2>
         <?php 
         echo $producer->printProduct();
         ?>
    </section>

    <section>
        <h2>Section 2</h2>
    </section>
</main>

    
</body>
</html>
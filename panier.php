<!DOCTYPE html>
<html>
    <head>
        <title>Lafleur Enterprise</title>
        <link rel="stylesheet" type="text/css" href="bouquets.css">
        <script src="https://kit.fontawesome.com/b7b9424b27.js" crossorigin="anonymous"></script>
       
    </head>
        <?php require 'entete.php'; ?>
        <div class="main">
            <?php require 'menuVertical.php'; ?>
            <div class="rightpart">
                <div class="subtitle">
                    PANIER
                </div>
                <?php  ?>
                <div class="tableau">
                    <table>
                        <thead>
                            <tr>
                                <th>Photo</th>
                                <th>Référence</th>
                                <th>Désignation</th>
                                <th>Prix</th>
                                <th>Quantité commandée</th>
                                <th>Prix total</th>
                                <th>Vos produits</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $_SESSION['photo'] ?></td>
                                <td><?php echo $_SESSION['ref'] ?></td>
                                <td><?php echo $_SESSION['designation'] ?></td>
                                <td><?php echo $_SESSION['price'] ?></td>
                                <td><?php echo $_SESSION['quantity'] ?></td>
                                <td><?php echo $_SESSION['totalPrice'] ?></td>
                                <td><button>Supprimer du panier</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php require 'pieddepage.php'; ?>
    </body>
</html>
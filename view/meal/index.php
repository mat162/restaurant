<?php

foreach ($data['meals'] as $meal):?>

<a href="show/<?= $meal['Id'];?>"><?= $meal['Name'];?></a>   
<p><?= $meal['Photo'];?></p>   
<p><?= $meal['Description'];?></p>   
<p><?= $meal['QuantityInStock'];?></p>   
<p><?= $meal['BuyPrice'];?></p>   
<p><?= $meal['SalePrice'];?></p>  
<a href="../Orderline/creationPanier/<?= $meal['Id'];?>">ajouter au panier</a> 

<?php endforeach?>

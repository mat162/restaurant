
<a href="../supprimer">Supprimer</a>
<?php

foreach ($data['plats'] as $meal):?>

<p><?= $meal['Name'];?> </p>  
<p><?= $meal['Photo'];?></p>   
<p><?= $meal['Description'];?></p>   
<p><?= $meal['QuantityInStock'];?></p>   
<p><?= $meal['BuyPrice'];?></p>   
<p><?= $meal['SalePrice'];?></p>  


<?php endforeach?>
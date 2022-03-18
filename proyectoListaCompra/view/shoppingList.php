<?php
include_once("model/shoppingListElement.php");

$shoppingListElement= array();
$shoppingListElement[0]=new shoppingListElement(1, "Peres","Fruita" ,2,1);
$shoppingListElement[1]=new shoppingListElement(1, "Raïm" ,"Fruita",3,2);
$shoppingListElement[2]=new shoppingListElement(1, "Cireres","Fruita" ,1,1.5);

$shoppingListName="Llista molona";
?>

<article class="panel is-primary">
    <p class="panel-heading" style="text-align: center;">
        Llista de la compra - <i><?= $shoppingListName ?></i>
    </p>
    <div class="box">
        <table class="table is-fullwidth is-bordered is-striped is-narrow is-hoverable is-fullwidth">
            <thead>
                <tr>
                    <th>Producte</th>
                    <th>Categoria</th>
                    <th>Quantitat</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $total=0;
                foreach ($shoppingListElement as $shoppingItem) {
                    $productTotal =$shoppingItem->getQuantity()* $shoppingItem->getPrice();
                    $total+=$productTotal;
                    print("<tr><td>{$shoppingItem->getName()}</td><td>{$shoppingItem->getCategoria()}</td><td>{$shoppingItem->getQuantity()}</td><td>$productTotal</td></tr>");

                }
                print("<tfoot><th colspan=\"3\">TOTAL</th><th>$total</th></tfoot>");
                ?>
            </tbody>

        </table>
    </div>
</article>
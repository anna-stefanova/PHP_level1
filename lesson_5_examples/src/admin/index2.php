<script>
function save(id){
    let id_price = "price_"+id;//ID элемента с ценой для текущей кнопки
    let price = document.getElementById(id_price).value;
    document.location.href="server.php?id="+id+"&price="+price;//переход на другую страницу
}
</script>


<?php
include "../config.php";

$sql = "select * from goods";

$res = mysqli_query($connect,$sql);

$form = "<table border='1' width='400'>";

while($data = mysqli_fetch_assoc($res)){
    $form.="<tr><td>".$data['title']."</td><td><input id='price_".$data['id']."' type='text' value=".$data['price']."></td>";
    $form.="<td><input type='button' onclick ='save(".$data['id'].")' value='Сохранить'></td></tr>";
}
$form.="</table>";

echo $form;
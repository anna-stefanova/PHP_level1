<?php
$x = rand(1,10);
$y = rand(1,10);
$res = $x + $y;
?>

   
   <form action="server.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="correct" value=<?= $res?>>
    <p>Ваше имя</p>
    <input type="text" name="fio">
    <p>Расскажите о себе</p>
    <textarea name="biogr"></textarea>
    
     <p>Какие языки Вы знаете?</p>
     <input type="checkbox" value="PHP" name="lang[]">PHP <br>
     <input type="checkbox" value="js" name="lang[]">js<br>
     <input type="checkbox" value="Java" name="lang[]">Java<br>
     
     <p>В каком городе проживаете?</p>
     <select name="city">
         <option value="Москва">Москва</option>
         <option value="Казань">Казань</option>
         <option value="Самара">Самара</option>
     </select>
    <p>Дата рождения</p>
    <input type="date" name="dr"><br><br>
    <p>Вычислите <?= $x?> + <?= $y?> = <input style='width:40px' type='text' name='user'></p>
       <p>Выберите файлы</p>
       <input type="file" multiple name="photo[]"><br><br>
    <input type="submit" value="Сохранить">
</form>
<a href="server.php?id=1">Ссылка</a>
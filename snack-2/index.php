<!-- Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->


<form action="./index.php" method="GET">
    <label for="name">Inserire il nome</label>
    <input type="text" id="name" name="userName">
    <br>
    <label for="email">Inserire la mail</label>
    <input type="text" id="email" name="userEmail">
    <br>
    <label for="age">Inserire l'età</label>
    <input type="text" id="age" name="userAge">
    <br>
    <button type="submit">Invia</button>
</form>

<?php 
    $userName = $_GET ['userName'];
    $userEmail = $_GET ['userEmail'];
    $userAge = $_GET ['userAge'];
    
    if (strlen($userName) > 3 && str_contains($userEmail, '@') && str_contains($userEmail, '.') && is_numeric($userAge)) {
        echo 'Accessio riuscito';
    } else {
        echo 'Accesso negato';
    }

?>
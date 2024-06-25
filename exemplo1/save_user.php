<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $userData = "Username: $username - Email: $email\n";
    $file = 'users.txt';
    // Escrever os dados no ficheiro
    file_put_contents($file, $userData, FILE_APPEND | LOCK_EX);
    /*
   https://www.php.net/manual/pt_BR/function.file-put-contents.php
       FILE_APPEND: Esta é uma flag opcional que especifica que os dados 
       devem ser anexados ao ficheiro em vez de sobrescrever o conteúdo existente. 
       Ou seja, se o ficheiro já tiver conteúdo, os novos dados serão adicionados ao 
       final do ficheiro.
       LOCK_EX: Esta é outra flag opcional que é usada para obter um exclusivo bloqueio 
       exclusivo (exclusivo) no ficheiro enquanto está sendo escrito. 
       Isso garante que outros processos não possam escrever ou modificar o ficheiro ao 
       mesmo tempo, evitando assim possíveis problemas de concorrência ou corrupção de dados.*/
    header("Location:index.php");
}
?>
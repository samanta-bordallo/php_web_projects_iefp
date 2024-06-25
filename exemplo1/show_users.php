<?php
$file = 'users.txt';

// Verificar se o ficheiro existe
if (file_exists($file)) {
    // Ler e mostrar os dados do ficheiro
    echo nl2br(file_get_contents($file));
    /*file_get_contents($file): Esta função em PHP lê um ficheiro e 
       retorna o seu conteúdo como uma string. Recebe o caminho do 
       ficheiro como parâmetro. Nesse caso, $file é uma variável que contém 
       o caminho do ficheiro que queremos ler.
       nl2br(): Esta função em PHP converte quebras de linha em HTML <br> tags. 
       Recebe uma string como parâmetro e insere uma quebra de linha HTML 
       antes de todas as quebras de linha na string.*/

} else {
    echo "Ainda não há utilizadores registrados.";
}
?>
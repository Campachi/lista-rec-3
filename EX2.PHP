<?php
$frase = "são paulo";

// Obtém o tamanho da string
$tamanho = strlen($frase);

// Converte a string para maiúsculas (se necessário, mas não impacta a substituição direta no código atual)
$frasemaiuscula = strtoupper($frase);

for ($i = 0; $i < $tamanho; $i++) {
    // Obtém o caractere atual
    $caractere = $frase[$i];
    
    // Verifica se o caractere é uma vogal e substitui por 'X'
    if (in_array($caractere, ['a', 'e', 'i', 'o', 'u', 'á', 'à', 'â', 'ã', 'ä', 'é', 'è', 'ê', 'í', 'ï', 'ó', 'ô', 'õ', 'ö', 'ú', 'ü'])) {
        $novaFrase .= 'X';
    } else {
        $novaFrase .= $caractere;
    }
}

// Exibe a nova frase com as substituições
echo "Frase com vogais substituídas: " . $novaFrase;
?>

<?php
// Definindo os vetores
$v1 = range(0, 12);
$v2 = range(0, 100, 10);
$v3 = range('a', 'i');
$v4 = range('e', 'a');

// Exibindo o conteúdo de cada vetor
echo "Conteúdo do vetor v1:\n";
foreach ($v1 as $valor) {
    echo $valor . " ";
}
echo "\n\n";

echo "Conteúdo do vetor v2:\n";
foreach ($v2 as $valor) {
    echo $valor . " ";
}
echo "\n\n";

echo "Conteúdo do vetor v3:\n";
foreach ($v3 as $valor) {
    echo $valor . " ";
}
echo "\n\n";

echo "Conteúdo do vetor v4:\n";
foreach ($v4 as $valor) {
    echo $valor . " ";
}
echo "\n";
?>
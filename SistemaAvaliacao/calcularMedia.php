<?php
include_once('conexao.php');

$sql = "SELECT nota FROM avaliacoes";
$result = mysqli_query($conn, $sql);

$soma_notas = 0;
$quant_registros = 0;
$media = 0.0;

while ($row = mysqli_fetch_array($result)) {
    $soma_notas = $soma_notas + $row['nota'];
    $quant_registros++;
}

if ($quant_registros > 0) {
    $media = $soma_notas / $quant_registros;
} else {
    $media = 0;
}

// Exibir a média formatada
echo number_format($media, 1);

?>
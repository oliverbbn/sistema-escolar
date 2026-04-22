<?php
// Declarado uma matriz (array multidimensional).
$boletim = [
// [0]Nome, [1]Nota1, [2]Nota2, [3]Nota3.
    ["Ana Silva", 8.5, 7.0, 9.0], //Linha 0
    ["Carlos Maia", 5.0, 6.5, 4.5], //Linha 1
    ["Beatriz Lima", 9.0, 9.5, 10.0], //Linha 2
    ["João Souza", 4.0, 5.0, 5.5], //Linha 3
    ["Mariana Vaz", 7.5, 8.0, 8.5]  //Linha 4
];
?>

<!DOCTYPE html>
    <html lang="pt-BR">
        <meta charset="UFT-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Sistema Escolar</title>
    <head>
        <style>
            td {text-align: center;}
            th {text-align: center;}
        </style>
    </head>
    <body class="container mt-5">
        <h2 class="text-primary mb-4 text-center">Boletim Escolar</h2>
<!--
    <div class="container mt-4">
        <h2>Teste de Coordenadas da Matriz</h2>
        <ul>
            <li>
                A aluna <?php echo $boletim[2][0]; ?> tirou <?php echo $boletim [2][3];?> no 3º Bimestre.
            </li>
            <li>
            A aluna <?php echo $boletim[1][0]; ?> tirou <?php echo $boletim [1][1];?> no 1º Bimestre.
            </li>
        </ul>
    </div>
-->
    <div class="container mt-5">
        <h3 class="text-primary text-center">Boletim Geral da Turma</h3>
        <table class="table table-bordered table-striped mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Nome do Aluno</th>
                    <th>1º Bi</th>
                    <th>2º Bi</th>
                    <th>3º Bi</th>
                </tr>
            </thead>
    <tbody>
        <?php
// Laço Externo(LINHAS): Percorre os 5 alunos.
        for ($i=0;$i<count($boletim);$i++) {
// Abre a linha para a tabela HTML para o aluno atual.
            echo "<tr>";
// Laço Interno(COLUNAS): Percorre os 4 dados do aluno atual (nome + 3 notas).
            for ($j=0; $j < count($boletim[$i]);$j++){
// Imprime a célula <td> com o dado exato naquela [linha][coluna].
            echo "<td>".$boletim[$i][$j]."</td>";
            }
// Fim do laço interno ($j).
// Fecha a linha da tabela HTML antes de passar para o próximo.
            echo "</tr>";
        }
// Fim do laço externo ($i).
        ?>
    </tbody>
        </table>
    </div>
    </body>
    </html>

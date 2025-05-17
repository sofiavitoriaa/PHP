<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Strings </title>
</head>
<body>
    <?php 
        // Aspas duplas e simples
        $nome = "Gustavo";
        $sobrenome = "Guanabara";
        echo '$nome $sobrenome \u{1F596}';

        echo "<br>";

        // Constante
        const ESTADO = "PE";
        echo "Moro no ESTADO ";
        echo 'Moro no ESTADO ';
        echo "Moro no " . ESTADO;

        echo "<br>";

        echo "Estamos no ano de " . date("Y");

        echo "<br>";

        $nom = "Rodrigo";
        $snom = "Nogueira";
        echo "$nom \"Minotauro\" $snom"; // Sequência de escape
        /* 
            \n nova linha
            \t tabulação horizontal
            \\ barra invertida
            \$ sinal de cifrão
            \u{} codepoint unicode
        */

        echo "<br>";

        $n = "Gustavo";
        $s = "Guanabara";
        $a = "Gafanhoto";
        echo "$n \"$a\" $s";
    ?>
</body>
</html>
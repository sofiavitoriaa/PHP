<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../HTML/Imagens/cursoemvideo.jpg" type="image/x-icon">
    <title> Tipos primitivos em PHP </title>
</head>
<body>
    <h1> Teste de tipos primitivos </h1>
    <?php 
    // 0x = hexadecimal
    // 0b = binário
    // 0 = octal

        // $num = 010;
        // echo "o valor da variável é $num";

        // $v = "Sofia";
        // var_dump($v);

        //$num = (integer) 3e2; // 3 x 10(2) coerção
        // echo "O valor é $num";
        //var_dump($num)

        // $num = (float) "950";
        // var_dump($num);

        //$casado = true;
        // // var_dump($casado);
        // print "O valor para casado é $casado";

        //$vet = [6, 2.5, "Maria", 3, false];
        // var_dump($vet);

        class Pessoa {
            private string $nome;
        }
        $p = new Pessoa;
        var_dump($p);
    ?>
</body>
</html>
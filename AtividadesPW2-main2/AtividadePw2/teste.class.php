<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style.css">
        <title>Cadastro</title>
    </head>
    <body>
        <main id="teste.classe">
            <?php

                require_once("pessoa.class.php");

                class Teste{
                    private $pessoa;

                    public function __construct(){
                        $pessoa = new Pessoa();
                        
                        $pessoa->setNome($_POST['nome']);
                        echo "<Strong>Nome</Strong> = " . $pessoa->getNome();
                        echo "<br>";
                        $pessoa->setTelefone($_POST['telefone']);
                        echo "<Strong>Telefone</Strong> = " . $pessoa->getTelefone();
                        echo "<br>";        
                        $pessoa->setOrigem($_POST['origem']);
                        echo "<Strong>Origem</Strong> = " . $pessoa->getOrigem();
                        echo "<br>";
                        $pessoa->setData($_POST['date']);
                        echo "<Strong>Data</Strong> = " . $pessoa->getData();
                        echo "<br>";
                        $pessoa->setObservacao($_POST['obs']);
                        echo $pessoa->getObservacao();
                    }
                }new Teste();

            ?>
        </main>
    </body>

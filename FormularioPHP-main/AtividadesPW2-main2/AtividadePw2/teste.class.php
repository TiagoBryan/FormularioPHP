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
        <style>
           
            .exibir_dados{ 
                display: flex;
                justify-content: center;
                
            }
            body{
                background-color:#f3f3f3;
            }
            .exibir_dados_container{
                width: 50%;
               
            }
            .exibir_dados_fundo{
                padding: 10px 15px;
                margin: 0;
            }
           
           
            .tabela_dados{
                display: flex;
                justify-content: center;
            }
           
            .exibir_dados_info{
                font-weight: bold;
                list-style: none;
               display: flex;
               flex-direction: row;
               justify-content: space-between;
               
            }
            ul, li{
                padding: 0;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <main id="teste.classe">
            <div class="container" style="background-color: white; padding: 0;">
                <div class="row">
                    <div class="col">
                    <header>
            
                        <nav class="navbar bg-primary navbar-expand-lg " >
                            <div class="container-fluid">
                            <a class="navbar-brand" style="color: white;" href="#">Sistema Web</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav">
                                
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#" style="color: white;">Cadastrar</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" style="color: white; opacity: 0.5;" >Consultar</a>
                                </li>
                                </ul>
                            </div>
                            </div>
                        </nav>
                    </header>
                    <br>
                    <div class="exibir_dados">
                        <div class="exibir_dados_container">
                            <p class="fs-5 " style="color: black;  margin-bottom: 10px;">Consultar - Contatos Agendados</p> 
                            <div class="exibir_dados_fundo bg-primary">
                            <ul class="exibir_dados_info">
                                    <li class='text-break'>Nome</li>
                                    <li class='text-break'>Telefone</li>
                                    <li class='text-break'>Origem</li>
                                    <li class='text-break'>Contato</li>
                                    <li class='text-break'>Observação</li>
                                    <li class='text-break'>Ação</li>
                                </ul>
                            
                                
                            </div>
                        </div>
                        
                    </div>
                    
                    </div>
                </div>
                <?php

                                require_once("pessoa.class.php");

                                class Teste{
                                    private $pessoa;

                                    public function __construct(){
                                        $pessoa = new Pessoa();
                                        echo "<div class='tabela_dados'>";
                                        echo "<div style='width: 48%;'>";         
                                        echo "<div class='row' style='margin-bottom: 30px; text-align: start;'>";
                                        echo "<div class='col border' style='padding: 0;'>";
                                        echo "<div>";
                                        $pessoa->setNome($_POST['nome']);
                                        echo  $pessoa->getNome();
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='col border' style='padding: 0;'>";
                                        echo "<div>";
                                        $pessoa->setTelefone($_POST['telefone']);
                                        echo $pessoa->getTelefone();
                                        echo "</div>";
                                        echo "</div>";    
                                        echo "<div class='col border' style='padding: 0;'>"; 
                                        echo "<div>"; 
                                        $pessoa->setOrigem($_POST['origem']);
                                        echo $pessoa->getOrigem();
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='col border' style='padding: 0;'>";
                                        echo "<div>";
                                        $pessoa->setData($_POST['date']);
                                        echo $pessoa->getData();
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='col-3 border' style='padding: 0;'>";
                                        echo "<div>";
                                        $pessoa->setObservacao($_POST['obs']);
                                        echo $pessoa->getObservacao();
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div class='col-1 border' style='padding: 0;'>";
                                        echo "<div>";
                                        echo "0";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "</div>";
                                        echo "<div>";
                                      
                                       

                                    }
                                }new Teste();
                                
                            ?>
                            
                        <br>       
            </div>
            
        </main>
        
        
    </body>

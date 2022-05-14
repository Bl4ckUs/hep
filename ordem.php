<html>
    <head>
        <meta charset="utf-8">
 <title>Ordem de Serviço</title>

        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

        <style>
            body{

                text-align: center;

            }
            .row{
                text-align: left;

            }

            .container{
                display: flex;
                margin: 5px;
            }
            .container > div{
                display: flex;
            }
            form{
                width: fit-content;
                margin: 0 auto;
                max-width: 1000px;
            }
            .geral{
                width: 50%;
            }
            input{
                border: none;
                border-bottom: 1px solid black;
                width: 100%;

            }
            input:focus{
                outline: none;
            }
            textarea{
                width: 100%;
            }
            #botao{
                margin-top: 15px;
            }
            #check{
                width: fit-content;
            }

        </style>
    </head>
    <body>
                                
 <?php
        $pe = $_POST['pe'];
        $tel = $_POST['tel'];
        $log = $_POST['log'];
        $cpf = $_POST['cpf'];
        $marca = $_POST['marca'];
        $placa = $_POST['placa'];          
        $mdl = $_POST['mdl'];
        $ano = $_POST['ano'];
        $servicos = $_POST['servicos'];
        $pecas = $_POST['pecas'];
        $serv = explode(",", $servicos);
        $pec = explode(",", $pecas);
        
        ?>
        
         <form id="formulario" name="formulario" method="post" action="ordem.php">
           <?php
           echo"
            <legend>Dados Necessários:</legend>
            <br/><br/>
            <div class='container'>
                <div class='geral'><label>Cliente:</label> <input id='pe' name='pe' autocomplete='off' value='$pe'/></div>
                <div class='geral'><label>Celular:</label><input  id='tel' name='tel' autocomplete='off' value='$tel'/></div>
            </div>
            <br/>
            <div class='container'>
                <div class='geral'><label>Endereço:</label><input  id='log' name='log' autocomplete='off' value='$log'/></div>
                <div class='geral'><label>CPF:</label><input  id='cpf' name='cpf' autocomplete='off' value='$cpf'/></div>
                            </div>
                            <br/> <br/>
                            <div class='container'>
                                <div class='geral'><label>Marca do Carro:</label><input  id='marca' name='marca' autocomplete='off' value='$marca'/></div>
                                <div class='geral'><label>Placa:</label><input  id='placa' name='placa' autocomplete='off' value='$placa'/></div>
                            </div>
                            <br/>
                            <div class='container'>
                                <div class='geral'><label>Modelo:</label><input  id='mdl' name='mdl' autocomplete='off' value='$mdl'/></div>
                                <br/>
                                <div class='geral'><label>Ano de Fabricação:</label><input  id='ano' name='ano' autocomplete='off' value='$ano'/></div>
                            </div>

                            <br/> <br/> <br/>

                            <table class='table'>
                            <tr>
                                <th scope='col'>Serviços</th>
                                <th scope='col'>Check</th>
                            </tr>
                          ";
                                    for($i=0; $i < count($serv); $i++){
                                        echo "
                                        <tr>
                                        <td>
                                        $serv[$i]
                                        </td>
                                        <td><input id='check' type='checkbox'></td>
                                        </tr>";
                                                
                                    }
                                        echo "</br>
                                  
                                        </table>
                                        
                                        <table class='table'>
                                        <tr>
                                            <th scope='col'>Peças</th>
                                            <th scope='col'>Check</th>
                                        </tr>";
                                    
                                    for($i=0; $i < count($pec); $i++){
                                        echo "
                                        <tr>
                                        <td>
                                        $pec[$i]
                                        </td>
                                        <td> <input id='check' type='checkbox'/> </td>
                                        </tr>
                                        <br>";
                                    }
                                    
                            echo"</table>";
                                  ?>



                            <br/>

                            <div class='container'>
                                <div class='geral'><label><mark>TOTAL A SER PAGO:</mark></label><input id='preco' name='preco' autocomplete='off'/></div>
                                <div class='geral'><label>Assinatura:</label><input id='ass' name='ass' autocomplete='off'/></div>
                             </div>
                            <div>
                            
                                    
                                    
                              
                            </div>
                            <br/>
                            
                            <button onclick="window.print()">Imprimir</button>
                                </form>
                
 



 </body>
 </html>


<!--
    
    Nome do Aluno: Ronildo Ferreira da Silva
    Matricula: 21161874-5
    Curso: Sistemas para Internet
    Instituição: Unicesumar

-->



<!DOCTYPE html>

<html lang="pt-br">
    
    <head>
        <title>Unicesumar Sistemas para Internet</title>
        <meta charset="utf-8">

    <!--Bootstrap Link-->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head> 
    
    <body>

<?php

$colaboradores = array(
    array(
    'id' => 0,
    'nome' => 'Ronildo',
    'salario-fixo' => '1800',
    'venda1' => '1220', 
    'venda2' => '1435', 
    'venda3' => '1683', 
    'venda4' => '1467',),
    array(
    'id' => 1,
    'nome' => 'Luis Guilherme',
    'salario-fixo' => '1750',
    'venda1' => '1742', 
    'venda2' => '1674', 
    'venda3' => '1784', 
    'venda4' => '1983',),
    array(
        'id' => 2,
    'nome' => 'Renan',
    'salario-fixo' => '1995',
    'venda1' => '1467', 
    'venda2' => '1723', 
    'venda3' => '1678', 
    'venda4' => '1254',),
    array(
        'id' => 3,
    'nome' => 'Douglas',
    'salario-fixo' => '1878',
    'venda1' => '1482', 
    'venda2' => '1267', 
    'venda3' => '2782', 
    'venda4' => '1874',),    
);


?>


<div class="container-xl">
        <div class="row justify-content-center ">
            <!-- Tabela 1 --> 
            <!--table table-striped table-hover -  Faz com que as tabelas fiquem quebradas em cores onde vc passa o cursor, ocupando toda a tela, 
            fazendo com que se ajuste a tela inteira
        
            table-bordered - Coloca uma Borda
            table-sm - deixa a tabela menor-->
            
                <table class="table table-striped table-hover table-bordered">
                    <thead class="thead-dark">
                        <th scope="col"></th>
                        <th scope="col">Colaborador</th>
                        <th scope="col">Salario Fixo</th>
                        <th scope="col">Venda Semana 1</th>
                        <th scope="col">Venda Semana 2</th>
                        <th scope="col">Venda Semana 3</th>
                        <th scope="col">Venda Semana 4</th>
                        <th scope="col">Total vendas</th>
                        <th scope="col">Comissão</th>
                        <th scope="col">Salario Final</th>
                       
                    </thead>
                    <tbody>
                    <?php foreach($colaboradores as $item): ?>
                            <tr class="table-blue">
                                <th scope="row"></th>

                                    <td><?= $item['nome'] ?></td>
                                    <td>R$  <?= $item['salario-fixo'] ?></td>
                                    <td>R$  <?= $item['venda1'] ?></td>
                                    <td>R$  <?= $item['venda2'] ?></td>
                                    <td>R$  <?= $item['venda3'] ?></td>
                                    <td>R$  <?= $item['venda4'] ?></td>

                                    <!--Somando todas as semanas-->
                                    <td class="table-info">R$  <?= $item['total-vendas'] = $item['salario-fixo']+$item['venda1']+$item['venda2']+$item['venda3']+$item['venda4']?></td>
                                    
                                    <!--aplicando uma comissão de 5%-->
                                    <td class="table-info">R$  <?= $item['comissao'] = $item['total-vendas'] * 0.05 ?></td>
                                    
                                    <!--Valor final, soma do salario fixo mais comissão-->
                                    <td class="table-info">R$  <?= $item['salario-final'] = $item['salario-fixo']+$item['comissao']?></td> 
                                                              
                            <?php endforeach; ?>                        
                        </td>
                        </tr>                        
                    </tbody>
                </table>              
            </div>
        </div>
    </div>   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous" async></script>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous" async></script>



    </body>
</html>
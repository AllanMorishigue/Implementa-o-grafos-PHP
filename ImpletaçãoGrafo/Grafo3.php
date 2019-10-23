<?php
    error_reporting(0);

    $qnt_vertice = $_GET['qnt_vertice'];
    $qnt_arestas = $_GET['qnt_arestas'];
    $arestaC = $_GET['arestaC'];
    $arestaD = $_GET['arestaD'];
    $vertice_adjacente = $_GET['verticeAdjacente'];
    $grau = $_GET['grau'];
    $vetor = [];

    for($i=0; $i<$qnt_vertice; $i++){
            $vertice = $_GET["nome"."$i"];
            array_push($vetor, $vertice);
    }

    $tam = count($vetor);

    echo "Representação matemática do grafo V: <br>";
    echo "V(G) {";
    for($i=0; $i<$tam; $i++){
        echo $vetor[$i].",";
    }
    echo "}";

    echo "<br> E(G) {";
    for($i=0; $i<$qnt_arestas; $i++){
        $keyA = 0;
        $keyB = 0;
        $arestaA = $_GET["arestaA"."$i"];
        $arestaB = $_GET["arestaB"."$i"];
        
        echo "(".$arestaA.",".$arestaB. ");";

        $keyA = array_search($arestaA, $vetor);
        $keyB = array_search($arestaB, $vetor);

        /*echo $keyA;
        echo "-";
        echo $keyB;
        echo "<br><br>";*/

        if(($keyA>=0) && ($keyB>=0)){
            $matriz[$arestaA][$arestaB] = 1;
            $matriz[$arestaB][$arestaA] = 1;
        }else{
            echo "Não existe o vertice (".$arestaA.") ou o (".$arestaB.")<br><br>";
        }
    }
    echo "}<br><br>";

    $calculo_grau = 0;
    echo "Vertices adjacentes de (".$vertice_adjacente."): <br>";
    for($i=0; $i<$qnt_vertice; $i++){
        $verticeADJ = $_GET["nome"."$i"];
        if($matriz[$vertice_adjacente][$verticeADJ] == 1){
            echo $verticeADJ.", ";
            $calculo_grau++; 
        }
    }

    echo "<br><br>";
    echo "Aresta existente entre (".$arestaC.") e (".$arestaD."): ";
    if($matriz[$arestaC][$arestaD] == 1){
        echo "SIM";
    }else{
        echo "NÃO";
    }

    echo "<br><br>";
    echo "Grau do vertice (".$grau."): ".$calculo_grau;

    echo "<br><br> Matriz: <pre>".print_r($matriz, true)."</pre>"; 
?>


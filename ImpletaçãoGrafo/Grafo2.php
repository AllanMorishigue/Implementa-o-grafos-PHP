<?php 
    $qnt_vertice = $_GET['qnt_vertice'];
    $qnt_arestas = $_GET['qnt_arestas'];
?>

<html>
    <head>
        <title> Grafo </title>
    </head>

    <body>
        <div>
            <form action="Grafo3.php">
                <input type="hidden" name="qnt_vertice" value= "<?php echo $qnt_vertice; ?>">
                <input type="hidden" name="qnt_arestas" value= "<?php echo $qnt_arestas; ?>">

                <span>Nomeie os vertices:</span><br><br>

                <?php for($i=0; $i<$qnt_vertice; $i++){ ?>
                    <input type="text" name="nome<?php echo $i; ?>" style="width: 40px;"> 
                    <br>
                <?php } ?>  

                <br><span>Informe as arestas:</span><br><br>

                <?php for($i=0; $i<$qnt_arestas; $i++){ ?>
                    <input type="text" name="arestaA<?php echo $i; ?>" style="width: 40px;">
                    -
                    <input type="text" name="arestaB<?php echo $i; ?>" style="width: 40px;"> <br><br>
                <?php } ?>  

                <span>Vertices adjacentes: </span>
                <input type="text" name="verticeAdjacente" style="width: 40px;"><br><br>

                <span>Verificar aresta existente: </span>
                <input type="text" name="arestaC" style="width: 40px;">
                -
                <input type="text" name="arestaD" style="width: 40px;"><br><br>

                <span>Calcular grau do vertice: </span>
                <input type="text" name="grau" style="width: 40px;"><br><br>

                <input class="button" type="submit" value="Enviar">
            </form>
        </div>
    </body>

</html>
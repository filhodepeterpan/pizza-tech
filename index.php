<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Pizza Tech</title>
</head>
<body>
    <div class="container">
        <form action="#" method="POST">
            <div id="titulo">
                <h1>Pizza Tech</h1>
                <h2 class="frase-destaque">Novo pedido!</h2>   
            </div>
            <div class="form-campo">
                <label for="nome">Seu nome:</label>
                <input type="text" name="nome">
            </div>
            <div class="form-campo">
                <label for="sabor">Escolha um de nossos deliciosos sabores:</label>
                <select name="sabor" id="sabor">
                    <option value="Mussarela">Mussarela</option>
                    <option value="Margherita">Margherita</option>
                    <option value="Pepperoni">Pepperoni</option>
                    <option value="Calabresa">Calabresa</option>
                    <option value="Frango com catupiry">Frango com catupiry</option>
                </select>
            </div>
            <div class="form-campo">
                <label for="borda">Deseja borda recheada?</label>
                <div class="checkobx-item">
                    <input type="checkbox" name="borda"value="Não">
                    <span>Não</span>
                </div>
                <div class="checkobx-item">
                    <input type="checkbox" name="borda" value="Sim">
                    <span>Sim (+ R$5,00)</span>
                </div>
            </div>
            <div class="form-campo">
                <label for="bebidas">Bebidas</label>
                <div class="checkobx-item">
                    <input type="checkbox" name="bebida"value="Nenhuma">
                    <span>Nenhuma</span>
                </div>
                <div class="checkobx-item">
                    <input type="checkbox" name="bebida" value="Refrigerante Lata">
                    <span>Refrigerante Lata (+ R$8,00)</span>
                </div>
                <div class="checkobx-item">
                    <input type="checkbox" name="bebida" value="Refrigerante 2L">
                    <span>Refrigerante 2L (+ RS20,00)</span>
                </div>
                <div class="checkobx-item">
                    <input type="checkbox" name="agua" value="Água">
                    <span>Água (+ RS5,00)</span>
                </div>
            </div>
            <button type="submit" id="finalizar-pedido">Finalizar Pedido</button>
        </form>
    </div>
</body>
</html>

<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nome = $_POST["nome"];
        $sabor = $_POST["sabor"];
        $borda = $_POST["borda"];
        $bebida = $_POST["bebida"];

        echo "<h1>Pedido Finalizado!</h1>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Sabor: $sabor</p>";
        echo "<p>Borda Recheada: $borda</p>";
        echo "<p>Bebida: $bebida</p>";
    }
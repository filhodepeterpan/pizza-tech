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
                <input type="text" name="nome" required>
            </div>
            <div class="form-campo">
                <label for="sabor">Escolha um de nossos deliciosos sabores:</label>
                <select name="sabor" id="sabor">
                    <option value="Mussarela">Mussarela - R$ 50,00</option>
                    <option value="Margherita">Margherita - R$ 52,00</option>
                    <option value="Pepperoni">Pepperoni - R$ 60,00</option>
                    <option value="Calabresa">Calabresa - R$ 55,00</option>
                    <option value="Frango com catupiry">Frango com catupiry - R$ 58,00</option>
                </select>
            </div>
            <div class="form-campo">
                <label for="borda">Deseja borda recheada?</label>
                <div class="checkobx-item">
                    <input type="radio" name="borda" value="Não" checked>
                    <span>Não</span>
                </div>
                <div class="checkobx-item">
                    <input type="radio" name="borda" value="Sim">
                    <span>Sim (+ R$5,00)</span>
                </div>
            </div>
            <div class="form-campo">
                <label for="bebidas">Bebidas</label>
                <div class="checkobx-item">
                    <input type="checkbox" name="bebida[]" value="Refrigerante Lata">
                    <span>Refrigerante Lata (+ R$ 8,00)</span>
                </div>
                <div class="checkobx-item">
                    <input type="checkbox" name="bebida[]" value="Refrigerante 2L">
                    <span>Refrigerante 2L (+ R$ 20,00)</span>
                </div>
                <div class="checkobx-item">
                    <input type="checkbox" name="bebida[]" value="Água">
                    <span>Água (+ R$ 5,00)</span>
                </div>
            </div>
            <button type="submit" id="abrir-comanda">Finalizar Pedido</button>
        </form>
    </div>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $nome = $_POST["nome"];
            $sabor = $_POST["sabor"];
            $borda = $_POST["borda"];
            $bebidas = $_POST["bebida"] ?? [];
            $total = 0;

            $precos_pizza = [
                "Mussarela" => 50,
                "Margherita" => 52,
                "Pepperoni" => 60,
                "Calabresa" => 55,
                "Frango com catupiry" => 58
            ];

            $precos_bebidas = [
                "Refrigerante Lata" => 8,
                "Refrigerante 2L" => 20,
                "Água" => 5
            ];

            $total += $precos_pizza[$sabor];
            $total += $borda == "Sim" ? 5 : 0;

            foreach ($bebidas as $bebida) {
                $total += $precos_bebidas[$bebida];
            }

            echo "<div id='comanda'>";
            echo "<span class='comanda-botao'><button id='fechar-comanda'>X</button></span>";

            echo "<h1 class='frase-destaque'>Pedido Finalizado!<br><br></h1>";
            echo "<p>Nome: $nome</p>";
            echo "<p>Sabor: $sabor</p>";
            echo "<p>Borda Recheada? $borda</p>";

            if (empty($bebidas)) {
                echo "<p>Bebidas: Nenhuma.</p>";
            } else {
                echo (count($bebidas) > 1 ? "<p>Bebidas: " : "<p>Bebida: ")
                    . implode(", ", $bebidas) . ".</p>";
            }

            echo "<br><hr><br>";
            echo "<p id='total'>Total:<span id='preco'>R$ $total,00</span></p>";

            echo "</div>";
        }
    ?>
    <script src="js/script.js"></script>
</body>

</html>
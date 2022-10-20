<?php

require "Controle/gerarControlle.php";

require "view/include/cabecalho.php";

?>

<body>
  
    <div>
        <header>
            <h1>Gerador de senha</h1>
            <h2>Senha 1 de 1 | <a href="index.php">Voltar</a></h2>
        </header>

        <main>

        <?php for($contador = 1; $contador <=$limite; $contador++ ): ?>

          <div class="senha">
                <h2>SENHA</h2>
                <h3><?=str_pad($contador, 4, 0, STR_PAD_LEFT) ?></h3>
                <p>Aguarde o chamado!</p>
          </div>

          <?php endfor; ?>

        </main>

        <?php include "view/include/rodape.php" ?>

    </div>

</body>
</html>
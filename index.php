<?php
session_start();

require "view/include/cabecalho.php";

?>



<body>

    <div class= "container">

        <div id="geral">

            <?php if(isset($_SESSION['alerta'])): ?>

            <div class="alerta">
                <?=$_SESSION['alerta'] ?>
            </div>
            

            <?php unset($_SESSION['alerta']);
            endif;
         ?>

            <header>
                <h1>Gerador de senha</h1>
            </header>

            <main>

            <form action="gerar.php" method="get">

            <p>
                <label for="limite">Limite de Senha:</label>
                <input type="text" name="limite" id="limite">
            </p>
            <p>
                <button type="submit" class="btn btn-laranja">Gerar Senha</button>
            </p>

            </form>

            </main>

            <?php include "view/include/rodape.php" ?>

        </div>

    </div>


</body>
</html>
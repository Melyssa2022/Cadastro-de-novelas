<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novelas Favoritas</title>
    <link rel="stylesheet" href="novelas.css">

</head>
<body>
<header class="cabecalho"> 
    <img src="avenidabr.jpg" class="logo" alt="avenidabrasil">
    <h1 class="nome-foto">
        <small class="texto-pequeno">Cadastrar Novelas</small>
    </h1>
   </header>
    <hr>
    <br>
    <form method="post" id="cadastro" action="cadastrarnovelas.php">
    <fieldset id="cad">
    <legend> Novelas </legend>
    <p><label for="titulo">Titulo:</label><input type="text" name="titulo" id="titulo" size="30" maxlenght="100" placeholder="Digite o Titulo da Novela"></p>
    <p><label for="atrizprotagonista">Atriz Protagonista:</label><input type="text" name="atrizprotagonista" id="atrizprotagonista" size="30" maxlenght="100" placeholder="Digite a Atriz Protagonista"></p>
    <p><label for="atorprotagonista">Ator Protagonista:</label><input type="text" name="atorprotagonista" id="atorprotagonista" size="30" maxlenght="100" placeholder="Digite o Ator Protagonista"></p>
    <p><label for="totalepisodios">Total de Episodios:</label><input type="int" name="totalepisodios" id="totalepisodios" maxlenght="100" placeholder="Digite o Total de Episodios"></p>
    <p>Sinopse:</p>
    <p><textarea name="sinopse" id="sinopse" placeholder="Sinopse da Novela" class="textarea" ></textarea></p>

</fieldset>
<br>
<hr>
<input type="submit" value="Cadastrar">
<hr>
</form>
<hr class="linha">
    <div class="rodape">
        <img src="novela3.jpg" alt="salve-se" class="rodape">
    </div>
</body>
</html>
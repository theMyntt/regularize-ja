<html lang="pt-br">


<?php include "head.php" ?>
<body>
    <?php include "masterpage.php"; ?>
    <main>
    	<div id="whats-form">
    		<img src="img/contact.webp">
            <h2>Envie uma mensagem. podemos te ajudar!</h2> <br>
            	<form action="whatsapp.php" method="POST">
            		<label for="nome">Qual o seu nome?</label> 
            		<input type="text" name="nome" placeholder=" Digite aqui!" required> <br> <br>
            		<button type="submit">Enviar mensagem pelo Whatsapp!</button>
            	</form>
   	 	</div>
    </main>
    <?php include "footer.php"; ?>
</body>

</html>
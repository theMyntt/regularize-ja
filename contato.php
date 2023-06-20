<html lang="pt-br">


<?php include "head.php" ?>
<body>
    <?php include "mpages/masterpage.php"; ?>
    <main>
		<div id="whats-form">
			<img src="img/contact.webp">
			<section>
				<h2>Que tal enviar uma mensagem?</h2>
				<p>Olá, meu nome é Suellen, sou advogada e quero te ajudar!</p>
			</section>
			<br>
			<form action="whatsapp.php" method="POST">
				<label for="nome">Qual o seu nome?</label> <input type="text"
					name="nome" placeholder=" Digite aqui!" required> <br> <br>
				<button type="submit">Enviar mensagem pelo Whatsapp!</button>
			</form>
		</div>
	</main>
    <?php include "mpages/footer.php"; ?>
</body>

</html>
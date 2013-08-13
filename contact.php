<?php include ("header.php"); ?>

<div class="contactContent">
	<div class="contactText">
		<h1>Skriv Hej!</h2>
		<h2>Maila william.l.danielsson@gmail.com eller använd formuläret nedanför:</h2>
	</div>
	<form name="AshiyaForm" method="post" action="html_form_send.php">

	<div class="formInput">
		<label for="name">
		<input type="text" id="name" placeholder="Namn" />
		</label>
	</div>
	<div class="formInput">
		<label for="email">
		<input type="email" id="email" placeholder="Email" />
		</label>

	</div>
	<div class="formInput">
		<label for="message">
		<textarea type="message" id="message" placeholder="Berätta hur vi kan hjälpa Dig"></textarea>
		</label>
	</div>

	<input id="send" type="submit" value="Skicka"/>
	</form>	


</div>

<?php include ("footer.php"); ?>
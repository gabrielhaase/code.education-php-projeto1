<?php
//----------------------------------------------------------------------------------------------------
$postData = filter_input_array(INPUT_POST);
//----------------------------------------------------------------------------------------------------
if(isset($postData['sendButton']) && $postData['sendButton']==='Enviar'){
	$sentData = '		
	<ul>
		<li><label for="name">Nome:</label> '.$postData['name'].'</li>
		<li><label for="email">Email:</label> '.$postData['email'].'</li>
		<li><label for="assunto">Assunto:</label> '.$postData['subject'].'</li>
		<li><label for="mensagem">Mensagem:</label> '.$postData['message'].'</li>
	</ul>';	
}
//----------------------------------------------------------------------------------------------------
?>
<?php if(!isset($postData['sendButton'])):?>
<p><b>Pellentesque facilisis eget lorem a egestas:</b></p>
<div class="contact-form">
	<form name="dataForm" method="post" action="">
		<ul>
			<li>
				<label for="name">Nome:</label>
				<input type="text" name="name" required="required" maxlength="80" size="50" /></li>
			<li>
				<label for="email">Email:</label>
				<input type="email" name="email" required="required" maxlength="120" size="50" /></li>
			<li>
				<label for="assunto">Assunto:</label>
				<input type="text" name="subject" required="required" maxlength="80" size="50" /></li>
			<li>
				<label for="mensagem">Mensagem:</label>
				<textarea name="message" required="required" rows="5" cols="50"></textarea></li>
			<li>
				<input type="submit" name="sendButton" value="Enviar" />
			</li>
		</ul>
	</form>
</div>
<?php else :?>
	<br/><br/>
	<p>Sua mensagem de contato foi enviada com sucesso, seguem os dados enviados:</p>
	<?php echo $sentData; ?>
<?php endif;
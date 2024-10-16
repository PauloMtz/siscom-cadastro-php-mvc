<span class="msg msg-vermelho position-fixed right  top">
	<i class="fas fa-bug"></i> <b>Ops!</b> Foram encontrados os seguintes erros
	<ul>
		<?php foreach($erros as $erro){ ?>
			<li><?php echo $erro ?></li>
		<?php } ?>
	</ul>
	<a href="javascript:;" onclick="fecharMsg()" class="sair">x</a>				
</span>
<!-- sidebar -->

<div class="w-col w-col-3 sidebar">

	<div class="w-form">
		<form id="email-form" name="email-form" data-name="Email Form" class="w-clearfix">
			<label for="email" class="text-nl">Assine nossa Newsletter</label>
			<input id="email" type="email" placeholder="E-mail" name="email" data-name="Email" required="required" class="w-input">
			<input type="submit" value="Enviar" data-wait="Aguarde..." class="w-button newsletter-button">
		</form>
	</div>

	<!-- cta -->
	<a href="#" target="_blank" class="cta-lateral w-inline-block" style="background:url(<?php echo get_template_directory_uri(); ?>/img/sss.jpg); background-size: cover;">
		<h3 class="cta-text">Baixar agora</h3>
	</a>
	<!-- /cta -->

	<h4 class="mais-lidos">Mais lidos</h4>
	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
	</div>

	<div class="sidebar-widget">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
	</div>

	<div class="fb-html w-embed">
	  <div class="fb-page" data-href="https://www.facebook.com/Actar-Connectivity-195324447175497/?fref=ts" data-tabs="timeline" data-width="220" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
	</div>

</div>
<!-- /sidebar -->

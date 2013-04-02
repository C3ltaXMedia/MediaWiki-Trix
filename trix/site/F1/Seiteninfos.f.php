<!---------------------------------------- Seiteninformationen -------------------------->
	<div style="margin: 18px auto; padding: 0 20px; width: 940px; color: #888888;font-size: 10px !important;line-height: 1.5;text-align:center;">
		
		<span id="footercatlinks">
			<script type="text/javascript">
			// Hyperlinks anzeigen von Michael McCouman jr.
			document.write("Dies Seite enth&auml;lt insgesammt " + document.links.length+" interne Links.")
			</script>
		</span>
		
		
		<?php foreach( $this->getFooterLinks() as $category => $links ): ?>
			<?php foreach( $links as $link ): ?>
								<span id="footercatlinks">
										<?php $this->html( $link ) ?>								
								</span>
			<?php endforeach; ?>
		<?php endforeach; ?>
	</div>
<!---------------------------------------- Seiteninformationen -------------------------->
			
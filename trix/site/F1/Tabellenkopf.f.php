<? # Footer Tabellenkopf:

/* <!--

LOGO (links)

--> */

?>
<a href="<?php echo htmlspecialchars( $this->data['nav_urls']['mainpage']['href'] ) ?>" >				
		<img src="<?php 
		# Logo Tabellenkopf
		global $wgServer; 
			echo $wgServer; 
		global $wgStylePath; 
			echo $wgStylePath; 
		global $wgWBSkinName; 
			echo $wgWBSkinName; 
		?>/img/footer/wb-footer-logo.png" title="wikibyte">
</a>
<? # Footer Tabellenkopf:

/* <!--

Seitenname (rechts)

--> */

# Kopfzeilen CSS:
echo '<style type="text/css">
div#wb-f-wobinich {
	float:right; 
	padding: 8px; 
	color:#777;
}
span.wb-f-wobinich {
	text-align: right; 
	color:#0088CC;
}
</style>'
?>	
<div id="wb-f-wobinich">
	Du befindest dich auf der Seite: <span class="wb-f-wobinich"><?php $this->html( 'title' ) ?></span>
</div>
				
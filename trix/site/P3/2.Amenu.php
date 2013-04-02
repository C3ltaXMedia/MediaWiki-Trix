
<?php 
	if($this->data['loggedin']) { 
?>
<div id="wb-pagemenu">	
		<!-- Site/Talk (left)-->
		<div id="wb-leftbar">
			<?php 
				/*
					Ausblenden von: Seite, Diskussion
				*/		
					if($this->data['loggedin']) { 
						# Einbindung Site, Talk:
						$this->renderNavigation( array( 'NAMESPACES' ) ); 
					}
			?> 
			
			
			
			<a class="wb-u-inv button small inset" href="#"><span class="wb-u-inv"><?php wbatt->['user']:: $1; ?></span></a>			
<span style="margin-right:12px;"></span>
		</div>
		<div style="float:right;">
					<div id="wb-easy-editbutton" style="border: 1px solid #0044AA;
					border-radius: 3px 3px 3px 3px;
					float: right;
					margin-right: 5px;
					margin-top: 4px;">
<a href="<?php global $wgServer; echo $wgServer?>/w/index.php?title=<?php global $wgTitle; echo $wgTitle ?>&action=edit" title="Seite bearbeiten">
<img src="<?php global $wgServer; echo $wgServer; ?><?php global $wgStylePath; echo $wgStylePath; ?><?php global $wgWBSkinName; echo $wgWBSkinName; ?>/designimages/Edit.png" title="Bearbeiten">
</a>
					</div>
					
					<div id="wb-easy-specialbutton" style="border: 1px solid #0044AA;
					border-radius: 3px 3px 3px 3px;
					float: right;
					margin-right: 5px;
					margin-top: 4px;">
<a href="<?php global $wgServer; echo $wgServer; ?>/wiki/Spezial:Spezialseiten" title="Seite bearbeiten">
<img src="<?php global $wgServer; echo $wgServer; ?><?php global $wgStylePath; echo $wgStylePath; ?><?php global $wgWBSkinName; echo $wgWBSkinName; ?>/designimages/Spezial.png" title="Spezialseiten">
</a>
					</div>
					<div id="wb-easy-upladerbutton" style="border: 1px solid #0044AA;
					border-radius: 3px 3px 3px 3px;
					float: right;
					margin-right: 5px;
					margin-top: 4px;">
<a href="<?php global $wgServer; echo $wgServer?>/wiki/Spezial:Hochladen" title="Seite bearbeiten">
<img src="<?php global $wgServer; echo $wgServer;?><?php global $wgStylePath; echo $wgStylePath; ?><?php global $wgWBSkinName; echo $wgWBSkinName; ?>/designimages/Uploader.png" title="hochladen">
</a>
					</div>
	<div id="wbEditbar" style="margin-top: -12px; padding: 5px;">
		<ul id="wbEditbar" style="list-style-image:url(list_style_image.gif)">
							<?php 
									if($this->data['loggedin']) { 
									$this->renderNavigation( array( 'VIEWS' ) ); 
								
									$this->renderNavigation( array( 'VARIANTS', 'ACTIONS' ) ); 
								}
							?>
		</ul>
	</div>
</div>	
<?php } 
?>
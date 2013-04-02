<?php 

/*
	blende für nicht registrierte Nutzer die komplette Bar aus !
*/ 
	
	if($this->data['loggedin']) { 
?><div id="wb-pagemenu">
			
<div id="tabs">
		<ul>
			<li>
				<a href="#tabs-1">Bearbeiten</a>
			</li>
			<li><a href="#tabs-2">Proin dolor</a></li>
			<li><a href="#tabs-3">Aenean lacinia</a></li>
		</ul>
		<br>
<div id="tabs-1">
<p>
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
</div>
<div id="wbEditbar" style="margin-top: -12px; padding: 5px;">
		<ul id="wbEditbar" style="list-style-image:url(list_style_image.gif)">
				<?php 
				if($this->data['loggedin']) { 
				
				# blende aus/ Edit, Version, Beobachte
				$this->renderNavigation( array( 'VIEWS' ) ); 
				# blende aus/ Löschen, (auch user sehen|Verschieben), Schützen
				$this->renderNavigation( array( 'VARIANTS', 'ACTIONS' ) ); 
				
				}
			?>			
		</ul>
</div>
		
		
		
		
			
			
			</p>
		</div>
		<div id="tabs-2">
			
		</div>
		<div id="tabs-3">
			
		</div>
</div>
	
	<?php #<!----------------------------- Benutzereinstellungen ----------------------------->	
			
			/*
			    (1)		# blende für nicht registrierte Nutzer 
						# die komplette Bar aus !		
			*/ 
			
				if($this->data['loggedin']) { 
			
			#<!---------------------------------------- BenutzerInventar ----------------------->
						
				/*
					# Einbinden BenutzerInventarSeiten per PlugIn
					# Dort ist auch der WByUploader Definiert und 
					# wird eingesetzt und ist zu finden unter:
					# => "/Site/BenutzerInventar/BenutzerInventar.php"
				*/
				
			#include("/webserver/wikibyte.org/-/w/skins/trix/includes/BenutzerInventar/BenutzerInventar.php"); 
						
			#<!-------------------------------------- //BenutzerInventar ----------------------->
			
			}  
			
			/*
			  ( =/= 1 ) # Ende der Definition
						# blende für nicht registrierte Nutzer die komplette Bar aus !
			*/ 
			
			#<!------------------------- // Benutzereinstellungen ----------------------------------->
			?>
	
	
	

			
			
			
			
			
		</div>
		<!-- //Site/Talk (left)-->	 
		
		
			 
		<!--editbar (right)-->
		<div style="float:right;">

					<? #<!--Editbutton -->
					/*
						
						
					(1) Schnellnutton:	
					
						# Editierbutton (blau)
						# Dieser soll der schellen Bearbeitung einer Seite dienen
						# und ist hier manuell in das Design integriert!
						
					*/
					?>
					<div id="wb-easy-editbutton" style="border: 1px solid #0044AA;
					border-radius: 3px 3px 3px 3px;
					float: right;
					margin-right: 5px;
					margin-top: 4px;">
<a href="<?php global $wgServer; echo $wgServer?>/w/index.php?title=<?php global $wgTitle; echo $wgTitle ?>&action=edit" title="Seite bearbeiten">
<img src="<?php global $wgServer; echo $wgServer; ?><?php global $wgStylePath; echo $wgStylePath; ?><?php global $wgWBSkinName; echo $wgWBSkinName; ?>/designimages/Edit.png" title="Bearbeiten">
</a>
					</div>
					<? #<!--//Editbutton --> ?>
					
					
					
					
					
					<? #<!--SpezialSeiten -->
					/*	
					(2) Schnellnutton:	
					
						# Spezialseite (blau)
						# Dieser soll zur schellen Erreichbarkeit der
						# Spezialseiten dienen.
						
					*/
					?>
					<div id="wb-easy-specialbutton" style="border: 1px solid #0044AA;
					border-radius: 3px 3px 3px 3px;
					float: right;
					margin-right: 5px;
					margin-top: 4px;">
<a href="<?php global $wgServer; echo $wgServer; ?>/wiki/Spezial:Spezialseiten" title="Seite bearbeiten">
<img src="<?php global $wgServer; echo $wgServer; ?><?php global $wgStylePath; echo $wgStylePath; ?><?php global $wgWBSkinName; echo $wgWBSkinName; ?>/designimages/Spezial.png" title="Spezialseiten">
</a>
					</div>
					<? #<!--//SpezialSeiten --> ?>
					
					
					
					
					<? #<!--MWUploadsite -->
					/*	
					(3) Schnellnutton:	
					
						# MediaWiki Uploadseite (blau)
						# Dieser soll zur schellen Erreichbarkeit der
						# Hochladeseite in MediaWiki führen.
						
					*/
					?>
					<div id="wb-easy-upladerbutton" style="border: 1px solid #0044AA;
					border-radius: 3px 3px 3px 3px;
					float: right;
					margin-right: 5px;
					margin-top: 4px;">
<a href="<?php global $wgServer; echo $wgServer?>/wiki/Spezial:Hochladen" title="Seite bearbeiten">
<img src="<?php global $wgServer; echo $wgServer;?><?php global $wgStylePath; echo $wgStylePath; ?><?php global $wgWBSkinName; echo $wgWBSkinName; ?>/designimages/Uploader.png" title="hochladen">
</a>
					</div>
					<? #<!--//MWUploadsite --> ?>
					
					
					
					

	</div>
	<!--//editbar (right)-->	


	<? #<!-- OLD EDITBAR -->

	/*
		# Dieser Bereich enthält die MediaWiki Standard Bearbeitungsbutton!
		# Sie sollen späten in einen anderen Bereich übergehen
		
		# => Ideen sind bis jetzt nur wage vorhanden! <=
	

	
	<div id="wbEditbar" style="margin-top: -12px; padding: 5px;">
		<ul id="wbEditbar" style="list-style-image:url(list_style_image.gif)">
							
		</ul>
	</div>
	 #<!-- //OLD EDITBAR --> */ ?>	
	
</div>	
<?php } 

/*
	Die Editbar ist hier zu Ende!
*/
?>
<br>
<br>
<br>
<br>
	
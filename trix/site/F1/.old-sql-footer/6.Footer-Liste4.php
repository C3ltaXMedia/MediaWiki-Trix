<?php


// Einbindung der SQL Daten für die Datenbank Axomic Skin (zur Zeit auf WikiSkinDB!!!)
	
	#include("/webserver/wikibyte.org/-/w/skins.mccouman/axomic/skin.sql.php"); 

    while ($adr = mysql_fetch_array($trix_Skin_footer4query)){


?>
<!-- Listenbereich 4-->
<div style="padding: 0px 4px 10px 56px; width: 180px; float: left;">
	<!-- Überschrift L4 -->
	<h3 style="font-size: 12px; color: #555;"><?=$adr['ueberschrift']?></h3>
	<!-- //Überschrift L4 -->
	
		<!-- Liste 4 -->
		<ul id="wb-footer-ul" style="">
						
							<li style="list-style: none;">
								<a href="<?=$adr['link1']?>">
									<?=$adr['text1']?>
								</a>
							</li>
							
							<li style="list-style: none;">
								<a href="<?=$adr['link2']?>">
									<?=$adr['text2']?>
								</a>
							</li>
							
							<li style="list-style: none;">
								<a href="<?=$adr['link3']?>">
									<?=$adr['text3']?>
								</a>
							</li>
							
							<li style="list-style: none;">
								<a href="<?=$adr['link4']?>">
									<?=$adr['text4']?>
								</a>
							</li>
							
							<li style="list-style: none;">
								<a href="<?=$adr['link5']?>">
									<?=$adr['text5']?>
								</a>
							</li>
							
							<li style="list-style: none;">
								<a href="<?=$adr['link6']?>">
									<?=$adr['text6']?>
								</a>
							</li>
							
		</ul>
		<!-- //Liste 4 -->
<?php  #DB Einbindung ENDE! 
	}
?>
</div>	
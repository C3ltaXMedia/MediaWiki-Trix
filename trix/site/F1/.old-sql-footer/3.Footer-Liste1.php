<div style="padding: 0px 4px 10px 56px; width: 180px; float: left;">
<?php
	
	# Liste 1
    while ($adr = mysql_fetch_array($trix_Skin_footerquery)){

?>
	<h3 style="font-size: 12px; color: #555;">
		<?=$adr['ueberschrift']?>
	</h3>
		<ul id="wb-footer-ul">						
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
<?php  #DB Einbindung ENDE! Liste 1
	} 
	?>
</div>
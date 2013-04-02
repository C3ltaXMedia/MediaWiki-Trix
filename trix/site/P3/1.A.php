<!--------------------------------- Überschrift / Kategorien ------------------------------------>
	<!-- Artikelzeile -->
	<div id="wb-artikelinfos">
		<!-- Artikelinfobereich -->
		<table border="0">
			<colgroup>
				<col width="50%">
				<col width="50%">
				<col width="2%">
			</colgroup>
				  <tr>
					<td>
					<!-- Artikelname -->
						<div id="wb-artikelname">
							<?php $this->html( 'title' ) ?>
						</div>
					<!-- //Artikelname -->	
					</td>
					
					<td>
					<!-- Kategorien -->
						<div id="wb-kategorielinks">
							<?php $this->html( 'catlinks' ); ?>	
						</div>
					<!-- //Kategorien -->
					</td>
					<td style="">
					<!-- Anmeldefunktionsbutton -->
						<div id="wb-logbutton">	
						<!--Anmelden-->
							<a <?php if($this->data['loggedin']) { ?> style="display:none;" <?php } ?> href="<?php global $wgServer; echo $wgServer?>/wiki/Spezial:Anmelden"><span class="buttona hi"> Anmelden <span></span> </span></a>
						<!-- Abmelden -->
							<?php if($this->data['loggedin']) { ?>
								<a href="<?php global $wgServer; echo $wgServer?>/wiki/Spezial:Abmelden">
									<span class="buttonb bye"> Abmelden <span></span> </span>
								</a>
							<?php } ?>
						</div>
					<!-- //Anmeldefunktionsbutton -->
					</td>
				  </tr>
    	</table>
		<!-- //Artikelinfobereich -->
	</div>
	<!-- //Artikelzeile -->
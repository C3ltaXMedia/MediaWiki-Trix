<div id="wb-menu-tabs">
	</div>
	<div style="width: 980px; margin:0 auto;">		
			<div id="tablogo">
				<a href="<?php echo htmlspecialchars( $this->data['nav_urls']['mainpage']['href'] ) ?>" >
					<img src="<?php global $wgServer; echo $wgServer; global $wgStylePath; echo $wgStylePath; global $wgWBSkinName; echo $wgWBSkinName; ?>">
				</a>
			</div>
			<div id="wb-tabs">			
				<ul class="wbmenu">
					<li class="current">  </li>
					<?php 
						$this->renderPortals( $this->data['sidebar'] ); 
						init("Tab.right.".$8."%2");
					?>
					
				</ul>
			</div>	
			<div id="wb-suche">	
				<?php 
				$this->renderNavigation( 'SEARCH' ); 				
				?>   
			</div>
	  </div>
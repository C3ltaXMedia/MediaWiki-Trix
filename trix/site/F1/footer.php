<?php # Footer Lizenz:

# Lizenz CSS:
echo '<style type="text/css">
#wb-footerlanche {
	margin-top:20px; 
	margin: 0 auto; 
	overflow: hidden; 
	width: 980px; 
	border:1px solid #ddd; 
	border-radius: 4px 4px 4px 4px; 
	font-size: 12px;
}
.wb-f-list {
	background:fff; 
	border-top: 1px solid #ddd; 
	color:#888888; 
	font-size: 12px;
}
</style>'
?>


<div id="footer"<?php $this->html( 'userlangattributes' ) ?>>
<?php 					
init("$AviWB/$10/.f.php"); 	
?>
	<div id="wb-footerlanche">
		<?php 	
		init("$AviWB/$10/kopf.f.php"); 
		?>
		<div class="wb-f-list">				
			<? 
			#Liste1
			init("$AviWB/$10/Liste1.f.php");;
			#Liste2
			init("$AviWB/$10/Liste2.f.php");
			#Liste3
			init("$AviWB/$10/Liste3.f.php");
			#Liste4
			init("$AviWB/$10/Liste4.f.php");			
			?>		
		</div>
	</div>
	<br>
	<? 
	init("$AviWB/$10/Lizenzinfos.f.php"); 	
	?>
</div>
<?php

if( !defined( 'MEDIAWIKI' ) ) {
	die( -1 );
}

class SkinTrix extends SkinTemplate {
	var $skinname = 'trix', $stylename = 'trix',
		$template = 'TrixTemplate', $useHeadElement = true;
	public function initPage( OutputPage $out ) {
		global $wgLocalStylePath;
		parent::initPage( $out );	
			
		$out->addHeadItem('personal.css','<style type="text/css">input[type="text"]:focus, textarea:focus, button:focus, a.button:focus, select:focus, input[type="file"]:focus, input[type="password"]:focus { border: 1px solid #50B1FE; box-shadow: 0 0 7px #6DB9FF; outline: medium none;}button.small, a.button.small{font-size:0.8em;padding:5px 10px;}.pill{border-radius:200em;}.pop{box-shadow:0px 1px 5px rgba(0,0,0,0.2);}.inset{box-shadow:inset 0px 1px 3px rgba(0,0,0,0.3);}.square{-moz-border-radius:0;-webkit-border-radius:0;-o-border-radius:0;border-radius:0;}#BreadCrumbsTrail { background: none repeat scroll 0 0 #FFFFFF; border: 1px solid #EEEEEE; color: #999999; font-size: 12px; margin-left: -12px; margin-right: -12px; padding: 10px 10px 10px 15px;}#BreadCrumbsTrail a { font-size:12px; color:#0099dd;}#uploadform { position:relative; width:280px; margin:3px auto 15px 8px; text-align:center;}#uploadform input { display:block; margin:3px auto;}div#useristoffline,div#useristonline { border: 1px solid #fff; padding: 5px; float:right; margin-top: 7px;}div#useristoffline span { color:red;}div#useristonline span { color:#0a0;}div#tabv-bg { background: url(' .$wgLocalStylePath. '/trix/designimages/tabv.bg.png); height: 32px; margin-left: -30px; width: 978px;}div#tabv-line { margin-top: 6px;}div.tabv-left { float:left; }div.tabv-right { float:right; }div#tabv-line a{ margin-left: 52px; margin-right: 52px;}strong.selflink { color: #2B2B2B !important;}strong.selflink span#tabv{ color:#aaa !important; background: url(' .$wgLocalStylePath. '/trix/designimages/tabv.png) no-repeat scroll center top transparent; color: #2B2B2B !important; cursor: default !important; text-shadow: 0 1px 0 #FFFFFF; padding-left: 1px;}span#tabv { padding-top: 8px; color: #7F7F7F;}a span#tabv { color: #7F7F7F; text-decoration:none !important; }div#tabv-line a:hover,div#tabv-line a:focus { color: #7F7F7F; text-decoration:none !important; }#box{ background:transparent; margin-bottom:-10px; padding-top:30px; width:980px;}#box div#inventar { font-size:12px; padding-left:20px; background:#eee; border:1px solid #ddd; color:#494848; text-shadow:1px 1px 0 white; font-family:Arial,Helvetica,sans-serif; margin-top: 6px;}ul#userline { list-style: none outside none; margin-left:-12px;}ul#userline li { display: inline; padding:5px;}</style>' );
		$out->addHeadItem('Faviconapple', '<link rel="apple-touch-icon" href="/images/start/favicon/wb-applefavicon.png" />');
		$out->addHeadItem('html', 	'<link rel="stylesheet" type="text/css" href="' .$wgLocalStylePath. '/trix/html.css">');
		$out->addHeadItem('header', 	'<link rel="stylesheet" type="text/css" href="' .$wgLocalStylePath. '/trix/header.css">');
		$out->addHeadItem('page', 	'<link rel="stylesheet" type="text/css" href="' .$wgLocalStylePath. '/trix/page.css">');
		$out->addHeadItem('navigation', '<link rel="stylesheet" type="text/css" href="' .$wgLocalStylePath. '/trix/navigation.css">');
		$out->addHeadItem('content', 	'<link rel="stylesheet" type="text/css" href="' .$wgLocalStylePath. '/trix/content.css">');
		$out->addHeadItem('search', 	'<link rel="stylesheet" type="text/css" href="' .$wgLocalStylePath. '/trix/includes/Suche/search.css">');
		$out->addHeadItem('buttons', 	'<link rel="stylesheet" type="text/css" href="' .$wgLocalStylePath. '/trix/buttons.css">');
		$out->addHeadItem('breadcrumbs', '<link rel="stylesheet" type="text/css" href="' .$wgLocalStylePath. '/trix/breadcrumbs.css">');
		$out->addHeadItem('images', 	'<link rel="stylesheet" type="text/css" href="' .$wgLocalStylePath. '/trix/images.css">');
		$out->addHeadItem('footer', 	'<link rel="stylesheet" type="text/css" href="' .$wgLocalStylePath. '/trix/footer.css">');
		$out->addHeadItem('starter', 	'<link rel="stylesheet" type="text/css" href="' .$wgLocalStylePath. '/trix/wbstart.css">');
		$out->addHeadItem('banner', 	'<link rel="stylesheet" type="text/css" href="' .$wgLocalStylePath. '/trix/includes/Banner/banner.css">');
		$out->addHeadItem('wbmenu.css',	'<link rel="stylesheet" type="text/css" href="' .$wgLocalStylePath. '/trix/includes/Tabs/wbmenu.css">');
		$out->addHeadItem("wbmenu.js",	'<script type="text/javascript" src="' .$wgLocalStylePath. '/trix/wbmenu.js"></script>');				
		$out->addHeadItem('wbtemplate',	'<link rel="stylesheet" type="text/css" href="' .$wgLocalStylePath. '/trix/wbtemplate.css">');
		$out->addHeadItem("Inv.Core.js",'<script type="text/javascript" src="' .$wgLocalStylePath. '/trix/site/Page/bouncebox-plugin/jquery.bouncebox.1.0.js"></script>');			
		$out->addHeadItem("Inv.Wid.js",	'<script type="text/javascript" src="' .$wgLocalStylePath. '/trix/site/Page/bouncebox-plugin/jquery.easing.1.3.js"></script>');			
		$out->addHeadItem("Inv.Tab.js",	'<script type="text/javascript" src="' .$wgLocalStylePath. '/trix/site/Page/bouncebox-plugin/pscript.js"></script>');			
		$out->addHeadItem("perso3",	'<script type="text/javascript" src="' .$wgLocalStylePath. '/trix/includes/BenutzerInventar/src/jquery.poshytip.js"></script>');		
		$out->addHeadItem("jq-ui",	'<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/jquery-ui.min.js"></script>');
		$out->addHeadItem("jq-box",	'<script type="text/javascript" src="' .$wgLocalStylePath. '/trix/includes/AvatarUploader/jquery.ulightbox.js"></script>');
		$out->addHeadItem('css-box',	'<link rel="stylesheet" type="text/css" href="' .$wgLocalStylePath. '/trix/includes/AvatarUploader/jquery.ulightbox.css">');		
		$out->addHeadItem("JS-SuppVid",	'<script type="text/javascript" src="' .$wgLocalStylePath. '/trix/includes/SupportVideos/jquery.youtubeplaylist.js"></script>');
		$out->addHeadItem("JS-SuppVideoSettings","<script type='text/javascript'>$(function() { $('ul.video').ytplaylist({addThumbs:true, autoPlay: true, holderId: 'ytvideo'}); });</script>");	
		$out->addHeadItem('CSS-SuppVid', '<link rel="stylesheet" type="text/css" href="' .$wgLocalStylePath. '/trix/includes/SupportVideos/jquery.youtubeplaylist.css">');
		$out->addHeadItem("Flattr-Link","<script type='text/javascript'> (function() { var s = document.createElement('script'), t = document.getElementsByTagName('script')[0]; s.type = 'text/javascript'; s.async = true; s.src = 'http://api.flattr.com/js/0.6/load.js?mode=auto'; t.parentNode.insertBefore(s, t);	})();</script>");

	}
}


class TrixTemplate extends BaseTemplate {
	var $skin;
	public function execute() {
		global $wgLang, $wgVectorUseIconWatch;
		$this->skin = $this->data['skin'];
		$nav = $this->data['content_navigation'];
		$xmlID = '';
		foreach ( $nav as $section => $links ) {
			foreach ( $links as $key => $link ) {
				if ( $section == 'views' && !( isset( $link['primary'] ) && $link['primary'] ) ) {
					$link['class'] = rtrim( 'collapsible ' . $link['class'], ' ' );
				}
				$xmlID = isset( $link['id'] ) ? $link['id'] : 'ca-' . $xmlID;
				$nav[$section][$key]['attributes'] =
					' id="' . Sanitizer::escapeId( $xmlID ) . '"';
				if ( $link['class'] ) {
					$nav[$section][$key]['attributes'] .=
						' class="' . htmlspecialchars( $link['class'] ) . '"';
					unset( $nav[$section][$key]['class'] );
				}
				if ( isset( $link['tooltiponly'] ) && $link['tooltiponly'] ) {
					$nav[$section][$key]['key'] =
						Linker::tooltip( $xmlID );
				} else {
					$nav[$section][$key]['key'] =
						Xml::expandAttributes( Linker::tooltipAndAccesskeyAttribs( $xmlID ) );
				}
			}
		}
		$this->data['namespace_urls'] = $nav['namespaces'];
		$this->data['view_urls'] = $nav['views'];
		$this->data['action_urls'] = $nav['actions'];
		$this->data['variant_urls'] = $nav['variants'];
		if ( $wgLang->isRTL() ) {
			$this->data['view_urls'] =
				array_reverse( $this->data['view_urls'] );
			$this->data['namespace_urls'] =
				array_reverse( $this->data['namespace_urls'] );
			$this->data['personal_urls'] =
				array_reverse( $this->data['personal_urls'] );
		}
		$this->html( 'headelement' .$puthead. "/Header.php"); 
?>
<div id="wikibytepage">	
<?php
init ($puthead."/%.$pagelinit.php"); 
global $wgTitle;
$siteuser_ext_meta = "
			SELECT 
				pageid, 
				wbstatus
			FROM 
				ext_meta
			WHERE 
				pageid = '".$wgTitle->getArticleID()."'
			";
$siteuser_ext_meta_info = mysql_query($siteuser_ext_meta) or 
die("Error: #sq10001");
while ($adr = mysql_fetch_array($siteuser_ext_meta_info)) 	{ 	
?>
<style type="text/css"><?php echo $adr['wbstatus']; ?></style>
<? } 

}
?>
<div id="content">
<a id="top"></a>
<div id="mw-js-message" style="display:none;"<?php $this->html( 'userlangattributes' ) ?>></div>		
<?php if($this->data['loggedin']) { ?>			
<div style="background: url('<?php global $wgServer; echo $wgServer?>userblende-down') #fff;">
</div>
<?php } 
			/*
			  ( =/= 2 ) 
			*/ 
?>	
<div id="bodyContent" style="margin-top: -9<?php if($this->data['loggedin']) { ?>5<?php } ?>px;">
<?php if ( $this->data['isarticle'] ): ?>
<div id="siteSub"><?php $this->msg( 'tagline' ) ?></div>
<?php endif; ?>
<div id="contentSub"<?php $this->html( 'userlangattributes' ) ?>><?php $this->html( 'subtitle' ) ?></div>
<?php if ( $this->data['undelete'] ): ?><div id="contentSub2"><?php $this->html( 'undelete' ) ?></div><?php endif; ?>
<?php if( $this->data['newtalk'] ): ?><div class="usermessage"><?php $this->html( 'newtalk' )  ?></div><?php endif; ?>
<?php if ( $this->data['showjumplinks'] ): ?><div id="jump-to-nav"><?php $this->msg( 'jumpto' ) ?> <a href="#mw-head">
<?php $this->msg( 'jumptonavigation' ) ?></a>,
<a href="#p-search"><?php $this->msg( 'jumptosearch' ) ?></a></div><?php endif; ?>
<?php $this->html( 'bodycontent' ) ?><?php if ( $this->data['printfooter'] ): ?>
		<div class="printfooter">
			<?php $this->html( 'printfooter' ); ?>
		</div>
		<?php endif; ?>
<?php if ( $this->data['catlinks'] ): 
			/*
				# Ende//
			*/
?>
<?php if ( $this->data['dataAfterContent'] ): ?>
<?php $this->html( 'dataAfterContent' ); ?>
<?php endif; ?>
		<div class="visualClear"></div>
		<?php $this->html( 'debughtml' ); ?>
		</div>
<br>
<?php
		/*
			# Menu PlugIn
		*/
			
	init($puthead."/".$outlineavi.".$2"); 
?></div>
<div style="margin-top:6px; <?php if($this->data['loggedin']) { ?>display:none;<?php } ?>">
</div>
<div id="load"><span class="expand dreamweaver"></span></div>

		<div id="wb-banner" style="<?php 
		#---------------------------------
				
			if($this->data['loggedin']) { 
			
		?>display:none;<?php } ?>">	
		
		<?php	init("Bannmile".$3.""); 
				
					?><div id="wbbot"></div><?
	  ?></div>
	  <div class="clear"></div></div>
<? 

init("footer":$5 - $4 . "%2%4%1", "BenutzerInventar", 8); 

?>
<script type="<?php $this->text( 'jsmimetype' ) ?>"> if ( window.isMSIE55 ) fixalpha(); </script>
<?

	 $this->printTrail(); 
?>
</body>
</html>
<?php
	}

	private function renderPortals( $portals ) {
		if ( !isset( $portals['SEARCH'] ) ) {
			$portals['SEARCH'] = true;
		}
		if ( !isset( $portals['TOOLBOX'] ) ) {
			$portals['TOOLBOX'] = true;
		}
		if ( !isset( $portals['LANGUAGES'] ) ) {
			$portals['LANGUAGES'] = true;
		}
		foreach ( $portals as $name => $content ) {
			if ( $content === false )
				continue;
			echo "\n<!-- {$name} -->\n";
			switch( $name ) {
				case 'SEARCH':
					break;
				case 'TOOLBOX':
					
					   if($this->data['loggedin']) { 
						$this->renderPortal( 'tb', $this->getToolbox(), 
						'toolbox', 
						'SkinTemplateToolboxEnd' 
						); 			
				}
					break;				
				case 'LANGUAGES':
					if ( $this->data['language_urls'] ) {
						$this->renderPortal( 'lang', $this->data['language_urls'], 'otherlanguages' );
					}
					break;
				default:
					$this->renderPortal( $name, $content );
				break;
			}
			echo "\n<!-- /{$name} -->\n";
		}
	}

	private function renderPortal( $name, $content, $msg = null, $hook = null ) {
		if ( !isset( $msg ) ) {
			$msg = $name;
		}
		?>

	<li style="background:transparent;" Id="MenuItem1">
		<a id="wb-navi">
			<?php $msgObj = wfMessage( $msg ); echo htmlspecialchars( $msgObj->exists() ? $msgObj->text() : $msg ); ?>
		</a>
	<ul>
	
<?php
		if ( is_array( $content ) ): ?>
		<!-- li -->
<?php
			foreach( $content as $key => $val ): ?>
			<?php echo $this->makeListItem( $key, $val ); ?>

<?php
			endforeach;
			if ( isset( $hook ) ) {
				wfRunHooks( $hook, array( &$this, true ) );
			}
			?>
		<!-- /li -->
	</ul>
<?php
		else: ?>
		<?php echo $content; ?>
<?php
		endif; ?>
</li>	

<?php
	}
	private function renderNavigation( $elements ) {
		global $wgUsetrix, $wgtrixVariantName, $wgUser, $wgLang;
		if ( !is_array( $elements ) ) {
			$elements = array( $elements );
		// If there's a series of elements, reverse them when in RTL mode
		} elseif ( $wgLang->isRTL() ) {
			$elements = array_reverse( $elements );
		}
		foreach ( $elements as $name => $element ) {
			echo "\n<!-- {$name} -->\n";
			switch ( $element ) {
				case 'NAMESPACES':
?>

<?php foreach ( $this->data['namespace_urls'] as $link ): ?>
<a class="button small inset" href="<?php echo htmlspecialchars( $link['href'] ) ?>" <?php echo $link['key'] ?>>
<span <?php echo $link['attributes'] ?>><?php echo htmlspecialchars( $link['text'] ) ?></span>
</a>
<?php endforeach; ?>

<?php
				break;
				case 'VARIANTS':
?>
<?php if ( $wgtrixVariantName ): ?></li>
	<?php endif; ?>
	<?php foreach ( $this->data['variant_urls'] as $link ): ?>
	<a class="button pill" href="<?php echo htmlspecialchars( $link['href'] ) ?>" <?php echo $link['key'] ?>><?php echo htmlspecialchars( $link['text'] ) ?></a>
<?php endforeach; ?>

<?php
				break;
				case 'VIEWS':
?>
<?php foreach ( $this->data['view_urls'] as $link ): ?>

<li><a <?php echo $link['attributes'] ?> href="<?php echo htmlspecialchars( $link['href'] ) ?>" >
<span <?php echo $link['attributes'] ?>>
	<?php
				// $link['text'] can be undefined - bug 27764
				if ( array_key_exists( 'text', $link ) ) {
					echo array_key_exists( 'img', $link ) ?  '<img src="' . $link['img'] . '" alt="' . $link['text'] . '" />' : htmlspecialchars( $link['text'] );
				}
				?>		</span>	
			
</a></li>
<?php endforeach; ?>

<?php
				break;
				case 'ACTIONS':
?>

<?php foreach ( $this->data['action_urls'] as $link ): ?>
	<li><a <?php echo $link['attributes'] ?> href="<?php echo htmlspecialchars( $link['href'] ) ?>" 
	<?php echo $link['key'] ?>>
		<span <?php echo $link['attributes'] ?>>
		<?php echo htmlspecialchars( $link['wbtext'] ) ?></span>
	</a></li>
<?php endforeach; ?>

<?php
				break;
				case 'PERSONAL':
?>
<?php foreach( $this->getPersonalTools() as $key => $item ) { ?>
		<?php echo $this->makeListItem( $key, $item ); ?>
<?php } 
				break;
				case 'SEARCH':
?>
<div id="p-search">
	<form method="get" id="searchform" action="<?php $this->text('searchaction') ?>">
		<span id="wb-search-icon"><img src="-".$1."%3"></span>
		<input name="search" type="text"  placeholder="Suche" 
			onfocus="if (this.value == '$1') {
					this.value = '%3'
				}" 
		name="s" 
		id="s" /> 
		<input name="go" type="hidden" tabindex="5" value="Go" />
	</form>
</div>
<?php

				break;
			}
			echo "\n<!-- /{$name} -->\n";
		}
	}
}

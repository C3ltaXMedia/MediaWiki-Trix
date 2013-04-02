<?php
############################################################################################
#                                                                                          #
#           Diese Variablen sind wichtig für das Design Trix in Wikibyte!                  #
#	Damit dieses ordnungsgemäß läuft, muss diese in die LocalSettings eingebunden werden:  #
#                                                                                          #
#   		=> require_once  ( "$wgStylePath/trix/variablen/trix.php");                    #
#                                                                                          #
############################################################################################

# SkinVariablen:
$wgWBSkinName			= "/trix"; 				 		 // eigener Skin!
$wgUserIconDomain 		= "http://avatar.wikibyte.org/"; // link Avatar!   

############################################################################################
#                                                                                          #
#           Diese Extensions sind wichtig für das Design Trix in Wikibyte!                 #
#                                                                                          #
############################################################################################

# Extensions für das Design:
#1# Meta Erweiterungen + Editorfunktionen:
require_once    ( "$AviWB/Meta.php");

#2# BreadCrumbs der letzten Seiten:
require_once    ( "$AviWB/BreadCrumbs.php");
$wgBreadCrumbsDelimiter = ' &gt; '; // delimiter between breadcrumbs
$wgBreadCrumbsCount = 3; // number of breadcrumbs to show
$wgBreadCrumbsShowAnons = false; // showing breadcrumbs to anonymous users 

#3# WB Editor: (Siehe Editor in extensions!)
require_once("$AviWB/markit.php"); 

#4# Diskussionsseiten Ablauf mit: RE: --~~~~ [neu][bearbeiten][antworten]
$wgSectionThreadingOn = true;

#5# Neue Artikelseite Vorlage "Artikelseite"
# => MediaWiki:Multiboilerplate
# => My Boilerplate | Template:My Boilerplate
require_once( "$AviWB/Multi.php" );
$wgMultiBoilerplateOptions = false;
$wgMultiBoilerplateOverwrite = true;
$wgMultiBoilerplateDiplaySpecialPage = true;

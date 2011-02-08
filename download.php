<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009 
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	$pageTitle 		= "WindowBuilder - Download";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>

<h3>Helios - Eclipse 3.6</h3>
<p><b>Update site:</b>http://dl.google.com/eclipse/inst/d2wbpro/beta/3.6<br />

<h3>Galileo - Eclipse 3.5</h3>
<p><b>Update site:</b>http://dl.google.com/eclipse/inst/d2wbpro/beta/3.5<br />

<h3>Ganymede - Eclipse 3.4</h3>
<p><b>Update site:</b>http://dl.google.com/eclipse/inst/d2wbpro/beta/3.4<br />


</div>
EOHTML;

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
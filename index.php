<?php
/**
 * @package     GuillaumeSeren.BlogTemplate
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die('Restricted access');

/* The following line gets the application object for things like displaying the site name */
$app = JFactory::getApplication();
?>
<!DOCTYPE html>
<html
    xmlns="http://www.w3.org/1999/xhtml"
    xml:lang="<?php echo $this->language; ?>"
    lang="<?php echo $this->language; ?>" >
    <head>
        <jdoc:include type="head" />
        <!-- Template dependencies -->
        <link
            rel="stylesheet"
            href="<?php echo $this->baseurl ?>/templates/system/css/system.css"
            type="text/css" />
        <link
            rel="stylesheet"
            href="<?php echo $this->baseurl ?>/templates/system/css/general.css"
            type="text/css" />
        <link
            rel="stylesheet"
            href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css"
            type="text/css" />
    </head>
    <body>
        <!-- HEADER {{{1 -->
        <div id="header">
            <h1 id="title"><?php echo htmlspecialchars($app->getCfg('sitename')); ?></h1>
            <jdoc:include type="modules" name="position-0" />
        </div>
        <!-- MENU {{{1 -->
        <div id="menu">
            <jdoc:include type="modules" name="position-1" />
        </div>
        <!-- BREADCRUMB {{{1 -->
        <div id="breadcrumb">
            <jdoc:include type="modules" name="position-2" />
        </div>
        <!-- MODULES {{{1 -->
        <div id="modules">
            <jdoc:include type="modules" name="position-7" />
            <jdoc:include type="modules" name="position-4" />
            <jdoc:include type="modules" name="position-5" />
        </div>
        <!-- MAIN {{{1 -->
        <div id="main">
            <jdoc:include type="message" />
            <jdoc:include type="component" />
            <jdoc:include type="modules" name="position-6" />
            <jdoc:include type="modules" name="position-8" />
            <jdoc:include type="modules" name="position-3" />
        </div>
        <!-- FOOTER {{{1 -->
        <div id="footer">
            <jdoc:include type="modules" name="position-9"  />
            <jdoc:include type="modules" name="position-10" />
            <jdoc:include type="modules" name="position-11" />
            <jdoc:include type="modules" name="position-14" />
            <span class="footer"><?php echo date('Y'); ?> <?php echo htmlspecialchars($app->getCfg('sitename')); ?></span>
        </div>
    </body>
</html>

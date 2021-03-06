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
            href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/bundle/normalize.css/normalize.css"
            type="text/css" />
        <link
            rel="stylesheet"
            href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/template.css"
            type="text/css" />
    </head>
    <body>
        <!-- HEADER {{{1 -->
        <div class="header">
            <h1 class="title"><?php echo htmlspecialchars($app->getCfg('sitename')); ?></h1>
            <div class="position-0">
                <jdoc:include type="modules" name="position-0" />
            </div>
            <div class="position-1">
                <jdoc:include type="modules" name="position-1" />
            </div>
        </div>
        <!-- BREADCRUMB {{{1 -->
        <div class="breadcrumb">
            <jdoc:include type="modules" name="position-2" />
        </div>
        <!-- MODULES {{{1 -->
        <div class="modules">
            <jdoc:include type="modules" name="position-7" />
            <jdoc:include type="modules" name="position-4" />
            <jdoc:include type="modules" name="position-5" />
        </div>
        <!-- MAIN {{{1 -->
        <div class="main">
            <jdoc:include type="message" />
            <jdoc:include type="component" />
            <jdoc:include type="modules" name="position-6" />
            <jdoc:include type="modules" name="position-8" />
            <jdoc:include type="modules" name="position-3" />
        </div>
        <!-- FOOTER {{{1 -->
        <div class="footer">
            <jdoc:include type="modules" name="position-9"  />
            <jdoc:include type="modules" name="position-10" />
            <jdoc:include type="modules" name="position-11" />
            <jdoc:include type="modules" name="position-14" />
            <span class="footer"><?php echo date('Y'); ?> <?php echo htmlspecialchars($app->getCfg('sitename')); ?></span>
        </div>
    </body>
</html>

<?php
/**
 * @package     GuillaumeSeren.BlogTemplate
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die('Restricted access');?>
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
            <h1 id="logo">Here is the HEADER</h1>
            <jdoc:include type="modules" name="position-0" />
            <jdoc:include type="modules" name="position-1" />
            <div id="header-image">
                <jdoc:include type="modules" name="position-15" />
            </div>
        </div>

        <!-- BREADCRUMB {{{1 -->
        <div id="breadcrumb">
            <jdoc:include type="modules" name="position-2" />
        </div>

        <!-- MODULES {{{1 -->
        <div id="modules">
            <jdoc:include type="modules" name="position-7" headerLevel="3" />
            <jdoc:include type="modules" name="position-4" headerLevel="3" />
            <jdoc:include type="modules" name="position-5" headerLevel="2" />
        </div>

        <!-- MAIN {{{1 -->
        <div id="main">
            <jdoc:include type="message" />
            <jdoc:include type="component" />
            <jdoc:include type="modules" name="position-6" headerLevel="3"/>
            <jdoc:include type="modules" name="position-8" headerLevel="3"  />
            <jdoc:include type="modules" name="position-3" headerLevel="3"  />
        </div>

        <!-- FOOTER {{{1 -->
        <div id="footer">
            <jdoc:include type="modules" name="position-9"  headerlevel="3" />
            <jdoc:include type="modules" name="position-10" headerlevel="3" />
            <jdoc:include type="modules" name="position-11" headerlevel="3" />
            <jdoc:include type="modules" name="position-14" />
        </div>

        <!-- DEBUG {{{1 -->
        <div id="debug">
            <jdoc:include type="modules" name="debug" />
        </div>
    </body>
</html>

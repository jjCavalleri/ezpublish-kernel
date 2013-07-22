<?php
/**
 * File containing the DocbookToEzxmlTest test
 *
 * @copyright Copyright (C) 1999-2013 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\Persistence\Legacy\Tests\Content\FieldValue\Converter\XmlText\XsltConverter;

use eZ\Publish\Core\Persistence\Legacy\Tests\Content\FieldValue\Converter\XmlText\XsltConverter\BaseTest;

/**
 *
 */
class DocbookToEzxmlTest extends BaseTest
{
    static protected $stylesheet = "eZ/Publish/Core/Persistence/Legacy/Content/FieldValue/Converter/XmlText/Resources/stylesheets/docbook_ezxml.xsl";

    static protected $inputDir = "eZ/Publish/Core/FieldType/Tests/XmlText/Converter/Xslt/_fixtures/docbook";

    static protected $outputDir = "eZ/Publish/Core/Persistence/Legacy/Tests/Content/FieldValue/Converter/XmlText/XsltConverter/_fixtures";
}
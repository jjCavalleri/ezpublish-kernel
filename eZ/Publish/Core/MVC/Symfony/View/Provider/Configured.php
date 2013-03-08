<?php
/**
 * File containing the View\Provider\Content\Configured class.
 *
 * @copyright Copyright (C) 1999-2013 eZ Systems AS. All rights reserved.
 * @license http://www.gnu.org/licenses/gpl-2.0.txt GNU General Public License v2
 * @version //autogentag//
 */

namespace eZ\Publish\Core\MVC\Symfony\View\Provider;

use eZ\Publish\API\Repository\Repository;
use eZ\Publish\API\Repository\Values\ValueObject;
use eZ\Publish\Core\MVC\Symfony\View\ViewProviderMatcher;

abstract class Configured
{
    /**
     * @var \eZ\Publish\API\Repository\Repository
     */
    protected $repository;

    /**
     * @var array Matching configuration hash
     */
    protected $matchConfig;

    /**
     * @var \eZ\Publish\Core\MVC\Symfony\View\ContentViewProvider\Configured\Matcher[]
     */
    protected $matchers;

    /**
     * @param \eZ\Publish\API\Repository\Repository $repository
     * @param array $matchConfig
     */
    public function __construct( Repository $repository, array $matchConfig )
    {
        $this->repository = $repository;
        $this->matchConfig = $matchConfig;
        $this->matchers = array();
    }

    /**
     * Returns the matcher object.
     *
     * @param string $matcherIdentifier The matcher class.
     *
     * @return \eZ\Publish\Core\MVC\Symfony\View\ViewProviderMatcher
     */
    abstract protected function getMatcher( $matcherIdentifier );

    /**
     * Checks if $valueObject matches the $matcher's rules.
     *
     * @param \eZ\Publish\Core\MVC\Symfony\View\ViewProviderMatcher $matcher
     * @param \eZ\Publish\API\Repository\Values\ValueObject $valueObject
     *
     * @throws \InvalidArgumentException If $valueObject is not of expected sub-type.
     *
     * @return bool
     */
    abstract protected function doMatch( ViewProviderMatcher $matcher, ValueObject $valueObject );
}

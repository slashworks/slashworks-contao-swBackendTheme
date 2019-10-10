<?php

/*
 * This file is part of Contao Simple SVG Icons Bundle.
 *
 * (c) slashworks
 *
 * @license LGPL-3.0-or-later
 */

namespace Slashworks\ContaoSwBackendThemeBundle\Tests;

use PHPUnit\Framework\TestCase;
use Slashworks\ContaoSimpleSvgIconsBundle\ContaoSimpleSvgIconsBundle;

class ContaoSwBackendThemeBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoSwBackendThemeBundle();

        $this->assertInstanceOf('Slashworks\ContaoSwBackendThemeBundle\ContaoSwBackendThemeBundle', $bundle);
    }
}

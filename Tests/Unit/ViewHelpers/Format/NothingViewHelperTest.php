<?php

namespace GeorgRinger\News\Tests\Unit\ViewHelpers\Format;

/**
 * This file is part of the "news" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */
use TYPO3\TestingFramework\Core\BaseTestCase;

/**
 * Tests for NothingViewHelper
 *
 */
class NothingViewHelperTest extends BaseTestCase
{

    /**
     * Test of nothing viewHelper
     *
     * @test
     */
    public function noResultExpected()
    {
        $viewHelper = $this->getAccessibleMock('GeorgRinger\\News\\ViewHelpers\\Format\\NothingViewHelper', ['renderChildren']);
        $viewHelper->expects($this->once())->method('renderChildren')->will($this->returnValue('whatever content'));
        $actualResult = $viewHelper->render();
        $this->assertEquals(null, $actualResult);
    }
}

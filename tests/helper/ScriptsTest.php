<?php
namespace aura\view\helper;

/**
 * Test class for Scripts.
 * Generated by PHPUnit on 2011-04-02 at 08:29:01.
 */
class ScriptsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @todo Implement testSetIndent().
     */
    public function testSetIndent()
    {
        $scripts = new Scripts;
        $scripts->setIndent('  ');
        $scripts->add('/js/middle.js');
        $scripts->add('/js/last.js', 150);
        $scripts->add('/js/first.js', 50);
        
        $actual = $scripts->get();
        
        $expect = '  <script src="/js/first.js" type="text/javascript"></script>' . PHP_EOL
                . '  <script src="/js/middle.js" type="text/javascript"></script>' . PHP_EOL
                . '  <script src="/js/last.js" type="text/javascript"></script>' . PHP_EOL;
        
        $this->assertSame($expect, $actual);
    }

    /**
     * @todo Implement testAddHead().
     */
    public function testAdd()
    {
        $scripts = new Scripts;
        $scripts->add('/js/middle.js');
        $scripts->add('/js/last.js', 150);
        $scripts->add('/js/first.js', 50);
        
        $actual = $scripts->get();
        
        $expect = '    <script src="/js/first.js" type="text/javascript"></script>' . PHP_EOL
                . '    <script src="/js/middle.js" type="text/javascript"></script>' . PHP_EOL
                . '    <script src="/js/last.js" type="text/javascript"></script>' . PHP_EOL;
        
        $this->assertSame($expect, $actual);
    }

    /**
     * @todo Implement testAddFoot().
     */
    public function testAddFoot()
    {
        $scripts = new Scripts;
        $scripts->addFoot('/js/middle.js');
        $scripts->addFoot('/js/last.js', 150);
        $scripts->addFoot('/js/first.js', 50);
        
        $actual = $scripts->getFoot();
        
        $expect = '    <script src="/js/first.js" type="text/javascript"></script>' . PHP_EOL
                . '    <script src="/js/middle.js" type="text/javascript"></script>' . PHP_EOL
                . '    <script src="/js/last.js" type="text/javascript"></script>' . PHP_EOL;
        
        $this->assertSame($expect, $actual);
    }
}
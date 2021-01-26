<?php

namespace AntidotTest\React\DBAL\Container\Config;

use Antidot\React\DBAL\Container\Config\ConfigProvider;
use PHPUnit\Framework\TestCase;

class ConfigProviderTest extends TestCase
{
    public function testItShouldReturnTheConfigArray(): void
    {
        $configProvider = new ConfigProvider();
        $this->assertIsArray($configProvider());
    }
}

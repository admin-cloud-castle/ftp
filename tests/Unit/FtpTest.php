<?php

declare(strict_types=1);

namespace CloudCastle\Ftp\Tests\Unit;

use CloudCastle\Ftp\Exception\FtpException;
use CloudCastle\Ftp\Ftp;
use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;

/**
 * Модульные тесты заглушки Ftp.
 */
#[CoversClass(Ftp::class)]
final class FtpTest extends TestCase
{
    /**
     * Проверяет, что name() возвращает composer-имя пакета.
     */
    public function testNameReturnsComposerPackageName(): void
    {
        $package = new Ftp();

        self::assertSame('cloud-castle/ftp', $package->name());
    }

    /**
     * Проверяет, что abort() бросает FtpException.
     */
    public function testAbortThrowsFtpException(): void
    {
        $package = new Ftp();

        $this->expectException(FtpException::class);
        $this->expectExceptionMessage('тест');

        $package->abort('тест');
    }
}

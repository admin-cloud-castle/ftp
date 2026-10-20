<?php

declare(strict_types=1);

namespace CloudCastle\Ftp\Contract;

/**
 * Контракт публичного API пакета Ftp.
 */
interface FtpInterface
{
    /**
     * Возвращает идентификатор пакета Composer.
     */
    public function name(): string;
}

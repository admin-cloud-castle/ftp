<?php

declare(strict_types=1);

namespace CloudCastle\Ftp;

use CloudCastle\Ftp\Contract\FtpInterface;
use CloudCastle\Ftp\Exception\FtpException;

/**
 * Точка входа пакета Ftp.
 *
 * Заглушка скаффолда: замените на реальный публичный API.
 */
final class Ftp implements FtpInterface
{
    /**
     * Версия пакета для диагностики.
     */
    public const VERSION = '0.1.0';

    /**
     * Возвращает идентификатор пакета Composer.
     */
    #[\Override]
    public function name(): string
    {
        return 'cloud-castle/ftp';
    }

    /**
     * Завершает работу с ошибкой пакета.
     *
     * @throws FtpException
     */
    public function abort(string $message): never
    {
        throw new FtpException($message);
    }
}

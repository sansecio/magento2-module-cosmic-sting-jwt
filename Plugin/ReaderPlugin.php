<?php

namespace Sansec\CosmicStingJWT\Plugin;

use Magento\Framework\Jwt\JwtInterface;
use Magento\Framework\Jwt\JwtManagerInterface;

class ReaderPlugin
{
    public function beforeRead(JwtManagerInterface $subject, string $token, array $acceptableEncryption): array
    {
        if (count($acceptableEncryption) <= 1) {
            return [$token, $acceptableEncryption];
        }
        return [$token, [$acceptableEncryption[count($acceptableEncryption) - 1]]];
    }
}

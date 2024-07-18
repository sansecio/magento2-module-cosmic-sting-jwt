# Important Notice

Adobe has released a [hotfix for the isolated patch](https://experienceleague.adobe.com/en/docs/commerce-knowledge-base/kb/troubleshooting/known-issues-patches-attached/security-update-available-for-adobe-commerce-apsb24-40-revised-to-include-isolated-patch-for-cve-2024-34102?lang=en#hotfix) that ensures only the latest encryption key is used for JWTs. If you have applied this hotfix, this module is no longer necessary.

# Cosmic Sting JWT

As [CosmicSting](https://sansec.io/research/cosmicsting-hitting-major-stores) enables attackers to read any file, attackers can steal Magento's secret encryption key. This encryption key can be used to generate JSON Web Tokens with full administrative API access.

Adobe offers a solution to change the encryption key, but all it does is _add_ an additional key and then attempts to re-encrypt existing secrets with this key. It does nothing to invalidate the old key that is still being referenced in `app/etc/env.php`.

This module ensures that JWTs are only ever read using the latest encryption key. It is provided as-is and without any warranty or guarantees. Test extensively and use at own risk.

## Installation

```
composer require sansec/magento2-module-cosmic-sting-jwt
bin/magento setup:upgrade
```

## License

[MIT License](./LICENSE) - Copyright (c) 2024 Sansec

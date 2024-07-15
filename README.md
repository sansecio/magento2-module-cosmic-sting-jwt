# Cosmic Sting JWT

As [CosmicSting](https://sansec.io/research/cosmicsting-hitting-major-stores) enables attackers to read any file, attackers can steal Magento's secret encryption key. This encryption key can be used to generate JSON Web Tokens with full administrative API access.

Adobe offers a solution to change the encryption key, but all it does is _add_ an additional key and then attempts to re-encrypt existing secrets with this key. It does nothing to invalidate the old key that is still being referenced in `app/etc/env.php`.

This module ensures that JWTs are only ever read using the latest encryption. It is provided as-is and without any warranty or guarantees. 

## License

[MIT License](./LICENSE) - Copyright (c) 2024 Sansec

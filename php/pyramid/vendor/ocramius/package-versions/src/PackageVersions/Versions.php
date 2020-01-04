<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'bobel/pyramid';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'composer/semver' => '1.5.0@46d9139568ccb8d9e7cdd4539cab7347568a5e2e',
  'composer/xdebug-handler' => '1.4.0@cbe23383749496fe0f373345208b79568e4bc248',
  'doctrine/annotations' => 'v1.8.0@904dca4eb10715b92569fbcd79e201d5c349b6bc',
  'doctrine/instantiator' => '1.3.0@ae466f726242e637cebdd526a7d991b9433bacf1',
  'doctrine/lexer' => '1.2.0@5242d66dbeb21a30dd8a3e66bf7a73b66e05e1f6',
  'friendsofphp/php-cs-fixer' => 'v2.16.1@c8afb599858876e95e8ebfcd97812d383fa23f02',
  'jean85/pretty-package-versions' => '1.2@75c7effcf3f77501d0e0caa75111aff4daa0dd48',
  'myclabs/deep-copy' => '1.9.4@579bb7356d91f9456ccd505f24ca8b667966a0a7',
  'nette/finder' => 'v2.5.2@4ad2c298eb8c687dd0e74ae84206a4186eeaed50',
  'nette/robot-loader' => 'v3.2.1@d2a100e1f5cab390c78bc88709abbc91249c3993',
  'nette/utils' => 'v3.1.0@d6cd63d77dd9a85c3a2fae707e1255e44c2bc182',
  'nunomaduro/pest' => 'v0.1.0@d5756c202d821000d7ca5fa11a65484932f95755',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'php-cs-fixer/diff' => 'v1.3.0@78bb099e9c16361126c86ce82ec4405ebab8e756',
  'phpdocumentor/reflection-common' => '2.0.0@63a995caa1ca9e5590304cd845c15ad6d482a62a',
  'phpdocumentor/reflection-docblock' => '4.3.4@da3fd972d6bafd628114f7e7e036f45944b62e9c',
  'phpdocumentor/type-resolver' => '1.0.1@2e32a6d48972b2c1976ed5d8967145b6cec4a4a9',
  'phpspec/prophecy' => '1.10.1@cbe1df668b3fe136bcc909126a0f529a78d4cbbc',
  'phpstan/phpdoc-parser' => '0.4.2@a6d13524641bb780efc821d9e0a1e1bfb23cbd0e',
  'phpunit/php-code-coverage' => '7.0.10@f1884187926fbb755a9aaf0b3836ad3165b478bf',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.1.1@995192df77f63a59e47f025390d2d1fdf8f425ff',
  'phpunit/phpunit' => '8.5.1@7870c78da3c5e4883eaef36ae47853ebb3cb86f2',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/log' => '1.1.2@446d54b4cb6bf489fc9d75f55843658e6f25d801',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.3@464c90d7bdf5ad4e8a6aea15c091fec0603d4368',
  'sebastian/exporter' => '3.1.2@68609e1261d215ea5b21b7987539cbfbe156ec3e',
  'sebastian/global-state' => '3.0.0@edf8a461cf1d4005f19fb0b6b8b95a9f7fa0adc4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/type' => '1.1.3@3aaaa15fa71d27650d62a948be022fe3b48541a3',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'slevomat/coding-standard' => '6.0.5@eaa0c35c6b88d146e7dfd3580c4d5fa9c49c7a23',
  'squizlabs/php_codesniffer' => '3.5.3@557a1fc7ac702c66b0bbfe16ab3d55839ef724cb',
  'symfony/cache' => 'v5.0.2@6e8d978878ae5de705ec9fabbb6011cc18776bc9',
  'symfony/cache-contracts' => 'v2.0.1@23ed8bfc1a4115feca942cb5f1aacdf3dcdf3c16',
  'symfony/config' => 'v5.0.2@7f930484966350906185ba0a604728f7898b7ba0',
  'symfony/console' => 'v5.0.2@fe6e3cd889ca64172d7a742a2eb058541404ef47',
  'symfony/dependency-injection' => 'v5.0.2@f9dbfbf487d08f60b1c83220edcd16559d1e40a2',
  'symfony/error-handler' => 'v5.0.2@460863313bd3212d7c38e1b40602cbcfeeeea4a5',
  'symfony/event-dispatcher' => 'v5.0.2@7b738a51645e10f864cc25c24d232fb03f37b475',
  'symfony/event-dispatcher-contracts' => 'v2.0.1@af23c2584d4577d54661c434446fb8fbed6025dd',
  'symfony/filesystem' => 'v5.0.2@1d71f670bc5a07b9ccc97dc44f932177a322d4e6',
  'symfony/finder' => 'v5.0.2@17874dd8ab9a19422028ad56172fb294287a701b',
  'symfony/http-foundation' => 'v5.0.2@5dd7f6be6e62d86ba6f3154cf40e78936367978b',
  'symfony/http-kernel' => 'v5.0.2@00ce30602f3f690e66a63c327743d7b26c723b2e',
  'symfony/mime' => 'v5.0.2@0e6a4ced216e49d457eddcefb61132173a876d79',
  'symfony/options-resolver' => 'v5.0.2@1ad3d0ffc00cc1990e5c9c7bb6b81578ec3f5f68',
  'symfony/polyfill-ctype' => 'v1.13.1@f8f0b461be3385e56d6de3dbb5a0df24c0c275e3',
  'symfony/polyfill-intl-idn' => 'v1.13.1@6f9c239e61e1b0c9229a28ff89a812dc449c3d46',
  'symfony/polyfill-mbstring' => 'v1.13.1@7b4aab9743c30be783b73de055d24a39cf4b954f',
  'symfony/polyfill-php70' => 'v1.13.1@af23c7bb26a73b850840823662dda371484926c4',
  'symfony/polyfill-php72' => 'v1.13.1@66fea50f6cb37a35eea048d75a7d99a45b586038',
  'symfony/polyfill-php73' => 'v1.13.1@4b0e2222c55a25b4541305a053013d5647d3a25f',
  'symfony/process' => 'v5.0.2@ea2dc31b59d63abd9bc2356ac72eb7b3f3469f0e',
  'symfony/service-contracts' => 'v2.0.1@144c5e51266b281231e947b51223ba14acf1a749',
  'symfony/stopwatch' => 'v5.0.2@d410282956706e0b08681a5527447a8e6b6f421e',
  'symfony/var-dumper' => 'v5.0.2@d7bc61d5d335fa9b1b91e14bb16861e8ca50f53a',
  'symfony/var-exporter' => 'v5.0.2@1b9653e68d5b701bf6d9c91bdd3660078c9f4f28',
  'symfony/yaml' => 'v5.0.2@847661e77afa48d99ecfa508e8b60f0b029a19c0',
  'symplify/coding-standard' => 'v7.1.3@864af829cd9007f3c11d778485082ef0056a1486',
  'symplify/easy-coding-standard' => 'v7.1.3@d9f483bb42f9c8c169bedd67b5a57663d163163a',
  'symplify/package-builder' => 'v7.1.3@6d328c576472bbbb54f8fa50d127cf627e1680d5',
  'symplify/set-config-resolver' => 'v7.1.3@bf63e985dcf88d7651026d062edd314280715da9',
  'symplify/smart-file-system' => 'v7.1.3@aec493bf2d935cd71cec68dbcc299e415ecc2c20',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'webmozart/assert' => '1.6.0@573381c0a64f155a0d9a23f4b0c797194805b925',
  'bobel/pyramid' => 'dev-master@5a146bee1accda0d2f576635c2ab1b503bf96982',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}

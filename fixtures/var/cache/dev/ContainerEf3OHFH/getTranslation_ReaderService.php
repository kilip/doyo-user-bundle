<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'translation.reader' shared service.

include_once $this->targetDirs[4].'/vendor/symfony/translation/Reader/TranslationReaderInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/translation/Reader/TranslationReader.php';
include_once $this->targetDirs[4].'/vendor/symfony/translation/Loader/LoaderInterface.php';
include_once $this->targetDirs[4].'/vendor/symfony/translation/Loader/ArrayLoader.php';
include_once $this->targetDirs[4].'/vendor/symfony/translation/Loader/FileLoader.php';
include_once $this->targetDirs[4].'/vendor/symfony/translation/Loader/PhpFileLoader.php';
include_once $this->targetDirs[4].'/vendor/symfony/translation/Loader/YamlFileLoader.php';
include_once $this->targetDirs[4].'/vendor/symfony/translation/Loader/XliffFileLoader.php';
include_once $this->targetDirs[4].'/vendor/symfony/translation/Loader/PoFileLoader.php';
include_once $this->targetDirs[4].'/vendor/symfony/translation/Loader/MoFileLoader.php';
include_once $this->targetDirs[4].'/vendor/symfony/translation/Loader/QtFileLoader.php';
include_once $this->targetDirs[4].'/vendor/symfony/translation/Loader/CsvFileLoader.php';
include_once $this->targetDirs[4].'/vendor/symfony/translation/Loader/IcuResFileLoader.php';
include_once $this->targetDirs[4].'/vendor/symfony/translation/Loader/IcuDatFileLoader.php';
include_once $this->targetDirs[4].'/vendor/symfony/translation/Loader/IniFileLoader.php';
include_once $this->targetDirs[4].'/vendor/symfony/translation/Loader/JsonFileLoader.php';

$this->privates['translation.reader'] = $instance = new \Symfony\Component\Translation\Reader\TranslationReader();

$a = ($this->privates['translation.loader.yml'] ?? ($this->privates['translation.loader.yml'] = new \Symfony\Component\Translation\Loader\YamlFileLoader()));
$b = ($this->privates['translation.loader.xliff'] ?? ($this->privates['translation.loader.xliff'] = new \Symfony\Component\Translation\Loader\XliffFileLoader()));

$instance->addLoader('php', ($this->privates['translation.loader.php'] ?? ($this->privates['translation.loader.php'] = new \Symfony\Component\Translation\Loader\PhpFileLoader())));
$instance->addLoader('yaml', $a);
$instance->addLoader('yml', $a);
$instance->addLoader('xlf', $b);
$instance->addLoader('xliff', $b);
$instance->addLoader('po', ($this->privates['translation.loader.po'] ?? ($this->privates['translation.loader.po'] = new \Symfony\Component\Translation\Loader\PoFileLoader())));
$instance->addLoader('mo', ($this->privates['translation.loader.mo'] ?? ($this->privates['translation.loader.mo'] = new \Symfony\Component\Translation\Loader\MoFileLoader())));
$instance->addLoader('ts', ($this->privates['translation.loader.qt'] ?? ($this->privates['translation.loader.qt'] = new \Symfony\Component\Translation\Loader\QtFileLoader())));
$instance->addLoader('csv', ($this->privates['translation.loader.csv'] ?? ($this->privates['translation.loader.csv'] = new \Symfony\Component\Translation\Loader\CsvFileLoader())));
$instance->addLoader('res', ($this->privates['translation.loader.res'] ?? ($this->privates['translation.loader.res'] = new \Symfony\Component\Translation\Loader\IcuResFileLoader())));
$instance->addLoader('dat', ($this->privates['translation.loader.dat'] ?? ($this->privates['translation.loader.dat'] = new \Symfony\Component\Translation\Loader\IcuDatFileLoader())));
$instance->addLoader('ini', ($this->privates['translation.loader.ini'] ?? ($this->privates['translation.loader.ini'] = new \Symfony\Component\Translation\Loader\IniFileLoader())));
$instance->addLoader('json', ($this->privates['translation.loader.json'] ?? ($this->privates['translation.loader.json'] = new \Symfony\Component\Translation\Loader\JsonFileLoader())));

return $instance;

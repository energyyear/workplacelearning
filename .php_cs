<?php

$finder = PhpCsFixer\Finder::create()
    ->exclude('./resources')
    ->exclude('./storage')
    ->exclude('./vendor')
    ->exclude('./node_modules')
    ->in(__DIR__)
;

return PhpCsFixer\Config::create()
    ->setRules([
        '@PSR2' => true,
        '@Symfony' => true,
        'fully_qualified_strict_types' => true,
        'no_superfluous_phpdoc_tags' => true,
        'no_useless_else' => true,
        'yoda_style' => false
    ])
    ->setFinder($finder)
;
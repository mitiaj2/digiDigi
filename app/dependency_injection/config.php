<?php

$container->setParameter('generator.length', 7);
$container->register('generator', 'Project\Service\String\Generator\Generator')
    ->addArgument('%generator.length%');

$container->register('converter', 'Project\Service\String\Converter\Converter');

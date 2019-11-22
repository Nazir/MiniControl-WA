<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Sensio\Bundle\FrameworkExtraBundle\SensioFrameworkExtraBundle::class => ['all' => true],
    Doctrine\Bundle\DoctrineBundle\DoctrineBundle::class => ['all' => true],
    Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle::class => ['all' => true],
    Symfony\Bundle\SecurityBundle\SecurityBundle::class => ['all' => true],
    Symfony\Bundle\SwiftmailerBundle\SwiftmailerBundle::class => ['all' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Symfony\Bundle\WebProfilerBundle\WebProfilerBundle::class => ['dev' => true, 'test' => true],
    Symfony\Bundle\MonologBundle\MonologBundle::class => ['all' => true],
    Symfony\Bundle\DebugBundle\DebugBundle::class => ['dev' => true, 'test' => true],
    Symfony\Bundle\MakerBundle\MakerBundle::class => ['dev' => true],
    Mini\Core\CommonBundle\CommonBundle::class => ['all' => true],
    Mini\Core\SystemBundle\SystemBundle::class => ['all' => true],
    Mini\Core\LocationBundle\LocationBundle::class => ['all' => true],
    Mini\Core\ReferenceBundle\ReferenceBundle::class => ['all' => true],
    Mini\Core\UserBundle\UserBundle::class => ['all' => true],
    Mini\Core\ControlBundle\ControlBundle::class => ['all' => true],
    Mini\Core\ContentBundle\ContentBundle::class => ['all' => true],
];

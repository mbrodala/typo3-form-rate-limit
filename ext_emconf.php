<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'Form Rate Limit',
    'description' => 'TYPO3 form finisher for rate limiting when sending a form',
    'category' => 'fe',
    'author' => 'Chris Müller',
    'author_email' => 'typo3@krue.ml',
    'state' => 'stable',
    'version' => '1.0.0-dev',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.3-11.5.99',
            'form' => '11.5.3-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
    'autoload' => [
        'psr-4' => ['Brotkrueml\\FormRateLimit\\' => 'Classes']
    ],
];

<?php
use Cake\Core\Configure;

Configure::write('Theme', [
    'title' => 'Gentelella',
    'logo' => [
        'mini' => '<b>G</b>T',
        'large' => '<b>Gentelella</b>Theme'
    ],
    'login' => [
        'show_remember' => true,
        'show_register' => true,
        'show_social' => true
    ]
]);


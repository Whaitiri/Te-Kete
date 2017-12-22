<?php

return [
    'role_structure' => [
        'superadministrator' => [
            'users' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u',
            'posts' => 'c,r,u,d,p',
            'dashboard' => 'r',
            'styles' => 'u',
            'contact' => 'r'
        ],
        'administrator' => [
            'users' => 'c,r,u,d',
            'posts' => 'c,r,u,d,p',
            'dashboard' => 'r',
            'profile' => 'r,u',
            'styles' => 'u',
            'contact' => 'r'
        ],
        'editor' => [
            'posts' => 'c,r,u,p',
            'profile' => 'r,u'
        ],
        'author' => [
            'posts' => 'c,r,u',
            'profile' => 'r,u'
        ],
        'contributor' => [
            'posts' => 'r,u',
            'profile' => 'r,u'
        ],
        'member' => [
            'posts' => 'r',
            'profile' => 'r,u'
        ],
        // 'user' => [
        //     'profile' => 'r,u'
        // ],
        // 'user' => [
        //     'profile' => 'r,u'
        // ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete',
        'p' => 'publish'
    ]
];

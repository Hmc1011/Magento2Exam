<?php
return [
    'backend' => [
        'frontName' => 'admin_1bxywf'
    ],
    'remote_storage' => [
        'driver' => 'file'
    ],
    'queue' => [
        'consumers_wait_for_messages' => 1
    ],
    'crypt' => [
        'key' => 'd1774798c5342452ce3beb80d7504719'
    ],
    'db' => [
        'table_prefix' => '',
        'connection' => [
            'default' => [
                'host' => 'localhost',
                'dbname' => 'magento2',
                'username' => 'magento2',
                'password' => '1',
                'model' => 'mysql4',
                'engine' => 'innodb',
                'initStatements' => 'SET NAMES utf8;',
                'active' => '1',
                'driver_options' => [
                    1014 => false
                ]
            ]
        ]
    ],
    'resource' => [
        'default_setup' => [
            'connection' => 'default'
        ]
    ],
    'x-frame-options' => 'SAMEORIGIN',
    'MAGE_MODE' => 'developer',
    'session' =>array(
'save' => 'memcached',
'save_path' => '127.0.0.1:11211?persistent=1&weight=2&timeout=10&retry_interval=10',
)
    
    ,
    'cache' => array (
'frontend' => array (
'default' => array (
'backend' => 'Cm_Cache_Backend_Redis',
'backend_options' => array (
'server' => '127.0.0.1',
'port' => '6379',
'persistent' => '',
'database' => '0',
'force_standalone' => '0',
'connect_retries' => '1',
'read_timeout' => '10',
'automatic_cleaning_factor' => '0',
'compress_data' => '1',
'compress_tags' => '1',
'compress_threshold' => '20480',
'compression_lib' => 'gzip',
),
),
'page_cache' => array (
'backend' => 'Cm_Cache_Backend_Redis',
'backend_options' => array (
'server' => '127.0.0.1',
'port' => '6379',
'persistent' => '',
'database' => '1',
'force_standalone' => '0',
'connect_retries' => '1',
'read_timeout' => '10',
'automatic_cleaning_factor' => '0',
'compress_data' => '0',
'compress_tags' => '1',
'compress_threshold' => '20480',
'compression_lib' => 'gzip',
),
),
),
)
    ,
    'lock' => [
        'provider' => 'db',
        'config' => [
            'prefix' => null
        ]
    ],
    'directories' => [
        'document_root_is_pub' => true
    ],
    'cache_types' => [
        'config' => 1,
        'layout' => 1,
        'block_html' => 1,
        'collections' => 1,
        'reflection' => 1,
        'db_ddl' => 1,
        'compiled_config' => 1,
        'eav' => 1,
        'customer_notification' => 1,
        'config_integration' => 1,
        'config_integration_api' => 1,
        'full_page' => 0,
        'config_webservice' => 1,
        'translate' => 1,
        'vertex' => 1
    ],
    'downloadable_domains' => [
        'localhost'
    ],
    'install' => [
        'date' => 'Mon, 22 Mar 2021 23:14:55 +0000'
    ]
];

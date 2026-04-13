<?php return array(
    'root' => array(
        'name' => '__root__',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => null,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => null,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'phpoffice/math' => array(
            'pretty_version' => '0.3.0',
            'version' => '0.3.0.0',
            'reference' => 'fc31c8f57a7a81f962cbf389fd89f4d9d06fc99a',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpoffice/math',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'phpoffice/phpword' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '0ab0b4940bc52c7183e82ab2fd55324607037a73',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpoffice/phpword',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
    ),
);

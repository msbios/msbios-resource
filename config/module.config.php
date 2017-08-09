<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Resource;

return [

    'doctrine' => [
        'connection' => [
            'orm_default' => [
                'driverClass' => \Doctrine\DBAL\Driver\PDOMySql\Driver::class,
                'params' => [
                ]
            ],
        ],
        'driver' => [
            // defines an annotation driver with two paths, and names it `my_annotation_driver`
            Module::class => [
                'class' => \Doctrine\ORM\Mapping\Driver\AnnotationDriver::class,
                'cache' => 'array',
                'paths' => [
                    __DIR__ . '/../src/Entity'
                ],
            ],
            // Module::class => [
            //     'class' => \Doctrine\ORM\Mapping\Driver\YamlDriver::class,
            //     'cache' => 'array',
            //     'paths' => [
            //         __DIR__ . '/../src/Yml'
            //     ],
            // ],

            // default metadata driver, aggregates all other drivers into a single one.
            // Override `orm_default` only if you know what you're doing
            'orm_default' => [
                'drivers' => [
                    Entity::class => Module::class
                ]
            ]
        ]
    ],

    'service_manager' => [
        'invokables' => [
            Listener\SessionListener::class
        ],
        'factories' => [
            Module::class => Factory\ModuleFactory::class,
            'doctrine.cache.sessioncache' => Factory\DoctrineCacheFactory::class
        ]
    ],

    'form_elements' => [
        'factories' => [
            Form\LayoutForm::class => Factory\LazyFormFactory::class,
            Form\ModuleForm::class => Factory\LazyFormFactory::class,
            Form\ThemeForm::class => Factory\LazyFormFactory::class
        ]
    ],

    'input_filters' => [
        'invokables' => [
        ],
        'factories' => [
            InputFilter\ModuleInputFilter::class => Factory\LazyInputFilterFactory::class,
            InputFilter\TemplateInputFilter::class => Factory\LazyInputFilterFactory::class,
        ]
    ],

    'hydrators' => [
        'factories' => [
        ],
    ],

    Module::class => [
        'listeners' => [
            [
                'listener' => Listener\SessionListener::class,
                'method' => 'onDispatch',
                'event' => \Zend\Mvc\MvcEvent::EVENT_DISPATCH,
                'priority' => -100500,
            ],
        ],
        'forms' => [ // forms
            Form\LayoutForm::class => [
                'input_filter_class' => InputFilter\TemplateInputFilter::class,
                'hydrator_class' => \DoctrineModule\Stdlib\Hydrator\DoctrineObject::class,
                'resource_class' => Entity\Layout::class
            ],
            Form\ModuleForm::class => [
                'input_filter_class' => InputFilter\ModuleInputFilter::class,
                'hydrator_class' => \DoctrineModule\Stdlib\Hydrator\DoctrineObject::class,
                'resource_class' => Entity\Module::class
            ],
            Form\ThemeForm::class => [
                'input_filter_class' => InputFilter\TemplateInputFilter::class,
                'hydrator_class' => \DoctrineModule\Stdlib\Hydrator\DoctrineObject::class,
                'resource_class' => Entity\Theme::class
            ]
        ],
        'input_filters' => [
            InputFilter\ModuleInputFilter::class => [
                [
                    'name' => 'title',
                    'required' => true
                ], [
                    'name' => 'module',
                    'required' => true
                ],
            ],
            InputFilter\TemplateInputFilter::class => [
                [
                    'name' => 'title',
                    'required' => true
                ], [
                    'name' => 'template',
                    'required' => true
                ],
            ],
        ],
        'session' => [

            /**
             * Please note that before you enable the zDbSession make sure to import the schema first
             * into your database or it will cause your application to die with a fatal error.
             * For more information about this please consult the readme file.
             */
            'enabled' => false,

            /**
             * Below is the standard configuration as per Zend Session Config, consult
             * the ZF2 documentation (haha) or just post on stack overflow on the settings details.
             */
            'options' => [
                'cache_expire' => 86400,
                // 'cookie_domain' => 'mydomain.com',
                // 'name' => 'mydomain',
                'cookie_lifetime' => 1800,
                'gc_maxlifetime' => 1800,
                'cookie_path' => '/',
                'cookie_secure' => true,
                'remember_me_seconds' => 3600,
                'use_cookies' => true,
            ]
        ]
    ]
];

<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Resource;

use MSBios\Factory\ModuleFactory;
use Zend\ServiceManager\Factory\InvokableFactory;

return [

    'service_manager' => [
        'factories' => [
            Module::class =>
                ModuleFactory::class
        ]
    ],

    'form_elements' => [
        'factories' => [
            Form\LayoutForm::class =>
                InvokableFactory::class,
            Form\ModuleForm::class =>
                InvokableFactory::class,
            Form\PageTypeForm::class =>
                InvokableFactory::class,
            Form\RouteForm::class =>
                InvokableFactory::class,
            Form\ThemeForm::class =>
                InvokableFactory::class,
        ]
    ],

    'input_filters' => [
        'factories' => [
            InputFilter\ModuleInputFilter::class =>
                InvokableFactory::class,
            InputFilter\TemplateInputFilter::class =>
                InvokableFactory::class,
        ],
        'aliases' => [
            Form\LayoutForm::class =>
                InputFilter\TemplateInputFilter::class,
            Form\ModuleForm::class =>
                InputFilter\ModuleInputFilter::class,
            Form\ThemeForm::class =>
                InputFilter\TemplateInputFilter::class,
        ]
    ],

    'hydrators' => [
        'factories' => [
        ],
    ],

    'table_manager' => [
        'factories' => [
            // Tables
            Table\LayoutTableGateway::class =>
                Factory\LayoutTableGatewayFactory::class
        ]
    ],

    Module::class => [
        // Some Module Configuration
    ]
];

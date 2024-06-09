<?php
declare(strict_types = 1);

use NatOkpe\Wp\Plugin\TranquilSetup\Engine;

return [
    'event_location' => [
        'title'         => __('Name', 'natokpe'),
        'object_types'  => ['term'], // Tells CMB2 to use term_meta vs post_meta
        'taxonomies'       => ['event-location'],
        'context'       => 'normal', // normal side advanced
        'priority'      => 'high', // high core default low
        'show_names'    => true,
        'closed'        => false,
        // 'new_term_section' => true, // Will display in the "Add New Category" section 

        'box-fields' => [
            'access_type' => [
                'name'       => __('Location Access', 'natokpe'),
                // 'desc'       => __('', 'natokpe'),
                'type'       => 'radio',
                'options' => [
                    'online' => 'Online',
                    'on-premise' => 'On-premise',
                ],
                'attributes'       => [
                    'required' => 'required',
                ],
            ],

            'nbsp__' => [
                'name'       => __('&nbsp', 'natokpe'),
                // 'desc'       => __('e.g. ', 'natokpe'),
                'type'       => 'title',
                'on_front' => false,
            ],

            'addr_title' => [
                'name'       => __('Address', 'natokpe'),
                // 'desc'       => __('e.g. ', 'natokpe'),
                'type'       => 'title',
                'on_front' => false,
            ],

            'addr_line_1' => [
                'name'       => __('Address Line 1', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'text',
                'attributes'       => [
                    'style'    => 'width: 100%;',
                ],
            ],

            'addr_line_2' => [
                'name'       => __('Address Line 2', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'text',
                'attributes'       => [
                    'style'    => 'width: 100%;',
                ],
            ],

            'addr_city' => [
                'name'       => __('City', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'text',
                'attributes'       => [
                    'style'    => 'width: 100%;',
                ],
            ],

            'addr_region' => [
                'name'       => __('State / Region', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'text',
                'attributes'       => [
                    'style'    => 'width: 100%;',
                ],
            ],

            'addr_country' => [
                'name'       => __('Country', 'natokpe'),
                'desc'       => __(''),
                'type'       => 'select',
                'show_option_none' => false,
                'options' => require(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'country_list.php'),
            ],

            'url' => [
                'name'       => __('URL', 'natokpe'),
                // 'desc'       => __('e.g. ', 'natokpe'),
                'type'       => 'text_url',
                'attributes'  => [
                    'style'    => 'width: 100%;',
                ],
            ],

        ],
    ],

];

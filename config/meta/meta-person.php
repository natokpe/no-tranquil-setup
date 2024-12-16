<?php
declare(strict_types = 1);

use NatOkpe\Wp\Plugin\TranquilSetup\Engine;

return [
    'person_name' => [
        'title'         => __('Name', 'natokpe'),
        'object_types'  => ['person'],
        'context'       => 'normal', // normal side advanced
        'priority'      => 'high', // high core default low
        'show_names'    => true,
        'closed'        => false,

        'box-fields' => [
            'name' => [
                'name'       => __('Full Name', 'natokpe'),
                'desc'       => __('e.g. Nat Okpe', 'natokpe'),
                'type'       => 'text',
                'attributes'       => [
                    'required' => 'required',
                    'style'    => 'width: 100%;',
                ],
            ],

            'name_prefix' => [
                'name'       => __('Prefix', 'natokpe'),
                'desc'       => __('e.g. Mr., Mrs., Lt., etc.', 'natokpe'),
                'type'       => 'text',
                'attributes'  => [
                    'style'    => 'width: 100%;',
                ],
            ],

            'name_suffix' => [
                'name'       => __('Suffix', 'natokpe'),
                'desc'       => __('e.g. Esq., JP, GCON, etc.', 'natokpe'),
                'type'       => 'text',
                'attributes'  => [
                    'style'    => 'width: 100%;',
                ],
            ],
        ],
    ],


    'person_addr' => [
        'title'         => __('Address', 'natokpe'),
        'object_types'  => ['person'],
        'context'       => 'normal', // normal side advanced
        'priority'      => 'default', // high core default low
        'show_names'    => true,
        'closed'        => true,

        'box-fields' => [
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
                'show_option_none' => true,
                'options' => require(dirname(__DIR__) . DIRECTORY_SEPARATOR . 'country_list.php'),
                'attributes'  => [
                    'style'    => 'width: 100%;',
                ],
            ],
        ],
    ],

    'person_phone' => [
        'title'         => __('Phone and Email', 'natokpe'),
        'object_types'  => ['person'],
        'context'       => 'normal', // normal side advanced
        'priority'      => 'default', // high core default low
        'show_names'    => true,
        'closed'        => false,

        'box-fields' => [
            'email' => [
                'name'       => __('Email Address', 'natokpe'),
                'desc'       => __('e.g. me@nat.com.ng', 'natokpe'),
                'type'       => 'text_email',
                'attributes'       => [
                    'style'    => 'width: 100%;',
                ],
            ],

            'phone_line_1' => [
                'name'       => __('Phone Line 1', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'text',
                'attributes'  => [
                    'style'    => 'width: 100%;',
                    'type' => 'phone',
                ],
            ],

            'phone_line_2' => [
                'name'       => __('Phone Line 2', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'text',
                'attributes'  => [
                    'style'    => 'width: 100%;',
                    'type' => 'phone',
                ],
            ],

        ],
    ],

    'person_social' => [
        'title'         => __('Social Media', 'natokpe'),
        'object_types'  => ['person'],
        'context'       => 'normal', // normal side advanced
        'priority'      => 'default', // high core default low
        'show_names'    => true,
        'closed'        => true,

        'box-fields' => [
            'social_fb' => [
                'name'       => __('Facebook', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'text',
                'attributes'       => [
                    'style'    => 'width: 100%;',
                ],
            ],

            'social_x' => [
                'name'       => __('X', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'text',
                'attributes'       => [
                    'style'    => 'width: 100%;',
                ],
            ],

            'social_ig' => [
                'name'       => __('Instagram', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'text',
                'attributes'       => [
                    'style'    => 'width: 100%;',
                ],
            ],

            'social_in' => [
                'name'       => __('LinkedIn', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'text',
                'attributes'       => [
                    'style'    => 'width: 100%;',
                ],
            ],

            'social_wa' => [
                'name'       => __('WhatsApp', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'text',
                'attributes'       => [
                    'style'    => 'width: 100%;',
                ],
            ],

            'social_tg' => [
                'name'       => __('Telegram', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'text',
                'attributes'       => [
                    'style'    => 'width: 100%;',
                ],
            ],
        ],
    ],
    
    'person_more' => [
        'title'         => __('Additional Info', 'natokpe'),
        'object_types'  => ['person'],
        'context'       => 'normal', // normal side advanced
        'priority'      => 'default', // high core default low
        'show_names'    => true,
        'closed'        => true,

        'box-fields' => [
            'gender' => [
                'name'       => __('Gender', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'select',
                'show_option_none' => true,
                'options' => [
                    'male' => 'Male',
                    'female' => 'Female',
                    'non_binary' => 'Non-binary',
                ],
                'attributes'       => [
                    'style'    => 'width: 100%;',
                ],
            ],

            'marital_status' => [
                'name'       => __('Marital Status', 'natokpe'),
                'desc'       => __(''),
                'type'       => 'select',
                'show_option_none' => true,
                'options' => [
                    'single' => 'Single',
                    'married' => 'Married',
                    'divorced' => 'Divorced',
                ],
                'attributes'  => [
                    'style'    => 'width: 100%;',
                ],
            ],

            'dob' => [
                'name'       => __('Date of Birth', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'text_date',
                'attributes'  => [
                    'style'    => 'width: 100%;',
                ],
            ],

            'bio' => [
                'name'       => __('Bio', 'natokpe'),
                'desc'       => __('', 'natokpe'),
                'type'       => 'textarea',
                'attributes'  => [
                    'style'    => 'width: 100%;',
                ],
            ],

            'website' => [
                'name'       => __('Website', 'natokpe'),
                'desc'       => __('e.g. https://nat.com.ng', 'natokpe'),
                'type'       => 'text_url',
                'attributes'       => [
                    'style'    => 'width: 100%;',
                ],
            ],
        ],
    ],
    
];

<?php
declare(strict_types = 1);

return [
    'event_schedule' => [
        'title'         => __('Event Schedule', 'natokpe'),
        'object_types'  => ['event'],
        'context'       => 'normal', // normal side advanced
        'priority'      => 'default', // high core default low
        'show_names'    => true,
        'closed'        => true,

        'box-fields' => [
            'start_time' => [
                'name'       => __('Start Date/Time', 'natokpe'),
                'desc'       => __('When event begins.', 'natokpe'),
                'type'       => 'text_date',
                'attributes'       => [
                    'required' => 'required',
                    'style'    => 'width: 100%;',
                ],
            ],

            'end_time' => [
                'name'       => __('End Date/Time', 'natokpe'),
                'desc'       => __('When event ends.', 'natokpe'),
                'type'       => 'text_date',
                'attributes'       => [
                    'required' => 'required',
                    'style'    => 'width: 100%;',
                ],
            ],
        ],
    ],
];

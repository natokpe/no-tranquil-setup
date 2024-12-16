<?php
declare(strict_types = 1);

return [
    'event_schedule' => [
        'title'         => __('Schedule', 'natokpe'),
        'object_types'  => ['event'],
        'context'       => 'normal', // normal side advanced
        'priority'      => 'default', // high core default low
        'show_names'    => true,
        'closed'        => true,

        'box-fields' => [
            'event_date' => [
                'name'       => __('Event Date', 'natokpe'),
                'desc'       => __('Date for the event', 'natokpe'),
                'type'       => 'text_date',
                'date_format' => 'M j, Y',
                'attributes'       => [
                    'required' => 'required',
                    'style'    => 'width: 100%;',
                ],
            ],

            'start_time' => [
                'name'       => __('Start Date/Time', 'natokpe'),
                'desc'       => __('When event begins.', 'natokpe'),
                'type'       => 'text_time',
                'attributes'       => [
                    'required' => 'required',
                    'style'    => 'width: 100%;',
                ],
            ],

            'end_time' => [
                'name'       => __('End Time', 'natokpe'),
                'desc'       => __('When event ends.', 'natokpe'),
                'type'       => 'text_time',
                'attributes'       => [
                    'style'    => 'width: 100%;',
                ],
            ],
        ],
    ],
];

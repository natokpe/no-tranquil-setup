<?php
declare(strict_types = 1);

use NatOkpe\Wp\Plugin\TranquilSetup\Engine;

/* Config: Engine */
return [
    'show_admin_bar' => false,

    'admin_footer_text' => sprintf(
        'Need help? &mdash; '
        . '<a %4$s href="mailto:%1$s">Email</a> | '
        . '<a %4$s href="tel:%2$s">Call</a> | '
        . '<a %4$s href="https://api.whatsapp.com/send?phone=%3$s">WhatsApp</a>',
        esc_attr('me@nat.com.ng'),
        esc_attr('+234-703-929-0234'),
        esc_attr('2347039290234'),
        'target="_blank" rel="noopener noreferrer"'
    ),

    'update_footer' => sprintf(
        '<a %s href="%s">Create a website</a>',
        'target="_blank" rel="noopener noreferrer"',
        esc_attr('https://nat.com.ng')
    ),

    'upload_mimes' => function ($mimes) {
        return array_merge($mimes, [
            // Images
            'svg' => 'image/svg+xml',
            'svgz' => 'image/svg+xml',
            'ico' => 'image/x-icon',
            'cur' => 'image/x-icon',
            'avif' => 'image/avif',
            'gif' => 'image/gif',
            'webp' => 'image/webp',
            'tif' => 'image/tiff',
            'tiff' => 'image/tiff',

            // Audio
            'aac' => 'audio/aac',
            'wav' => 'audio/wav',
            'mp3' => 'audio/mpeg',

            // Video
            'avi' => 'video/x-msvideo',
            'webm' => 'video/webm',
            'mp4' => 'video/mp4',

            // Docs
            'pdf' => 'application/pdf',
            'csv' => 'text/csv',
            'doc' => 'application/msword',
            'txt' => 'text/plain',

            // Archive
            'zip' => 'application/zip',
        ]);
    },

    'query_vars' => [
    ],
];

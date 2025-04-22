<?php
declare(strict_types = 1);

use NatOkpe\Wp\Plugin\TranquilSetup\Engine;

$email_accounts  = [];
$email_templates = [];

$options = [
    'email' => [
        'title'                      => esc_html__('Email Settings', 'natokpe'),
        'option_key'                 => 'email-settings',
        'parent_slug'                => 'options-general.php',
        'capability'                 => 'manage_options',
        'position'                   => 100,
        // 'admin_menu_hook'         => 'network_admin_menu',
        // 'display_cb'              => false,
        'save_button'                => esc_html__('Save Changes', 'natokpe' ),
        // 'disable_settings_errors' => true,
        // 'message_cb'              => 'yourprefix_options_page_message_callback',
        'menu_title'                 => esc_html__( 'Email', 'natokpe' ),
        'autoload'                   => false,

        'page-sections' => [
            'allow_email' => [
                'name' => 'Enable / Disable Email',
                'desc' => 'Settings to allow or disallow email sending accross site. ',

                'fields' => [
                    'allow_email' => [
                        'name' => 'Enable Email',
                        'type' => 'checkbox',
                        'desc' => 'Check to allow sending emails from site.',
                    ],
                ],
            ],

            'email_smtp' => [
                'name' => 'SMTP Configuration',
                'desc' => 'Outgoing mail settings',

                'fields' => [
		            'email_con_type' => [
                        'name'       => __('Connection Type', 'natokpe'),
                        'desc'       => __('', 'natokpe'),
                        'type'       => 'select',
                        'options'    => ['smtp' => 'SMTP'],
                        'attributes' => [
		                    'required' => 'required',
		                ],
		            ],

		            'email_host' => [
		                'name' => __('Hostname', 'natokpe'),
		                'desc' => __('Hostname of the mail server. E.g mail.example.com', 'natokpe'),
		                'type' => 'text',
		                'attributes' => [
		                    'required' => 'required',
		                ],
		            ],

		            'email_port' => [
		                'name' => __('Port', 'natokpe'),
		                'desc' => __('Set the port number', 'natokpe'),
		                'type' => 'text',
		                'attributes' => [
		                    'type' => 'number',
		                    'min' => 1,
		                    'step' => 1,
		                    'required' => 'required',
		                ],
		            ],

		            'email_en_type' => [
		                'name' => __('Encryption Type', 'natokpe'),
		                'desc' => __('The encryption mechanism used by the mail server', 'natokpe'),
		                'type' => 'select',
		                'options' => [
			                'tls' => 'STARTTLS',
			                'ssl' => 'SMTPS',
			            ],
		            ],

		            'email_username' => [
		                'name' => __('Username', 'natokpe'),
		                'desc' => __('', 'natokpe'),
		                'type' => 'text',
		                'attributes' => [
		                    'required' => 'required',
		                ],
		            ],

		            'email_password' => [
		                'name' => __('Password', 'natokpe'),
		                'desc' => __('', 'natokpe'),
		                'type' => 'text',
		                'attributes' => [
		                    'type' => 'password',
		                ],
		            ],
		            
		            'email_require_auth' => [
		                'name' => __('Requires Authentication', 'natokpe'),
		                'desc' => __('Yes', 'natokpe'),
		                'type' => 'checkbox',
		                'default' => false,
		            ],

		            'email_sender_address' => [
		                'name' => __('Sender/From Address', 'natokpe'),
		                'desc' => __('', 'natokpe'),
		                'type' => 'text_email',
		                'attributes' => [
		                    'required' => 'required',
		                ],
		            ],

		            'email_sender_name' => [
		                'name' => __('Sender/From Name', 'natokpe'),
		                'desc' => __('', 'natokpe'),
		                'type' => 'text',
		                'attributes' => [
		                ],
		            ],
                ],
            ],
        ],
    ],
];

return $options;

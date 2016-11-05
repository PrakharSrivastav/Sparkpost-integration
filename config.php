<?php

$config['key']                 = '43b315128e32ee8662b980740cb99990a12b431c';
$config['template-create']     = [
    'name'    => 'Test Template',
    'content' => [
        "from"    => "hello@prakharsrivastav.com",
        "subject" => 'This is a test template',
        'html'    => '<b style="color=>blue">Check out these deals!</b>'
    ]
];
$config['template-create-new'] = [
    "id"          => "summer_sale",
    "name"        => "Summer Sale!",
    "published"   => true,
    "description" => "Template for a Summer Sale!",
    "options"     => [
        "open_tracking"  => false,
        "click_tracking" => true
    ],
    "content"     => [
        "from"     => [
            "email" => "hello@prakharsrivastav.com",
            "name"  => "Example Company Marketing"
        ],
        "subject"  => "Summer deals for ",
        "reply_to" => "Summer deals <hello@prakharsrivastav.com>",
        "text"     => "Check out these deals !",
        "html"     => "<b>Check out these deals !</b>",
        "headers"  => [
            "X-Customer-Campaign-ID" => "Summer2014"
        ]
    ]
];
$config['template-update']     = [
    "options" => [
        "open_tracking" => true
    ],
    "name"    => "A new name!",
    "content" => [
        "from"     => [
            "email" => "marketing@prakharsrivastav.com",
            "name"  => "Example Company Marketing"
        ],
        "subject"  => "Updated Summer deals for ",
        "reply_to" => "Summer deals <summer_deals@prakharsrivastav.com>",
        "text"     => "Updated=> Check out these deals !",
        "html"     => "<b>Updated=> Check out these deals !</b>"
    ]
];
$config['sendlist']            = [
    [
        'address'           =>
        [
            'name'  => 'Test',
            'email' => 'srivprakhar@live.com',
        ],
        'substitution_data' =>
        [
            'name'                   => 'Live',
            'saving_electricity_nok' => '12000',
            'saving_electricity'     => '12',
            'saving_mobile_nok'      => '12000',
            'saving_mobile'          => '12',
            'saving_lan_nok'         => '12000',
            'saving_lan'             => '12',
            'saving_total_nok'       => '12000',
            'saving_total'           => '12',
        ],
    ],
];

$config['new-list'] = [
    'id'          => 'new-list',
    'name'        => 'new-list',
    'description' => 'This is a new list',
    'recipients'  => [
        [
            'address'           =>
            [
                'name'  => 'Test Name 1',
                'email' => 'srivprakhar@live.com',
            ],
            'substitution_data' =>
            [
                'name'                   => 'Test Name 1',
                'saving_electricity_nok' => '12000',
                'saving_electricity'     => '12',
                'saving_mobile_nok'      => '12000',
                'saving_mobile'          => '12',
                'saving_lan_nok'         => '12000',
                'saving_lan'             => '12',
                'saving_total_nok'       => '12000',
                'saving_total'           => '12',
            ],
        ],
        [
            'address'           =>
            [
                'name'  => 'Test Name 2',
                'email' => 'srivprakhar@gmail.com',
            ],
            'substitution_data' =>
            [
                'name'                   => 'Test Name 2',
                'saving_electricity_nok' => '22000',
                'saving_electricity'     => '22',
                'saving_mobile_nok'      => '22000',
                'saving_mobile'          => '22',
                'saving_lan_nok'         => '22000',
                'saving_lan'             => '22',
                'saving_total_nok'       => '22000',
                'saving_total'           => '22',
            ],
        ]
    ]
];
$config['list']     = [
    "id"          => "test-list-2",
    "name"        => "graduate_students",
    "description" => "An email list of graduate students at UMBC",
    "attributes"  => [
        "internal_id"   => 112,
        "list_group_id" => 12321
    ],
    "recipients"  => [
        [
            "address"           => [
                "email" => "wilmaflin@yahoo.com",
                "name"  => "Wilma"
            ],
            "tags"              => [
                "greeting",
                "prehistoric",
                "fred",
                "flintstone"
            ],
            "metadata"          => [
                "age"   => "24",
                "place" => "Bedrock"
            ],
            "substitution_data" => [
                "favorite_color" => "SparkPost Orange",
                "job"            => "Software Engineer"
            ]
        ], [
            "address"           => [
                "email" => "wilmaflin@yahoo.com",
                "name"  => "Wilma"
            ],
            "tags"              => [
                "greeting",
                "prehistoric",
                "fred",
                "flintstone"
            ],
            "metadata"          => [
                "age"   => "24",
                "place" => "Bedrock"
            ],
            "substitution_data" => [
                "favorite_color" => "SparkPost Orange",
                "job"            => "Software Engineer"
            ]
        ], [
            "address"           => [
                "email" => "wilmaflin@yahoo.com",
                "name"  => "Wilma"
            ],
            "tags"              => [
                "greeting",
                "prehistoric",
                "fred",
                "flintstone"
            ],
            "metadata"          => [
                "age"   => "24",
                "place" => "Bedrock"
            ],
            "substitution_data" => [
                "favorite_color" => "SparkPost Orange",
                "job"            => "Software Engineer"
            ]
        ], [
            "address"           => [
                "email" => "wilmaflin@yahoo.com",
                "name"  => "Wilma"
            ],
            "tags"              => [
                "greeting",
                "prehistoric",
                "fred",
                "flintstone"
            ],
            "metadata"          => [
                "age"   => "24",
                "place" => "Bedrock"
            ],
            "substitution_data" => [
                "favorite_color" => "SparkPost Orange",
                "job"            => "Software Engineer"
            ]
        ], [
            "address"           => [
                "email" => "wilmaflin@yahoo.com",
                "name"  => "Wilma"
            ],
            "tags"              => [
                "greeting",
                "prehistoric",
                "fred",
                "flintstone"
            ],
            "metadata"          => [
                "age"   => "24",
                "place" => "Bedrock"
            ],
            "substitution_data" => [
                "favorite_color" => "SparkPost Orange",
                "job"            => "Software Engineer"
            ]
        ], [
            "address"           => [
                "email" => "wilmaflin@yahoo.com",
                "name"  => "Wilma"
            ],
            "tags"              => [
                "greeting",
                "prehistoric",
                "fred",
                "flintstone"
            ],
            "metadata"          => [
                "age"   => "24",
                "place" => "Bedrock"
            ],
            "substitution_data" => [
                "favorite_color" => "SparkPost Orange",
                "job"            => "Software Engineer"
            ]
        ], [
            "address"           => [
                "email" => "wilmaflin@yahoo.com",
                "name"  => "Wilma"
            ],
            "tags"              => [
                "greeting",
                "prehistoric",
                "fred",
                "flintstone"
            ],
            "metadata"          => [
                "age"   => "24",
                "place" => "Bedrock"
            ],
            "substitution_data" => [
                "favorite_color" => "SparkPost Orange",
                "job"            => "Software Engineer"
            ]
        ], [
            "address"           => [
                "email" => "wilmaflin@yahoo.com",
                "name"  => "Wilma"
            ],
            "tags"              => [
                "greeting",
                "prehistoric",
                "fred",
                "flintstone"
            ],
            "metadata"          => [
                "age"   => "24",
                "place" => "Bedrock"
            ],
            "substitution_data" => [
                "favorite_color" => "SparkPost Orange",
                "job"            => "Software Engineer"
            ]
        ], [
            "address"           => [
                "email" => "wilmaflin@yahoo.com",
                "name"  => "Wilma"
            ],
            "tags"              => [
                "greeting",
                "prehistoric",
                "fred",
                "flintstone"
            ],
            "metadata"          => [
                "age"   => "24",
                "place" => "Bedrock"
            ],
            "substitution_data" => [
                "favorite_color" => "SparkPost Orange",
                "job"            => "Software Engineer"
            ]
        ], [
            "address"           => [
                "email" => "wilmaflin@yahoo.com",
                "name"  => "Wilma"
            ],
            "tags"              => [
                "greeting",
                "prehistoric",
                "fred",
                "flintstone"
            ],
            "metadata"          => [
                "age"   => "24",
                "place" => "Bedrock"
            ],
            "substitution_data" => [
                "favorite_color" => "SparkPost Orange",
                "job"            => "Software Engineer"
            ]
        ]
    ],
];


return $config;

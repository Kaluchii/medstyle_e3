<?php

return [

    'all_site' => [
        'string' => ['copyright','inst','fb','phone','whatsapp']
    ],

    'slider' => [
        'groups' => [
            'slides' => [
                'image' => ['img'],
                'string' => ['slide_title','link','descr']
            ]
        ]
    ],

    'about' => [
        'text' => ['text'],
    ],

    'specialists_about' => [
        'text' => ['text'],
        'groups' => [
            'specialists' => [
                'image' => ['img'],
                'string' => ['spec_name','profession'],
                'text' => ['about'],
            ],
            'spec_sertificates' => [
                'image' => ['img'],
                'specialists' => ['superior']
            ]
        ]
    ],

    'services_block' => [
        'groups' => [
            'serv_category' => [
                'string' => ['cat_name'],
                'text' => ['descr_on_main'],
            ],
            'services' => [
                'image' => ['bg_img','img'],
                'string' => ['serv_name', 'discount_common', 'discount_in'],
                'text' => ['descr_1','descr_2','descr_3','right_side_1','right_side_2'],
                'serv_category' => ['superior']
            ],
            'serv_pokazania' =>[
                'string' => ['p_name'],
                'services' => ['superior']
            ],
            'serv_protivopokazania' =>[
                'string' => ['p_name'],
                'services' => ['superior']
            ],
            'serv_after_proc' =>[
                'string' => ['p_name'],
                'services' => ['superior']
            ],
            'serv_effect_up'=>[
                'string' => ['serv_name','link'],
                'services' => ['superior']
            ]
        ]
    ],

    'technologies_block' => [
        'text' => ['text'],
        'groups' => [
            'technologies' => [
                'image' => ['preview','img'],
                'string' => ['tech_name'],
                'text' => ['descr_1','descr_2','preview_descr','right_side_1','right_side_2']
            ],
            'tech_pokazania' =>[
                'string' => ['p_name'],
                'technologies' => ['superior']
            ],
            'tech_protivopokazania' =>[
                'string' => ['p_name'],
                'technologies' => ['superior']
            ],
            'tech_after_proc' =>[
                'string' => ['p_name'],
                'technologies' => ['superior']
            ],
            'tech_effect_up'=>[
                'string' => ['serv_name','link'],
                'technologies' => ['superior']
            ]
        ]
    ],

    'helpful_block' => [
        'groups' => [
            'helpful' => [
                'image' => ['preview','img'],
                'string' => ['tech_name'],
                'text' => ['descr_1','preview_descr','right_side_1']
            ],
            'hel_pokazania' =>[
                'string' => ['p_name'],
                'helpful' => ['superior']
            ],
            'hel_protivopokazania' =>[
                'string' => ['p_name'],
                'helpful' => ['superior']
            ],
            'hel_after_proc' =>[
                'string' => ['p_name'],
                'helpful' => ['superior']
            ],
            'hel_effect_up'=>[
                'string' => ['serv_name','link'],
                'helpful' => ['superior']
            ]
        ]
    ],

    'problems_block' => [
        'groups' => [
            'problems' => [
                'string' => ['problem_name']
            ]
        ]
    ],

    'questions_block' => [
        'groups' => [
            'questions' => [
                'text' => ['question_text','answer_text'],
                'string' => ['question_name'],
                'int' => ['spec_id','problem_id']
            ]
        ]
    ],

    'stocks_block'=>[
        'groups' =>[
            'stocks' => [
                'image'   => ['img'],
                'string'  => ['stock_name','link','discount'],
                'text'    => ['text']
            ]
        ]
    ],

    'videos_block' => [
        'text' => ['text'],
        'image'   => ['img'],
        'string'  => ['video_name','subtitle','video_link','service_link'],
        'groups' =>[
            'videos' => [
                'image'   => ['img'],
                'string'  => ['video_name','video_link','service_link']
            ]
        ]
    ],

    'contacts' =>[
        'text' => ['contacts','maps'],
        'image' => ['img']
    ],

    'testing_block' => [
        'string' => ['page_title'],
        'groups' =>[
            'age' => [
                'string' => ['age_name','text']
            ],
            'anket_item' => [
                'string' => ['question_text','question_name'],
                'age'    => ['superior']
            ],
            'recommend' => [
                'int'        => ['service_id'],
                'anket_item' => ['superior']
            ]
        ]
    ]

];

<?php

class LangModel {

    private $nav = [
        'home' => 'Beranda',
        'about' => 'Tentang',
        'profile' => 'Profile Perusahaan',
        'vision' => 'Visi Misi',
        'strategic' => 'Strategi Bisnis',
        'bod' => 'BOD',
        'business' => 'Bisnis Kami',
        'plantation' => 'Perkebunan',
        'mill' => 'Pabrik',
        'trading' => 'Trading',
        'lemongrass' => 'Serai Wangi',
        'fnb' => 'Food & Beverage',
        'investor' => 'Hubungan Investor',
        'sustainability' => 'Keberlanjutan',
        'policy' => 'Kebijakan',
        'certification' => 'Sertifikasi',
        'environment' => 'Lingkungan',
        'community' => 'Pengembangan Komunitas',
        'osh' => 'Keselamatan & Kesehatan Kerja',
        'information' => 'Informasi',
        'news' => 'Berita',
        'albumvideo' => 'Album Video',
        'albumphoto' => 'Album Foto',
        'carrer' => 'Karir',
        'contact' => 'Kontak',
    ];

    private $menu = [
        'home' => ['text' => 'Beranda','type'=>'detail',
                    'data' => [
                        '' => 'Versi 1',
                        'index2' => 'Versi 2',
                        'index3' => 'Versi 3'
                    ]
                ],
        'about' => ['text' => 'Tentang','type'=>'detail',
                    'data' => [
                        'profile' => 'Profil Perusahaan',
                        'vision' => 'Visi Misi',
                        'strategic' => 'Strategi Bisnis',
                        'bod' => 'Management',
                        'structureorg' => 'Struktur Organisasi',
                        'milestone' => 'Sejarah Penting']
                    ],
        'business' => ['text' => 'Bisnis Kami','type'=>'detail',
                       'data' => [
                           'plantation' => 'Perkebunan',
                           'mill' => 'Pabrik',
                           'trading' => 'Trading',
                        //    'lemongrass' => 'Serai Wangi',
                           'fnb' => 'Food & Beverage'],
                        ],
        'investor' => ['text' => 'Investor','type'=>'header'],
        'sustainability' => ['text' => 'Keberlanjutan','type'=>'detail',
                            'data' => [
                                'policy' => 'Kebijakan',
                                'certification' => 'Sertifikasi',
                                'environment' => 'Lingkungan',
                                // 'community' => 'Pengembangan Komunitas',
                                'community' => 'CSR',
                                // 'osh' => 'Keselamatan & Kesehatan Kerja'
                            ],
                        ],
        'info' => ['text' => 'Informasi','type'=>'detail',
                            'data' => [
                            'news' => 'Berita',
                            'video' => 'Album Video',
                            'gallery' => 'Gallery',
                            'career' => 'Karir'],
                        ],
        'info/contact' => ['text' => 'Kontak','type'=>'header'],
    ];

    private $menu3_id = [
        // 'home' => ['text' => 'Beranda','type'=>'detail',
        //             'data' => [
        //                 'index1_new' => 'Versi 1',
        //                 'index2_new' => 'Versi 2',
        //                 'index3_new' => 'Versi 3',
        //                 'index4_new' => 'Versi 4'
        //             ]
        //         ],
        'about' => ['text' => 'Tentang','type'=>'detail',
                    'data' => [
                        'profile' => 'Profil Perusahaan',
                        'vision' => 'Visi Misi',
                        'strategic' => 'Strategi Bisnis',
                        'bod' => 'Management',
                        'structureorg' => 'Struktur Organisasi',
                        'milestone' => 'Sejarah Penting']
                    ],
        'business' => ['text' => 'Bisnis Kami','type'=>'detail',
                       'data' => [
                           'plantation' => 'Perkebunan',
                           'mill' => 'Pabrik',
                           'trading' => 'Trading',
                           'agro' => 'Agronomy',
                           //' lemongrass' => 'Serai Wangi',
                           'fnb' => 'Makanan & Minuman',
                           'location-map' => 'Peta Lokasi'
                        ],
                    ],
        'investor' => ['text' => 'Investor','type'=>'header'],
        'sustainability' => ['text' => 'Keberlanjutan','type'=>'detail',
                            'data' => [
                                'policy' => 'Kebijakan',
                                'certification' => 'Standard & Sertifikasi',
                                'environment' => 'Lingkungan',
                                // 'community' => 'Pengembangan Komunitas',
                                'community' => 'CSR',
                                // 'osh' => 'Keselamatan & Kesehatan Kerja'
                            ],
                        ],
        'info' => ['text' => 'Informasi','type'=>'detail',
                            'data' => [
                            'news' => 'Berita & Event',
                            // 'video' => 'Album Video',
                            'gallery' => 'Galeri',
                            'career' => 'Karir'],
                        ],
        'info/contact' => ['text' => 'Kontak','type'=>'header'],
    ];

    private $menu3_en = [
        // 'home' => ['text' => 'Home','type'=>'detail',
        //             'data' => [
        //                 'index1_new' => 'Version 1',
        //                 'index2_new' => 'Version 2',
        //                 'index3_new' => 'Version 3',
        //                 'index4_new' => 'Version 4'
        //             ]
        //         ],
        'about' => ['text' => 'About','type'=>'detail',
                    'data' => [
                        'profile' => 'Company Profile',
                        'vision' => 'Vision Mision',
                        'strategic' => 'Strategic',
                        'bod' => 'Management',
                        'structureorg' => 'Structure Organization',
                        'milestone' => 'Milestone'
                        ]
                    ],
        'business' => ['text' => 'Our Business','type'=>'detail',
                       'data' => [
                           'plantation' => 'Plantation',
                           'mill' => 'Palm Mill Oil',
                           'trading' => 'Trading',
                           //'lemongrass' => 'Serai Wangi',
                           'agro' => 'Agronomy',
                           'fnb' => 'Food & Beverage',
                           'location-map' => 'Location Map'
                        ],
                    ],
        'investor' => ['text' => 'Investor Relation','type'=>'header'],
        'sustainability' => ['text' => 'Sustainability','type'=>'detail',
                            'data' => [
                                'policy' => 'Policy',
                                'certification' => 'Certification',
                                'environment' => 'Environment',
                                // 'community' => 'Pengembangan Komunitas',
                                'community' => 'CSG',
                                // 'osh' => 'Keselamatan & Kesehatan Kerja'
                            ],
                        ],
        'info' => ['text' => 'Information','type'=>'detail',
                            'data' => [
                                'news' => 'News & Event',
                                // 'video' => 'Album Video',
                                'gallery' => 'Gallery',
                                'career' => 'Career'
                            ],
                        ],
        'info/contact' => ['text' => 'Contact Us','type'=>'header'],
    ];

    // public function getNav() {
    //     return $this->nav;
    // }

    public function getMenu() {
        return $this->menu;
    }

    public function getMenu_versi3()
    {
        // if($_SESSION['lang']=='id') $menu = $this->menu3_id;
        return $_SESSION['lang'] == 'id' ? $this->menu3_id : $this->menu3_en;
    }
}
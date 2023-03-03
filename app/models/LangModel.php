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
                            'community' => 'Pengembangan Komunitas',
                            // 'community' => 'CSR',
                            'osh' => 'Keselamatan & Kesehatan Kerja'],
                        ],
        'info' => ['text' => 'Informasi','type'=>'detail',
                            'data' => [
                            'news' => 'Berita',
                            'video' => 'Album Video',
                            'photo' => 'Album Foto',
                            'career' => 'Karir'],
                        ],
        'info/contact' => ['text' => 'Kontak','type'=>'header'],
    ];

    private $menu_versi3 = [
        // 'home' => ['text' => 'Beranda','type'=>'detail',
        //             'data' => [
        //                 '' => 'Versi 1',
        //                 'index2' => 'Versi 2',
        //                 'index3' => 'Versi 3'
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
                        //    'lemongrass' => 'Serai Wangi',
                           'fnb' => 'Food & Beverage'],
                        ],
        'investor' => ['text' => 'Investor','type'=>'header'],
        'sustainability' => ['text' => 'Keberlanjutan','type'=>'detail',
                            'data' => [
                            'policy' => 'Kebijakan',
                            'certification' => 'Sertifikasi',
                            'environment' => 'Lingkungan',
                            'community' => 'Pengembangan Komunitas',
                            // 'community' => 'CSR',
                            'osh' => 'Keselamatan & Kesehatan Kerja'],
                        ],
        'info' => ['text' => 'Informasi','type'=>'detail',
                            'data' => [
                            'news' => 'Berita',
                            'video' => 'Album Video',
                            'photo' => 'Album Foto',
                            'career' => 'Karir'],
                        ],
        'info/contact' => ['text' => 'Kontak','type'=>'header'],
    ];

    // public function getNav() {
    //     return $this->nav;
    // }

    public function getMenu() {
        return $this->menu;
    }

    public function getMenu_versi3()
    {
        return $this->menu_versi3;
    }
}
<?php

class IdLangModel {

    private $list = [
        'home' => 'Beranda',
        'about' => 'Tentang',
        'about us' => 'Tentang Kami'
    ];

    public function getLang($word) {
        return $this->list[$word];
    }
}
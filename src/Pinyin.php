<?php

namespace Bobzhai\Pinyin;

class Pinyin{

    private static $obj = null;
    private $pinyin_array = [];

    private function __construct()
    {
        $this->pinyin_array = unserialize(file_get_contents(__DIR__ . '/../data/pinyin.txt'));
    }

    public static function instance()
    {
        if (!self::$obj) {
            self::$obj = new self();
        }
        return self::$obj;
    }

    public static function ucwords($input_str,$upper=true,$shift_word=false)
    {
        $result = '';
        $pinyin = pinyin::instance();
        $ch = $input_str; //mb_convert_encoding($input_str, 'UTF-8', 'GB2312');

        if ($shift_word) {
           preg_match_all('/[\x{4e00}-\x{9fff}]+/u', $ch,$matches);
           $ch =  implode('', $matches[0]);
        }

        $len = mb_strlen($ch);

        for ($i = 0; $i < $len; $i ++) {
            $char = mb_substr($ch, $i, 1);
            $chars[] = $char;
        }
        foreach ($chars as $char) {
            $result .= isset($pinyin->pinyin_array[$char])? $pinyin->pinyin_array[$char]:$char;
        }
        return $upper ? strtoupper($result):strtolower($result) ;
    }


}



?>
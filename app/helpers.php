<?php
// menambahakan helper ke composer.json dan ketik diterminan composer dump-autoload agar terdaftar di laravel

use App\Models\partner;
use App\Models\section;
use App\Models\setting;

function get_setting_value($key){
    // menambahkan data setting dari model setting denga parameter key
    $data = setting::where('key',$key)->first();
    if (isset($data->value)) {
        return $data->value;
    }else {
        "empty";
    }
}

function get_section_data($key) {
    $data = section::where('post_as',$key)->first();
    if (isset($data)) {
        return $data ;
    }
}

function get_partner(){
    $data = partner::all();
    return $data;
}
<?php

namespace App\Controllers;

class Main {
    public static function error($ctx) {
        return $ctx->render('error.html');
    }

    public static function index($ctx) {
        return $ctx->render('pages/index.html');
    }
}
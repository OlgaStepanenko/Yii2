<?php


namespace app\controllers;


class AuthController extends Controller
{
    /**
     * @return mixed
     */
    public function  actionSignUp() {
        return $this->render('signup', []);
    }
}
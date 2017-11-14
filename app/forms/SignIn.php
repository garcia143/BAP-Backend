<?php

namespace BAPAgent\Forms;

use Phalcon\Forms\Form;
use Phalcon\Forms\Element\Text;
use Phalcon\Forms\Element\Password;
use Phalcon\Forms\Element\Hidden;

class SignIn extends Form 
{

    public function initialize()
    {
        /**
         * Username
         */
        $username = new Text('username', [
            'class' => 'form-control',
            'placeholder' => 'Please enter username'
        ]);

        $this->add($username);

        /**
         * Password
         */
        $password = new Password('password', [
            'class' => 'form-control',
            'placeholder' => 'Please enter password.'
        ]);

        $password->clear();

        $this->add($password);

    }

}
<?php

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{

    public function initialize()
    {
        /**
         * Language Cookie
         */
        if (!$this->cookies->has('language')) {
            $this->cookies->set('language', $this->config->application->defaultLang, time() + 365 * 86400);
        }

        /**
         * Template Settings
         */
        $this->view->appName = $this->config->application->appName;
    }

}

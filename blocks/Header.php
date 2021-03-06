<?php

namespace nadar\creative\blocks;

use luya\cms\base\PhpBlock;

class Header extends PhpBlock
{
    public $module = null;

    public function config()
    {
        return [];
    }

    public function name()
    {
        return 'Header';
    }

    public function admin()
    {
        return 'Header Block';
    }

    public function frontend()
    {
        return '
        <!-- Masthead -->
        <header class="masthead">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-10 align-self-end">
                <h1 class="text-uppercase text-white font-weight-bold">Your Favorite Source of Free Bootstrap Themes</h1>
                <hr class="divider my-4">
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white-75 font-weight-light mb-5">Start Bootstrap can help you build better websites using the Bootstrap framework! Just download a theme and start customizing, no strings attached!</p>
                <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
            </div>
            </div>
        </div>
        </header>';
    }
}
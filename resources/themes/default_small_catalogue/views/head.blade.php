<?php
/**
 * THEME: DEFAULT
 *
 * @author     DropCart <info@dropcart.nl>
 * @copyright  2017  DropCart
 * @license    https://creativecommons.org/licenses/by-nc-nd/3.0/legalcode.txt  CreativeCommons by-nc-nd-3.0
 */
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="robots" content="index,follow">
        <title>
            @hasSection('page_title')
            @yield('page_title') -
            @endif
            {{ env('SITE_NAME', 'DropCart Client Website') }}
        </title>

        <!-- STYLES -->
        @include('DefaultSmallCatalogue::dynamic.styles')

        @stack('styles')

        <!-- SCRIPTS -->
        @include('DefaultSmallCatalogue::dynamic.pre-js')

        @stack('pre-js')
    </head>
    <body>
        <div class="colorgraph">
            <div class="container">
                
            </div>
        </div>
        
        <div class="header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <span style="height:10px; display: block" aria-hidden="true">&nbsp;</span>
                        <div class="push-left">
                            <h4 class="slogan">
                        <!-- <h3 class="text-muted"><?= env('SITE_NAME') ?></h3> -->
                                <a href="<?= route('home', ['locale' => loc()]); ?>"><img style="max-height: 70px;"
                                                                                          src="<?= route('home', ['locale' => loc()]); ?>/images/logo.png"
                                                                                          alt="<?= env('SITE_NAME'); ?>"/></a>
                                @if(lang('site_slug') !== 'site_slug')<?= substr(lang('site_slug'), 0, 200) ?>@else
                                <div style="height: 39px;"></div>@endif </h4>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        @if(env('MULTILINGUAL', FALSE))
                        <div class="float-right" style="padding-top: 10px; padding-left: 10px;">
                            @include('DefaultSmallCatalogue::blocks.language-switcher')
                        </div>
                        @endif
                        <div class="push-right">
                            @include("DefaultSmallCatalogue::blocks.pages-menu")
                        </div>
                            <div class="float-clear"></div>

                            <div id="cart">
                                @include('DefaultSmallCatalogue::blocks.shopping-bag')
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
                <div class="masthead">
            @include('DefaultSmallCatalogue::blocks.main-menu')
        </div>

        <div class="container">
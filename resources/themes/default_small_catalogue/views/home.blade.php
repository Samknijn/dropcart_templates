<style>
    .imgcolor{
        background-color: #FAFBF6;
    }
    .imgwidth{
        width:288px !important;
        display: inline-block;
    }
    .imgwidth1{
        width:303px;
        display: inline-block;
    }
    .imgwidth2{
        width:281px;
        display: inline-block;
    }
    .home .img-responsive {
        display: inline !important;
    }
    
    .btn-width {
        width: 100%;
        font-size: 14pt !important;
        border-bottom-left-radius: 4px !important;
        border-bottom-right-radius: 4px !important;
        border-top-left-radius: 0px !important;
        border-top-right-radius: 0px !important;
    }
</style>

<?php

/**
 * THEME: DEFAULT
 *
 * @author     DropCart <info@dropcart.nl>
 * @copyright  2017  DropCart
 * @license    https://creativecommons.org/licenses/by-nc-nd/3.0/legalcode.txt  CreativeCommons by-nc-nd-3.0
 */
?>

@extends('DefaultSmallCatalogue::layout')

@section('page_title', lang('page_home.title'))


@section('content')
<div class="jumbotron" style="padding-bottom: 20px; padding-top: 20px;">
    <h1>{{ lang('page_home.lead_title') }} </h1>  
    <p class="lead"> 
        {{ lang('page_home.lead_text') }} 
    </p>
</div>

<div class="row home">
    <div class="col-sm-4 text-center">
        <img class="img-responsive" src="{{ env('BASE_URL', '/') . 'img/jettowelslim.png' }}">
  
        <div class="imgcolor imgwidth text-center">
            <br/>
        <input type="button" class="btn btn-primary btn-width" value="Meer informatie">
        </div>
    </div>
    <div class="col-sm-4 text-center">
        <img class="img-responsive" src="{{ env('BASE_URL', '/') . 'img/jettowelsmart.png' }}">
        
    
        <div class="imgcolor imgwidth1 text-center">
            <br/>
        <input type="button" class="btn btn-primary btn-width" value="Meer informatie">
        </div>
    </div>
    <div class="col-sm-4 text-center">
    <img class="img-responsive" src="{{ env('BASE_URL', '/') . 'img/jettowelmini.png' }}">
        
        <div class="imgcolor imgwidth2 text-center">
            <br/>
            <input type="button" class="btn btn-primary btn-width" value="Meer informatie">
        </div>
    </div>
</div>
@endsection
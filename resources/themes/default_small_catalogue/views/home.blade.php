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
            <a href="{{ env('BASE_URL', '/') . 'nl/jettowelslim/' }}" class="btn btn-primary btn-width">Meer informatie</a>
        </div>
    </div>
    <div class="col-sm-4 text-center">
        <img class="img-responsive" src="{{ env('BASE_URL', '/') . 'img/jettowelsmart.png' }}">
        
    
        <div class="imgcolor imgwidth1 text-center">
            <br/>
       <a href="{{ env('BASE_URL', '/') . 'nl/jettowelslim/' }}" class="btn btn-primary btn-width">Meer informatie</a>
        </div>
    </div>
    <div class="col-sm-4 text-center">
    <img class="img-responsive" src="{{ env('BASE_URL', '/') . 'img/jettowelmini.png' }}">
        
        <div class="imgcolor imgwidth2 text-center">
            <br/>
            <a href="{{ env('BASE_URL', '/') . 'nl/jettowelslim/' }}" class="btn btn-primary btn-width">Meer informatie</a>
        </div>
    </div>
</div>
@endsection
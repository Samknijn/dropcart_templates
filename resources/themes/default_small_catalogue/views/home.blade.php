<style>
    .imgcolor{
        background-color: #FAFBF6;
    }
    .imgwidth{
        width:288px;
    }
    .imgwidth1{
        width:303px;
    }
    .imgwidth2{
        width:281px;
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
<div class="jumbotron">
    <h1>{{ lang('page_home.lead_title') }} </h1>  
    <p class="lead"> 
        {{ lang('page_home.lead_text') }} 
    </p>
</div>

<div class="row">
    <div class="col-sm-4 text-center">
        <img class="img-responsive" src="{{ env('BASE_URL', '/') . 'img/jettowelslim.png' }}">
  
        <div class="imgcolor imgwidth">
            <br/>
        <input type="button" class="btn btn-primary" value="Meer informatie">
        </div>
    </div>
    <div class="col-sm-4 text-center">
        <img class="img-responsive" src="{{ env('BASE_URL', '/') . 'img/jettowelsmart.png' }}">
        
    
        <div class="imgcolor imgwidth1">
            <br/>
        <input type="button" class="btn btn-primary" value="Meer informatie">
        </div>
    </div>
    <div class="col-sm-4 text-center">
    <img class="img-responsive" src="{{ env('BASE_URL', '/') . 'img/jettowelmini.png' }}">
        
        <div class="imgcolor imgwidth2 ">
            <br/>
            <input type="button" class="btn btn-primary " value="Meer informatie">
        </div>
    </div>
</div>
@endsection
<?php
/**
 * TEMPLATE: DEFAULT
 *
 * @author     DropCart <info@dropcart.nl>
 * @copyright  2017  DropCart
 * @license    https://creativecommons.org/licenses/by-nc-nd/3.0/legalcode.txt  CreativeCommons by-nc-nd-3.0
 */
?>


@extends('DefaultSmallCatalogue::layout')

@section('page_title', lang('page_jettowelslim.title'))


@section('content')
    
<div class="row" style="margin-top: 40px;">
    <div class="col-sm-5">
        <h2>{{ lang('page_jettowelsmart.title') }}</h2>  
        <p class="lead"> 
            {{ lang('page_jettowelsmart.subtitle') }}
        </p>
    </div>
    <div class="col-sm-7">
        <img class="img-responsive" style="display: inline-block; width: 100% !important;" src="{{ env('BASE_URL', '/') . 'img/mitsubishi_jet_towel_smart.png' }}">
    </div>
    </div>
<div class="row">
    <div class="col-sm-5">
        
    </div>
    <div class="col-sm-7 text-center">
        <br />
        <a href="{{ env('BASE_URL', '/') . 'nl/producten?query=Smart' }}" class="btn btn-green">{{ lang('page_jettowelsmart.ordernow') }}</a>
    </div>
</div>

<div class="container">
    <h2 class="text-center" style="margin-top: 40px;">{{ lang('page_jettowelsmart.slogan') }}</h2><br/>
    <div class="row">
        
    <div class="panel-group" id="faqAccordion">
        <div class="col-sm-6">
              
        <div class="panel panel-default ">
            
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                 <h4 class="panel-title">
                    <a href="#" class="ing">{{ lang('page_jettowelsmart.q1') }}</a>
              </h4>

            </div>
            <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>{{ lang('page_jettowelsmart.a1') }}</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                 <h4 class="panel-title">
                    <a href="#" class="ing">{{ lang('page_jettowelsmart.q2') }}</a>
              </h4>

            </div>
            <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>{{ lang('page_jettowelsmart.a2') }}</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                 <h4 class="panel-title">
                    <a href="#" class="ing">{{ lang('page_jettowelsmart.q3') }}</a>
              </h4>

            </div>
            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>{{ lang('page_jettowelsmart.a3') }}</p>
                </div>
            </div>
        </div>
    </div>
            <div class="col-sm-6">
        
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                 <h4 class="panel-title">
                    <a href="#" class="ing">{{ lang('page_jettowelsmart.q4') }}</a>
              </h4>

            </div>
            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>{{ lang('page_jettowelsmart.a4') }}</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                 <h4 class="panel-title">
                    <a href="#" class="ing">{{ lang('page_jettowelsmart.q5') }}</a>
              </h4>

            </div>
            <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>{{ lang('page_jettowelsmart.a5') }}</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5">
                 <h4 class="panel-title">
                    <a href="#" class="ing">{{ lang('page_jettowelsmart.q6') }}</a>
              </h4>

            </div>
            <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>{{ lang('page_jettowelsmart.a6') }}</p>
                </div>
            </div>
        </div>
        
    </div>
      
    <!--/panel-group-->
    </div>
</div>
@endsection
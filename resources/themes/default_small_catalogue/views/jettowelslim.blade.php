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
        <h2>{{ lang('page_jettowelslim.lead_title') }} </h2>   
        <p class="lead"> 
            {{ lang('page_jettowelslim.lead_text') }} 
        </p>
    </div>
     <div class="col-sm-7">
        <img class="img-responsive text-center" src="{{ env('BASE_URL', '/') . 'img/mitsubishi_jet_towel_large.png' }}">
    </div>
    </div>

<div class="row">
    <div class="col-sm-5">
        
    </div>
    <div class="col-sm-7 text-center">
        <br />
        <a href="{{ env('BASE_URL', '/') . 'nl/producten?query=Jet+Towel+Slim' }}" class="btn btn-primary">{{ lang('page_jettowelslim.ordernow') }} </a>
    </div>
</div>

<div class="container" style="margin-top:50px;">
    <div class="row">
        <div class="col-sm-12 text-center">
    <h2>{{ lang('page_jettowelslim.slogan') }} </h2><br/>
        </div>
    </div>
    <div class="row">
        
       <div class="panel-group" id="faqAccordion">
        <div class="col-sm-6">
              
        <div class="panel panel-default ">
            
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                 <h4 class="panel-title">
                    <a href="#" class="ing">{{ lang('page_jettowelslim.q1') }}</a>
              </h4>

            </div>
            <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>{{ lang('page_jettowelslim.a1') }}</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                 <h4 class="panel-title">
                    <a href="#" class="ing">{{ lang('page_jettowelslim.q2') }}</a>
              </h4>

            </div>
            <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>{{ lang('page_jettowelslim.a2') }}</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                 <h4 class="panel-title">
                    <a href="#" class="ing">{{ lang('page_jettowelslim.q3') }}</a>
              </h4>

            </div>
            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>{{ lang('page_jettowelslim.a3') }}</p>
                </div>
            </div>
        </div>
    </div>
            <div class="col-sm-6">
        
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                 <h4 class="panel-title">
                    <a href="#" class="ing">{{ lang('page_jettowelslim.q4') }}</a>
              </h4>

            </div>
            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>{{ lang('page_jettowelslim.a4') }}</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                 <h4 class="panel-title">
                    <a href="#" class="ing">{{ lang('page_jettowelslim.q5') }}</a>
              </h4>

            </div>
            <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>{{ lang('page_jettowelslim.a5') }}</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5">
                 <h4 class="panel-title">
                    <a href="#" class="ing">{{ lang('page_jettowelslim.q6') }}</a>
              </h4>

            </div>
            <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>{{ lang('page_jettowelslim.a6') }}</p>
                </div>
            </div>
        </div>
        
    </div>
      
    <!--/panel-group-->
    </div>
</div>
</div>
@endsection
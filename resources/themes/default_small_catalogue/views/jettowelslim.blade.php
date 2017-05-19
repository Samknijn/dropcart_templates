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
<div class="jumbotron" style="padding-bottom: 20px; padding-top: 20px;">
    <h2>{{ lang('page_jettowelslim.lead_title') }} </h2>  
    <p class="lead"> 
        {{ lang('page_jettowelslim.lead_text') }} 
    </p>
</div>

<div class="row">
    <div class="col-sm-12">
        <p>
           {{ lang('page_jettowelslim.lead_description') }}  
        </p>
    </div>
</div>

<div class="row">
    <div class="col-sm-12 text-center">
        <img class="img-responsive" style="display: inline-block;" src="{{ env('BASE_URL', '/') . 'img/mitsubishi_jet_towel_large.png' }}">
    </div>
</div>

<div class="container ">
    <h2>Waarom kiezen voor de Mitsubishi Jet Towel Slim™ handdroger?</h2><br/>
    <div class="row">
        
    <div class="panel-group" id="faqAccordion">
        <div class="col-sm-6">
              
        <div class="panel panel-default ">
            
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Hygiëne</a>
              </h4>

            </div>
            <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>De Mitsubishi Jet Towel Slim handdroger is compleet touch-free te bedienen en de meest vitale onderdelen hebben een antimicrobiologische bescherming gekregen. Daarnaast is het apparaat eenvoudig te reinigen.
                        </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question1">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Water opvangbakje</a>
              </h4>

            </div>
            <div id="question1" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>Het water dat van uw handen komt, wordt verzameld in het waterreservoir en komt keurig in het opvangbakje terecht.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Droog je handen in 10 seconden</a>
              </h4>

            </div>
            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>De Mitsubishi Jet Towel Slim handdroger droogt uw handen met een moderne techniek, waarbij gefilterde lucht met een snelheid van 382 km/u het vocht aan beide kanten van uw handen blaast.</p>
                </div>
            </div>
        </div>
    </div>
            <div class="col-sm-6">
        
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Geluid en energieverbruik</a>
              </h4>

            </div>
            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>De motor is een belangrijk onderdeel in de Mitsubishi Jet Towel Slim. Mitsubishi Electric heeft na 20 jaar ontwikkelen een duurzame motor gemaakt met een geluidsproductie van maar 58 db. Daarnaast heeft de Mitsubishi Jet Towel Slim een extreem laag energieverbruik van maar 1070 watt. </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Milieuvriendelijk</a>
              </h4>

            </div>
            <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>Bij het papier- en roldrogen zijn de milieugevolgen van het produceren, transporteren en weggooien buitensporig. De Mitsubishi Jet Towel Slim™ handdroger kent geen gebruiks- of verbruikskosten. </p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Uitstraling</a>
              </h4>

            </div>
            <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>Naast de uitstekende werking beschikt de Mitsubishi Jet Towel Slim™ handdroger over een zeer innovatief design met luxe verlichting. Hiermee zult u veel positieve reacties ontvangen bij uw klanten. </p>
                </div>
            </div>
        </div>
        
    </div>
      
    <!--/panel-group-->
    </div>
</div>
@endsection
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
        <h2>Mitsubishi Jet Towel Smart™</h2>  
        <p class="lead"> 
            De compacte design variant, de Mitsubishi Jet Towel Smart™
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
        <a href="{{ env('BASE_URL', '/') . 'nl/producten?query=Mitsubishi+Jet+Towel+Smart' }}" class="btn btn-primary">Bestel direct</a>
    </div>
</div>

<div class="container">
    <h2 class="text-center" style="margin-top: 40px;">Waarom kiezen voor de Mitsubishi Jet Towel Smart™ handdroger?</h2><br/>
    <div class="row">
        
    <div class="panel-group" id="faqAccordion">
        <div class="col-sm-6">
              
        <div class="panel panel-default ">
            
            <div class="panel-heading accordion-toggle question-toggle collapsed" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question0">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Richtingbepalend design</a>
              </h4>

            </div>
            <div id="question0" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>Met zijn modern, rechtlijnig ontwerp past de Jet Towel Smart in ieder interieur. Door zijn kleine afmetingen is hij ook perfect te monteren in kleine ruimten. Zijn hellende vlakken voorkomen dat de Jet Towel Smart wordt gebruikt om dingen op te zetten. Zo blijft hij dag in dag uit proper.</p>
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

                    <p>Het water dat van uw handen komt wordt verzameld in het waterreservoir en komt keurig in het opvangbakje terecht.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question2">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Duurzaam en robuust</a>
              </h4>

            </div>
            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>Bij de ontwikkeling van de Jet Towel Smart werd veel aandacht besteed aan een lange levensduur. Zijn robuuste motor is ontworpen voor jarenlang gebruik. Zijn stevige metalen kap en volledig weggewerkte schakelaar beschermen hem bovendien tegen vandalisme.</p>
                </div>
            </div>
        </div>
    </div>
            <div class="col-sm-6">
        
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Reiniging en hygiëne</a>
              </h4>

            </div>
            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>Alle oppervlakken van de Jet Towel Smart hebben een duurzame en betrouwbare antibacteriële laag. Ze mogen bovendien worden gereinigd met alcoholhoudende middelen. Reiniging van de filters is mogelijk en u hoeft er zelfs het apparaat niet voor te de monteren.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Nog kostenbewuster met de Jet Towel Smart Lite</a>
              </h4>

            </div>
            <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>Als bijzonder zuinig alternatief is er de Jet Towel Smart Lite. Hij verwarmt de luchtstroom niet, verbruikt daardoor minder energie en vermindert bovendien de verbruikskosten bij ieder gebruik. Bovendien is de aankoopprijs dankzij de uitvoering in schokbestendige kunststof voordeliger.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5">
                 <h4 class="panel-title">
                    <a href="#" class="ing">In individuele huiskleuren leverbaar</a>
              </h4>

            </div>
            <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>De behuizing van zowel de Jet Towel Smart als de Jet Towel Smart Lite kunnen in de door uw gewenste kleur en met uw logo worden geleverd. Daarmee creëren ze nieuwe vrijheden in de ruimtelijke indeling en laten ze zich naadloos in aantrekke- lijke architectonische concepten integreren. Let op: voor op maat gemaakte versies geldt een minimum bestelhoeveelheid.</p>
                </div>
            </div>
        </div>
        
    </div>
      
    <!--/panel-group-->
    </div>
</div>
@endsection
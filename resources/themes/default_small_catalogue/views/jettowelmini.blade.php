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
        <h2>Mitsubishi Jet Towel™ Mini</h2>  
        <p class="lead"> 
            Compact maar krachtig en gebruiksvriendelijk, de nieuwe Jet Towel Mini™
        </p>
    </div>
    <div class="col-sm-7">
        <img class="img-responsive" style="display: inline-block; width: 100% !important;" src="{{ env('BASE_URL', '/') . 'img/mitsubishi_jet_towel_mini.png' }}">
    </div>
    </div>
<div class="row">
    <div class="col-sm-5">
        
    </div>
    <div class="col-sm-7 text-center">
        <br />
        <a href="{{ env('BASE_URL', '/') . 'nl/product/mitsubishi-jet-towel-smart-donkergrijs-zilver-frontpaneel/6486/' }}" class="btn btn-primary">Bestel direct</a>
    </div>
</div>

<div class="container">
    <h2 class="text-center" style="margin-top: 40px;">Waarom kiezen voor de Mitsubishi Jet Towel Mini™ handdroger?</h2><br/>
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

                    <p>Het design bestaat uit één stuk, met een sensor die is geïntegreerd in het handdroog gedeelte, dit voorkomt opbouw van vuil en is eenvoudig te reinigen. Alle onderdelen van de Mitsubishi Jet Towel Mini die in contact kunnen komen met water zijn behandeld met een antibacteriële laag. Op deze manier garandeert de Mitsubishi Jet Towel Mini de hoogste kwaliteit van hygiëne.</p>
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
                    <a href="#" class="ing">Geluid en energieverbruik</a>
              </h4>

            </div>
            <div id="question2" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>De Mitsubishi Jet Towel Mini blaast het water van uw handen met een snelheid van 288 k/m per uur met een geluidsproductie van maar 62 db en een energieverbruik van maar 475 watt.</p>
                </div>
            </div>
        </div>
    </div>
            <div class="col-sm-6">
        
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question3">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Milieuvriendelijk</a>
              </h4>

            </div>
            <div id="question3" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>Bij het papier- en roldrogen zijn de milieugevolgen van het produceren, transporteren en weggooien buitensporig. De Mitsubishi Jet Towel Mini handdroger kent geen gebruiks- of verbruikskosten.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question4">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Onafhankelijk lucht kanaal</a>
              </h4>

            </div>
            <div id="question4" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>Bij de Mitsubishi Jet Towel Mini zijn de lucht-inlaatpoort en het luchtkanaal gescheiden en geïsoleerd van de water afvoer. Op deze manier zorgt de Mitsubishi Jet Towel Mini voor verse lucht die wordt gebruikt bij het drogen van uw handen.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default ">
            <div class="panel-heading accordion-toggle collapsed question-toggle" data-toggle="collapse" data-parent="#faqAccordion" data-target="#question5">
                 <h4 class="panel-title">
                    <a href="#" class="ing">Flexibel inzetbaar</a>
              </h4>

            </div>
            <div id="question5" class="panel-collapse collapse" style="height: 0px;">
                <div class="panel-body">

                    <p>De Jet Towel mini kan in verschillende soorten toiletruimtes worden gebruikt. Zo kunt u hem boven de wasbak hangen maar ook direct naast de wasbak zo dat bijvoorbeeld ook mensen in rolstoelen gemakkelijk hun handen kunnen drogen.</p>
                </div>
            </div>
        </div>
        
    </div>
      
    <!--/panel-group-->
    </div>
</div>
@endsection
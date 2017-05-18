<?php

/**
 * @author     DropCart <info@dropcart.nl>
 * @copyright  2017  DropCart
 * @license    https://creativecommons.org/licenses/by-nc-nd/3.0/legalcode.txt  CreativeCommons by-nc-nd-3.0
 */

?>


@extends('DefaultSmallCatalogue::static-page')

@section('page_title', $page_title)


@section('content')
    @parent

    @include("DefaultSmallCatalogue::blocks.faq", [
    'faq' => $faq
    ])
@endsection

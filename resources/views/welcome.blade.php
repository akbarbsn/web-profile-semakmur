@extends('layouts.app')

@section('title', 'Semakmur - Menghubungkan Produk Indonesia dengan Dunia')

@section('content')

    @include('sections.hero')

    @include('sections.about')

    @include('sections.features')

    {{-- @include('sections.articles') --}}

    @include('sections.packages')

    @include('sections.how-it-works')

    @include('sections.export-process')

    @include('sections.stats')

    @include('sections.faq')

    @include('sections.contact')

@endsection

@extends('pdf.layouts.pdf-layout')

@section('css')
    @include('pdf.example-pdf-css')
@endsection

@section('title', $title ?? config('app.name'))

@section('content')

    <div class="font-bold italic underline w-full text-center">
        Example PDF
    </div>

@endsection

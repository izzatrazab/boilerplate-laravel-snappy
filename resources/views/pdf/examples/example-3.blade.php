@extends('pdf.layouts.pdf-layout')

@push('css')
    @include('pdf.examples.example-3-css')
    <style>
        * {
            font-family: sans-serif;
        }

        section+section {
            border-top: 2px solid black;
        }
    </style>
@endpush

@php
    $signatures = [
        [
            'heading' => 'DISAHKAN OLEH PENOLONG PENGARAH',
            'body' => '',
            'name' => 'ALI BIN ABU',
            'position' => 'Penolong Pengarah Bangunan',
            'from' => 'LOREM LOREM LOREM',
        ],
        [
            'heading' => 'PENGESYORAN PENGARAH BANGUNAN',
            'body' => 'Permohonan ini adalah <b>DISYORKAN / TIDAK DISYORKAN</b>',
            'name' => 'ALI BIN ABU',
            'position' => 'Pengarah Bangunan',
            'from' => 'LOREM LOREM LOREM',
        ],
        [
            'heading' => 'SOKONGAN SETIAUSAHA LOREM LOREM LOREM',
            'body' => 'Permohonan ini adalah <b>DISOKONG / TIDAK DISOKONG</b>',
            'name' => 'ALI BIN ABU',
            'position' => 'LOREM',
            'from' => 'LOREM LOREM LOREM',
        ],
        [
            'heading' => 'KELULUSAN DATUK BANDAR LOREM LOREM LOREM',
            'body' => 'Permohonan ini adalah <b>DILULUSKAN / TIDAK DILULUSKAN</b>',
            'name' => 'ALI BIN ABU',
            'position' => 'LOREM',
            'from' => 'LOREM LOREM LOREM',
        ],
    ];
@endphp

@section('title', $title ?? config('app.name'))

@section('content')
    <div>
        <table class="w-full font-bold">
            <tr>
                <td class="whitespace-nowrap">
                    NO. FAIL: LOREM 
                </td>
                <td class="whitespace-nowrap text-right">
                    NO. LOREM:
                    <u>
                        LOREM LOREM LOREM LOREM
                    </u>
                    <span class="text-red-500">
                        *
                    </span>
                    <span>
                        (LOREM LOREM)
                    </span>

                </td>
            </tr>
        </table>

        @foreach ($signatures as $signature)
            <section class="mt-8">
                <p>
                    <u class="font-bold">
                        {{ $signature['heading'] }}:
                    </u>
                </p>

                @if (!empty($signature['body']))
                    <p>
                        {!! $signature['body'] !!}
                    </p>
                @endif

                <div class="w-4/5 border-0 border-b border-solid mt-8">
                    &nbsp;
                </div>
                <table class="mt-16 text-center w-[180px]">
                    <colgroup>
                        <col class="w-[180px]">
                    </colgroup>
                    <tr>
                        <td class="text-center border-0 border-b border-dotted">
                        </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="whitespace-nowrap font-bold">
                            <di class="overflow-visible mx-auto">
                                ({!! $signature['name'] !!})
                            </di>
                        </td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap">{{ $signature['position'] }}</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="whitespace-nowrap">{{ $signature['from'] }}</td>
                        <td></td>
                    </tr>
                </table>
                <div class="text-right">
                    Tarikh : <div class="w-[200px] border-0 border-b border-dotted inline-block">&nbsp;</div>
                </div>
            </section>
        @endforeach
    </div>
@endsection

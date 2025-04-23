@extends('pdf.layouts.pdf-layout')

@push('css')
    @include('pdf.examples.example-2-css')
    <style>
        * {
            font-family: 'Times New Roman', Times, serif;
            font-weight: 700;
            font-size: 16pt;
        }

        td {
            border: black solid 1px;
            padding: 10px 8px;
        }

        tr>td:first-child {
            text-align: center;
        }
    </style>
@endpush


@section('title', $title ?? config('app.name'))

@section('content')

    <div>
        <table class="border-collapse">
            <colgroup>
                <col class="w-[20%]">
                <col style="width: 360px">
                {{-- <col class="w-[20%]"> --}}
            </colgroup>
            <tbody>
                <tr>
                    <td class="p-2 text-center align-middle">
                        <img src="https://www.svgrepo.com/show/376332/laravel.svg" alt="logo-[???]"
                            class="w-full">
                    </td>
                    <td colspan="4" class="text-center" style="line-heigh:0;">
                        <div style="font-size: 22pt;">
                            [???] KEBENARAN MEMBUANG SISA BAHAN <br> BINAAN UNTUK BANGUNAN PERMIT [???]
                        </div>
                        <div class="font-normal">
                            [PLACE, PLACE, PLACE] <br> [ADDRESSES] [ADDRESSES] [ADDRESSES] [ADDRESSES]
                        </div>
                    </td>
                </tr>
                <tr>
                    <td rowspan="2">NO. FAIL</td>
                    <td colspan="3">[???]:[???]/__________/__________([???])</td>
                    <td>TARIKH:</td>
                </tr>
                <tr>
                    <td colspan="3" class="!text-left">[???]:[???]/[???]/__________/__________([???])</td>
                    <td></td>
                </tr>
                <tr>
                    <td>NO. PERMIT</td>
                    <td colspan="4">[???](&emsp;&emsp;)__________/__________([???]) *(&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;)
                    </td>
                </tr>
                <tr>
                    <td>
                        TETUAN
                    </td>
                    <td colspan="4"></td>
                </tr>
                <tr>
                    <td>
                        TAJUK CADANGAN PERMIT SEMENTARA
                    </td>
                    <td colspan="4">
                        @for ($i = 0; $i < 5; $i++)
                            <p class="w-full border-0 border-b border-solid !mt-2 !mb-0">&nbsp;</p>
                        @endfor
                    </td>
                </tr>
                <tr>
                    <td>
                        NO. TELEFON
                    </td>
                    <td></td>
                    <td class="text-center">
                        TARIKH & MASA
                    </td>
                    <td colspan="2" rowspan="6" class="text-center p-1">
                        <p class="font-normal">
                            CAP TAPAK PELUPUSAN SAMPAH [???]
                        </p>
                        <div class="rounded-full size-48 border border-solid border-slate-500 my-10 mx-auto">

                        </div>
                        <p class="font-normal whitespace-nowrap">
                            TARIKH:____________
                        </p>
                    </td>
                </tr>
                <tr>
                    <td>
                        NO. KENDERAAN
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        NAMA PEMANDU (1)
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        NAMA KONTRAKTOR (1)
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        NAMA PEMANDU (2)
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>
                        NAMA KONTRAKTOR (2)
                    </td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <div class="w-full px-[5%] italic mt-1" style="font-family:sans-serif; line-height:1.1;">
            @php
                $notes = [
                    '*Kontraktor perlu membuang sisa binaan ke kawasan pembuangan yang di tetapan oleh pihak [???].',
                    '*Kontraktor perlu mencatat tarikh setiap kali masuk ke tempat kawasan pembuangan sisa binaan yang di tetapan.',
                    '*PSP dan Pemilik perlu memastikan sisa binaan DIBUANG oleh kontraktor ke tempat yang disediakan sepertimana dalam syarat tuntutan wang amanah dan wang cagaran.',
                    '**Pemilik bangunan bertanggungjawab keatas sisa binaan yang dibuang sepanjang perjalanan ke kawasan tempat pembuangan.',
                    '*** Sekiranya sisa binaan yang dibuang kemerata tempat akan didakwa oleh [???] dan wang cagaran dan wang amanah tidak akan dipulangkan.',
                ];
            @endphp
            @foreach ($notes as $note)
                <span class="block" style="font-size: 10pt; font-family:inherit;">
                    {{ $note }}
                </span>
            @endforeach
        </div>
    </div>

@endsection

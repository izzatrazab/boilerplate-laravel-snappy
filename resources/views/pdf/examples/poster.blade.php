@extends('pdf.layouts.pdf-layout')

@section('css')
    @include('pdf.examples.poster-css')
    <style>
        html {
            background-color: black;
        }

        body {
            margin: 0;
            padding: 0;
            max-height: 100%;
            max-width: 100%;
            font-family: sans-serif;
        }


        .filler {
            position: fixed;
            display: block;
            min-height: 100%;
            min-width: 100%;
            margin: 0;
            padding: 0;
            /* background-color: black; */
        }
    </style>
@endsection

@section('title', 'example: poster')

@section('content')
    <div class="pt-4">
        <table class="w-full p-0 border-collapse">
            <tr>
                <td class="font-bold text-white pl-9 align-middle">
                    <div class="text-5xl">EXAMPLE POSTER</div>
                    <div class="text-2xl">EXAMPLE SUB TEXT</div>
                    <div class="text-2xl">EXAMPLE SUB TEXT TWO</div>
                </td>
                <td class="align-middle text-right">
                    <div class="inline-block">
                        <div class="text-center">
                            <img src="{{ asset('svg/laravel.svg') }}" class='my-auto mx-auto h-24' alt="logo-mpk" />
                        </div>
                        <div class="rounded-l-full px-10 py-3 text-center w-auto mt-2 bg-cyan-400">
                            <div class="text-sm">SMALL NOTES</div>
                            <div class="text-sm font-bold">SMALL NOTES SMALL NOTES</div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>


        <img src="{{ public_path('images/examples/two-cats-staring.jpg') }}" class="mt-4"
            style="width:100%; height: 520px;">

        <table class="-mt-[80px] w-[85%] mx-auto border-collapse">
            <tr>
                <td class="text-left align-middle">
                    <div class="inline-block">
                        <div class="rounded-xl p-2 bg-cyan-400">
                            <img src="{{ public_path('images/examples/cat-hiding.jpg') }}" class="rounded-xl"
                                style="width:390px; height: 215px;">
                        </div>
                    </div>
                </td>
                <td class="text-right align-middle">
                    <div class="inline-block">
                        <div class="rounded-xl p-2 bg-cyan-400">
                            <img src="{{ public_path('images/examples/mochi.jpg') }}" class="rounded-xl"
                                style="width:390px; height: 215px;">
                        </div>
                    </div>
                </td>
            </tr>
        </table>

        <div class="mt-10 w-[85%] mx-auto text-white text-5xl font-bold text-center">
            <p>HELP US FIND THESE MISSING CATS</p>
            <p class="text-4xl">LAST SEEN: PARK</p>
            <p>REWARD WILL BE GIVEN TO THOSE WHO FIND THEM</p>
        </div>

        <div class="mt-10 w-[85%] mx-auto text-white text-3xl font-bold text-center">
            <p>CALL 01-XXX-XXX IF YOU HAVE ANY INFORMATION</p>
        </div>
    </div>
    <div class="filler bg-black">
    </div>
@endsection

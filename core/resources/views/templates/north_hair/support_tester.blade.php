@extends('Template::layouts.master')
@section('content')
    @if ($sections->secs != null)
        @foreach (json_decode($sections->secs) as $sec)
            @if (View::exists('Template::sections.' . $sec))
                @include('Template::sections.' . $sec)
            @else
                @php
                    $sectionData = getSectionData($sec, isFrontend: true);
                @endphp

                @if ($sectionData && array_key_exists('section', $sectionData))
                    @include($sectionData['section'], ['data' => @$sectionData['data']])
                @endif
            @endif
        @endforeach
    @endif
@endsection

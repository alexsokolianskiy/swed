<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body class="hold-transition skin-black sidebar-mini">
    <div class="wrapper">
        @include('layouts.experiment.partials.header')
        @include('layouts.experiment.partials.left')
        @include('layouts.experiment.partials.content')
    </div>
    </body>

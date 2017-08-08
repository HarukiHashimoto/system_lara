<head>
    <meta charset="utf-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="/system_lara/public/image/favicon/favicon.ico">

    {{-- cssの読込 --}}
    <link href="/system_lara/public/css/app.css" rel="stylesheet" type="text/css" />
    <link href="/system_lara/public/css/Semantic-UI-CSS/semantic.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css" type="text/css">
    <link href="/system_lara/public/css/Flat-UI-master/dist/css/flat-ui.min.css" rel="stylesheet" type="text/css" />
    <link href="/system_lara/public/css/style.css" rel="stylesheet" type="text/css" />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/mermaid/0.5.8/mermaid.css' rel='stylesheet' type="text/css"  />
    <link href='/system_lara/public/js/vis.js/dist/vis.min.css' rel='stylesheet' type="text/css"  />

    <title>{{$title}}</title>
</head>

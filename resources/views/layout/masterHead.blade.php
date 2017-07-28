<head>
    <meta charset="utf-8">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- JSファイルの読み込みはココ以降で行う --}}
    <script type="text/javascript" src="/system_lara/public/js/app.js"></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/mermaid/0.5.8/mermaid.js'></script>
    <script type="text/javascript" src="/system_lara/public/js/jquery-3.2.1.js"></script>
    <script type="text/javascript" src="/system_lara/public/js/sytemsend.js"></script>
    <script type="text/javascript" src="/system_lara/public/js/setup.js"></script>


    {{-- ドロワー関連ココから↓ --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/js/drawer.min.js"></script>
    <script>
    $(function() {
       $('.drawer').drawer();
    });
    </script>
    {{-- ココまで --}}

    {{-- cssの読込 --}}
    <link href="/system_lara/public/css/app.css" rel="stylesheet" type="text/css" />
    <link href='https://cdnjs.cloudflare.com/ajax/libs/mermaid/0.5.8/mermaid.css' rel='stylesheet' type="text/css"  />
    <link href="/system_lara/public/css/Semantic-UI-CSS/semantic.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.1.0/css/drawer.min.css" type="text/css">
    <link href="/system_lara/public/css/style.css" rel="stylesheet" type="text/css" />

    <title>{{$title}}</title>
</head>

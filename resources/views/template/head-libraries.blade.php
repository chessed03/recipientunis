<!-- CSS here -->

<style>
    :root {
        --primary-color: {{ ___getSite()->primary_color ?? '#ff7350' }};
        --secondary-color: {{ ___getSite()->secondary_color ?? '#125875' }};
    }
</style>

<link rel="stylesheet" href="{{ asset('templates/template-one/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('templates/template-one/css/animate.min.css') }}">
<link rel="stylesheet" href="{{ asset('templates/template-one/css/magnific-popup.css') }}">
<link rel="stylesheet" href="{{ asset('templates/template-one/fontawesome/css/all.css') }}">
<link rel="stylesheet" href="{{ asset('templates/template-one/css/dripicons.css') }}">
<link rel="stylesheet" href="{{ asset('templates/template-one/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('templates/template-one/css/meanmenu.css') }}">
<link rel="stylesheet" href="{{ asset('templates/template-one/css/default.css') }}">
<link rel="stylesheet" href="{{ asset('templates/template-one/css/style.css') }}">
<link rel="stylesheet" href="{{ asset('templates/template-one/css/responsive.css') }}">
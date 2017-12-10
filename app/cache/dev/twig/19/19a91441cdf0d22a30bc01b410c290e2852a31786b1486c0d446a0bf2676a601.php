<?php

/* ::base.html.twig */
class __TwigTemplate_5e377dda106ba39719178e88bf4c60d2c9277e784fce178457e2d09da475d0ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navigation' => array($this, 'block_navigation'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b91b7fdfc623223fb7b088703b1c126a034e4c04c7c56826a52336c02cf35c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b91b7fdfc623223fb7b088703b1c126a034e4c04c7c56826a52336c02cf35c79->enter($__internal_b91b7fdfc623223fb7b088703b1c126a034e4c04c7c56826a52336c02cf35c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>

<head>
\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<meta name=\"description\" content=\"website description\" />
\t<meta name=\"keywords\" content=\"website keywords, website keywords\" />
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

</head>

<body>
\t<div id=\"main\">
\t\t<div id=\"header\">

\t\t\t<div id=\"logo\">

\t\t\t\t<div id=\"logo_text\">
\t\t\t\t\t<h1><a href=\"";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Easy<span class=\"logo_colour\">_cooking</span></a></h1>
\t\t\t\t\t<!-- <h2>\"El amor puede esperar, el hambre no\" Monkey D. Luffy</h2> -->
\t\t\t\t\t <div id=\"letter-container\" class=\"letter-container\">
\t\t\t\t\t<h2>
\t\t\t\t\t<a href=\"#\">\"El amor puede esperar, el hambre no\" Monkey D. Luffy</a>
\t\t\t\t\t</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- Menú -->
\t\t\t";
        // line 32
        $this->displayBlock('navigation', $context, $blocks);
        // line 47
        echo "\t\t</div>

\t\t<div id=\"site_content\">
\t\t\t<div class=\"sidebar\">
\t\t\t\t<!-- Contenido lateral derecho -->
\t\t\t\t";
        // line 52
        $this->displayBlock('sidebar', $context, $blocks);
        // line 53
        echo "\t\t\t</div>

\t\t\t<div id=\"content\">
\t\t\t\t<!-- Contenido principal -->
\t\t\t\t<section class=\"main-col\">
\t\t\t\t\t";
        // line 58
        $this->displayBlock('body', $context, $blocks);
        // line 59
        echo "\t\t\t\t</section>
\t\t\t</div>
\t\t</div>

\t\t<!-- Pie de página -->
\t\t<div id=\"footer\">
\t\t\t";
        // line 65
        $this->displayBlock('footer', $context, $blocks);
        // line 68
        echo "\t\t</div>

\t</div>

\t";
        // line 72
        $this->displayBlock('javascripts', $context, $blocks);
        // line 116
        echo "</body>
</html>
";
        
        $__internal_b91b7fdfc623223fb7b088703b1c126a034e4c04c7c56826a52336c02cf35c79->leave($__internal_b91b7fdfc623223fb7b088703b1c126a034e4c04c7c56826a52336c02cf35c79_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a1d93ed42b623a9baf8fa6f1c8b8de666b5856d28ca340fec941186c0dbf8a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a1d93ed42b623a9baf8fa6f1c8b8de666b5856d28ca340fec941186c0dbf8a5->enter($__internal_9a1d93ed42b623a9baf8fa6f1c8b8de666b5856d28ca340fec941186c0dbf8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_9a1d93ed42b623a9baf8fa6f1c8b8de666b5856d28ca340fec941186c0dbf8a5->leave($__internal_9a1d93ed42b623a9baf8fa6f1c8b8de666b5856d28ca340fec941186c0dbf8a5_prof);

    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_3158b5edfa2aa467330ce63fce04f9a398b14f13c2c63db98187335ebd375426 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3158b5edfa2aa467330ce63fce04f9a398b14f13c2c63db98187335ebd375426->enter($__internal_3158b5edfa2aa467330ce63fce04f9a398b14f13c2c63db98187335ebd375426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 33
        echo "\t\t\t";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 34
            echo "\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_admin_logout");
            echo "\">Salir</a></li>
\t\t\t";
        }
        // line 36
        echo "\t\t\t<div id=\"menubar\">
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li class=\"selected\"><div><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Inicio</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_recetas");
        echo "\">Recetas</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_platos");
        echo "\">Platos</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_ingredientes");
        echo "\">Ingredientes</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_contact");
        echo "\">Contacto</a><div></li>
\t\t\t\t</ul>
\t\t\t</div> 
\t
\t\t\t";
        
        $__internal_3158b5edfa2aa467330ce63fce04f9a398b14f13c2c63db98187335ebd375426->leave($__internal_3158b5edfa2aa467330ce63fce04f9a398b14f13c2c63db98187335ebd375426_prof);

    }

    // line 52
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f85e597668517effcc76c0f2a5ae017caaa99c997912f64aae669884e6a71adf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85e597668517effcc76c0f2a5ae017caaa99c997912f64aae669884e6a71adf->enter($__internal_f85e597668517effcc76c0f2a5ae017caaa99c997912f64aae669884e6a71adf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_f85e597668517effcc76c0f2a5ae017caaa99c997912f64aae669884e6a71adf->leave($__internal_f85e597668517effcc76c0f2a5ae017caaa99c997912f64aae669884e6a71adf_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6856eb5e30fb0d24a0e78db4df7777ebb4d44f40128d04677d176a08baee811 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6856eb5e30fb0d24a0e78db4df7777ebb4d44f40128d04677d176a08baee811->enter($__internal_a6856eb5e30fb0d24a0e78db4df7777ebb4d44f40128d04677d176a08baee811_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a6856eb5e30fb0d24a0e78db4df7777ebb4d44f40128d04677d176a08baee811->leave($__internal_a6856eb5e30fb0d24a0e78db4df7777ebb4d44f40128d04677d176a08baee811_prof);

    }

    // line 65
    public function block_footer($context, array $blocks = array())
    {
        $__internal_50f95b1c1240ababb2f8dc2b8d4874e3d0e15017bdd5b8921b0498dbc3323c53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50f95b1c1240ababb2f8dc2b8d4874e3d0e15017bdd5b8921b0498dbc3323c53->enter($__internal_50f95b1c1240ababb2f8dc2b8d4874e3d0e15017bdd5b8921b0498dbc3323c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 66
        echo "\t\t\tCocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web
\t\t\t";
        
        $__internal_50f95b1c1240ababb2f8dc2b8d4874e3d0e15017bdd5b8921b0498dbc3323c53->leave($__internal_50f95b1c1240ababb2f8dc2b8d4874e3d0e15017bdd5b8921b0498dbc3323c53_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a90d8819985a6b09d6b4f2299c9cea6381eedd0758525c62cd2ca586db1329fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a90d8819985a6b09d6b4f2299c9cea6381eedd0758525c62cd2ca586db1329fb->enter($__internal_a90d8819985a6b09d6b4f2299c9cea6381eedd0758525c62cd2ca586db1329fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 73
        echo "\t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.lettering.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(function() {
\t\t\t\t\t\$(\"#letter-container h2 a\").lettering();
\t\t\t\t});
\t\t\t</script

\t <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.34978.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t <script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t\t
\t\t\t\tvar \$container\t= \$('#ib-container'),
\t\t\t\t\t\$articles\t= \$container.children('article'),
\t\t\t\t\ttimeout;
\t\t\t\t
\t\t\t\t\$articles.on( 'mouseenter', function( event ) {
\t\t\t\t\t\t
\t\t\t\t\tvar \$article\t= \$(this);
\t\t\t\t\tclearTimeout( timeout );
\t\t\t\t\ttimeout = setTimeout( function() {
\t\t\t\t\t\t
\t\t\t\t\t\tif( \$article.hasClass('active') ) return false;
\t\t\t\t\t\t
\t\t\t\t\t\t\$articles.not( \$article.removeClass('blur').addClass('active') )
\t\t\t\t\t\t\t\t .removeClass('active')
\t\t\t\t\t\t\t\t .addClass('blur');
\t\t\t\t\t\t
\t\t\t\t\t}, 65 );
\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$container.on( 'mouseleave', function( event ) {
\t\t\t\t\t
\t\t\t\t\tclearTimeout( timeout );
\t\t\t\t\t\$articles.removeClass('active blur');
\t\t\t\t\t
\t\t\t\t});
\t\t\t
\t\t\t});
\t\t</script>
\t";
        
        $__internal_a90d8819985a6b09d6b4f2299c9cea6381eedd0758525c62cd2ca586db1329fb->leave($__internal_a90d8819985a6b09d6b4f2299c9cea6381eedd0758525c62cd2ca586db1329fb_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  235 => 82,  231 => 81,  221 => 74,  218 => 73,  212 => 72,  204 => 66,  198 => 65,  187 => 58,  176 => 52,  164 => 42,  160 => 41,  156 => 40,  152 => 39,  148 => 38,  144 => 36,  138 => 34,  135 => 33,  129 => 32,  117 => 5,  108 => 116,  106 => 72,  100 => 68,  98 => 65,  90 => 59,  88 => 58,  81 => 53,  79 => 52,  72 => 47,  70 => 32,  55 => 20,  41 => 9,  34 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>

<head>
\t<title>{% block title %}symblog{% endblock %}</title>
\t<meta name=\"description\" content=\"website description\" />
\t<meta name=\"keywords\" content=\"website keywords, website keywords\" />
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t<link href=\"{{ asset('css/style.css') }}\" type=\"text/css\" rel=\"stylesheet\" />

</head>

<body>
\t<div id=\"main\">
\t\t<div id=\"header\">

\t\t\t<div id=\"logo\">

\t\t\t\t<div id=\"logo_text\">
\t\t\t\t\t<h1><a href=\"{{ path('cooker_cook_principal')}}\">Easy<span class=\"logo_colour\">_cooking</span></a></h1>
\t\t\t\t\t<!-- <h2>\"El amor puede esperar, el hambre no\" Monkey D. Luffy</h2> -->
\t\t\t\t\t <div id=\"letter-container\" class=\"letter-container\">
\t\t\t\t\t<h2>
\t\t\t\t\t<a href=\"#\">\"El amor puede esperar, el hambre no\" Monkey D. Luffy</a>
\t\t\t\t\t</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- Menú -->
\t\t\t{% block navigation %}
\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t<li><a href=\"{{ path('blogger_admin_logout')}}\">Salir</a></li>
\t\t\t{% endif %}
\t\t\t<div id=\"menubar\">
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li class=\"selected\"><div><a href=\"{{ path('cooker_cook_principal')}}\">Inicio</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"{{ path('cooker_cook_recetas')}}\">Recetas</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"{{ path('cooker_cook_platos')}}\">Platos</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"{{ path('cooker_cook_ingredientes')}}\">Ingredientes</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"{{ path('cooker_cook_contact')}}\">Contacto</a><div></li>
\t\t\t\t</ul>
\t\t\t</div> 
\t
\t\t\t{% endblock %}
\t\t</div>

\t\t<div id=\"site_content\">
\t\t\t<div class=\"sidebar\">
\t\t\t\t<!-- Contenido lateral derecho -->
\t\t\t\t{% block sidebar %}{% endblock %}
\t\t\t</div>

\t\t\t<div id=\"content\">
\t\t\t\t<!-- Contenido principal -->
\t\t\t\t<section class=\"main-col\">
\t\t\t\t\t{% block body %}{% endblock %}
\t\t\t\t</section>
\t\t\t</div>
\t\t</div>

\t\t<!-- Pie de página -->
\t\t<div id=\"footer\">
\t\t\t{% block footer %}
\t\t\tCocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web
\t\t\t{% endblock %}
\t\t</div>

\t</div>

\t{% block javascripts %}
\t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
\t\t\t<script src=\"{{ asset('js/jquery.lettering.js') }}\" type=\"text/javascript\"></script>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(function() {
\t\t\t\t\t\$(\"#letter-container h2 a\").lettering();
\t\t\t\t});
\t\t\t</script

\t <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\" type=\"text/javascript\"></script>
\t <script src=\"{{ asset('js/modernizr.custom.34978.js') }}\" type=\"text/javascript\"></script>
\t <script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t\t
\t\t\t\tvar \$container\t= \$('#ib-container'),
\t\t\t\t\t\$articles\t= \$container.children('article'),
\t\t\t\t\ttimeout;
\t\t\t\t
\t\t\t\t\$articles.on( 'mouseenter', function( event ) {
\t\t\t\t\t\t
\t\t\t\t\tvar \$article\t= \$(this);
\t\t\t\t\tclearTimeout( timeout );
\t\t\t\t\ttimeout = setTimeout( function() {
\t\t\t\t\t\t
\t\t\t\t\t\tif( \$article.hasClass('active') ) return false;
\t\t\t\t\t\t
\t\t\t\t\t\t\$articles.not( \$article.removeClass('blur').addClass('active') )
\t\t\t\t\t\t\t\t .removeClass('active')
\t\t\t\t\t\t\t\t .addClass('blur');
\t\t\t\t\t\t
\t\t\t\t\t}, 65 );
\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$container.on( 'mouseleave', function( event ) {
\t\t\t\t\t
\t\t\t\t\tclearTimeout( timeout );
\t\t\t\t\t\$articles.removeClass('active blur');
\t\t\t\t\t
\t\t\t\t});
\t\t\t
\t\t\t});
\t\t</script>
\t{% endblock %}
</body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app/Resources\\views/base.html.twig");
    }
}

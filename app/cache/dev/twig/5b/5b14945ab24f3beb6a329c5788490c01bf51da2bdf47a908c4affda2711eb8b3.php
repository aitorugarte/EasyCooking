<?php

/* ::base.html.twig */
class __TwigTemplate_d5e7407b5439a8d3bba3d0c3540b39df9eae19b2273b1b801ec3907dc8238f59 extends Twig_Template
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
        $__internal_003c45099177be8ca82c090f8160c36cabd54443cb9410db5840c24c7a68f6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003c45099177be8ca82c090f8160c36cabd54443cb9410db5840c24c7a68f6b4->enter($__internal_003c45099177be8ca82c090f8160c36cabd54443cb9410db5840c24c7a68f6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_003c45099177be8ca82c090f8160c36cabd54443cb9410db5840c24c7a68f6b4->leave($__internal_003c45099177be8ca82c090f8160c36cabd54443cb9410db5840c24c7a68f6b4_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8e5d09c9cfe306ba81867e4e282ed993e8e63153ab248ed9e49cfc1099358aa0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e5d09c9cfe306ba81867e4e282ed993e8e63153ab248ed9e49cfc1099358aa0->enter($__internal_8e5d09c9cfe306ba81867e4e282ed993e8e63153ab248ed9e49cfc1099358aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_8e5d09c9cfe306ba81867e4e282ed993e8e63153ab248ed9e49cfc1099358aa0->leave($__internal_8e5d09c9cfe306ba81867e4e282ed993e8e63153ab248ed9e49cfc1099358aa0_prof);

    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_1dd04ee7f590b7d24c9a35f5f0a34565d64412536aab1db16518abe695890696 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd04ee7f590b7d24c9a35f5f0a34565d64412536aab1db16518abe695890696->enter($__internal_1dd04ee7f590b7d24c9a35f5f0a34565d64412536aab1db16518abe695890696_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_1dd04ee7f590b7d24c9a35f5f0a34565d64412536aab1db16518abe695890696->leave($__internal_1dd04ee7f590b7d24c9a35f5f0a34565d64412536aab1db16518abe695890696_prof);

    }

    // line 52
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_772cda9867d5610da86d5a7c8f96821aee074202a9af12b801fe73e69853a9ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_772cda9867d5610da86d5a7c8f96821aee074202a9af12b801fe73e69853a9ae->enter($__internal_772cda9867d5610da86d5a7c8f96821aee074202a9af12b801fe73e69853a9ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_772cda9867d5610da86d5a7c8f96821aee074202a9af12b801fe73e69853a9ae->leave($__internal_772cda9867d5610da86d5a7c8f96821aee074202a9af12b801fe73e69853a9ae_prof);

    }

    // line 58
    public function block_body($context, array $blocks = array())
    {
        $__internal_42d9121c2f47704b30f97da77ff9b48ca6f09722cffed6094a6d2b83355ac020 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d9121c2f47704b30f97da77ff9b48ca6f09722cffed6094a6d2b83355ac020->enter($__internal_42d9121c2f47704b30f97da77ff9b48ca6f09722cffed6094a6d2b83355ac020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_42d9121c2f47704b30f97da77ff9b48ca6f09722cffed6094a6d2b83355ac020->leave($__internal_42d9121c2f47704b30f97da77ff9b48ca6f09722cffed6094a6d2b83355ac020_prof);

    }

    // line 65
    public function block_footer($context, array $blocks = array())
    {
        $__internal_a4bd279438ab8882f28f3e44008f3deba6ae5890cb4a2654c5a23f0d7b57917d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4bd279438ab8882f28f3e44008f3deba6ae5890cb4a2654c5a23f0d7b57917d->enter($__internal_a4bd279438ab8882f28f3e44008f3deba6ae5890cb4a2654c5a23f0d7b57917d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 66
        echo "\t\t\tCocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web
\t\t\t";
        
        $__internal_a4bd279438ab8882f28f3e44008f3deba6ae5890cb4a2654c5a23f0d7b57917d->leave($__internal_a4bd279438ab8882f28f3e44008f3deba6ae5890cb4a2654c5a23f0d7b57917d_prof);

    }

    // line 72
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_765f952d03d45cc01d9d4696a1cef4f4e108440d94437c80da68daf90827ec5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765f952d03d45cc01d9d4696a1cef4f4e108440d94437c80da68daf90827ec5b->enter($__internal_765f952d03d45cc01d9d4696a1cef4f4e108440d94437c80da68daf90827ec5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_765f952d03d45cc01d9d4696a1cef4f4e108440d94437c80da68daf90827ec5b->leave($__internal_765f952d03d45cc01d9d4696a1cef4f4e108440d94437c80da68daf90827ec5b_prof);

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

<?php

/* ::base.html.twig */
class __TwigTemplate_2027328b574ca90780d296d6d85acd31bf5a20bee95502b3427355ce2794c3c7 extends Twig_Template
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
        $__internal_28bc9503c718667553cd47daa0902a23730960fd2548d474d208afb902337383 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28bc9503c718667553cd47daa0902a23730960fd2548d474d208afb902337383->enter($__internal_28bc9503c718667553cd47daa0902a23730960fd2548d474d208afb902337383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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

\t<div>
\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "es"))), "html", null, true);
        echo "\" class=\"idioma\">ES</a>
\t<a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
        echo "\" class=\"idioma\">EN</a>
\t</div>

\t";
        // line 21
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 22
            echo "\t\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_admin_logout");
            echo "\" class=\"entrar\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Salir", array(), "messages");
            echo "</a>
\t\t";
        } else {
            // line 23
            echo " 
\t\t\t<a href=\"";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_admin_login");
            echo "\" class=\"entrar\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Iniciar sesi&oacute;n", array(), "messages");
            echo "</a>
\t\t";
        }
        // line 26
        echo "
\t\t<div id=\"header\">
\t\t\t<div id=\"logo\">

\t\t\t\t<div id=\"logo_text\">
\t\t\t\t\t<h1><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Easy<span class=\"logo_colour\">_cooking</span></a></h1>
\t\t\t\t\t <div id=\"letter-container\" class=\"letter-container\">
\t\t\t\t\t<h2>
\t\t\t\t\t<a href=\"#\">";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("\"El amor puede esperar, el hambre no\" Monkey D. Luffy", array(), "messages");
        echo "</a>
\t\t\t\t\t</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t
\t\t\t<!-- Menú -->
\t\t\t";
        // line 42
        $this->displayBlock('navigation', $context, $blocks);
        // line 54
        echo "\t\t</div>

\t\t<div id=\"site_content\">
\t\t\t<div class=\"sidebar\">
\t\t\t\t<!-- Contenido lateral derecho -->
\t\t\t\t";
        // line 59
        $this->displayBlock('sidebar', $context, $blocks);
        // line 60
        echo "\t\t\t</div>

\t\t\t<div id=\"content\">
\t\t\t\t<!-- Contenido principal -->
\t\t\t\t<section class=\"main-col\">
\t\t\t\t\t";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        // line 66
        echo "\t\t\t\t</section>
\t\t\t</div>
\t\t</div>

\t\t<!-- Pie de página -->
\t\t<div id=\"footer\">
\t\t\t";
        // line 72
        $this->displayBlock('footer', $context, $blocks);
        // line 75
        echo "\t\t</div>

\t</div>

\t";
        // line 79
        $this->displayBlock('javascripts', $context, $blocks);
        // line 124
        echo "</body>
</html>
";
        
        $__internal_28bc9503c718667553cd47daa0902a23730960fd2548d474d208afb902337383->leave($__internal_28bc9503c718667553cd47daa0902a23730960fd2548d474d208afb902337383_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_761760f661e2c22d66035aee92de891e7cc041e5441108d3a455df0b96028c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761760f661e2c22d66035aee92de891e7cc041e5441108d3a455df0b96028c4c->enter($__internal_761760f661e2c22d66035aee92de891e7cc041e5441108d3a455df0b96028c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_761760f661e2c22d66035aee92de891e7cc041e5441108d3a455df0b96028c4c->leave($__internal_761760f661e2c22d66035aee92de891e7cc041e5441108d3a455df0b96028c4c_prof);

    }

    // line 42
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_d8570f4ea7c1af86a97e55cc44ad1cb0d368002a46ddee807ff89e82142eeff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8570f4ea7c1af86a97e55cc44ad1cb0d368002a46ddee807ff89e82142eeff9->enter($__internal_d8570f4ea7c1af86a97e55cc44ad1cb0d368002a46ddee807ff89e82142eeff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 43
        echo "\t\t\t<div id=\"menubar\">
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li><div><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Inicio", array(), "messages");
        echo "</a></div></li>
\t\t\t\t\t<li><div><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_recetas");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Recetas", array(), "messages");
        echo "</a></div></li>
\t\t\t\t\t<li><div><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_platos");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Platos", array(), "messages");
        echo "</a></div></li>
\t\t\t\t\t<li><div><a href=\"";
        // line 48
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_ingredientes");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Ingredientes", array(), "messages");
        echo "</a></div></li>
\t\t\t\t\t<li><div><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_contact");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Contacto", array(), "messages");
        echo "</a></div></li>
\t\t\t\t</ul>
\t\t\t</div> 
\t
\t\t\t";
        
        $__internal_d8570f4ea7c1af86a97e55cc44ad1cb0d368002a46ddee807ff89e82142eeff9->leave($__internal_d8570f4ea7c1af86a97e55cc44ad1cb0d368002a46ddee807ff89e82142eeff9_prof);

    }

    // line 59
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_2976053e35455c21e18dcbbabb5293ca59d76d5a1ef89108ee2a2ff8de61fe70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2976053e35455c21e18dcbbabb5293ca59d76d5a1ef89108ee2a2ff8de61fe70->enter($__internal_2976053e35455c21e18dcbbabb5293ca59d76d5a1ef89108ee2a2ff8de61fe70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_2976053e35455c21e18dcbbabb5293ca59d76d5a1ef89108ee2a2ff8de61fe70->leave($__internal_2976053e35455c21e18dcbbabb5293ca59d76d5a1ef89108ee2a2ff8de61fe70_prof);

    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e64bb428c4f6473423735845801f2142e35a4aea85892fd0f2149a9e45e8ac7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e64bb428c4f6473423735845801f2142e35a4aea85892fd0f2149a9e45e8ac7->enter($__internal_1e64bb428c4f6473423735845801f2142e35a4aea85892fd0f2149a9e45e8ac7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1e64bb428c4f6473423735845801f2142e35a4aea85892fd0f2149a9e45e8ac7->leave($__internal_1e64bb428c4f6473423735845801f2142e35a4aea85892fd0f2149a9e45e8ac7_prof);

    }

    // line 72
    public function block_footer($context, array $blocks = array())
    {
        $__internal_985579991178d0e7886ec8ea287db7ba4e528d1b1fa0e59fd4f051a35a6bd5db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985579991178d0e7886ec8ea287db7ba4e528d1b1fa0e59fd4f051a35a6bd5db->enter($__internal_985579991178d0e7886ec8ea287db7ba4e528d1b1fa0e59fd4f051a35a6bd5db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 73
        echo "\t\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Cocina f&aacute;cil - Creado como proyecto para Ingenier&iacute;a Web", array(), "messages");
        // line 74
        echo "\t\t\t";
        
        $__internal_985579991178d0e7886ec8ea287db7ba4e528d1b1fa0e59fd4f051a35a6bd5db->leave($__internal_985579991178d0e7886ec8ea287db7ba4e528d1b1fa0e59fd4f051a35a6bd5db_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bdc1253cde9c92f9c388aa23124f4044420977b598c46ae5ae100b2512a3ad0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc1253cde9c92f9c388aa23124f4044420977b598c46ae5ae100b2512a3ad0b->enter($__internal_bdc1253cde9c92f9c388aa23124f4044420977b598c46ae5ae100b2512a3ad0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "\t <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>

\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.lettering.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\t\$(function() {
\t\t\t\t\t\$(\"#letter-container h2 a\").lettering();
\t\t\t\t});
\t\t\t</script>

\t <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.34978.js"), "html", null, true);
        echo "\"></script>
\t <script>
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
        
        $__internal_bdc1253cde9c92f9c388aa23124f4044420977b598c46ae5ae100b2512a3ad0b->leave($__internal_bdc1253cde9c92f9c388aa23124f4044420977b598c46ae5ae100b2512a3ad0b_prof);

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
        return array (  274 => 90,  264 => 83,  257 => 80,  251 => 79,  244 => 74,  241 => 73,  235 => 72,  224 => 65,  213 => 59,  199 => 49,  193 => 48,  187 => 47,  181 => 46,  175 => 45,  171 => 43,  165 => 42,  153 => 5,  144 => 124,  142 => 79,  136 => 75,  134 => 72,  126 => 66,  124 => 65,  117 => 60,  115 => 59,  108 => 54,  106 => 42,  95 => 34,  89 => 31,  82 => 26,  75 => 24,  72 => 23,  64 => 22,  62 => 21,  56 => 18,  52 => 17,  41 => 9,  34 => 5,  28 => 1,);
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

\t<div>
\t<a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'es'}))}}\" class=\"idioma\">ES</a>
\t<a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en'}))}}\" class=\"idioma\">EN</a>
\t</div>

\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t<a href=\"{{ path('cooker_admin_logout')}}\" class=\"entrar\">{% trans %}Salir{% endtrans %}</a>
\t\t{% else %} 
\t\t\t<a href=\"{{ path('cooker_admin_login')}}\" class=\"entrar\">{% trans %}Iniciar sesi&oacute;n{% endtrans %}</a>
\t\t{% endif %}

\t\t<div id=\"header\">
\t\t\t<div id=\"logo\">

\t\t\t\t<div id=\"logo_text\">
\t\t\t\t\t<h1><a href=\"{{ path('cooker_cook_principal')}}\">Easy<span class=\"logo_colour\">_cooking</span></a></h1>
\t\t\t\t\t <div id=\"letter-container\" class=\"letter-container\">
\t\t\t\t\t<h2>
\t\t\t\t\t<a href=\"#\">{% trans %}\"El amor puede esperar, el hambre no\" Monkey D. Luffy{% endtrans %}</a>
\t\t\t\t\t</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t
\t\t\t<!-- Menú -->
\t\t\t{% block navigation %}
\t\t\t<div id=\"menubar\">
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li><div><a href=\"{{ path('cooker_cook_principal')}}\">{% trans %}Inicio{% endtrans %}</a></div></li>
\t\t\t\t\t<li><div><a href=\"{{ path('cooker_cook_recetas')}}\">{% trans %}Recetas{% endtrans %}</a></div></li>
\t\t\t\t\t<li><div><a href=\"{{ path('cooker_cook_platos')}}\">{% trans %}Platos{% endtrans %}</a></div></li>
\t\t\t\t\t<li><div><a href=\"{{ path('cooker_cook_ingredientes')}}\">{% trans %}Ingredientes{% endtrans %}</a></div></li>
\t\t\t\t\t<li><div><a href=\"{{ path('cooker_cook_contact')}}\">{% trans %}Contacto{% endtrans %}</a></div></li>
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
\t\t\t{% trans %}Cocina f&aacute;cil - Creado como proyecto para Ingenier&iacute;a Web{% endtrans %}
\t\t\t{% endblock %}
\t\t</div>

\t</div>

\t{% block javascripts %}
\t <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\"></script>

\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
\t\t\t<script src=\"{{ asset('js/jquery.lettering.js') }}\"></script>
\t\t\t<script>
\t\t\t\t\$(function() {
\t\t\t\t\t\$(\"#letter-container h2 a\").lettering();
\t\t\t\t});
\t\t\t</script>

\t <script src=\"{{ asset('js/modernizr.custom.34978.js') }}\"></script>
\t <script>
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
", "::base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app\\Resources\\views\\base.html.twig");
    }
}

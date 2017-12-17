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
        $__internal_c8faadce6c7d338e726c072a60725641b06b39eac96d6cf8f65ad8f9edd5ec39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8faadce6c7d338e726c072a60725641b06b39eac96d6cf8f65ad8f9edd5ec39->enter($__internal_c8faadce6c7d338e726c072a60725641b06b39eac96d6cf8f65ad8f9edd5ec39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "es"))), "html", null, true);
        echo "\" class=\"entrar\" style=\"float:left; margin-top:0px\">ES</a>
\t<a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
        echo "\" class=\"entrar\" style=\"float:left; margin-top:0px\">EN</a>
\t</div>
\t";
        // line 19
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 20
            echo "\t\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_admin_logout");
            echo "\" class=\"entrar\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Salir", array(), "messages");
            echo "</a>
\t\t";
        } else {
            // line 21
            echo " 
\t\t\t<a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_admin_login");
            echo "\" class=\"entrar\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Iniciar sesi&oacute;n", array(), "messages");
            echo "</a>
\t\t";
        }
        // line 24
        echo "
\t\t<div id=\"header\">
\t\t\t<div id=\"logo\">

\t\t\t\t<div id=\"logo_text\">
\t\t\t\t\t<h1><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Easy<span class=\"logo_colour\">_cooking</span></a></h1>
\t\t\t\t\t <div id=\"letter-container\" class=\"letter-container\">
\t\t\t\t\t<h2>
\t\t\t\t\t<a href=\"#\">";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("\"El amor puede esperar, el hambre no\" Monkey D. Luffy", array(), "messages");
        echo "</a>
\t\t\t\t\t</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t
\t\t\t<!-- Menú -->
\t\t\t";
        // line 40
        $this->displayBlock('navigation', $context, $blocks);
        // line 52
        echo "\t\t</div>

\t\t<div id=\"site_content\">
\t\t\t<div class=\"sidebar\">
\t\t\t\t<!-- Contenido lateral derecho -->
\t\t\t\t";
        // line 57
        $this->displayBlock('sidebar', $context, $blocks);
        // line 58
        echo "\t\t\t</div>

\t\t\t<div id=\"content\">
\t\t\t\t<!-- Contenido principal -->
\t\t\t\t<section class=\"main-col\">
\t\t\t\t\t";
        // line 63
        $this->displayBlock('body', $context, $blocks);
        // line 64
        echo "\t\t\t\t</section>
\t\t\t</div>
\t\t</div>

\t\t<!-- Pie de página -->
\t\t<div id=\"footer\">
\t\t\t";
        // line 70
        $this->displayBlock('footer', $context, $blocks);
        // line 73
        echo "\t\t</div>

\t</div>

\t";
        // line 77
        $this->displayBlock('javascripts', $context, $blocks);
        // line 122
        echo "</body>
</html>
";
        
        $__internal_c8faadce6c7d338e726c072a60725641b06b39eac96d6cf8f65ad8f9edd5ec39->leave($__internal_c8faadce6c7d338e726c072a60725641b06b39eac96d6cf8f65ad8f9edd5ec39_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_467878342b8924339a2d444b8896224544227a63fd8620fae28d61cce65f628f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_467878342b8924339a2d444b8896224544227a63fd8620fae28d61cce65f628f->enter($__internal_467878342b8924339a2d444b8896224544227a63fd8620fae28d61cce65f628f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_467878342b8924339a2d444b8896224544227a63fd8620fae28d61cce65f628f->leave($__internal_467878342b8924339a2d444b8896224544227a63fd8620fae28d61cce65f628f_prof);

    }

    // line 40
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_9a6a80c520dc3e91d2c0787bfec84a44b541d1438c55d270b9df16f77908f274 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a6a80c520dc3e91d2c0787bfec84a44b541d1438c55d270b9df16f77908f274->enter($__internal_9a6a80c520dc3e91d2c0787bfec84a44b541d1438c55d270b9df16f77908f274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 41
        echo "\t\t\t<div id=\"menubar\">
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li><div><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Inicio", array(), "messages");
        echo "</a></div></li>
\t\t\t\t\t<li><div><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_recetas");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Recetas", array(), "messages");
        echo "</a></div></li>
\t\t\t\t\t<li><div><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_platos");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Platos", array(), "messages");
        echo "</a></div></li>
\t\t\t\t\t<li><div><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_ingredientes");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Ingredientes", array(), "messages");
        echo "</a></div></li>
\t\t\t\t\t<li><div><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_contact");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Contacto", array(), "messages");
        echo "</a></div></li>
\t\t\t\t</ul>
\t\t\t</div> 
\t
\t\t\t";
        
        $__internal_9a6a80c520dc3e91d2c0787bfec84a44b541d1438c55d270b9df16f77908f274->leave($__internal_9a6a80c520dc3e91d2c0787bfec84a44b541d1438c55d270b9df16f77908f274_prof);

    }

    // line 57
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_abada2632e52c15c6ea480d0158c3641cb2ffdbbe5debd774e2dce48b65982cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abada2632e52c15c6ea480d0158c3641cb2ffdbbe5debd774e2dce48b65982cb->enter($__internal_abada2632e52c15c6ea480d0158c3641cb2ffdbbe5debd774e2dce48b65982cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_abada2632e52c15c6ea480d0158c3641cb2ffdbbe5debd774e2dce48b65982cb->leave($__internal_abada2632e52c15c6ea480d0158c3641cb2ffdbbe5debd774e2dce48b65982cb_prof);

    }

    // line 63
    public function block_body($context, array $blocks = array())
    {
        $__internal_c322a834a9a917fa79783dab78741e73ddf35a3885c862934bb6019c9a38522e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c322a834a9a917fa79783dab78741e73ddf35a3885c862934bb6019c9a38522e->enter($__internal_c322a834a9a917fa79783dab78741e73ddf35a3885c862934bb6019c9a38522e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c322a834a9a917fa79783dab78741e73ddf35a3885c862934bb6019c9a38522e->leave($__internal_c322a834a9a917fa79783dab78741e73ddf35a3885c862934bb6019c9a38522e_prof);

    }

    // line 70
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b17abf0a1578198ab18b35bf274c921697ea4f70d8638ce8aef470d2ef235921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b17abf0a1578198ab18b35bf274c921697ea4f70d8638ce8aef470d2ef235921->enter($__internal_b17abf0a1578198ab18b35bf274c921697ea4f70d8638ce8aef470d2ef235921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 71
        echo "\t\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Cocina f&aacute;cil - Creado como proyecto para Ingenier&iacute;a Web", array(), "messages");
        // line 72
        echo "\t\t\t";
        
        $__internal_b17abf0a1578198ab18b35bf274c921697ea4f70d8638ce8aef470d2ef235921->leave($__internal_b17abf0a1578198ab18b35bf274c921697ea4f70d8638ce8aef470d2ef235921_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_354a9b92ae17a899cd3b02761c570543c178df9bee9a4e2f6880093881fdd8dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_354a9b92ae17a899cd3b02761c570543c178df9bee9a4e2f6880093881fdd8dc->enter($__internal_354a9b92ae17a899cd3b02761c570543c178df9bee9a4e2f6880093881fdd8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 78
        echo "\t <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\"></script>

\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.lettering.js"), "html", null, true);
        echo "\"></script>
\t\t\t<script>
\t\t\t\t\$(function() {
\t\t\t\t\t\$(\"#letter-container h2 a\").lettering();
\t\t\t\t});
\t\t\t</script>

\t <script src=\"";
        // line 88
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
        
        $__internal_354a9b92ae17a899cd3b02761c570543c178df9bee9a4e2f6880093881fdd8dc->leave($__internal_354a9b92ae17a899cd3b02761c570543c178df9bee9a4e2f6880093881fdd8dc_prof);

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
        return array (  272 => 88,  262 => 81,  255 => 78,  249 => 77,  242 => 72,  239 => 71,  233 => 70,  222 => 63,  211 => 57,  197 => 47,  191 => 46,  185 => 45,  179 => 44,  173 => 43,  169 => 41,  163 => 40,  151 => 5,  142 => 122,  140 => 77,  134 => 73,  132 => 70,  124 => 64,  122 => 63,  115 => 58,  113 => 57,  106 => 52,  104 => 40,  93 => 32,  87 => 29,  80 => 24,  73 => 22,  70 => 21,  62 => 20,  60 => 19,  55 => 17,  51 => 16,  41 => 9,  34 => 5,  28 => 1,);
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
\t<a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'es'}))}}\" class=\"entrar\" style=\"float:left; margin-top:0px\">ES</a>
\t<a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en'}))}}\" class=\"entrar\" style=\"float:left; margin-top:0px\">EN</a>
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

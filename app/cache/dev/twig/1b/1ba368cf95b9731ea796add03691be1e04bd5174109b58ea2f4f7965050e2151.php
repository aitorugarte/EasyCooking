<?php

/* base.html.twig */
class __TwigTemplate_3cba105d67f4c2f02b1e76bb3e485f667e2db6a3de45cb55569460e16ee8c034 extends Twig_Template
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
        $__internal_e4edc971b05ba4aad4e627e58b019861b11173fd434dd15c9f471c48475c5daa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4edc971b05ba4aad4e627e58b019861b11173fd434dd15c9f471c48475c5daa->enter($__internal_e4edc971b05ba4aad4e627e58b019861b11173fd434dd15c9f471c48475c5daa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Easy<span class=\"logo_colour\">_cooking</span></a></h1>
\t\t\t\t\t <div id=\"letter-container\" class=\"letter-container\">
\t\t\t\t\t<h2>
\t\t\t\t\t<a href=\"#\">\"El amor puede esperar, el hambre no\" Monkey D. Luffy</a>
\t\t\t\t\t</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- Menú -->
\t\t\t<div id=\"menubar\">
\t\t\t";
        // line 33
        $this->displayBlock('navigation', $context, $blocks);
        // line 35
        echo "\t\t\t</div> 

\t\t<div id=\"site_content\">
\t\t\t<div class=\"sidebar\">
\t\t\t\t<!-- Contenido lateral derecho -->
\t\t\t\t";
        // line 40
        $this->displayBlock('sidebar', $context, $blocks);
        // line 41
        echo "\t\t\t</div>

\t\t\t<div id=\"content\">
\t\t\t\t<!-- Contenido principal -->
\t\t\t\t<section class=\"main-col\">
\t\t\t\t\t";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "\t\t\t\t</section>
\t\t\t</div>
\t\t</div>

\t\t<!-- Pie de página -->
\t\t<div id=\"footer\">
\t\t\t";
        // line 53
        $this->displayBlock('footer', $context, $blocks);
        // line 56
        echo "\t\t</div>

\t</div>

\t";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
        echo "</body>
</html>
";
        
        $__internal_e4edc971b05ba4aad4e627e58b019861b11173fd434dd15c9f471c48475c5daa->leave($__internal_e4edc971b05ba4aad4e627e58b019861b11173fd434dd15c9f471c48475c5daa_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b20577c3152eb28bf89238d6e985b94451aeb0421c92d9e1589de7d498e975f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b20577c3152eb28bf89238d6e985b94451aeb0421c92d9e1589de7d498e975f->enter($__internal_5b20577c3152eb28bf89238d6e985b94451aeb0421c92d9e1589de7d498e975f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_5b20577c3152eb28bf89238d6e985b94451aeb0421c92d9e1589de7d498e975f->leave($__internal_5b20577c3152eb28bf89238d6e985b94451aeb0421c92d9e1589de7d498e975f_prof);

    }

    // line 33
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_48c5424a8416bc12f686959172f76ae8604806c15594068bcd9afe455b559be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48c5424a8416bc12f686959172f76ae8604806c15594068bcd9afe455b559be7->enter($__internal_48c5424a8416bc12f686959172f76ae8604806c15594068bcd9afe455b559be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 34
        echo "\t\t\t";
        
        $__internal_48c5424a8416bc12f686959172f76ae8604806c15594068bcd9afe455b559be7->leave($__internal_48c5424a8416bc12f686959172f76ae8604806c15594068bcd9afe455b559be7_prof);

    }

    // line 40
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_de5283cac319a777ad1010d2dd879c9913541abc4c0c1f8943ad69874e611798 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5283cac319a777ad1010d2dd879c9913541abc4c0c1f8943ad69874e611798->enter($__internal_de5283cac319a777ad1010d2dd879c9913541abc4c0c1f8943ad69874e611798_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_de5283cac319a777ad1010d2dd879c9913541abc4c0c1f8943ad69874e611798->leave($__internal_de5283cac319a777ad1010d2dd879c9913541abc4c0c1f8943ad69874e611798_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_1588aeb86aaf99d8e5414bb3e3184e443277408440d77ac0fc2f59b481e413b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1588aeb86aaf99d8e5414bb3e3184e443277408440d77ac0fc2f59b481e413b3->enter($__internal_1588aeb86aaf99d8e5414bb3e3184e443277408440d77ac0fc2f59b481e413b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1588aeb86aaf99d8e5414bb3e3184e443277408440d77ac0fc2f59b481e413b3->leave($__internal_1588aeb86aaf99d8e5414bb3e3184e443277408440d77ac0fc2f59b481e413b3_prof);

    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b8191b12efe833f65744d9e340be1c9c65578076cb955a51ed754ed4332d8ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8191b12efe833f65744d9e340be1c9c65578076cb955a51ed754ed4332d8ee7->enter($__internal_b8191b12efe833f65744d9e340be1c9c65578076cb955a51ed754ed4332d8ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 54
        echo "\t\t\tCocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web
\t\t\t";
        
        $__internal_b8191b12efe833f65744d9e340be1c9c65578076cb955a51ed754ed4332d8ee7->leave($__internal_b8191b12efe833f65744d9e340be1c9c65578076cb955a51ed754ed4332d8ee7_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3f925c6b1f153c5b722819d12826f5b292a3d4acf120f90e06ba0ea11bc1ac9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f925c6b1f153c5b722819d12826f5b292a3d4acf120f90e06ba0ea11bc1ac9c->enter($__internal_3f925c6b1f153c5b722819d12826f5b292a3d4acf120f90e06ba0ea11bc1ac9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "\t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.lettering.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(function() {
\t\t\t\t\t\$(\"#letter-container h2 a\").lettering();
\t\t\t\t});
\t\t\t</script

\t <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t <script src=\"";
        // line 70
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
        
        $__internal_3f925c6b1f153c5b722819d12826f5b292a3d4acf120f90e06ba0ea11bc1ac9c->leave($__internal_3f925c6b1f153c5b722819d12826f5b292a3d4acf120f90e06ba0ea11bc1ac9c_prof);

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
        return array (  202 => 70,  198 => 69,  188 => 62,  185 => 61,  179 => 60,  171 => 54,  165 => 53,  154 => 46,  143 => 40,  136 => 34,  130 => 33,  118 => 5,  109 => 104,  107 => 60,  101 => 56,  99 => 53,  91 => 47,  89 => 46,  82 => 41,  80 => 40,  73 => 35,  71 => 33,  56 => 21,  41 => 9,  34 => 5,  28 => 1,);
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
\t\t\t\t\t <div id=\"letter-container\" class=\"letter-container\">
\t\t\t\t\t<h2>
\t\t\t\t\t<a href=\"#\">\"El amor puede esperar, el hambre no\" Monkey D. Luffy</a>
\t\t\t\t\t</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- Menú -->
\t\t\t<div id=\"menubar\">
\t\t\t{% block navigation %}
\t\t\t{% endblock %}
\t\t\t</div> 

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
", "base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app\\Resources\\views\\base.html.twig");
    }
}

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
        $__internal_1d5375374a5bad163d33915b55f85e4c523c90b24032c1a5ea8f0c15561e2993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d5375374a5bad163d33915b55f85e4c523c90b24032c1a5ea8f0c15561e2993->enter($__internal_1d5375374a5bad163d33915b55f85e4c523c90b24032c1a5ea8f0c15561e2993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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

\t\t\t<!-- Men� -->
\t\t\t";
        // line 32
        $this->displayBlock('navigation', $context, $blocks);
        // line 44
        echo "\t\t</div>

\t\t<div id=\"site_content\">
\t\t\t<div class=\"sidebar\">
\t\t\t\t<!-- Contenido lateral derecho -->
\t\t\t\t";
        // line 49
        $this->displayBlock('sidebar', $context, $blocks);
        // line 50
        echo "\t\t\t</div>

\t\t\t<div id=\"content\">
\t\t\t\t<!-- Contenido principal -->
\t\t\t\t<section class=\"main-col\">
\t\t\t\t\t";
        // line 55
        $this->displayBlock('body', $context, $blocks);
        // line 56
        echo "\t\t\t\t</section>
\t\t\t</div>
\t\t</div>

\t\t<!-- Pie de p�gina -->
\t\t<div id=\"footer\">
\t\t\t";
        // line 62
        $this->displayBlock('footer', $context, $blocks);
        // line 65
        echo "\t\t</div>

\t</div>

\t";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 113
        echo "</body>
</html>
";
        
        $__internal_1d5375374a5bad163d33915b55f85e4c523c90b24032c1a5ea8f0c15561e2993->leave($__internal_1d5375374a5bad163d33915b55f85e4c523c90b24032c1a5ea8f0c15561e2993_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b5c7b0f9d6a1f8c1d27eccfc65af12af42383f24b1f4df6faec7075c136f580e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5c7b0f9d6a1f8c1d27eccfc65af12af42383f24b1f4df6faec7075c136f580e->enter($__internal_b5c7b0f9d6a1f8c1d27eccfc65af12af42383f24b1f4df6faec7075c136f580e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_b5c7b0f9d6a1f8c1d27eccfc65af12af42383f24b1f4df6faec7075c136f580e->leave($__internal_b5c7b0f9d6a1f8c1d27eccfc65af12af42383f24b1f4df6faec7075c136f580e_prof);

    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_397812a205868fca634d0c26a76e2e48a1d18c68b7b9d535db879b52c2b6217c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_397812a205868fca634d0c26a76e2e48a1d18c68b7b9d535db879b52c2b6217c->enter($__internal_397812a205868fca634d0c26a76e2e48a1d18c68b7b9d535db879b52c2b6217c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 33
        echo "\t\t\t<div id=\"menubar\">
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li class=\"selected\"><div><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Inicio</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_recetas");
        echo "\">Recetas</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_platos");
        echo "\">Platos</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_ingredientes");
        echo "\">Ingredientes</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_contact");
        echo "\">Contacto</a><div></li>
\t\t\t\t</ul>
\t\t\t</div> 
\t
\t\t\t";
        
        $__internal_397812a205868fca634d0c26a76e2e48a1d18c68b7b9d535db879b52c2b6217c->leave($__internal_397812a205868fca634d0c26a76e2e48a1d18c68b7b9d535db879b52c2b6217c_prof);

    }

    // line 49
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_297ebeb585c2777d010426a8472d364ab16cca7df40f982c6f112427478a4101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_297ebeb585c2777d010426a8472d364ab16cca7df40f982c6f112427478a4101->enter($__internal_297ebeb585c2777d010426a8472d364ab16cca7df40f982c6f112427478a4101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_297ebeb585c2777d010426a8472d364ab16cca7df40f982c6f112427478a4101->leave($__internal_297ebeb585c2777d010426a8472d364ab16cca7df40f982c6f112427478a4101_prof);

    }

    // line 55
    public function block_body($context, array $blocks = array())
    {
        $__internal_093821481ce7e766aa08fa75741ad5357e07943eccc8991fe0a1e47041c21dae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_093821481ce7e766aa08fa75741ad5357e07943eccc8991fe0a1e47041c21dae->enter($__internal_093821481ce7e766aa08fa75741ad5357e07943eccc8991fe0a1e47041c21dae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_093821481ce7e766aa08fa75741ad5357e07943eccc8991fe0a1e47041c21dae->leave($__internal_093821481ce7e766aa08fa75741ad5357e07943eccc8991fe0a1e47041c21dae_prof);

    }

    // line 62
    public function block_footer($context, array $blocks = array())
    {
        $__internal_884209322d3e9a02133a2cfe9502fd6e11fbeef97850316bf004f1bbeb2870f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_884209322d3e9a02133a2cfe9502fd6e11fbeef97850316bf004f1bbeb2870f6->enter($__internal_884209322d3e9a02133a2cfe9502fd6e11fbeef97850316bf004f1bbeb2870f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 63
        echo "\t\t\tCocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web
\t\t\t";
        
        $__internal_884209322d3e9a02133a2cfe9502fd6e11fbeef97850316bf004f1bbeb2870f6->leave($__internal_884209322d3e9a02133a2cfe9502fd6e11fbeef97850316bf004f1bbeb2870f6_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_427ad83e23f7ed2b60e08deaee718a847ab3708680717cac9cc8d201c3229e74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_427ad83e23f7ed2b60e08deaee718a847ab3708680717cac9cc8d201c3229e74->enter($__internal_427ad83e23f7ed2b60e08deaee718a847ab3708680717cac9cc8d201c3229e74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "\t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.lettering.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(function() {
\t\t\t\t\t\$(\"#letter-container h2 a\").lettering();
\t\t\t\t});
\t\t\t</script

\t <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t <script src=\"";
        // line 79
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
        
        $__internal_427ad83e23f7ed2b60e08deaee718a847ab3708680717cac9cc8d201c3229e74->leave($__internal_427ad83e23f7ed2b60e08deaee718a847ab3708680717cac9cc8d201c3229e74_prof);

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
        return array (  226 => 79,  222 => 78,  212 => 71,  209 => 70,  203 => 69,  195 => 63,  189 => 62,  178 => 55,  167 => 49,  155 => 39,  151 => 38,  147 => 37,  143 => 36,  139 => 35,  135 => 33,  129 => 32,  117 => 5,  108 => 113,  106 => 69,  100 => 65,  98 => 62,  90 => 56,  88 => 55,  81 => 50,  79 => 49,  72 => 44,  70 => 32,  55 => 20,  41 => 9,  34 => 5,  28 => 1,);
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

\t\t\t<!-- Men� -->
\t\t\t{% block navigation %}
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

\t\t<!-- Pie de p�gina -->
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
", "::base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app\\Resources\\views\\base.html.twig");
    }
}

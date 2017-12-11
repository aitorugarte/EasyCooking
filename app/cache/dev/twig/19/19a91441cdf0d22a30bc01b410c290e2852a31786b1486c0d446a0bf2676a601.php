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
        $__internal_95944d4dc792f504d078d5c8c0aef49b71f5cf157bb3ab5a5b6295cb69b6a58c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95944d4dc792f504d078d5c8c0aef49b71f5cf157bb3ab5a5b6295cb69b6a58c->enter($__internal_95944d4dc792f504d078d5c8c0aef49b71f5cf157bb3ab5a5b6295cb69b6a58c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
\t\t\t\t\t <div id=\"letter-container\" class=\"letter-container\">
\t\t\t\t\t<h2>
\t\t\t\t\t<a href=\"#\">\"El amor puede esperar, el hambre no\" Monkey D. Luffy</a>
\t\t\t\t\t</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- Menú -->
\t\t\t";
        // line 31
        $this->displayBlock('navigation', $context, $blocks);
        // line 46
        echo "\t\t</div>

\t\t<div id=\"site_content\">
\t\t\t<div class=\"sidebar\">
\t\t\t\t<!-- Contenido lateral derecho -->
\t\t\t\t";
        // line 51
        $this->displayBlock('sidebar', $context, $blocks);
        // line 52
        echo "\t\t\t</div>

\t\t\t<div id=\"content\">
\t\t\t\t<!-- Contenido principal -->
\t\t\t\t<section class=\"main-col\">
\t\t\t\t\t";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "\t\t\t\t</section>
\t\t\t</div>
\t\t</div>

\t\t<!-- Pie de página -->
\t\t<div id=\"footer\">
\t\t\t";
        // line 64
        $this->displayBlock('footer', $context, $blocks);
        // line 67
        echo "\t\t</div>

\t</div>

\t";
        // line 71
        $this->displayBlock('javascripts', $context, $blocks);
        // line 115
        echo "</body>
</html>
";
        
        $__internal_95944d4dc792f504d078d5c8c0aef49b71f5cf157bb3ab5a5b6295cb69b6a58c->leave($__internal_95944d4dc792f504d078d5c8c0aef49b71f5cf157bb3ab5a5b6295cb69b6a58c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c1a17f5b719c70314989f59c182bac558681b6e0e7f0e3809d744cc9861a4c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1a17f5b719c70314989f59c182bac558681b6e0e7f0e3809d744cc9861a4c74->enter($__internal_c1a17f5b719c70314989f59c182bac558681b6e0e7f0e3809d744cc9861a4c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_c1a17f5b719c70314989f59c182bac558681b6e0e7f0e3809d744cc9861a4c74->leave($__internal_c1a17f5b719c70314989f59c182bac558681b6e0e7f0e3809d744cc9861a4c74_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_ee34144ebe030509103f2be3eddbda9dd869ba649bccd06bd2268ad1d9d6c0f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee34144ebe030509103f2be3eddbda9dd869ba649bccd06bd2268ad1d9d6c0f4->enter($__internal_ee34144ebe030509103f2be3eddbda9dd869ba649bccd06bd2268ad1d9d6c0f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 32
        echo "\t\t\t";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 33
            echo "\t\t\t<li><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_admin_logout");
            echo "\">Salir</a></li>
\t\t\t";
        }
        // line 35
        echo "\t\t\t<div id=\"menubar\">
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li class=\"selected\"><div><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Inicio</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_recetas");
        echo "\">Recetas</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_platos");
        echo "\">Platos</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_ingredientes");
        echo "\">Ingredientes</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_contact");
        echo "\">Contacto</a><div></li>
\t\t\t\t</ul>
\t\t\t</div> 
\t
\t\t\t";
        
        $__internal_ee34144ebe030509103f2be3eddbda9dd869ba649bccd06bd2268ad1d9d6c0f4->leave($__internal_ee34144ebe030509103f2be3eddbda9dd869ba649bccd06bd2268ad1d9d6c0f4_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_36297f6e64465783598d20d8d082966f757157176c63201be4d387d2f6e39525 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36297f6e64465783598d20d8d082966f757157176c63201be4d387d2f6e39525->enter($__internal_36297f6e64465783598d20d8d082966f757157176c63201be4d387d2f6e39525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_36297f6e64465783598d20d8d082966f757157176c63201be4d387d2f6e39525->leave($__internal_36297f6e64465783598d20d8d082966f757157176c63201be4d387d2f6e39525_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_d92000200af0e28ff95e4fefcb85fc7f909db5bf819d61d739fb317a130328c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92000200af0e28ff95e4fefcb85fc7f909db5bf819d61d739fb317a130328c6->enter($__internal_d92000200af0e28ff95e4fefcb85fc7f909db5bf819d61d739fb317a130328c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d92000200af0e28ff95e4fefcb85fc7f909db5bf819d61d739fb317a130328c6->leave($__internal_d92000200af0e28ff95e4fefcb85fc7f909db5bf819d61d739fb317a130328c6_prof);

    }

    // line 64
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ca782302a1ef5dae83e53a2b761ee233f7ee913241b7a520cf561cc64afb2079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca782302a1ef5dae83e53a2b761ee233f7ee913241b7a520cf561cc64afb2079->enter($__internal_ca782302a1ef5dae83e53a2b761ee233f7ee913241b7a520cf561cc64afb2079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 65
        echo "\t\t\tCocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web
\t\t\t";
        
        $__internal_ca782302a1ef5dae83e53a2b761ee233f7ee913241b7a520cf561cc64afb2079->leave($__internal_ca782302a1ef5dae83e53a2b761ee233f7ee913241b7a520cf561cc64afb2079_prof);

    }

    // line 71
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ac64a6208bcdcd99092b928c9453ba5c141d835e70e94c51efd14b36ea2bbc32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac64a6208bcdcd99092b928c9453ba5c141d835e70e94c51efd14b36ea2bbc32->enter($__internal_ac64a6208bcdcd99092b928c9453ba5c141d835e70e94c51efd14b36ea2bbc32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 72
        echo "\t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.lettering.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(function() {
\t\t\t\t\t\$(\"#letter-container h2 a\").lettering();
\t\t\t\t});
\t\t\t</script

\t <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t <script src=\"";
        // line 81
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
        
        $__internal_ac64a6208bcdcd99092b928c9453ba5c141d835e70e94c51efd14b36ea2bbc32->leave($__internal_ac64a6208bcdcd99092b928c9453ba5c141d835e70e94c51efd14b36ea2bbc32_prof);

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
        return array (  234 => 81,  230 => 80,  220 => 73,  217 => 72,  211 => 71,  203 => 65,  197 => 64,  186 => 57,  175 => 51,  163 => 41,  159 => 40,  155 => 39,  151 => 38,  147 => 37,  143 => 35,  137 => 33,  134 => 32,  128 => 31,  116 => 5,  107 => 115,  105 => 71,  99 => 67,  97 => 64,  89 => 58,  87 => 57,  80 => 52,  78 => 51,  71 => 46,  69 => 31,  55 => 20,  41 => 9,  34 => 5,  28 => 1,);
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

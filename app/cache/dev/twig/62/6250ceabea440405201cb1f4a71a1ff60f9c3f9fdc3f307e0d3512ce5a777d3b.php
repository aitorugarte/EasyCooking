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
        $__internal_65f8740f8899dff6adf3488691570d50006dd5935d801dcfa8335291f960277d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65f8740f8899dff6adf3488691570d50006dd5935d801dcfa8335291f960277d->enter($__internal_65f8740f8899dff6adf3488691570d50006dd5935d801dcfa8335291f960277d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 48
        echo "\t\t</div>

\t\t<div id=\"site_content\">
\t\t\t<div class=\"sidebar\">
\t\t\t\t<!-- Contenido lateral derecho -->
\t\t\t\t";
        // line 53
        $this->displayBlock('sidebar', $context, $blocks);
        // line 54
        echo "\t\t\t</div>

\t\t\t<div id=\"content\">
\t\t\t\t<!-- Contenido principal -->
\t\t\t\t<section class=\"main-col\">
\t\t\t\t\t";
        // line 59
        $this->displayBlock('body', $context, $blocks);
        // line 60
        echo "\t\t\t\t</section>
\t\t\t</div>
\t\t</div>

\t\t<!-- Pie de página -->
\t\t<div id=\"footer\">
\t\t\t";
        // line 66
        $this->displayBlock('footer', $context, $blocks);
        // line 69
        echo "\t\t</div>

\t</div>

\t";
        // line 73
        $this->displayBlock('javascripts', $context, $blocks);
        // line 117
        echo "</body>
</html>
";
        
        $__internal_65f8740f8899dff6adf3488691570d50006dd5935d801dcfa8335291f960277d->leave($__internal_65f8740f8899dff6adf3488691570d50006dd5935d801dcfa8335291f960277d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5fb77e09d4322ef4bf04d48f834de3b6a0a3c7cd03ffc9f33d3a222f656f6342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fb77e09d4322ef4bf04d48f834de3b6a0a3c7cd03ffc9f33d3a222f656f6342->enter($__internal_5fb77e09d4322ef4bf04d48f834de3b6a0a3c7cd03ffc9f33d3a222f656f6342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_5fb77e09d4322ef4bf04d48f834de3b6a0a3c7cd03ffc9f33d3a222f656f6342->leave($__internal_5fb77e09d4322ef4bf04d48f834de3b6a0a3c7cd03ffc9f33d3a222f656f6342_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_0a3710be8ac246253a0105016c0972bc9b780d0afa1d7007bb7a34b6a2ee1fc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a3710be8ac246253a0105016c0972bc9b780d0afa1d7007bb7a34b6a2ee1fc1->enter($__internal_0a3710be8ac246253a0105016c0972bc9b780d0afa1d7007bb7a34b6a2ee1fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 32
        echo "\t\t\t<div id=\"menubar\">
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li class=\"selected\"><div><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Inicio</a></div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_recetas");
        echo "\">Recetas</a></div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_platos");
        echo "\">Platos</a></div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 37
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_ingredientes");
        echo "\">Ingredientes</a></div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_contact");
        echo "\">Contacto</a></div></li>
\t\t\t\t\t";
        // line 39
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 40
            echo "\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_admin_logout");
            echo "\">Salir</a></div></li>
\t\t\t\t\t";
        } else {
            // line 41
            echo " 
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
            // line 42
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_admin_login");
            echo "\">Entrar</a></div></li>
\t\t\t\t\t";
        }
        // line 44
        echo "\t\t\t\t</ul>
\t\t\t</div> 
\t
\t\t\t";
        
        $__internal_0a3710be8ac246253a0105016c0972bc9b780d0afa1d7007bb7a34b6a2ee1fc1->leave($__internal_0a3710be8ac246253a0105016c0972bc9b780d0afa1d7007bb7a34b6a2ee1fc1_prof);

    }

    // line 53
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9533b9cc984676aac4e86b096a6513470e1b98055dd3effc9d6df12f9c29dc5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9533b9cc984676aac4e86b096a6513470e1b98055dd3effc9d6df12f9c29dc5d->enter($__internal_9533b9cc984676aac4e86b096a6513470e1b98055dd3effc9d6df12f9c29dc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_9533b9cc984676aac4e86b096a6513470e1b98055dd3effc9d6df12f9c29dc5d->leave($__internal_9533b9cc984676aac4e86b096a6513470e1b98055dd3effc9d6df12f9c29dc5d_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7af555e1ba17dcbbb469d27632ef4619fb3fc7d3759cb41bf143c095b4c63b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7af555e1ba17dcbbb469d27632ef4619fb3fc7d3759cb41bf143c095b4c63b9->enter($__internal_c7af555e1ba17dcbbb469d27632ef4619fb3fc7d3759cb41bf143c095b4c63b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c7af555e1ba17dcbbb469d27632ef4619fb3fc7d3759cb41bf143c095b4c63b9->leave($__internal_c7af555e1ba17dcbbb469d27632ef4619fb3fc7d3759cb41bf143c095b4c63b9_prof);

    }

    // line 66
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e962a469798670dc979f0fc55abd8bec51017e59eab68926a54fd49c69b1731b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e962a469798670dc979f0fc55abd8bec51017e59eab68926a54fd49c69b1731b->enter($__internal_e962a469798670dc979f0fc55abd8bec51017e59eab68926a54fd49c69b1731b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 67
        echo "\t\t\tCocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web
\t\t\t";
        
        $__internal_e962a469798670dc979f0fc55abd8bec51017e59eab68926a54fd49c69b1731b->leave($__internal_e962a469798670dc979f0fc55abd8bec51017e59eab68926a54fd49c69b1731b_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_acfedf98c27d82063d942ea526b43565763f566a879fc508b83bce18076506aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acfedf98c27d82063d942ea526b43565763f566a879fc508b83bce18076506aa->enter($__internal_acfedf98c27d82063d942ea526b43565763f566a879fc508b83bce18076506aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 74
        echo "\t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.lettering.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(function() {
\t\t\t\t\t\$(\"#letter-container h2 a\").lettering();
\t\t\t\t});
\t\t\t</script

\t <script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t <script src=\"";
        // line 83
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
        
        $__internal_acfedf98c27d82063d942ea526b43565763f566a879fc508b83bce18076506aa->leave($__internal_acfedf98c27d82063d942ea526b43565763f566a879fc508b83bce18076506aa_prof);

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
        return array (  243 => 83,  239 => 82,  229 => 75,  226 => 74,  220 => 73,  212 => 67,  206 => 66,  195 => 59,  184 => 53,  174 => 44,  169 => 42,  166 => 41,  160 => 40,  158 => 39,  154 => 38,  150 => 37,  146 => 36,  142 => 35,  138 => 34,  134 => 32,  128 => 31,  116 => 5,  107 => 117,  105 => 73,  99 => 69,  97 => 66,  89 => 60,  87 => 59,  80 => 54,  78 => 53,  71 => 48,  69 => 31,  55 => 20,  41 => 9,  34 => 5,  28 => 1,);
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
\t\t\t<div id=\"menubar\">
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li class=\"selected\"><div><a href=\"{{ path('cooker_cook_principal')}}\">Inicio</a></div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"{{ path('cooker_cook_recetas')}}\">Recetas</a></div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"{{ path('cooker_cook_platos')}}\">Platos</a></div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"{{ path('cooker_cook_ingredientes')}}\">Ingredientes</a></div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"{{ path('cooker_cook_contact')}}\">Contacto</a></div></li>
\t\t\t\t\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t\t\t<li class=\"li2\"><div><a href=\"{{ path('cooker_admin_logout')}}\">Salir</a></div></li>
\t\t\t\t\t{% else %} 
\t\t\t\t\t<li class=\"li2\"><div><a href=\"{{ path('cooker_admin_login')}}\">Entrar</a></div></li>
\t\t\t\t\t{% endif %}
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
", "::base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app\\Resources\\views\\base.html.twig");
    }
}

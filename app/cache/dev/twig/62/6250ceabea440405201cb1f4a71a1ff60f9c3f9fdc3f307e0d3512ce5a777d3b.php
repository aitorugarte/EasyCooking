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
        $__internal_6dae00676c1ddf778d3b7c122f0b567df943e1d77e1f6c32539ae6d620c2ca2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dae00676c1ddf778d3b7c122f0b567df943e1d77e1f6c32539ae6d620c2ca2b->enter($__internal_6dae00676c1ddf778d3b7c122f0b567df943e1d77e1f6c32539ae6d620c2ca2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_6dae00676c1ddf778d3b7c122f0b567df943e1d77e1f6c32539ae6d620c2ca2b->leave($__internal_6dae00676c1ddf778d3b7c122f0b567df943e1d77e1f6c32539ae6d620c2ca2b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d63a6f89f97c60a59b8a0bc732fe7d6161b7b086c5a138906e301c478dfb0f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d63a6f89f97c60a59b8a0bc732fe7d6161b7b086c5a138906e301c478dfb0f6->enter($__internal_7d63a6f89f97c60a59b8a0bc732fe7d6161b7b086c5a138906e301c478dfb0f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_7d63a6f89f97c60a59b8a0bc732fe7d6161b7b086c5a138906e301c478dfb0f6->leave($__internal_7d63a6f89f97c60a59b8a0bc732fe7d6161b7b086c5a138906e301c478dfb0f6_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_96934a747cf9ebdb1c68bd1fe9c0b4f2895b5e6d53d267f1b7037c0a3b426a7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96934a747cf9ebdb1c68bd1fe9c0b4f2895b5e6d53d267f1b7037c0a3b426a7b->enter($__internal_96934a747cf9ebdb1c68bd1fe9c0b4f2895b5e6d53d267f1b7037c0a3b426a7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_96934a747cf9ebdb1c68bd1fe9c0b4f2895b5e6d53d267f1b7037c0a3b426a7b->leave($__internal_96934a747cf9ebdb1c68bd1fe9c0b4f2895b5e6d53d267f1b7037c0a3b426a7b_prof);

    }

    // line 53
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_86ea938e5706440e6da16a5b44b8f42d35e6d11613d188c918d4f18240dff4ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86ea938e5706440e6da16a5b44b8f42d35e6d11613d188c918d4f18240dff4ed->enter($__internal_86ea938e5706440e6da16a5b44b8f42d35e6d11613d188c918d4f18240dff4ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_86ea938e5706440e6da16a5b44b8f42d35e6d11613d188c918d4f18240dff4ed->leave($__internal_86ea938e5706440e6da16a5b44b8f42d35e6d11613d188c918d4f18240dff4ed_prof);

    }

    // line 59
    public function block_body($context, array $blocks = array())
    {
        $__internal_63255ad5019dbec80093a7b51f7c49337733d86c3b8b908fd9bbaef6b85cb0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63255ad5019dbec80093a7b51f7c49337733d86c3b8b908fd9bbaef6b85cb0d0->enter($__internal_63255ad5019dbec80093a7b51f7c49337733d86c3b8b908fd9bbaef6b85cb0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_63255ad5019dbec80093a7b51f7c49337733d86c3b8b908fd9bbaef6b85cb0d0->leave($__internal_63255ad5019dbec80093a7b51f7c49337733d86c3b8b908fd9bbaef6b85cb0d0_prof);

    }

    // line 66
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6be95d11fe0cc1f6af1d2c2ca1bd2b1f85fbc54eec1c034c970c91ec653294db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be95d11fe0cc1f6af1d2c2ca1bd2b1f85fbc54eec1c034c970c91ec653294db->enter($__internal_6be95d11fe0cc1f6af1d2c2ca1bd2b1f85fbc54eec1c034c970c91ec653294db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 67
        echo "\t\t\tCocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web
\t\t\t";
        
        $__internal_6be95d11fe0cc1f6af1d2c2ca1bd2b1f85fbc54eec1c034c970c91ec653294db->leave($__internal_6be95d11fe0cc1f6af1d2c2ca1bd2b1f85fbc54eec1c034c970c91ec653294db_prof);

    }

    // line 73
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b969465482f9b7ac31888565bb7aa2c5be7c8c28757043af7c6cc3238398546e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b969465482f9b7ac31888565bb7aa2c5be7c8c28757043af7c6cc3238398546e->enter($__internal_b969465482f9b7ac31888565bb7aa2c5be7c8c28757043af7c6cc3238398546e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b969465482f9b7ac31888565bb7aa2c5be7c8c28757043af7c6cc3238398546e->leave($__internal_b969465482f9b7ac31888565bb7aa2c5be7c8c28757043af7c6cc3238398546e_prof);

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

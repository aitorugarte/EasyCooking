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
        $__internal_fe874b74e92644c4dfa1012468034a410e6634f32d855a87657bde9a0caf2231 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe874b74e92644c4dfa1012468034a410e6634f32d855a87657bde9a0caf2231->enter($__internal_fe874b74e92644c4dfa1012468034a410e6634f32d855a87657bde9a0caf2231_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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

\t";
        // line 16
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 17
            echo "\t\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_admin_logout");
            echo "\" class=\"entrar\">Salir</a>
\t\t";
        } else {
            // line 18
            echo " 
\t\t\t<a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_admin_login");
            echo "\" class=\"entrar\">Iniciar sesi&oacuten</a>
\t\t";
        }
        // line 21
        echo "
\t\t<div id=\"header\">
\t\t\t<div id=\"logo\">

\t\t\t\t<div id=\"logo_text\">
\t\t\t\t\t<h1><a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Easy<span class=\"logo_colour\">_cooking</span></a></h1>
\t\t\t\t\t <div id=\"letter-container\" class=\"letter-container\">
\t\t\t\t\t<h2>
\t\t\t\t\t<a href=\"#\">\"El amor puede esperar, el hambre no\" Monkey D. Luffy</a>
\t\t\t\t\t</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>
\t\t\t
\t\t\t<!-- Menú -->
\t\t\t";
        // line 37
        $this->displayBlock('navigation', $context, $blocks);
        // line 49
        echo "\t\t</div>

\t\t<div id=\"site_content\">
\t\t\t<div class=\"sidebar\">
\t\t\t\t<!-- Contenido lateral derecho -->
\t\t\t\t";
        // line 54
        $this->displayBlock('sidebar', $context, $blocks);
        // line 55
        echo "\t\t\t</div>

\t\t\t<div id=\"content\">
\t\t\t\t<!-- Contenido principal -->
\t\t\t\t<section class=\"main-col\">
\t\t\t\t\t";
        // line 60
        $this->displayBlock('body', $context, $blocks);
        // line 61
        echo "\t\t\t\t</section>
\t\t\t</div>
\t\t</div>

\t\t<!-- Pie de página -->
\t\t<div id=\"footer\">
\t\t\t";
        // line 67
        $this->displayBlock('footer', $context, $blocks);
        // line 70
        echo "\t\t</div>

\t</div>

\t";
        // line 74
        $this->displayBlock('javascripts', $context, $blocks);
        // line 119
        echo "</body>
</html>
";
        
        $__internal_fe874b74e92644c4dfa1012468034a410e6634f32d855a87657bde9a0caf2231->leave($__internal_fe874b74e92644c4dfa1012468034a410e6634f32d855a87657bde9a0caf2231_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_554db51a2b0e38cbda6b018554c5d0946b0309c992c7c64c5822cc988b835882 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_554db51a2b0e38cbda6b018554c5d0946b0309c992c7c64c5822cc988b835882->enter($__internal_554db51a2b0e38cbda6b018554c5d0946b0309c992c7c64c5822cc988b835882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_554db51a2b0e38cbda6b018554c5d0946b0309c992c7c64c5822cc988b835882->leave($__internal_554db51a2b0e38cbda6b018554c5d0946b0309c992c7c64c5822cc988b835882_prof);

    }

    // line 37
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_1e14c8bb7819f2d8b7232b9e1204d77adffc7ccaa22e4ba06e48f4908c4a3370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e14c8bb7819f2d8b7232b9e1204d77adffc7ccaa22e4ba06e48f4908c4a3370->enter($__internal_1e14c8bb7819f2d8b7232b9e1204d77adffc7ccaa22e4ba06e48f4908c4a3370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 38
        echo "\t\t\t<div id=\"menubar\">
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li><div><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Inicio</a></div></li>
\t\t\t\t\t<li><div><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_recetas");
        echo "\">Recetas</a></div></li>
\t\t\t\t\t<li><div><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_platos");
        echo "\">Platos</a></div></li>
\t\t\t\t\t<li><div><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_ingredientes");
        echo "\">Ingredientes</a></div></li>
\t\t\t\t\t<li><div><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_contact");
        echo "\">Contacto</a></div></li>
\t\t\t\t</ul>
\t\t\t</div> 
\t
\t\t\t";
        
        $__internal_1e14c8bb7819f2d8b7232b9e1204d77adffc7ccaa22e4ba06e48f4908c4a3370->leave($__internal_1e14c8bb7819f2d8b7232b9e1204d77adffc7ccaa22e4ba06e48f4908c4a3370_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_99a45f68766da2aa921fa125a3bd5962f31df17713aa7a24b4a6a0f7b192e7fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a45f68766da2aa921fa125a3bd5962f31df17713aa7a24b4a6a0f7b192e7fb->enter($__internal_99a45f68766da2aa921fa125a3bd5962f31df17713aa7a24b4a6a0f7b192e7fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_99a45f68766da2aa921fa125a3bd5962f31df17713aa7a24b4a6a0f7b192e7fb->leave($__internal_99a45f68766da2aa921fa125a3bd5962f31df17713aa7a24b4a6a0f7b192e7fb_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_a889fb34bc9f20b4f24d355db41ce325ea94ffa7480c533adc4e8ff8a83c3903 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a889fb34bc9f20b4f24d355db41ce325ea94ffa7480c533adc4e8ff8a83c3903->enter($__internal_a889fb34bc9f20b4f24d355db41ce325ea94ffa7480c533adc4e8ff8a83c3903_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a889fb34bc9f20b4f24d355db41ce325ea94ffa7480c533adc4e8ff8a83c3903->leave($__internal_a889fb34bc9f20b4f24d355db41ce325ea94ffa7480c533adc4e8ff8a83c3903_prof);

    }

    // line 67
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e1c6d40e705839ade482130b3a38d14e2ead94e5914989dc7ad0e27e8797acb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1c6d40e705839ade482130b3a38d14e2ead94e5914989dc7ad0e27e8797acb1->enter($__internal_e1c6d40e705839ade482130b3a38d14e2ead94e5914989dc7ad0e27e8797acb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 68
        echo "\t\t\tCocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web
\t\t\t";
        
        $__internal_e1c6d40e705839ade482130b3a38d14e2ead94e5914989dc7ad0e27e8797acb1->leave($__internal_e1c6d40e705839ade482130b3a38d14e2ead94e5914989dc7ad0e27e8797acb1_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bb2e6b9a5e3192dac7d8ae41096753c754ef1418279aef37ed5387a98428aad3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb2e6b9a5e3192dac7d8ae41096753c754ef1418279aef37ed5387a98428aad3->enter($__internal_bb2e6b9a5e3192dac7d8ae41096753c754ef1418279aef37ed5387a98428aad3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 75
        echo "\t <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

\t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.lettering.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(function() {
\t\t\t\t\t\$(\"#letter-container h2 a\").lettering();
\t\t\t\t});
\t\t\t</script>

\t <script src=\"";
        // line 85
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
        
        $__internal_bb2e6b9a5e3192dac7d8ae41096753c754ef1418279aef37ed5387a98428aad3->leave($__internal_bb2e6b9a5e3192dac7d8ae41096753c754ef1418279aef37ed5387a98428aad3_prof);

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
        return array (  244 => 85,  234 => 78,  227 => 75,  221 => 74,  213 => 68,  207 => 67,  196 => 60,  185 => 54,  173 => 44,  169 => 43,  165 => 42,  161 => 41,  157 => 40,  153 => 38,  147 => 37,  135 => 5,  126 => 119,  124 => 74,  118 => 70,  116 => 67,  108 => 61,  106 => 60,  99 => 55,  97 => 54,  90 => 49,  88 => 37,  74 => 26,  67 => 21,  62 => 19,  59 => 18,  53 => 17,  51 => 16,  41 => 9,  34 => 5,  28 => 1,);
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

\t{% if is_granted('ROLE_ADMIN') %}
\t\t\t<a href=\"{{ path('cooker_admin_logout')}}\" class=\"entrar\">Salir</a>
\t\t{% else %} 
\t\t\t<a href=\"{{ path('cooker_admin_login')}}\" class=\"entrar\">Iniciar sesi&oacuten</a>
\t\t{% endif %}

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
\t\t\t
\t\t\t<!-- Menú -->
\t\t\t{% block navigation %}
\t\t\t<div id=\"menubar\">
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li><div><a href=\"{{ path('cooker_cook_principal')}}\">Inicio</a></div></li>
\t\t\t\t\t<li><div><a href=\"{{ path('cooker_cook_recetas')}}\">Recetas</a></div></li>
\t\t\t\t\t<li><div><a href=\"{{ path('cooker_cook_platos')}}\">Platos</a></div></li>
\t\t\t\t\t<li><div><a href=\"{{ path('cooker_cook_ingredientes')}}\">Ingredientes</a></div></li>
\t\t\t\t\t<li><div><a href=\"{{ path('cooker_cook_contact')}}\">Contacto</a></div></li>
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
\t <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\" type=\"text/javascript\"></script>

\t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
\t\t\t<script src=\"{{ asset('js/jquery.lettering.js') }}\" type=\"text/javascript\"></script>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(function() {
\t\t\t\t\t\$(\"#letter-container h2 a\").lettering();
\t\t\t\t});
\t\t\t</script>

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

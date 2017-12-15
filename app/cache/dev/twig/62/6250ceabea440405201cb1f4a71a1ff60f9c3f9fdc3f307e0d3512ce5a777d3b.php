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
        $__internal_4b42e54a4a07e7e6b20f5ba8ebfa97b936ce3c7b3774edb8c6f654aa7ca3359c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b42e54a4a07e7e6b20f5ba8ebfa97b936ce3c7b3774edb8c6f654aa7ca3359c->enter($__internal_4b42e54a4a07e7e6b20f5ba8ebfa97b936ce3c7b3774edb8c6f654aa7ca3359c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
            echo "\" class=\"entrar\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Salir", array(), "messages");
            echo "</a>
\t\t";
        } else {
            // line 18
            echo " 
\t\t\t<a href=\"";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_admin_login");
            echo "\" class=\"entrar\">";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Iniciar sesi&oacuten", array(), "messages");
            echo "</a>
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
\t\t\t\t\t<a href=\"#\">";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("\"El amor puede esperar, el hambre no\" Monkey D. Luffy", array(), "messages");
        echo "</a>
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
        
        $__internal_4b42e54a4a07e7e6b20f5ba8ebfa97b936ce3c7b3774edb8c6f654aa7ca3359c->leave($__internal_4b42e54a4a07e7e6b20f5ba8ebfa97b936ce3c7b3774edb8c6f654aa7ca3359c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c6b904a085eef34a1a2c75076063259bc68d435c92f11788655ce01d61b2001b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6b904a085eef34a1a2c75076063259bc68d435c92f11788655ce01d61b2001b->enter($__internal_c6b904a085eef34a1a2c75076063259bc68d435c92f11788655ce01d61b2001b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_c6b904a085eef34a1a2c75076063259bc68d435c92f11788655ce01d61b2001b->leave($__internal_c6b904a085eef34a1a2c75076063259bc68d435c92f11788655ce01d61b2001b_prof);

    }

    // line 37
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_bf01c487aa6416f873b769c8673e187da5ddbde7aa3f7d3737ad95e2b96ec1cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf01c487aa6416f873b769c8673e187da5ddbde7aa3f7d3737ad95e2b96ec1cf->enter($__internal_bf01c487aa6416f873b769c8673e187da5ddbde7aa3f7d3737ad95e2b96ec1cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 38
        echo "\t\t\t<div id=\"menubar\">
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li><div><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Inicio", array(), "messages");
        echo "</a></div></li>
\t\t\t\t\t<li><div><a href=\"";
        // line 41
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_recetas");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Recetas", array(), "messages");
        echo "</a></div></li>
\t\t\t\t\t<li><div><a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_platos");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Platos", array(), "messages");
        echo "</a></div></li>
\t\t\t\t\t<li><div><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_ingredientes");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Ingredientes", array(), "messages");
        echo "</a></div></li>
\t\t\t\t\t<li><div><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_contact");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Contacto", array(), "messages");
        echo "</a></div></li>
\t\t\t\t</ul>
\t\t\t</div> 
\t
\t\t\t";
        
        $__internal_bf01c487aa6416f873b769c8673e187da5ddbde7aa3f7d3737ad95e2b96ec1cf->leave($__internal_bf01c487aa6416f873b769c8673e187da5ddbde7aa3f7d3737ad95e2b96ec1cf_prof);

    }

    // line 54
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_d3bde89fcd7317c044cc51dfc795fa16b8674d255b26e0b982a9ef32e3d857f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3bde89fcd7317c044cc51dfc795fa16b8674d255b26e0b982a9ef32e3d857f9->enter($__internal_d3bde89fcd7317c044cc51dfc795fa16b8674d255b26e0b982a9ef32e3d857f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_d3bde89fcd7317c044cc51dfc795fa16b8674d255b26e0b982a9ef32e3d857f9->leave($__internal_d3bde89fcd7317c044cc51dfc795fa16b8674d255b26e0b982a9ef32e3d857f9_prof);

    }

    // line 60
    public function block_body($context, array $blocks = array())
    {
        $__internal_fc3cc307b176cb8936e559846412514766b9e71c67e1f50e990b37245f5ee390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc3cc307b176cb8936e559846412514766b9e71c67e1f50e990b37245f5ee390->enter($__internal_fc3cc307b176cb8936e559846412514766b9e71c67e1f50e990b37245f5ee390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fc3cc307b176cb8936e559846412514766b9e71c67e1f50e990b37245f5ee390->leave($__internal_fc3cc307b176cb8936e559846412514766b9e71c67e1f50e990b37245f5ee390_prof);

    }

    // line 67
    public function block_footer($context, array $blocks = array())
    {
        $__internal_882278dcc03df1799cc78c9d1743040c0f6c117b360d64c4b6c8ac4068837e78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_882278dcc03df1799cc78c9d1743040c0f6c117b360d64c4b6c8ac4068837e78->enter($__internal_882278dcc03df1799cc78c9d1743040c0f6c117b360d64c4b6c8ac4068837e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 68
        echo "\t\t\t";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Cocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web", array(), "messages");
        // line 69
        echo "\t\t\t";
        
        $__internal_882278dcc03df1799cc78c9d1743040c0f6c117b360d64c4b6c8ac4068837e78->leave($__internal_882278dcc03df1799cc78c9d1743040c0f6c117b360d64c4b6c8ac4068837e78_prof);

    }

    // line 74
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_87021e07c2b78a40a0fe3cb808a8d26423e079c4ec0f9a36cd2ac3cfd63a91f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87021e07c2b78a40a0fe3cb808a8d26423e079c4ec0f9a36cd2ac3cfd63a91f3->enter($__internal_87021e07c2b78a40a0fe3cb808a8d26423e079c4ec0f9a36cd2ac3cfd63a91f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_87021e07c2b78a40a0fe3cb808a8d26423e079c4ec0f9a36cd2ac3cfd63a91f3->leave($__internal_87021e07c2b78a40a0fe3cb808a8d26423e079c4ec0f9a36cd2ac3cfd63a91f3_prof);

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
        return array (  263 => 85,  253 => 78,  246 => 75,  240 => 74,  233 => 69,  230 => 68,  224 => 67,  213 => 60,  202 => 54,  188 => 44,  182 => 43,  176 => 42,  170 => 41,  164 => 40,  160 => 38,  154 => 37,  142 => 5,  133 => 119,  131 => 74,  125 => 70,  123 => 67,  115 => 61,  113 => 60,  106 => 55,  104 => 54,  97 => 49,  95 => 37,  84 => 29,  78 => 26,  71 => 21,  64 => 19,  61 => 18,  53 => 17,  51 => 16,  41 => 9,  34 => 5,  28 => 1,);
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
\t\t\t<a href=\"{{ path('cooker_admin_logout')}}\" class=\"entrar\">{% trans %}Salir{% endtrans %}</a>
\t\t{% else %} 
\t\t\t<a href=\"{{ path('cooker_admin_login')}}\" class=\"entrar\">{% trans %}Iniciar sesi&oacuten{% endtrans %}</a>
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
\t\t\t{% trans %}Cocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web{% endtrans %}
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

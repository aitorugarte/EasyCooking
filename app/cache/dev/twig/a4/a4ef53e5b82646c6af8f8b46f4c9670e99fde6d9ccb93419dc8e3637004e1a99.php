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
            'stylesheets' => array($this, 'block_stylesheets'),
            'cook_title' => array($this, 'block_cook_title'),
            'cook_tagline' => array($this, 'block_cook_tagline'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92d2325b4c81bc72b926e6afd7229879ee7567b386044afc448a6dc5ef878f50 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92d2325b4c81bc72b926e6afd7229879ee7567b386044afc448a6dc5ef878f50->enter($__internal_92d2325b4c81bc72b926e6afd7229879ee7567b386044afc448a6dc5ef878f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!-- app/Resources/views/base.html.twig -->
<!-- php app/console cache:clear --env=prod  php app/console cache:clear --env=dev -->
<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=\"utf-8\" />
        <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 17
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
           
\t\t   <!-- Cabecera -->
\t\t\t<header id=\"header\">
                <hgroup>
                    <h2>";
        // line 26
        $this->displayBlock('cook_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 27
        $this->displayBlock('cook_tagline', $context, $blocks);
        // line 28
        echo "</h3>
\t\t\t\t\t\t   
\t\t\t\t<!-- Menú -->
                    ";
        // line 31
        $this->displayBlock('navigation', $context, $blocks);
        // line 48
        echo "                </hgroup>
            </header>
       
\t\t\t<!-- Contenido principal -->
            <section class=\"main-col\">
                ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "            </section>
\t\t\t<!-- Contenido lateral derecho -->
            <aside class=\"sidebar\">
                ";
        // line 57
        $this->displayBlock('sidebar', $context, $blocks);
        // line 58
        echo "            </aside>
\t\t\t<!-- Pie de página -->
            <div id=\"footer\">
                ";
        // line 61
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "            </div>
        </section>

        ";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "    </body>
</html>
";
        
        $__internal_92d2325b4c81bc72b926e6afd7229879ee7567b386044afc448a6dc5ef878f50->leave($__internal_92d2325b4c81bc72b926e6afd7229879ee7567b386044afc448a6dc5ef878f50_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d142889f158a0ef9032cb85978c05ac5fef8745840cd1494e15d40e12c8433bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d142889f158a0ef9032cb85978c05ac5fef8745840cd1494e15d40e12c8433bf->enter($__internal_d142889f158a0ef9032cb85978c05ac5fef8745840cd1494e15d40e12c8433bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_d142889f158a0ef9032cb85978c05ac5fef8745840cd1494e15d40e12c8433bf->leave($__internal_d142889f158a0ef9032cb85978c05ac5fef8745840cd1494e15d40e12c8433bf_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_206b8beeec20ec268935f4a4aac0cb12a881d2caaf9cfb6bdd814aa56b9a752c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_206b8beeec20ec268935f4a4aac0cb12a881d2caaf9cfb6bdd814aa56b9a752c->enter($__internal_206b8beeec20ec268935f4a4aac0cb12a881d2caaf9cfb6bdd814aa56b9a752c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_206b8beeec20ec268935f4a4aac0cb12a881d2caaf9cfb6bdd814aa56b9a752c->leave($__internal_206b8beeec20ec268935f4a4aac0cb12a881d2caaf9cfb6bdd814aa56b9a752c_prof);

    }

    // line 26
    public function block_cook_title($context, array $blocks = array())
    {
        $__internal_eebcd584212069e94250bc8ddb2bc5c9a2b73c16334c5c1cb21535a7d33e0413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eebcd584212069e94250bc8ddb2bc5c9a2b73c16334c5c1cb21535a7d33e0413->enter($__internal_eebcd584212069e94250bc8ddb2bc5c9a2b73c16334c5c1cb21535a7d33e0413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_eebcd584212069e94250bc8ddb2bc5c9a2b73c16334c5c1cb21535a7d33e0413->leave($__internal_eebcd584212069e94250bc8ddb2bc5c9a2b73c16334c5c1cb21535a7d33e0413_prof);

    }

    // line 27
    public function block_cook_tagline($context, array $blocks = array())
    {
        $__internal_d3498dfd4420f3b904529bbb11c016e91a3399b66e4340f55f4e19dcd88f7852 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3498dfd4420f3b904529bbb11c016e91a3399b66e4340f55f4e19dcd88f7852->enter($__internal_d3498dfd4420f3b904529bbb11c016e91a3399b66e4340f55f4e19dcd88f7852_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
        
        $__internal_d3498dfd4420f3b904529bbb11c016e91a3399b66e4340f55f4e19dcd88f7852->leave($__internal_d3498dfd4420f3b904529bbb11c016e91a3399b66e4340f55f4e19dcd88f7852_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_602c907d87f194332f3eda1ec6981daf235ad2f68d537524043aa2b66889ef82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_602c907d87f194332f3eda1ec6981daf235ad2f68d537524043aa2b66889ef82->enter($__internal_602c907d87f194332f3eda1ec6981daf235ad2f68d537524043aa2b66889ef82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 32
        echo "                        <nav>
                           <ul class=\"ul1\">
                                <li class=\"li2\"><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Inicio</a></li>
                                <li class=\"li2\"><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_recetas");
        echo "\">Recetas</a>\t\t
\t\t\t\t\t\t\t\t<ul class=\"ul2\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Entrantes</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Primeros</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Segundos</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Postres</a></li>
\t\t\t\t\t\t\t\t</ul>\t\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"li2\"><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_ingredientes");
        echo "\">Ingredientes</a>\t\t
                                <li class=\"li2\"><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_contact");
        echo "\">Contacto</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_602c907d87f194332f3eda1ec6981daf235ad2f68d537524043aa2b66889ef82->leave($__internal_602c907d87f194332f3eda1ec6981daf235ad2f68d537524043aa2b66889ef82_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_7095bf88cc46aef1c36db224ee35e04e47e5d8e52f88c85817c283767bfeee2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7095bf88cc46aef1c36db224ee35e04e47e5d8e52f88c85817c283767bfeee2d->enter($__internal_7095bf88cc46aef1c36db224ee35e04e47e5d8e52f88c85817c283767bfeee2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7095bf88cc46aef1c36db224ee35e04e47e5d8e52f88c85817c283767bfeee2d->leave($__internal_7095bf88cc46aef1c36db224ee35e04e47e5d8e52f88c85817c283767bfeee2d_prof);

    }

    // line 57
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_514b3622b775bbd1a346e0df4741179448bb222a9ed69d59f9a044792d6f2273 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_514b3622b775bbd1a346e0df4741179448bb222a9ed69d59f9a044792d6f2273->enter($__internal_514b3622b775bbd1a346e0df4741179448bb222a9ed69d59f9a044792d6f2273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_514b3622b775bbd1a346e0df4741179448bb222a9ed69d59f9a044792d6f2273->leave($__internal_514b3622b775bbd1a346e0df4741179448bb222a9ed69d59f9a044792d6f2273_prof);

    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        $__internal_675bcae4fb52eb575bf08abc24cc4d8adc4852b66533346515dff4b97d89204a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_675bcae4fb52eb575bf08abc24cc4d8adc4852b66533346515dff4b97d89204a->enter($__internal_675bcae4fb52eb575bf08abc24cc4d8adc4852b66533346515dff4b97d89204a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 62
        echo "                    Cocina fácil - Creado como proyecto para Ingeniería Web
                ";
        
        $__internal_675bcae4fb52eb575bf08abc24cc4d8adc4852b66533346515dff4b97d89204a->leave($__internal_675bcae4fb52eb575bf08abc24cc4d8adc4852b66533346515dff4b97d89204a_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_96d5f32d6cbc42e93cc3d621d3cebecbbbd074878176d4505b578c8ccdd08944 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96d5f32d6cbc42e93cc3d621d3cebecbbbd074878176d4505b578c8ccdd08944->enter($__internal_96d5f32d6cbc42e93cc3d621d3cebecbbbd074878176d4505b578c8ccdd08944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_96d5f32d6cbc42e93cc3d621d3cebecbbbd074878176d4505b578c8ccdd08944->leave($__internal_96d5f32d6cbc42e93cc3d621d3cebecbbbd074878176d4505b578c8ccdd08944_prof);

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
        return array (  246 => 67,  238 => 62,  232 => 61,  221 => 57,  210 => 53,  199 => 44,  195 => 43,  184 => 35,  180 => 34,  176 => 32,  170 => 31,  157 => 27,  145 => 26,  136 => 15,  132 => 13,  126 => 12,  114 => 8,  105 => 68,  103 => 67,  98 => 64,  96 => 61,  91 => 58,  89 => 57,  84 => 54,  82 => 53,  75 => 48,  73 => 31,  68 => 28,  66 => 27,  62 => 26,  49 => 17,  47 => 12,  40 => 8,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- app/Resources/views/base.html.twig -->
<!-- php app/console cache:clear --env=prod  php app/console cache:clear --env=dev -->
<!DOCTYPE html>
<html>

    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=\"utf-8\" />
        <title>{% block title %}symblog{% endblock %} - symblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        {% block stylesheets %}
            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
        <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

        <section id=\"wrapper\">
           
\t\t   <!-- Cabecera -->
\t\t\t<header id=\"header\">
                <hgroup>
                    <h2>{% block cook_title %}<a href=\"#\">Cocina facil</a>{% endblock %}</h2>
                    <h3>{% block cook_tagline %}<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>{% endblock %}</h3>
\t\t\t\t\t\t   
\t\t\t\t<!-- Menú -->
                    {% block navigation %}
                        <nav>
                           <ul class=\"ul1\">
                                <li class=\"li2\"><a href=\"{{ path('cooker_cook_principal')}}\">Inicio</a></li>
                                <li class=\"li2\"><a href=\"{{ path('cooker_cook_recetas')}}\">Recetas</a>\t\t
\t\t\t\t\t\t\t\t<ul class=\"ul2\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Entrantes</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Primeros</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Segundos</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Postres</a></li>
\t\t\t\t\t\t\t\t</ul>\t\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"li2\"><a href=\"{{ path('cooker_cook_ingredientes')}}\">Ingredientes</a>\t\t
                                <li class=\"li2\"><a href=\"{{ path('cooker_cook_contact')}}\">Contacto</a></li>
                            </ul>
                        </nav>
                    {% endblock %}
                </hgroup>
            </header>
       
\t\t\t<!-- Contenido principal -->
            <section class=\"main-col\">
                {% block body %}{% endblock %}
            </section>
\t\t\t<!-- Contenido lateral derecho -->
            <aside class=\"sidebar\">
                {% block sidebar %}{% endblock %}
            </aside>
\t\t\t<!-- Pie de página -->
            <div id=\"footer\">
                {% block footer %}
                    Cocina fácil - Creado como proyecto para Ingeniería Web
                {% endblock %}
            </div>
        </section>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app\\Resources\\views\\base.html.twig");
    }
}

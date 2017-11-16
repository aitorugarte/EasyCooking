<?php

/* ::base.html.twig */
class __TwigTemplate_3c7154162f5f5dc0d920db7fdfe949f309b9f3fd132ccc85d99177bdcdfadce1 extends Twig_Template
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
        $__internal_eb0220dac1b650dd934a4081e4226bb9efaa54669cf49c3d43633dcd627396e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb0220dac1b650dd934a4081e4226bb9efaa54669cf49c3d43633dcd627396e9->enter($__internal_eb0220dac1b650dd934a4081e4226bb9efaa54669cf49c3d43633dcd627396e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_eb0220dac1b650dd934a4081e4226bb9efaa54669cf49c3d43633dcd627396e9->leave($__internal_eb0220dac1b650dd934a4081e4226bb9efaa54669cf49c3d43633dcd627396e9_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_799e55d81bf2cfe176a2aaa86026e9fb58a324e1062d19dc6551f609a7b30630 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_799e55d81bf2cfe176a2aaa86026e9fb58a324e1062d19dc6551f609a7b30630->enter($__internal_799e55d81bf2cfe176a2aaa86026e9fb58a324e1062d19dc6551f609a7b30630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_799e55d81bf2cfe176a2aaa86026e9fb58a324e1062d19dc6551f609a7b30630->leave($__internal_799e55d81bf2cfe176a2aaa86026e9fb58a324e1062d19dc6551f609a7b30630_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f85c88104016cd4f9b237157d086a4b12ba78dd7fb9a44c16a98d516e45954d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f85c88104016cd4f9b237157d086a4b12ba78dd7fb9a44c16a98d516e45954d7->enter($__internal_f85c88104016cd4f9b237157d086a4b12ba78dd7fb9a44c16a98d516e45954d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_f85c88104016cd4f9b237157d086a4b12ba78dd7fb9a44c16a98d516e45954d7->leave($__internal_f85c88104016cd4f9b237157d086a4b12ba78dd7fb9a44c16a98d516e45954d7_prof);

    }

    // line 26
    public function block_cook_title($context, array $blocks = array())
    {
        $__internal_47d6a9e3bc8bb37ed3763018eb713cb9cf32260574ab6ebcfe790ff302923f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d6a9e3bc8bb37ed3763018eb713cb9cf32260574ab6ebcfe790ff302923f0a->enter($__internal_47d6a9e3bc8bb37ed3763018eb713cb9cf32260574ab6ebcfe790ff302923f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_47d6a9e3bc8bb37ed3763018eb713cb9cf32260574ab6ebcfe790ff302923f0a->leave($__internal_47d6a9e3bc8bb37ed3763018eb713cb9cf32260574ab6ebcfe790ff302923f0a_prof);

    }

    // line 27
    public function block_cook_tagline($context, array $blocks = array())
    {
        $__internal_2cb7a2c716a31b1b30584a46beac3844fee6831035e76cf1bc0358da16d27ce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cb7a2c716a31b1b30584a46beac3844fee6831035e76cf1bc0358da16d27ce2->enter($__internal_2cb7a2c716a31b1b30584a46beac3844fee6831035e76cf1bc0358da16d27ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
        
        $__internal_2cb7a2c716a31b1b30584a46beac3844fee6831035e76cf1bc0358da16d27ce2->leave($__internal_2cb7a2c716a31b1b30584a46beac3844fee6831035e76cf1bc0358da16d27ce2_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_01fba45be2053e5ce3961f0b2528be7f5c74ab815a93875981bc6135a9090c1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01fba45be2053e5ce3961f0b2528be7f5c74ab815a93875981bc6135a9090c1e->enter($__internal_01fba45be2053e5ce3961f0b2528be7f5c74ab815a93875981bc6135a9090c1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_01fba45be2053e5ce3961f0b2528be7f5c74ab815a93875981bc6135a9090c1e->leave($__internal_01fba45be2053e5ce3961f0b2528be7f5c74ab815a93875981bc6135a9090c1e_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_c1f529caa5191447bd2fbd2fb620d459ac0abdbd4c0dd87eae15f22ed279ffcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f529caa5191447bd2fbd2fb620d459ac0abdbd4c0dd87eae15f22ed279ffcc->enter($__internal_c1f529caa5191447bd2fbd2fb620d459ac0abdbd4c0dd87eae15f22ed279ffcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c1f529caa5191447bd2fbd2fb620d459ac0abdbd4c0dd87eae15f22ed279ffcc->leave($__internal_c1f529caa5191447bd2fbd2fb620d459ac0abdbd4c0dd87eae15f22ed279ffcc_prof);

    }

    // line 57
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_bf3e333f2b0a55bffb6e9bf02d91d6d6a34419b5541ad349c15d608f4ea3694a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf3e333f2b0a55bffb6e9bf02d91d6d6a34419b5541ad349c15d608f4ea3694a->enter($__internal_bf3e333f2b0a55bffb6e9bf02d91d6d6a34419b5541ad349c15d608f4ea3694a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_bf3e333f2b0a55bffb6e9bf02d91d6d6a34419b5541ad349c15d608f4ea3694a->leave($__internal_bf3e333f2b0a55bffb6e9bf02d91d6d6a34419b5541ad349c15d608f4ea3694a_prof);

    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        $__internal_6fb9770975ad02beab04c913cd10330ba6ffa763a3166de490ca2eea86f8a3b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fb9770975ad02beab04c913cd10330ba6ffa763a3166de490ca2eea86f8a3b9->enter($__internal_6fb9770975ad02beab04c913cd10330ba6ffa763a3166de490ca2eea86f8a3b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 62
        echo "                    Cocina fácil - Creado como proyecto para Ingeniería Web
                ";
        
        $__internal_6fb9770975ad02beab04c913cd10330ba6ffa763a3166de490ca2eea86f8a3b9->leave($__internal_6fb9770975ad02beab04c913cd10330ba6ffa763a3166de490ca2eea86f8a3b9_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7d1829922c89b5ced0af9687ef8fda56f1618705716bc6c9706671cea7a1d36a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1829922c89b5ced0af9687ef8fda56f1618705716bc6c9706671cea7a1d36a->enter($__internal_7d1829922c89b5ced0af9687ef8fda56f1618705716bc6c9706671cea7a1d36a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7d1829922c89b5ced0af9687ef8fda56f1618705716bc6c9706671cea7a1d36a->leave($__internal_7d1829922c89b5ced0af9687ef8fda56f1618705716bc6c9706671cea7a1d36a_prof);

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
", "::base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app/Resources\\views/base.html.twig");
    }
}

<?php

/* ::base.html.twig */
class __TwigTemplate_d5e7407b5439a8d3bba3d0c3540b39df9eae19b2273b1b801ec3907dc8238f59 extends Twig_Template
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
        $__internal_9f33d0b0a9ac408dc9ec1e28ef775c3dc5170206af681c00e6134c7d1fc5f8d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f33d0b0a9ac408dc9ec1e28ef775c3dc5170206af681c00e6134c7d1fc5f8d5->enter($__internal_9f33d0b0a9ac408dc9ec1e28ef775c3dc5170206af681c00e6134c7d1fc5f8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"es\" xml:lang=\"es\">
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
\t\t<meta charset=\"UTF-8\">
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
           
\t\t   <!-- Cabecera -->
\t\t\t<header id=\"header\">
                    <h1 id=\"titulo1\">";
        // line 22
        $this->displayBlock('cook_title', $context, $blocks);
        echo "</h1>
                    <h3 id=\"titulo2\">";
        // line 23
        $this->displayBlock('cook_tagline', $context, $blocks);
        // line 24
        echo "</h3>
\t\t\t\t\t\t   
\t\t\t\t<!-- Menú -->
                    ";
        // line 27
        $this->displayBlock('navigation', $context, $blocks);
        // line 44
        echo "            </header>
       
\t\t\t<!-- Contenido principal -->
            <section class=\"main-col\">
                ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "            </section>
\t\t\t<!-- Contenido lateral derecho -->
            <aside class=\"sidebar\">
                ";
        // line 52
        $this->displayBlock('sidebar', $context, $blocks);
        // line 53
        echo "            </aside>
\t\t\t<!-- Pie de página -->
            <div id=\"footer\">
                ";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 59
        echo "            </div>
        </section>

        ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "    </body>
</html>
";
        
        $__internal_9f33d0b0a9ac408dc9ec1e28ef775c3dc5170206af681c00e6134c7d1fc5f8d5->leave($__internal_9f33d0b0a9ac408dc9ec1e28ef775c3dc5170206af681c00e6134c7d1fc5f8d5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_02b1992f2227bee1404169ee89cb69efc5d1c162b3987382b419be6a7077da67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02b1992f2227bee1404169ee89cb69efc5d1c162b3987382b419be6a7077da67->enter($__internal_02b1992f2227bee1404169ee89cb69efc5d1c162b3987382b419be6a7077da67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_02b1992f2227bee1404169ee89cb69efc5d1c162b3987382b419be6a7077da67->leave($__internal_02b1992f2227bee1404169ee89cb69efc5d1c162b3987382b419be6a7077da67_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_29b1ea8c526546829404f028fd9d6d847ba2e3cf385361aeababcdf7e68c3f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b1ea8c526546829404f028fd9d6d847ba2e3cf385361aeababcdf7e68c3f34->enter($__internal_29b1ea8c526546829404f028fd9d6d847ba2e3cf385361aeababcdf7e68c3f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/cocina.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_29b1ea8c526546829404f028fd9d6d847ba2e3cf385361aeababcdf7e68c3f34->leave($__internal_29b1ea8c526546829404f028fd9d6d847ba2e3cf385361aeababcdf7e68c3f34_prof);

    }

    // line 22
    public function block_cook_title($context, array $blocks = array())
    {
        $__internal_9dec7c07eb04a2c418a935b753d55543fcbe2fc6e75bdde7b7cd85a9e364c927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dec7c07eb04a2c418a935b753d55543fcbe2fc6e75bdde7b7cd85a9e364c927->enter($__internal_9dec7c07eb04a2c418a935b753d55543fcbe2fc6e75bdde7b7cd85a9e364c927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Cocina fácil</a>";
        
        $__internal_9dec7c07eb04a2c418a935b753d55543fcbe2fc6e75bdde7b7cd85a9e364c927->leave($__internal_9dec7c07eb04a2c418a935b753d55543fcbe2fc6e75bdde7b7cd85a9e364c927_prof);

    }

    // line 23
    public function block_cook_tagline($context, array $blocks = array())
    {
        $__internal_3bf5df7f6dfb8157917b4582e02275af3eeb2c69c2e0a2f61240d99c02ad2ab4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bf5df7f6dfb8157917b4582e02275af3eeb2c69c2e0a2f61240d99c02ad2ab4->enter($__internal_3bf5df7f6dfb8157917b4582e02275af3eeb2c69c2e0a2f61240d99c02ad2ab4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_tagline"));

        echo "\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón";
        
        $__internal_3bf5df7f6dfb8157917b4582e02275af3eeb2c69c2e0a2f61240d99c02ad2ab4->leave($__internal_3bf5df7f6dfb8157917b4582e02275af3eeb2c69c2e0a2f61240d99c02ad2ab4_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_9f5e745fc798d473d56159a7613f771e50a7df1305d3b5187f9fdc8eca302874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f5e745fc798d473d56159a7613f771e50a7df1305d3b5187f9fdc8eca302874->enter($__internal_9f5e745fc798d473d56159a7613f771e50a7df1305d3b5187f9fdc8eca302874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 28
        echo "                        <nav>
                           <ul class=\"ul1\">
                                <li class=\"li2\"><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Inicio</a></li>
                                <li class=\"li2\"><a href=\"";
        // line 31
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
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_ingredientes");
        echo "\">Ingredientes</a>\t\t
                                <li class=\"li2\"><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_contact");
        echo "\">Contacto</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_9f5e745fc798d473d56159a7613f771e50a7df1305d3b5187f9fdc8eca302874->leave($__internal_9f5e745fc798d473d56159a7613f771e50a7df1305d3b5187f9fdc8eca302874_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_263f55cdf84565aae3ecf18b083f65bb1b44276fd31184b0281fa4641c85369a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_263f55cdf84565aae3ecf18b083f65bb1b44276fd31184b0281fa4641c85369a->enter($__internal_263f55cdf84565aae3ecf18b083f65bb1b44276fd31184b0281fa4641c85369a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_263f55cdf84565aae3ecf18b083f65bb1b44276fd31184b0281fa4641c85369a->leave($__internal_263f55cdf84565aae3ecf18b083f65bb1b44276fd31184b0281fa4641c85369a_prof);

    }

    // line 52
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6d1c1a50d2bf644af9d0e35e67ade2bf9c63d9599039524855569cf8736c49a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d1c1a50d2bf644af9d0e35e67ade2bf9c63d9599039524855569cf8736c49a2->enter($__internal_6d1c1a50d2bf644af9d0e35e67ade2bf9c63d9599039524855569cf8736c49a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_6d1c1a50d2bf644af9d0e35e67ade2bf9c63d9599039524855569cf8736c49a2->leave($__internal_6d1c1a50d2bf644af9d0e35e67ade2bf9c63d9599039524855569cf8736c49a2_prof);

    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ffe533a8f10e7f5e0020c3b328e1677434f98ee4b7d996bda67ef9400d53273a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffe533a8f10e7f5e0020c3b328e1677434f98ee4b7d996bda67ef9400d53273a->enter($__internal_ffe533a8f10e7f5e0020c3b328e1677434f98ee4b7d996bda67ef9400d53273a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 57
        echo "                    Cocina fácil - Creado como proyecto para Ingeniería Web
                ";
        
        $__internal_ffe533a8f10e7f5e0020c3b328e1677434f98ee4b7d996bda67ef9400d53273a->leave($__internal_ffe533a8f10e7f5e0020c3b328e1677434f98ee4b7d996bda67ef9400d53273a_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7ab4be79507f5f84ca07b6e2f9a2566320c9f6c3cdc497f69027a33327aa7183 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab4be79507f5f84ca07b6e2f9a2566320c9f6c3cdc497f69027a33327aa7183->enter($__internal_7ab4be79507f5f84ca07b6e2f9a2566320c9f6c3cdc497f69027a33327aa7183_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7ab4be79507f5f84ca07b6e2f9a2566320c9f6c3cdc497f69027a33327aa7183->leave($__internal_7ab4be79507f5f84ca07b6e2f9a2566320c9f6c3cdc497f69027a33327aa7183_prof);

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
        return array (  243 => 62,  235 => 57,  229 => 56,  218 => 52,  207 => 48,  196 => 40,  192 => 39,  181 => 31,  177 => 30,  173 => 28,  167 => 27,  154 => 23,  140 => 22,  131 => 12,  127 => 10,  121 => 9,  109 => 4,  100 => 63,  98 => 62,  93 => 59,  91 => 56,  86 => 53,  84 => 52,  79 => 49,  77 => 48,  71 => 44,  69 => 27,  64 => 24,  62 => 23,  58 => 22,  46 => 14,  44 => 9,  36 => 4,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"es\" xml:lang=\"es\">
    <head>
        <title>{% block title %}symblog{% endblock %} - symblog</title>
\t\t<meta charset=\"UTF-8\">
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        {% block stylesheets %}
            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"{{ asset('css/cocina.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
        <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

        <section id=\"wrapper\">
           
\t\t   <!-- Cabecera -->
\t\t\t<header id=\"header\">
                    <h1 id=\"titulo1\">{% block cook_title %}<a href=\"{{ path('cooker_cook_principal')}}\">Cocina fácil</a>{% endblock %}</h1>
                    <h3 id=\"titulo2\">{% block cook_tagline %}\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón{% endblock %}</h3>
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

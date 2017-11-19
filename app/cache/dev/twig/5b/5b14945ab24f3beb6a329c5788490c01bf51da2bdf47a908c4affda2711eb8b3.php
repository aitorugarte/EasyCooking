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
        $__internal_e2d1838a0e8b1080049d1a940ef4837a24cde5bf6c361fd14ef1e803185e2430 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2d1838a0e8b1080049d1a940ef4837a24cde5bf6c361fd14ef1e803185e2430->enter($__internal_e2d1838a0e8b1080049d1a940ef4837a24cde5bf6c361fd14ef1e803185e2430_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        echo "</h3>
\t\t\t\t\t\t   
\t\t\t\t<!-- Menú -->
                    ";
        // line 26
        $this->displayBlock('navigation', $context, $blocks);
        // line 43
        echo "            </header>
       
\t\t\t<!-- Contenido principal -->
            <section class=\"main-col\">
                ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "            </section>
\t\t\t<!-- Contenido lateral derecho -->
            <aside class=\"sidebar\">
                ";
        // line 51
        $this->displayBlock('sidebar', $context, $blocks);
        // line 52
        echo "            </aside>
\t\t\t<!-- Pie de página -->
            <div id=\"footer\">
                ";
        // line 55
        $this->displayBlock('footer', $context, $blocks);
        // line 58
        echo "            </div>
        </section>

        ";
        // line 61
        $this->displayBlock('javascripts', $context, $blocks);
        // line 62
        echo "    </body>
</html>
";
        
        $__internal_e2d1838a0e8b1080049d1a940ef4837a24cde5bf6c361fd14ef1e803185e2430->leave($__internal_e2d1838a0e8b1080049d1a940ef4837a24cde5bf6c361fd14ef1e803185e2430_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbc7d761645b8a1b37cb606d1597000a5bc5c47b48d135c04d0fcef22f462dd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc7d761645b8a1b37cb606d1597000a5bc5c47b48d135c04d0fcef22f462dd6->enter($__internal_fbc7d761645b8a1b37cb606d1597000a5bc5c47b48d135c04d0fcef22f462dd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_fbc7d761645b8a1b37cb606d1597000a5bc5c47b48d135c04d0fcef22f462dd6->leave($__internal_fbc7d761645b8a1b37cb606d1597000a5bc5c47b48d135c04d0fcef22f462dd6_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b2dd391541c0be69cc426d09baa886759e9c784b9023fa747aafe5c78c832879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2dd391541c0be69cc426d09baa886759e9c784b9023fa747aafe5c78c832879->enter($__internal_b2dd391541c0be69cc426d09baa886759e9c784b9023fa747aafe5c78c832879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/cocina.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_b2dd391541c0be69cc426d09baa886759e9c784b9023fa747aafe5c78c832879->leave($__internal_b2dd391541c0be69cc426d09baa886759e9c784b9023fa747aafe5c78c832879_prof);

    }

    // line 22
    public function block_cook_title($context, array $blocks = array())
    {
        $__internal_95ca7839b7b953418f4bfcf20ef78ccb477f8adabb2411ba153d27ed78fe0d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95ca7839b7b953418f4bfcf20ef78ccb477f8adabb2411ba153d27ed78fe0d03->enter($__internal_95ca7839b7b953418f4bfcf20ef78ccb477f8adabb2411ba153d27ed78fe0d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_title"));

        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Cocina f&aacutecil</a>";
        
        $__internal_95ca7839b7b953418f4bfcf20ef78ccb477f8adabb2411ba153d27ed78fe0d03->leave($__internal_95ca7839b7b953418f4bfcf20ef78ccb477f8adabb2411ba153d27ed78fe0d03_prof);

    }

    // line 23
    public function block_cook_tagline($context, array $blocks = array())
    {
        $__internal_3a1e3767b8ee27ca04d149625b11a50d6f4e756912ddc452a4390ffd321697bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a1e3767b8ee27ca04d149625b11a50d6f4e756912ddc452a4390ffd321697bf->enter($__internal_3a1e3767b8ee27ca04d149625b11a50d6f4e756912ddc452a4390ffd321697bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_tagline"));

        echo "\"El amor puede esperar, el hambre no\" Monkey D. Luffy";
        
        $__internal_3a1e3767b8ee27ca04d149625b11a50d6f4e756912ddc452a4390ffd321697bf->leave($__internal_3a1e3767b8ee27ca04d149625b11a50d6f4e756912ddc452a4390ffd321697bf_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_5d37d9a6cfdaa0b929d98e7ab14d4dcdd1521d0deb7492df4ea007394bfd0c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d37d9a6cfdaa0b929d98e7ab14d4dcdd1521d0deb7492df4ea007394bfd0c52->enter($__internal_5d37d9a6cfdaa0b929d98e7ab14d4dcdd1521d0deb7492df4ea007394bfd0c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 27
        echo "                        <nav>
                           <ul class=\"ul1\">
                                <li class=\"li2\"><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Inicio</a></li>
                                <li class=\"li2\"><a href=\"";
        // line 30
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
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_ingredientes");
        echo "\">Ingredientes</a>\t\t
                                <li class=\"li2\"><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_contact");
        echo "\">Contacto</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_5d37d9a6cfdaa0b929d98e7ab14d4dcdd1521d0deb7492df4ea007394bfd0c52->leave($__internal_5d37d9a6cfdaa0b929d98e7ab14d4dcdd1521d0deb7492df4ea007394bfd0c52_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_22f886c221ab959d8b6b0f2aa92a580c778d1c8b6596ffb3b567fe7a759f6121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22f886c221ab959d8b6b0f2aa92a580c778d1c8b6596ffb3b567fe7a759f6121->enter($__internal_22f886c221ab959d8b6b0f2aa92a580c778d1c8b6596ffb3b567fe7a759f6121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_22f886c221ab959d8b6b0f2aa92a580c778d1c8b6596ffb3b567fe7a759f6121->leave($__internal_22f886c221ab959d8b6b0f2aa92a580c778d1c8b6596ffb3b567fe7a759f6121_prof);

    }

    // line 51
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1ef9cc5205d9f55db3af8bc92843561cfa509d89f74f77dafd370fca89a00491 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef9cc5205d9f55db3af8bc92843561cfa509d89f74f77dafd370fca89a00491->enter($__internal_1ef9cc5205d9f55db3af8bc92843561cfa509d89f74f77dafd370fca89a00491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_1ef9cc5205d9f55db3af8bc92843561cfa509d89f74f77dafd370fca89a00491->leave($__internal_1ef9cc5205d9f55db3af8bc92843561cfa509d89f74f77dafd370fca89a00491_prof);

    }

    // line 55
    public function block_footer($context, array $blocks = array())
    {
        $__internal_dbb05f12b3f4f958999352cf7a00ab1ca1b0c6d69641d1920b86b08a33558286 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbb05f12b3f4f958999352cf7a00ab1ca1b0c6d69641d1920b86b08a33558286->enter($__internal_dbb05f12b3f4f958999352cf7a00ab1ca1b0c6d69641d1920b86b08a33558286_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 56
        echo "                    Cocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web
                ";
        
        $__internal_dbb05f12b3f4f958999352cf7a00ab1ca1b0c6d69641d1920b86b08a33558286->leave($__internal_dbb05f12b3f4f958999352cf7a00ab1ca1b0c6d69641d1920b86b08a33558286_prof);

    }

    // line 61
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a822d2f2bea484ba34d8b1612bb95638f408e73107eb07db73bfc5ca7a388405 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a822d2f2bea484ba34d8b1612bb95638f408e73107eb07db73bfc5ca7a388405->enter($__internal_a822d2f2bea484ba34d8b1612bb95638f408e73107eb07db73bfc5ca7a388405_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a822d2f2bea484ba34d8b1612bb95638f408e73107eb07db73bfc5ca7a388405->leave($__internal_a822d2f2bea484ba34d8b1612bb95638f408e73107eb07db73bfc5ca7a388405_prof);

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
        return array (  241 => 61,  233 => 56,  227 => 55,  216 => 51,  205 => 47,  194 => 39,  190 => 38,  179 => 30,  175 => 29,  171 => 27,  165 => 26,  153 => 23,  139 => 22,  130 => 12,  126 => 10,  120 => 9,  108 => 4,  99 => 62,  97 => 61,  92 => 58,  90 => 55,  85 => 52,  83 => 51,  78 => 48,  76 => 47,  70 => 43,  68 => 26,  62 => 23,  58 => 22,  46 => 14,  44 => 9,  36 => 4,  31 => 1,);
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
                    <h1 id=\"titulo1\">{% block cook_title %}<a href=\"{{ path('cooker_cook_principal')}}\">Cocina f&aacutecil</a>{% endblock %}</h1>
                    <h3 id=\"titulo2\">{% block cook_tagline %}\"El amor puede esperar, el hambre no\" Monkey D. Luffy{% endblock %}</h3>
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
                    Cocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web
                {% endblock %}
            </div>
        </section>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app/Resources\\views/base.html.twig");
    }
}

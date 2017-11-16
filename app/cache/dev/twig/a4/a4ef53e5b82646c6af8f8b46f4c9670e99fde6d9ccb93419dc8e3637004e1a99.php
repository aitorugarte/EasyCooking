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
        $__internal_286b192b3e1afe4e6ee6551e4aab2c59ac3fa55ad86f942a801249ab593473ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_286b192b3e1afe4e6ee6551e4aab2c59ac3fa55ad86f942a801249ab593473ff->enter($__internal_286b192b3e1afe4e6ee6551e4aab2c59ac3fa55ad86f942a801249ab593473ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
                    <h2>";
        // line 22
        $this->displayBlock('cook_title', $context, $blocks);
        echo "</h2>
                    <h3>";
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
        
        $__internal_286b192b3e1afe4e6ee6551e4aab2c59ac3fa55ad86f942a801249ab593473ff->leave($__internal_286b192b3e1afe4e6ee6551e4aab2c59ac3fa55ad86f942a801249ab593473ff_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_9efe7af4beac19e0aade393ae15aca2f76fad901c29cb2e89859c91d0e94efd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efe7af4beac19e0aade393ae15aca2f76fad901c29cb2e89859c91d0e94efd0->enter($__internal_9efe7af4beac19e0aade393ae15aca2f76fad901c29cb2e89859c91d0e94efd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_9efe7af4beac19e0aade393ae15aca2f76fad901c29cb2e89859c91d0e94efd0->leave($__internal_9efe7af4beac19e0aade393ae15aca2f76fad901c29cb2e89859c91d0e94efd0_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_65ebe96943034123c62d7ae5dbc63d0fceec6d7925bbc40ce537d3cab5bf64e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ebe96943034123c62d7ae5dbc63d0fceec6d7925bbc40ce537d3cab5bf64e7->enter($__internal_65ebe96943034123c62d7ae5dbc63d0fceec6d7925bbc40ce537d3cab5bf64e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_65ebe96943034123c62d7ae5dbc63d0fceec6d7925bbc40ce537d3cab5bf64e7->leave($__internal_65ebe96943034123c62d7ae5dbc63d0fceec6d7925bbc40ce537d3cab5bf64e7_prof);

    }

    // line 22
    public function block_cook_title($context, array $blocks = array())
    {
        $__internal_10e179a58531fd6b14e73677643dfaa36c18941c1bc8671c760a6e682af4f758 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10e179a58531fd6b14e73677643dfaa36c18941c1bc8671c760a6e682af4f758->enter($__internal_10e179a58531fd6b14e73677643dfaa36c18941c1bc8671c760a6e682af4f758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_10e179a58531fd6b14e73677643dfaa36c18941c1bc8671c760a6e682af4f758->leave($__internal_10e179a58531fd6b14e73677643dfaa36c18941c1bc8671c760a6e682af4f758_prof);

    }

    // line 23
    public function block_cook_tagline($context, array $blocks = array())
    {
        $__internal_23fe93aee43ab0531f87a8ee6ca7641e3d1d935045a8f1c66de640bf8ac92f2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23fe93aee43ab0531f87a8ee6ca7641e3d1d935045a8f1c66de640bf8ac92f2a->enter($__internal_23fe93aee43ab0531f87a8ee6ca7641e3d1d935045a8f1c66de640bf8ac92f2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
        
        $__internal_23fe93aee43ab0531f87a8ee6ca7641e3d1d935045a8f1c66de640bf8ac92f2a->leave($__internal_23fe93aee43ab0531f87a8ee6ca7641e3d1d935045a8f1c66de640bf8ac92f2a_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_7e4b1e1497881e5249c15e00a79053be4e9fad8f4d0e6d64331ea6b6c5455c79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4b1e1497881e5249c15e00a79053be4e9fad8f4d0e6d64331ea6b6c5455c79->enter($__internal_7e4b1e1497881e5249c15e00a79053be4e9fad8f4d0e6d64331ea6b6c5455c79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_7e4b1e1497881e5249c15e00a79053be4e9fad8f4d0e6d64331ea6b6c5455c79->leave($__internal_7e4b1e1497881e5249c15e00a79053be4e9fad8f4d0e6d64331ea6b6c5455c79_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_528f09335ef477cb1d4ce2d027157fe4459df8c860a7a640d452f628d1ba08ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_528f09335ef477cb1d4ce2d027157fe4459df8c860a7a640d452f628d1ba08ce->enter($__internal_528f09335ef477cb1d4ce2d027157fe4459df8c860a7a640d452f628d1ba08ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_528f09335ef477cb1d4ce2d027157fe4459df8c860a7a640d452f628d1ba08ce->leave($__internal_528f09335ef477cb1d4ce2d027157fe4459df8c860a7a640d452f628d1ba08ce_prof);

    }

    // line 52
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_05687388dd2e6b2fe353e0db180c2d78938d8c2a137d7b94b29d72acb4ac4ed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05687388dd2e6b2fe353e0db180c2d78938d8c2a137d7b94b29d72acb4ac4ed4->enter($__internal_05687388dd2e6b2fe353e0db180c2d78938d8c2a137d7b94b29d72acb4ac4ed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_05687388dd2e6b2fe353e0db180c2d78938d8c2a137d7b94b29d72acb4ac4ed4->leave($__internal_05687388dd2e6b2fe353e0db180c2d78938d8c2a137d7b94b29d72acb4ac4ed4_prof);

    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3387f0543632e53a9c04d021fd6c1beba074e1d64771cc4d301bf2dbdbcf576e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3387f0543632e53a9c04d021fd6c1beba074e1d64771cc4d301bf2dbdbcf576e->enter($__internal_3387f0543632e53a9c04d021fd6c1beba074e1d64771cc4d301bf2dbdbcf576e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 57
        echo "                    Cocina fácil - Creado como proyecto para Ingeniería Web
                ";
        
        $__internal_3387f0543632e53a9c04d021fd6c1beba074e1d64771cc4d301bf2dbdbcf576e->leave($__internal_3387f0543632e53a9c04d021fd6c1beba074e1d64771cc4d301bf2dbdbcf576e_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_25df83cca4d30e875e2c22450645fb8cb90b6dda33a5a543405156a1ca6e132d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25df83cca4d30e875e2c22450645fb8cb90b6dda33a5a543405156a1ca6e132d->enter($__internal_25df83cca4d30e875e2c22450645fb8cb90b6dda33a5a543405156a1ca6e132d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_25df83cca4d30e875e2c22450645fb8cb90b6dda33a5a543405156a1ca6e132d->leave($__internal_25df83cca4d30e875e2c22450645fb8cb90b6dda33a5a543405156a1ca6e132d_prof);

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
        return array (  241 => 62,  233 => 57,  227 => 56,  216 => 52,  205 => 48,  194 => 40,  190 => 39,  179 => 31,  175 => 30,  171 => 28,  165 => 27,  152 => 23,  140 => 22,  131 => 12,  127 => 10,  121 => 9,  109 => 4,  100 => 63,  98 => 62,  93 => 59,  91 => 56,  86 => 53,  84 => 52,  79 => 49,  77 => 48,  71 => 44,  69 => 27,  64 => 24,  62 => 23,  58 => 22,  46 => 14,  44 => 9,  36 => 4,  31 => 1,);
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
            <link href=\"{{ asset('css/screen.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
        {% endblock %}
        <link rel=\"shortcut icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>

        <section id=\"wrapper\">
           
\t\t   <!-- Cabecera -->
\t\t\t<header id=\"header\">
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

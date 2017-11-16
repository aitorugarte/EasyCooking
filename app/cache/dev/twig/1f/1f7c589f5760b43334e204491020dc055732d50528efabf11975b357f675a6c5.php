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
        $__internal_d84a3357787669333cf31f5a7616bf49aef8c6ec909aabc2061b4849bab9e943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d84a3357787669333cf31f5a7616bf49aef8c6ec909aabc2061b4849bab9e943->enter($__internal_d84a3357787669333cf31f5a7616bf49aef8c6ec909aabc2061b4849bab9e943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 47
        echo "                </hgroup>
            </header>
       
\t\t\t<!-- Contenido principal -->
            <section class=\"main-col\">
                ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "            </section>
\t\t\t<!-- Contenido lateral derecho -->
            <aside class=\"sidebar\">
                ";
        // line 56
        $this->displayBlock('sidebar', $context, $blocks);
        // line 57
        echo "            </aside>
\t\t\t<!-- Pie de página -->
            <div id=\"footer\">
                ";
        // line 60
        $this->displayBlock('footer', $context, $blocks);
        // line 63
        echo "            </div>
        </section>

        ";
        // line 66
        $this->displayBlock('javascripts', $context, $blocks);
        // line 67
        echo "    </body>
</html>
";
        
        $__internal_d84a3357787669333cf31f5a7616bf49aef8c6ec909aabc2061b4849bab9e943->leave($__internal_d84a3357787669333cf31f5a7616bf49aef8c6ec909aabc2061b4849bab9e943_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_2e51a33dce62e8907f9fef322180e457d0f3fb9aefd64410a3c899a3252eee09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e51a33dce62e8907f9fef322180e457d0f3fb9aefd64410a3c899a3252eee09->enter($__internal_2e51a33dce62e8907f9fef322180e457d0f3fb9aefd64410a3c899a3252eee09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_2e51a33dce62e8907f9fef322180e457d0f3fb9aefd64410a3c899a3252eee09->leave($__internal_2e51a33dce62e8907f9fef322180e457d0f3fb9aefd64410a3c899a3252eee09_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e51e1eb69b8480c6c649e83991ec9d3cec7d548353526cab69f6fda8088f6c21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51e1eb69b8480c6c649e83991ec9d3cec7d548353526cab69f6fda8088f6c21->enter($__internal_e51e1eb69b8480c6c649e83991ec9d3cec7d548353526cab69f6fda8088f6c21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_e51e1eb69b8480c6c649e83991ec9d3cec7d548353526cab69f6fda8088f6c21->leave($__internal_e51e1eb69b8480c6c649e83991ec9d3cec7d548353526cab69f6fda8088f6c21_prof);

    }

    // line 26
    public function block_cook_title($context, array $blocks = array())
    {
        $__internal_b16d3424f169e4559668b9460ba6f6f33bac56be5e879b5d03d5b00b38f11730 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b16d3424f169e4559668b9460ba6f6f33bac56be5e879b5d03d5b00b38f11730->enter($__internal_b16d3424f169e4559668b9460ba6f6f33bac56be5e879b5d03d5b00b38f11730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_b16d3424f169e4559668b9460ba6f6f33bac56be5e879b5d03d5b00b38f11730->leave($__internal_b16d3424f169e4559668b9460ba6f6f33bac56be5e879b5d03d5b00b38f11730_prof);

    }

    // line 27
    public function block_cook_tagline($context, array $blocks = array())
    {
        $__internal_474512c0f24b725b002021d58c84563b2a5eda4b13fd9481082e4b32ced24acf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_474512c0f24b725b002021d58c84563b2a5eda4b13fd9481082e4b32ced24acf->enter($__internal_474512c0f24b725b002021d58c84563b2a5eda4b13fd9481082e4b32ced24acf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
        
        $__internal_474512c0f24b725b002021d58c84563b2a5eda4b13fd9481082e4b32ced24acf->leave($__internal_474512c0f24b725b002021d58c84563b2a5eda4b13fd9481082e4b32ced24acf_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_11ed66508e13b6ce549affac619e6af08c2fa7d0da4e4d1f3dec0162c2dac305 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11ed66508e13b6ce549affac619e6af08c2fa7d0da4e4d1f3dec0162c2dac305->enter($__internal_11ed66508e13b6ce549affac619e6af08c2fa7d0da4e4d1f3dec0162c2dac305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
                                <li class=\"li2\"><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_contact");
        echo "\">Contacto</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_11ed66508e13b6ce549affac619e6af08c2fa7d0da4e4d1f3dec0162c2dac305->leave($__internal_11ed66508e13b6ce549affac619e6af08c2fa7d0da4e4d1f3dec0162c2dac305_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_23b0dfbebdfe50779d39a7c3719392f1391211efc79ccdd8cf64cbd1cfba1cfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23b0dfbebdfe50779d39a7c3719392f1391211efc79ccdd8cf64cbd1cfba1cfa->enter($__internal_23b0dfbebdfe50779d39a7c3719392f1391211efc79ccdd8cf64cbd1cfba1cfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_23b0dfbebdfe50779d39a7c3719392f1391211efc79ccdd8cf64cbd1cfba1cfa->leave($__internal_23b0dfbebdfe50779d39a7c3719392f1391211efc79ccdd8cf64cbd1cfba1cfa_prof);

    }

    // line 56
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4c08d026c14087636452b56fb45e74504e85479e0f045e5c5d91f218843bff99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c08d026c14087636452b56fb45e74504e85479e0f045e5c5d91f218843bff99->enter($__internal_4c08d026c14087636452b56fb45e74504e85479e0f045e5c5d91f218843bff99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_4c08d026c14087636452b56fb45e74504e85479e0f045e5c5d91f218843bff99->leave($__internal_4c08d026c14087636452b56fb45e74504e85479e0f045e5c5d91f218843bff99_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        $__internal_e9216e233aabec04ee03a6e49db882c587e5689d33cda45221b148cd99a72169 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9216e233aabec04ee03a6e49db882c587e5689d33cda45221b148cd99a72169->enter($__internal_e9216e233aabec04ee03a6e49db882c587e5689d33cda45221b148cd99a72169_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "                    Cocina fácil - Creado como proyecto para Ingeniería Web
                ";
        
        $__internal_e9216e233aabec04ee03a6e49db882c587e5689d33cda45221b148cd99a72169->leave($__internal_e9216e233aabec04ee03a6e49db882c587e5689d33cda45221b148cd99a72169_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d91c2fccba49263cbb514b9a2325f73e309fdc5fb3a2c6101b1c899359aec42f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d91c2fccba49263cbb514b9a2325f73e309fdc5fb3a2c6101b1c899359aec42f->enter($__internal_d91c2fccba49263cbb514b9a2325f73e309fdc5fb3a2c6101b1c899359aec42f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d91c2fccba49263cbb514b9a2325f73e309fdc5fb3a2c6101b1c899359aec42f->leave($__internal_d91c2fccba49263cbb514b9a2325f73e309fdc5fb3a2c6101b1c899359aec42f_prof);

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
        return array (  242 => 66,  234 => 61,  228 => 60,  217 => 56,  206 => 52,  195 => 43,  184 => 35,  180 => 34,  176 => 32,  170 => 31,  157 => 27,  145 => 26,  136 => 15,  132 => 13,  126 => 12,  114 => 8,  105 => 67,  103 => 66,  98 => 63,  96 => 60,  91 => 57,  89 => 56,  84 => 53,  82 => 52,  75 => 47,  73 => 31,  68 => 28,  66 => 27,  62 => 26,  49 => 17,  47 => 12,  40 => 8,  31 => 1,);
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

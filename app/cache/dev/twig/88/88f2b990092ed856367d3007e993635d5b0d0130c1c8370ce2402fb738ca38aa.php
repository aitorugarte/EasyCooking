<?php

/* base.html.twig */
class __TwigTemplate_d882acde4f4b42cd8633763c1d480248c057bf1eb49dc40eeba39fe53f81788a extends Twig_Template
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
        $__internal_4a9347979577cc3d435a5e1eee4cee9a6dba0e2c444040edf9e8cf9150301495 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9347979577cc3d435a5e1eee4cee9a6dba0e2c444040edf9e8cf9150301495->enter($__internal_4a9347979577cc3d435a5e1eee4cee9a6dba0e2c444040edf9e8cf9150301495_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_4a9347979577cc3d435a5e1eee4cee9a6dba0e2c444040edf9e8cf9150301495->leave($__internal_4a9347979577cc3d435a5e1eee4cee9a6dba0e2c444040edf9e8cf9150301495_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_90ecbdee1f26cd7e022ea8586109f4e13e074cd096cd2f2510ca007942528a74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90ecbdee1f26cd7e022ea8586109f4e13e074cd096cd2f2510ca007942528a74->enter($__internal_90ecbdee1f26cd7e022ea8586109f4e13e074cd096cd2f2510ca007942528a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_90ecbdee1f26cd7e022ea8586109f4e13e074cd096cd2f2510ca007942528a74->leave($__internal_90ecbdee1f26cd7e022ea8586109f4e13e074cd096cd2f2510ca007942528a74_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a9649c8e924984184b77cf1200e4500b1d04a4b6f0eb73d6ac6eab8a923c4a6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9649c8e924984184b77cf1200e4500b1d04a4b6f0eb73d6ac6eab8a923c4a6d->enter($__internal_a9649c8e924984184b77cf1200e4500b1d04a4b6f0eb73d6ac6eab8a923c4a6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_a9649c8e924984184b77cf1200e4500b1d04a4b6f0eb73d6ac6eab8a923c4a6d->leave($__internal_a9649c8e924984184b77cf1200e4500b1d04a4b6f0eb73d6ac6eab8a923c4a6d_prof);

    }

    // line 26
    public function block_cook_title($context, array $blocks = array())
    {
        $__internal_e4dc0ac06b8dcd2662e7c6e609f8c3b605d357661a804a63d1055423a415ef55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4dc0ac06b8dcd2662e7c6e609f8c3b605d357661a804a63d1055423a415ef55->enter($__internal_e4dc0ac06b8dcd2662e7c6e609f8c3b605d357661a804a63d1055423a415ef55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_e4dc0ac06b8dcd2662e7c6e609f8c3b605d357661a804a63d1055423a415ef55->leave($__internal_e4dc0ac06b8dcd2662e7c6e609f8c3b605d357661a804a63d1055423a415ef55_prof);

    }

    // line 27
    public function block_cook_tagline($context, array $blocks = array())
    {
        $__internal_4871cd9ee98050a40391fed901479d675df2f174724cdf76d514fda13ef92640 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4871cd9ee98050a40391fed901479d675df2f174724cdf76d514fda13ef92640->enter($__internal_4871cd9ee98050a40391fed901479d675df2f174724cdf76d514fda13ef92640_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
        
        $__internal_4871cd9ee98050a40391fed901479d675df2f174724cdf76d514fda13ef92640->leave($__internal_4871cd9ee98050a40391fed901479d675df2f174724cdf76d514fda13ef92640_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_5b990a926300f0102b110e535125528ca2f1350486c41bcdadd2d1e07618750a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b990a926300f0102b110e535125528ca2f1350486c41bcdadd2d1e07618750a->enter($__internal_5b990a926300f0102b110e535125528ca2f1350486c41bcdadd2d1e07618750a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_5b990a926300f0102b110e535125528ca2f1350486c41bcdadd2d1e07618750a->leave($__internal_5b990a926300f0102b110e535125528ca2f1350486c41bcdadd2d1e07618750a_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_aae7266fbb29771ffe0792b80de81332ffde1e3c826e29a503ee531aa0d2f404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aae7266fbb29771ffe0792b80de81332ffde1e3c826e29a503ee531aa0d2f404->enter($__internal_aae7266fbb29771ffe0792b80de81332ffde1e3c826e29a503ee531aa0d2f404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_aae7266fbb29771ffe0792b80de81332ffde1e3c826e29a503ee531aa0d2f404->leave($__internal_aae7266fbb29771ffe0792b80de81332ffde1e3c826e29a503ee531aa0d2f404_prof);

    }

    // line 56
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_786f154606efbde725e9f1fb3d03ebbad5c389a71300b831101d4e76fae61e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786f154606efbde725e9f1fb3d03ebbad5c389a71300b831101d4e76fae61e4c->enter($__internal_786f154606efbde725e9f1fb3d03ebbad5c389a71300b831101d4e76fae61e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_786f154606efbde725e9f1fb3d03ebbad5c389a71300b831101d4e76fae61e4c->leave($__internal_786f154606efbde725e9f1fb3d03ebbad5c389a71300b831101d4e76fae61e4c_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        $__internal_7706cfce134a346e4e646d0b3f909cbe9ea27eb64ff28696573cbdc9cc92738e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7706cfce134a346e4e646d0b3f909cbe9ea27eb64ff28696573cbdc9cc92738e->enter($__internal_7706cfce134a346e4e646d0b3f909cbe9ea27eb64ff28696573cbdc9cc92738e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "                    Cocina fácil - Creado como proyecto para Ingeniería Web
                ";
        
        $__internal_7706cfce134a346e4e646d0b3f909cbe9ea27eb64ff28696573cbdc9cc92738e->leave($__internal_7706cfce134a346e4e646d0b3f909cbe9ea27eb64ff28696573cbdc9cc92738e_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9735c12db8ab2e21d570814fafa43e368489292919e93253e199e41be67bba4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9735c12db8ab2e21d570814fafa43e368489292919e93253e199e41be67bba4c->enter($__internal_9735c12db8ab2e21d570814fafa43e368489292919e93253e199e41be67bba4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_9735c12db8ab2e21d570814fafa43e368489292919e93253e199e41be67bba4c->leave($__internal_9735c12db8ab2e21d570814fafa43e368489292919e93253e199e41be67bba4c_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app\\Resources\\views\\base.html.twig");
    }
}

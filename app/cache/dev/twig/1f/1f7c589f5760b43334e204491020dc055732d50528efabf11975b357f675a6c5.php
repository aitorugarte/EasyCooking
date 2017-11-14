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
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'navigation' => array($this, 'block_navigation'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7147dd89728b08cfca39fbb61846959999b7e66915dcaa66db395b734a225f58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7147dd89728b08cfca39fbb61846959999b7e66915dcaa66db395b734a225f58->enter($__internal_7147dd89728b08cfca39fbb61846959999b7e66915dcaa66db395b734a225f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 27
        $this->displayBlock('blog_tagline', $context, $blocks);
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
        
        $__internal_7147dd89728b08cfca39fbb61846959999b7e66915dcaa66db395b734a225f58->leave($__internal_7147dd89728b08cfca39fbb61846959999b7e66915dcaa66db395b734a225f58_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_f68bbf78a7e3e8fa57d38d5c9090d5e1eeea420f3f7292655129cb21f689710b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68bbf78a7e3e8fa57d38d5c9090d5e1eeea420f3f7292655129cb21f689710b->enter($__internal_f68bbf78a7e3e8fa57d38d5c9090d5e1eeea420f3f7292655129cb21f689710b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_f68bbf78a7e3e8fa57d38d5c9090d5e1eeea420f3f7292655129cb21f689710b->leave($__internal_f68bbf78a7e3e8fa57d38d5c9090d5e1eeea420f3f7292655129cb21f689710b_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1bb7da19536438e531ef836756272104ccd2104bc45d21256ba2df74e072cf44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bb7da19536438e531ef836756272104ccd2104bc45d21256ba2df74e072cf44->enter($__internal_1bb7da19536438e531ef836756272104ccd2104bc45d21256ba2df74e072cf44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_1bb7da19536438e531ef836756272104ccd2104bc45d21256ba2df74e072cf44->leave($__internal_1bb7da19536438e531ef836756272104ccd2104bc45d21256ba2df74e072cf44_prof);

    }

    // line 26
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_9f81a92f19629e984ea1fa04082040b17b43613248aa57d90d46f42f1602f51f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f81a92f19629e984ea1fa04082040b17b43613248aa57d90d46f42f1602f51f->enter($__internal_9f81a92f19629e984ea1fa04082040b17b43613248aa57d90d46f42f1602f51f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_9f81a92f19629e984ea1fa04082040b17b43613248aa57d90d46f42f1602f51f->leave($__internal_9f81a92f19629e984ea1fa04082040b17b43613248aa57d90d46f42f1602f51f_prof);

    }

    // line 27
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_906308e77237e0e418d0473f75b6d4cfb616758a3b3f999c7b62091df1993bb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_906308e77237e0e418d0473f75b6d4cfb616758a3b3f999c7b62091df1993bb4->enter($__internal_906308e77237e0e418d0473f75b6d4cfb616758a3b3f999c7b62091df1993bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
        
        $__internal_906308e77237e0e418d0473f75b6d4cfb616758a3b3f999c7b62091df1993bb4->leave($__internal_906308e77237e0e418d0473f75b6d4cfb616758a3b3f999c7b62091df1993bb4_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_2932a5633186400767f1e2a76db57daf4526cb70fc7d83fe86014d887839feb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2932a5633186400767f1e2a76db57daf4526cb70fc7d83fe86014d887839feb0->enter($__internal_2932a5633186400767f1e2a76db57daf4526cb70fc7d83fe86014d887839feb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 32
        echo "                        <nav>
                           <ul class=\"ul1\">
                                <li class=\"li2\"><a href=\"#\">Inicio</a></li>
                                <li class=\"li2\"><a href=\"#\">Recetas</a>\t\t
\t\t\t\t\t\t\t\t<ul class=\"ul2\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Entrantes</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Primeros</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Segundos</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Postres</a></li>
\t\t\t\t\t\t\t\t</ul>\t\t
\t\t\t\t\t\t\t\t</li>
                                <li class=\"li2\"><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_contact");
        echo "\">Contacto</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_2932a5633186400767f1e2a76db57daf4526cb70fc7d83fe86014d887839feb0->leave($__internal_2932a5633186400767f1e2a76db57daf4526cb70fc7d83fe86014d887839feb0_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_6f8238f83004ca2b9660e8a4054d14e13d59f06e49a5deeb12ded1ed3dfde7f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f8238f83004ca2b9660e8a4054d14e13d59f06e49a5deeb12ded1ed3dfde7f6->enter($__internal_6f8238f83004ca2b9660e8a4054d14e13d59f06e49a5deeb12ded1ed3dfde7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f8238f83004ca2b9660e8a4054d14e13d59f06e49a5deeb12ded1ed3dfde7f6->leave($__internal_6f8238f83004ca2b9660e8a4054d14e13d59f06e49a5deeb12ded1ed3dfde7f6_prof);

    }

    // line 56
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_872b920b864a805c264421fe7f146309b42e5a7ed5318c3fdaceae96049db746 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_872b920b864a805c264421fe7f146309b42e5a7ed5318c3fdaceae96049db746->enter($__internal_872b920b864a805c264421fe7f146309b42e5a7ed5318c3fdaceae96049db746_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_872b920b864a805c264421fe7f146309b42e5a7ed5318c3fdaceae96049db746->leave($__internal_872b920b864a805c264421fe7f146309b42e5a7ed5318c3fdaceae96049db746_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        $__internal_77c6fffe2d876d8e188ca647756bfb6d39204d88595b0be31551f5ebd3616e01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77c6fffe2d876d8e188ca647756bfb6d39204d88595b0be31551f5ebd3616e01->enter($__internal_77c6fffe2d876d8e188ca647756bfb6d39204d88595b0be31551f5ebd3616e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "                    Cocina fácil - Creado como proyecto para Ingeniería Web
                ";
        
        $__internal_77c6fffe2d876d8e188ca647756bfb6d39204d88595b0be31551f5ebd3616e01->leave($__internal_77c6fffe2d876d8e188ca647756bfb6d39204d88595b0be31551f5ebd3616e01_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_521572a6515564e7464ef25c01244482ded80bdf2259b1c62a9414c0172e8cbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521572a6515564e7464ef25c01244482ded80bdf2259b1c62a9414c0172e8cbc->enter($__internal_521572a6515564e7464ef25c01244482ded80bdf2259b1c62a9414c0172e8cbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_521572a6515564e7464ef25c01244482ded80bdf2259b1c62a9414c0172e8cbc->leave($__internal_521572a6515564e7464ef25c01244482ded80bdf2259b1c62a9414c0172e8cbc_prof);

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
        return array (  236 => 66,  228 => 61,  222 => 60,  211 => 56,  200 => 52,  189 => 43,  176 => 32,  170 => 31,  157 => 27,  145 => 26,  136 => 15,  132 => 13,  126 => 12,  114 => 8,  105 => 67,  103 => 66,  98 => 63,  96 => 60,  91 => 57,  89 => 56,  84 => 53,  82 => 52,  75 => 47,  73 => 31,  68 => 28,  66 => 27,  62 => 26,  49 => 17,  47 => 12,  40 => 8,  31 => 1,);
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
                    <h2>{% block blog_title %}<a href=\"#\">Cocina facil</a>{% endblock %}</h2>
                    <h3>{% block blog_tagline %}<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>{% endblock %}</h3>
\t\t\t\t\t\t   
\t\t\t\t<!-- Menú -->
                    {% block navigation %}
                        <nav>
                           <ul class=\"ul1\">
                                <li class=\"li2\"><a href=\"#\">Inicio</a></li>
                                <li class=\"li2\"><a href=\"#\">Recetas</a>\t\t
\t\t\t\t\t\t\t\t<ul class=\"ul2\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Entrantes</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Primeros</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Segundos</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Postres</a></li>
\t\t\t\t\t\t\t\t</ul>\t\t
\t\t\t\t\t\t\t\t</li>
                                <li class=\"li2\"><a href=\"{{ path('blogger_blog_contact')}}\">Contacto</a></li>
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

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
        $__internal_7788bbe0c68952a89471b61a8b60e88d4dc75661569f8c5672e0f5df4b593891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7788bbe0c68952a89471b61a8b60e88d4dc75661569f8c5672e0f5df4b593891->enter($__internal_7788bbe0c68952a89471b61a8b60e88d4dc75661569f8c5672e0f5df4b593891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
           
\t\t\t<header id=\"header\">
                <hgroup>
                    <h2>";
        // line 25
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 26
        $this->displayBlock('blog_tagline', $context, $blocks);
        // line 27
        echo "</h3>
                </hgroup>
            </header>
       
\t   <!-- https://www.w3schools.com/css/tryit.asp?filename=trycss_float5 -->
                    ";
        // line 32
        $this->displayBlock('navigation', $context, $blocks);
        // line 49
        echo "             

            <section class=\"main-col\">
                ";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 53
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 55
        $this->displayBlock('sidebar', $context, $blocks);
        // line 56
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 59
        $this->displayBlock('footer', $context, $blocks);
        // line 62
        echo "            </div>
        </section>

        ";
        // line 65
        $this->displayBlock('javascripts', $context, $blocks);
        // line 66
        echo "    </body>
</html>
";
        
        $__internal_7788bbe0c68952a89471b61a8b60e88d4dc75661569f8c5672e0f5df4b593891->leave($__internal_7788bbe0c68952a89471b61a8b60e88d4dc75661569f8c5672e0f5df4b593891_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0033641c04141cccd2a0f8ae017a0ed4a37fa4a5c1c980df53623478543d22b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0033641c04141cccd2a0f8ae017a0ed4a37fa4a5c1c980df53623478543d22b->enter($__internal_d0033641c04141cccd2a0f8ae017a0ed4a37fa4a5c1c980df53623478543d22b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_d0033641c04141cccd2a0f8ae017a0ed4a37fa4a5c1c980df53623478543d22b->leave($__internal_d0033641c04141cccd2a0f8ae017a0ed4a37fa4a5c1c980df53623478543d22b_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4f682b3a38a90513bd9d3a100a639f32658d37f8ad1982208719c05777e2d9a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f682b3a38a90513bd9d3a100a639f32658d37f8ad1982208719c05777e2d9a3->enter($__internal_4f682b3a38a90513bd9d3a100a639f32658d37f8ad1982208719c05777e2d9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_4f682b3a38a90513bd9d3a100a639f32658d37f8ad1982208719c05777e2d9a3->leave($__internal_4f682b3a38a90513bd9d3a100a639f32658d37f8ad1982208719c05777e2d9a3_prof);

    }

    // line 25
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_4786c2b09ebc906e5a863784f5d60ee03b6efa77adf7b0ff9d17224c71957242 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4786c2b09ebc906e5a863784f5d60ee03b6efa77adf7b0ff9d17224c71957242->enter($__internal_4786c2b09ebc906e5a863784f5d60ee03b6efa77adf7b0ff9d17224c71957242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_4786c2b09ebc906e5a863784f5d60ee03b6efa77adf7b0ff9d17224c71957242->leave($__internal_4786c2b09ebc906e5a863784f5d60ee03b6efa77adf7b0ff9d17224c71957242_prof);

    }

    // line 26
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_2cd744dc294801228b99c03c0bb09d1278be385554382eb25230ded92ccb3cb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cd744dc294801228b99c03c0bb09d1278be385554382eb25230ded92ccb3cb7->enter($__internal_2cd744dc294801228b99c03c0bb09d1278be385554382eb25230ded92ccb3cb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
        
        $__internal_2cd744dc294801228b99c03c0bb09d1278be385554382eb25230ded92ccb3cb7->leave($__internal_2cd744dc294801228b99c03c0bb09d1278be385554382eb25230ded92ccb3cb7_prof);

    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_b2665cc8248db091cce5401950adbac889ea084142eda9c2fe01599381029599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2665cc8248db091cce5401950adbac889ea084142eda9c2fe01599381029599->enter($__internal_b2665cc8248db091cce5401950adbac889ea084142eda9c2fe01599381029599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 33
        echo "                        <nav>
                            <ul class=\"ul1\">
                                <li class=\"li2\"><a href=\"#\">Inicio</a></li>
                                <li class=\"li2\"><a href=\"#\">Recetas</a>
\t\t\t\t\t\t\t\t<ul class=\"ul2\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Entrantes</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Primeros</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Segundos</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Postres</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
                                <li class=\"li2\"><a href=\"";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_contact");
        echo "\">Contacto</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_b2665cc8248db091cce5401950adbac889ea084142eda9c2fe01599381029599->leave($__internal_b2665cc8248db091cce5401950adbac889ea084142eda9c2fe01599381029599_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_4caebd00d8cae2e1252d9bf61459a0d29c443ef537de2783b623fe9321c8e204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4caebd00d8cae2e1252d9bf61459a0d29c443ef537de2783b623fe9321c8e204->enter($__internal_4caebd00d8cae2e1252d9bf61459a0d29c443ef537de2783b623fe9321c8e204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4caebd00d8cae2e1252d9bf61459a0d29c443ef537de2783b623fe9321c8e204->leave($__internal_4caebd00d8cae2e1252d9bf61459a0d29c443ef537de2783b623fe9321c8e204_prof);

    }

    // line 55
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_43218553524b44250a6e2dab58dc7f693c29d906b783e56e410478923238e983 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43218553524b44250a6e2dab58dc7f693c29d906b783e56e410478923238e983->enter($__internal_43218553524b44250a6e2dab58dc7f693c29d906b783e56e410478923238e983_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_43218553524b44250a6e2dab58dc7f693c29d906b783e56e410478923238e983->leave($__internal_43218553524b44250a6e2dab58dc7f693c29d906b783e56e410478923238e983_prof);

    }

    // line 59
    public function block_footer($context, array $blocks = array())
    {
        $__internal_70b2b529d0311094c2d9baeedb432790baaf14db0c97c99be2e3c21932936018 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70b2b529d0311094c2d9baeedb432790baaf14db0c97c99be2e3c21932936018->enter($__internal_70b2b529d0311094c2d9baeedb432790baaf14db0c97c99be2e3c21932936018_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 60
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_70b2b529d0311094c2d9baeedb432790baaf14db0c97c99be2e3c21932936018->leave($__internal_70b2b529d0311094c2d9baeedb432790baaf14db0c97c99be2e3c21932936018_prof);

    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_57e7074f99faa5cdf53a62a8fb630e6be2f76bfaeb5095a6c34b56130517fa01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e7074f99faa5cdf53a62a8fb630e6be2f76bfaeb5095a6c34b56130517fa01->enter($__internal_57e7074f99faa5cdf53a62a8fb630e6be2f76bfaeb5095a6c34b56130517fa01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_57e7074f99faa5cdf53a62a8fb630e6be2f76bfaeb5095a6c34b56130517fa01->leave($__internal_57e7074f99faa5cdf53a62a8fb630e6be2f76bfaeb5095a6c34b56130517fa01_prof);

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
        return array (  235 => 65,  227 => 60,  221 => 59,  210 => 55,  199 => 52,  188 => 45,  174 => 33,  168 => 32,  155 => 26,  143 => 25,  134 => 15,  130 => 13,  124 => 12,  112 => 8,  103 => 66,  101 => 65,  96 => 62,  94 => 59,  89 => 56,  87 => 55,  83 => 53,  81 => 52,  76 => 49,  74 => 32,  67 => 27,  65 => 26,  61 => 25,  49 => 17,  47 => 12,  40 => 8,  31 => 1,);
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
           
\t\t\t<header id=\"header\">
                <hgroup>
                    <h2>{% block blog_title %}<a href=\"#\">Cocina facil</a>{% endblock %}</h2>
                    <h3>{% block blog_tagline %}<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>{% endblock %}</h3>
                </hgroup>
            </header>
       
\t   <!-- https://www.w3schools.com/css/tryit.asp?filename=trycss_float5 -->
                    {% block navigation %}
                        <nav>
                            <ul class=\"ul1\">
                                <li class=\"li2\"><a href=\"#\">Inicio</a></li>
                                <li class=\"li2\"><a href=\"#\">Recetas</a>
\t\t\t\t\t\t\t\t<ul class=\"ul2\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Entrantes</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Primeros</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Segundos</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Postres</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>
                                <li class=\"li2\"><a href=\"{{ path('blogger_blog_contact')}}\">Contacto</a></li>
                            </ul>
                        </nav>
                    {% endblock %}
             

            <section class=\"main-col\">
                {% block body %}{% endblock %}
            </section>
            <aside class=\"sidebar\">
                {% block sidebar %}{% endblock %}
            </aside>

            <div id=\"footer\">
                {% block footer %}
                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                {% endblock %}
            </div>
        </section>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app/Resources\\views/base.html.twig");
    }
}

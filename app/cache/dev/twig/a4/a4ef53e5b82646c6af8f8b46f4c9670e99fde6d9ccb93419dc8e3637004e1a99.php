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
        $__internal_24cfb8441e2acd48f3749ad6697c18588b82e71a670c6f0c672b3898bafe96bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24cfb8441e2acd48f3749ad6697c18588b82e71a670c6f0c672b3898bafe96bd->enter($__internal_24cfb8441e2acd48f3749ad6697c18588b82e71a670c6f0c672b3898bafe96bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_24cfb8441e2acd48f3749ad6697c18588b82e71a670c6f0c672b3898bafe96bd->leave($__internal_24cfb8441e2acd48f3749ad6697c18588b82e71a670c6f0c672b3898bafe96bd_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d758788f6a4b30e03268694db23d5cf37aae8d15f1530e29aab8e440bde1eda7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d758788f6a4b30e03268694db23d5cf37aae8d15f1530e29aab8e440bde1eda7->enter($__internal_d758788f6a4b30e03268694db23d5cf37aae8d15f1530e29aab8e440bde1eda7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_d758788f6a4b30e03268694db23d5cf37aae8d15f1530e29aab8e440bde1eda7->leave($__internal_d758788f6a4b30e03268694db23d5cf37aae8d15f1530e29aab8e440bde1eda7_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cb3a1ebf3bb199089007172db4d18e21de4b1def76ef78ca8b69c03ddff9987f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb3a1ebf3bb199089007172db4d18e21de4b1def76ef78ca8b69c03ddff9987f->enter($__internal_cb3a1ebf3bb199089007172db4d18e21de4b1def76ef78ca8b69c03ddff9987f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_cb3a1ebf3bb199089007172db4d18e21de4b1def76ef78ca8b69c03ddff9987f->leave($__internal_cb3a1ebf3bb199089007172db4d18e21de4b1def76ef78ca8b69c03ddff9987f_prof);

    }

    // line 26
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_ca9a3fb8230207900ba67e7fb922e87ff74abfc5f378c7b731a5b9eafbe95f76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca9a3fb8230207900ba67e7fb922e87ff74abfc5f378c7b731a5b9eafbe95f76->enter($__internal_ca9a3fb8230207900ba67e7fb922e87ff74abfc5f378c7b731a5b9eafbe95f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_ca9a3fb8230207900ba67e7fb922e87ff74abfc5f378c7b731a5b9eafbe95f76->leave($__internal_ca9a3fb8230207900ba67e7fb922e87ff74abfc5f378c7b731a5b9eafbe95f76_prof);

    }

    // line 27
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_c81923f3407e4f506905425ec8ffa2a9884bd8a2b925684c57ba3d432bcdf646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c81923f3407e4f506905425ec8ffa2a9884bd8a2b925684c57ba3d432bcdf646->enter($__internal_c81923f3407e4f506905425ec8ffa2a9884bd8a2b925684c57ba3d432bcdf646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
        
        $__internal_c81923f3407e4f506905425ec8ffa2a9884bd8a2b925684c57ba3d432bcdf646->leave($__internal_c81923f3407e4f506905425ec8ffa2a9884bd8a2b925684c57ba3d432bcdf646_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_2e6ae041cdf743cb5be8ae98693fccc3e7fc28a4c6d94cc4dbc0d8f006635ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e6ae041cdf743cb5be8ae98693fccc3e7fc28a4c6d94cc4dbc0d8f006635ec5->enter($__internal_2e6ae041cdf743cb5be8ae98693fccc3e7fc28a4c6d94cc4dbc0d8f006635ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_2e6ae041cdf743cb5be8ae98693fccc3e7fc28a4c6d94cc4dbc0d8f006635ec5->leave($__internal_2e6ae041cdf743cb5be8ae98693fccc3e7fc28a4c6d94cc4dbc0d8f006635ec5_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_c86c348d72f4d005a834a557c4758c9ae5be82177c88842f05698c7191204a6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86c348d72f4d005a834a557c4758c9ae5be82177c88842f05698c7191204a6f->enter($__internal_c86c348d72f4d005a834a557c4758c9ae5be82177c88842f05698c7191204a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c86c348d72f4d005a834a557c4758c9ae5be82177c88842f05698c7191204a6f->leave($__internal_c86c348d72f4d005a834a557c4758c9ae5be82177c88842f05698c7191204a6f_prof);

    }

    // line 56
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_cab4f49e262cce9ed0ea459244ca0201e29fd93d103deb7397010f7af15b54b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cab4f49e262cce9ed0ea459244ca0201e29fd93d103deb7397010f7af15b54b7->enter($__internal_cab4f49e262cce9ed0ea459244ca0201e29fd93d103deb7397010f7af15b54b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_cab4f49e262cce9ed0ea459244ca0201e29fd93d103deb7397010f7af15b54b7->leave($__internal_cab4f49e262cce9ed0ea459244ca0201e29fd93d103deb7397010f7af15b54b7_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        $__internal_ca41dedbef299575f41f030c1b6bea0eee5f187e874fa4c165b0af31302ee75a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca41dedbef299575f41f030c1b6bea0eee5f187e874fa4c165b0af31302ee75a->enter($__internal_ca41dedbef299575f41f030c1b6bea0eee5f187e874fa4c165b0af31302ee75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "                    Cocina fácil - Creado como proyecto para Ingeniería Web
                ";
        
        $__internal_ca41dedbef299575f41f030c1b6bea0eee5f187e874fa4c165b0af31302ee75a->leave($__internal_ca41dedbef299575f41f030c1b6bea0eee5f187e874fa4c165b0af31302ee75a_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_656e4099053c1d2fb2ac37e992bc1c897bde5c8c50b410da696d452655d7e738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_656e4099053c1d2fb2ac37e992bc1c897bde5c8c50b410da696d452655d7e738->enter($__internal_656e4099053c1d2fb2ac37e992bc1c897bde5c8c50b410da696d452655d7e738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_656e4099053c1d2fb2ac37e992bc1c897bde5c8c50b410da696d452655d7e738->leave($__internal_656e4099053c1d2fb2ac37e992bc1c897bde5c8c50b410da696d452655d7e738_prof);

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
", "::base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app\\Resources\\views\\base.html.twig");
    }
}

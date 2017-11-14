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
        $__internal_c3e4c679de4dabbff29092ded3a2d5f5bf09e965a498f56980d8df8ae434daa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3e4c679de4dabbff29092ded3a2d5f5bf09e965a498f56980d8df8ae434daa1->enter($__internal_c3e4c679de4dabbff29092ded3a2d5f5bf09e965a498f56980d8df8ae434daa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_c3e4c679de4dabbff29092ded3a2d5f5bf09e965a498f56980d8df8ae434daa1->leave($__internal_c3e4c679de4dabbff29092ded3a2d5f5bf09e965a498f56980d8df8ae434daa1_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_1f1e84646e343479bfafd87a5f636b6f7639d28c322a8d06e366057b0829b789 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f1e84646e343479bfafd87a5f636b6f7639d28c322a8d06e366057b0829b789->enter($__internal_1f1e84646e343479bfafd87a5f636b6f7639d28c322a8d06e366057b0829b789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_1f1e84646e343479bfafd87a5f636b6f7639d28c322a8d06e366057b0829b789->leave($__internal_1f1e84646e343479bfafd87a5f636b6f7639d28c322a8d06e366057b0829b789_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a573ef84f87d12cd262fbd68bd165cc4a467e941a885fe6900267191d37a3aeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a573ef84f87d12cd262fbd68bd165cc4a467e941a885fe6900267191d37a3aeb->enter($__internal_a573ef84f87d12cd262fbd68bd165cc4a467e941a885fe6900267191d37a3aeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_a573ef84f87d12cd262fbd68bd165cc4a467e941a885fe6900267191d37a3aeb->leave($__internal_a573ef84f87d12cd262fbd68bd165cc4a467e941a885fe6900267191d37a3aeb_prof);

    }

    // line 26
    public function block_cook_title($context, array $blocks = array())
    {
        $__internal_51a480238f48c52357fb79e6b9d45d32b54423c677f1b87486181c3b1402abd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51a480238f48c52357fb79e6b9d45d32b54423c677f1b87486181c3b1402abd0->enter($__internal_51a480238f48c52357fb79e6b9d45d32b54423c677f1b87486181c3b1402abd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_51a480238f48c52357fb79e6b9d45d32b54423c677f1b87486181c3b1402abd0->leave($__internal_51a480238f48c52357fb79e6b9d45d32b54423c677f1b87486181c3b1402abd0_prof);

    }

    // line 27
    public function block_cook_tagline($context, array $blocks = array())
    {
        $__internal_70a54ad78711765d42135c97b16b398b7e3fcaa505c2a29e7b950ebec0dd465e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70a54ad78711765d42135c97b16b398b7e3fcaa505c2a29e7b950ebec0dd465e->enter($__internal_70a54ad78711765d42135c97b16b398b7e3fcaa505c2a29e7b950ebec0dd465e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
        
        $__internal_70a54ad78711765d42135c97b16b398b7e3fcaa505c2a29e7b950ebec0dd465e->leave($__internal_70a54ad78711765d42135c97b16b398b7e3fcaa505c2a29e7b950ebec0dd465e_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_5969ce819bfeef5b2767a5bbb6b0a2c2d2443cec7eb3a1a4fdc3be5ba41c7ea4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5969ce819bfeef5b2767a5bbb6b0a2c2d2443cec7eb3a1a4fdc3be5ba41c7ea4->enter($__internal_5969ce819bfeef5b2767a5bbb6b0a2c2d2443cec7eb3a1a4fdc3be5ba41c7ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_contact");
        echo "\">Contacto</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_5969ce819bfeef5b2767a5bbb6b0a2c2d2443cec7eb3a1a4fdc3be5ba41c7ea4->leave($__internal_5969ce819bfeef5b2767a5bbb6b0a2c2d2443cec7eb3a1a4fdc3be5ba41c7ea4_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_c47b93c92bd13450d677760c0860b0c6f7c81abbca8feef9e49d500f432fc1ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c47b93c92bd13450d677760c0860b0c6f7c81abbca8feef9e49d500f432fc1ec->enter($__internal_c47b93c92bd13450d677760c0860b0c6f7c81abbca8feef9e49d500f432fc1ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_c47b93c92bd13450d677760c0860b0c6f7c81abbca8feef9e49d500f432fc1ec->leave($__internal_c47b93c92bd13450d677760c0860b0c6f7c81abbca8feef9e49d500f432fc1ec_prof);

    }

    // line 56
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3d9c3df7b936d1908d9b7ec67966a0a4cd642bcfab156ca78426a44f899055d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d9c3df7b936d1908d9b7ec67966a0a4cd642bcfab156ca78426a44f899055d2->enter($__internal_3d9c3df7b936d1908d9b7ec67966a0a4cd642bcfab156ca78426a44f899055d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_3d9c3df7b936d1908d9b7ec67966a0a4cd642bcfab156ca78426a44f899055d2->leave($__internal_3d9c3df7b936d1908d9b7ec67966a0a4cd642bcfab156ca78426a44f899055d2_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        $__internal_2663f7aa427d5a2bad6aaf0ff031f53654286a95baf1c0f42be89b380c557a52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2663f7aa427d5a2bad6aaf0ff031f53654286a95baf1c0f42be89b380c557a52->enter($__internal_2663f7aa427d5a2bad6aaf0ff031f53654286a95baf1c0f42be89b380c557a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "                    Cocina fácil - Creado como proyecto para Ingeniería Web
                ";
        
        $__internal_2663f7aa427d5a2bad6aaf0ff031f53654286a95baf1c0f42be89b380c557a52->leave($__internal_2663f7aa427d5a2bad6aaf0ff031f53654286a95baf1c0f42be89b380c557a52_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e8e3883ab6f2694b43397413835d0ed39da1fb57215d090a77e96d67f607ad5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e3883ab6f2694b43397413835d0ed39da1fb57215d090a77e96d67f607ad5f->enter($__internal_e8e3883ab6f2694b43397413835d0ed39da1fb57215d090a77e96d67f607ad5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e8e3883ab6f2694b43397413835d0ed39da1fb57215d090a77e96d67f607ad5f->leave($__internal_e8e3883ab6f2694b43397413835d0ed39da1fb57215d090a77e96d67f607ad5f_prof);

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
                    <h2>{% block cook_title %}<a href=\"#\">Cocina facil</a>{% endblock %}</h2>
                    <h3>{% block cook_tagline %}<a href=\"#\">\"Cuanto mayor es la dificultad,
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

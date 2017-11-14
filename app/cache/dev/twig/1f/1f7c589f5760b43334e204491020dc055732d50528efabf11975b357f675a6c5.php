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
        $__internal_9985c9074f03e1ec6d53f52435d23c1698d2d7033e78d763edec9b02594a438c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9985c9074f03e1ec6d53f52435d23c1698d2d7033e78d763edec9b02594a438c->enter($__internal_9985c9074f03e1ec6d53f52435d23c1698d2d7033e78d763edec9b02594a438c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
\t\t\t\t<!-- Men� -->
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
\t\t\t<!-- Pie de p�gina -->
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
        
        $__internal_9985c9074f03e1ec6d53f52435d23c1698d2d7033e78d763edec9b02594a438c->leave($__internal_9985c9074f03e1ec6d53f52435d23c1698d2d7033e78d763edec9b02594a438c_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_b9e19a8659106b36cb01394ea3cdd991aef2a8be6d3f3ae618854bb18fabc3eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9e19a8659106b36cb01394ea3cdd991aef2a8be6d3f3ae618854bb18fabc3eb->enter($__internal_b9e19a8659106b36cb01394ea3cdd991aef2a8be6d3f3ae618854bb18fabc3eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_b9e19a8659106b36cb01394ea3cdd991aef2a8be6d3f3ae618854bb18fabc3eb->leave($__internal_b9e19a8659106b36cb01394ea3cdd991aef2a8be6d3f3ae618854bb18fabc3eb_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_684f161aa337bf5411d6a62a384bcd60e81c7b1e159e0649f472467bfd931f2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_684f161aa337bf5411d6a62a384bcd60e81c7b1e159e0649f472467bfd931f2c->enter($__internal_684f161aa337bf5411d6a62a384bcd60e81c7b1e159e0649f472467bfd931f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_684f161aa337bf5411d6a62a384bcd60e81c7b1e159e0649f472467bfd931f2c->leave($__internal_684f161aa337bf5411d6a62a384bcd60e81c7b1e159e0649f472467bfd931f2c_prof);

    }

    // line 26
    public function block_cook_title($context, array $blocks = array())
    {
        $__internal_31ac789d1ef19bf63b372a112491aa8ecb630668b3dd220593f45c5fc5ba302c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ac789d1ef19bf63b372a112491aa8ecb630668b3dd220593f45c5fc5ba302c->enter($__internal_31ac789d1ef19bf63b372a112491aa8ecb630668b3dd220593f45c5fc5ba302c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_31ac789d1ef19bf63b372a112491aa8ecb630668b3dd220593f45c5fc5ba302c->leave($__internal_31ac789d1ef19bf63b372a112491aa8ecb630668b3dd220593f45c5fc5ba302c_prof);

    }

    // line 27
    public function block_cook_tagline($context, array $blocks = array())
    {
        $__internal_e2027f38baedc697d853dc02aa778750d374e78129736b2ff6ea59c1d76cb6da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2027f38baedc697d853dc02aa778750d374e78129736b2ff6ea59c1d76cb6da->enter($__internal_e2027f38baedc697d853dc02aa778750d374e78129736b2ff6ea59c1d76cb6da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicer�n</a>";
        
        $__internal_e2027f38baedc697d853dc02aa778750d374e78129736b2ff6ea59c1d76cb6da->leave($__internal_e2027f38baedc697d853dc02aa778750d374e78129736b2ff6ea59c1d76cb6da_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_477d22dacd77676aacdb42ec3a23201dd8280985a242b3fbfe4a5998c8b8521c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477d22dacd77676aacdb42ec3a23201dd8280985a242b3fbfe4a5998c8b8521c->enter($__internal_477d22dacd77676aacdb42ec3a23201dd8280985a242b3fbfe4a5998c8b8521c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_477d22dacd77676aacdb42ec3a23201dd8280985a242b3fbfe4a5998c8b8521c->leave($__internal_477d22dacd77676aacdb42ec3a23201dd8280985a242b3fbfe4a5998c8b8521c_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_01289ba009c7668eb0d21f9c55e37d34e75436f2f0376099f62ebd121dead100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01289ba009c7668eb0d21f9c55e37d34e75436f2f0376099f62ebd121dead100->enter($__internal_01289ba009c7668eb0d21f9c55e37d34e75436f2f0376099f62ebd121dead100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_01289ba009c7668eb0d21f9c55e37d34e75436f2f0376099f62ebd121dead100->leave($__internal_01289ba009c7668eb0d21f9c55e37d34e75436f2f0376099f62ebd121dead100_prof);

    }

    // line 56
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_f80e68d980fdc1b2a0f4ace6f17e46eb5e233ba628f5ec565f25b007ef66523f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f80e68d980fdc1b2a0f4ace6f17e46eb5e233ba628f5ec565f25b007ef66523f->enter($__internal_f80e68d980fdc1b2a0f4ace6f17e46eb5e233ba628f5ec565f25b007ef66523f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_f80e68d980fdc1b2a0f4ace6f17e46eb5e233ba628f5ec565f25b007ef66523f->leave($__internal_f80e68d980fdc1b2a0f4ace6f17e46eb5e233ba628f5ec565f25b007ef66523f_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        $__internal_9e94f67c6affa678460af6bab31ca5806f33d72b329bf169b18bcda2ee212265 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e94f67c6affa678460af6bab31ca5806f33d72b329bf169b18bcda2ee212265->enter($__internal_9e94f67c6affa678460af6bab31ca5806f33d72b329bf169b18bcda2ee212265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "                    Cocina f�cil - Creado como proyecto para Ingenier�a Web
                ";
        
        $__internal_9e94f67c6affa678460af6bab31ca5806f33d72b329bf169b18bcda2ee212265->leave($__internal_9e94f67c6affa678460af6bab31ca5806f33d72b329bf169b18bcda2ee212265_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_af164dd8b3fa9fdfbe9990244b18b0077a31063c3e8369ac9389777df020f1fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af164dd8b3fa9fdfbe9990244b18b0077a31063c3e8369ac9389777df020f1fb->enter($__internal_af164dd8b3fa9fdfbe9990244b18b0077a31063c3e8369ac9389777df020f1fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_af164dd8b3fa9fdfbe9990244b18b0077a31063c3e8369ac9389777df020f1fb->leave($__internal_af164dd8b3fa9fdfbe9990244b18b0077a31063c3e8369ac9389777df020f1fb_prof);

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
\t\t\t\t\tmayor es la gloria.\" Cicer�n</a>{% endblock %}</h3>
\t\t\t\t\t\t   
\t\t\t\t<!-- Men� -->
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
\t\t\t<!-- Pie de p�gina -->
            <div id=\"footer\">
                {% block footer %}
                    Cocina f�cil - Creado como proyecto para Ingenier�a Web
                {% endblock %}
            </div>
        </section>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app/Resources\\views/base.html.twig");
    }
}

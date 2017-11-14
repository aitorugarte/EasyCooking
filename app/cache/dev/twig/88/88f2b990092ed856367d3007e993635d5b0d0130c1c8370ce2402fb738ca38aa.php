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
        $__internal_42d3d83907b372063c4e31f9457a4911ac07189493fd65020c9bb9ffed93d547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42d3d83907b372063c4e31f9457a4911ac07189493fd65020c9bb9ffed93d547->enter($__internal_42d3d83907b372063c4e31f9457a4911ac07189493fd65020c9bb9ffed93d547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_42d3d83907b372063c4e31f9457a4911ac07189493fd65020c9bb9ffed93d547->leave($__internal_42d3d83907b372063c4e31f9457a4911ac07189493fd65020c9bb9ffed93d547_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_71dceb320c964278e0a6d9efe81cf2a09b9f72de074053d42d009208202fd35d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71dceb320c964278e0a6d9efe81cf2a09b9f72de074053d42d009208202fd35d->enter($__internal_71dceb320c964278e0a6d9efe81cf2a09b9f72de074053d42d009208202fd35d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_71dceb320c964278e0a6d9efe81cf2a09b9f72de074053d42d009208202fd35d->leave($__internal_71dceb320c964278e0a6d9efe81cf2a09b9f72de074053d42d009208202fd35d_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd373573120f83d19ce5e9c66d5bc5f171b8122692a579b9ed415b6603e41fa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd373573120f83d19ce5e9c66d5bc5f171b8122692a579b9ed415b6603e41fa8->enter($__internal_cd373573120f83d19ce5e9c66d5bc5f171b8122692a579b9ed415b6603e41fa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_cd373573120f83d19ce5e9c66d5bc5f171b8122692a579b9ed415b6603e41fa8->leave($__internal_cd373573120f83d19ce5e9c66d5bc5f171b8122692a579b9ed415b6603e41fa8_prof);

    }

    // line 26
    public function block_cook_title($context, array $blocks = array())
    {
        $__internal_ba052070025aa524402c992121df09df0fc9c4145cf71ef507cc64f80dfbae66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba052070025aa524402c992121df09df0fc9c4145cf71ef507cc64f80dfbae66->enter($__internal_ba052070025aa524402c992121df09df0fc9c4145cf71ef507cc64f80dfbae66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_ba052070025aa524402c992121df09df0fc9c4145cf71ef507cc64f80dfbae66->leave($__internal_ba052070025aa524402c992121df09df0fc9c4145cf71ef507cc64f80dfbae66_prof);

    }

    // line 27
    public function block_cook_tagline($context, array $blocks = array())
    {
        $__internal_39c136e6dca73488b33fffc469456c0369828a470b7dded65e9fd0aaf4e629d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c136e6dca73488b33fffc469456c0369828a470b7dded65e9fd0aaf4e629d0->enter($__internal_39c136e6dca73488b33fffc469456c0369828a470b7dded65e9fd0aaf4e629d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
        
        $__internal_39c136e6dca73488b33fffc469456c0369828a470b7dded65e9fd0aaf4e629d0->leave($__internal_39c136e6dca73488b33fffc469456c0369828a470b7dded65e9fd0aaf4e629d0_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_828425d6448ab348c26e345ea0b8513c6c73651ab319de67e669d9ac5209044c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_828425d6448ab348c26e345ea0b8513c6c73651ab319de67e669d9ac5209044c->enter($__internal_828425d6448ab348c26e345ea0b8513c6c73651ab319de67e669d9ac5209044c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_828425d6448ab348c26e345ea0b8513c6c73651ab319de67e669d9ac5209044c->leave($__internal_828425d6448ab348c26e345ea0b8513c6c73651ab319de67e669d9ac5209044c_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e65f90db126fb8824af0694cd0709ca33c8a87c7a824c54c80f02e8b60401ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e65f90db126fb8824af0694cd0709ca33c8a87c7a824c54c80f02e8b60401ba->enter($__internal_2e65f90db126fb8824af0694cd0709ca33c8a87c7a824c54c80f02e8b60401ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2e65f90db126fb8824af0694cd0709ca33c8a87c7a824c54c80f02e8b60401ba->leave($__internal_2e65f90db126fb8824af0694cd0709ca33c8a87c7a824c54c80f02e8b60401ba_prof);

    }

    // line 56
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_afb390110567adc098994c7c81a0cb12627ab6d187deb9bb4a4f792a3f7b4bf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb390110567adc098994c7c81a0cb12627ab6d187deb9bb4a4f792a3f7b4bf2->enter($__internal_afb390110567adc098994c7c81a0cb12627ab6d187deb9bb4a4f792a3f7b4bf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_afb390110567adc098994c7c81a0cb12627ab6d187deb9bb4a4f792a3f7b4bf2->leave($__internal_afb390110567adc098994c7c81a0cb12627ab6d187deb9bb4a4f792a3f7b4bf2_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        $__internal_88f493792b2cfc6b89bb88d801badfb7356c16d29add78b0f9d697ab2278f94b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f493792b2cfc6b89bb88d801badfb7356c16d29add78b0f9d697ab2278f94b->enter($__internal_88f493792b2cfc6b89bb88d801badfb7356c16d29add78b0f9d697ab2278f94b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "                    Cocina fácil - Creado como proyecto para Ingeniería Web
                ";
        
        $__internal_88f493792b2cfc6b89bb88d801badfb7356c16d29add78b0f9d697ab2278f94b->leave($__internal_88f493792b2cfc6b89bb88d801badfb7356c16d29add78b0f9d697ab2278f94b_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_565c94dd8b22988877cddcdea284e8cde03c372c943721658584a00fa1f8fed4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_565c94dd8b22988877cddcdea284e8cde03c372c943721658584a00fa1f8fed4->enter($__internal_565c94dd8b22988877cddcdea284e8cde03c372c943721658584a00fa1f8fed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_565c94dd8b22988877cddcdea284e8cde03c372c943721658584a00fa1f8fed4->leave($__internal_565c94dd8b22988877cddcdea284e8cde03c372c943721658584a00fa1f8fed4_prof);

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
", "base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app\\Resources\\views\\base.html.twig");
    }
}

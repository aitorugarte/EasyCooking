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
        $__internal_2526c78faf7ef1c074d36bcbaac28819dcfb6e67b320c38f5ddc42071e6c292f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2526c78faf7ef1c074d36bcbaac28819dcfb6e67b320c38f5ddc42071e6c292f->enter($__internal_2526c78faf7ef1c074d36bcbaac28819dcfb6e67b320c38f5ddc42071e6c292f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 48
        echo "                </hgroup>
            </header>
       
\t\t\t<!-- Contenido principal -->
            <section class=\"main-col\">
                ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "            </section>
\t\t\t<!-- Contenido lateral derecho -->
            <aside class=\"sidebar\">
                ";
        // line 57
        $this->displayBlock('sidebar', $context, $blocks);
        // line 58
        echo "            </aside>
\t\t\t<!-- Pie de página -->
            <div id=\"footer\">
                ";
        // line 61
        $this->displayBlock('footer', $context, $blocks);
        // line 64
        echo "            </div>
        </section>

        ";
        // line 67
        $this->displayBlock('javascripts', $context, $blocks);
        // line 68
        echo "    </body>
</html>
";
        
        $__internal_2526c78faf7ef1c074d36bcbaac28819dcfb6e67b320c38f5ddc42071e6c292f->leave($__internal_2526c78faf7ef1c074d36bcbaac28819dcfb6e67b320c38f5ddc42071e6c292f_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_54f40608955e23e8b9c6e05784fc8adaba820aae50fdbebc1c4926c0226f2c97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54f40608955e23e8b9c6e05784fc8adaba820aae50fdbebc1c4926c0226f2c97->enter($__internal_54f40608955e23e8b9c6e05784fc8adaba820aae50fdbebc1c4926c0226f2c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_54f40608955e23e8b9c6e05784fc8adaba820aae50fdbebc1c4926c0226f2c97->leave($__internal_54f40608955e23e8b9c6e05784fc8adaba820aae50fdbebc1c4926c0226f2c97_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d2f539f4f6ea442d12644a54bdf4fc782a44b3df55dbab0f94e82f08e10a87fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2f539f4f6ea442d12644a54bdf4fc782a44b3df55dbab0f94e82f08e10a87fd->enter($__internal_d2f539f4f6ea442d12644a54bdf4fc782a44b3df55dbab0f94e82f08e10a87fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_d2f539f4f6ea442d12644a54bdf4fc782a44b3df55dbab0f94e82f08e10a87fd->leave($__internal_d2f539f4f6ea442d12644a54bdf4fc782a44b3df55dbab0f94e82f08e10a87fd_prof);

    }

    // line 26
    public function block_cook_title($context, array $blocks = array())
    {
        $__internal_99800c0a8e4a0f8393cb086e990db7d11ebf6b965418968bc7a9f8529f4ca9d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99800c0a8e4a0f8393cb086e990db7d11ebf6b965418968bc7a9f8529f4ca9d1->enter($__internal_99800c0a8e4a0f8393cb086e990db7d11ebf6b965418968bc7a9f8529f4ca9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_99800c0a8e4a0f8393cb086e990db7d11ebf6b965418968bc7a9f8529f4ca9d1->leave($__internal_99800c0a8e4a0f8393cb086e990db7d11ebf6b965418968bc7a9f8529f4ca9d1_prof);

    }

    // line 27
    public function block_cook_tagline($context, array $blocks = array())
    {
        $__internal_8d9866e9915439fd141f460700c65abf27b77ab10a340ddd0398e10d37003c37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9866e9915439fd141f460700c65abf27b77ab10a340ddd0398e10d37003c37->enter($__internal_8d9866e9915439fd141f460700c65abf27b77ab10a340ddd0398e10d37003c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
        
        $__internal_8d9866e9915439fd141f460700c65abf27b77ab10a340ddd0398e10d37003c37->leave($__internal_8d9866e9915439fd141f460700c65abf27b77ab10a340ddd0398e10d37003c37_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_6be333976cb6a343d5523ce3ebdc31c1cbc61ba54a9ab297a05d0b44ad027b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be333976cb6a343d5523ce3ebdc31c1cbc61ba54a9ab297a05d0b44ad027b6c->enter($__internal_6be333976cb6a343d5523ce3ebdc31c1cbc61ba54a9ab297a05d0b44ad027b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
\t\t\t\t\t\t\t\t<li class=\"li2\"><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_ingredientes");
        echo "\">Ingredientes</a>\t\t
                                <li class=\"li2\"><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_contact");
        echo "\">Contacto</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_6be333976cb6a343d5523ce3ebdc31c1cbc61ba54a9ab297a05d0b44ad027b6c->leave($__internal_6be333976cb6a343d5523ce3ebdc31c1cbc61ba54a9ab297a05d0b44ad027b6c_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_da1509a668a1f71424b29c3d07474b04ff614d11e044afe41d42c13f16dc355f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da1509a668a1f71424b29c3d07474b04ff614d11e044afe41d42c13f16dc355f->enter($__internal_da1509a668a1f71424b29c3d07474b04ff614d11e044afe41d42c13f16dc355f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_da1509a668a1f71424b29c3d07474b04ff614d11e044afe41d42c13f16dc355f->leave($__internal_da1509a668a1f71424b29c3d07474b04ff614d11e044afe41d42c13f16dc355f_prof);

    }

    // line 57
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_0a06cf240d0169901d3eb9fd683852a3e52e61258e656d94c46aabcbe8de7820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a06cf240d0169901d3eb9fd683852a3e52e61258e656d94c46aabcbe8de7820->enter($__internal_0a06cf240d0169901d3eb9fd683852a3e52e61258e656d94c46aabcbe8de7820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_0a06cf240d0169901d3eb9fd683852a3e52e61258e656d94c46aabcbe8de7820->leave($__internal_0a06cf240d0169901d3eb9fd683852a3e52e61258e656d94c46aabcbe8de7820_prof);

    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8b1ff10fc6c8dec329597a089878347700a706d2a50e51630b7859b187a196c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1ff10fc6c8dec329597a089878347700a706d2a50e51630b7859b187a196c7->enter($__internal_8b1ff10fc6c8dec329597a089878347700a706d2a50e51630b7859b187a196c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 62
        echo "                    Cocina fácil - Creado como proyecto para Ingeniería Web
                ";
        
        $__internal_8b1ff10fc6c8dec329597a089878347700a706d2a50e51630b7859b187a196c7->leave($__internal_8b1ff10fc6c8dec329597a089878347700a706d2a50e51630b7859b187a196c7_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_62247254b6b3b1b2b4a148b752f9cce5f6ffe0cdce7ed0fb49be80ef182cb496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62247254b6b3b1b2b4a148b752f9cce5f6ffe0cdce7ed0fb49be80ef182cb496->enter($__internal_62247254b6b3b1b2b4a148b752f9cce5f6ffe0cdce7ed0fb49be80ef182cb496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_62247254b6b3b1b2b4a148b752f9cce5f6ffe0cdce7ed0fb49be80ef182cb496->leave($__internal_62247254b6b3b1b2b4a148b752f9cce5f6ffe0cdce7ed0fb49be80ef182cb496_prof);

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
        return array (  246 => 67,  238 => 62,  232 => 61,  221 => 57,  210 => 53,  199 => 44,  195 => 43,  184 => 35,  180 => 34,  176 => 32,  170 => 31,  157 => 27,  145 => 26,  136 => 15,  132 => 13,  126 => 12,  114 => 8,  105 => 68,  103 => 67,  98 => 64,  96 => 61,  91 => 58,  89 => 57,  84 => 54,  82 => 53,  75 => 48,  73 => 31,  68 => 28,  66 => 27,  62 => 26,  49 => 17,  47 => 12,  40 => 8,  31 => 1,);
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
\t\t\t\t\t\t\t\t<li class=\"li2\"><a href=\"{{ path('cooker_cook_ingredientes')}}\">Ingredientes</a>\t\t
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

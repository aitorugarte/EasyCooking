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
        $__internal_3c7bb0161864700ef691f79244ed94e650477cdcc0da57b9ddc4de305d01412d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7bb0161864700ef691f79244ed94e650477cdcc0da57b9ddc4de305d01412d->enter($__internal_3c7bb0161864700ef691f79244ed94e650477cdcc0da57b9ddc4de305d01412d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_3c7bb0161864700ef691f79244ed94e650477cdcc0da57b9ddc4de305d01412d->leave($__internal_3c7bb0161864700ef691f79244ed94e650477cdcc0da57b9ddc4de305d01412d_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_a091e5960425416be5153291249404ee959b2d2a9544cf2047fadc7f64d08dfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a091e5960425416be5153291249404ee959b2d2a9544cf2047fadc7f64d08dfd->enter($__internal_a091e5960425416be5153291249404ee959b2d2a9544cf2047fadc7f64d08dfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_a091e5960425416be5153291249404ee959b2d2a9544cf2047fadc7f64d08dfd->leave($__internal_a091e5960425416be5153291249404ee959b2d2a9544cf2047fadc7f64d08dfd_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_38f4baf0785b648112411bb75e7a309b5a1b28db7b741f66719b188c2498e9d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38f4baf0785b648112411bb75e7a309b5a1b28db7b741f66719b188c2498e9d6->enter($__internal_38f4baf0785b648112411bb75e7a309b5a1b28db7b741f66719b188c2498e9d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_38f4baf0785b648112411bb75e7a309b5a1b28db7b741f66719b188c2498e9d6->leave($__internal_38f4baf0785b648112411bb75e7a309b5a1b28db7b741f66719b188c2498e9d6_prof);

    }

    // line 26
    public function block_cook_title($context, array $blocks = array())
    {
        $__internal_8909fd4049b9fa0bb6bb8372b839bf63902bbaa6d47a7f7c3cce59b39ade46af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8909fd4049b9fa0bb6bb8372b839bf63902bbaa6d47a7f7c3cce59b39ade46af->enter($__internal_8909fd4049b9fa0bb6bb8372b839bf63902bbaa6d47a7f7c3cce59b39ade46af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_8909fd4049b9fa0bb6bb8372b839bf63902bbaa6d47a7f7c3cce59b39ade46af->leave($__internal_8909fd4049b9fa0bb6bb8372b839bf63902bbaa6d47a7f7c3cce59b39ade46af_prof);

    }

    // line 27
    public function block_cook_tagline($context, array $blocks = array())
    {
        $__internal_8db6fae6eb0af84023f32507b09a911dcbe2ab1e1dd3c04a99d20622e53fd2c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8db6fae6eb0af84023f32507b09a911dcbe2ab1e1dd3c04a99d20622e53fd2c1->enter($__internal_8db6fae6eb0af84023f32507b09a911dcbe2ab1e1dd3c04a99d20622e53fd2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
        
        $__internal_8db6fae6eb0af84023f32507b09a911dcbe2ab1e1dd3c04a99d20622e53fd2c1->leave($__internal_8db6fae6eb0af84023f32507b09a911dcbe2ab1e1dd3c04a99d20622e53fd2c1_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_e0a1f72476b8949714b9d98aa7449e967a3de0dd951e09c37a8dfd1e9f2f23b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a1f72476b8949714b9d98aa7449e967a3de0dd951e09c37a8dfd1e9f2f23b8->enter($__internal_e0a1f72476b8949714b9d98aa7449e967a3de0dd951e09c37a8dfd1e9f2f23b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_e0a1f72476b8949714b9d98aa7449e967a3de0dd951e09c37a8dfd1e9f2f23b8->leave($__internal_e0a1f72476b8949714b9d98aa7449e967a3de0dd951e09c37a8dfd1e9f2f23b8_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c48e7549c4114415a90e994022543726e59c179e353abbefd2b67d87562e809 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c48e7549c4114415a90e994022543726e59c179e353abbefd2b67d87562e809->enter($__internal_9c48e7549c4114415a90e994022543726e59c179e353abbefd2b67d87562e809_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9c48e7549c4114415a90e994022543726e59c179e353abbefd2b67d87562e809->leave($__internal_9c48e7549c4114415a90e994022543726e59c179e353abbefd2b67d87562e809_prof);

    }

    // line 56
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8d3f74a981aaa858b90ac54dd0cbcc895e2981bb71382a838c6d6a59c3e08277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d3f74a981aaa858b90ac54dd0cbcc895e2981bb71382a838c6d6a59c3e08277->enter($__internal_8d3f74a981aaa858b90ac54dd0cbcc895e2981bb71382a838c6d6a59c3e08277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_8d3f74a981aaa858b90ac54dd0cbcc895e2981bb71382a838c6d6a59c3e08277->leave($__internal_8d3f74a981aaa858b90ac54dd0cbcc895e2981bb71382a838c6d6a59c3e08277_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f8ce001ed3df887f2359bfd53829033475337141810bbe878e8afe08c4041de5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8ce001ed3df887f2359bfd53829033475337141810bbe878e8afe08c4041de5->enter($__internal_f8ce001ed3df887f2359bfd53829033475337141810bbe878e8afe08c4041de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "                    Cocina fácil - Creado como proyecto para Ingeniería Web
                ";
        
        $__internal_f8ce001ed3df887f2359bfd53829033475337141810bbe878e8afe08c4041de5->leave($__internal_f8ce001ed3df887f2359bfd53829033475337141810bbe878e8afe08c4041de5_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_972ba9269aeb67cd67c53eefa15c2f02dbe8062fb2a80d97ece37f36a423bb1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_972ba9269aeb67cd67c53eefa15c2f02dbe8062fb2a80d97ece37f36a423bb1e->enter($__internal_972ba9269aeb67cd67c53eefa15c2f02dbe8062fb2a80d97ece37f36a423bb1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_972ba9269aeb67cd67c53eefa15c2f02dbe8062fb2a80d97ece37f36a423bb1e->leave($__internal_972ba9269aeb67cd67c53eefa15c2f02dbe8062fb2a80d97ece37f36a423bb1e_prof);

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
", "::base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app\\Resources\\views\\base.html.twig");
    }
}

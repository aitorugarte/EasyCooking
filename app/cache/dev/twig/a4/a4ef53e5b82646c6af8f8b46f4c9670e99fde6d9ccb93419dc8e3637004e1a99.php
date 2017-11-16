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
        $__internal_cec06cfd7819961592989bd1f964d28e29425e5944ed615af99f1be3679895f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec06cfd7819961592989bd1f964d28e29425e5944ed615af99f1be3679895f4->enter($__internal_cec06cfd7819961592989bd1f964d28e29425e5944ed615af99f1be3679895f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"es\" xml:lang=\"es\">
    <head>
        <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
\t\t<meta charset=\"UTF-8\">
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
           
\t\t   <!-- Cabecera -->
\t\t\t<header id=\"header\">
                    <h2>";
        // line 22
        $this->displayBlock('cook_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 23
        $this->displayBlock('cook_tagline', $context, $blocks);
        // line 24
        echo "</h3>
\t\t\t\t\t\t   
\t\t\t\t<!-- Menú -->
                    ";
        // line 27
        $this->displayBlock('navigation', $context, $blocks);
        // line 44
        echo "            </header>
       
\t\t\t<!-- Contenido principal -->
            <section class=\"main-col\">
                ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "            </section>
\t\t\t<!-- Contenido lateral derecho -->
            <aside class=\"sidebar\">
                ";
        // line 52
        $this->displayBlock('sidebar', $context, $blocks);
        // line 53
        echo "            </aside>
\t\t\t<!-- Pie de página -->
            <div id=\"footer\">
                ";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 59
        echo "            </div>
        </section>

        ";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 63
        echo "    </body>
</html>
";
        
        $__internal_cec06cfd7819961592989bd1f964d28e29425e5944ed615af99f1be3679895f4->leave($__internal_cec06cfd7819961592989bd1f964d28e29425e5944ed615af99f1be3679895f4_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_837dfa169b0f0f22bf0c7a8e624158fd4ffe7b93ec9b54df3f9d09164bf21575 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837dfa169b0f0f22bf0c7a8e624158fd4ffe7b93ec9b54df3f9d09164bf21575->enter($__internal_837dfa169b0f0f22bf0c7a8e624158fd4ffe7b93ec9b54df3f9d09164bf21575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_837dfa169b0f0f22bf0c7a8e624158fd4ffe7b93ec9b54df3f9d09164bf21575->leave($__internal_837dfa169b0f0f22bf0c7a8e624158fd4ffe7b93ec9b54df3f9d09164bf21575_prof);

    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_06c1db329d8881a7e158355aa6b3d8923e94f562fdb854fe1ec75e5afa4d6a3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06c1db329d8881a7e158355aa6b3d8923e94f562fdb854fe1ec75e5afa4d6a3f->enter($__internal_06c1db329d8881a7e158355aa6b3d8923e94f562fdb854fe1ec75e5afa4d6a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 10
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_06c1db329d8881a7e158355aa6b3d8923e94f562fdb854fe1ec75e5afa4d6a3f->leave($__internal_06c1db329d8881a7e158355aa6b3d8923e94f562fdb854fe1ec75e5afa4d6a3f_prof);

    }

    // line 22
    public function block_cook_title($context, array $blocks = array())
    {
        $__internal_f3dfdc68941c0eaee3dcb001385feee2c3d8738242d8d9a8e21c7f33b75985f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3dfdc68941c0eaee3dcb001385feee2c3d8738242d8d9a8e21c7f33b75985f7->enter($__internal_f3dfdc68941c0eaee3dcb001385feee2c3d8738242d8d9a8e21c7f33b75985f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_f3dfdc68941c0eaee3dcb001385feee2c3d8738242d8d9a8e21c7f33b75985f7->leave($__internal_f3dfdc68941c0eaee3dcb001385feee2c3d8738242d8d9a8e21c7f33b75985f7_prof);

    }

    // line 23
    public function block_cook_tagline($context, array $blocks = array())
    {
        $__internal_3df21e0772deddc499a3bc2e6b3024640663b8b82497f6e9c2bcff15943cdc03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df21e0772deddc499a3bc2e6b3024640663b8b82497f6e9c2bcff15943cdc03->enter($__internal_3df21e0772deddc499a3bc2e6b3024640663b8b82497f6e9c2bcff15943cdc03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
        
        $__internal_3df21e0772deddc499a3bc2e6b3024640663b8b82497f6e9c2bcff15943cdc03->leave($__internal_3df21e0772deddc499a3bc2e6b3024640663b8b82497f6e9c2bcff15943cdc03_prof);

    }

    // line 27
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_ed902a0add36dae8fdf15307edef38bcab2ea4bbdface2e7ddd8ba4bc69c8867 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed902a0add36dae8fdf15307edef38bcab2ea4bbdface2e7ddd8ba4bc69c8867->enter($__internal_ed902a0add36dae8fdf15307edef38bcab2ea4bbdface2e7ddd8ba4bc69c8867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 28
        echo "                        <nav>
                           <ul class=\"ul1\">
                                <li class=\"li2\"><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Inicio</a></li>
                                <li class=\"li2\"><a href=\"";
        // line 31
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
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_ingredientes");
        echo "\">Ingredientes</a>\t\t
                                <li class=\"li2\"><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_contact");
        echo "\">Contacto</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_ed902a0add36dae8fdf15307edef38bcab2ea4bbdface2e7ddd8ba4bc69c8867->leave($__internal_ed902a0add36dae8fdf15307edef38bcab2ea4bbdface2e7ddd8ba4bc69c8867_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e80bd6904c4a9d275fbd4256392db1e42d572a05dd54887ab6433e2fd762f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e80bd6904c4a9d275fbd4256392db1e42d572a05dd54887ab6433e2fd762f80->enter($__internal_2e80bd6904c4a9d275fbd4256392db1e42d572a05dd54887ab6433e2fd762f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2e80bd6904c4a9d275fbd4256392db1e42d572a05dd54887ab6433e2fd762f80->leave($__internal_2e80bd6904c4a9d275fbd4256392db1e42d572a05dd54887ab6433e2fd762f80_prof);

    }

    // line 52
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_a976e2a4760a8fc045271471d09b33c62fbf2637ed940561e9037cd07bb01dd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a976e2a4760a8fc045271471d09b33c62fbf2637ed940561e9037cd07bb01dd1->enter($__internal_a976e2a4760a8fc045271471d09b33c62fbf2637ed940561e9037cd07bb01dd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_a976e2a4760a8fc045271471d09b33c62fbf2637ed940561e9037cd07bb01dd1->leave($__internal_a976e2a4760a8fc045271471d09b33c62fbf2637ed940561e9037cd07bb01dd1_prof);

    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        $__internal_b87b95ff48a7af07710bfa03e0b33aba7f0633e16c7ae02a1fc50c9dd5e4c73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b87b95ff48a7af07710bfa03e0b33aba7f0633e16c7ae02a1fc50c9dd5e4c73f->enter($__internal_b87b95ff48a7af07710bfa03e0b33aba7f0633e16c7ae02a1fc50c9dd5e4c73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 57
        echo "                    Cocina fácil - Creado como proyecto para Ingeniería Web
                ";
        
        $__internal_b87b95ff48a7af07710bfa03e0b33aba7f0633e16c7ae02a1fc50c9dd5e4c73f->leave($__internal_b87b95ff48a7af07710bfa03e0b33aba7f0633e16c7ae02a1fc50c9dd5e4c73f_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_54fa0053fab57cc199cd55badd161899f7b5718d017d5e297de05914be5b29c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fa0053fab57cc199cd55badd161899f7b5718d017d5e297de05914be5b29c3->enter($__internal_54fa0053fab57cc199cd55badd161899f7b5718d017d5e297de05914be5b29c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_54fa0053fab57cc199cd55badd161899f7b5718d017d5e297de05914be5b29c3->leave($__internal_54fa0053fab57cc199cd55badd161899f7b5718d017d5e297de05914be5b29c3_prof);

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
        return array (  241 => 62,  233 => 57,  227 => 56,  216 => 52,  205 => 48,  194 => 40,  190 => 39,  179 => 31,  175 => 30,  171 => 28,  165 => 27,  152 => 23,  140 => 22,  131 => 12,  127 => 10,  121 => 9,  109 => 4,  100 => 63,  98 => 62,  93 => 59,  91 => 56,  86 => 53,  84 => 52,  79 => 49,  77 => 48,  71 => 44,  69 => 27,  64 => 24,  62 => 23,  58 => 22,  46 => 14,  44 => 9,  36 => 4,  31 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"es\" xml:lang=\"es\">
    <head>
        <title>{% block title %}symblog{% endblock %} - symblog</title>
\t\t<meta charset=\"UTF-8\">
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

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
            'navigation' => array($this, 'block_navigation'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5abd2c11f9aa1b3b6a39680e49f9a37bb3cfe8e7b9a24b0acb788759d02832db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5abd2c11f9aa1b3b6a39680e49f9a37bb3cfe8e7b9a24b0acb788759d02832db->enter($__internal_5abd2c11f9aa1b3b6a39680e49f9a37bb3cfe8e7b9a24b0acb788759d02832db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>

<head>
\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<meta name=\"description\" content=\"website description\" />
\t<meta name=\"keywords\" content=\"website keywords, website keywords\" />
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
</head>

<body>
\t<div id=\"main\">
\t\t<div id=\"header\">

\t\t\t<div id=\"logo\">

\t\t\t\t<div id=\"logo_text\">
\t\t\t\t\t<h1><a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Easy<span class=\"logo_colour\">_cooking</span></a></h1>
\t\t\t\t\t<h2>\"El amor puede esperar, el hambre no\" Monkey D. Luffy</h2>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- Menú -->
\t\t\t";
        // line 26
        $this->displayBlock('navigation', $context, $blocks);
        // line 38
        echo "\t\t</div>

\t\t<div id=\"site_content\">
\t\t\t<div class=\"sidebar\">
\t\t\t\t<!-- Contenido lateral derecho -->
\t\t\t\t";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 44
        echo "\t\t\t</div>

\t\t\t<div id=\"content\">
\t\t\t\t<!-- Contenido principal -->
\t\t\t\t<section class=\"main-col\">
\t\t\t\t\t";
        // line 49
        $this->displayBlock('body', $context, $blocks);
        // line 50
        echo "\t\t\t\t</section>
\t\t\t</div>
\t\t</div>

\t\t<!-- Pie de página -->
\t\t<div id=\"footer\">
\t\t\t";
        // line 56
        $this->displayBlock('footer', $context, $blocks);
        // line 59
        echo "\t\t</div>

\t</div>
\t";
        // line 62
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "</body>
</html>
";
        
        $__internal_5abd2c11f9aa1b3b6a39680e49f9a37bb3cfe8e7b9a24b0acb788759d02832db->leave($__internal_5abd2c11f9aa1b3b6a39680e49f9a37bb3cfe8e7b9a24b0acb788759d02832db_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d0f9d7bfc20a4183794a8d6369197c260688fb0b6e9bbef82b9b1c47b1132197 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0f9d7bfc20a4183794a8d6369197c260688fb0b6e9bbef82b9b1c47b1132197->enter($__internal_d0f9d7bfc20a4183794a8d6369197c260688fb0b6e9bbef82b9b1c47b1132197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_d0f9d7bfc20a4183794a8d6369197c260688fb0b6e9bbef82b9b1c47b1132197->leave($__internal_d0f9d7bfc20a4183794a8d6369197c260688fb0b6e9bbef82b9b1c47b1132197_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_482e6b0fc7fe66e351c9822cbcd2199160781a08fd36c8f00ed2e2de5bd08cf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_482e6b0fc7fe66e351c9822cbcd2199160781a08fd36c8f00ed2e2de5bd08cf0->enter($__internal_482e6b0fc7fe66e351c9822cbcd2199160781a08fd36c8f00ed2e2de5bd08cf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 27
        echo "\t\t\t<div id=\"menubar\">
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li class=\"selected\"><div><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Inicio</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_recetas");
        echo "\">Recetas</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_platos");
        echo "\">Platos</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_ingredientes");
        echo "\">Ingredientes</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_contact");
        echo "\">Contacto</a><div></li>
\t\t\t\t</ul>
\t\t\t</div> 
\t
\t\t\t";
        
        $__internal_482e6b0fc7fe66e351c9822cbcd2199160781a08fd36c8f00ed2e2de5bd08cf0->leave($__internal_482e6b0fc7fe66e351c9822cbcd2199160781a08fd36c8f00ed2e2de5bd08cf0_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_b95d03a7c73405b12abb83f4ca09a2e8cb5e41bb27dd3e5737065a6343854fea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b95d03a7c73405b12abb83f4ca09a2e8cb5e41bb27dd3e5737065a6343854fea->enter($__internal_b95d03a7c73405b12abb83f4ca09a2e8cb5e41bb27dd3e5737065a6343854fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_b95d03a7c73405b12abb83f4ca09a2e8cb5e41bb27dd3e5737065a6343854fea->leave($__internal_b95d03a7c73405b12abb83f4ca09a2e8cb5e41bb27dd3e5737065a6343854fea_prof);

    }

    // line 49
    public function block_body($context, array $blocks = array())
    {
        $__internal_4413699ff8be45bc42eff37335282d1c7c83193790e8c94a4a98a89a59fbdb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4413699ff8be45bc42eff37335282d1c7c83193790e8c94a4a98a89a59fbdb9a->enter($__internal_4413699ff8be45bc42eff37335282d1c7c83193790e8c94a4a98a89a59fbdb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4413699ff8be45bc42eff37335282d1c7c83193790e8c94a4a98a89a59fbdb9a->leave($__internal_4413699ff8be45bc42eff37335282d1c7c83193790e8c94a4a98a89a59fbdb9a_prof);

    }

    // line 56
    public function block_footer($context, array $blocks = array())
    {
        $__internal_294e7bcbf53e7fc536ce85fdd29b81d68311d3ad536aa7fbd9ab6b402c3fb774 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_294e7bcbf53e7fc536ce85fdd29b81d68311d3ad536aa7fbd9ab6b402c3fb774->enter($__internal_294e7bcbf53e7fc536ce85fdd29b81d68311d3ad536aa7fbd9ab6b402c3fb774_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 57
        echo "\t\t\tCocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web
\t\t\t";
        
        $__internal_294e7bcbf53e7fc536ce85fdd29b81d68311d3ad536aa7fbd9ab6b402c3fb774->leave($__internal_294e7bcbf53e7fc536ce85fdd29b81d68311d3ad536aa7fbd9ab6b402c3fb774_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8e2c48d067aaefd072ce8603605447c289a120420a02663fa86c3086ea8da7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2c48d067aaefd072ce8603605447c289a120420a02663fa86c3086ea8da7c3->enter($__internal_8e2c48d067aaefd072ce8603605447c289a120420a02663fa86c3086ea8da7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "\t<script src=\"/js/jquery-3.2.1.min.js\" type=\"text/javascript\"></script>
\t<script src=\"/js/jquery-ui.js\"></script>
\t<script>
\t// Link to open the dialog
\t\$( \"#menu\" ).menu();
\t</script>
\t";
        
        $__internal_8e2c48d067aaefd072ce8603605447c289a120420a02663fa86c3086ea8da7c3->leave($__internal_8e2c48d067aaefd072ce8603605447c289a120420a02663fa86c3086ea8da7c3_prof);

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
        return array (  202 => 63,  196 => 62,  188 => 57,  182 => 56,  171 => 49,  160 => 43,  148 => 33,  144 => 32,  140 => 31,  136 => 30,  132 => 29,  128 => 27,  122 => 26,  110 => 5,  101 => 70,  99 => 62,  94 => 59,  92 => 56,  84 => 50,  82 => 49,  75 => 44,  73 => 43,  66 => 38,  64 => 26,  54 => 19,  41 => 9,  34 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>

<head>
\t<title>{% block title %}symblog{% endblock %}</title>
\t<meta name=\"description\" content=\"website description\" />
\t<meta name=\"keywords\" content=\"website keywords, website keywords\" />
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t<link href=\"{{ asset('css/style.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
</head>

<body>
\t<div id=\"main\">
\t\t<div id=\"header\">

\t\t\t<div id=\"logo\">

\t\t\t\t<div id=\"logo_text\">
\t\t\t\t\t<h1><a href=\"{{ path('cooker_cook_principal')}}\">Easy<span class=\"logo_colour\">_cooking</span></a></h1>
\t\t\t\t\t<h2>\"El amor puede esperar, el hambre no\" Monkey D. Luffy</h2>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- Menú -->
\t\t\t{% block navigation %}
\t\t\t<div id=\"menubar\">
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li class=\"selected\"><div><a href=\"{{ path('cooker_cook_principal')}}\">Inicio</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"{{ path('cooker_cook_recetas')}}\">Recetas</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"{{ path('cooker_cook_platos')}}\">Platos</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"{{ path('cooker_cook_ingredientes')}}\">Ingredientes</a><div></li>
\t\t\t\t\t<li class=\"li2\"><div><a href=\"{{ path('cooker_cook_contact')}}\">Contacto</a><div></li>
\t\t\t\t</ul>
\t\t\t</div> 
\t
\t\t\t{% endblock %}
\t\t</div>

\t\t<div id=\"site_content\">
\t\t\t<div class=\"sidebar\">
\t\t\t\t<!-- Contenido lateral derecho -->
\t\t\t\t{% block sidebar %}{% endblock %}
\t\t\t</div>

\t\t\t<div id=\"content\">
\t\t\t\t<!-- Contenido principal -->
\t\t\t\t<section class=\"main-col\">
\t\t\t\t\t{% block body %}{% endblock %}
\t\t\t\t</section>
\t\t\t</div>
\t\t</div>

\t\t<!-- Pie de página -->
\t\t<div id=\"footer\">
\t\t\t{% block footer %}
\t\t\tCocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web
\t\t\t{% endblock %}
\t\t</div>

\t</div>
\t{% block javascripts %}
\t<script src=\"/js/jquery-3.2.1.min.js\" type=\"text/javascript\"></script>
\t<script src=\"/js/jquery-ui.js\"></script>
\t<script>
\t// Link to open the dialog
\t\$( \"#menu\" ).menu();
\t</script>
\t{% endblock %}
</body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app\\Resources\\views\\base.html.twig");
    }
}

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
            'navigation' => array($this, 'block_navigation'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1889b8e7d8630b7521f489fb0af6604d094900b98f7127f74c4976a55cadfc74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1889b8e7d8630b7521f489fb0af6604d094900b98f7127f74c4976a55cadfc74->enter($__internal_1889b8e7d8630b7521f489fb0af6604d094900b98f7127f74c4976a55cadfc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=windows-1252\" />
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
        // line 36
        echo "\t\t</div>

\t\t<div id=\"site_content\">
\t\t\t<div class=\"sidebar\">
\t\t\t\t<!-- Contenido lateral derecho -->
\t\t\t\t\t";
        // line 41
        $this->displayBlock('sidebar', $context, $blocks);
        // line 42
        echo "\t\t\t</div>

\t\t\t<div id=\"content\">
\t\t\t\t<!-- Contenido principal -->
\t\t\t\t<section class=\"main-col\">
\t\t\t\t\t";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "\t\t\t\t</section>
\t\t\t</div>
\t\t</div>

\t\t<!-- Pie de página -->
\t\t<div id=\"footer\">
\t\t\t";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 57
        echo "\t\t</div>

\t</div>
\t";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "</body>
</html>
";
        
        $__internal_1889b8e7d8630b7521f489fb0af6604d094900b98f7127f74c4976a55cadfc74->leave($__internal_1889b8e7d8630b7521f489fb0af6604d094900b98f7127f74c4976a55cadfc74_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_878c0ebb519ca529385d892198d7a3fcd32d624abaa7fb3e02a083b76ae974ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_878c0ebb519ca529385d892198d7a3fcd32d624abaa7fb3e02a083b76ae974ba->enter($__internal_878c0ebb519ca529385d892198d7a3fcd32d624abaa7fb3e02a083b76ae974ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_878c0ebb519ca529385d892198d7a3fcd32d624abaa7fb3e02a083b76ae974ba->leave($__internal_878c0ebb519ca529385d892198d7a3fcd32d624abaa7fb3e02a083b76ae974ba_prof);

    }

    // line 26
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_5603e52a74d688b2e88333305bf3eaca4150960d89ea96d6918a7a40861f1984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5603e52a74d688b2e88333305bf3eaca4150960d89ea96d6918a7a40861f1984->enter($__internal_5603e52a74d688b2e88333305bf3eaca4150960d89ea96d6918a7a40861f1984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 27
        echo "\t\t\t<div id=\"menubar\">
\t\t\t\t<ul id=\"menu\">
\t\t\t\t\t<li class=\"selected\"><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Inicio</a></li>
\t\t\t\t\t<li class=\"li2\"><a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_recetas");
        echo "\">Recetas</a></li>
\t\t\t\t\t<li class=\"li2\"><a href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_ingredientes");
        echo "\">Ingredientes</a>
\t\t\t\t\t<li class=\"li2\"><a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_contact");
        echo "\">Contacto</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t";
        
        $__internal_5603e52a74d688b2e88333305bf3eaca4150960d89ea96d6918a7a40861f1984->leave($__internal_5603e52a74d688b2e88333305bf3eaca4150960d89ea96d6918a7a40861f1984_prof);

    }

    // line 41
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_9916bbcee0670834a9431d3f96d504ac3c5672ca06b6e93a96a1adfd7ddf6821 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9916bbcee0670834a9431d3f96d504ac3c5672ca06b6e93a96a1adfd7ddf6821->enter($__internal_9916bbcee0670834a9431d3f96d504ac3c5672ca06b6e93a96a1adfd7ddf6821_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_9916bbcee0670834a9431d3f96d504ac3c5672ca06b6e93a96a1adfd7ddf6821->leave($__internal_9916bbcee0670834a9431d3f96d504ac3c5672ca06b6e93a96a1adfd7ddf6821_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_12937d17dca1cc2a1342bd9b21d87131f64397af03ab65f7e54d005d1b7922f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12937d17dca1cc2a1342bd9b21d87131f64397af03ab65f7e54d005d1b7922f3->enter($__internal_12937d17dca1cc2a1342bd9b21d87131f64397af03ab65f7e54d005d1b7922f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_12937d17dca1cc2a1342bd9b21d87131f64397af03ab65f7e54d005d1b7922f3->leave($__internal_12937d17dca1cc2a1342bd9b21d87131f64397af03ab65f7e54d005d1b7922f3_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f40f3352dd694b794b0cac36ddd79e9040edf5d554a6326e1dc11ec03f042aec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f40f3352dd694b794b0cac36ddd79e9040edf5d554a6326e1dc11ec03f042aec->enter($__internal_f40f3352dd694b794b0cac36ddd79e9040edf5d554a6326e1dc11ec03f042aec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "\t\t\tCocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web
\t\t\t";
        
        $__internal_f40f3352dd694b794b0cac36ddd79e9040edf5d554a6326e1dc11ec03f042aec->leave($__internal_f40f3352dd694b794b0cac36ddd79e9040edf5d554a6326e1dc11ec03f042aec_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_90a3ddd56f943d392f4220297a316e2902b2fe239063e5e6f31db6d35dfa6e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a3ddd56f943d392f4220297a316e2902b2fe239063e5e6f31db6d35dfa6e21->enter($__internal_90a3ddd56f943d392f4220297a316e2902b2fe239063e5e6f31db6d35dfa6e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_90a3ddd56f943d392f4220297a316e2902b2fe239063e5e6f31db6d35dfa6e21->leave($__internal_90a3ddd56f943d392f4220297a316e2902b2fe239063e5e6f31db6d35dfa6e21_prof);

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
        return array (  191 => 60,  183 => 55,  177 => 54,  166 => 47,  155 => 41,  144 => 32,  140 => 31,  136 => 30,  132 => 29,  128 => 27,  122 => 26,  110 => 5,  101 => 61,  99 => 60,  94 => 57,  92 => 54,  84 => 48,  82 => 47,  75 => 42,  73 => 41,  66 => 36,  64 => 26,  54 => 19,  41 => 9,  34 => 5,  28 => 1,);
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
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=windows-1252\" />
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
\t\t\t\t\t<li class=\"selected\"><a href=\"{{ path('cooker_cook_principal')}}\">Inicio</a></li>
\t\t\t\t\t<li class=\"li2\"><a href=\"{{ path('cooker_cook_recetas')}}\">Recetas</a></li>
\t\t\t\t\t<li class=\"li2\"><a href=\"{{ path('cooker_cook_ingredientes')}}\">Ingredientes</a>
\t\t\t\t\t<li class=\"li2\"><a href=\"{{ path('cooker_cook_contact')}}\">Contacto</a></li>
\t\t\t\t</ul>
\t\t\t</div>
\t\t\t{% endblock %}
\t\t</div>

\t\t<div id=\"site_content\">
\t\t\t<div class=\"sidebar\">
\t\t\t\t<!-- Contenido lateral derecho -->
\t\t\t\t\t{% block sidebar %}{% endblock %}
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
\t{% block javascripts %}{% endblock %}
</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app\\Resources\\views\\base.html.twig");
    }
}

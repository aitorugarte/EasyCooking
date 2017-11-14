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
        $__internal_b038c7871213668c94395a1f5d82cfab667a85be159a947debf6d8e0e88c4f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b038c7871213668c94395a1f5d82cfab667a85be159a947debf6d8e0e88c4f54->enter($__internal_b038c7871213668c94395a1f5d82cfab667a85be159a947debf6d8e0e88c4f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_b038c7871213668c94395a1f5d82cfab667a85be159a947debf6d8e0e88c4f54->leave($__internal_b038c7871213668c94395a1f5d82cfab667a85be159a947debf6d8e0e88c4f54_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_212f744c5ec3bb4efd0daf9c6d45dba18b8f364630ef7ae9bdcf971e11d005f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_212f744c5ec3bb4efd0daf9c6d45dba18b8f364630ef7ae9bdcf971e11d005f5->enter($__internal_212f744c5ec3bb4efd0daf9c6d45dba18b8f364630ef7ae9bdcf971e11d005f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_212f744c5ec3bb4efd0daf9c6d45dba18b8f364630ef7ae9bdcf971e11d005f5->leave($__internal_212f744c5ec3bb4efd0daf9c6d45dba18b8f364630ef7ae9bdcf971e11d005f5_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_fdfe08173db6e9cfa94fb600d2b26e07bfcd5da231098dba002ffff743c26259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdfe08173db6e9cfa94fb600d2b26e07bfcd5da231098dba002ffff743c26259->enter($__internal_fdfe08173db6e9cfa94fb600d2b26e07bfcd5da231098dba002ffff743c26259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_fdfe08173db6e9cfa94fb600d2b26e07bfcd5da231098dba002ffff743c26259->leave($__internal_fdfe08173db6e9cfa94fb600d2b26e07bfcd5da231098dba002ffff743c26259_prof);

    }

    // line 26
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_fb85c1aef613122d9c933322531488316eb2905840ba71b757f516bce9f09627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb85c1aef613122d9c933322531488316eb2905840ba71b757f516bce9f09627->enter($__internal_fb85c1aef613122d9c933322531488316eb2905840ba71b757f516bce9f09627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_fb85c1aef613122d9c933322531488316eb2905840ba71b757f516bce9f09627->leave($__internal_fb85c1aef613122d9c933322531488316eb2905840ba71b757f516bce9f09627_prof);

    }

    // line 27
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_388a889f7be65aeace7e095972fbc01583befe53486691ecbc47b1bc21730c0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_388a889f7be65aeace7e095972fbc01583befe53486691ecbc47b1bc21730c0c->enter($__internal_388a889f7be65aeace7e095972fbc01583befe53486691ecbc47b1bc21730c0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
        
        $__internal_388a889f7be65aeace7e095972fbc01583befe53486691ecbc47b1bc21730c0c->leave($__internal_388a889f7be65aeace7e095972fbc01583befe53486691ecbc47b1bc21730c0c_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_d17d4377c960aa1d4b3a3b5b978d89e5370329090ab5b67a53835fc2e24d6b7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d17d4377c960aa1d4b3a3b5b978d89e5370329090ab5b67a53835fc2e24d6b7b->enter($__internal_d17d4377c960aa1d4b3a3b5b978d89e5370329090ab5b67a53835fc2e24d6b7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_d17d4377c960aa1d4b3a3b5b978d89e5370329090ab5b67a53835fc2e24d6b7b->leave($__internal_d17d4377c960aa1d4b3a3b5b978d89e5370329090ab5b67a53835fc2e24d6b7b_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_0483af74366aa83912cdb32e6b72cdc398f3e7ac851031f429c774f66fbd9021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0483af74366aa83912cdb32e6b72cdc398f3e7ac851031f429c774f66fbd9021->enter($__internal_0483af74366aa83912cdb32e6b72cdc398f3e7ac851031f429c774f66fbd9021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0483af74366aa83912cdb32e6b72cdc398f3e7ac851031f429c774f66fbd9021->leave($__internal_0483af74366aa83912cdb32e6b72cdc398f3e7ac851031f429c774f66fbd9021_prof);

    }

    // line 56
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_8a136ef6106503b297401a10d02b3473fff165747721c5c4b7c6bcaf11d66492 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a136ef6106503b297401a10d02b3473fff165747721c5c4b7c6bcaf11d66492->enter($__internal_8a136ef6106503b297401a10d02b3473fff165747721c5c4b7c6bcaf11d66492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_8a136ef6106503b297401a10d02b3473fff165747721c5c4b7c6bcaf11d66492->leave($__internal_8a136ef6106503b297401a10d02b3473fff165747721c5c4b7c6bcaf11d66492_prof);

    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5d0a8d5b8753694311e86e0585779dfc3c83a1d0451b95d449ebd5d1a4f6fee4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d0a8d5b8753694311e86e0585779dfc3c83a1d0451b95d449ebd5d1a4f6fee4->enter($__internal_5d0a8d5b8753694311e86e0585779dfc3c83a1d0451b95d449ebd5d1a4f6fee4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 61
        echo "                    Cocina fácil - Creado como proyecto para Ingeniería Web
                ";
        
        $__internal_5d0a8d5b8753694311e86e0585779dfc3c83a1d0451b95d449ebd5d1a4f6fee4->leave($__internal_5d0a8d5b8753694311e86e0585779dfc3c83a1d0451b95d449ebd5d1a4f6fee4_prof);

    }

    // line 66
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_ea3ab2f5ff695d044a8868f4d6a209b4c36095290beaa959dc65dd28fd5ab7d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea3ab2f5ff695d044a8868f4d6a209b4c36095290beaa959dc65dd28fd5ab7d4->enter($__internal_ea3ab2f5ff695d044a8868f4d6a209b4c36095290beaa959dc65dd28fd5ab7d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_ea3ab2f5ff695d044a8868f4d6a209b4c36095290beaa959dc65dd28fd5ab7d4->leave($__internal_ea3ab2f5ff695d044a8868f4d6a209b4c36095290beaa959dc65dd28fd5ab7d4_prof);

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
", "base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app\\Resources\\views\\base.html.twig");
    }
}

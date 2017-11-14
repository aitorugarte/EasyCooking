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
        $__internal_4ecc6ff2631b5d97863fe28b9813975257ef58a42b1ee3f795d31e2cf9b6ea3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ecc6ff2631b5d97863fe28b9813975257ef58a42b1ee3f795d31e2cf9b6ea3b->enter($__internal_4ecc6ff2631b5d97863fe28b9813975257ef58a42b1ee3f795d31e2cf9b6ea3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
           
\t\t\t<header id=\"header\">
                <hgroup>
                    <h2>";
        // line 25
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 26
        $this->displayBlock('blog_tagline', $context, $blocks);
        // line 27
        echo "</h3>
                </hgroup>
            </header>
       
\t   <!-- https://www.w3schools.com/css/tryit.asp?filename=trycss_float5 -->
                    ";
        // line 32
        $this->displayBlock('navigation', $context, $blocks);
        // line 44
        echo "             

            <section class=\"main-col\">
                ";
        // line 47
        $this->displayBlock('body', $context, $blocks);
        // line 48
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 50
        $this->displayBlock('sidebar', $context, $blocks);
        // line 51
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 54
        $this->displayBlock('footer', $context, $blocks);
        // line 57
        echo "            </div>
        </section>

        ";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 61
        echo "    </body>
</html>
";
        
        $__internal_4ecc6ff2631b5d97863fe28b9813975257ef58a42b1ee3f795d31e2cf9b6ea3b->leave($__internal_4ecc6ff2631b5d97863fe28b9813975257ef58a42b1ee3f795d31e2cf9b6ea3b_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f4e4aa285c86f0939d3087c44f03a218fc61a4b5a547c1072753bc3529c90b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4e4aa285c86f0939d3087c44f03a218fc61a4b5a547c1072753bc3529c90b1->enter($__internal_2f4e4aa285c86f0939d3087c44f03a218fc61a4b5a547c1072753bc3529c90b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_2f4e4aa285c86f0939d3087c44f03a218fc61a4b5a547c1072753bc3529c90b1->leave($__internal_2f4e4aa285c86f0939d3087c44f03a218fc61a4b5a547c1072753bc3529c90b1_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_86f93cec502656666b98656bc0cf40643382d5bb74a17b365e9167a432e1a9e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86f93cec502656666b98656bc0cf40643382d5bb74a17b365e9167a432e1a9e6->enter($__internal_86f93cec502656666b98656bc0cf40643382d5bb74a17b365e9167a432e1a9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_86f93cec502656666b98656bc0cf40643382d5bb74a17b365e9167a432e1a9e6->leave($__internal_86f93cec502656666b98656bc0cf40643382d5bb74a17b365e9167a432e1a9e6_prof);

    }

    // line 25
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_038357bf410d4dfdf825ce891ef6b4cb45f543ad3512e772cf8e450d0eee1610 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_038357bf410d4dfdf825ce891ef6b4cb45f543ad3512e772cf8e450d0eee1610->enter($__internal_038357bf410d4dfdf825ce891ef6b4cb45f543ad3512e772cf8e450d0eee1610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_038357bf410d4dfdf825ce891ef6b4cb45f543ad3512e772cf8e450d0eee1610->leave($__internal_038357bf410d4dfdf825ce891ef6b4cb45f543ad3512e772cf8e450d0eee1610_prof);

    }

    // line 26
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_c7768b277d91cbbce820cc341b3c8321adb1cb4e0115e67ba0ad0074d3c42090 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7768b277d91cbbce820cc341b3c8321adb1cb4e0115e67ba0ad0074d3c42090->enter($__internal_c7768b277d91cbbce820cc341b3c8321adb1cb4e0115e67ba0ad0074d3c42090_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
        
        $__internal_c7768b277d91cbbce820cc341b3c8321adb1cb4e0115e67ba0ad0074d3c42090->leave($__internal_c7768b277d91cbbce820cc341b3c8321adb1cb4e0115e67ba0ad0074d3c42090_prof);

    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_e07583b598cf173af6f98c8a4781c76e2b7de239ab1c1fe3ff6ce9ed5c719611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e07583b598cf173af6f98c8a4781c76e2b7de239ab1c1fe3ff6ce9ed5c719611->enter($__internal_e07583b598cf173af6f98c8a4781c76e2b7de239ab1c1fe3ff6ce9ed5c719611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 33
        echo "                        <nav>
                            <ul class=\"ul1\">
                                <li class=\"li1\"><a href=\"#\">Inicio</a></li>
\t\t\t\t\t\t\t\t<li class=\"li2\"><a href=\"#\">Entrantes</a></li>
\t\t\t\t\t\t\t\t<li class=\"li3\"><a href=\"#\">Primeros</a></li>
\t\t\t\t\t\t\t\t<li class=\"li4\"><a href=\"#\">Segundos</a></li>
\t\t\t\t\t\t\t\t<li class=\"li5\"><a href=\"#\">Postres</a></li>
                                <li class=\"li6\"><a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_contact");
        echo "\">Contacto</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_e07583b598cf173af6f98c8a4781c76e2b7de239ab1c1fe3ff6ce9ed5c719611->leave($__internal_e07583b598cf173af6f98c8a4781c76e2b7de239ab1c1fe3ff6ce9ed5c719611_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_9a14a687fce43930730acef2ae77375c93132ef079062f56cb2bf72f5b2f163b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a14a687fce43930730acef2ae77375c93132ef079062f56cb2bf72f5b2f163b->enter($__internal_9a14a687fce43930730acef2ae77375c93132ef079062f56cb2bf72f5b2f163b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9a14a687fce43930730acef2ae77375c93132ef079062f56cb2bf72f5b2f163b->leave($__internal_9a14a687fce43930730acef2ae77375c93132ef079062f56cb2bf72f5b2f163b_prof);

    }

    // line 50
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c524dfeb357117a8b9180943d0eb9a07f9a70885c828fedb7289c8a5dd72d780 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c524dfeb357117a8b9180943d0eb9a07f9a70885c828fedb7289c8a5dd72d780->enter($__internal_c524dfeb357117a8b9180943d0eb9a07f9a70885c828fedb7289c8a5dd72d780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_c524dfeb357117a8b9180943d0eb9a07f9a70885c828fedb7289c8a5dd72d780->leave($__internal_c524dfeb357117a8b9180943d0eb9a07f9a70885c828fedb7289c8a5dd72d780_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_8060f4f5128a57563c432c47ef6dfb0ebd6c0920dbbee664214a41f4ba1219ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8060f4f5128a57563c432c47ef6dfb0ebd6c0920dbbee664214a41f4ba1219ca->enter($__internal_8060f4f5128a57563c432c47ef6dfb0ebd6c0920dbbee664214a41f4ba1219ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_8060f4f5128a57563c432c47ef6dfb0ebd6c0920dbbee664214a41f4ba1219ca->leave($__internal_8060f4f5128a57563c432c47ef6dfb0ebd6c0920dbbee664214a41f4ba1219ca_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1ddba2d26cd84ffbc38f82f8b5ecf1123b24c30244ffa4127b77359fc5510f30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ddba2d26cd84ffbc38f82f8b5ecf1123b24c30244ffa4127b77359fc5510f30->enter($__internal_1ddba2d26cd84ffbc38f82f8b5ecf1123b24c30244ffa4127b77359fc5510f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1ddba2d26cd84ffbc38f82f8b5ecf1123b24c30244ffa4127b77359fc5510f30->leave($__internal_1ddba2d26cd84ffbc38f82f8b5ecf1123b24c30244ffa4127b77359fc5510f30_prof);

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
        return array (  230 => 60,  222 => 55,  216 => 54,  205 => 50,  194 => 47,  183 => 40,  174 => 33,  168 => 32,  155 => 26,  143 => 25,  134 => 15,  130 => 13,  124 => 12,  112 => 8,  103 => 61,  101 => 60,  96 => 57,  94 => 54,  89 => 51,  87 => 50,  83 => 48,  81 => 47,  76 => 44,  74 => 32,  67 => 27,  65 => 26,  61 => 25,  49 => 17,  47 => 12,  40 => 8,  31 => 1,);
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
           
\t\t\t<header id=\"header\">
                <hgroup>
                    <h2>{% block blog_title %}<a href=\"#\">Cocina facil</a>{% endblock %}</h2>
                    <h3>{% block blog_tagline %}<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>{% endblock %}</h3>
                </hgroup>
            </header>
       
\t   <!-- https://www.w3schools.com/css/tryit.asp?filename=trycss_float5 -->
                    {% block navigation %}
                        <nav>
                            <ul class=\"ul1\">
                                <li class=\"li1\"><a href=\"#\">Inicio</a></li>
\t\t\t\t\t\t\t\t<li class=\"li2\"><a href=\"#\">Entrantes</a></li>
\t\t\t\t\t\t\t\t<li class=\"li3\"><a href=\"#\">Primeros</a></li>
\t\t\t\t\t\t\t\t<li class=\"li4\"><a href=\"#\">Segundos</a></li>
\t\t\t\t\t\t\t\t<li class=\"li5\"><a href=\"#\">Postres</a></li>
                                <li class=\"li6\"><a href=\"{{ path('blogger_blog_contact')}}\">Contacto</a></li>
                            </ul>
                        </nav>
                    {% endblock %}
             

            <section class=\"main-col\">
                {% block body %}{% endblock %}
            </section>
            <aside class=\"sidebar\">
                {% block sidebar %}{% endblock %}
            </aside>

            <div id=\"footer\">
                {% block footer %}
                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                {% endblock %}
            </div>
        </section>

        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app\\Resources\\views\\base.html.twig");
    }
}

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
        $__internal_f43d59fdbc11ccb8f1b8536831c679cd564273e0f0f8d1878f580f03134880dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f43d59fdbc11ccb8f1b8536831c679cd564273e0f0f8d1878f580f03134880dc->enter($__internal_f43d59fdbc11ccb8f1b8536831c679cd564273e0f0f8d1878f580f03134880dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_f43d59fdbc11ccb8f1b8536831c679cd564273e0f0f8d1878f580f03134880dc->leave($__internal_f43d59fdbc11ccb8f1b8536831c679cd564273e0f0f8d1878f580f03134880dc_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_201ec622f8d55906b69e775e0f68a6c1583f48cc57e1af2a801b4fa7a5fdf7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201ec622f8d55906b69e775e0f68a6c1583f48cc57e1af2a801b4fa7a5fdf7f2->enter($__internal_201ec622f8d55906b69e775e0f68a6c1583f48cc57e1af2a801b4fa7a5fdf7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_201ec622f8d55906b69e775e0f68a6c1583f48cc57e1af2a801b4fa7a5fdf7f2->leave($__internal_201ec622f8d55906b69e775e0f68a6c1583f48cc57e1af2a801b4fa7a5fdf7f2_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2003d4c0d4c55a5b2dc5c669f357f42940cfaef8db81a87ba88768d77cde01ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2003d4c0d4c55a5b2dc5c669f357f42940cfaef8db81a87ba88768d77cde01ad->enter($__internal_2003d4c0d4c55a5b2dc5c669f357f42940cfaef8db81a87ba88768d77cde01ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_2003d4c0d4c55a5b2dc5c669f357f42940cfaef8db81a87ba88768d77cde01ad->leave($__internal_2003d4c0d4c55a5b2dc5c669f357f42940cfaef8db81a87ba88768d77cde01ad_prof);

    }

    // line 25
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_77858f1a27ca024da5ea7ca8df6aa0dd87b5ee73e9a3681b32578a7addfd8328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77858f1a27ca024da5ea7ca8df6aa0dd87b5ee73e9a3681b32578a7addfd8328->enter($__internal_77858f1a27ca024da5ea7ca8df6aa0dd87b5ee73e9a3681b32578a7addfd8328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_77858f1a27ca024da5ea7ca8df6aa0dd87b5ee73e9a3681b32578a7addfd8328->leave($__internal_77858f1a27ca024da5ea7ca8df6aa0dd87b5ee73e9a3681b32578a7addfd8328_prof);

    }

    // line 26
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_5ce15ace359e1df4fa8addd1059fa270a4db6df82922b73217490ffefd0372ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ce15ace359e1df4fa8addd1059fa270a4db6df82922b73217490ffefd0372ac->enter($__internal_5ce15ace359e1df4fa8addd1059fa270a4db6df82922b73217490ffefd0372ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
        
        $__internal_5ce15ace359e1df4fa8addd1059fa270a4db6df82922b73217490ffefd0372ac->leave($__internal_5ce15ace359e1df4fa8addd1059fa270a4db6df82922b73217490ffefd0372ac_prof);

    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_52c7c08338e879cdec584247315e97df62067e8272b9b592d73dca7d6546da53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52c7c08338e879cdec584247315e97df62067e8272b9b592d73dca7d6546da53->enter($__internal_52c7c08338e879cdec584247315e97df62067e8272b9b592d73dca7d6546da53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
        
        $__internal_52c7c08338e879cdec584247315e97df62067e8272b9b592d73dca7d6546da53->leave($__internal_52c7c08338e879cdec584247315e97df62067e8272b9b592d73dca7d6546da53_prof);

    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
        $__internal_bcd40b0a12bcb85782f6297c41cd64cd308b066630457b1583246276d03750b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcd40b0a12bcb85782f6297c41cd64cd308b066630457b1583246276d03750b0->enter($__internal_bcd40b0a12bcb85782f6297c41cd64cd308b066630457b1583246276d03750b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bcd40b0a12bcb85782f6297c41cd64cd308b066630457b1583246276d03750b0->leave($__internal_bcd40b0a12bcb85782f6297c41cd64cd308b066630457b1583246276d03750b0_prof);

    }

    // line 50
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7fcc1f6c1d0346df634833277d9b0a843e3da3d9ed2a48585e144c7921db9458 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fcc1f6c1d0346df634833277d9b0a843e3da3d9ed2a48585e144c7921db9458->enter($__internal_7fcc1f6c1d0346df634833277d9b0a843e3da3d9ed2a48585e144c7921db9458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_7fcc1f6c1d0346df634833277d9b0a843e3da3d9ed2a48585e144c7921db9458->leave($__internal_7fcc1f6c1d0346df634833277d9b0a843e3da3d9ed2a48585e144c7921db9458_prof);

    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        $__internal_5838cef4a5a949269dc71f8f07d9003f39b5ef96f923c7d7c985e9050281e5ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5838cef4a5a949269dc71f8f07d9003f39b5ef96f923c7d7c985e9050281e5ce->enter($__internal_5838cef4a5a949269dc71f8f07d9003f39b5ef96f923c7d7c985e9050281e5ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 55
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_5838cef4a5a949269dc71f8f07d9003f39b5ef96f923c7d7c985e9050281e5ce->leave($__internal_5838cef4a5a949269dc71f8f07d9003f39b5ef96f923c7d7c985e9050281e5ce_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4dd1eedab8fa8af37094431aa9898e918946c842037792158280bdd531edc165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dd1eedab8fa8af37094431aa9898e918946c842037792158280bdd531edc165->enter($__internal_4dd1eedab8fa8af37094431aa9898e918946c842037792158280bdd531edc165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_4dd1eedab8fa8af37094431aa9898e918946c842037792158280bdd531edc165->leave($__internal_4dd1eedab8fa8af37094431aa9898e918946c842037792158280bdd531edc165_prof);

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
", "::base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app/Resources\\views/base.html.twig");
    }
}

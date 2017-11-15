<?php

/* ::base.html.twig */
class __TwigTemplate_d5e7407b5439a8d3bba3d0c3540b39df9eae19b2273b1b801ec3907dc8238f59 extends Twig_Template
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
        $__internal_3a8884d93aa67bc257b4f8ee86a4031b939ac05f8bd8333f9bfba6be2fbae806 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a8884d93aa67bc257b4f8ee86a4031b939ac05f8bd8333f9bfba6be2fbae806->enter($__internal_3a8884d93aa67bc257b4f8ee86a4031b939ac05f8bd8333f9bfba6be2fbae806_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 51
        echo "             

            <section class=\"main-col\">
                ";
        // line 54
        $this->displayBlock('body', $context, $blocks);
        // line 55
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 57
        $this->displayBlock('sidebar', $context, $blocks);
        // line 58
        echo "            </aside>

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
        
        $__internal_3a8884d93aa67bc257b4f8ee86a4031b939ac05f8bd8333f9bfba6be2fbae806->leave($__internal_3a8884d93aa67bc257b4f8ee86a4031b939ac05f8bd8333f9bfba6be2fbae806_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_71faf4ab8df2e4f5c37f07ab045daa0e46782348e2a3e3b1efac7bcf4a5d5ca0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71faf4ab8df2e4f5c37f07ab045daa0e46782348e2a3e3b1efac7bcf4a5d5ca0->enter($__internal_71faf4ab8df2e4f5c37f07ab045daa0e46782348e2a3e3b1efac7bcf4a5d5ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_71faf4ab8df2e4f5c37f07ab045daa0e46782348e2a3e3b1efac7bcf4a5d5ca0->leave($__internal_71faf4ab8df2e4f5c37f07ab045daa0e46782348e2a3e3b1efac7bcf4a5d5ca0_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f41605efa3b7bf92860266a1a9e5e6127730512fe82db6a271b3336728f385c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f41605efa3b7bf92860266a1a9e5e6127730512fe82db6a271b3336728f385c6->enter($__internal_f41605efa3b7bf92860266a1a9e5e6127730512fe82db6a271b3336728f385c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_f41605efa3b7bf92860266a1a9e5e6127730512fe82db6a271b3336728f385c6->leave($__internal_f41605efa3b7bf92860266a1a9e5e6127730512fe82db6a271b3336728f385c6_prof);

    }

    // line 25
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_44a01d3e72a47a5238972bdbc23dbd369b6e759038352e7b662ca0fe871ceb58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a01d3e72a47a5238972bdbc23dbd369b6e759038352e7b662ca0fe871ceb58->enter($__internal_44a01d3e72a47a5238972bdbc23dbd369b6e759038352e7b662ca0fe871ceb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_44a01d3e72a47a5238972bdbc23dbd369b6e759038352e7b662ca0fe871ceb58->leave($__internal_44a01d3e72a47a5238972bdbc23dbd369b6e759038352e7b662ca0fe871ceb58_prof);

    }

    // line 26
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_be5130a6d283707d12f1f0c0534306f45f606cc8f402cefd3cb43943e768ba53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be5130a6d283707d12f1f0c0534306f45f606cc8f402cefd3cb43943e768ba53->enter($__internal_be5130a6d283707d12f1f0c0534306f45f606cc8f402cefd3cb43943e768ba53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
        
        $__internal_be5130a6d283707d12f1f0c0534306f45f606cc8f402cefd3cb43943e768ba53->leave($__internal_be5130a6d283707d12f1f0c0534306f45f606cc8f402cefd3cb43943e768ba53_prof);

    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_2c18470170ffa1f8df86d00cfb0d99d6fdcd5dcae9f84b978bd5fc0f907b056b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c18470170ffa1f8df86d00cfb0d99d6fdcd5dcae9f84b978bd5fc0f907b056b->enter($__internal_2c18470170ffa1f8df86d00cfb0d99d6fdcd5dcae9f84b978bd5fc0f907b056b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 33
        echo "                        <nav>
                            <ul class=\"ul1\">
                                <li class=\"li1\"><a href=\"#\">Inicio</a></li>

                                <li class=\"li2\"><a href=\"#\">Recetas</a>

\t\t\t\t\t\t\t\t<ul class=\"ul2\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Entrantes</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Primeros</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Segundos</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Postres</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>

                                <li class=\"li3\"><a href=\"";
        // line 47
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_contact");
        echo "\">Contacto</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_2c18470170ffa1f8df86d00cfb0d99d6fdcd5dcae9f84b978bd5fc0f907b056b->leave($__internal_2c18470170ffa1f8df86d00cfb0d99d6fdcd5dcae9f84b978bd5fc0f907b056b_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_481481f67753ca26b235bb84875192a709d1b2551c50531fae83f0e92d3e4859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481481f67753ca26b235bb84875192a709d1b2551c50531fae83f0e92d3e4859->enter($__internal_481481f67753ca26b235bb84875192a709d1b2551c50531fae83f0e92d3e4859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_481481f67753ca26b235bb84875192a709d1b2551c50531fae83f0e92d3e4859->leave($__internal_481481f67753ca26b235bb84875192a709d1b2551c50531fae83f0e92d3e4859_prof);

    }

    // line 57
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_62e60669ef9e4800f92e38e76977b5f749acdb06e32074d6a52b035dab0f3c59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e60669ef9e4800f92e38e76977b5f749acdb06e32074d6a52b035dab0f3c59->enter($__internal_62e60669ef9e4800f92e38e76977b5f749acdb06e32074d6a52b035dab0f3c59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_62e60669ef9e4800f92e38e76977b5f749acdb06e32074d6a52b035dab0f3c59->leave($__internal_62e60669ef9e4800f92e38e76977b5f749acdb06e32074d6a52b035dab0f3c59_prof);

    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3e57b106c04cf23624e478d8c359d4791340ade25080346fcd6a0991d99ea17b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e57b106c04cf23624e478d8c359d4791340ade25080346fcd6a0991d99ea17b->enter($__internal_3e57b106c04cf23624e478d8c359d4791340ade25080346fcd6a0991d99ea17b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 62
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_3e57b106c04cf23624e478d8c359d4791340ade25080346fcd6a0991d99ea17b->leave($__internal_3e57b106c04cf23624e478d8c359d4791340ade25080346fcd6a0991d99ea17b_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1d519ea2b11524cf39108bc76b923e93b073603b97dae42793cda71f440d7db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d519ea2b11524cf39108bc76b923e93b073603b97dae42793cda71f440d7db0->enter($__internal_1d519ea2b11524cf39108bc76b923e93b073603b97dae42793cda71f440d7db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_1d519ea2b11524cf39108bc76b923e93b073603b97dae42793cda71f440d7db0->leave($__internal_1d519ea2b11524cf39108bc76b923e93b073603b97dae42793cda71f440d7db0_prof);

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
        return array (  237 => 67,  229 => 62,  223 => 61,  212 => 57,  201 => 54,  190 => 47,  174 => 33,  168 => 32,  155 => 26,  143 => 25,  134 => 15,  130 => 13,  124 => 12,  112 => 8,  103 => 68,  101 => 67,  96 => 64,  94 => 61,  89 => 58,  87 => 57,  83 => 55,  81 => 54,  76 => 51,  74 => 32,  67 => 27,  65 => 26,  61 => 25,  49 => 17,  47 => 12,  40 => 8,  31 => 1,);
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

                                <li class=\"li2\"><a href=\"#\">Recetas</a>

\t\t\t\t\t\t\t\t<ul class=\"ul2\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Entrantes</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Primeros</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Segundos</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Postres</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t</li>

                                <li class=\"li3\"><a href=\"{{ path('blogger_blog_contact')}}\">Contacto</a></li>
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

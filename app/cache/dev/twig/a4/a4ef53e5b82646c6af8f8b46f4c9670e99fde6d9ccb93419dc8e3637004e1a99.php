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
        $__internal_6e58e516a007556ad76f25b22ec63ba19e815db360299b487fd0147a82315142 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e58e516a007556ad76f25b22ec63ba19e815db360299b487fd0147a82315142->enter($__internal_6e58e516a007556ad76f25b22ec63ba19e815db360299b487fd0147a82315142_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
\t\t\t\t\t\t   
\t\t\t\t<!-- https://www.w3schools.com/css/tryit.asp?filename=trycss_float5 -->
                    ";
        // line 30
        $this->displayBlock('navigation', $context, $blocks);
        // line 50
        echo "                </hgroup>
            </header>
       
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
        
        $__internal_6e58e516a007556ad76f25b22ec63ba19e815db360299b487fd0147a82315142->leave($__internal_6e58e516a007556ad76f25b22ec63ba19e815db360299b487fd0147a82315142_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_184630e99858379f8e6f6dfcc5929931fc641095ef2f3849e1884b03f8141374 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_184630e99858379f8e6f6dfcc5929931fc641095ef2f3849e1884b03f8141374->enter($__internal_184630e99858379f8e6f6dfcc5929931fc641095ef2f3849e1884b03f8141374_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_184630e99858379f8e6f6dfcc5929931fc641095ef2f3849e1884b03f8141374->leave($__internal_184630e99858379f8e6f6dfcc5929931fc641095ef2f3849e1884b03f8141374_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6f1251bfeb057d02a1c269e2ace64e923670a707ef4c1db1ba708ce3d6551909 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f1251bfeb057d02a1c269e2ace64e923670a707ef4c1db1ba708ce3d6551909->enter($__internal_6f1251bfeb057d02a1c269e2ace64e923670a707ef4c1db1ba708ce3d6551909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_6f1251bfeb057d02a1c269e2ace64e923670a707ef4c1db1ba708ce3d6551909->leave($__internal_6f1251bfeb057d02a1c269e2ace64e923670a707ef4c1db1ba708ce3d6551909_prof);

    }

    // line 25
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_443f00e835da83dd0cedd8635779543eb331e502a39b7b526771fe00216cc440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_443f00e835da83dd0cedd8635779543eb331e502a39b7b526771fe00216cc440->enter($__internal_443f00e835da83dd0cedd8635779543eb331e502a39b7b526771fe00216cc440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_443f00e835da83dd0cedd8635779543eb331e502a39b7b526771fe00216cc440->leave($__internal_443f00e835da83dd0cedd8635779543eb331e502a39b7b526771fe00216cc440_prof);

    }

    // line 26
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_c6c60256920952b8542e8fe87825a4b671f8cf6a7269b5c08eb0e690d0fbd092 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6c60256920952b8542e8fe87825a4b671f8cf6a7269b5c08eb0e690d0fbd092->enter($__internal_c6c60256920952b8542e8fe87825a4b671f8cf6a7269b5c08eb0e690d0fbd092_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
        
        $__internal_c6c60256920952b8542e8fe87825a4b671f8cf6a7269b5c08eb0e690d0fbd092->leave($__internal_c6c60256920952b8542e8fe87825a4b671f8cf6a7269b5c08eb0e690d0fbd092_prof);

    }

    // line 30
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_f50c64f99f58023763db1514e1998e6795224626a2547e5f10a2deb2038d1fb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f50c64f99f58023763db1514e1998e6795224626a2547e5f10a2deb2038d1fb7->enter($__internal_f50c64f99f58023763db1514e1998e6795224626a2547e5f10a2deb2038d1fb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 31
        echo "                        <nav>
                           <ul class=\"ul1\">
                                <li class=\"li2\"><a href=\"#\">Inicio</a></li>

                                <li class=\"li2\"><a href=\"#\">Recetas</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"ul2\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Entrantes</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Primeros</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Segundos</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Postres</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>

                                <li class=\"li2\"><a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_contact");
        echo "\">Contacto</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_f50c64f99f58023763db1514e1998e6795224626a2547e5f10a2deb2038d1fb7->leave($__internal_f50c64f99f58023763db1514e1998e6795224626a2547e5f10a2deb2038d1fb7_prof);

    }

    // line 54
    public function block_body($context, array $blocks = array())
    {
        $__internal_ee5f0ce6d90c41840213009465bc2841a6bfe52398f0a6a6694f628009e15111 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee5f0ce6d90c41840213009465bc2841a6bfe52398f0a6a6694f628009e15111->enter($__internal_ee5f0ce6d90c41840213009465bc2841a6bfe52398f0a6a6694f628009e15111_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ee5f0ce6d90c41840213009465bc2841a6bfe52398f0a6a6694f628009e15111->leave($__internal_ee5f0ce6d90c41840213009465bc2841a6bfe52398f0a6a6694f628009e15111_prof);

    }

    // line 57
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_c159a031c03433e9982ab2dd72212d7a6519183b62235d2263ae4b0d552bcee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c159a031c03433e9982ab2dd72212d7a6519183b62235d2263ae4b0d552bcee2->enter($__internal_c159a031c03433e9982ab2dd72212d7a6519183b62235d2263ae4b0d552bcee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_c159a031c03433e9982ab2dd72212d7a6519183b62235d2263ae4b0d552bcee2->leave($__internal_c159a031c03433e9982ab2dd72212d7a6519183b62235d2263ae4b0d552bcee2_prof);

    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        $__internal_3d16c89f0729c70b74393afe974e7d80d55b5667dbbeee24138d49bb553f665b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d16c89f0729c70b74393afe974e7d80d55b5667dbbeee24138d49bb553f665b->enter($__internal_3d16c89f0729c70b74393afe974e7d80d55b5667dbbeee24138d49bb553f665b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 62
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_3d16c89f0729c70b74393afe974e7d80d55b5667dbbeee24138d49bb553f665b->leave($__internal_3d16c89f0729c70b74393afe974e7d80d55b5667dbbeee24138d49bb553f665b_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0351c336278f08bc706801c6fa1dc3bed5de02be27ef8f9bc88c565a9aab235f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0351c336278f08bc706801c6fa1dc3bed5de02be27ef8f9bc88c565a9aab235f->enter($__internal_0351c336278f08bc706801c6fa1dc3bed5de02be27ef8f9bc88c565a9aab235f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0351c336278f08bc706801c6fa1dc3bed5de02be27ef8f9bc88c565a9aab235f->leave($__internal_0351c336278f08bc706801c6fa1dc3bed5de02be27ef8f9bc88c565a9aab235f_prof);

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
        return array (  237 => 67,  229 => 62,  223 => 61,  212 => 57,  201 => 54,  190 => 46,  173 => 31,  167 => 30,  154 => 26,  142 => 25,  133 => 15,  129 => 13,  123 => 12,  111 => 8,  102 => 68,  100 => 67,  95 => 64,  93 => 61,  88 => 58,  86 => 57,  82 => 55,  80 => 54,  74 => 50,  72 => 30,  67 => 27,  65 => 26,  61 => 25,  49 => 17,  47 => 12,  40 => 8,  31 => 1,);
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
\t\t\t\t\t\t   
\t\t\t\t<!-- https://www.w3schools.com/css/tryit.asp?filename=trycss_float5 -->
                    {% block navigation %}
                        <nav>
                           <ul class=\"ul1\">
                                <li class=\"li2\"><a href=\"#\">Inicio</a></li>

                                <li class=\"li2\"><a href=\"#\">Recetas</a>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t<ul class=\"ul2\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Entrantes</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Primeros</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Segundos</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Postres</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t</li>

                                <li class=\"li2\"><a href=\"{{ path('blogger_blog_contact')}}\">Contacto</a></li>
                            </ul>
                        </nav>
                    {% endblock %}
                </hgroup>
            </header>
       
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
", "::base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app\\Resources\\views\\base.html.twig");
    }
}

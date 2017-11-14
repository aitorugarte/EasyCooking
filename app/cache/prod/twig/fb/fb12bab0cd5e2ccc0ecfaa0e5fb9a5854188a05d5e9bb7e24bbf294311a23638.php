<?php

/* ::base.html.twig */
class __TwigTemplate_39a6efd6e25bb53df39597944f9a47c96e97d51af734ed1e12f1523cde9715ca extends Twig_Template
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
    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 25
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"#\">Cocina facil</a>";
    }

    // line 26
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
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
    }

    // line 47
    public function block_body($context, array $blocks = array())
    {
    }

    // line 50
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 54
    public function block_footer($context, array $blocks = array())
    {
        // line 55
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  176 => 60,  171 => 55,  168 => 54,  163 => 50,  158 => 47,  150 => 40,  141 => 33,  138 => 32,  131 => 26,  125 => 25,  119 => 15,  115 => 13,  112 => 12,  106 => 8,  100 => 61,  98 => 60,  93 => 57,  91 => 54,  86 => 51,  84 => 50,  80 => 48,  78 => 47,  73 => 44,  71 => 32,  64 => 27,  62 => 26,  58 => 25,  46 => 17,  44 => 12,  37 => 8,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app/Resources\\views/base.html.twig");
    }
}

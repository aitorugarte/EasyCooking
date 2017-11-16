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

    // line 26
    public function block_cook_title($context, array $blocks = array())
    {
        echo "<a href=\"#\">Cocina facil</a>";
    }

    // line 27
    public function block_cook_tagline($context, array $blocks = array())
    {
        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        // line 32
        echo "                        <nav>
                           <ul class=\"ul1\">
                                <li class=\"li2\"><a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Inicio</a></li>
                                <li class=\"li2\"><a href=\"";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_recetas");
        echo "\">Recetas</a>\t\t
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
    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
    }

    // line 56
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 60
    public function block_footer($context, array $blocks = array())
    {
        // line 61
        echo "                    Cocina fácil - Creado como proyecto para Ingeniería Web
                ";
    }

    // line 66
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
        return array (  188 => 66,  183 => 61,  180 => 60,  175 => 56,  170 => 52,  162 => 43,  151 => 35,  147 => 34,  143 => 32,  140 => 31,  133 => 27,  127 => 26,  121 => 15,  117 => 13,  114 => 12,  108 => 8,  102 => 67,  100 => 66,  95 => 63,  93 => 60,  88 => 57,  86 => 56,  81 => 53,  79 => 52,  72 => 47,  70 => 31,  65 => 28,  63 => 27,  59 => 26,  46 => 17,  44 => 12,  37 => 8,  28 => 1,);
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

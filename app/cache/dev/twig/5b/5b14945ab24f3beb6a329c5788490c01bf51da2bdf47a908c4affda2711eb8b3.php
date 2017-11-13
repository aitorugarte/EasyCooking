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
        $__internal_470d33ea01b71372ce94add76f701890de3223946e891ed0ce4ef7d7e1300010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_470d33ea01b71372ce94add76f701890de3223946e891ed0ce4ef7d7e1300010->enter($__internal_470d33ea01b71372ce94add76f701890de3223946e891ed0ce4ef7d7e1300010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 53
        echo "             

            <section class=\"main-col\">
                ";
        // line 56
        $this->displayBlock('body', $context, $blocks);
        // line 57
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 59
        $this->displayBlock('sidebar', $context, $blocks);
        // line 60
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 63
        $this->displayBlock('footer', $context, $blocks);
        // line 66
        echo "            </div>
        </section>

        ";
        // line 69
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "    </body>
</html>
";
        
        $__internal_470d33ea01b71372ce94add76f701890de3223946e891ed0ce4ef7d7e1300010->leave($__internal_470d33ea01b71372ce94add76f701890de3223946e891ed0ce4ef7d7e1300010_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ff8edc5972a732b118e3727ebd28b8eb7d34271b8daea95798869ec2a6c8e90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ff8edc5972a732b118e3727ebd28b8eb7d34271b8daea95798869ec2a6c8e90->enter($__internal_1ff8edc5972a732b118e3727ebd28b8eb7d34271b8daea95798869ec2a6c8e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_1ff8edc5972a732b118e3727ebd28b8eb7d34271b8daea95798869ec2a6c8e90->leave($__internal_1ff8edc5972a732b118e3727ebd28b8eb7d34271b8daea95798869ec2a6c8e90_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_07b7a79aab56c664dcc414b9b5aa1982106d7140673539c5ad75e919b3ce4321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07b7a79aab56c664dcc414b9b5aa1982106d7140673539c5ad75e919b3ce4321->enter($__internal_07b7a79aab56c664dcc414b9b5aa1982106d7140673539c5ad75e919b3ce4321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_07b7a79aab56c664dcc414b9b5aa1982106d7140673539c5ad75e919b3ce4321->leave($__internal_07b7a79aab56c664dcc414b9b5aa1982106d7140673539c5ad75e919b3ce4321_prof);

    }

    // line 25
    public function block_blog_title($context, array $blocks = array())
    {
        $__internal_7ae9d76bab18d39e545a64e154afe0cf07ed96df2b832d10f4b0b04cdee9946c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ae9d76bab18d39e545a64e154afe0cf07ed96df2b832d10f4b0b04cdee9946c->enter($__internal_7ae9d76bab18d39e545a64e154afe0cf07ed96df2b832d10f4b0b04cdee9946c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_7ae9d76bab18d39e545a64e154afe0cf07ed96df2b832d10f4b0b04cdee9946c->leave($__internal_7ae9d76bab18d39e545a64e154afe0cf07ed96df2b832d10f4b0b04cdee9946c_prof);

    }

    // line 26
    public function block_blog_tagline($context, array $blocks = array())
    {
        $__internal_5a017c6b62b80ba719f95c7dcf62639b887315b149893a5e40e24f417c246538 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a017c6b62b80ba719f95c7dcf62639b887315b149893a5e40e24f417c246538->enter($__internal_5a017c6b62b80ba719f95c7dcf62639b887315b149893a5e40e24f417c246538_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "blog_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
        
        $__internal_5a017c6b62b80ba719f95c7dcf62639b887315b149893a5e40e24f417c246538->leave($__internal_5a017c6b62b80ba719f95c7dcf62639b887315b149893a5e40e24f417c246538_prof);

    }

    // line 32
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_d4f6a2029c0afb999875c5fadffcf6478919e69f4bdbace90a5186e65b17870c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4f6a2029c0afb999875c5fadffcf6478919e69f4bdbace90a5186e65b17870c->enter($__internal_d4f6a2029c0afb999875c5fadffcf6478919e69f4bdbace90a5186e65b17870c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 33
        echo "                        <nav>
                            <ul style=\"list-style-type: none; margin: 0; padding: 0; overflow: hidden; background-color: #333;\">
                                <li style=\"float:left; display: inline-block;
\t\t\t\t\t\t\t\t color: white;
\t\t\t\t\t\t\t\t text-align: center;
   \t\t\t\t\t\t\t     padding: 14px 16px;
    \t\t\t\t\t\t\t text-decoration: none;\"><a href=\"#\">Inicio</a></li>
                                <li style=\"float:left; display: inline-block;
   \t\t\t\t\t\t\t\t color: white;
    \t\t\t\t\t\t\t text-align: center;
    \t\t\t\t\t\t\t padding: 14px 16px;
    \t\t\t\t\t\t\t text-decoration: none;\"><a href=\"#\">Sobre mi</a></li>
                                <li style=\"float:left; display: inline-block;
    \t\t\t\t\t\t\t color: white;
    \t\t\t\t\t\t\t text-align: center;
   \t\t\t\t\t\t\t\t padding: 14px 16px;
    \t\t\t\t\t\t\t text-decoration: none;\"><a href=\"";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_contact");
        echo "\">Contacto</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_d4f6a2029c0afb999875c5fadffcf6478919e69f4bdbace90a5186e65b17870c->leave($__internal_d4f6a2029c0afb999875c5fadffcf6478919e69f4bdbace90a5186e65b17870c_prof);

    }

    // line 56
    public function block_body($context, array $blocks = array())
    {
        $__internal_97e3ca8f0f2d9eeec09e295bc04af917f320a618a337df5f75fa0d0be8948ed5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e3ca8f0f2d9eeec09e295bc04af917f320a618a337df5f75fa0d0be8948ed5->enter($__internal_97e3ca8f0f2d9eeec09e295bc04af917f320a618a337df5f75fa0d0be8948ed5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_97e3ca8f0f2d9eeec09e295bc04af917f320a618a337df5f75fa0d0be8948ed5->leave($__internal_97e3ca8f0f2d9eeec09e295bc04af917f320a618a337df5f75fa0d0be8948ed5_prof);

    }

    // line 59
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_5eac154076ddd979a7f84d8c39e945085ce0ee618c9e71497d24ab46d5cae315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5eac154076ddd979a7f84d8c39e945085ce0ee618c9e71497d24ab46d5cae315->enter($__internal_5eac154076ddd979a7f84d8c39e945085ce0ee618c9e71497d24ab46d5cae315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_5eac154076ddd979a7f84d8c39e945085ce0ee618c9e71497d24ab46d5cae315->leave($__internal_5eac154076ddd979a7f84d8c39e945085ce0ee618c9e71497d24ab46d5cae315_prof);

    }

    // line 63
    public function block_footer($context, array $blocks = array())
    {
        $__internal_f7f6c1c9c66e241c39b421b2670bb4a098c65ac3f1fb1cf120f7f68fa989abe4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7f6c1c9c66e241c39b421b2670bb4a098c65ac3f1fb1cf120f7f68fa989abe4->enter($__internal_f7f6c1c9c66e241c39b421b2670bb4a098c65ac3f1fb1cf120f7f68fa989abe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 64
        echo "                    Blog en Symfony2 - creado por <a href=\"http://carloslaorden.com\">Carlos Laorden</a>, con la ayuda de <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
        
        $__internal_f7f6c1c9c66e241c39b421b2670bb4a098c65ac3f1fb1cf120f7f68fa989abe4->leave($__internal_f7f6c1c9c66e241c39b421b2670bb4a098c65ac3f1fb1cf120f7f68fa989abe4_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a0369d4392780a9c1c59f891ccaf93c20bf06a3ea9fbf4f94257a9237d95812b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0369d4392780a9c1c59f891ccaf93c20bf06a3ea9fbf4f94257a9237d95812b->enter($__internal_a0369d4392780a9c1c59f891ccaf93c20bf06a3ea9fbf4f94257a9237d95812b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a0369d4392780a9c1c59f891ccaf93c20bf06a3ea9fbf4f94257a9237d95812b->leave($__internal_a0369d4392780a9c1c59f891ccaf93c20bf06a3ea9fbf4f94257a9237d95812b_prof);

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
        return array (  239 => 69,  231 => 64,  225 => 63,  214 => 59,  203 => 56,  192 => 49,  174 => 33,  168 => 32,  155 => 26,  143 => 25,  134 => 15,  130 => 13,  124 => 12,  112 => 8,  103 => 70,  101 => 69,  96 => 66,  94 => 63,  89 => 60,  87 => 59,  83 => 57,  81 => 56,  76 => 53,  74 => 32,  67 => 27,  65 => 26,  61 => 25,  49 => 17,  47 => 12,  40 => 8,  31 => 1,);
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
                            <ul style=\"list-style-type: none; margin: 0; padding: 0; overflow: hidden; background-color: #333;\">
                                <li style=\"float:left; display: inline-block;
\t\t\t\t\t\t\t\t color: white;
\t\t\t\t\t\t\t\t text-align: center;
   \t\t\t\t\t\t\t     padding: 14px 16px;
    \t\t\t\t\t\t\t text-decoration: none;\"><a href=\"#\">Inicio</a></li>
                                <li style=\"float:left; display: inline-block;
   \t\t\t\t\t\t\t\t color: white;
    \t\t\t\t\t\t\t text-align: center;
    \t\t\t\t\t\t\t padding: 14px 16px;
    \t\t\t\t\t\t\t text-decoration: none;\"><a href=\"#\">Sobre mi</a></li>
                                <li style=\"float:left; display: inline-block;
    \t\t\t\t\t\t\t color: white;
    \t\t\t\t\t\t\t text-align: center;
   \t\t\t\t\t\t\t\t padding: 14px 16px;
    \t\t\t\t\t\t\t text-decoration: none;\"><a href=\"{{ path('blogger_blog_contact')}}\">Contacto</a></li>
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

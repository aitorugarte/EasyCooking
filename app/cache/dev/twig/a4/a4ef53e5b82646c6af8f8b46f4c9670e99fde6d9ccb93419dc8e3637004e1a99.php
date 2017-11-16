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
        $__internal_048bfcc9f399d7b3bbe4ee6a20873750851511bf3b0e1c27acdafa160254d550 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_048bfcc9f399d7b3bbe4ee6a20873750851511bf3b0e1c27acdafa160254d550->enter($__internal_048bfcc9f399d7b3bbe4ee6a20873750851511bf3b0e1c27acdafa160254d550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 48
        echo "                </hgroup>
            </header>
       
\t\t\t<!-- Contenido principal -->
            <section class=\"main-col\">
                ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 54
        echo "            </section>
\t\t\t<!-- Contenido lateral derecho -->
            <aside class=\"sidebar\">
                ";
        // line 57
        $this->displayBlock('sidebar', $context, $blocks);
        // line 58
        echo "            </aside>
\t\t\t<!-- Pie de página -->
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
        
        $__internal_048bfcc9f399d7b3bbe4ee6a20873750851511bf3b0e1c27acdafa160254d550->leave($__internal_048bfcc9f399d7b3bbe4ee6a20873750851511bf3b0e1c27acdafa160254d550_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_52bebec34ab73518e526948fd028b124ebaab1d722ecc6414de426172ab47ed8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52bebec34ab73518e526948fd028b124ebaab1d722ecc6414de426172ab47ed8->enter($__internal_52bebec34ab73518e526948fd028b124ebaab1d722ecc6414de426172ab47ed8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_52bebec34ab73518e526948fd028b124ebaab1d722ecc6414de426172ab47ed8->leave($__internal_52bebec34ab73518e526948fd028b124ebaab1d722ecc6414de426172ab47ed8_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6b507c09887b4f13c760dce0facbe00e74aabcbcc4db2e3bb1a06371ffcce8ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b507c09887b4f13c760dce0facbe00e74aabcbcc4db2e3bb1a06371ffcce8ed->enter($__internal_6b507c09887b4f13c760dce0facbe00e74aabcbcc4db2e3bb1a06371ffcce8ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
        
        $__internal_6b507c09887b4f13c760dce0facbe00e74aabcbcc4db2e3bb1a06371ffcce8ed->leave($__internal_6b507c09887b4f13c760dce0facbe00e74aabcbcc4db2e3bb1a06371ffcce8ed_prof);

    }

    // line 26
    public function block_cook_title($context, array $blocks = array())
    {
        $__internal_04ab7386bfb0a3b4c1748875e6a550da456b89050c7d071e1ded5c0f629b4d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04ab7386bfb0a3b4c1748875e6a550da456b89050c7d071e1ded5c0f629b4d21->enter($__internal_04ab7386bfb0a3b4c1748875e6a550da456b89050c7d071e1ded5c0f629b4d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_title"));

        echo "<a href=\"#\">Cocina facil</a>";
        
        $__internal_04ab7386bfb0a3b4c1748875e6a550da456b89050c7d071e1ded5c0f629b4d21->leave($__internal_04ab7386bfb0a3b4c1748875e6a550da456b89050c7d071e1ded5c0f629b4d21_prof);

    }

    // line 27
    public function block_cook_tagline($context, array $blocks = array())
    {
        $__internal_cc63029d6ef8f882625f0e95c79ad827cca5f3fabf894d83656dc05330b45dba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc63029d6ef8f882625f0e95c79ad827cca5f3fabf894d83656dc05330b45dba->enter($__internal_cc63029d6ef8f882625f0e95c79ad827cca5f3fabf894d83656dc05330b45dba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "cook_tagline"));

        echo "<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>";
        
        $__internal_cc63029d6ef8f882625f0e95c79ad827cca5f3fabf894d83656dc05330b45dba->leave($__internal_cc63029d6ef8f882625f0e95c79ad827cca5f3fabf894d83656dc05330b45dba_prof);

    }

    // line 31
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_273d2f89e8f41468debd29deec7c5faeb27d445572139c951cf696e84ca65fc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_273d2f89e8f41468debd29deec7c5faeb27d445572139c951cf696e84ca65fc7->enter($__internal_273d2f89e8f41468debd29deec7c5faeb27d445572139c951cf696e84ca65fc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

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
\t\t\t\t\t\t\t\t<li class=\"li2\"><a href=\"";
        // line 43
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_ingredientes");
        echo "\">Ingredientes</a>\t\t
                                <li class=\"li2\"><a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_contact");
        echo "\">Contacto</a></li>
                            </ul>
                        </nav>
                    ";
        
        $__internal_273d2f89e8f41468debd29deec7c5faeb27d445572139c951cf696e84ca65fc7->leave($__internal_273d2f89e8f41468debd29deec7c5faeb27d445572139c951cf696e84ca65fc7_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_39c54ec6076a0c8cdec8c0952e3baba304f5cbe1328a9fb2b1d3c4ca2f30e0c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c54ec6076a0c8cdec8c0952e3baba304f5cbe1328a9fb2b1d3c4ca2f30e0c6->enter($__internal_39c54ec6076a0c8cdec8c0952e3baba304f5cbe1328a9fb2b1d3c4ca2f30e0c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_39c54ec6076a0c8cdec8c0952e3baba304f5cbe1328a9fb2b1d3c4ca2f30e0c6->leave($__internal_39c54ec6076a0c8cdec8c0952e3baba304f5cbe1328a9fb2b1d3c4ca2f30e0c6_prof);

    }

    // line 57
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_18f7c316df3b55dd42df84b1fb077b9e1234067ec702c2bdbb863c0fb0b33baf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f7c316df3b55dd42df84b1fb077b9e1234067ec702c2bdbb863c0fb0b33baf->enter($__internal_18f7c316df3b55dd42df84b1fb077b9e1234067ec702c2bdbb863c0fb0b33baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_18f7c316df3b55dd42df84b1fb077b9e1234067ec702c2bdbb863c0fb0b33baf->leave($__internal_18f7c316df3b55dd42df84b1fb077b9e1234067ec702c2bdbb863c0fb0b33baf_prof);

    }

    // line 61
    public function block_footer($context, array $blocks = array())
    {
        $__internal_17b3ac6f1ae8e0947b498f58957ef8fa998120c645933536226c714905d29ba0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b3ac6f1ae8e0947b498f58957ef8fa998120c645933536226c714905d29ba0->enter($__internal_17b3ac6f1ae8e0947b498f58957ef8fa998120c645933536226c714905d29ba0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 62
        echo "                    Cocina fácil - Creado como proyecto para Ingeniería Web
                ";
        
        $__internal_17b3ac6f1ae8e0947b498f58957ef8fa998120c645933536226c714905d29ba0->leave($__internal_17b3ac6f1ae8e0947b498f58957ef8fa998120c645933536226c714905d29ba0_prof);

    }

    // line 67
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d958ebb279278e6ff158bc56fdb82649b9f4b5815427ef1970bde73f46006b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d958ebb279278e6ff158bc56fdb82649b9f4b5815427ef1970bde73f46006b72->enter($__internal_d958ebb279278e6ff158bc56fdb82649b9f4b5815427ef1970bde73f46006b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d958ebb279278e6ff158bc56fdb82649b9f4b5815427ef1970bde73f46006b72->leave($__internal_d958ebb279278e6ff158bc56fdb82649b9f4b5815427ef1970bde73f46006b72_prof);

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
        return array (  246 => 67,  238 => 62,  232 => 61,  221 => 57,  210 => 53,  199 => 44,  195 => 43,  184 => 35,  180 => 34,  176 => 32,  170 => 31,  157 => 27,  145 => 26,  136 => 15,  132 => 13,  126 => 12,  114 => 8,  105 => 68,  103 => 67,  98 => 64,  96 => 61,  91 => 58,  89 => 57,  84 => 54,  82 => 53,  75 => 48,  73 => 31,  68 => 28,  66 => 27,  62 => 26,  49 => 17,  47 => 12,  40 => 8,  31 => 1,);
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
                    <h2>{% block cook_title %}<a href=\"#\">Cocina facil</a>{% endblock %}</h2>
                    <h3>{% block cook_tagline %}<a href=\"#\">\"Cuanto mayor es la dificultad,
\t\t\t\t\tmayor es la gloria.\" Cicerón</a>{% endblock %}</h3>
\t\t\t\t\t\t   
\t\t\t\t<!-- Menú -->
                    {% block navigation %}
                        <nav>
                           <ul class=\"ul1\">
                                <li class=\"li2\"><a href=\"{{ path('cooker_cook_principal')}}\">Inicio</a></li>
                                <li class=\"li2\"><a href=\"{{ path('cooker_cook_recetas')}}\">Recetas</a>\t\t
\t\t\t\t\t\t\t\t<ul class=\"ul2\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">Entrantes</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Primeros</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Segundos</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Postres</a></li>
\t\t\t\t\t\t\t\t</ul>\t\t
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t<li class=\"li2\"><a href=\"{{ path('cooker_cook_ingredientes')}}\">Ingredientes</a>\t\t
                                <li class=\"li2\"><a href=\"{{ path('cooker_cook_contact')}}\">Contacto</a></li>
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
", "::base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app\\Resources\\views\\base.html.twig");
    }
}

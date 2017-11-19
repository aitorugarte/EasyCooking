<?php

/* CookerCookingBundle:Cook:showRecetas.html.twig */
class __TwigTemplate_40a8b880728585afb44bb7f9894ed4076a1487c8a4c218ed37f5f7ecbadd50c3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:showRecetas.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CookerCookingBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Detalles de la receta";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<h3 style=\"float:right\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? null), "tipo_plato", array()), "html", null, true);
        echo "</h3>
\t<h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? null), "nombre", array()), "html", null, true);
        echo "</h1>
\t

\t<div class=\"date\">
\t\t";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["receta"] ?? null), "date", array()), "d-m-Y"), "html", null, true);
        echo "
\t</div>
\t<img class=\"imgGran\" src=\"/css/images/";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? null), "id", array()), "html", null, true);
        echo ".jpg\" alt=\"receta\" />

\t<h2>Ingredientes</h2>
\t<ul class=\"ingredientes\">
\t";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ingredientes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["ingrediente"]) {
            // line 18
            echo "\t<li>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingrediente"], "nombre", array()), "html", null, true);
            echo "</li>
\t ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingrediente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "
\t<h2>Preparación</h2>
\t<div class=\"body\">
\t\t";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? null), "detalles", array()), "html", null, true);
        echo "
\t</div>
\t
\t<br><br><br>

\t<section class=\"previous-comments\">
\t\t<h3>Comentarios</h3>
\t\t";
        // line 30
        $this->loadTemplate("CookerCookingBundle:Comment:list.html.twig", "CookerCookingBundle:Cook:showRecetas.html.twig", 30)->display(array_merge($context, array("comentarios" => ($context["comentarios"] ?? null))));
        // line 31
        echo "\t</section>

\t<section class=\"coments\" id=\"coments\">
\t
\t<h3 style=\"margin-top: 40px\">Añadir comentario</h3>
\t\t";
        // line 36
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CookerCookingBundle:Comentario:new", array("receta_id" => $this->getAttribute(($context["receta"] ?? null), "id", array()))));
        echo "
\t</section>
\t
\t</section>
\t";
        // line 40
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 44
        echo "
";
    }

    // line 40
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 41
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:showRecetas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 42,  117 => 41,  114 => 40,  109 => 44,  107 => 40,  100 => 36,  93 => 31,  91 => 30,  81 => 23,  76 => 20,  67 => 18,  63 => 17,  56 => 13,  51 => 11,  44 => 7,  39 => 6,  36 => 5,  30 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CookerCookingBundle:Cook:showRecetas.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/showRecetas.html.twig");
    }
}

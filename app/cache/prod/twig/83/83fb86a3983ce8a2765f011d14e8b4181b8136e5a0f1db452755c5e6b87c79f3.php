<?php

/* @CookerCooking/Cook/show.html.twig */
class __TwigTemplate_21ff6b9f4bb388c29216892d96a2478d9e827cbc55d8f4ad9cc9c844d880071c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "@CookerCooking/Cook/show.html.twig", 2);
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
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? null), "nombre", array()), "html", null, true);
        echo "</h1>
\t<div class=\"date\">
\t\t";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["receta"] ?? null), "date", array()), "d-m-Y"), "html", null, true);
        echo "
\t</div>
\t<div class=\"body\">
\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? null), "detalles", array()), "html", null, true);
        echo "
\t</div>
\t
\t<br><br><br>

\t<section class=\"previous-comments\">
\t\t<h3>Comentarios</h3>
\t\t";
        // line 18
        $this->loadTemplate("CookerCookingBundle:Comment:list.html.twig", "@CookerCooking/Cook/show.html.twig", 18)->display(array_merge($context, array("comments" => ($context["comments"] ?? null))));
        // line 19
        echo "\t</section>

\t<section class=\"comments\" id=\"comments\">
\t
\t<h3 style=\"margin-top: 40px\">Añadir comentario</h3>
\t\t";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("CookerCookingBundle:Comment:new", array("receta_id" => $this->getAttribute(($context["receta"] ?? null), "id", array()))));
        echo "
\t</section>
\t
\t</section>
\t";
        // line 28
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 32
        echo "
";
    }

    // line 28
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 29
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
    }

    public function getTemplateName()
    {
        return "@CookerCooking/Cook/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 30,  87 => 29,  84 => 28,  79 => 32,  77 => 28,  70 => 24,  63 => 19,  61 => 18,  51 => 11,  45 => 8,  39 => 6,  36 => 5,  30 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@CookerCooking/Cook/show.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\show.html.twig");
    }
}

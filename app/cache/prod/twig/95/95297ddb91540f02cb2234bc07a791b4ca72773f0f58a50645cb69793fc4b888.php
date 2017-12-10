<?php

/* @CookerCooking/Comment/create.html.twig */
class __TwigTemplate_2daddefd47440c8b22be160de365856b058776ed26bba3a04ec4b276cd2fd8c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "@CookerCooking/Comment/create.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
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

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Añadir comentario";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <h1>Añadir un comentario a la receta \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comentario"] ?? null), "receta", array()), "nombre", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("CookerCookingBundle:Comment:form.html.twig", "@CookerCooking/Comment/create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? null))));
    }

    public function getTemplateName()
    {
        return "@CookerCooking/Comment/create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 9,  38 => 8,  35 => 7,  29 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@CookerCooking/Comment/create.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Comment\\create.html.twig");
    }
}

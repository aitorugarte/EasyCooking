<?php

/* @CookerCooking/Comment/form.html.twig */
class __TwigTemplate_80d5d61aa71dd807e9b8c7751472207a6a4269708b4dd140b56fefa4c5733688 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bfde0c5e10b11db906138e38273dafa857e42e60eb6f8336198caea4de531a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bfde0c5e10b11db906138e38273dafa857e42e60eb6f8336198caea4de531a7->enter($__internal_1bfde0c5e10b11db906138e38273dafa857e42e60eb6f8336198caea4de531a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Comment/form.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_comentario_create", array("receta_id" => $this->getAttribute($this->getAttribute(($context["comentario"] ?? $this->getContext($context, "comentario")), "receta", array()), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo " class=\"cooker\">
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Enviar\">
    </p>
</form>
";
        
        $__internal_1bfde0c5e10b11db906138e38273dafa857e42e60eb6f8336198caea4de531a7->leave($__internal_1bfde0c5e10b11db906138e38273dafa857e42e60eb6f8336198caea4de531a7_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Comment/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Comment/form.html.twig #}

<form action=\"{{ path('cooker_comentario_create', { 'receta_id' : comentario.receta.id } ) }}\" method=\"post\" {{ form_enctype(form) }} class=\"cooker\">
    {{ form_widget(form) }}
    <p>
        <input type=\"submit\" value=\"Enviar\">
    </p>
</form>
", "@CookerCooking/Comment/form.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Comment\\form.html.twig");
    }
}

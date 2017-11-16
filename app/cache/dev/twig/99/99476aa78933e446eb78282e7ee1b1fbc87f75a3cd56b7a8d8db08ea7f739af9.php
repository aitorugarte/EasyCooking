<?php

/* CookerCookingBundle:Comment:form.html.twig */
class __TwigTemplate_01e16578802e8a3522f27a54659ccef3183f6fd460784bc4e8c931412a37b8fb extends Twig_Template
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
        $__internal_28ec99c1adc54ab6a0d6795f05f29d61cdb1d8adb06846a5e69b313e6587311a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28ec99c1adc54ab6a0d6795f05f29d61cdb1d8adb06846a5e69b313e6587311a->enter($__internal_28ec99c1adc54ab6a0d6795f05f29d61cdb1d8adb06846a5e69b313e6587311a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Comment:form.html.twig"));

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
        
        $__internal_28ec99c1adc54ab6a0d6795f05f29d61cdb1d8adb06846a5e69b313e6587311a->leave($__internal_28ec99c1adc54ab6a0d6795f05f29d61cdb1d8adb06846a5e69b313e6587311a_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Comment:form.html.twig";
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
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Comentario/form.html.twig #}

<form action=\"{{ path('cooker_comentario_create', { 'receta_id' : comentario.receta.id } ) }}\" method=\"post\" {{ form_enctype(form) }} class=\"cooker\">
    {{ form_widget(form) }}
    <p>
        <input type=\"submit\" value=\"Enviar\">
    </p>
</form>
", "CookerCookingBundle:Comment:form.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Comment/form.html.twig");
    }
}

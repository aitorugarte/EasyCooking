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
        $__internal_12fb6cea26bc73785a821dff51880e1510535929796f3bd316b3b845e2b2f22f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12fb6cea26bc73785a821dff51880e1510535929796f3bd316b3b845e2b2f22f->enter($__internal_12fb6cea26bc73785a821dff51880e1510535929796f3bd316b3b845e2b2f22f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Comment:form.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_comment_create", array("receta_id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "receta", array()), "id", array()))), "html", null, true);
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
        
        $__internal_12fb6cea26bc73785a821dff51880e1510535929796f3bd316b3b845e2b2f22f->leave($__internal_12fb6cea26bc73785a821dff51880e1510535929796f3bd316b3b845e2b2f22f_prof);

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
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Comment/form.html.twig #}

<form action=\"{{ path('cooker_comment_create', { 'receta_id' : comment.receta.id } ) }}\" method=\"post\" {{ form_enctype(form) }} class=\"cooker\">
    {{ form_widget(form) }}
    <p>
        <input type=\"submit\" value=\"Enviar\">
    </p>
</form>
", "CookerCookingBundle:Comment:form.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Comment/form.html.twig");
    }
}

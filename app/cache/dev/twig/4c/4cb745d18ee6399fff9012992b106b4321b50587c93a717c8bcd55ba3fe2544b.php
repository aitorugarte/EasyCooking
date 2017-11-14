<?php

/* BloggerBlogBundle:Comment:form.html.twig */
class __TwigTemplate_27fb60564de89b9f8b2167a01181075239ee1fb7b868aac86773b9ecddcd2c40 extends Twig_Template
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
        $__internal_1f34408748b4c36ead46dbf82c7f87811cd1c923a8634af8c0ce265012e81f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f34408748b4c36ead46dbf82c7f87811cd1c923a8634af8c0ce265012e81f15->enter($__internal_1f34408748b4c36ead46dbf82c7f87811cd1c923a8634af8c0ce265012e81f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Comment:form.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_comment_create", array("receta_id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "receta", array()), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'enctype');
        echo " class=\"blogger\">
    ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <p>
        <input type=\"submit\" value=\"Enviar\">
    </p>
</form>
";
        
        $__internal_1f34408748b4c36ead46dbf82c7f87811cd1c923a8634af8c0ce265012e81f15->leave($__internal_1f34408748b4c36ead46dbf82c7f87811cd1c923a8634af8c0ce265012e81f15_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:form.html.twig";
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
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Comment/form.html.twig #}

<form action=\"{{ path('blogger_comment_create', { 'receta_id' : comment.receta.id } ) }}\" method=\"post\" {{ form_enctype(form) }} class=\"blogger\">
    {{ form_widget(form) }}
    <p>
        <input type=\"submit\" value=\"Enviar\">
    </p>
</form>
", "BloggerBlogBundle:Comment:form.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle/Resources/views/Comment/form.html.twig");
    }
}

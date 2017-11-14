<?php

/* @BloggerBlog/Comment/form.html.twig */
class __TwigTemplate_8adc3a900d91327b32d17b5a49155e43e20afcb3468d942180030226dd4175b6 extends Twig_Template
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
        $__internal_4aff7f25820140a191c7e2172453062507c41219e4b20a85af23271adcbe56ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4aff7f25820140a191c7e2172453062507c41219e4b20a85af23271adcbe56ff->enter($__internal_4aff7f25820140a191c7e2172453062507c41219e4b20a85af23271adcbe56ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@BloggerBlog/Comment/form.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_comment_create", array("post_id" => $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "post", array()), "id", array()))), "html", null, true);
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
        
        $__internal_4aff7f25820140a191c7e2172453062507c41219e4b20a85af23271adcbe56ff->leave($__internal_4aff7f25820140a191c7e2172453062507c41219e4b20a85af23271adcbe56ff_prof);

    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Comment/form.html.twig";
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

<form action=\"{{ path('blogger_comment_create', { 'post_id' : comment.post.id } ) }}\" method=\"post\" {{ form_enctype(form) }} class=\"blogger\">
    {{ form_widget(form) }}
    <p>
        <input type=\"submit\" value=\"Enviar\">
    </p>
</form>
", "@BloggerBlog/Comment/form.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle\\Resources\\views\\Comment\\form.html.twig");
    }
}

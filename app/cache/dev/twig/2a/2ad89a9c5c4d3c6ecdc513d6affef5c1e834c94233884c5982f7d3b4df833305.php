<?php

/* BloggerBlogBundle:Comment:create.html.twig */
class __TwigTemplate_4b3474dd0e1ed0fe9127ce6364234ad746b24c842bebc3d1ff11b06565f824da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Comment:create.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_15433ea9bfc7914e335b9b30e54a0fd6bde677cfa16930abfbb2bdfe991ec639 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15433ea9bfc7914e335b9b30e54a0fd6bde677cfa16930abfbb2bdfe991ec639->enter($__internal_15433ea9bfc7914e335b9b30e54a0fd6bde677cfa16930abfbb2bdfe991ec639_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Comment:create.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15433ea9bfc7914e335b9b30e54a0fd6bde677cfa16930abfbb2bdfe991ec639->leave($__internal_15433ea9bfc7914e335b9b30e54a0fd6bde677cfa16930abfbb2bdfe991ec639_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_db34f2f9363aabc2e9c1055cfb160c89b2b37fdfa47ec71c713f25a54be41e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db34f2f9363aabc2e9c1055cfb160c89b2b37fdfa47ec71c713f25a54be41e6f->enter($__internal_db34f2f9363aabc2e9c1055cfb160c89b2b37fdfa47ec71c713f25a54be41e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Añadir comentario";
        
        $__internal_db34f2f9363aabc2e9c1055cfb160c89b2b37fdfa47ec71c713f25a54be41e6f->leave($__internal_db34f2f9363aabc2e9c1055cfb160c89b2b37fdfa47ec71c713f25a54be41e6f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_08d808648aa7294d38f99e87dc84c0c71bcb8545dca3a758e1911b6b4208d7f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08d808648aa7294d38f99e87dc84c0c71bcb8545dca3a758e1911b6b4208d7f2->enter($__internal_08d808648aa7294d38f99e87dc84c0c71bcb8545dca3a758e1911b6b4208d7f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "    <h1>Añadir un comentario a la receta \"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["comment"] ?? $this->getContext($context, "comment")), "receta", array()), "nombre", array()), "html", null, true);
        echo "\"</h1>
    ";
        // line 9
        $this->loadTemplate("BloggerBlogBundle:Comment:form.html.twig", "BloggerBlogBundle:Comment:create.html.twig", 9)->display(array_merge($context, array("form" => ($context["form"] ?? $this->getContext($context, "form")))));
        
        $__internal_08d808648aa7294d38f99e87dc84c0c71bcb8545dca3a758e1911b6b4208d7f2->leave($__internal_08d808648aa7294d38f99e87dc84c0c71bcb8545dca3a758e1911b6b4208d7f2_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Comment:create.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  53 => 8,  47 => 7,  35 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Comment/create.html.twig #}

{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}Añadir comentario{% endblock%}

{% block body %}
    <h1>Añadir un comentario a la receta \"{{ comment.receta.nombre }}\"</h1>
    {% include 'BloggerBlogBundle:Comment:form.html.twig' with { 'form': form } %}
{% endblock %}
", "BloggerBlogBundle:Comment:create.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle/Resources/views/Comment/create.html.twig");
    }
}

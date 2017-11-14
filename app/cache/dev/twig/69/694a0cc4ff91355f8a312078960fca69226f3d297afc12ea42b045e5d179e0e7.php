<?php

/* BloggerBlogBundle:Blog:show.html.twig */
class __TwigTemplate_850cacab9b4f0a739a83f7cbe40da15a227aed5339a8c7d221fbe9818472923c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Blog:show.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b62ead1605e68d4827b82b68bdef3ced9211d4f5cb8bbec54d7a19ea7be01fa1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b62ead1605e68d4827b82b68bdef3ced9211d4f5cb8bbec54d7a19ea7be01fa1->enter($__internal_b62ead1605e68d4827b82b68bdef3ced9211d4f5cb8bbec54d7a19ea7be01fa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b62ead1605e68d4827b82b68bdef3ced9211d4f5cb8bbec54d7a19ea7be01fa1->leave($__internal_b62ead1605e68d4827b82b68bdef3ced9211d4f5cb8bbec54d7a19ea7be01fa1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_57c664c4d00d1f0a45907acbc6b5d08969415a82b472fb8fa480fc7f4aa8b87e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57c664c4d00d1f0a45907acbc6b5d08969415a82b472fb8fa480fc7f4aa8b87e->enter($__internal_57c664c4d00d1f0a45907acbc6b5d08969415a82b472fb8fa480fc7f4aa8b87e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Detalles de la receta";
        
        $__internal_57c664c4d00d1f0a45907acbc6b5d08969415a82b472fb8fa480fc7f4aa8b87e->leave($__internal_57c664c4d00d1f0a45907acbc6b5d08969415a82b472fb8fa480fc7f4aa8b87e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a2bf693725d8504d2f4b8aea1e7730e3ffa353427893258c6f4953f036c3e235 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2bf693725d8504d2f4b8aea1e7730e3ffa353427893258c6f4953f036c3e235->enter($__internal_a2bf693725d8504d2f4b8aea1e7730e3ffa353427893258c6f4953f036c3e235_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "nombre", array()), "html", null, true);
        echo "</h1>
\t<div class=\"date\">
\t\t";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "date", array()), "d-m-Y"), "html", null, true);
        echo "
\t</div>
\t<div class=\"body\">
\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "detalles", array()), "html", null, true);
        echo "
\t</div>\t\t
\t<section class=\"comments\" id=\"comments\">
\t<h3>Añadir comentario</h3>
\t\t";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("BloggerBlogBundle:Comment:new", array("receta_id" => $this->getAttribute(($context["receta"] ?? $this->getContext($context, "receta")), "id", array()))));
        echo "
\t</section>
\t<section class=\"previous-comments\">
\t\t<h3>Comentarios</h3>
\t\t";
        // line 19
        $this->loadTemplate("BloggerBlogBundle:Comment:list.html.twig", "BloggerBlogBundle:Blog:show.html.twig", 19)->display(array_merge($context, array("comments" => ($context["comments"] ?? $this->getContext($context, "comments")))));
        // line 20
        echo "\t</section>
\t</section>
\t";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
";
        
        $__internal_a2bf693725d8504d2f4b8aea1e7730e3ffa353427893258c6f4953f036c3e235->leave($__internal_a2bf693725d8504d2f4b8aea1e7730e3ffa353427893258c6f4953f036c3e235_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_66ba2f9deb869f4c922d846038d6d5217d706ee1797a192ada15a620d38e21c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66ba2f9deb869f4c922d846038d6d5217d706ee1797a192ada15a620d38e21c9->enter($__internal_66ba2f9deb869f4c922d846038d6d5217d706ee1797a192ada15a620d38e21c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        
        $__internal_66ba2f9deb869f4c922d846038d6d5217d706ee1797a192ada15a620d38e21c9->leave($__internal_66ba2f9deb869f4c922d846038d6d5217d706ee1797a192ada15a620d38e21c9_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Blog:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 24,  102 => 23,  96 => 22,  88 => 26,  86 => 22,  82 => 20,  80 => 19,  73 => 15,  66 => 11,  60 => 8,  54 => 6,  48 => 5,  36 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Blog/show.html.twig #}
{% extends \"BloggerBlogBundle::layout.html.twig\" %}
{% block title %}Detalles de la receta{% endblock %}

{% block body %}
\t<h1>{{ receta.nombre }}</h1>
\t<div class=\"date\">
\t\t{{ receta.date|date('d-m-Y') }}
\t</div>
\t<div class=\"body\">
\t\t{{ receta.detalles }}
\t</div>\t\t
\t<section class=\"comments\" id=\"comments\">
\t<h3>Añadir comentario</h3>
\t\t{{ render(controller( 'BloggerBlogBundle:Comment:new', { 'receta_id': receta.id } )) }}
\t</section>
\t<section class=\"previous-comments\">
\t\t<h3>Comentarios</h3>
\t\t{% include 'BloggerBlogBundle:Comment:list.html.twig' with { 'comments': comments } %}
\t</section>
\t</section>
\t{% block stylesheets %}
\t{{ parent() }}
\t<link href=\"{{ asset('css/blog.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
\t{% endblock %}

{% endblock %}
", "BloggerBlogBundle:Blog:show.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle/Resources/views/Blog/show.html.twig");
    }
}

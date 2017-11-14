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
        $__internal_64618df4eef18e89b346b4029ca01439a4c7b2f154d21fb12acf7bc165bef881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64618df4eef18e89b346b4029ca01439a4c7b2f154d21fb12acf7bc165bef881->enter($__internal_64618df4eef18e89b346b4029ca01439a4c7b2f154d21fb12acf7bc165bef881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64618df4eef18e89b346b4029ca01439a4c7b2f154d21fb12acf7bc165bef881->leave($__internal_64618df4eef18e89b346b4029ca01439a4c7b2f154d21fb12acf7bc165bef881_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2de47a26d970886b5717710274411b5307c85a1bb0b657fb87b5251ef7df2781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2de47a26d970886b5717710274411b5307c85a1bb0b657fb87b5251ef7df2781->enter($__internal_2de47a26d970886b5717710274411b5307c85a1bb0b657fb87b5251ef7df2781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Post details";
        
        $__internal_2de47a26d970886b5717710274411b5307c85a1bb0b657fb87b5251ef7df2781->leave($__internal_2de47a26d970886b5717710274411b5307c85a1bb0b657fb87b5251ef7df2781_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9bb943ab03d5a6e9de8000cb9569c036dcab0bac35448bf492a79ec3d487ec5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9bb943ab03d5a6e9de8000cb9569c036dcab0bac35448bf492a79ec3d487ec5->enter($__internal_f9bb943ab03d5a6e9de8000cb9569c036dcab0bac35448bf492a79ec3d487ec5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</h1>
\t<div class=\"date\">
\t\t";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "date", array()), "d-m-Y"), "html", null, true);
        echo "
\t</div>
\t<div class=\"body\">
\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "body", array()), "html", null, true);
        echo "
\t</div>\t\t
\t<section class=\"comments\" id=\"comments\">
\t<h3>Añadir comentario</h3>
\t\t";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("BloggerBlogBundle:Comment:new", array("post_id" => $this->getAttribute(($context["post"] ?? $this->getContext($context, "post")), "id", array()))));
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
        
        $__internal_f9bb943ab03d5a6e9de8000cb9569c036dcab0bac35448bf492a79ec3d487ec5->leave($__internal_f9bb943ab03d5a6e9de8000cb9569c036dcab0bac35448bf492a79ec3d487ec5_prof);

    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2f17c089e6b290c2da059c4a48a6f0ead31062801a43b2b574d81e8a7da6c4b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f17c089e6b290c2da059c4a48a6f0ead31062801a43b2b574d81e8a7da6c4b6->enter($__internal_2f17c089e6b290c2da059c4a48a6f0ead31062801a43b2b574d81e8a7da6c4b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 23
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
        
        $__internal_2f17c089e6b290c2da059c4a48a6f0ead31062801a43b2b574d81e8a7da6c4b6->leave($__internal_2f17c089e6b290c2da059c4a48a6f0ead31062801a43b2b574d81e8a7da6c4b6_prof);

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
{% block title %}Post details{% endblock %}

{% block body %}
\t<h1>{{ post.title }}</h1>
\t<div class=\"date\">
\t\t{{ post.date|date('d-m-Y') }}
\t</div>
\t<div class=\"body\">
\t\t{{ post.body }}
\t</div>\t\t
\t<section class=\"comments\" id=\"comments\">
\t<h3>Añadir comentario</h3>
\t\t{{ render(controller( 'BloggerBlogBundle:Comment:new', { 'post_id': post.id } )) }}
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

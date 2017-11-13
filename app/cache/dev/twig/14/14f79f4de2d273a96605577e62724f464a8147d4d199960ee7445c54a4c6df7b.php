<?php

/* BloggerBlogBundle:Blog:list.html.twig */
class __TwigTemplate_672d7e2cfdc88853ba5bec6f8b488c96d58cb417e54bf6bdc22e5ffb30909ce6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Blog:list.html.twig", 2);
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
        $__internal_6508a34b1f6d4c3866fac4b4127e79fa4b10ed52986e7af7efff6221ee06d1f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6508a34b1f6d4c3866fac4b4127e79fa4b10ed52986e7af7efff6221ee06d1f1->enter($__internal_6508a34b1f6d4c3866fac4b4127e79fa4b10ed52986e7af7efff6221ee06d1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6508a34b1f6d4c3866fac4b4127e79fa4b10ed52986e7af7efff6221ee06d1f1->leave($__internal_6508a34b1f6d4c3866fac4b4127e79fa4b10ed52986e7af7efff6221ee06d1f1_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dce4984caf8745a0ef723dd9e80a656b9968c96b4aab56b12ea8c71f39046930 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dce4984caf8745a0ef723dd9e80a656b9968c96b4aab56b12ea8c71f39046930->enter($__internal_dce4984caf8745a0ef723dd9e80a656b9968c96b4aab56b12ea8c71f39046930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "List of Posts";
        
        $__internal_dce4984caf8745a0ef723dd9e80a656b9968c96b4aab56b12ea8c71f39046930->leave($__internal_dce4984caf8745a0ef723dd9e80a656b9968c96b4aab56b12ea8c71f39046930_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a9128e17df9baa4e877e2b988e71c8eebe025a40b753f74338b733b1c432d4ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9128e17df9baa4e877e2b988e71c8eebe025a40b753f74338b733b1c432d4ff->enter($__internal_a9128e17df9baa4e877e2b988e71c8eebe025a40b753f74338b733b1c432d4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["posts"] ?? $this->getContext($context, "posts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 7
            echo "        <article class=\"post\">
            <div class=\"date\"><time datetime=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["post"], "date", array()), "l, F j, Y"), "html", null, true);
            echo "</time></div>
            <header>
                <h2><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <div class=\"snippet\">
                <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "body", array(0 => 200), "method"), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: -</p>
            </footer>
        </article>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "        <p>No hay entradas en este blog</p>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_a9128e17df9baa4e877e2b988e71c8eebe025a40b753f74338b733b1c432d4ff->leave($__internal_a9128e17df9baa4e877e2b988e71c8eebe025a40b753f74338b733b1c432d4ff_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Blog:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 23,  82 => 15,  78 => 14,  69 => 10,  62 => 8,  59 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Blog/list.html.twig #}
{% extends \"BloggerBlogBundle::layout.html.twig\" %}
{% block title %}List of Posts{% endblock %}

{% block body %}
    {% for post in posts %}
        <article class=\"post\">
            <div class=\"date\"><time datetime=\"{{ post.date|date('c') }}\">{{ post.date|date('l, F j, Y') }}</time></div>
            <header>
                <h2><a href=\"{{ path('blogger_blog_show', { 'id': post.id }) }}\">{{ post.title }}</a></h2>
            </header>

            <div class=\"snippet\">
                <p>{{ post.body(200) }}</p>
                <p class=\"continue\"><a href=\"{{ path('blogger_blog_show', { 'id': post.id }) }}\">Seguir leyendo...</a></p>
            </div>

            <footer class=\"meta\">
                <p>Comentarios: -</p>
            </footer>
        </article>
    {% else %}
        <p>No hay entradas en este blog</p>
    {% endfor %}
{% endblock %}
", "BloggerBlogBundle:Blog:list.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle/Resources/views/Blog/list.html.twig");
    }
}

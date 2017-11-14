<?php

/* BloggerBlogBundle:Blog:list.html.twig */
class __TwigTemplate_a81967425e4d8d0b7c924656e5376f82452495efc2b9cb402741e967bd95dc34 extends Twig_Template
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
        $__internal_5dba993888166b0f71d6e2d116e17df3e1b18c958545c7e977c77c5a6b26a9da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dba993888166b0f71d6e2d116e17df3e1b18c958545c7e977c77c5a6b26a9da->enter($__internal_5dba993888166b0f71d6e2d116e17df3e1b18c958545c7e977c77c5a6b26a9da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5dba993888166b0f71d6e2d116e17df3e1b18c958545c7e977c77c5a6b26a9da->leave($__internal_5dba993888166b0f71d6e2d116e17df3e1b18c958545c7e977c77c5a6b26a9da_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f085f19c872a9007529ec474f2e3b8a9b9cb8d24098f15aa06340ac67e1b0e58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f085f19c872a9007529ec474f2e3b8a9b9cb8d24098f15aa06340ac67e1b0e58->enter($__internal_f085f19c872a9007529ec474f2e3b8a9b9cb8d24098f15aa06340ac67e1b0e58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Lista de Recetas";
        
        $__internal_f085f19c872a9007529ec474f2e3b8a9b9cb8d24098f15aa06340ac67e1b0e58->leave($__internal_f085f19c872a9007529ec474f2e3b8a9b9cb8d24098f15aa06340ac67e1b0e58_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_315f8e4bc5c7327a5916aa470535fbdd2d0b58313b30c404f33a05587ebde98c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315f8e4bc5c7327a5916aa470535fbdd2d0b58313b30c404f33a05587ebde98c->enter($__internal_315f8e4bc5c7327a5916aa470535fbdd2d0b58313b30c404f33a05587ebde98c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 7
            echo "        <article class=\"receta\">
            <div class=\"date\"><time datetime=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "date", array()), "c"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["receta"], "date", array()), "l, F j, Y"), "html", null, true);
            echo "</time></div>
            <header>
                <h2><a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_show", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</a></h2>
            </header>

            <div class=\"snippet\">
                <p>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "detalles", array(0 => 200), "method"), "html", null, true);
            echo "</p>
                <p class=\"continue\"><a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blogger_blog_show", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_315f8e4bc5c7327a5916aa470535fbdd2d0b58313b30c404f33a05587ebde98c->leave($__internal_315f8e4bc5c7327a5916aa470535fbdd2d0b58313b30c404f33a05587ebde98c_prof);

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
{% block title %}Lista de Recetas{% endblock %}

{% block body %}
    {% for receta in recetas %}
        <article class=\"receta\">
            <div class=\"date\"><time datetime=\"{{ receta.date|date('c') }}\">{{ receta.date|date('l, F j, Y') }}</time></div>
            <header>
                <h2><a href=\"{{ path('blogger_blog_show', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></h2>
            </header>

            <div class=\"snippet\">
                <p>{{ receta.detalles(200) }}</p>
                <p class=\"continue\"><a href=\"{{ path('blogger_blog_show', { 'id': receta.id }) }}\">Seguir leyendo...</a></p>
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

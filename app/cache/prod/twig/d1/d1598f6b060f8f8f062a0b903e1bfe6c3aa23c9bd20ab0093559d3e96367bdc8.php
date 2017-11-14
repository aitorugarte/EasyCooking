<?php

/* @BloggerBlog/Blog/show.html.twig */
class __TwigTemplate_5bc7949fff26c6c3fc486d88f8d6ecd907556646173a1cbc1aabd129fad7fb56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "@BloggerBlog/Blog/show.html.twig", 2);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Detalles de la receta";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<h1>";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? null), "nombre", array()), "html", null, true);
        echo "</h1>
\t<div class=\"date\">
\t\t";
        // line 8
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["receta"] ?? null), "date", array()), "d-m-Y"), "html", null, true);
        echo "
\t</div>
\t<div class=\"body\">
\t\t";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute(($context["receta"] ?? null), "detalles", array()), "html", null, true);
        echo "
\t</div>\t\t
\t<section class=\"comments\" id=\"comments\">
\t<h3>Añadir comentario</h3>
\t\t";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("BloggerBlogBundle:Comment:new", array("receta_id" => $this->getAttribute(($context["receta"] ?? null), "id", array()))));
        echo "
\t</section>
\t<section class=\"previous-comments\">
\t\t<h3>Comentarios</h3>
\t\t";
        // line 19
        $this->loadTemplate("BloggerBlogBundle:Comment:list.html.twig", "@BloggerBlog/Blog/show.html.twig", 19)->display(array_merge($context, array("comments" => ($context["comments"] ?? null))));
        // line 20
        echo "\t</section>
\t</section>
\t";
        // line 22
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 26
        echo "
";
    }

    // line 22
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 23
        echo "\t";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
\t<link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
\t";
    }

    public function getTemplateName()
    {
        return "@BloggerBlog/Blog/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  81 => 23,  78 => 22,  73 => 26,  71 => 22,  67 => 20,  65 => 19,  58 => 15,  51 => 11,  45 => 8,  39 => 6,  36 => 5,  30 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@BloggerBlog/Blog/show.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle\\Resources\\views\\Blog\\show.html.twig");
    }
}

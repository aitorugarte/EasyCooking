<?php

/* BloggerBlogBundle:Blog:contact.html.twig */
class __TwigTemplate_41e7188ec70005bbefb60e63a13af16dda1e642dcdac25309d02ad0df8938068 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("BloggerBlogBundle::layout.html.twig", "BloggerBlogBundle:Blog:contact.html.twig", 2);
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
        $__internal_80b8daa7d93106a91ad0908aba15ff9a7b0d73351d051e7f88caae67e908d312 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80b8daa7d93106a91ad0908aba15ff9a7b0d73351d051e7f88caae67e908d312->enter($__internal_80b8daa7d93106a91ad0908aba15ff9a7b0d73351d051e7f88caae67e908d312_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80b8daa7d93106a91ad0908aba15ff9a7b0d73351d051e7f88caae67e908d312->leave($__internal_80b8daa7d93106a91ad0908aba15ff9a7b0d73351d051e7f88caae67e908d312_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c5ba006dea0b134ff3ba3438eb76ca7e7d245273f3856ec57b575c82beb72e1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5ba006dea0b134ff3ba3438eb76ca7e7d245273f3856ec57b575c82beb72e1c->enter($__internal_c5ba006dea0b134ff3ba3438eb76ca7e7d245273f3856ec57b575c82beb72e1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_c5ba006dea0b134ff3ba3438eb76ca7e7d245273f3856ec57b575c82beb72e1c->leave($__internal_c5ba006dea0b134ff3ba3438eb76ca7e7d245273f3856ec57b575c82beb72e1c_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc3e5a14b47b6f73489ba07b80b7c4f2c6acb06f26be90224687709addb5f70b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc3e5a14b47b6f73489ba07b80b7c4f2c6acb06f26be90224687709addb5f70b->enter($__internal_bc3e5a14b47b6f73489ba07b80b7c4f2c6acb06f26be90224687709addb5f70b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contacta conmigo</h1>
    </header>

    <p>Puedes encontrarme en las siguientes redes sociales:</p>
\t<ul>
\t\t<li><a href=\"https://twitter.com/claorden\" target=\"_blank\">Twitter</a></li>
\t\t<li><a href=\"https://www.linkedin.com/in/claorden\" target=\"_blank\">LinkedIn</a></li>
\t</ul>
";
        
        $__internal_bc3e5a14b47b6f73489ba07b80b7c4f2c6acb06f26be90224687709addb5f70b->leave($__internal_bc3e5a14b47b6f73489ba07b80b7c4f2c6acb06f26be90224687709addb5f70b_prof);

    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle:Blog:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Blogger/BlogBundle/Resources/views/Blog/contact.html.twig #}
{% extends 'BloggerBlogBundle::layout.html.twig' %}

{% block title %}Contacto{% endblock%}

{% block body %}
    <header>
        <h1>Contacta conmigo</h1>
    </header>

    <p>Puedes encontrarme en las siguientes redes sociales:</p>
\t<ul>
\t\t<li><a href=\"https://twitter.com/claorden\" target=\"_blank\">Twitter</a></li>
\t\t<li><a href=\"https://www.linkedin.com/in/claorden\" target=\"_blank\">LinkedIn</a></li>
\t</ul>
{% endblock %}
", "BloggerBlogBundle:Blog:contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Blogger\\BlogBundle\\Resources\\views\\Blog\\contact.html.twig");
    }
}

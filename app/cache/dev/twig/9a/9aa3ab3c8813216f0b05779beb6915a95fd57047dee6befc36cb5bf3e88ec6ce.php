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
        $__internal_4cb7dd1cbcc2d843a2bca0567e159b732ca2c9bc72e1838a617a407aa64eb3e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cb7dd1cbcc2d843a2bca0567e159b732ca2c9bc72e1838a617a407aa64eb3e2->enter($__internal_4cb7dd1cbcc2d843a2bca0567e159b732ca2c9bc72e1838a617a407aa64eb3e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BloggerBlogBundle:Blog:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cb7dd1cbcc2d843a2bca0567e159b732ca2c9bc72e1838a617a407aa64eb3e2->leave($__internal_4cb7dd1cbcc2d843a2bca0567e159b732ca2c9bc72e1838a617a407aa64eb3e2_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_027d847da3688f320c6859c05f6d2d991549a359c270c0e2e0434c1740bf5f15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_027d847da3688f320c6859c05f6d2d991549a359c270c0e2e0434c1740bf5f15->enter($__internal_027d847da3688f320c6859c05f6d2d991549a359c270c0e2e0434c1740bf5f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contact";
        
        $__internal_027d847da3688f320c6859c05f6d2d991549a359c270c0e2e0434c1740bf5f15->leave($__internal_027d847da3688f320c6859c05f6d2d991549a359c270c0e2e0434c1740bf5f15_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_837a018942cf5a17dc4ee4b5536c14095a4092d382c024c1c66b39d37c18c7e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_837a018942cf5a17dc4ee4b5536c14095a4092d382c024c1c66b39d37c18c7e1->enter($__internal_837a018942cf5a17dc4ee4b5536c14095a4092d382c024c1c66b39d37c18c7e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_837a018942cf5a17dc4ee4b5536c14095a4092d382c024c1c66b39d37c18c7e1->leave($__internal_837a018942cf5a17dc4ee4b5536c14095a4092d382c024c1c66b39d37c18c7e1_prof);

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

{% block title %}Contact{% endblock%}

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

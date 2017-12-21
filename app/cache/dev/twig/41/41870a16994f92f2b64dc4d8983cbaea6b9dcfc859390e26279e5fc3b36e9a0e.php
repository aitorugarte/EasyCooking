<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_edd653923438e67d6eaa61d5840b114fd8b3e8b30fe59da261433bc94772d5be extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbbb38735b292674f62ba8135eee28acdcaafe4b331db05bc2d834702306d91a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbbb38735b292674f62ba8135eee28acdcaafe4b331db05bc2d834702306d91a->enter($__internal_cbbb38735b292674f62ba8135eee28acdcaafe4b331db05bc2d834702306d91a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbbb38735b292674f62ba8135eee28acdcaafe4b331db05bc2d834702306d91a->leave($__internal_cbbb38735b292674f62ba8135eee28acdcaafe4b331db05bc2d834702306d91a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_73575d2c31d38b6e994a65c19107d3ec4c483ffd63e218a6fd0f2d6063826e91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73575d2c31d38b6e994a65c19107d3ec4c483ffd63e218a6fd0f2d6063826e91->enter($__internal_73575d2c31d38b6e994a65c19107d3ec4c483ffd63e218a6fd0f2d6063826e91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_73575d2c31d38b6e994a65c19107d3ec4c483ffd63e218a6fd0f2d6063826e91->leave($__internal_73575d2c31d38b6e994a65c19107d3ec4c483ffd63e218a6fd0f2d6063826e91_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_058e438cbe2bdbf747974aa2bb03f505cda2682d6f275ec8c9947557490083ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_058e438cbe2bdbf747974aa2bb03f505cda2682d6f275ec8c9947557490083ba->enter($__internal_058e438cbe2bdbf747974aa2bb03f505cda2682d6f275ec8c9947557490083ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_058e438cbe2bdbf747974aa2bb03f505cda2682d6f275ec8c9947557490083ba->leave($__internal_058e438cbe2bdbf747974aa2bb03f505cda2682d6f275ec8c9947557490083ba_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_c63d9e9af9b552b3450a46ba17741a288d48d676b8f51736b554e1f2f329c1ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c63d9e9af9b552b3450a46ba17741a288d48d676b8f51736b554e1f2f329c1ef->enter($__internal_c63d9e9af9b552b3450a46ba17741a288d48d676b8f51736b554e1f2f329c1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_c63d9e9af9b552b3450a46ba17741a288d48d676b8f51736b554e1f2f329c1ef->leave($__internal_c63d9e9af9b552b3450a46ba17741a288d48d676b8f51736b554e1f2f329c1ef_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}

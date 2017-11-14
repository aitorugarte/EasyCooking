<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_18d6667e8874c348cd76f6c7d9f2ff0b4daf99d663d4ba13edf04ba359c575bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_a4b60c4c7fbcb87662502f9ff55bda60ec5359e9904031890ccf4267784a5772 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4b60c4c7fbcb87662502f9ff55bda60ec5359e9904031890ccf4267784a5772->enter($__internal_a4b60c4c7fbcb87662502f9ff55bda60ec5359e9904031890ccf4267784a5772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4b60c4c7fbcb87662502f9ff55bda60ec5359e9904031890ccf4267784a5772->leave($__internal_a4b60c4c7fbcb87662502f9ff55bda60ec5359e9904031890ccf4267784a5772_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9f1d0ae4336ef502fc8dca88f14e635e87c9f426d6517668b3400914dd82be86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f1d0ae4336ef502fc8dca88f14e635e87c9f426d6517668b3400914dd82be86->enter($__internal_9f1d0ae4336ef502fc8dca88f14e635e87c9f426d6517668b3400914dd82be86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_9f1d0ae4336ef502fc8dca88f14e635e87c9f426d6517668b3400914dd82be86->leave($__internal_9f1d0ae4336ef502fc8dca88f14e635e87c9f426d6517668b3400914dd82be86_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f40cf0e2759779f8d76f61614c7477a9ef4050fbeb2ada580e22c2f775769ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f40cf0e2759779f8d76f61614c7477a9ef4050fbeb2ada580e22c2f775769ac->enter($__internal_4f40cf0e2759779f8d76f61614c7477a9ef4050fbeb2ada580e22c2f775769ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4f40cf0e2759779f8d76f61614c7477a9ef4050fbeb2ada580e22c2f775769ac->leave($__internal_4f40cf0e2759779f8d76f61614c7477a9ef4050fbeb2ada580e22c2f775769ac_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_db022d9891231e700fb5ce7bdeb10bd3c19a1d8f9fcb416c1c59bb04d3824685 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db022d9891231e700fb5ce7bdeb10bd3c19a1d8f9fcb416c1c59bb04d3824685->enter($__internal_db022d9891231e700fb5ce7bdeb10bd3c19a1d8f9fcb416c1c59bb04d3824685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_db022d9891231e700fb5ce7bdeb10bd3c19a1d8f9fcb416c1c59bb04d3824685->leave($__internal_db022d9891231e700fb5ce7bdeb10bd3c19a1d8f9fcb416c1c59bb04d3824685_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f97c8a1787df839bdffafdd4590367c492bf691f87a5dbc9f4c5c6a8ef593ec9 extends Twig_Template
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
        $__internal_4674efd4bc6aaecc156349f4a548a128a8f6fc60e2bf66f274fe8c3d5baa3329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4674efd4bc6aaecc156349f4a548a128a8f6fc60e2bf66f274fe8c3d5baa3329->enter($__internal_4674efd4bc6aaecc156349f4a548a128a8f6fc60e2bf66f274fe8c3d5baa3329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4674efd4bc6aaecc156349f4a548a128a8f6fc60e2bf66f274fe8c3d5baa3329->leave($__internal_4674efd4bc6aaecc156349f4a548a128a8f6fc60e2bf66f274fe8c3d5baa3329_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0c7479027029d3e081fe0db43b63ccebbb5cae050ed95cc345ca9e04b4761473 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c7479027029d3e081fe0db43b63ccebbb5cae050ed95cc345ca9e04b4761473->enter($__internal_0c7479027029d3e081fe0db43b63ccebbb5cae050ed95cc345ca9e04b4761473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0c7479027029d3e081fe0db43b63ccebbb5cae050ed95cc345ca9e04b4761473->leave($__internal_0c7479027029d3e081fe0db43b63ccebbb5cae050ed95cc345ca9e04b4761473_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8c71b5e083167b0b57b3b699054658b50eb13ec7f57f3eb46f2fe1c48cf29dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c71b5e083167b0b57b3b699054658b50eb13ec7f57f3eb46f2fe1c48cf29dcb->enter($__internal_8c71b5e083167b0b57b3b699054658b50eb13ec7f57f3eb46f2fe1c48cf29dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8c71b5e083167b0b57b3b699054658b50eb13ec7f57f3eb46f2fe1c48cf29dcb->leave($__internal_8c71b5e083167b0b57b3b699054658b50eb13ec7f57f3eb46f2fe1c48cf29dcb_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_103e7514f06c7baf0cfaf2041ce9e9d320e4c26b2201b27c06d66c1a4222b163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103e7514f06c7baf0cfaf2041ce9e9d320e4c26b2201b27c06d66c1a4222b163->enter($__internal_103e7514f06c7baf0cfaf2041ce9e9d320e4c26b2201b27c06d66c1a4222b163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_103e7514f06c7baf0cfaf2041ce9e9d320e4c26b2201b27c06d66c1a4222b163->leave($__internal_103e7514f06c7baf0cfaf2041ce9e9d320e4c26b2201b27c06d66c1a4222b163_prof);

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

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
        $__internal_8207f541d716962457ee08dd5180d071d722a0ae2fc9c4e0a95c24d34e1de8b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8207f541d716962457ee08dd5180d071d722a0ae2fc9c4e0a95c24d34e1de8b9->enter($__internal_8207f541d716962457ee08dd5180d071d722a0ae2fc9c4e0a95c24d34e1de8b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8207f541d716962457ee08dd5180d071d722a0ae2fc9c4e0a95c24d34e1de8b9->leave($__internal_8207f541d716962457ee08dd5180d071d722a0ae2fc9c4e0a95c24d34e1de8b9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_62052f68533859698fc4765d442a470111b0631f29c7fad81d4dcc5ca1e0abed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62052f68533859698fc4765d442a470111b0631f29c7fad81d4dcc5ca1e0abed->enter($__internal_62052f68533859698fc4765d442a470111b0631f29c7fad81d4dcc5ca1e0abed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_62052f68533859698fc4765d442a470111b0631f29c7fad81d4dcc5ca1e0abed->leave($__internal_62052f68533859698fc4765d442a470111b0631f29c7fad81d4dcc5ca1e0abed_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_761c632f5ff632895806e18b2547d708bc9cd540db00ba2bf61e977735a77e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761c632f5ff632895806e18b2547d708bc9cd540db00ba2bf61e977735a77e7a->enter($__internal_761c632f5ff632895806e18b2547d708bc9cd540db00ba2bf61e977735a77e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_761c632f5ff632895806e18b2547d708bc9cd540db00ba2bf61e977735a77e7a->leave($__internal_761c632f5ff632895806e18b2547d708bc9cd540db00ba2bf61e977735a77e7a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f1b4eb40d7be637d5415a95278009776d447f23482ba7436a7c738de176e014c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b4eb40d7be637d5415a95278009776d447f23482ba7436a7c738de176e014c->enter($__internal_f1b4eb40d7be637d5415a95278009776d447f23482ba7436a7c738de176e014c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f1b4eb40d7be637d5415a95278009776d447f23482ba7436a7c738de176e014c->leave($__internal_f1b4eb40d7be637d5415a95278009776d447f23482ba7436a7c738de176e014c_prof);

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

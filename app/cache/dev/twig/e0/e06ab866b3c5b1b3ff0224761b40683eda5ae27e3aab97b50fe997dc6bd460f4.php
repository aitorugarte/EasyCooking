<?php

/* @CookerCooking/Cook/contact.html.twig */
class __TwigTemplate_4bfdccc46de16217454c02f6e4c6e36eba145c28f80b68648a4eb8f6efd7a195 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "@CookerCooking/Cook/contact.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CookerCookingBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85d642fce0cb35ae6ddbfe6086e5ccded275e6a391e253aaa6ad59080af63108 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85d642fce0cb35ae6ddbfe6086e5ccded275e6a391e253aaa6ad59080af63108->enter($__internal_85d642fce0cb35ae6ddbfe6086e5ccded275e6a391e253aaa6ad59080af63108_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85d642fce0cb35ae6ddbfe6086e5ccded275e6a391e253aaa6ad59080af63108->leave($__internal_85d642fce0cb35ae6ddbfe6086e5ccded275e6a391e253aaa6ad59080af63108_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_86e327a9e4c2710b804f7c02c8830a85882339c9ead85eff01b735b94001c282 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86e327a9e4c2710b804f7c02c8830a85882339c9ead85eff01b735b94001c282->enter($__internal_86e327a9e4c2710b804f7c02c8830a85882339c9ead85eff01b735b94001c282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_86e327a9e4c2710b804f7c02c8830a85882339c9ead85eff01b735b94001c282->leave($__internal_86e327a9e4c2710b804f7c02c8830a85882339c9ead85eff01b735b94001c282_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_af1545bcafb84e0c9066025cad24a140aa2d476e0359b16ea786cd284948fe54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af1545bcafb84e0c9066025cad24a140aa2d476e0359b16ea786cd284948fe54->enter($__internal_af1545bcafb84e0c9066025cad24a140aa2d476e0359b16ea786cd284948fe54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_af1545bcafb84e0c9066025cad24a140aa2d476e0359b16ea786cd284948fe54->leave($__internal_af1545bcafb84e0c9066025cad24a140aa2d476e0359b16ea786cd284948fe54_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Cook/contact.html.twig";
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
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Blog/contact.html.twig #}
{% extends 'CookerCookingBundle::layout.html.twig' %}

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
", "@CookerCooking/Cook/contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\contact.html.twig");
    }
}

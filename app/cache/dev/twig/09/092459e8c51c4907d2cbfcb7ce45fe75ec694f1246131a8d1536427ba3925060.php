<?php

/* CookerCookingBundle:Cook:contact.html.twig */
class __TwigTemplate_e874dfa570b88c66912cfe276c7decf6853a84163f4143ba2e935cf275b5398f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::layout.html.twig", "CookerCookingBundle:Cook:contact.html.twig", 2);
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
        $__internal_7256587229231476945e6939ff9e07f2eddb8153d97aada23c6c3fc479f07c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7256587229231476945e6939ff9e07f2eddb8153d97aada23c6c3fc479f07c42->enter($__internal_7256587229231476945e6939ff9e07f2eddb8153d97aada23c6c3fc479f07c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7256587229231476945e6939ff9e07f2eddb8153d97aada23c6c3fc479f07c42->leave($__internal_7256587229231476945e6939ff9e07f2eddb8153d97aada23c6c3fc479f07c42_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_bbc91567b6dcc9ccc34d5b8325a3adb1341b34808249e5adbbe185c704426c8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc91567b6dcc9ccc34d5b8325a3adb1341b34808249e5adbbe185c704426c8e->enter($__internal_bbc91567b6dcc9ccc34d5b8325a3adb1341b34808249e5adbbe185c704426c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_bbc91567b6dcc9ccc34d5b8325a3adb1341b34808249e5adbbe185c704426c8e->leave($__internal_bbc91567b6dcc9ccc34d5b8325a3adb1341b34808249e5adbbe185c704426c8e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9d8e6debc7b13116c45cad3a88e2acbadf7580fb9685b05afd1c7e8c8e29043 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9d8e6debc7b13116c45cad3a88e2acbadf7580fb9685b05afd1c7e8c8e29043->enter($__internal_f9d8e6debc7b13116c45cad3a88e2acbadf7580fb9685b05afd1c7e8c8e29043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f9d8e6debc7b13116c45cad3a88e2acbadf7580fb9685b05afd1c7e8c8e29043->leave($__internal_f9d8e6debc7b13116c45cad3a88e2acbadf7580fb9685b05afd1c7e8c8e29043_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:contact.html.twig";
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
", "CookerCookingBundle:Cook:contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\contact.html.twig");
    }
}

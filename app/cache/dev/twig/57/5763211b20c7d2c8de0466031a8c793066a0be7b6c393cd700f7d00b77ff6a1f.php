<?php

/* CookerCookingBundle:Cook:contact.html.twig */
class __TwigTemplate_20c18613f10023f68ffa221d9ff30782ad8299460dced7466528c3dbf55915a7 extends Twig_Template
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
        $__internal_4eed87f775c8aea81391c33cba753043b9499915c24bde6e5ec37ddf8cadddec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4eed87f775c8aea81391c33cba753043b9499915c24bde6e5ec37ddf8cadddec->enter($__internal_4eed87f775c8aea81391c33cba753043b9499915c24bde6e5ec37ddf8cadddec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4eed87f775c8aea81391c33cba753043b9499915c24bde6e5ec37ddf8cadddec->leave($__internal_4eed87f775c8aea81391c33cba753043b9499915c24bde6e5ec37ddf8cadddec_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_c3ee6adcd3b6fae668844b9ea4eac93a4af516beceb80edfe4acfc4d8f2069a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3ee6adcd3b6fae668844b9ea4eac93a4af516beceb80edfe4acfc4d8f2069a7->enter($__internal_c3ee6adcd3b6fae668844b9ea4eac93a4af516beceb80edfe4acfc4d8f2069a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_c3ee6adcd3b6fae668844b9ea4eac93a4af516beceb80edfe4acfc4d8f2069a7->leave($__internal_c3ee6adcd3b6fae668844b9ea4eac93a4af516beceb80edfe4acfc4d8f2069a7_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b2925492ed18f3872930c893001ddb0a14beb869359118cf3f609ee910e3f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b2925492ed18f3872930c893001ddb0a14beb869359118cf3f609ee910e3f19->enter($__internal_8b2925492ed18f3872930c893001ddb0a14beb869359118cf3f609ee910e3f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_8b2925492ed18f3872930c893001ddb0a14beb869359118cf3f609ee910e3f19->leave($__internal_8b2925492ed18f3872930c893001ddb0a14beb869359118cf3f609ee910e3f19_prof);

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
", "CookerCookingBundle:Cook:contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/contact.html.twig");
    }
}

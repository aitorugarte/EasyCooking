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
        $__internal_4e51796f0ec124e9f70bcaa8c124a64ee8c1d7ffa97e771e345b841aa2e9553d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e51796f0ec124e9f70bcaa8c124a64ee8c1d7ffa97e771e345b841aa2e9553d->enter($__internal_4e51796f0ec124e9f70bcaa8c124a64ee8c1d7ffa97e771e345b841aa2e9553d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e51796f0ec124e9f70bcaa8c124a64ee8c1d7ffa97e771e345b841aa2e9553d->leave($__internal_4e51796f0ec124e9f70bcaa8c124a64ee8c1d7ffa97e771e345b841aa2e9553d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_53daa7d443f060ef0af5232317e9abe21aa793ad74e5c512d476eb794748265a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53daa7d443f060ef0af5232317e9abe21aa793ad74e5c512d476eb794748265a->enter($__internal_53daa7d443f060ef0af5232317e9abe21aa793ad74e5c512d476eb794748265a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_53daa7d443f060ef0af5232317e9abe21aa793ad74e5c512d476eb794748265a->leave($__internal_53daa7d443f060ef0af5232317e9abe21aa793ad74e5c512d476eb794748265a_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b5a2554ee1bfb3326e1e2a91ac54f395ce1fc768766f7867736163c51379f1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5a2554ee1bfb3326e1e2a91ac54f395ce1fc768766f7867736163c51379f1a5->enter($__internal_b5a2554ee1bfb3326e1e2a91ac54f395ce1fc768766f7867736163c51379f1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b5a2554ee1bfb3326e1e2a91ac54f395ce1fc768766f7867736163c51379f1a5->leave($__internal_b5a2554ee1bfb3326e1e2a91ac54f395ce1fc768766f7867736163c51379f1a5_prof);

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

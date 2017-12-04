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
        $__internal_3e66e05ffded75e1f05aa567e953a37c5ea526a71b017569873f776b92af3a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e66e05ffded75e1f05aa567e953a37c5ea526a71b017569873f776b92af3a4d->enter($__internal_3e66e05ffded75e1f05aa567e953a37c5ea526a71b017569873f776b92af3a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e66e05ffded75e1f05aa567e953a37c5ea526a71b017569873f776b92af3a4d->leave($__internal_3e66e05ffded75e1f05aa567e953a37c5ea526a71b017569873f776b92af3a4d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_32ed5c6d464dcaa426e66ab04f27523c8510073de183b066b4e1fb1533b39d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32ed5c6d464dcaa426e66ab04f27523c8510073de183b066b4e1fb1533b39d2f->enter($__internal_32ed5c6d464dcaa426e66ab04f27523c8510073de183b066b4e1fb1533b39d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_32ed5c6d464dcaa426e66ab04f27523c8510073de183b066b4e1fb1533b39d2f->leave($__internal_32ed5c6d464dcaa426e66ab04f27523c8510073de183b066b4e1fb1533b39d2f_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_f5a23a374008ceccc9e38cd72d3c36a65c0bcc1daf45aa8fba00c26f46d59b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5a23a374008ceccc9e38cd72d3c36a65c0bcc1daf45aa8fba00c26f46d59b8f->enter($__internal_f5a23a374008ceccc9e38cd72d3c36a65c0bcc1daf45aa8fba00c26f46d59b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contacta conmigo</h1>
    </header>

<form action=\"mailto:aitorugarte@opendeusto.es\" method=\"post\">
  <fieldset>
    <h4>Nombre</h4>
    <input type=\"text\" name=\"nombre\">
    
   <h4>Correo</h4>
    <input type=\"text\" name=\"correo\">
  
    <h4>Mensaje</h4>
    <input type=\"text\" name=\"mensaje\" size=\"50\" style=\"height:50px\">
  </fieldset>

     <div class=\"button\">
        <button type=\"submit\" value=\"Send\">Enviar</button>
    </div>
   
</form>
";
        
        $__internal_f5a23a374008ceccc9e38cd72d3c36a65c0bcc1daf45aa8fba00c26f46d59b8f->leave($__internal_f5a23a374008ceccc9e38cd72d3c36a65c0bcc1daf45aa8fba00c26f46d59b8f_prof);

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

<form action=\"mailto:aitorugarte@opendeusto.es\" method=\"post\">
  <fieldset>
    <h4>Nombre</h4>
    <input type=\"text\" name=\"nombre\">
    
   <h4>Correo</h4>
    <input type=\"text\" name=\"correo\">
  
    <h4>Mensaje</h4>
    <input type=\"text\" name=\"mensaje\" size=\"50\" style=\"height:50px\">
  </fieldset>

     <div class=\"button\">
        <button type=\"submit\" value=\"Send\">Enviar</button>
    </div>
   
</form>
{% endblock %}
", "CookerCookingBundle:Cook:contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/contact.html.twig");
    }
}

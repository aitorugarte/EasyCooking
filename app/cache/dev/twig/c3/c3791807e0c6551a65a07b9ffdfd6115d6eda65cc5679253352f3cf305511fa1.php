<?php

/* CookerCookingBundle:Cook:contact.html.twig */
class __TwigTemplate_80339b1f6fbdb67d2872c9065d5518b8effff12df24fd3013a54e446fdc6cf72 extends Twig_Template
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
        $__internal_edba2577204c21dd248f022283ba611342d1f01072be3ef9fc6c1175653ed8d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edba2577204c21dd248f022283ba611342d1f01072be3ef9fc6c1175653ed8d9->enter($__internal_edba2577204c21dd248f022283ba611342d1f01072be3ef9fc6c1175653ed8d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edba2577204c21dd248f022283ba611342d1f01072be3ef9fc6c1175653ed8d9->leave($__internal_edba2577204c21dd248f022283ba611342d1f01072be3ef9fc6c1175653ed8d9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_fe610ad44353a279a462a5f447bd19750c59f966045773c2e9f45d1f4f55ab35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe610ad44353a279a462a5f447bd19750c59f966045773c2e9f45d1f4f55ab35->enter($__internal_fe610ad44353a279a462a5f447bd19750c59f966045773c2e9f45d1f4f55ab35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_fe610ad44353a279a462a5f447bd19750c59f966045773c2e9f45d1f4f55ab35->leave($__internal_fe610ad44353a279a462a5f447bd19750c59f966045773c2e9f45d1f4f55ab35_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_c436cc5ef5743ab6a2b6d23a6136fea88362f880fad540d9e504cf6a99b24d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c436cc5ef5743ab6a2b6d23a6136fea88362f880fad540d9e504cf6a99b24d44->enter($__internal_c436cc5ef5743ab6a2b6d23a6136fea88362f880fad540d9e504cf6a99b24d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c436cc5ef5743ab6a2b6d23a6136fea88362f880fad540d9e504cf6a99b24d44->leave($__internal_c436cc5ef5743ab6a2b6d23a6136fea88362f880fad540d9e504cf6a99b24d44_prof);

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

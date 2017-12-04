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
        $__internal_36f3330c503bf7ed07fb70aeecf29795384538b130e2ab9e2f96e37f7fcd9581 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36f3330c503bf7ed07fb70aeecf29795384538b130e2ab9e2f96e37f7fcd9581->enter($__internal_36f3330c503bf7ed07fb70aeecf29795384538b130e2ab9e2f96e37f7fcd9581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36f3330c503bf7ed07fb70aeecf29795384538b130e2ab9e2f96e37f7fcd9581->leave($__internal_36f3330c503bf7ed07fb70aeecf29795384538b130e2ab9e2f96e37f7fcd9581_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd0bce4973c52cf5147885191bd49df392b12c0d8585262ca339833d5c3a93dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd0bce4973c52cf5147885191bd49df392b12c0d8585262ca339833d5c3a93dd->enter($__internal_cd0bce4973c52cf5147885191bd49df392b12c0d8585262ca339833d5c3a93dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_cd0bce4973c52cf5147885191bd49df392b12c0d8585262ca339833d5c3a93dd->leave($__internal_cd0bce4973c52cf5147885191bd49df392b12c0d8585262ca339833d5c3a93dd_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ed4b33d24390a171773e877af01322e9fe6d9860471639ede00e6e68aa2be04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ed4b33d24390a171773e877af01322e9fe6d9860471639ede00e6e68aa2be04->enter($__internal_0ed4b33d24390a171773e877af01322e9fe6d9860471639ede00e6e68aa2be04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0ed4b33d24390a171773e877af01322e9fe6d9860471639ede00e6e68aa2be04->leave($__internal_0ed4b33d24390a171773e877af01322e9fe6d9860471639ede00e6e68aa2be04_prof);

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
", "CookerCookingBundle:Cook:contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\contact.html.twig");
    }
}

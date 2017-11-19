<?php

/* CookerCookingBundle:Cook:contact.html.twig */
class __TwigTemplate_b6e9d0bc5b0e824443f80f92d94d6adc7272b044d81f7d6b48cbc198092d6cc9 extends Twig_Template
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
        $__internal_33719243e5130a3af6fbcf76b559be58612dde65e569701c7fabe626afdc13de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33719243e5130a3af6fbcf76b559be58612dde65e569701c7fabe626afdc13de->enter($__internal_33719243e5130a3af6fbcf76b559be58612dde65e569701c7fabe626afdc13de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33719243e5130a3af6fbcf76b559be58612dde65e569701c7fabe626afdc13de->leave($__internal_33719243e5130a3af6fbcf76b559be58612dde65e569701c7fabe626afdc13de_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_07755ae2febe7f9e7de4d36ff98170280344a5c5177f5ebd5858d9257ab41a37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07755ae2febe7f9e7de4d36ff98170280344a5c5177f5ebd5858d9257ab41a37->enter($__internal_07755ae2febe7f9e7de4d36ff98170280344a5c5177f5ebd5858d9257ab41a37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_07755ae2febe7f9e7de4d36ff98170280344a5c5177f5ebd5858d9257ab41a37->leave($__internal_07755ae2febe7f9e7de4d36ff98170280344a5c5177f5ebd5858d9257ab41a37_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fbe4be12f034b959bccb7e0069ae6512fa3eb476528c1fd5d1938644bb176d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fbe4be12f034b959bccb7e0069ae6512fa3eb476528c1fd5d1938644bb176d4->enter($__internal_7fbe4be12f034b959bccb7e0069ae6512fa3eb476528c1fd5d1938644bb176d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contacta conmigo</h1>
    </header>

<form action=\"maneja_formulario.php\" method=\"post\">
  <fieldset>
    <h4>Nombre</h4>
    <input type=\"text\" name=\"nombre\">
    
   <h4>Correo</h4>
    <input type=\"text\" name=\"correo\" size=\"10\" maxlength=\"9\">
  
    <h4>Mensaje</h4>
    <input type=\"text\" name=\"mensaje\" size=\"50\" style=\"height:50px\">
  </fieldset>

     <div class=\"button\">
        <button type=\"submit\">Enviar</button>
    </div>
   
</form>
";
        
        $__internal_7fbe4be12f034b959bccb7e0069ae6512fa3eb476528c1fd5d1938644bb176d4->leave($__internal_7fbe4be12f034b959bccb7e0069ae6512fa3eb476528c1fd5d1938644bb176d4_prof);

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

<form action=\"maneja_formulario.php\" method=\"post\">
  <fieldset>
    <h4>Nombre</h4>
    <input type=\"text\" name=\"nombre\">
    
   <h4>Correo</h4>
    <input type=\"text\" name=\"correo\" size=\"10\" maxlength=\"9\">
  
    <h4>Mensaje</h4>
    <input type=\"text\" name=\"mensaje\" size=\"50\" style=\"height:50px\">
  </fieldset>

     <div class=\"button\">
        <button type=\"submit\">Enviar</button>
    </div>
   
</form>
{% endblock %}
", "CookerCookingBundle:Cook:contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle/Resources/views/Cook/contact.html.twig");
    }
}

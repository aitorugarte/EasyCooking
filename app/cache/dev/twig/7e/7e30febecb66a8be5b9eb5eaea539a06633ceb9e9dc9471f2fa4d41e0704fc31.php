<?php

/* CookerCookingBundle:Cook:contact.html.twig */
class __TwigTemplate_4b7fcb6f72f014c94543894d815aa8896ac84db765b59603d9e0bc26a41747b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::sidebar.html.twig", "CookerCookingBundle:Cook:contact.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CookerCookingBundle::sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89c85e20e8900b113e50c8dcdb3c6e4766a4e4e18fdeca6149cf8c0f84eb2c67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c85e20e8900b113e50c8dcdb3c6e4766a4e4e18fdeca6149cf8c0f84eb2c67->enter($__internal_89c85e20e8900b113e50c8dcdb3c6e4766a4e4e18fdeca6149cf8c0f84eb2c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89c85e20e8900b113e50c8dcdb3c6e4766a4e4e18fdeca6149cf8c0f84eb2c67->leave($__internal_89c85e20e8900b113e50c8dcdb3c6e4766a4e4e18fdeca6149cf8c0f84eb2c67_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_57a92b76284a14c1eb7f64dce6f6f02bbe653e64e2a0a0038073704b889dbc6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57a92b76284a14c1eb7f64dce6f6f02bbe653e64e2a0a0038073704b889dbc6a->enter($__internal_57a92b76284a14c1eb7f64dce6f6f02bbe653e64e2a0a0038073704b889dbc6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_57a92b76284a14c1eb7f64dce6f6f02bbe653e64e2a0a0038073704b889dbc6a->leave($__internal_57a92b76284a14c1eb7f64dce6f6f02bbe653e64e2a0a0038073704b889dbc6a_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b735d0b6ce06d463d2bdc17d327882b5a3eedc979a6ff8b085439ace51d73be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b735d0b6ce06d463d2bdc17d327882b5a3eedc979a6ff8b085439ace51d73be3->enter($__internal_b735d0b6ce06d463d2bdc17d327882b5a3eedc979a6ff8b085439ace51d73be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contacta conmigo</h1>
    </header>

<form action=\"mailto:aitorugarte@opendeusto.es\" method=\"post\" enctype=\"text/plain\">
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
        
        $__internal_b735d0b6ce06d463d2bdc17d327882b5a3eedc979a6ff8b085439ace51d73be3->leave($__internal_b735d0b6ce06d463d2bdc17d327882b5a3eedc979a6ff8b085439ace51d73be3_prof);

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
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/contact.html.twig #}
{% extends 'CookerCookingBundle::sidebar.html.twig' %}

{% block title %}Contacto{% endblock%}

{% block body %}
    <header>
        <h1>Contacta conmigo</h1>
    </header>

<form action=\"mailto:aitorugarte@opendeusto.es\" method=\"post\" enctype=\"text/plain\">
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

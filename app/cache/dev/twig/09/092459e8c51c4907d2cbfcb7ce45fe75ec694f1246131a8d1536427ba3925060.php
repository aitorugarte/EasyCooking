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
        $__internal_2b64c287435bc026541f737853c19ff82399c4d7895346db9ceeb16723a1e1e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b64c287435bc026541f737853c19ff82399c4d7895346db9ceeb16723a1e1e9->enter($__internal_2b64c287435bc026541f737853c19ff82399c4d7895346db9ceeb16723a1e1e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b64c287435bc026541f737853c19ff82399c4d7895346db9ceeb16723a1e1e9->leave($__internal_2b64c287435bc026541f737853c19ff82399c4d7895346db9ceeb16723a1e1e9_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d32b7eae870388bcd9785e1452a19924d9d82239b8dbe435a3f686c180e8e9e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d32b7eae870388bcd9785e1452a19924d9d82239b8dbe435a3f686c180e8e9e9->enter($__internal_d32b7eae870388bcd9785e1452a19924d9d82239b8dbe435a3f686c180e8e9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_d32b7eae870388bcd9785e1452a19924d9d82239b8dbe435a3f686c180e8e9e9->leave($__internal_d32b7eae870388bcd9785e1452a19924d9d82239b8dbe435a3f686c180e8e9e9_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_fafb79b2774bd3cd400ce20db0b7faf758ceedaca40f0982930c85eeb47d6a38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fafb79b2774bd3cd400ce20db0b7faf758ceedaca40f0982930c85eeb47d6a38->enter($__internal_fafb79b2774bd3cd400ce20db0b7faf758ceedaca40f0982930c85eeb47d6a38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>Contacta conmigo</h1>
    </header>

<form action=\"\" method=\"post\">
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
        
        $__internal_fafb79b2774bd3cd400ce20db0b7faf758ceedaca40f0982930c85eeb47d6a38->leave($__internal_fafb79b2774bd3cd400ce20db0b7faf758ceedaca40f0982930c85eeb47d6a38_prof);

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

<form action=\"\" method=\"post\">
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
", "CookerCookingBundle:Cook:contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\contact.html.twig");
    }
}

<?php

/* CookerCookingBundle:Cook:contact.html.twig */
class __TwigTemplate_4b7fcb6f72f014c94543894d815aa8896ac84db765b59603d9e0bc26a41747b2 extends Twig_Template
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
        $__internal_69afba61a10c52b486de4061a20467b91369b8eaa420647aadf7b70044ee2eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69afba61a10c52b486de4061a20467b91369b8eaa420647aadf7b70044ee2eb5->enter($__internal_69afba61a10c52b486de4061a20467b91369b8eaa420647aadf7b70044ee2eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69afba61a10c52b486de4061a20467b91369b8eaa420647aadf7b70044ee2eb5->leave($__internal_69afba61a10c52b486de4061a20467b91369b8eaa420647aadf7b70044ee2eb5_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ffc7e4a3ae84368fbcf72ecf7a64fd53ff4c3359d7e30d0ae5a445370d41c81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ffc7e4a3ae84368fbcf72ecf7a64fd53ff4c3359d7e30d0ae5a445370d41c81->enter($__internal_7ffc7e4a3ae84368fbcf72ecf7a64fd53ff4c3359d7e30d0ae5a445370d41c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_7ffc7e4a3ae84368fbcf72ecf7a64fd53ff4c3359d7e30d0ae5a445370d41c81->leave($__internal_7ffc7e4a3ae84368fbcf72ecf7a64fd53ff4c3359d7e30d0ae5a445370d41c81_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_91b72950e43e74116f4a20cca417f3ef1a94d987be9fdc746e93a3374f8850b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91b72950e43e74116f4a20cca417f3ef1a94d987be9fdc746e93a3374f8850b1->enter($__internal_91b72950e43e74116f4a20cca417f3ef1a94d987be9fdc746e93a3374f8850b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_91b72950e43e74116f4a20cca417f3ef1a94d987be9fdc746e93a3374f8850b1->leave($__internal_91b72950e43e74116f4a20cca417f3ef1a94d987be9fdc746e93a3374f8850b1_prof);

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

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
        $__internal_49432346b22a896afc945d1b2a29920437805ebceb7fdb47bb3748d860361a4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49432346b22a896afc945d1b2a29920437805ebceb7fdb47bb3748d860361a4d->enter($__internal_49432346b22a896afc945d1b2a29920437805ebceb7fdb47bb3748d860361a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49432346b22a896afc945d1b2a29920437805ebceb7fdb47bb3748d860361a4d->leave($__internal_49432346b22a896afc945d1b2a29920437805ebceb7fdb47bb3748d860361a4d_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_d950570e397f9ae78d2f6e29db1c7c106d1131474c2609ea89a239f8db654d88 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d950570e397f9ae78d2f6e29db1c7c106d1131474c2609ea89a239f8db654d88->enter($__internal_d950570e397f9ae78d2f6e29db1c7c106d1131474c2609ea89a239f8db654d88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_d950570e397f9ae78d2f6e29db1c7c106d1131474c2609ea89a239f8db654d88->leave($__internal_d950570e397f9ae78d2f6e29db1c7c106d1131474c2609ea89a239f8db654d88_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_92249b67785da3e8f95e33b07afba4924a8554d62e2437a14ff5da2850a8b09e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92249b67785da3e8f95e33b07afba4924a8554d62e2437a14ff5da2850a8b09e->enter($__internal_92249b67785da3e8f95e33b07afba4924a8554d62e2437a14ff5da2850a8b09e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_92249b67785da3e8f95e33b07afba4924a8554d62e2437a14ff5da2850a8b09e->leave($__internal_92249b67785da3e8f95e33b07afba4924a8554d62e2437a14ff5da2850a8b09e_prof);

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

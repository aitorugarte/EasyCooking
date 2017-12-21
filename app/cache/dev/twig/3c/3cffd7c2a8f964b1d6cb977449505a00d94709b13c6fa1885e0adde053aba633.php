<?php

/* @CookerCooking/Cook/contact.html.twig */
class __TwigTemplate_937b184a43efe8ccb3dd11f3be290970fd147ef81dcf15e3cd861664b2cfeb4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::sidebar.html.twig", "@CookerCooking/Cook/contact.html.twig", 2);
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
        $__internal_31ee04eab9fa021e83e12aa5b9da65bfefd2301885f0f83d4e1cfb2da5b0b297 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31ee04eab9fa021e83e12aa5b9da65bfefd2301885f0f83d4e1cfb2da5b0b297->enter($__internal_31ee04eab9fa021e83e12aa5b9da65bfefd2301885f0f83d4e1cfb2da5b0b297_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Cook/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31ee04eab9fa021e83e12aa5b9da65bfefd2301885f0f83d4e1cfb2da5b0b297->leave($__internal_31ee04eab9fa021e83e12aa5b9da65bfefd2301885f0f83d4e1cfb2da5b0b297_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_387c1caf2f3541b0e09b134ae77045a0982e037bcd933da66a9330f50cf5e4eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_387c1caf2f3541b0e09b134ae77045a0982e037bcd933da66a9330f50cf5e4eb->enter($__internal_387c1caf2f3541b0e09b134ae77045a0982e037bcd933da66a9330f50cf5e4eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Contacto", array(), "messages");
        
        $__internal_387c1caf2f3541b0e09b134ae77045a0982e037bcd933da66a9330f50cf5e4eb->leave($__internal_387c1caf2f3541b0e09b134ae77045a0982e037bcd933da66a9330f50cf5e4eb_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_a07e804e2cee372b3e14669cf844e1f6506c64af6b8c3111a815454390471a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a07e804e2cee372b3e14669cf844e1f6506c64af6b8c3111a815454390471a77->enter($__internal_a07e804e2cee372b3e14669cf844e1f6506c64af6b8c3111a815454390471a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <header>
        <h1>";
        // line 8
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Contacta conmigo", array(), "messages");
        echo "</h1>
    </header>

<form action=\"mailto:aitorugarte@opendeusto.es\" method=\"post\" enctype=\"text/plain\">
  <fieldset>
    <h4>";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Nombre", array(), "messages");
        echo "</h4>
    <input type=\"text\" name=\"nombre\">
    
   <h4>";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Correo", array(), "messages");
        echo "</h4>
    <input type=\"text\" name=\"correo\">
  
    <h4>";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Mensaje", array(), "messages");
        echo "</h4>
    <input type=\"text\" name=\"mensaje\" size=\"50\" style=\"height:50px\">
  </fieldset>

     <div class=\"button\">
        <button type=\"submit\" value=\"Send\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Enviar", array(), "messages");
        echo "</button>
    </div>
   
</form>
";
        
        $__internal_a07e804e2cee372b3e14669cf844e1f6506c64af6b8c3111a815454390471a77->leave($__internal_a07e804e2cee372b3e14669cf844e1f6506c64af6b8c3111a815454390471a77_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Cook/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  76 => 19,  70 => 16,  64 => 13,  56 => 8,  53 => 7,  47 => 6,  35 => 4,  11 => 2,);
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

{% block title %}{% trans %}Contacto{% endtrans %}{% endblock%}

{% block body %}
    <header>
        <h1>{% trans %}Contacta conmigo{% endtrans %}</h1>
    </header>

<form action=\"mailto:aitorugarte@opendeusto.es\" method=\"post\" enctype=\"text/plain\">
  <fieldset>
    <h4>{% trans %}Nombre{% endtrans %}</h4>
    <input type=\"text\" name=\"nombre\">
    
   <h4>{% trans %}Correo{% endtrans %}</h4>
    <input type=\"text\" name=\"correo\">
  
    <h4>{% trans %}Mensaje{% endtrans %}</h4>
    <input type=\"text\" name=\"mensaje\" size=\"50\" style=\"height:50px\">
  </fieldset>

     <div class=\"button\">
        <button type=\"submit\" value=\"Send\">{% trans %}Enviar{% endtrans %}</button>
    </div>
   
</form>
{% endblock %}
", "@CookerCooking/Cook/contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\contact.html.twig");
    }
}

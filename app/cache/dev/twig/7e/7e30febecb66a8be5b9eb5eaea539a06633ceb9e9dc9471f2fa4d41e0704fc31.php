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
        $__internal_b180fca4df7208727c400c1e15c332f89d2e6645d401f640d87534c01e0804af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b180fca4df7208727c400c1e15c332f89d2e6645d401f640d87534c01e0804af->enter($__internal_b180fca4df7208727c400c1e15c332f89d2e6645d401f640d87534c01e0804af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b180fca4df7208727c400c1e15c332f89d2e6645d401f640d87534c01e0804af->leave($__internal_b180fca4df7208727c400c1e15c332f89d2e6645d401f640d87534c01e0804af_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_2377f2f1708dd686fe26099f2d2b2cb31a23d6ed3835545a65de04592f8d3b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2377f2f1708dd686fe26099f2d2b2cb31a23d6ed3835545a65de04592f8d3b11->enter($__internal_2377f2f1708dd686fe26099f2d2b2cb31a23d6ed3835545a65de04592f8d3b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Contacto", array(), "messages");
        
        $__internal_2377f2f1708dd686fe26099f2d2b2cb31a23d6ed3835545a65de04592f8d3b11->leave($__internal_2377f2f1708dd686fe26099f2d2b2cb31a23d6ed3835545a65de04592f8d3b11_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_50e90614d59fc5a4eb26c476c98f3a2d724b6ad6825e05d31addddc585e00429 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50e90614d59fc5a4eb26c476c98f3a2d724b6ad6825e05d31addddc585e00429->enter($__internal_50e90614d59fc5a4eb26c476c98f3a2d724b6ad6825e05d31addddc585e00429_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_50e90614d59fc5a4eb26c476c98f3a2d724b6ad6825e05d31addddc585e00429->leave($__internal_50e90614d59fc5a4eb26c476c98f3a2d724b6ad6825e05d31addddc585e00429_prof);

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
", "CookerCookingBundle:Cook:contact.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\contact.html.twig");
    }
}

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
        $__internal_7b3e0fcad27c735d27cc4723a0114369786f4a58630c801a956bdf6b49a7311e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b3e0fcad27c735d27cc4723a0114369786f4a58630c801a956bdf6b49a7311e->enter($__internal_7b3e0fcad27c735d27cc4723a0114369786f4a58630c801a956bdf6b49a7311e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b3e0fcad27c735d27cc4723a0114369786f4a58630c801a956bdf6b49a7311e->leave($__internal_7b3e0fcad27c735d27cc4723a0114369786f4a58630c801a956bdf6b49a7311e_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_ba6bb7501231a52d0a73bd3b2295bab0c5d20fd204d9b52feb583ae99b5ede3a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba6bb7501231a52d0a73bd3b2295bab0c5d20fd204d9b52feb583ae99b5ede3a->enter($__internal_ba6bb7501231a52d0a73bd3b2295bab0c5d20fd204d9b52feb583ae99b5ede3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Contacto";
        
        $__internal_ba6bb7501231a52d0a73bd3b2295bab0c5d20fd204d9b52feb583ae99b5ede3a->leave($__internal_ba6bb7501231a52d0a73bd3b2295bab0c5d20fd204d9b52feb583ae99b5ede3a_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_70247434f8bcfc2a68354f59e0c401aa58587e32d2609e6a73a8cf52f45ff614 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70247434f8bcfc2a68354f59e0c401aa58587e32d2609e6a73a8cf52f45ff614->enter($__internal_70247434f8bcfc2a68354f59e0c401aa58587e32d2609e6a73a8cf52f45ff614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_70247434f8bcfc2a68354f59e0c401aa58587e32d2609e6a73a8cf52f45ff614->leave($__internal_70247434f8bcfc2a68354f59e0c401aa58587e32d2609e6a73a8cf52f45ff614_prof);

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

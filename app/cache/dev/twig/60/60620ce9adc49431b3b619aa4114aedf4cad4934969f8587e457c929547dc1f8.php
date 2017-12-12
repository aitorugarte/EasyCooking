<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_aed170cb720940774f89cdaa5bc1c8a29ac22266d3e3cba689d8c2037089f1c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4dad3dc333f7a277a8e82ddbeaa7954ae362c1c7c702d112fda01119dc235a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dad3dc333f7a277a8e82ddbeaa7954ae362c1c7c702d112fda01119dc235a29->enter($__internal_4dad3dc333f7a277a8e82ddbeaa7954ae362c1c7c702d112fda01119dc235a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dad3dc333f7a277a8e82ddbeaa7954ae362c1c7c702d112fda01119dc235a29->leave($__internal_4dad3dc333f7a277a8e82ddbeaa7954ae362c1c7c702d112fda01119dc235a29_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_74206d2d5be2f06f371cf693e8659b1b7cd82948f55eda6420a4e4889c32aab1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74206d2d5be2f06f371cf693e8659b1b7cd82948f55eda6420a4e4889c32aab1->enter($__internal_74206d2d5be2f06f371cf693e8659b1b7cd82948f55eda6420a4e4889c32aab1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_74206d2d5be2f06f371cf693e8659b1b7cd82948f55eda6420a4e4889c32aab1->leave($__internal_74206d2d5be2f06f371cf693e8659b1b7cd82948f55eda6420a4e4889c32aab1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f4b4dbe975055e2e8c4b42261761edb1a814ce363e552bf338004986c8128141 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b4dbe975055e2e8c4b42261761edb1a814ce363e552bf338004986c8128141->enter($__internal_f4b4dbe975055e2e8c4b42261761edb1a814ce363e552bf338004986c8128141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f4b4dbe975055e2e8c4b42261761edb1a814ce363e552bf338004986c8128141->leave($__internal_f4b4dbe975055e2e8c4b42261761edb1a814ce363e552bf338004986c8128141_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_20ab0a9005335529933b9ce802fb96b17b8fadb89144102daf682f086ed3361c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ab0a9005335529933b9ce802fb96b17b8fadb89144102daf682f086ed3361c->enter($__internal_20ab0a9005335529933b9ce802fb96b17b8fadb89144102daf682f086ed3361c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_20ab0a9005335529933b9ce802fb96b17b8fadb89144102daf682f086ed3361c->leave($__internal_20ab0a9005335529933b9ce802fb96b17b8fadb89144102daf682f086ed3361c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}

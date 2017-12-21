<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b6131bd90daccf5af172ed490836fefa13892b9078781615be9d963a3411b4b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_892e359c0f8bd85cf803b28cd33782b5d66a50c06782f43282b7303070c8ab10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_892e359c0f8bd85cf803b28cd33782b5d66a50c06782f43282b7303070c8ab10->enter($__internal_892e359c0f8bd85cf803b28cd33782b5d66a50c06782f43282b7303070c8ab10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_892e359c0f8bd85cf803b28cd33782b5d66a50c06782f43282b7303070c8ab10->leave($__internal_892e359c0f8bd85cf803b28cd33782b5d66a50c06782f43282b7303070c8ab10_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_08421e65244766b70106c6d00fe3d522811c90695163bb8e820aeaf39dac27fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08421e65244766b70106c6d00fe3d522811c90695163bb8e820aeaf39dac27fc->enter($__internal_08421e65244766b70106c6d00fe3d522811c90695163bb8e820aeaf39dac27fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_08421e65244766b70106c6d00fe3d522811c90695163bb8e820aeaf39dac27fc->leave($__internal_08421e65244766b70106c6d00fe3d522811c90695163bb8e820aeaf39dac27fc_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fc2cf6a9584ae0b99dd17ddbf1040fcfee4ecfafbc1464234f694570720f23f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc2cf6a9584ae0b99dd17ddbf1040fcfee4ecfafbc1464234f694570720f23f8->enter($__internal_fc2cf6a9584ae0b99dd17ddbf1040fcfee4ecfafbc1464234f694570720f23f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fc2cf6a9584ae0b99dd17ddbf1040fcfee4ecfafbc1464234f694570720f23f8->leave($__internal_fc2cf6a9584ae0b99dd17ddbf1040fcfee4ecfafbc1464234f694570720f23f8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_165653d9bd6b64a39906dcd47778ff846a6f8a9d07d1e3a23e6166de2292516a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_165653d9bd6b64a39906dcd47778ff846a6f8a9d07d1e3a23e6166de2292516a->enter($__internal_165653d9bd6b64a39906dcd47778ff846a6f8a9d07d1e3a23e6166de2292516a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_165653d9bd6b64a39906dcd47778ff846a6f8a9d07d1e3a23e6166de2292516a->leave($__internal_165653d9bd6b64a39906dcd47778ff846a6f8a9d07d1e3a23e6166de2292516a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
", "WebProfilerBundle:Collector:router.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

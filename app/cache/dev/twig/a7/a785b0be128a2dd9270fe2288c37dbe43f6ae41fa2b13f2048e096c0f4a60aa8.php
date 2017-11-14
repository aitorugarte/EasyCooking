<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_e4d70fa4b26812d0270b58d85759914e4f58f09509c07ef3d8768d1fff4610e8 extends Twig_Template
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
        $__internal_a4ae81da81dc75071068d1310e5581e711b11847fcc8367ce25a65d07f5474fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4ae81da81dc75071068d1310e5581e711b11847fcc8367ce25a65d07f5474fd->enter($__internal_a4ae81da81dc75071068d1310e5581e711b11847fcc8367ce25a65d07f5474fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4ae81da81dc75071068d1310e5581e711b11847fcc8367ce25a65d07f5474fd->leave($__internal_a4ae81da81dc75071068d1310e5581e711b11847fcc8367ce25a65d07f5474fd_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_6469511b48254186a8715b6696ddba3b9d79249d2a7c19fba73e5e2e5df5f17c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6469511b48254186a8715b6696ddba3b9d79249d2a7c19fba73e5e2e5df5f17c->enter($__internal_6469511b48254186a8715b6696ddba3b9d79249d2a7c19fba73e5e2e5df5f17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_6469511b48254186a8715b6696ddba3b9d79249d2a7c19fba73e5e2e5df5f17c->leave($__internal_6469511b48254186a8715b6696ddba3b9d79249d2a7c19fba73e5e2e5df5f17c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3c9e02f5f7793b36653a1814247e547c42dc6b721ac4e6edb9b572f473e7e466 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c9e02f5f7793b36653a1814247e547c42dc6b721ac4e6edb9b572f473e7e466->enter($__internal_3c9e02f5f7793b36653a1814247e547c42dc6b721ac4e6edb9b572f473e7e466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3c9e02f5f7793b36653a1814247e547c42dc6b721ac4e6edb9b572f473e7e466->leave($__internal_3c9e02f5f7793b36653a1814247e547c42dc6b721ac4e6edb9b572f473e7e466_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_257a78ca6cf8fe3d2a37e91ea053abfc7c3ae474c1dfdca2394f6ad2290efdcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257a78ca6cf8fe3d2a37e91ea053abfc7c3ae474c1dfdca2394f6ad2290efdcc->enter($__internal_257a78ca6cf8fe3d2a37e91ea053abfc7c3ae474c1dfdca2394f6ad2290efdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_257a78ca6cf8fe3d2a37e91ea053abfc7c3ae474c1dfdca2394f6ad2290efdcc->leave($__internal_257a78ca6cf8fe3d2a37e91ea053abfc7c3ae474c1dfdca2394f6ad2290efdcc_prof);

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

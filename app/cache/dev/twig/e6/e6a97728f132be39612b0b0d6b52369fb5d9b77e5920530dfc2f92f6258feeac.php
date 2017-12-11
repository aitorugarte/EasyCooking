<?php

/* @SensioDistribution/Configurator/form.html.twig */
class __TwigTemplate_f82fc607247d097c107e9b400513053a1223c4cb55436ab0ef0d5f9e882032f3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "@SensioDistribution/Configurator/form.html.twig", 1);
        $this->blocks = array(
            'form_rows' => array($this, 'block_form_rows'),
            'form_row' => array($this, 'block_form_row'),
            'form_label' => array($this, 'block_form_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b5f9e4578fe13a66136a37f5c1d0ba2acd846f1ff3a5da02bc7b944c70fc5aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5f9e4578fe13a66136a37f5c1d0ba2acd846f1ff3a5da02bc7b944c70fc5aad->enter($__internal_b5f9e4578fe13a66136a37f5c1d0ba2acd846f1ff3a5da02bc7b944c70fc5aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SensioDistribution/Configurator/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b5f9e4578fe13a66136a37f5c1d0ba2acd846f1ff3a5da02bc7b944c70fc5aad->leave($__internal_b5f9e4578fe13a66136a37f5c1d0ba2acd846f1ff3a5da02bc7b944c70fc5aad_prof);

    }

    // line 3
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_6ab60bc572bfc79e6fe5af4ce55869d63ccc13c2093e4a908927ac94b020f8dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab60bc572bfc79e6fe5af4ce55869d63ccc13c2093e4a908927ac94b020f8dd->enter($__internal_6ab60bc572bfc79e6fe5af4ce55869d63ccc13c2093e4a908927ac94b020f8dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 4
        echo "    <div class=\"symfony-form-errors\">
        ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
    </div>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 8
            echo "        ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6ab60bc572bfc79e6fe5af4ce55869d63ccc13c2093e4a908927ac94b020f8dd->leave($__internal_6ab60bc572bfc79e6fe5af4ce55869d63ccc13c2093e4a908927ac94b020f8dd_prof);

    }

    // line 12
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7d43781ed6a9bda16e0b11771566da595befffdb597fab63203de9ec90bebb83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d43781ed6a9bda16e0b11771566da595befffdb597fab63203de9ec90bebb83->enter($__internal_7d43781ed6a9bda16e0b11771566da595befffdb597fab63203de9ec90bebb83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 13
        echo "    <div class=\"symfony-form-row\">
        ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
        <div class=\"symfony-form-field\">
            ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"symfony-form-errors\">
                ";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_7d43781ed6a9bda16e0b11771566da595befffdb597fab63203de9ec90bebb83->leave($__internal_7d43781ed6a9bda16e0b11771566da595befffdb597fab63203de9ec90bebb83_prof);

    }

    // line 24
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_606ea2109a8c68f481ee08d16dbb06711bb365fe7ddb1a56389b3fa6e9f340c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_606ea2109a8c68f481ee08d16dbb06711bb365fe7ddb1a56389b3fa6e9f340c2->enter($__internal_606ea2109a8c68f481ee08d16dbb06711bb365fe7ddb1a56389b3fa6e9f340c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 25
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 26
            echo "        ";
            $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            // line 27
            echo "    ";
        }
        // line 28
        echo "    <label for=\"";
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label"))), "html", null, true);
        echo "
        ";
        // line 30
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 31
            echo "            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        ";
        }
        // line 33
        echo "    </label>
";
        
        $__internal_606ea2109a8c68f481ee08d16dbb06711bb365fe7ddb1a56389b3fa6e9f340c2->leave($__internal_606ea2109a8c68f481ee08d16dbb06711bb365fe7ddb1a56389b3fa6e9f340c2_prof);

    }

    public function getTemplateName()
    {
        return "@SensioDistribution/Configurator/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 33,  125 => 31,  123 => 30,  119 => 29,  114 => 28,  111 => 27,  108 => 26,  105 => 25,  99 => 24,  87 => 18,  82 => 16,  77 => 14,  74 => 13,  68 => 12,  54 => 8,  50 => 7,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{% block form_rows %}
    <div class=\"symfony-form-errors\">
        {{ form_errors(form) }}
    </div>
    {% for child in form %}
        {{ form_row(child) }}
    {% endfor %}
{% endblock %}

{% block form_row %}
    <div class=\"symfony-form-row\">
        {{ form_label(form) }}
        <div class=\"symfony-form-field\">
            {{ form_widget(form) }}
            <div class=\"symfony-form-errors\">
                {{ form_errors(form) }}
            </div>
        </div>
    </div>
{% endblock %}

{% block form_label %}
    {% if label is empty %}
        {% set label = name|humanize %}
    {% endif %}
    <label for=\"{{ id }}\">
        {{ label|trans }}
        {% if required %}
            <span class=\"symfony-form-required\" title=\"This field is required\">*</span>
        {% endif %}
    </label>
{% endblock %}
", "@SensioDistribution/Configurator/form.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle\\Resources\\views\\Configurator\\form.html.twig");
    }
}

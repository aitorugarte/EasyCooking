<?php

/* @EasyAdmin/default/new.html.twig */
class __TwigTemplate_83d09b638fc274910c63b8edd99b2c9330f6b9700f185be21822470ad88a9c60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'entity_form' => array($this, 'block_entity_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3dcfcf4b2a84130385c464d5e5a1ca8f0135fa5449a29c0153b7c14fa26172da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dcfcf4b2a84130385c464d5e5a1ca8f0135fa5449a29c0153b7c14fa26172da->enter($__internal_3dcfcf4b2a84130385c464d5e5a1ca8f0135fa5449a29c0153b7c14fa26172da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/new.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_700ebc5d137d1bf6efe3cbb55a0b3aae48f1ae003467c2aa0d6edad229d92b9f"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_700ebc5d137d1bf6efe3cbb55a0b3aae48f1ae003467c2aa0d6edad229d92b9f"] ?? $this->getContext($context, "__internal_700ebc5d137d1bf6efe3cbb55a0b3aae48f1ae003467c2aa0d6edad229d92b9f"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_700ebc5d137d1bf6efe3cbb55a0b3aae48f1ae003467c2aa0d6edad229d92b9f"] ?? $this->getContext($context, "__internal_700ebc5d137d1bf6efe3cbb55a0b3aae48f1ae003467c2aa0d6edad229d92b9f"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3dcfcf4b2a84130385c464d5e5a1ca8f0135fa5449a29c0153b7c14fa26172da->leave($__internal_3dcfcf4b2a84130385c464d5e5a1ca8f0135fa5449a29c0153b7c14fa26172da_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_f1ea9a861ecb183269b95da6750e27b453f4ef1d30aa85a638792d98deacc8e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ea9a861ecb183269b95da6750e27b453f4ef1d30aa85a638792d98deacc8e3->enter($__internal_f1ea9a861ecb183269b95da6750e27b453f4ef1d30aa85a638792d98deacc8e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_f1ea9a861ecb183269b95da6750e27b453f4ef1d30aa85a638792d98deacc8e3->leave($__internal_f1ea9a861ecb183269b95da6750e27b453f4ef1d30aa85a638792d98deacc8e3_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_103fc94e72f005adf164cb88c949f0cb044c2beaa1030b2fc607a25187085f0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_103fc94e72f005adf164cb88c949f0cb044c2beaa1030b2fc607a25187085f0a->enter($__internal_103fc94e72f005adf164cb88c949f0cb044c2beaa1030b2fc607a25187085f0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_103fc94e72f005adf164cb88c949f0cb044c2beaa1030b2fc607a25187085f0a->leave($__internal_103fc94e72f005adf164cb88c949f0cb044c2beaa1030b2fc607a25187085f0a_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_45713ada70a1f1a82b2ac907cb9a684fede1e82adef28f1a2547dea91d909bd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45713ada70a1f1a82b2ac907cb9a684fede1e82adef28f1a2547dea91d909bd4->enter($__internal_45713ada70a1f1a82b2ac907cb9a684fede1e82adef28f1a2547dea91d909bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_700ebc5d137d1bf6efe3cbb55a0b3aae48f1ae003467c2aa0d6edad229d92b9f"] ?? $this->getContext($context, "__internal_700ebc5d137d1bf6efe3cbb55a0b3aae48f1ae003467c2aa0d6edad229d92b9f")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_45713ada70a1f1a82b2ac907cb9a684fede1e82adef28f1a2547dea91d909bd4->leave($__internal_45713ada70a1f1a82b2ac907cb9a684fede1e82adef28f1a2547dea91d909bd4_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_8f63525ba60e05f507730a2964b774d9da50629f50f1d097f77c4ad7a070874d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f63525ba60e05f507730a2964b774d9da50629f50f1d097f77c4ad7a070874d->enter($__internal_8f63525ba60e05f507730a2964b774d9da50629f50f1d097f77c4ad7a070874d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_8f63525ba60e05f507730a2964b774d9da50629f50f1d097f77c4ad7a070874d->leave($__internal_8f63525ba60e05f507730a2964b774d9da50629f50f1d097f77c4ad7a070874d_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_ea8b27db1499a7be3455c7e965d348d0c6e95cdb8d67c2d6d3854d30cca9c7f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8b27db1499a7be3455c7e965d348d0c6e95cdb8d67c2d6d3854d30cca9c7f1->enter($__internal_ea8b27db1499a7be3455c7e965d348d0c6e95cdb8d67c2d6d3854d30cca9c7f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_ea8b27db1499a7be3455c7e965d348d0c6e95cdb8d67c2d6d3854d30cca9c7f1->leave($__internal_ea8b27db1499a7be3455c7e965d348d0c6e95cdb8d67c2d6d3854d30cca9c7f1_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_18f064754f6608f5d8b791654a83bff2010754d0125e6a6212d7d45931212c4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18f064754f6608f5d8b791654a83bff2010754d0125e6a6212d7d45931212c4e->enter($__internal_18f064754f6608f5d8b791654a83bff2010754d0125e6a6212d7d45931212c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 26
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    ";
        // line 36
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_18f064754f6608f5d8b791654a83bff2010754d0125e6a6212d7d45931212c4e->leave($__internal_18f064754f6608f5d8b791654a83bff2010754d0125e6a6212d7d45931212c4e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 36,  141 => 30,  133 => 26,  127 => 25,  117 => 21,  104 => 20,  98 => 19,  88 => 15,  87 => 4,  85 => 15,  82 => 14,  80 => 13,  74 => 12,  62 => 10,  50 => 9,  43 => 7,  41 => 4,  40 => 5,  39 => 4,  38 => 5,  36 => 4,  34 => 3,  32 => 1,  23 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% form_theme form with easyadmin_config('design.form_theme') %}

{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-new-' ~ _entity_config.name %}
{% block body_class 'new new-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'new.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.new.title is defined ? _entity_config.new.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.new-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "@EasyAdmin/default/new.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\new.html.twig");
    }
}

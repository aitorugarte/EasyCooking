<?php

/* EasyAdminBundle:default:edit.html.twig */
class __TwigTemplate_67e80ff8995d2971b9855a3c6765ff33fc7f494f3c051304d911e1fd3ce049c0 extends Twig_Template
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
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 8
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:edit.html.twig", 8);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6a1d52d25fcaa72dde813df47536c6284c694ea4c4ab2cd798dc4c8156a27372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a1d52d25fcaa72dde813df47536c6284c694ea4c4ab2cd798dc4c8156a27372->enter($__internal_6a1d52d25fcaa72dde813df47536c6284c694ea4c4ab2cd798dc4c8156a27372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:edit.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["_entity_id"] = $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array()));
        // line 5
        $context["__internal_6529046389b58a74453226ba511e31c9a67b9d9ed8c416cae1f67f6f2f79d2d3"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 6
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 5
($context["__internal_6529046389b58a74453226ba511e31c9a67b9d9ed8c416cae1f67f6f2f79d2d3"] ?? $this->getContext($context, "__internal_6529046389b58a74453226ba511e31c9a67b9d9ed8c416cae1f67f6f2f79d2d3"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 6
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 5
($context["__internal_6529046389b58a74453226ba511e31c9a67b9d9ed8c416cae1f67f6f2f79d2d3"] ?? $this->getContext($context, "__internal_6529046389b58a74453226ba511e31c9a67b9d9ed8c416cae1f67f6f2f79d2d3"))), "%entity_id%" =>         // line 6
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 8
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a1d52d25fcaa72dde813df47536c6284c694ea4c4ab2cd798dc4c8156a27372->leave($__internal_6a1d52d25fcaa72dde813df47536c6284c694ea4c4ab2cd798dc4c8156a27372_prof);

    }

    // line 10
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_122257d5b87edb8ba1b39bbd3d01e7d96ca0ba77e5954a13e2030a1df2b757b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_122257d5b87edb8ba1b39bbd3d01e7d96ca0ba77e5954a13e2030a1df2b757b1->enter($__internal_122257d5b87edb8ba1b39bbd3d01e7d96ca0ba77e5954a13e2030a1df2b757b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-edit-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_122257d5b87edb8ba1b39bbd3d01e7d96ca0ba77e5954a13e2030a1df2b757b1->leave($__internal_122257d5b87edb8ba1b39bbd3d01e7d96ca0ba77e5954a13e2030a1df2b757b1_prof);

    }

    // line 11
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_e63851609bea4a169c24a2ece05b54da938659b96dc2343eb7fa5e798f46ae9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e63851609bea4a169c24a2ece05b54da938659b96dc2343eb7fa5e798f46ae9f->enter($__internal_e63851609bea4a169c24a2ece05b54da938659b96dc2343eb7fa5e798f46ae9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("edit edit-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_e63851609bea4a169c24a2ece05b54da938659b96dc2343eb7fa5e798f46ae9f->leave($__internal_e63851609bea4a169c24a2ece05b54da938659b96dc2343eb7fa5e798f46ae9f_prof);

    }

    // line 13
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_8d7fd327a94c5ca7e4bdd90ba0034e193ab38b60a70a0e9dbea76795de488cd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d7fd327a94c5ca7e4bdd90ba0034e193ab38b60a70a0e9dbea76795de488cd1->enter($__internal_8d7fd327a94c5ca7e4bdd90ba0034e193ab38b60a70a0e9dbea76795de488cd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 14
        ob_start();
        // line 15
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 16
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "edit", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "edit", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 5
($context["__internal_6529046389b58a74453226ba511e31c9a67b9d9ed8c416cae1f67f6f2f79d2d3"] ?? $this->getContext($context, "__internal_6529046389b58a74453226ba511e31c9a67b9d9ed8c416cae1f67f6f2f79d2d3")))) : (        // line 16
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8d7fd327a94c5ca7e4bdd90ba0034e193ab38b60a70a0e9dbea76795de488cd1->leave($__internal_8d7fd327a94c5ca7e4bdd90ba0034e193ab38b60a70a0e9dbea76795de488cd1_prof);

    }

    // line 20
    public function block_main($context, array $blocks = array())
    {
        $__internal_3fbbc7a844a3c9512c3e6ac7d934eeaf73fbb59666ee48a180266627515db881 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fbbc7a844a3c9512c3e6ac7d934eeaf73fbb59666ee48a180266627515db881->enter($__internal_3fbbc7a844a3c9512c3e6ac7d934eeaf73fbb59666ee48a180266627515db881_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 21
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_3fbbc7a844a3c9512c3e6ac7d934eeaf73fbb59666ee48a180266627515db881->leave($__internal_3fbbc7a844a3c9512c3e6ac7d934eeaf73fbb59666ee48a180266627515db881_prof);

    }

    // line 21
    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_44a729a1ee64acbe968082267473fd83ab2aa76db9b0cb563bae6498ccaea922 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a729a1ee64acbe968082267473fd83ab2aa76db9b0cb563bae6498ccaea922->enter($__internal_44a729a1ee64acbe968082267473fd83ab2aa76db9b0cb563bae6498ccaea922_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 22
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_44a729a1ee64acbe968082267473fd83ab2aa76db9b0cb563bae6498ccaea922->leave($__internal_44a729a1ee64acbe968082267473fd83ab2aa76db9b0cb563bae6498ccaea922_prof);

    }

    // line 25
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_e01bb811d2660a80b88b4d6d607450d687a521c53547929e62b546d435cee7cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01bb811d2660a80b88b4d6d607450d687a521c53547929e62b546d435cee7cf->enter($__internal_e01bb811d2660a80b88b4d6d607450d687a521c53547929e62b546d435cee7cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "edit", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 28
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 29
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 30
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 31
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 32
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 33
        echo "
    ";
        
        $__internal_e01bb811d2660a80b88b4d6d607450d687a521c53547929e62b546d435cee7cf->leave($__internal_e01bb811d2660a80b88b4d6d607450d687a521c53547929e62b546d435cee7cf_prof);

    }

    // line 37
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_aa388b7d9e3cdf4c6d037b2e2428c627cd6cf11c737cf1cec0c7309ea60878ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa388b7d9e3cdf4c6d037b2e2428c627cd6cf11c737cf1cec0c7309ea60878ec->enter($__internal_aa388b7d9e3cdf4c6d037b2e2428c627cd6cf11c737cf1cec0c7309ea60878ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 38
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '";
        // line 42
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("form.are_you_sure", array(), "EasyAdminBundle"), "js"), "html", null, true);
        echo "' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    ";
        // line 58
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_select2_widget.html.twig");
        echo "
";
        
        $__internal_aa388b7d9e3cdf4c6d037b2e2428c627cd6cf11c737cf1cec0c7309ea60878ec->leave($__internal_aa388b7d9e3cdf4c6d037b2e2428c627cd6cf11c737cf1cec0c7309ea60878ec_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 58,  173 => 42,  165 => 38,  159 => 37,  151 => 33,  149 => 32,  148 => 31,  147 => 30,  146 => 29,  145 => 28,  143 => 26,  137 => 25,  127 => 22,  121 => 21,  114 => 25,  111 => 24,  108 => 21,  102 => 20,  92 => 16,  91 => 5,  89 => 16,  86 => 15,  84 => 14,  78 => 13,  66 => 11,  54 => 10,  47 => 8,  45 => 6,  44 => 5,  43 => 6,  42 => 5,  41 => 6,  39 => 5,  37 => 4,  35 => 3,  33 => 1,  24 => 8,);
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
{% set _entity_id = attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-edit-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'edit edit-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'edit.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.edit.title is defined ? _entity_config.edit.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    {% block entity_form %}
        {{ form(form) }}
    {% endblock entity_form %}

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'edit',
            referer: app.request.query.get('referer', ''),
            delete_form: delete_form,
            _translation_domain: _entity_config.translation_domain,
            _trans_parameters: _trans_parameters,
            _entity_config: _entity_config,
        }, with_context = false) }}
    {% endblock delete_form %}
{% endblock %}

{% block body_javascript %}
    {{ parent() }}

    <script type=\"text/javascript\">
        \$(function() {
            \$('.edit-form').areYouSure({ 'message': '{{ 'form.are_you_sure'|trans({}, 'EasyAdminBundle')|e('js') }}' });

            \$('.form-actions').easyAdminSticky();

            \$('a.action-delete').on('click', function(e) {
                e.preventDefault();

                \$('#modal-delete').modal({ backdrop: true, keyboard: true })
                    .off('click', '#modal-delete-button')
                    .on('click', '#modal-delete-button', function () {
                        \$('#delete-form').trigger('submit');
                    });
            });
        });
    </script>

    {{ include('@EasyAdmin/default/includes/_select2_widget.html.twig') }}
{% endblock %}
", "EasyAdminBundle:default:edit.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\javiereguiluz\\easyadmin-bundle\\src/Resources/views/default/edit.html.twig");
    }
}

<?php

/* @EasyAdmin/default/show.html.twig */
class __TwigTemplate_c06ece3a35139116f40b126a1421c9b62067a248a4e5c56b18b82236e5f1b900 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'item_actions' => array($this, 'block_item_actions'),
            'delete_form' => array($this, 'block_delete_form'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 7
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "@EasyAdmin/default/show.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dde3fa2a047a9dd97d5bf8aa23e83d58447b148144493cfa5138287cd94576a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dde3fa2a047a9dd97d5bf8aa23e83d58447b148144493cfa5138287cd94576a4->enter($__internal_dde3fa2a047a9dd97d5bf8aa23e83d58447b148144493cfa5138287cd94576a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/show.html.twig"));

        // line 1
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 3
        $context["_entity_id"] = ("" . $this->getAttribute(($context["entity"] ?? $this->getContext($context, "entity")), $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "primary_key_field_name", array())));
        // line 4
        $context["__internal_d034eea1cff56a6a209187aa129ae412ae306430f8ba257295fa18622fadebdb"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_d034eea1cff56a6a209187aa129ae412ae306430f8ba257295fa18622fadebdb"] ?? $this->getContext($context, "__internal_d034eea1cff56a6a209187aa129ae412ae306430f8ba257295fa18622fadebdb"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_d034eea1cff56a6a209187aa129ae412ae306430f8ba257295fa18622fadebdb"] ?? $this->getContext($context, "__internal_d034eea1cff56a6a209187aa129ae412ae306430f8ba257295fa18622fadebdb"))), "%entity_id%" =>         // line 5
($context["_entity_id"] ?? $this->getContext($context, "_entity_id")));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dde3fa2a047a9dd97d5bf8aa23e83d58447b148144493cfa5138287cd94576a4->leave($__internal_dde3fa2a047a9dd97d5bf8aa23e83d58447b148144493cfa5138287cd94576a4_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_d7bd93c6f5e77bf65f98428fa72f2085c9d7abac463b908bc53e7bb9aacd9d77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7bd93c6f5e77bf65f98428fa72f2085c9d7abac463b908bc53e7bb9aacd9d77->enter($__internal_d7bd93c6f5e77bf65f98428fa72f2085c9d7abac463b908bc53e7bb9aacd9d77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ((("easyadmin-show-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())) . "-") . ($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), "html", null, true);
        
        $__internal_d7bd93c6f5e77bf65f98428fa72f2085c9d7abac463b908bc53e7bb9aacd9d77->leave($__internal_d7bd93c6f5e77bf65f98428fa72f2085c9d7abac463b908bc53e7bb9aacd9d77_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_a73ab4385e18cd7f2536326bc199bef1a51dc74162b0caf0d1fb1ef26d0b4fff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73ab4385e18cd7f2536326bc199bef1a51dc74162b0caf0d1fb1ef26d0b4fff->enter($__internal_a73ab4385e18cd7f2536326bc199bef1a51dc74162b0caf0d1fb1ef26d0b4fff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("show show-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_a73ab4385e18cd7f2536326bc199bef1a51dc74162b0caf0d1fb1ef26d0b4fff->leave($__internal_a73ab4385e18cd7f2536326bc199bef1a51dc74162b0caf0d1fb1ef26d0b4fff_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_10657c5fce53e9d0e767b9185cb7cd0353b741163af24f5cdca9057e9277eb8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10657c5fce53e9d0e767b9185cb7cd0353b741163af24f5cdca9057e9277eb8f->enter($__internal_10657c5fce53e9d0e767b9185cb7cd0353b741163af24f5cdca9057e9277eb8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("show.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "show", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "show", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_d034eea1cff56a6a209187aa129ae412ae306430f8ba257295fa18622fadebdb"] ?? $this->getContext($context, "__internal_d034eea1cff56a6a209187aa129ae412ae306430f8ba257295fa18622fadebdb")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_10657c5fce53e9d0e767b9185cb7cd0353b741163af24f5cdca9057e9277eb8f->leave($__internal_10657c5fce53e9d0e767b9185cb7cd0353b741163af24f5cdca9057e9277eb8f_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_04eb03ecdeaee6730284a464ba014607d2fd4b09eb0c8726574c453b840cdcb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04eb03ecdeaee6730284a464ba014607d2fd4b09eb0c8726574c453b840cdcb5->enter($__internal_04eb03ecdeaee6730284a464ba014607d2fd4b09eb0c8726574c453b840cdcb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    <div class=\"form-horizontal\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["fields"] ?? $this->getContext($context, "fields")));
        foreach ($context['_seq'] as $context["field"] => $context["metadata"]) {
            // line 22
            echo "            <div class=\"form-group field-";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, (($this->getAttribute($context["metadata"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "type", array()), "default")) : ("default"))), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["metadata"], "css_class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "css_class", array()), "")) : ("")), "html", null, true);
            echo "\">
                <label class=\"col-sm-2 control-label\">
                    ";
            // line 24
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute($context["metadata"], "label", array())) ? ($this->getAttribute($context["metadata"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize($context["field"]))), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),             // line 4
($context["__internal_d034eea1cff56a6a209187aa129ae412ae306430f8ba257295fa18622fadebdb"] ?? $this->getContext($context, "__internal_d034eea1cff56a6a209187aa129ae412ae306430f8ba257295fa18622fadebdb")));
            // line 24
            echo "
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        ";
            // line 28
            echo $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->renderEntityField($this->env, "show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), ($context["entity"] ?? $this->getContext($context, "entity")), $context["metadata"]);
            echo "
                    </div>

                    ";
            // line 31
            if (((($this->getAttribute($context["metadata"], "help", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["metadata"], "help", array()), "")) : ("")) != "")) {
                // line 32
                echo "                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["metadata"], "help", array()), array(),                 // line 4
($context["__internal_d034eea1cff56a6a209187aa129ae412ae306430f8ba257295fa18622fadebdb"] ?? $this->getContext($context, "__internal_d034eea1cff56a6a209187aa129ae412ae306430f8ba257295fa18622fadebdb")));
                // line 32
                echo "</span>
                    ";
            }
            // line 34
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['field'], $context['metadata'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            ";
        // line 40
        $this->displayBlock('item_actions', $context, $blocks);
        // line 52
        echo "            </div>
        </div>
    </div>

    ";
        // line 56
        $this->displayBlock('delete_form', $context, $blocks);
        
        $__internal_04eb03ecdeaee6730284a464ba014607d2fd4b09eb0c8726574c453b840cdcb5->leave($__internal_04eb03ecdeaee6730284a464ba014607d2fd4b09eb0c8726574c453b840cdcb5_prof);

    }

    // line 40
    public function block_item_actions($context, array $blocks = array())
    {
        $__internal_1c082b27c00ec4a3e722e1c9d2ae83a5106e8da95bd5161de8ebdccf803b63b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c082b27c00ec4a3e722e1c9d2ae83a5106e8da95bd5161de8ebdccf803b63b8->enter($__internal_1c082b27c00ec4a3e722e1c9d2ae83a5106e8da95bd5161de8ebdccf803b63b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item_actions"));

        // line 41
        echo "                ";
        $context["_show_actions"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getActionsForItem("show", $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()));
        // line 42
        echo "                ";
        $context["_request_parameters"] = array("entity" => $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer"), "method"));
        // line 43
        echo "
                ";
        // line 44
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_actions.html.twig", array("actions" =>         // line 45
($context["_show_actions"] ?? $this->getContext($context, "_show_actions")), "request_parameters" =>         // line 46
($context["_request_parameters"] ?? $this->getContext($context, "_request_parameters")), "translation_domain" => $this->getAttribute(        // line 47
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "trans_parameters" =>         // line 48
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "item_id" =>         // line 49
($context["_entity_id"] ?? $this->getContext($context, "_entity_id"))), false);
        // line 50
        echo "
            ";
        
        $__internal_1c082b27c00ec4a3e722e1c9d2ae83a5106e8da95bd5161de8ebdccf803b63b8->leave($__internal_1c082b27c00ec4a3e722e1c9d2ae83a5106e8da95bd5161de8ebdccf803b63b8_prof);

    }

    // line 56
    public function block_delete_form($context, array $blocks = array())
    {
        $__internal_1ab9bb972cbae7fc2165584c87e3878b3b60ddadde6537c192b55ca5c15031b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ab9bb972cbae7fc2165584c87e3878b3b60ddadde6537c192b55ca5c15031b0->enter($__internal_1ab9bb972cbae7fc2165584c87e3878b3b60ddadde6537c192b55ca5c15031b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "delete_form"));

        // line 57
        echo "        ";
        echo twig_include($this->env, $context, "@EasyAdmin/default/includes/_delete_form.html.twig", array("view" => "show", "referer" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 59
($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "referer", 1 => ""), "method"), "delete_form" =>         // line 60
($context["delete_form"] ?? $this->getContext($context, "delete_form")), "_translation_domain" => $this->getAttribute(        // line 61
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array()), "_trans_parameters" =>         // line 62
($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "_entity_config" =>         // line 63
($context["_entity_config"] ?? $this->getContext($context, "_entity_config"))), false);
        // line 64
        echo "
    ";
        
        $__internal_1ab9bb972cbae7fc2165584c87e3878b3b60ddadde6537c192b55ca5c15031b0->leave($__internal_1ab9bb972cbae7fc2165584c87e3878b3b60ddadde6537c192b55ca5c15031b0_prof);

    }

    // line 68
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_c7fc4719bb28fd1f485cb676bd373069e3eff93a965512f37b4a907a0149593e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7fc4719bb28fd1f485cb676bd373069e3eff93a965512f37b4a907a0149593e->enter($__internal_c7fc4719bb28fd1f485cb676bd373069e3eff93a965512f37b4a907a0149593e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        // line 69
        echo "    ";
        $this->displayParentBlock("body_javascript", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
        \$(function() {
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
        
        $__internal_c7fc4719bb28fd1f485cb676bd373069e3eff93a965512f37b4a907a0149593e->leave($__internal_c7fc4719bb28fd1f485cb676bd373069e3eff93a965512f37b4a907a0149593e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 69,  226 => 68,  218 => 64,  216 => 63,  215 => 62,  214 => 61,  213 => 60,  212 => 59,  210 => 57,  204 => 56,  196 => 50,  194 => 49,  193 => 48,  192 => 47,  191 => 46,  190 => 45,  189 => 44,  186 => 43,  183 => 42,  180 => 41,  174 => 40,  167 => 56,  161 => 52,  159 => 40,  154 => 37,  146 => 34,  142 => 32,  140 => 4,  138 => 32,  136 => 31,  130 => 28,  124 => 24,  122 => 4,  121 => 24,  113 => 22,  109 => 21,  106 => 20,  100 => 19,  90 => 15,  89 => 4,  87 => 15,  84 => 14,  82 => 13,  76 => 12,  64 => 10,  52 => 9,  45 => 7,  43 => 5,  42 => 4,  41 => 5,  40 => 4,  39 => 5,  37 => 4,  35 => 3,  33 => 1,  24 => 7,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set _entity_config = easyadmin_entity(app.request.query.get('entity')) %}
{# the empty string concatenation is needed when the primary key is an object (e.g. an Uuid object) #}
{% set _entity_id = '' ~ attribute(entity, _entity_config.primary_key_field_name) %}
{% trans_default_domain _entity_config.translation_domain %}
{% set _trans_parameters = { '%entity_name%': _entity_config.name|trans, '%entity_label%': _entity_config.label|trans, '%entity_id%': _entity_id } %}

{% extends _entity_config.templates.layout %}

{% block body_id 'easyadmin-show-' ~ _entity_config.name ~ '-' ~ _entity_id %}
{% block body_class 'show show-' ~ _entity_config.name|lower %}

{% block content_title %}
{% spaceless %}
    {% set _default_title = 'show.page_title'|trans(_trans_parameters, 'EasyAdminBundle') %}
    {{ _entity_config.show.title is defined ? _entity_config.show.title|trans(_trans_parameters) : _default_title }}
{% endspaceless %}
{% endblock %}

{% block main %}
    <div class=\"form-horizontal\">
        {% for field, metadata in fields %}
            <div class=\"form-group field-{{ metadata.type|default('default')|lower }} {{ metadata.css_class|default('') }}\">
                <label class=\"col-sm-2 control-label\">
                    {{ (metadata.label ?: field|humanize)|trans(_trans_parameters)|raw }}
                </label>
                <div class=\"col-sm-10\">
                    <div class=\"form-control\">
                        {{ easyadmin_render_field_for_show_view(_entity_config.name, entity, metadata) }}
                    </div>

                    {% if metadata.help|default('') != '' %}
                        <span class=\"help-block\"><i class=\"fa fa-info-circle\"></i> {{ metadata.help|trans|raw }}</span>
                    {% endif %}
                </div>
            </div>
        {% endfor %}

        <div class=\"form-group form-actions\">
            <div class=\"col-sm-10 col-sm-offset-2\">
            {% block item_actions %}
                {% set _show_actions = easyadmin_get_actions_for_show_item(_entity_config.name) %}
                {% set _request_parameters = { entity: _entity_config.name, referer: app.request.query.get('referer') } %}

                {{ include('@EasyAdmin/default/includes/_actions.html.twig', {
                    actions: _show_actions,
                    request_parameters: _request_parameters,
                    translation_domain: _entity_config.translation_domain,
                    trans_parameters: _trans_parameters,
                    item_id: _entity_id
                }, with_context = false) }}
            {% endblock item_actions %}
            </div>
        </div>
    </div>

    {% block delete_form %}
        {{ include('@EasyAdmin/default/includes/_delete_form.html.twig', {
            view: 'show',
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
{% endblock %}
", "@EasyAdmin/default/show.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\javiereguiluz\\easyadmin-bundle\\src\\Resources\\views\\default\\show.html.twig");
    }
}

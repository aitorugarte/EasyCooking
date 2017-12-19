<?php

/* EasyAdminBundle:default:new.html.twig */
class __TwigTemplate_f1c69606639b9d973b8a62da4012e91efae42adcde20ab5f8e2e3e8442caa704 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "templates", array()), "layout", array()), "EasyAdminBundle:default:new.html.twig", 7);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0ceb1bcba1e3ea2fa47096dd05466ddd5e09ec6e59db552062512a07ebca826 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ceb1bcba1e3ea2fa47096dd05466ddd5e09ec6e59db552062512a07ebca826->enter($__internal_c0ceb1bcba1e3ea2fa47096dd05466ddd5e09ec6e59db552062512a07ebca826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:new.html.twig"));

        // line 1
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? $this->getContext($context, "form")), $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getBackendConfiguration("design.form_theme"));
        // line 3
        $context["_entity_config"] = $this->env->getExtension('EasyCorp\Bundle\EasyAdminBundle\Twig\EasyAdminTwigExtension')->getEntityConfiguration($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "entity"), "method"));
        // line 4
        $context["__internal_4256b722ac115cdad8a5a1fdbbd806eee86f8f819c5037e3e0733d51e471b302"] = $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "translation_domain", array());
        // line 5
        $context["_trans_parameters"] = array("%entity_name%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()), array(),         // line 4
($context["__internal_4256b722ac115cdad8a5a1fdbbd806eee86f8f819c5037e3e0733d51e471b302"] ?? $this->getContext($context, "__internal_4256b722ac115cdad8a5a1fdbbd806eee86f8f819c5037e3e0733d51e471b302"))), "%entity_label%" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 5
($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "label", array()), array(),         // line 4
($context["__internal_4256b722ac115cdad8a5a1fdbbd806eee86f8f819c5037e3e0733d51e471b302"] ?? $this->getContext($context, "__internal_4256b722ac115cdad8a5a1fdbbd806eee86f8f819c5037e3e0733d51e471b302"))));
        // line 7
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0ceb1bcba1e3ea2fa47096dd05466ddd5e09ec6e59db552062512a07ebca826->leave($__internal_c0ceb1bcba1e3ea2fa47096dd05466ddd5e09ec6e59db552062512a07ebca826_prof);

    }

    // line 9
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_7f42b836b460c3deb31b259520e8a3346e58640d86c7654379ef1d80f4e92148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f42b836b460c3deb31b259520e8a3346e58640d86c7654379ef1d80f4e92148->enter($__internal_7f42b836b460c3deb31b259520e8a3346e58640d86c7654379ef1d80f4e92148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo twig_escape_filter($this->env, ("easyadmin-new-" . $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array())), "html", null, true);
        
        $__internal_7f42b836b460c3deb31b259520e8a3346e58640d86c7654379ef1d80f4e92148->leave($__internal_7f42b836b460c3deb31b259520e8a3346e58640d86c7654379ef1d80f4e92148_prof);

    }

    // line 10
    public function block_body_class($context, array $blocks = array())
    {
        $__internal_8e15659781c619a43ecc10ca3c38599883757c047d44e6fc48c0b5a62d949827 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e15659781c619a43ecc10ca3c38599883757c047d44e6fc48c0b5a62d949827->enter($__internal_8e15659781c619a43ecc10ca3c38599883757c047d44e6fc48c0b5a62d949827_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        echo twig_escape_filter($this->env, ("new new-" . twig_lower_filter($this->env, $this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "name", array()))), "html", null, true);
        
        $__internal_8e15659781c619a43ecc10ca3c38599883757c047d44e6fc48c0b5a62d949827->leave($__internal_8e15659781c619a43ecc10ca3c38599883757c047d44e6fc48c0b5a62d949827_prof);

    }

    // line 12
    public function block_content_title($context, array $blocks = array())
    {
        $__internal_8a1c02903eddd787dc88f73ed0dc8719cdba4f7917e8ff0de26557f4fb13e110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a1c02903eddd787dc88f73ed0dc8719cdba4f7917e8ff0de26557f4fb13e110->enter($__internal_8a1c02903eddd787dc88f73ed0dc8719cdba4f7917e8ff0de26557f4fb13e110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        // line 13
        ob_start();
        // line 14
        echo "    ";
        $context["_default_title"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("new.page_title", ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")), "EasyAdminBundle");
        // line 15
        echo "    ";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? null), "new", array(), "any", false, true), "title", array(), "any", true, true)) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($this->getAttribute(($context["_entity_config"] ?? $this->getContext($context, "_entity_config")), "new", array()), "title", array()), ($context["_trans_parameters"] ?? $this->getContext($context, "_trans_parameters")),         // line 4
($context["__internal_4256b722ac115cdad8a5a1fdbbd806eee86f8f819c5037e3e0733d51e471b302"] ?? $this->getContext($context, "__internal_4256b722ac115cdad8a5a1fdbbd806eee86f8f819c5037e3e0733d51e471b302")))) : (        // line 15
($context["_default_title"] ?? $this->getContext($context, "_default_title")))), "html", null, true);
        echo "
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_8a1c02903eddd787dc88f73ed0dc8719cdba4f7917e8ff0de26557f4fb13e110->leave($__internal_8a1c02903eddd787dc88f73ed0dc8719cdba4f7917e8ff0de26557f4fb13e110_prof);

    }

    // line 19
    public function block_main($context, array $blocks = array())
    {
        $__internal_f28c7f19f84aa3bcde29756304f47e2b4dcce86c396e7f0eb147b628efbb5b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f28c7f19f84aa3bcde29756304f47e2b4dcce86c396e7f0eb147b628efbb5b87->enter($__internal_f28c7f19f84aa3bcde29756304f47e2b4dcce86c396e7f0eb147b628efbb5b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 20
        echo "    ";
        $this->displayBlock('entity_form', $context, $blocks);
        
        $__internal_f28c7f19f84aa3bcde29756304f47e2b4dcce86c396e7f0eb147b628efbb5b87->leave($__internal_f28c7f19f84aa3bcde29756304f47e2b4dcce86c396e7f0eb147b628efbb5b87_prof);

    }

    public function block_entity_form($context, array $blocks = array())
    {
        $__internal_aed43cca79634cc2127c5f4fa69ac74954455994350aa69c43ec1210fb7bfe18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aed43cca79634cc2127c5f4fa69ac74954455994350aa69c43ec1210fb7bfe18->enter($__internal_aed43cca79634cc2127c5f4fa69ac74954455994350aa69c43ec1210fb7bfe18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "entity_form"));

        // line 21
        echo "        ";
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
    ";
        
        $__internal_aed43cca79634cc2127c5f4fa69ac74954455994350aa69c43ec1210fb7bfe18->leave($__internal_aed43cca79634cc2127c5f4fa69ac74954455994350aa69c43ec1210fb7bfe18_prof);

    }

    // line 25
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_87ba7c6b1d2d67334a40a688e4ed517ec6078181e0252b1ada798e862fbefa93 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87ba7c6b1d2d67334a40a688e4ed517ec6078181e0252b1ada798e862fbefa93->enter($__internal_87ba7c6b1d2d67334a40a688e4ed517ec6078181e0252b1ada798e862fbefa93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

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
        
        $__internal_87ba7c6b1d2d67334a40a688e4ed517ec6078181e0252b1ada798e862fbefa93->leave($__internal_87ba7c6b1d2d67334a40a688e4ed517ec6078181e0252b1ada798e862fbefa93_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:new.html.twig";
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
", "EasyAdminBundle:default:new.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\javiereguiluz\\easyadmin-bundle\\src/Resources/views/default/new.html.twig");
    }
}

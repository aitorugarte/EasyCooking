<?php

/* CookerCookingBundle:Cook:recetas.html.twig */
class __TwigTemplate_0a56843316797297461b2fa6da91912035c4b3d0756b981975c5134ccd20195f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("CookerCookingBundle::sidebar.html.twig", "CookerCookingBundle:Cook:recetas.html.twig", 2);
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
        $__internal_26239f8e52ba8446d762c41366bf589d9259cdd7842bf7c9250e1982a2910971 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26239f8e52ba8446d762c41366bf589d9259cdd7842bf7c9250e1982a2910971->enter($__internal_26239f8e52ba8446d762c41366bf589d9259cdd7842bf7c9250e1982a2910971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerCookingBundle:Cook:recetas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26239f8e52ba8446d762c41366bf589d9259cdd7842bf7c9250e1982a2910971->leave($__internal_26239f8e52ba8446d762c41366bf589d9259cdd7842bf7c9250e1982a2910971_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bc84e75eab1f03a99823d92b5c51aaeefb527a30b8d25a50dfe17a32606b330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bc84e75eab1f03a99823d92b5c51aaeefb527a30b8d25a50dfe17a32606b330->enter($__internal_4bc84e75eab1f03a99823d92b5c51aaeefb527a30b8d25a50dfe17a32606b330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Lista de Recetas", array(), "messages");
        
        $__internal_4bc84e75eab1f03a99823d92b5c51aaeefb527a30b8d25a50dfe17a32606b330->leave($__internal_4bc84e75eab1f03a99823d92b5c51aaeefb527a30b8d25a50dfe17a32606b330_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e78a271a781b26255942467db1817d35f14d84f85de34c41c98ae36e532f7739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e78a271a781b26255942467db1817d35f14d84f85de34c41c98ae36e532f7739->enter($__internal_e78a271a781b26255942467db1817d35f14d84f85de34c41c98ae36e532f7739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
 \t<div class=\"ib-container\" id=\"ib-container\">
\t";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recetas"] ?? $this->getContext($context, "recetas")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["receta"]) {
            // line 9
            echo "
\t<article>
\t\t<header>
\t\t\t<h3><a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "</a></h3>
\t\t</header>
\t\t<img class=\"imgPeq\" src=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "imagen", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "nombre", array()), "html", null, true);
            echo "\" />
\t\t<div class=\"snippet\">
\t\t\t<p style=\"margin-left: 5px;margin-right: 5px;\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["receta"], "detalles", array(0 => 50), "method"), "html", null, true);
            echo "</p>
\t\t\t<p><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_showReceta", array("id" => $this->getAttribute($context["receta"], "id", array()))), "html", null, true);
            echo "\">Seguir leyendo...</a></p>
\t\t</div>
\t\t<footer class=\"meta\">
\t\t\t<p>Comentarios: -</p>
\t\t</footer>
\t</article>
\t
\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "\t<p>No hay entradas en este blog</p>
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['receta'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t</div>

\t
";
        
        $__internal_e78a271a781b26255942467db1817d35f14d84f85de34c41c98ae36e532f7739->leave($__internal_e78a271a781b26255942467db1817d35f14d84f85de34c41c98ae36e532f7739_prof);

    }

    public function getTemplateName()
    {
        return "CookerCookingBundle:Cook:recetas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 27,  98 => 25,  85 => 17,  81 => 16,  74 => 14,  67 => 12,  62 => 9,  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Cook/recetas.html.twig #}
{% extends 'CookerCookingBundle::sidebar.html.twig' %}
{% block title %}{% trans %}Lista de Recetas {% endtrans %}{% endblock %}

{% block body %}

 \t<div class=\"ib-container\" id=\"ib-container\">
\t{% for receta in recetas %}

\t<article>
\t\t<header>
\t\t\t<h3><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">{{ receta.nombre }}</a></h3>
\t\t</header>
\t\t<img class=\"imgPeq\" src=\"{{receta.imagen}}\" alt=\"{{receta.nombre}}\" />
\t\t<div class=\"snippet\">
\t\t\t<p style=\"margin-left: 5px;margin-right: 5px;\">{{ receta.detalles(50) }}</p>
\t\t\t<p><a href=\"{{ path('cooker_cook_showReceta', { 'id': receta.id }) }}\">Seguir leyendo...</a></p>
\t\t</div>
\t\t<footer class=\"meta\">
\t\t\t<p>Comentarios: -</p>
\t\t</footer>
\t</article>
\t
\t{% else %}
\t<p>No hay entradas en este blog</p>
\t{% endfor %}
\t</div>

\t
{% endblock %}
", "CookerCookingBundle:Cook:recetas.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Cook\\recetas.html.twig");
    }
}

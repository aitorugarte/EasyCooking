<?php

/* @CookerCooking/Comment/list.html.twig */
class __TwigTemplate_5013d2ef8c228a889f467d75d0512043d130dc7fcdd8cece33f31e3ae7df3515 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f7dda8c734ce9a8dca2d2d8cfecfb83455f4dc1856faf71aaa78f8763d28928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7dda8c734ce9a8dca2d2d8cfecfb83455f4dc1856faf71aaa78f8763d28928->enter($__internal_4f7dda8c734ce9a8dca2d2d8cfecfb83455f4dc1856faf71aaa78f8763d28928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerCooking/Comment/list.html.twig"));

        // line 2
        echo "
";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["comentarios"] ?? $this->getContext($context, "comentarios")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["comentario"]) {
            // line 4
            echo "    <article class=\"comentario ";
            echo twig_escape_filter($this->env, twig_cycle(array(0 => "odd", 1 => "even"), $this->getAttribute($context["loop"], "index0", array())), "html", null, true);
            echo "\" id=\"comentario-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["comentario"], "id", array()), "html", null, true);
            echo "\" style=\"border-style: ridge; margin-bottom: 10px;\">
\t\t<header style=\"margin-left:10px\">
            <p><span style=\"color: #B60000; font-weight: 700;\">";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["comentario"], "usuario", array()), "html", null, true);
            echo "</span>
\t\t\t<time datetime=\"";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comentario"], "created", array()), "c"), "html", null, true);
            echo "\" style=\"float:right\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["comentario"], "created", array()), "l, F j, Y"), "html", null, true);
            echo "</time></p>
        </header>
        <p style=\"margin-left:10px\">";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["comentario"], "comentario", array()), "html", null, true);
            echo "</p>
    </article>
";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 12
            echo "    <p>No hay comentarios para este post.</p>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentario'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4f7dda8c734ce9a8dca2d2d8cfecfb83455f4dc1856faf71aaa78f8763d28928->leave($__internal_4f7dda8c734ce9a8dca2d2d8cfecfb83455f4dc1856faf71aaa78f8763d28928_prof);

    }

    public function getTemplateName()
    {
        return "@CookerCooking/Comment/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  62 => 9,  55 => 7,  51 => 6,  43 => 4,  25 => 3,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/Cooker/CookingBundle/Resources/views/Comment/list.html.twig #}

{% for comentario in comentarios %}
    <article class=\"comentario {{ cycle(['odd', 'even'], loop.index0) }}\" id=\"comentario-{{ comentario.id }}\" style=\"border-style: ridge; margin-bottom: 10px;\">
\t\t<header style=\"margin-left:10px\">
            <p><span style=\"color: #B60000; font-weight: 700;\">{{ comentario.usuario }}</span>
\t\t\t<time datetime=\"{{ comentario.created|date('c') }}\" style=\"float:right\">{{ comentario.created|date('l, F j, Y') }}</time></p>
        </header>
        <p style=\"margin-left:10px\">{{ comentario.comentario }}</p>
    </article>
{% else %}
    <p>No hay comentarios para este post.</p>
{% endfor %}
", "@CookerCooking/Comment/list.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\CookingBundle\\Resources\\views\\Comment\\list.html.twig");
    }
}

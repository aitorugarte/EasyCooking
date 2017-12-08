<?php

/* CookerAdminBundle:Security:login.html.twig */
class __TwigTemplate_3d9f58d433377ab0effbc54ea9ab8eaa2d9a2a922269a779ac90007718b32205 extends Twig_Template
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
        $__internal_d46031088c9eed63c756254217db9bff2d22f4e19625568759f9332fedb6267c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d46031088c9eed63c756254217db9bff2d22f4e19625568759f9332fedb6267c->enter($__internal_d46031088c9eed63c756254217db9bff2d22f4e19625568759f9332fedb6267c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CookerAdminBundle:Security:login.html.twig"));

        // line 1
        echo "﻿";
        // line 2
        echo "
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

";
        // line 5
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 6
            echo "\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
";
        }
        // line 8
        echo "
<form action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_admin_login_check");
        echo "\" method=\"post\"  class=\"login\">
\t<label for=\"username\">Usuario:</label>
\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

\t<label for=\"password\">Contraseña:</label>
\t<input type=\"password\" id=\"password\" name=\"_password\" />

\t<button type=\"submit\">Entrar</button>
</form>
";
        
        $__internal_d46031088c9eed63c756254217db9bff2d22f4e19625568759f9332fedb6267c->leave($__internal_d46031088c9eed63c756254217db9bff2d22f4e19625568759f9332fedb6267c_prof);

    }

    public function getTemplateName()
    {
        return "CookerAdminBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  43 => 9,  40 => 8,  34 => 6,  32 => 5,  27 => 3,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("﻿{# src/Cooker/AdminBundle/Resources/views/Security/login.html.twig #}

<link href=\"{{ asset('css/admin.css') }}\" type=\"text/css\" rel=\"stylesheet\" />

{% if error %}
\t<div>{{ error.message }}</div>
{% endif %}

<form action=\"{{ path('cooker_admin_login_check') }}\" method=\"post\"  class=\"login\">
\t<label for=\"username\">Usuario:</label>
\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" />

\t<label for=\"password\">Contraseña:</label>
\t<input type=\"password\" id=\"password\" name=\"_password\" />

\t<button type=\"submit\">Entrar</button>
</form>
", "CookerAdminBundle:Security:login.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\AdminBundle/Resources/views/Security/login.html.twig");
    }
}

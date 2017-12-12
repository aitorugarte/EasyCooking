<?php

/* @CookerAdmin/Security/login.html.twig */
class __TwigTemplate_d2dc53dee15a1c0952412a7095f72a3912fa154bea19054e0608447eb221e492 extends Twig_Template
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
        $__internal_911935de5ef1144ddc3d4ed4493cc04c27ff4b47efad1f782b22331e4cf11f19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_911935de5ef1144ddc3d4ed4493cc04c27ff4b47efad1f782b22331e4cf11f19->enter($__internal_911935de5ef1144ddc3d4ed4493cc04c27ff4b47efad1f782b22331e4cf11f19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CookerAdmin/Security/login.html.twig"));

        // line 1
        echo "﻿";
        // line 2
        echo "
<link href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("https://getbootstrap.com/docs/4.0/examples/signin/signin.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />

";
        // line 6
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 7
            echo "\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<div class=\"container\">

      <form class=\"form-signin\" action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_admin_login_check");
        echo "\" method=\"post\" class=\"login\">
        <h2 class=\"form-signin-heading\">Iniciar sesión</h2>

        <label for=\"username\" class=\"sr-only\">Usuario</label>
        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"Usuario\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required autofocus>
        
        <label for=\"password\" class=\"sr-only\">Contraseña</label>
        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Contraseña\" required>
        
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" id=\"remember_me\" name=\"remember_me\"> Recordarme
          </label>
        </div>

        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Entrar</button>
      </form>

    </div> <!-- /container -->";
        
        $__internal_911935de5ef1144ddc3d4ed4493cc04c27ff4b47efad1f782b22331e4cf11f19->leave($__internal_911935de5ef1144ddc3d4ed4493cc04c27ff4b47efad1f782b22331e4cf11f19_prof);

    }

    public function getTemplateName()
    {
        return "@CookerAdmin/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 16,  49 => 12,  44 => 9,  38 => 7,  36 => 6,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
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

<link href=\"{{ asset('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
<link href=\"{{ asset('https://getbootstrap.com/docs/4.0/examples/signin/signin.css') }}\" type=\"text/css\" rel=\"stylesheet\" />

{% if error %}
\t<div>{{ error.message }}</div>
{% endif %}

<div class=\"container\">

      <form class=\"form-signin\" action=\"{{ path('cooker_admin_login_check') }}\" method=\"post\" class=\"login\">
        <h2 class=\"form-signin-heading\">Iniciar sesión</h2>

        <label for=\"username\" class=\"sr-only\">Usuario</label>
        <input type=\"text\" id=\"username\" name=\"_username\" class=\"form-control\" placeholder=\"Usuario\" value=\"{{ last_username }}\" required autofocus>
        
        <label for=\"password\" class=\"sr-only\">Contraseña</label>
        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" placeholder=\"Contraseña\" required>
        
        <div class=\"checkbox\">
          <label>
            <input type=\"checkbox\" id=\"remember_me\" name=\"remember_me\"> Recordarme
          </label>
        </div>

        <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Entrar</button>
      </form>

    </div> <!-- /container -->", "@CookerAdmin/Security/login.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\src\\Cooker\\AdminBundle\\Resources\\views\\Security\\login.html.twig");
    }
}

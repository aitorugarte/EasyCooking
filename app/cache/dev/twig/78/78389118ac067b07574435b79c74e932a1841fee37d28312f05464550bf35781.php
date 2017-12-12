<?php

/* EasyAdminBundle:default:field_raw.html.twig */
class __TwigTemplate_574b8b02ebc984f29549bc47812090b45a3b04293fce02f425e663a115070e7b extends Twig_Template
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
        $__internal_61963e48fda076a28c88621d07dae676821b915e4139d8969271b88ad7c66956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61963e48fda076a28c88621d07dae676821b915e4139d8969271b88ad7c66956->enter($__internal_61963e48fda076a28c88621d07dae676821b915e4139d8969271b88ad7c66956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EasyAdminBundle:default:field_raw.html.twig"));

        // line 1
        echo ($context["value"] ?? $this->getContext($context, "value"));
        echo "
";
        
        $__internal_61963e48fda076a28c88621d07dae676821b915e4139d8969271b88ad7c66956->leave($__internal_61963e48fda076a28c88621d07dae676821b915e4139d8969271b88ad7c66956_prof);

    }

    public function getTemplateName()
    {
        return "EasyAdminBundle:default:field_raw.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ value|raw }}
", "EasyAdminBundle:default:field_raw.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\javiereguiluz\\easyadmin-bundle\\src/Resources/views/default/field_raw.html.twig");
    }
}

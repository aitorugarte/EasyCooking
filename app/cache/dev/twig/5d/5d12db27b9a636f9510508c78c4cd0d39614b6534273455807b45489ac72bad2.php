<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_9aaed0a632e8da06eb49d8af4d897243f73638e995289ddc40708d50e0381cbd extends Twig_Template
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
        $__internal_7c14271f4fb31c8bebc61893d543217a43b7fb144d4b4f8d09ecb62f47e7fa4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c14271f4fb31c8bebc61893d543217a43b7fb144d4b4f8d09ecb62f47e7fa4c->enter($__internal_7c14271f4fb31c8bebc61893d543217a43b7fb144d4b4f8d09ecb62f47e7fa4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_7c14271f4fb31c8bebc61893d543217a43b7fb144d4b4f8d09ecb62f47e7fa4c->leave($__internal_7c14271f4fb31c8bebc61893d543217a43b7fb144d4b4f8d09ecb62f47e7fa4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\hidden_row.html.php");
    }
}

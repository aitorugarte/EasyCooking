<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_797453e5d940f25b295b2b76433a495118c9f39d6e6ea0170e4e5f1338370ab5 extends Twig_Template
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
        $__internal_7d2cf1250014a7f70f790080ff211d3a70d5dd1adbaf7fe8e44a24e928379d1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d2cf1250014a7f70f790080ff211d3a70d5dd1adbaf7fe8e44a24e928379d1e->enter($__internal_7d2cf1250014a7f70f790080ff211d3a70d5dd1adbaf7fe8e44a24e928379d1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_7d2cf1250014a7f70f790080ff211d3a70d5dd1adbaf7fe8e44a24e928379d1e->leave($__internal_7d2cf1250014a7f70f790080ff211d3a70d5dd1adbaf7fe8e44a24e928379d1e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\password_widget.html.php");
    }
}

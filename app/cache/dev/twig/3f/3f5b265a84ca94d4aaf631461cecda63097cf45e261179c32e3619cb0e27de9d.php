<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_d87348af460f64932c770957932aecacac5fe95330ae1967173ed4a0e920d1af extends Twig_Template
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
        $__internal_f2f93adeb8c89c6c0f50c9a25a1d02a7fce56e860e1a78c1be1170d0b4b5fbc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f93adeb8c89c6c0f50c9a25a1d02a7fce56e860e1a78c1be1170d0b4b5fbc7->enter($__internal_f2f93adeb8c89c6c0f50c9a25a1d02a7fce56e860e1a78c1be1170d0b4b5fbc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_f2f93adeb8c89c6c0f50c9a25a1d02a7fce56e860e1a78c1be1170d0b4b5fbc7->leave($__internal_f2f93adeb8c89c6c0f50c9a25a1d02a7fce56e860e1a78c1be1170d0b4b5fbc7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}

<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_695931298caeddf16af742f327fc4d5f84cf1ee3eed5502385afa4ce537845af extends Twig_Template
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
        $__internal_3a27cc8ae35c56d9f6d8474e67a7c6045a8c0142e8a01e8e975777f6bdc0e0b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a27cc8ae35c56d9f6d8474e67a7c6045a8c0142e8a01e8e975777f6bdc0e0b7->enter($__internal_3a27cc8ae35c56d9f6d8474e67a7c6045a8c0142e8a01e8e975777f6bdc0e0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_3a27cc8ae35c56d9f6d8474e67a7c6045a8c0142e8a01e8e975777f6bdc0e0b7->leave($__internal_3a27cc8ae35c56d9f6d8474e67a7c6045a8c0142e8a01e8e975777f6bdc0e0b7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\submit_widget.html.php");
    }
}

<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_58a6d613c195accd705460e6e322877a64bd3266e0a1c1476a21de51a7efd08a extends Twig_Template
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
        $__internal_40fa99d57cf39df408c3f01a7f67287d3da634f5c4436fc55ea0bcc02cb82292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40fa99d57cf39df408c3f01a7f67287d3da634f5c4436fc55ea0bcc02cb82292->enter($__internal_40fa99d57cf39df408c3f01a7f67287d3da634f5c4436fc55ea0bcc02cb82292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_40fa99d57cf39df408c3f01a7f67287d3da634f5c4436fc55ea0bcc02cb82292->leave($__internal_40fa99d57cf39df408c3f01a7f67287d3da634f5c4436fc55ea0bcc02cb82292_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\email_widget.html.php");
    }
}

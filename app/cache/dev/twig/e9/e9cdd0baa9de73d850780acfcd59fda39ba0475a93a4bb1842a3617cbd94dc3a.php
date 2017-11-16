<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_f141eb1e86b072731be90c05b7295252f22a1560d0a5d7e76efd4e6e06ab87a9 extends Twig_Template
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
        $__internal_b746b5a2422128b050e35f6c26e0ab09b89db3bfb8ef746fe01b6bd5f3908cd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b746b5a2422128b050e35f6c26e0ab09b89db3bfb8ef746fe01b6bd5f3908cd8->enter($__internal_b746b5a2422128b050e35f6c26e0ab09b89db3bfb8ef746fe01b6bd5f3908cd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_b746b5a2422128b050e35f6c26e0ab09b89db3bfb8ef746fe01b6bd5f3908cd8->leave($__internal_b746b5a2422128b050e35f6c26e0ab09b89db3bfb8ef746fe01b6bd5f3908cd8_prof);

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

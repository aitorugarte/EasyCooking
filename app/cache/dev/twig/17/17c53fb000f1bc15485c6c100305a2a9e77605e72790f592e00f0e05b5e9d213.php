<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_60e582d20c9e9cab2fcc6bcc30421d27cad3103aeb1e8809fda3bb1a76e1b090 extends Twig_Template
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
        $__internal_54c069a0d2b98e44fa64a83f9e3c19e0e2d674069e29ed3a6b3a3f140cd2de6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54c069a0d2b98e44fa64a83f9e3c19e0e2d674069e29ed3a6b3a3f140cd2de6c->enter($__internal_54c069a0d2b98e44fa64a83f9e3c19e0e2d674069e29ed3a6b3a3f140cd2de6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_54c069a0d2b98e44fa64a83f9e3c19e0e2d674069e29ed3a6b3a3f140cd2de6c->leave($__internal_54c069a0d2b98e44fa64a83f9e3c19e0e2d674069e29ed3a6b3a3f140cd2de6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}

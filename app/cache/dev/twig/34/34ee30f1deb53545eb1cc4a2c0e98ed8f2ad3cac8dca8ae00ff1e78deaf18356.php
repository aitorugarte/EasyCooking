<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ad4569c6e1dbb23b99665ed334fb773c68b4ebd28d3b64642f02d0d002942025 extends Twig_Template
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
        $__internal_7a2653dab28a4fc3402f9847531800f3c7e786e8ce9204f11d0cdf84d6d4f661 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a2653dab28a4fc3402f9847531800f3c7e786e8ce9204f11d0cdf84d6d4f661->enter($__internal_7a2653dab28a4fc3402f9847531800f3c7e786e8ce9204f11d0cdf84d6d4f661_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_7a2653dab28a4fc3402f9847531800f3c7e786e8ce9204f11d0cdf84d6d4f661->leave($__internal_7a2653dab28a4fc3402f9847531800f3c7e786e8ce9204f11d0cdf84d6d4f661_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}

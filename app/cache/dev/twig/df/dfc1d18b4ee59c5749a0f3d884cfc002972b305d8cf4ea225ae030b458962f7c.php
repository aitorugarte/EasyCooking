<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_7f46a89c9e80a2dea438a5af49b703d8b62e8687933a737e6db175dd9a0c41ea extends Twig_Template
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
        $__internal_6ebe4806ca6165c4e80f0b828f2771343c187dee9568caeb3688bb677d24dc9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ebe4806ca6165c4e80f0b828f2771343c187dee9568caeb3688bb677d24dc9d->enter($__internal_6ebe4806ca6165c4e80f0b828f2771343c187dee9568caeb3688bb677d24dc9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_6ebe4806ca6165c4e80f0b828f2771343c187dee9568caeb3688bb677d24dc9d->leave($__internal_6ebe4806ca6165c4e80f0b828f2771343c187dee9568caeb3688bb677d24dc9d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\container_attributes.html.php");
    }
}

<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_63339639420fb7bf4eec04adaf2b0e232994e2cc27fd36ff4fcabcf0da0c14c4 extends Twig_Template
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
        $__internal_c00b53a3a443e86c6a2419a9e7a48c7f1e430c855b92bbc55976e42f0f0a0669 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c00b53a3a443e86c6a2419a9e7a48c7f1e430c855b92bbc55976e42f0f0a0669->enter($__internal_c00b53a3a443e86c6a2419a9e7a48c7f1e430c855b92bbc55976e42f0f0a0669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c00b53a3a443e86c6a2419a9e7a48c7f1e430c855b92bbc55976e42f0f0a0669->leave($__internal_c00b53a3a443e86c6a2419a9e7a48c7f1e430c855b92bbc55976e42f0f0a0669_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "C:\\xampp\\htdocs\\EasyCooking\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_enctype.html.php");
    }
}

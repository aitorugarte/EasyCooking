<?php

/* ::base.html.twig */
class __TwigTemplate_667bd328f123b816040981999141982f6cbf19b0d2ea556d84210f86e4c44f68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'navigation' => array($this, 'block_navigation'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f3450e6f3f19d4ed8c0997338674c34e7bd4bf57eddfe9e9ccb0426bbfe5ff2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3450e6f3f19d4ed8c0997338674c34e7bd4bf57eddfe9e9ccb0426bbfe5ff2a->enter($__internal_f3450e6f3f19d4ed8c0997338674c34e7bd4bf57eddfe9e9ccb0426bbfe5ff2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>

<head>
\t<title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
\t<meta name=\"description\" content=\"website description\" />
\t<meta name=\"keywords\" content=\"website keywords, website keywords\" />
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t<link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />


</head>

<body>
\t<div id=\"main\">
\t\t<div id=\"header\">

\t\t\t<div id=\"logo\">

\t\t\t\t<div id=\"logo_text\">
\t\t\t\t\t<h1><a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("cooker_cook_principal");
        echo "\">Easy<span class=\"logo_colour\">_cooking</span></a></h1>
\t\t\t\t\t <div id=\"letter-container\" class=\"letter-container\">
\t\t\t\t\t<h2>
\t\t\t\t\t<a href=\"#\">\"El amor puede esperar, el hambre no\" Monkey D. Luffy</a>
\t\t\t\t\t</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- Menú -->
\t\t\t<div id=\"menubar\">
\t\t\t";
        // line 33
        $this->displayBlock('navigation', $context, $blocks);
        // line 35
        echo "\t\t\t</div> 

\t\t<div id=\"site_content\">
\t\t\t<div class=\"sidebar\">
\t\t\t\t<!-- Contenido lateral derecho -->
\t\t\t\t";
        // line 40
        $this->displayBlock('sidebar', $context, $blocks);
        // line 41
        echo "\t\t\t</div>

\t\t\t<div id=\"content\">
\t\t\t\t<!-- Contenido principal -->
\t\t\t\t<section class=\"main-col\">
\t\t\t\t\t";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "\t\t\t\t</section>
\t\t\t</div>
\t\t</div>

\t\t<!-- Pie de página -->
\t\t<div id=\"footer\">
\t\t\t";
        // line 53
        $this->displayBlock('footer', $context, $blocks);
        // line 56
        echo "\t\t</div>

\t</div>

\t";
        // line 60
        $this->displayBlock('javascripts', $context, $blocks);
        // line 104
        echo "</body>
</html>
";
        
        $__internal_f3450e6f3f19d4ed8c0997338674c34e7bd4bf57eddfe9e9ccb0426bbfe5ff2a->leave($__internal_f3450e6f3f19d4ed8c0997338674c34e7bd4bf57eddfe9e9ccb0426bbfe5ff2a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e3e925e05d701b1499d415d6a3fd2f5c263d7f59456ae28c9d1c796a11ef87be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3e925e05d701b1499d415d6a3fd2f5c263d7f59456ae28c9d1c796a11ef87be->enter($__internal_e3e925e05d701b1499d415d6a3fd2f5c263d7f59456ae28c9d1c796a11ef87be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "symblog";
        
        $__internal_e3e925e05d701b1499d415d6a3fd2f5c263d7f59456ae28c9d1c796a11ef87be->leave($__internal_e3e925e05d701b1499d415d6a3fd2f5c263d7f59456ae28c9d1c796a11ef87be_prof);

    }

    // line 33
    public function block_navigation($context, array $blocks = array())
    {
        $__internal_1d9b25c92d673e7bef5a57357a7d116e67ef052717337370b657b4b714f18440 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9b25c92d673e7bef5a57357a7d116e67ef052717337370b657b4b714f18440->enter($__internal_1d9b25c92d673e7bef5a57357a7d116e67ef052717337370b657b4b714f18440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "navigation"));

        // line 34
        echo "\t\t\t";
        
        $__internal_1d9b25c92d673e7bef5a57357a7d116e67ef052717337370b657b4b714f18440->leave($__internal_1d9b25c92d673e7bef5a57357a7d116e67ef052717337370b657b4b714f18440_prof);

    }

    // line 40
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_15855d69205f2fd9f4438aa62e29443ec726cbb011ffa84f26a59e2695714f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15855d69205f2fd9f4438aa62e29443ec726cbb011ffa84f26a59e2695714f13->enter($__internal_15855d69205f2fd9f4438aa62e29443ec726cbb011ffa84f26a59e2695714f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        
        $__internal_15855d69205f2fd9f4438aa62e29443ec726cbb011ffa84f26a59e2695714f13->leave($__internal_15855d69205f2fd9f4438aa62e29443ec726cbb011ffa84f26a59e2695714f13_prof);

    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
        $__internal_adfe1ee6ecd90767a2eb53fe344ab6dfd6f01713f485bcfc6b4bf820528bf7eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adfe1ee6ecd90767a2eb53fe344ab6dfd6f01713f485bcfc6b4bf820528bf7eb->enter($__internal_adfe1ee6ecd90767a2eb53fe344ab6dfd6f01713f485bcfc6b4bf820528bf7eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_adfe1ee6ecd90767a2eb53fe344ab6dfd6f01713f485bcfc6b4bf820528bf7eb->leave($__internal_adfe1ee6ecd90767a2eb53fe344ab6dfd6f01713f485bcfc6b4bf820528bf7eb_prof);

    }

    // line 53
    public function block_footer($context, array $blocks = array())
    {
        $__internal_cd93841bfa277e7127d1e36db264d57cd42cc774a7c563e9f15227460a33b6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd93841bfa277e7127d1e36db264d57cd42cc774a7c563e9f15227460a33b6d8->enter($__internal_cd93841bfa277e7127d1e36db264d57cd42cc774a7c563e9f15227460a33b6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 54
        echo "\t\t\tCocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web
\t\t\t";
        
        $__internal_cd93841bfa277e7127d1e36db264d57cd42cc774a7c563e9f15227460a33b6d8->leave($__internal_cd93841bfa277e7127d1e36db264d57cd42cc774a7c563e9f15227460a33b6d8_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1d8e752b253199345b0fee21df11893a73b633b972e1eb91926995800852aef3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d8e752b253199345b0fee21df11893a73b633b972e1eb91926995800852aef3->enter($__internal_1d8e752b253199345b0fee21df11893a73b633b972e1eb91926995800852aef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "\t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
\t\t\t<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.lettering.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(function() {
\t\t\t\t\t\$(\"#letter-container h2 a\").lettering();
\t\t\t\t});
\t\t\t</script

\t <script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.1.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t <script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/modernizr.custom.34978.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
\t <script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t\t
\t\t\t\tvar \$container\t= \$('#ib-container'),
\t\t\t\t\t\$articles\t= \$container.children('article'),
\t\t\t\t\ttimeout;
\t\t\t\t
\t\t\t\t\$articles.on( 'mouseenter', function( event ) {
\t\t\t\t\t\t
\t\t\t\t\tvar \$article\t= \$(this);
\t\t\t\t\tclearTimeout( timeout );
\t\t\t\t\ttimeout = setTimeout( function() {
\t\t\t\t\t\t
\t\t\t\t\t\tif( \$article.hasClass('active') ) return false;
\t\t\t\t\t\t
\t\t\t\t\t\t\$articles.not( \$article.removeClass('blur').addClass('active') )
\t\t\t\t\t\t\t\t .removeClass('active')
\t\t\t\t\t\t\t\t .addClass('blur');
\t\t\t\t\t\t
\t\t\t\t\t}, 65 );
\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$container.on( 'mouseleave', function( event ) {
\t\t\t\t\t
\t\t\t\t\tclearTimeout( timeout );
\t\t\t\t\t\$articles.removeClass('active blur');
\t\t\t\t\t
\t\t\t\t});
\t\t\t
\t\t\t});
\t\t</script>
\t";
        
        $__internal_1d8e752b253199345b0fee21df11893a73b633b972e1eb91926995800852aef3->leave($__internal_1d8e752b253199345b0fee21df11893a73b633b972e1eb91926995800852aef3_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 70,  198 => 69,  188 => 62,  185 => 61,  179 => 60,  171 => 54,  165 => 53,  154 => 46,  143 => 40,  136 => 34,  130 => 33,  118 => 5,  109 => 104,  107 => 60,  101 => 56,  99 => 53,  91 => 47,  89 => 46,  82 => 41,  80 => 40,  73 => 35,  71 => 33,  56 => 21,  41 => 9,  34 => 5,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>

<head>
\t<title>{% block title %}symblog{% endblock %}</title>
\t<meta name=\"description\" content=\"website description\" />
\t<meta name=\"keywords\" content=\"website keywords, website keywords\" />
\t<meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
\t<link href=\"{{ asset('css/style.css') }}\" type=\"text/css\" rel=\"stylesheet\" />


</head>

<body>
\t<div id=\"main\">
\t\t<div id=\"header\">

\t\t\t<div id=\"logo\">

\t\t\t\t<div id=\"logo_text\">
\t\t\t\t\t<h1><a href=\"{{ path('cooker_cook_principal')}}\">Easy<span class=\"logo_colour\">_cooking</span></a></h1>
\t\t\t\t\t <div id=\"letter-container\" class=\"letter-container\">
\t\t\t\t\t<h2>
\t\t\t\t\t<a href=\"#\">\"El amor puede esperar, el hambre no\" Monkey D. Luffy</a>
\t\t\t\t\t</h2>
\t\t\t\t\t</div>
\t\t\t\t</div>

\t\t\t</div>

\t\t\t<!-- Menú -->
\t\t\t<div id=\"menubar\">
\t\t\t{% block navigation %}
\t\t\t{% endblock %}
\t\t\t</div> 

\t\t<div id=\"site_content\">
\t\t\t<div class=\"sidebar\">
\t\t\t\t<!-- Contenido lateral derecho -->
\t\t\t\t{% block sidebar %}{% endblock %}
\t\t\t</div>

\t\t\t<div id=\"content\">
\t\t\t\t<!-- Contenido principal -->
\t\t\t\t<section class=\"main-col\">
\t\t\t\t\t{% block body %}{% endblock %}
\t\t\t\t</section>
\t\t\t</div>
\t\t</div>

\t\t<!-- Pie de página -->
\t\t<div id=\"footer\">
\t\t\t{% block footer %}
\t\t\tCocina f&aacutecil - Creado como proyecto para Ingenier&iacutea Web
\t\t\t{% endblock %}
\t\t</div>

\t</div>

\t{% block javascripts %}
\t<script type=\"text/javascript\" src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js\"></script>
\t\t\t<script src=\"{{ asset('js/jquery.lettering.js') }}\" type=\"text/javascript\"></script>
\t\t\t<script type=\"text/javascript\">
\t\t\t\t\$(function() {
\t\t\t\t\t\$(\"#letter-container h2 a\").lettering();
\t\t\t\t});
\t\t\t</script

\t <script src=\"{{ asset('js/jquery-3.2.1.min.js') }}\" type=\"text/javascript\"></script>
\t <script src=\"{{ asset('js/modernizr.custom.34978.js') }}\" type=\"text/javascript\"></script>
\t <script type=\"text/javascript\">
\t\t\t\$(function() {
\t\t\t\t
\t\t\t\tvar \$container\t= \$('#ib-container'),
\t\t\t\t\t\$articles\t= \$container.children('article'),
\t\t\t\t\ttimeout;
\t\t\t\t
\t\t\t\t\$articles.on( 'mouseenter', function( event ) {
\t\t\t\t\t\t
\t\t\t\t\tvar \$article\t= \$(this);
\t\t\t\t\tclearTimeout( timeout );
\t\t\t\t\ttimeout = setTimeout( function() {
\t\t\t\t\t\t
\t\t\t\t\t\tif( \$article.hasClass('active') ) return false;
\t\t\t\t\t\t
\t\t\t\t\t\t\$articles.not( \$article.removeClass('blur').addClass('active') )
\t\t\t\t\t\t\t\t .removeClass('active')
\t\t\t\t\t\t\t\t .addClass('blur');
\t\t\t\t\t\t
\t\t\t\t\t}, 65 );
\t\t\t\t\t
\t\t\t\t});
\t\t\t\t
\t\t\t\t\$container.on( 'mouseleave', function( event ) {
\t\t\t\t\t
\t\t\t\t\tclearTimeout( timeout );
\t\t\t\t\t\$articles.removeClass('active blur');
\t\t\t\t\t
\t\t\t\t});
\t\t\t
\t\t\t});
\t\t</script>
\t{% endblock %}
</body>
</html>
", "::base.html.twig", "C:\\xampp\\htdocs\\EasyCooking\\app/Resources\\views/base.html.twig");
    }
}

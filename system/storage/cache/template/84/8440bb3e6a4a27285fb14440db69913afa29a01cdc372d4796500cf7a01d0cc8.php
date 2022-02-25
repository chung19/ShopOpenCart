<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* remart/template/extension/module/html.twig */
class __TwigTemplate_f5e6ff29c46748d6c6d7fae3c720c0c2943a112af85b416678f95ddcadf0536e extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "
";
        // line 2
        if (($context["heading_title"] ?? null)) {
            // line 3
            echo "  ";
        }
        // line 4
        echo "  ";
        echo ($context["html"] ?? null);
        echo "
<script type=\"text/javascript\">
    \$(document).ready(function() {
    \$(\"#testi";
        // line 7
        echo ($context["module"] ?? null);
        echo "\").owlCarousel({
    itemsCustom : [
    [0, 1]
    ],
      autoPlay: 1000000,
      animateIn: 'fadeIn',
      animateOut: 'fadeOut',
      loop: false,
      navigationText: ['<svg width=\"20px\" height=\"25px\"> <use xlink:href=\"#arrowleft\"></use> </svg>', '<svg width=\"20px\" height=\"25px\"> <use xlink:href=\"#arrowright\"></use> </svg>'],
      navigation : false,
      pagination:true
    });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "remart/template/extension/module/html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  45 => 4,  42 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/html.twig", "");
    }
}

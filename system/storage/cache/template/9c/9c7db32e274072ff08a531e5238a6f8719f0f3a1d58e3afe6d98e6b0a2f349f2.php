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

/* remart/template/extension/module/slideshow.twig */
class __TwigTemplate_0941d690d8bb15e48550212be01525b12054a4d9276c4ae57642b711ed1a83a8 extends \Twig\Template
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
        echo "<div class=\"smid snwidthslb s-panel\">
  <div class=\"loader wrloader\"></div>
  <div id=\"slideshow";
        // line 3
        echo ($context["module"] ?? null);
        echo "\" class=\"owl-carousel owl-theme slide\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 5
            echo "      <div>";
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 5)) {
                echo "<a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 5);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 5);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 5);
                echo "\" class=\"img-responsive\" /></a>";
            } else {
                echo "<img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 5);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 5);
                echo "\" class=\"img-responsive\" />";
            }
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </div>
</div>
<script type=\"text/javascript\">
    \$(document).ready(function() {
    \$(\"#slideshow";
        // line 11
        echo ($context["module"] ?? null);
        echo "\").owlCarousel({
    itemsCustom : [
    [0, 1]
    ],
      autoPlay: false,
      loop: false,
      navigationText: ['<i class=\"fa fa-angle-left\"></i>', '<i class=\"fa fa-angle-right\"></i>'],
      navigation : true,
      pagination: true,
      addClassActive:true
    });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "remart/template/extension/module/slideshow.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 11,  72 => 7,  49 => 5,  45 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/slideshow.twig", "");
    }
}

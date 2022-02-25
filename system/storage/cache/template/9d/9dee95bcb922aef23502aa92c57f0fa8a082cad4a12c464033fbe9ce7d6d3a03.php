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

/* remart/template/extension/module/carousel.twig */
class __TwigTemplate_f11661b33b7d72cdbeaa99eb38d25bfb76d92b3aeb8e4b2b911821cd00c15c68 extends \Twig\Template
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
        echo "<div class=\"manuf onspro col-xs-12\">
";
        // line 5
        echo "<div class=\"logosli col-xs-12\">
  <div id=\"carousel";
        // line 6
        echo ($context["module"] ?? null);
        echo "\" class=\"owl-carousel owl-theme carousel\">
    ";
        // line 7
        $context["temp"] = 0;
        // line 8
        $context["setCol"] = 2;
        // line 9
        echo "  ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["banners"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["banner"]) {
            // line 10
            echo "
  ";
            // line 11
            $context["temp"] = (($context["temp"] ?? null) + 1);
            // line 12
            echo "
  ";
            // line 13
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 1)) {
                // line 14
                echo "      <div class=\"multi-row\">
  ";
            }
            // line 16
            echo "  
    <div class=\"text-center col-xs-12 logosl\">
      <div class=\"dinfos\">
        ";
            // line 19
            if (twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 19)) {
                // line 20
                echo "        <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "link", [], "any", false, false, false, 20);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 20);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 20);
                echo "\" class=\"img-responsive\" /></a>
        ";
            } else {
                // line 22
                echo "        <img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "image", [], "any", false, false, false, 22);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["banner"], "title", [], "any", false, false, false, 22);
                echo "\" class=\"img-responsive\" />
      ";
            }
            // line 24
            echo "    </div>
</div>


    ";
            // line 28
            if (((($context["temp"] ?? null) % ($context["setCol"] ?? null)) == 0)) {
                // line 29
                echo "           </div> 
        ";
            }
            // line 31
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['banner'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
  ";
        // line 33
        if (((twig_length_filter($this->env, ($context["banners"] ?? null)) % ($context["setCol"] ?? null)) != 0)) {
            // line 34
            echo "    <!-- <h1>hii</h1> -->
        </div>
    ";
        }
        // line 37
        echo "

  
</div>
</div>
<script type=\"text/javascript\">
    \$(document).ready(function() {
    \$(\"#carousel";
        // line 44
        echo ($context["module"] ?? null);
        echo "\").owlCarousel({
    itemsCustom : [
    [0, 2],
    [480, 3],
    [576, 4],
    [768, 1],
    [992, 1],
    [1200, 1],
    [1600, 1]
    ],
      autoPlay: false,
      loop: true,
      navigationText: ['<i class=\"fa fa-angle-left\" aria-hidden=\"true\"></i>', '<i class=\"fa fa-angle-right\" aria-hidden=\"true\"></i>'],
      navigation : false,
      pagination:false
    });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "remart/template/extension/module/carousel.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 44,  123 => 37,  118 => 34,  116 => 33,  113 => 32,  107 => 31,  103 => 29,  101 => 28,  95 => 24,  87 => 22,  77 => 20,  75 => 19,  70 => 16,  66 => 14,  64 => 13,  61 => 12,  59 => 11,  56 => 10,  51 => 9,  49 => 8,  47 => 7,  43 => 6,  40 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/carousel.twig", "");
    }
}

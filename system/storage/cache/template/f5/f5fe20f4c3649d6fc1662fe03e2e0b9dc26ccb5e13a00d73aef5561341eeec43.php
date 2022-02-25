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

/* remart/template/extension/module/categorynew.twig */
class __TwigTemplate_11c0c94281c16cfe72645c4aa8900c353b0b025b6a67c64c3047de8bbc41ff4e extends \Twig\Template
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
        echo "   <!--  <h3 class=\"heading\">";
        echo ($context["heading_title"] ?? null);
        echo "</h3> -->
<div class=\"jd-2 next-prevb\">
<div id=\"featured_category\">
    <div class=\"hedco\">
        <div class=\"head-t heading\"> 
            <h4><svg width=\"15px\" height=\"15px\"><use xlink:href=\"#star\"></use></svg><span>";
        // line 6
        echo ($context["heading_title"] ?? null);
        echo "</span></h4><hr>
        </div> 
     <div class=\"category_module next-prev row\">
        <div id=\"cat-img\" class=\"owl-carousel owl-theme\">
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "                ";
            if ((twig_get_attribute($this->env, $this->source, $context["category"], "category_id", [], "any", false, false, false, 11) == ($context["category_id"] ?? null))) {
                // line 12
                echo "                    <div class=\"block-cat-wr col-xs-12\">
                        ";
                // line 13
                if (twig_get_attribute($this->env, $this->source, $context["category"], "image_name", [], "any", false, false, false, 13)) {
                    // line 14
                    echo "                            <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image_name", [], "any", false, false, false, 14);
                    echo "\" class=\"img-responsive center-block\" alt=\"\">
                        ";
                } else {
                    // line 16
                    echo "                            <img src=\"image/no_image.png\" class=\"img-responsive center-block cat-noimg\" alt=\"\">
                        ";
                }
                // line 18
                echo "                            <h4 class=\"text-center\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 18);
                echo "\" class=\"\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 18);
                echo "</a></h4>
                        </div>
                        ";
            } else {
                // line 21
                echo "                        <div class=\"col-xs-12 catsp\">
                            <div class=\"catf\">
                            <a href=\"";
                // line 23
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 23);
                echo "\" class=\"\">
                                <div class=\"ctimg block-cat-wr\">
                                    ";
                // line 25
                if (twig_get_attribute($this->env, $this->source, $context["category"], "image_name", [], "any", false, false, false, 25)) {
                    // line 26
                    echo "                                        <img class=\"img-responsive\" src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image_name", [], "any", false, false, false, 26);
                    echo "\" class=\"img-responsive center-block\" alt=\"\">
                                        ";
                } else {
                    // line 28
                    echo "                                        <img class=\"img-responsive\" src=\"image/no_image.png\" class=\"img-responsive center-block cat-noimg\" alt=\"\">
                                    ";
                }
                // line 30
                echo "                                      <div class=\"cat-wrd\">
                                    <span class=\"cate-bg\">";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 31);
                echo "</span>
                                </div> 
                                </div>
                            </a>
                            </div>

                    </div>
                        ";
            }
            // line 39
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </div>
    </div>
</div>
</div>
</div>
<script type=\"text/javascript\">
    \$(document).ready(function() {
    \$(\"#cat-img\").owlCarousel({
    itemsCustom : [
    [0, 2],
    [400, 3],
    [700, 4],
    [768, 3],
    [992, 3],
    [1200, 4],
    [1410, 5],
    [1600, 6]
    ],
      // autoPlay: 1000,
    navigationText: ['<i class=\"fa fa-angle-left\"></i>', '<i class=\"fa fa-angle-right\"></i>'],
      navigation : true,
      pagination: false
    });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "remart/template/extension/module/categorynew.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 40,  119 => 39,  108 => 31,  105 => 30,  101 => 28,  95 => 26,  93 => 25,  88 => 23,  84 => 21,  75 => 18,  71 => 16,  65 => 14,  63 => 13,  60 => 12,  57 => 11,  53 => 10,  46 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/categorynew.twig", "");
    }
}

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

/* remart/template/extension/module/blogger.twig */
class __TwigTemplate_a77c8bb41c0e2781a4691d41a9bd85dd887b628b0b8c4c485be8c800212d2aad extends \Twig\Template
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
        echo "<div class=\"next-prevb onspro\">
     <div class=\"container\">
<div class=\"box blog_webi\">
        <div class=\"head-t\">
            <h4 class=\"heading\"><svg width=\"15px\" height=\"15px\"><use xlink:href=\"#star\"></use></svg><span>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</span></h4><hr>
        </div>
        <div class=\"box-content row\">
            <div class=\"box-product\">
                <div id=\"blog\" class=\"owl-carousel owl-theme\">
                ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["blogs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["blog"]) {
            // line 11
            echo "                <div class=\"product-b col-xs-12\">
                    <div class=\"product-block\">
                        ";
            // line 13
            if (twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 13)) {
                // line 14
                echo "                            <div class=\"blog-left col-sm-5 col-xs-12\">
                                <div class=\"webi-blog-image\">
                                    <img src=\"";
                // line 16
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 16);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-responsive\" />
                                    <div class=\"blog-post-image-hover\"> </div>
                                    <div class=\"webi_post_hover\">
                                        <div class=\"blog-ic\">
                                        <!-- <a class=\"icon zoom\" title=\"Click to view Full Image \" href=\"";
                // line 20
                echo twig_get_attribute($this->env, $this->source, $context["blog"], "image", [], "any", false, false, false, 20);
                echo "\" data-lightbox=\"example-set\"><i class=\"fa fa-search-plus\" aria-hidden=\"true\"></i></a> -->
                                        <a class=\"icon readmore_link\" title=\"all blog\" href=\"";
                // line 21
                echo ($context["all_blogs"] ?? null);
                echo "\"><i class=\"fa fa-link\"></i></a>
                                        </div>
                                    </div>
                                </div>
                               
                            </div>
                        ";
            }
            // line 27
            echo "                           
                        <div class=\"blog-right col-sm-7 col-xs-12\">
                            <div class=\"bs\">
                                <div class=\"blogdt\">
                                <h4><a href=\"";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 31);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "title", [], "any", false, false, false, 31);
            echo "</a></h4>
                                 <div class=\"bdate\"><span class=\"date-time\"><svg width=\"15px\" height=\"15px\"><use xlink:href=\"#cal\"></use></svg>";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "date_added", [], "any", false, false, false, 32);
            echo "</span>
                                <div class=\"write-comment\"><span><i class=\"fa fa-comments-o\" aria-hidden=\"true\"></i><a href=\"";
            // line 33
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 33);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "total_comments", [], "any", false, false, false, 33);
            echo " ";
            echo ($context["entry_comment"] ?? null);
            echo "</a></span></div></div>
                                <div class=\"bl\">";
            // line 34
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "description", [], "any", false, false, false, 34);
            echo "</div>
                            </div> 

                                
                                <!--  <div class=\"read_link\"> <a href=\"";
            // line 38
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 38);
            echo "\">";
            echo ($context["text_read_more"] ?? null);
            echo "</a> </div> -->
                                    <div class=\"read-more\">
                                        <a class=\"rd-mr\" href=\"";
            // line 40
            echo twig_get_attribute($this->env, $this->source, $context["blog"], "href", [], "any", false, false, false, 40);
            echo "\">
                                            ";
            // line 41
            echo ($context["text_read_more"] ?? null);
            echo "
                                        </a>
                                    </div>
                                
                            </div>
                        </div>                       
                    </div>
                </div>   
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "            
            </div>
            </div>
    </div>
</div>
</div>
</div>
<script type=\"text/javascript\">
    \$(document).ready(function() {
    \$(\"#blog\").owlCarousel({
    itemsCustom : [
    [0, 1],
    [600, 2],
    [768, 2],
    [992, 2],
    [1200, 2],
    [1410, 2]
    ],
      // autoPlay: 1000,
      navigationText: ['<i class=\"fa fa-angle-left\"></i>', '<i class=\"fa fa-angle-right\"></i>'],
      navigation : true,
      pagination:false
    });
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "remart/template/extension/module/blogger.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 49,  132 => 41,  128 => 40,  121 => 38,  114 => 34,  106 => 33,  102 => 32,  96 => 31,  90 => 27,  80 => 21,  76 => 20,  65 => 16,  61 => 14,  59 => 13,  55 => 11,  51 => 10,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/blogger.twig", "");
    }
}

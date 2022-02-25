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

/* remart/template/extension/module/categorytab.twig */
class __TwigTemplate_efc7ad3304bbe329e3bac3c503a47d83fc2434037439cdf052ce6bcc4de53f8e extends \Twig\Template
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
        echo "<div class=\"cate-bg mb-2 categort-pro fnb\">
<div class=\"category-tab tabpro pro-nepr\">
    <!--category-tab-->
    
    <div class=\"cat-tab\">
     <div class=\"head-t\">
        <h4 class=\"heading-home\"><svg width=\"15px\" height=\"15px\"><use xlink:href=\"#star\"></use></svg><span>";
        // line 7
        echo ($context["tab_titlem"] ?? null);
        echo "</span></h4><hr>
      </div>
  <div class=\"row\">
      <div class=\"home-cat col-lg-3 col-md-3 col-sm-3 col-xs-12\" id=\"cat_tab\">
              <ul class=\"nav nav-tabs cattab\">
                ";
        // line 12
        $context["i"] = 0;
        // line 13
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 14
            echo "                  ";
            if ((($context["i"] ?? null) == 12)) {
                // line 15
                echo "                    <li class=\"wbview_more webTab\">
                       ";
                // line 16
                if (twig_get_attribute($this->env, $this->source, $context["category"], "image_name", [], "any", false, false, false, 16)) {
                    // line 17
                    echo "                            <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "image_name", [], "any", false, false, false, 17);
                    echo "\" class=\"img-responsive center-block\" alt=\"\">
                        ";
                } else {
                    // line 19
                    echo "                            <img src=\"image/no_image.png\" class=\"img-responsive center-block cat-noimg\" alt=\"\">
                        ";
                }
                // line 21
                echo "                            <h4 class=\"text-center\"><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 21);
                echo "\" class=\"\">";
                echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 21);
                echo "</a></h4>
                      <a class=\"\">
                        <div class=\"dots\"></div>
                        <span class=\"categoryName\">More</span>
                      </a>
                    </li>
                  </ul>
          <ul class=\"viewmore text-right\">
            ";
            }
            // line 30
            echo "             
                
                  ";
            // line 32
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 32) == 0)) {
                // line 33
                echo "                      ";
                $context["class"] = " class=\"active webTab\"";
                // line 34
                echo "                  ";
            } else {
                // line 35
                echo "                      ";
                $context["class"] = " class=\"webTab\"";
                // line 36
                echo "                  ";
            }
            // line 37
            echo "                  <li ";
            echo ($context["class"] ?? null);
            echo "><a href=\"#tab-";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 37);
            echo "\" data-toggle=\"tab\">";
            echo twig_get_attribute($this->env, $this->source, $context["category"], "category", [], "any", false, false, false, 37);
            echo "</a></li>
                  ";
            // line 38
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 39
            echo "              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "          </ul>
      </div>
<!--     </div> -->
    <div class=\"tab-content home-tab col-lg-9 col-md-9 col-sm-9 col-xs-12\">
        ";
        // line 44
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["products"]) {
            // line 45
            echo "            ";
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 45) == 0)) {
                // line 46
                echo "                ";
                $context["class"] = " active in";
                // line 47
                echo "            ";
            } else {
                // line 48
                echo "                ";
                $context["class"] = "";
                // line 49
                echo "            ";
            }
            // line 50
            echo "            <div class=\"tab-pane fade";
            echo ($context["class"] ?? null);
            echo " row\" id=\"tab-";
            echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 50);
            echo "\">
                <div id=\"cattab\" class=\"\">
                    ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["products"], "products", [], "any", false, false, false, 52));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 53
                echo "                        <div class=\"product-layout col-xs-12\">
                             <div class=\"product-thumb transition\">
                                <div class=\"image\">
                                    <div class=\"hoverbg\">
                                        
                                          <!-- Webiarch Images Start -->
                                            <div class=\"owl-catadditional\">
                                              <a href=\"";
                // line 60
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 60);
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", [], "any", false, false, false, 60);
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 60);
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 60);
                echo "\" class=\"img-responsive center-block\" /></a>
                                              ";
                // line 61
                $context["t"] = 0;
                // line 62
                echo "                                              ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "more_images", [], "any", false, false, false, 62));
                foreach ($context['_seq'] as $context["_key"] => $context["more_image"]) {
                    // line 63
                    echo "                                              ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["more_image"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["pop"]) {
                        // line 64
                        echo "                                              ";
                        if ((($context["t"] ?? null) == 0)) {
                            // line 65
                            echo "                                                <a href=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 65);
                            echo "\"><img src=\"";
                            echo twig_get_attribute($this->env, $this->source, $context["pop"], "popup_more", [], "any", false, false, false, 65);
                            echo "\" class=\"img-responsive second-img\" alt=\"hover image\"/></a>
                                                ";
                            // line 66
                            $context["t"] = (($context["t"] ?? null) + 1);
                            // line 67
                            echo "                                            ";
                        }
                        // line 68
                        echo "                                              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pop'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 69
                    echo "                                              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['more_image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 70
                echo "                                            </div>

                                          <!-- End -->
                                          ";
                // line 77
                echo "                                    </div>
                                </div>
      <div class=\"caption text-center\">
      <div class=\"opbtn\">

         <div class=\"col-xs-12 rat\">
        ";
                // line 83
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 83)) {
                    // line 84
                    echo "          <div class=\"rating text-center\">
            ";
                    // line 85
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 86
                        echo "            ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", [], "any", false, false, false, 86) < $context["i"])) {
                            // line 87
                            echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                        } else {
                            // line 91
                            echo "            <span class=\"fa fa-stack\">
              <i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i>
            </span>
            ";
                        }
                        // line 95
                        echo "          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "</div>";
                } else {
                    // line 96
                    echo "          <div class=\"rating text-center\">";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 97
                        echo "          <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 98
                    echo "</div>
        ";
                }
                // line 100
                echo "      </div>

       <h4  class=\"col-xs-12 protitle\"><a href=\"";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", [], "any", false, false, false, 102);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", [], "any", false, false, false, 102);
                echo "</a></h4>

         ";
                // line 104
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 104)) {
                    // line 105
                    echo "        <div class=\"price col-xs-12 text-center\">
          ";
                    // line 106
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 106)) {
                        // line 107
                        echo "          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 107);
                        echo "
          ";
                    } else {
                        // line 109
                        echo "          <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", [], "any", false, false, false, 109);
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", [], "any", false, false, false, 109);
                        echo "</span>
          ";
                    }
                    // line 111
                    echo "         ";
                    // line 114
                    echo "        </div>
        ";
                }
                // line 116
                echo "      </div>
       
  <div class=\"button-group\">
      <div class=\"absbtn\">
        <div class=\"wish\"><button type=\"button\" title=\"";
                // line 120
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 120);
                echo "');\" class=\"bwish\"><svg width=\"19px\" height=\"19px\"><use xlink:href=\"#pwish\"></use></svg>";
                echo "</button></div>
        <div class=\"view\"><button type=\"button\" title=\"";
                // line 121
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 121);
                echo "');\" class=\"bcom\"><svg width=\"16px\" height=\"16px\"><use xlink:href=\"#pcom\"></use></svg>";
                echo "</button></div>
       <div class=\"bquickv\" title=\"Quickview\"> </div> 
      <button type=\"button\"  onclick=\"cart.add('";
                // line 123
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 123);
                echo "');\" class=\"cartb\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#pcart\"></use></svg><span>
      ";
                // line 124
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
      </div>
    </div>

     <div class=\"extra-button\">
      <button type=\"button\"  onclick=\"cart.add('";
                // line 129
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", [], "any", false, false, false, 129);
                echo "');\" class=\"cartb\"><svg width=\"18px\" height=\"17px\"><use xlink:href=\"#pcart\"></use></svg><span>
      ";
                // line 130
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
        <div class=\"bquickv\" title=\"Quickview\"> </div> 
    </div> 
      </div>
                             </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 137
            echo "                </div>
            </div>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['products'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "    </div>
</div>
</div>
</div>  
</div>
<!--/category-tab-->

<script type=\"text/javascript\">
    \$(document).ready(function() {

    \$('.tab-content .tab-pane #cattab').slick({
  dots: false,
  infinite: false,
  arrows: true,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  rows:1,
  responsive: [
    {
      breakpoint: 1600,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 1410,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 1
      }
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2
      }
    },{
      breakpoint: 420,
      settings: {
        slidesToShow: 2
      }
    },
    {
      breakpoint: 320,
      settings: {
        slidesToShow: 2
      }
    }
  ]
});
    });

  \$(document).ready(function() {
    \$('.cattab').slick({
  dots: false,
  arrows: false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  rows: 7,
  responsive: [
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 3,
      rows:2
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
      rows:2
      }
    },
    {
      breakpoint: 320,
      settings: {
        slidesToShow: 2,
        rows:2
      }
    }
  ]
});
    });
</script>";
    }

    public function getTemplateName()
    {
        return "remart/template/extension/module/categorytab.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 140,  406 => 137,  393 => 130,  389 => 129,  381 => 124,  377 => 123,  369 => 121,  362 => 120,  356 => 116,  352 => 114,  350 => 111,  342 => 109,  336 => 107,  334 => 106,  331 => 105,  329 => 104,  322 => 102,  318 => 100,  314 => 98,  307 => 97,  302 => 96,  294 => 95,  288 => 91,  282 => 87,  279 => 86,  275 => 85,  272 => 84,  270 => 83,  262 => 77,  257 => 70,  251 => 69,  245 => 68,  242 => 67,  240 => 66,  233 => 65,  230 => 64,  225 => 63,  220 => 62,  218 => 61,  208 => 60,  199 => 53,  195 => 52,  187 => 50,  184 => 49,  181 => 48,  178 => 47,  175 => 46,  172 => 45,  155 => 44,  149 => 40,  135 => 39,  133 => 38,  124 => 37,  121 => 36,  118 => 35,  115 => 34,  112 => 33,  110 => 32,  106 => 30,  91 => 21,  87 => 19,  81 => 17,  79 => 16,  76 => 15,  73 => 14,  55 => 13,  53 => 12,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/categorytab.twig", "");
    }
}

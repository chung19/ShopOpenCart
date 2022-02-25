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

/* remart/template/extension/module/category.twig */
class __TwigTemplate_ae9fe63332e6c83f62f05301c547d96fd851429cbf443e36706a3d5ea7e533a9 extends \Twig\Template
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
        if (($context["categories"] ?? null)) {
            // line 2
            echo "  <nav id=\"menu\" class=\"navbar\">
    <div class=\"navbar-header hidden-sm\">
      <button type=\"button\" class=\"btn-navbar navbar-toggle\" onclick=\"openNav()\" data-toggle=\"collapse\" data-target=\".navbar-ex1-collapse\"><i class=\"fa fa-bars\"></i></button>
    </div>
    <div id=\"pt_vegamenu\" class=\"title-menu wr-left-menu hidden-xs\">
      <div id=\"wr-menu-icon\">
            <div class=\"wr-menu\" data-toggle=\"collapse\" data-target=\"#under-menu\">
                <button class=\"btn-navbar navbar-toggle\" type=\"button\" data-toggle=\"collapse\">
                  <div class=\"ico-menu\">
                    <div class=\"bar\"></div>
                    <div class=\"bar\"></div>
                    <div class=\"bar\"></div>
                  </div>
                </button>
                <span class=\"cate\">all category</span><i class=\"fa fa-angle-down pull-right\"></i>
            </div>
        </div>
      </div>
    
<div id=\"mySidenav\" class=\"sidenav\">
  <div class=\"cate-menu collapse\" id=\"under-menu\">
   <div class=\"close-nav hidden-md hidden-lg hidden-xl hidden-sm\">
      <span class=\"categories\">";
            // line 24
            echo ($context["text_category"] ?? null);
            echo "</span>
      <a href=\"javascript:void(0)\" class=\"closebtn pull-right\" onclick=\"closeNav()\"><i class=\"fa fa-close\"></i></a>
  </div>
    <div class=\"collapse navbar-collapse navbar-ex1-collapse\">
      <ul class=\"nav navbar-nav\">
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 30
                echo "        ";
                if (twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "        <li class=\"dropdown m-menu\">
           <div class=\"thumb_img pull-left\">
            <img src=\"";
                    // line 33
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb_menu", [], "any", false, false, false, 33);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 33);
                    echo "\">
          </div>
          <a href=\"";
                    // line 35
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 35);
                    echo "\" class=\"dropdown-toggle header-menu\" data-toggle=\"dropdown\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 35);
                    echo "<i class=\"fa fa-angle-down pull-right\"></i></a>
          <div class=\"dropdown-menu\">
            <div class=\"dropdown-inner\"> ";
                    // line 37
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_array_batch(twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 37), (twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "children", [], "any", false, false, false, 37)) / twig_round(twig_get_attribute($this->env, $this->source, $context["category"], "column", [], "any", false, false, false, 37), 1, "ceil"))));
                    foreach ($context['_seq'] as $context["_key"] => $context["children"]) {
                        // line 38
                        echo "              <ul class=\"list-unstyled\">
                ";
                        // line 39
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["children"]);
                        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                            // line 40
                            echo "                <!--3rd level-->
                    <li class=\"dropdown-submenu\"> <a href=\"";
                            // line 41
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "href", [], "any", false, false, false, 41);
                            echo "\" class=\"submenu-title\"> ";
                            echo twig_get_attribute($this->env, $this->source, $context["child"], "name", [], "any", false, false, false, 41);
                            echo " </a>
                      ";
                            // line 42
                            if (twig_get_attribute($this->env, $this->source, $context["child"], "grand_childs", [], "any", false, false, false, 42)) {
                                // line 43
                                echo "                      <ul class=\"list-unstyled grand-child\">
                        ";
                                // line 44
                                $context['_parent'] = $context;
                                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["child"], "grand_childs", [], "any", false, false, false, 44));
                                foreach ($context['_seq'] as $context["_key"] => $context["grand_child"]) {
                                    // line 45
                                    echo "                        <li> <a href=\"";
                                    echo twig_get_attribute($this->env, $this->source, $context["grand_child"], "href", [], "any", false, false, false, 45);
                                    echo "\"> ";
                                    echo twig_get_attribute($this->env, $this->source, $context["grand_child"], "name", [], "any", false, false, false, 45);
                                    echo " </a> </li>
                        ";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['grand_child'], $context['_parent'], $context['loop']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 47
                                echo "                      </ul>
                      ";
                            }
                            // line 49
                            echo "                    </li>
                    <!--3rd level over-->
                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 52
                        echo "              </ul>
              ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['children'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 53
                    echo "</div>
            <a href=\"";
                    // line 54
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 54);
                    echo "\" class=\"see-all hidden-md hidden-lg hidden-sm\">";
                    echo ($context["text_all"] ?? null);
                    echo " ";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 54);
                    echo "</a> </div>
        </li>
        ";
                } else {
                    // line 57
                    echo "        <li class=\"m-menu\">
           <div class=\"thumb_img pull-left\">
            <img src=\"";
                    // line 59
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "thumb_menu", [], "any", false, false, false, 59);
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 59);
                    echo "\">
          </div>
          <a href=\"";
                    // line 61
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", [], "any", false, false, false, 61);
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 61);
                    echo "</a></li>
        ";
                }
                // line 63
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "      </ul>
    </div>
  </div>
  </div>
  </nav>
";
        }
        // line 69
        echo " 


<script type=\"text/javascript\">
 function headermenu() {
     if (jQuery(window).width() < 768)
     {
         jQuery('ul.nav li.dropdown a.header-menu').attr(\"data-toggle\",\"dropdown\");        
     }
     else
     {
         jQuery('ul.nav li.dropdown a.header-menu').attr(\"data-toggle\",\"\"); 
     }
}
\$(document).ready(function(){headermenu();});
jQuery(window).resize(function() {headermenu();});
jQuery(window).scroll(function() {headermenu();});
</script>";
    }

    public function getTemplateName()
    {
        return "remart/template/extension/module/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 69,  192 => 64,  186 => 63,  179 => 61,  172 => 59,  168 => 57,  158 => 54,  155 => 53,  148 => 52,  140 => 49,  136 => 47,  125 => 45,  121 => 44,  118 => 43,  116 => 42,  110 => 41,  107 => 40,  103 => 39,  100 => 38,  96 => 37,  89 => 35,  82 => 33,  78 => 31,  75 => 30,  71 => 29,  63 => 24,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/extension/module/category.twig", "");
    }
}

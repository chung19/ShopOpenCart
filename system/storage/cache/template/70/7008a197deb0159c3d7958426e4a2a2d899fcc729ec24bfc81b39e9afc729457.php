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

/* remart/template/common/footer.twig */
class __TwigTemplate_99afbd4c53281357c924b676b943841dd61a353ae980ccb07a4675b878030c91 extends \Twig\Template
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
        echo ($context["ftop_full"] ?? null);
        echo "
<footer>

    <div class=\"middle-footer\">
      <div class=\"container\">
        <div class=\"row\">


    ";
        // line 10
        if ((($context["footer_left"] ?? null) && ($context["footer_right"] ?? null))) {
            // line 11
            echo "    ";
            $context["class"] = "col-sm-8";
            // line 12
            echo "    ";
        } elseif ((($context["footer_left"] ?? null) || ($context["footer_right"] ?? null))) {
            // line 13
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 14
            echo "    ";
        } else {
            // line 15
            echo "    ";
            $context["class"] = "col-sm-12";
            // line 16
            echo "    ";
        }
        // line 17
        echo "   ";
        echo ($context["footer_left"] ?? null);
        echo "
<div class=\"addnews\"></div>


      <div class=\"col-md-6 col-sm-6 col-xs-12 app\">

      ";
        // line 23
        if (($context["informations"] ?? null)) {
            // line 24
            echo "      <div class=\"col-md-4 col-sm-4 col-xs-12 fborder\">
        <h5>";
            // line 25
            echo ($context["text_information"] ?? null);
            echo "
          <button type=\"button\" class=\"btn toggle collapsed\" data-toggle=\"collapse\" data-target=\"#info\"></button>
        </h5>
        <div id=\"info\" class=\"collapse footer-collapse\">
        <ul class=\"list-unstyled\">
         ";
            // line 30
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["informations"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["information"]) {
                // line 31
                echo "          <li><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "href", [], "any", false, false, false, 31);
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["information"], "title", [], "any", false, false, false, 31);
                echo "</a></li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['information'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "        </ul>
        </div>
      </div>
      ";
        }
        // line 36
        echo " 
      <div class=\"col-md-4 col-sm-4 col-xs-12 fborder\">
        <h5>";
        // line 38
        echo ($context["text_company"] ?? null);
        echo "
          <button type=\"button\" class=\"btn toggle collapsed\" data-toggle=\"collapse\" data-target=\"#accountf\"></button>
        </h5>
        <div id=\"accountf\" class=\"collapse footer-collapse\">
        <ul class=\"list-unstyled lastb\">
          <li><a href=\"";
        // line 43
        echo ($context["account"] ?? null);
        echo "\">";
        echo ($context["text_account"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 44
        echo ($context["order"] ?? null);
        echo "\">";
        echo ($context["text_order"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 45
        echo ($context["wishlist"] ?? null);
        echo "\">";
        echo ($context["text_wishlist"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 46
        echo ($context["newsletter"] ?? null);
        echo "\">";
        echo ($context["text_newsletter"] ?? null);
        echo "</a></li>
          ";
        // line 49
        echo "
        </ul>
        </div>
      </div>
   

      <div class=\"col-md-4 col-sm-4 col-xs-12 fborder\">
        <h5>";
        // line 56
        echo ($context["text_category"] ?? null);
        echo "
          <button type=\"button\" class=\"btn toggle collapsed\" data-toggle=\"collapse\" data-target=\"#propage\"></button>
        </h5>
        <div id=\"propage\" class=\"collapse footer-collapse\">
        <ul class=\"list-unstyled lastb\">
          <li><a href=\"";
        // line 61
        echo ($context["contact"] ?? null);
        echo "\">";
        echo ($context["text_contact"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 62
        echo ($context["return"] ?? null);
        echo "\">";
        echo ($context["text_return"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 63
        echo ($context["sitemap"] ?? null);
        echo "\">";
        echo ($context["text_sitemap"] ?? null);
        echo "</a></li>
          <li><a href=\"";
        // line 64
        echo ($context["voucher"] ?? null);
        echo "\">";
        echo ($context["text_voucher"] ?? null);
        echo "</a></li>
           ";
        // line 66
        echo "          
        </ul>
        </div>
      </div>
       </div>
      <div class=\"newsblock\">";
        // line 71
        echo ($context["fbottom_full"] ?? null);
        echo "</div>
    </div>  
    </div>
</div>

<div class=\"botom-ful\">
<div class=\"container\">
<div class=\"row\">
<div class=\"col-xs-12 powerd\">";
        // line 79
        echo ($context["powered"] ?? null);
        echo "</div>
";
        // line 80
        echo ($context["footer_right"] ?? null);
        echo "
</div>
</div>
</div>

</footer>
<a href=\"\" id=\"scroll\" title=\"Scroll to Top\" style=\"display: block;\">
<svg width=\"23px\" height=\"20px\"> <use xlink:href=\"#gototop\"></use></svg>
</a>
";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["scripts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["script"]) {
            // line 90
            echo "<script src=\"";
            echo $context["script"];
            echo "\" type=\"text/javascript\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['script'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "<!--
OpenCart is open source software and you are free to remove the powered by OpenCart if you want, but its generally accepted practise to make a small donation.
Please donate via PayPal to donate@opencart.com
//-->
</body></html>";
    }

    public function getTemplateName()
    {
        return "remart/template/common/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 92,  230 => 90,  226 => 89,  214 => 80,  210 => 79,  199 => 71,  192 => 66,  186 => 64,  180 => 63,  174 => 62,  168 => 61,  160 => 56,  151 => 49,  145 => 46,  139 => 45,  133 => 44,  127 => 43,  119 => 38,  115 => 36,  109 => 33,  98 => 31,  94 => 30,  86 => 25,  83 => 24,  81 => 23,  71 => 17,  68 => 16,  65 => 15,  62 => 14,  59 => 13,  56 => 12,  53 => 11,  51 => 10,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "remart/template/common/footer.twig", "");
    }
}

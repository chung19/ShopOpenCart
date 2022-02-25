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

/* default/template/extension/module/facebook_business.twig */
class __TwigTemplate_5bf534a0be8b04d0094e802e40ed8f2f5de4b8987c5669957d5c48b87803306b extends \Twig\Template
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
        echo "<!-- Copyright (c) Facebook, Inc. and its affiliates. -->
<!-- All rights reserved. -->

<!-- This source code is licensed under the license found in the -->
<!-- LICENSE file in the root directory of this source tree. -->
<script type=\"text/javascript\">
  // we are using this flag to determine if the pixel
  // is successfully added to the header
  window.isFacebookPixelInHeaderAdded = 1;
  window.isFacebookPixelAdded=1;
</script>

<script type=\"text/javascript\">
  function facebook_loadScript(url, callback) {
    var script = document.createElement(\"script\");
    script.type = \"text/javascript\";
    if(script.readyState) {  // only required for IE <9
      script.onreadystatechange = function() {
        if (script.readyState === \"loaded\" || script.readyState === \"complete\") {
          script.onreadystatechange = null;
          if (callback) {
            callback();
          }
        }
      };
    } else {  //Others
      if (callback) {
        script.onload = callback;
      }
    }

    script.src = url;
    document.getElementsByTagName(\"head\")[0].appendChild(script);
  }
</script>

<script type=\"text/javascript\">
  (function() {
    var enableCookieBar = '";
        // line 39
        echo ($context["facebook_cookie_bar_status"] ?? null);
        echo "';
    if (enableCookieBar == '1') {
      facebook_loadScript(\"catalog/view/javascript/facebook_business/cookieconsent.min.js\");

      // loading the css file
      var css = document.createElement(\"link\");
      css.setAttribute(\"rel\", \"stylesheet\");
      css.setAttribute(\"type\", \"text/css\");
      css.setAttribute(
        \"href\",
        \"catalog/view/theme/css/facebook_business/cookieconsent.min.css\");
      document.getElementsByTagName(\"head\")[0].appendChild(css);

      window.addEventListener(\"load\", function(){
        function setConsent() {
          fbq(
            'consent',
            this.hasConsented() ? 'grant' : 'revoke'
          );
        }
        window.cookieconsent.initialise({
          palette: {
            popup: {
              background: '#237afc'
            },
            button: {
              background: '#fff',
              text: '#237afc'
            }
          },
          cookie: {
            name: fbq.consentCookieName
          },
          type: 'opt-out',
          showLink: false,
          content: {
            allow: '";
        // line 75
        echo ($context["cookie_bar_opt_in"] ?? null);
        echo "',
            deny: '";
        // line 76
        echo ($context["cookie_bar_opt_out"] ?? null);
        echo "',
            header: '";
        // line 77
        echo ($context["cookie_bar_header"] ?? null);
        echo "',
            message: '";
        // line 78
        echo ($context["cookie_bar_description"] ?? null);
        echo "'
          },
          layout: 'basic-header',
          location: true,
          revokable: true,
          onInitialise: setConsent,
          onStatusChange: setConsent,
          onRevokeChoice: setConsent
        }, function (popup) {
          // If this isn't open, we know that we can use cookies.
          if (!popup.getStatus() && !popup.options.enabled) {
            popup.setStatus(cookieconsent.status.dismiss);
          }
        });
      });
    }
  })();
</script>

<script type=\"text/javascript\">
  (function() {
    !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
    n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
    document,'script','https://connect.facebook.net/en_US/fbevents.js');

    var enableCookieBar = '";
        // line 105
        echo ($context["facebook_cookie_bar_status"] ?? null);
        echo "';
    if (enableCookieBar == '1') {
      fbq.consentCookieName = 'fb_cookieconsent_status';

      (function() {
        function getCookie(t){var i=(\"; \"+document.cookie).split(\"; \"+t+\"=\");if(2==i.length)return i.pop().split(\";\").shift()}
        var consentValue = getCookie(fbq.consentCookieName);
        fbq('consent', consentValue === 'dismiss' ? 'grant' : 'revoke');
      })();
    }

    ";
        // line 116
        if (($context["facebook_pixel_id"] ?? null)) {
            // line 117
            echo "      // system auto generated facebook_pixel.js, DO NOT MODIFY
      pixel_script_filename = 'catalog/view/javascript/facebook_business/facebook_pixel_3_1_2.js';
      // system auto generated facebook_pixel.js, DO NOT MODIFY
      facebook_loadScript(
        pixel_script_filename,
        function() {
          var params = ";
            // line 123
            echo ($context["facebook_pixel_params"] ?? null);
            echo ";
          _facebookAdsExtension.facebookPixel.init(
            '";
            // line 125
            echo ($context["facebook_pixel_id"] ?? null);
            echo "',
            ";
            // line 126
            echo ($context["facebook_pixel_pii"] ?? null);
            echo ",
            params);
          ";
            // line 128
            if (($context["facebook_pixel_event_params"] ?? null)) {
                // line 129
                echo "            _facebookAdsExtension.facebookPixel.firePixel(
              JSON.parse('";
                // line 130
                echo ($context["facebook_pixel_event_params"] ?? null);
                echo "'));
          ";
            }
            // line 132
            echo "        });
    ";
        }
        // line 134
        echo "  })();
</script>

<script type=\"text/javascript\">
  // we are using this flag to determine if the customer chat
  // is successfully added to the header
  window.isFacebookCustomerChatInHeaderAdded = 1;
  window.isFacebookCustomerChatAdded=1;
</script>

";
        // line 144
        if ((($context["facebook_messenger_enabled"] ?? null) == "true")) {
            // line 145
            echo "<!-- Facebook JSSDK -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v10.0'
    });
  };

  (function(d, s, id){
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) {return;}
      js = d.createElement(s); js.id = id;
      js.src = \"https://connect.facebook.net/";
            // line 160
            echo ($context["facebook_customization_locale"] ?? null);
            echo "/sdk/xfbml.customerchat.js\";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div
  id=\"fb-customerchat-header\"
  class=\"fb-customerchat\"
  attribution=\"fbe_opencart\"
  page_id=\"";
            // line 168
            echo ($context["facebook_page_id"] ?? null);
            echo "\">
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/extension/module/facebook_business.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 168,  241 => 160,  224 => 145,  222 => 144,  210 => 134,  206 => 132,  201 => 130,  198 => 129,  196 => 128,  191 => 126,  187 => 125,  182 => 123,  174 => 117,  172 => 116,  158 => 105,  128 => 78,  124 => 77,  120 => 76,  116 => 75,  77 => 39,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default/template/extension/module/facebook_business.twig", "");
    }
}

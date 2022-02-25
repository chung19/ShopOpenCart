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

/* extension/module/facebook_business.twig */
class __TwigTemplate_df6dd1467c99e1005be63d7e88be342c94895628946495c86c671c3c34c607df extends \Twig\Template
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
";
        // line 6
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"pull-right\">
        <button type=\"submit\" form=\"form-facebook-business\" data-toggle=\"tooltip\" title=\"";
        // line 11
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fa fa-save\"></i></button>
        <a href=\"";
        // line 12
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-default\"><i class=\"fa fa-reply\"></i></a></div>
      <h1>";
        // line 13
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ul class=\"breadcrumb\">
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 16
            echo "        <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 16);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 16);
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "      </ul>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 22
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 27
        echo "    ";
        if (($context["error_maintenance_mode"] ?? null)) {
            // line 28
            echo "    <div class=\"alert alert-danger\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_maintenance_mode"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
    ";
        }
        // line 32
        echo "    <div class=\"panel panel-default\">
      <div class=\"panel-heading\">
        <h3 class=\"panel-title\"><i class=\"fa fa-pencil\"></i> ";
        // line 34
        echo ($context["text_edit"] ?? null);
        echo "</h3>
      </div>
      <div class=\"panel-body\">
        <form action=\"";
        // line 37
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-facebook-business\" class=\"form-horizontal\">
          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-connection\" data-toggle=\"tab\">";
        // line 39
        echo ($context["tab_connection"] ?? null);
        echo "</a></li>
            <li><a href=\"#tab-settings\" data-toggle=\"tab\">";
        // line 40
        echo ($context["tab_settings"] ?? null);
        echo "</a></li>
          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-connection\">
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 45
        echo ($context["text_connection"] ?? null);
        echo "</h3></div>
                <div class=\"panel-body\">
                  <div id=\"facebook-info\">
                    <img src=\"view/image/facebook_business/f_logo.png\" alt=\"Facebook\" title=\"Facebook\" width=\"60px\" class=\"img-responsive\" /><br />
                    <h3>";
        // line 49
        echo ($context["text_heading"] ?? null);
        echo "</h3>
                    <p><i class=\"fa fa-puzzle-piece\"></i> ";
        // line 50
        echo ($context["text_info_1"] ?? null);
        echo "</p>
                    <p><i class=\"fa fa-pie-chart\"></i> ";
        // line 51
        echo ($context["text_info_2"] ?? null);
        echo "</p>
                    <p><i class=\"fa fa-cart-plus\"></i> ";
        // line 52
        echo ($context["text_info_3"] ?? null);
        echo "</p>
                  </div>
                  <iframe id=\"fbIframe\" src=\"";
        // line 54
        echo ($context["opencart_iframe_url"] ?? null);
        echo "\" width=\"100%\" height=\"150\" frameBorder=\"0\"></iframe>
                </div>
              </div>
              ";
        // line 57
        if (($context["access_token"] ?? null)) {
            // line 58
            echo "              <div class=\"panel panel-default\">
                <div class=\"panel-heading\"><h3 class=\"panel-title\">";
            // line 59
            echo ($context["text_ads_creation"] ?? null);
            echo "</h3></div>
                <div class=\"panel-body\">
                  <div class=\"fb-lwi-ads-creation\" 
                      data-fbe-extras=
                      \"{
                            'business_config' : {
                                'business': {
                                    'name':'";
            // line 66
            echo ($context["business_name"] ?? null);
            echo "'
                                }
                            },
                            'setup'             : {
                                'external_business_id' : '";
            // line 70
            echo ($context["external_business_id"] ?? null);
            echo "',
                                'timezone'             : '";
            // line 71
            echo ($context["timezone"] ?? null);
            echo "',
                                'currency'             : '";
            // line 72
            echo ($context["currency"] ?? null);
            echo "',
                                'business_vertical'    : 'ECOMMERCE'
                            },
                            'repeat'            : false
                        }\"
                        data-fbe-scopes=\"manage_business_extension,ads_management,catalog_management\"
                        data-fbe-redirect-uri='";
            // line 78
            echo ($context["redirect_uri"] ?? null);
            echo "'>
                  </div>
                </div>
              </div>
              <div class=\"panel panel-default\">
                <div class=\"panel-heading\"><h3 class=\"panel-title\">";
            // line 83
            echo ($context["text_ads_insights"] ?? null);
            echo "</h3></div>
                <div class=\"panel-body\">
                  <div class=\"fb-lwi-ads-insights\" 
                      data-fbe-extras=
                      \"{
                            'business_config'   : {
                                'business' : {
                                    'name' : '";
            // line 90
            echo ($context["business_name"] ?? null);
            echo "'
                                }
                            },
                            'setup'             : {
                                'external_business_id' : '";
            // line 94
            echo ($context["external_business_id"] ?? null);
            echo "',
                                'timezone'             : '";
            // line 95
            echo ($context["timezone"] ?? null);
            echo "',
                                'currency'             : '";
            // line 96
            echo ($context["currency"] ?? null);
            echo "',
                                'business_vertical'    : 'ECOMMERCE'
                            },
                            'repeat'            : false
                      }\"
                      data-fbe-scopes=\"manage_business_extension,ads_management,catalog_management\"
                      data-fbe-redirect-uri='";
            // line 102
            echo ($context["redirect_uri"] ?? null);
            echo "'>
                  </div>
                </div>
              </div>
              ";
        }
        // line 107
        echo "              <div class=\"text-left\"><p><small>";
        echo ($context["text_plugin_version"] ?? null);
        echo "</small></p></div>
            </div>
            <div class=\"tab-pane\" id=\"tab-settings\">
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-cookie-bar\">";
        // line 111
        echo ($context["entry_cookie_bar"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <select name=\"module_facebook_business_cookie_bar_status\" id=\"input-cookie-bar\" class=\"form-control\">
                    ";
        // line 114
        if (($context["module_facebook_business_cookie_bar_status"] ?? null)) {
            // line 115
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 116
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 118
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 119
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 121
        echo "                  </select>
                </div>
              </div>
              <div class=\"form-group\">
                <label class=\"col-sm-2 control-label\" for=\"input-sync-specials\"><span data-toggle=\"tooltip\" data-container=\"#tab-settings\" title=\"";
        // line 125
        echo ($context["help_sync_specials"] ?? null);
        echo "\">";
        echo ($context["entry_sync_specials"] ?? null);
        echo "</span></label>
                <div class=\"col-sm-10\">
                  <select name=\"module_facebook_business_sync_specials_status\" id=\"input-sync-specials\" class=\"form-control\">
                    ";
        // line 128
        if (($context["module_facebook_business_sync_specials_status"] ?? null)) {
            // line 129
            echo "                    <option value=\"1\" selected=\"selected\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\">";
            // line 130
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        } else {
            // line 132
            echo "                    <option value=\"1\">";
            echo ($context["text_enabled"] ?? null);
            echo "</option>
                    <option value=\"0\" selected=\"selected\">";
            // line 133
            echo ($context["text_disabled"] ?? null);
            echo "</option>
                    ";
        }
        // line 135
        echo "                  </select>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 145
        echo ($context["footer"] ?? null);
        echo "
<style>
#facebook-info h3 {
    padding-top: 10px;
    padding-bottom: 10px;
    font-weight: 700;
}
#facebook-info p {
    font-size: 16px;
}
</style>
<script type=\"text/javascript\">
window.fbAsyncInit = function() {
    // FB JavaScript SDK configuration and setup
    FB.init({
        appId      : '";
        // line 160
        echo ($context["facebook_app_id"] ?? null);
        echo "', // FB App ID
        cookie     : true,  // enable cookies to allow the server to access the session
        xfbml      : true,  // parse social plugins on this page
        version    : 'v10.0' // uses graph api version v10.0
    });
};

// Load the JavaScript SDK asynchronously
(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = \"https://connect.facebook.net/en_US/sdk.js\";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

(function() {
  window.facebookAdsToolboxConfig = {
    token_string: \"";
        // line 178
        echo ($context["user_token"] ?? null);
        echo "\",
    error_message: \"\"
  };
  var eventMethod = window.addEventListener ? \"addEventListener\" : \"attachEvent\";
  var messageEvent = eventMethod === \"attachEvent\" ? \"onmessage\" : \"message\";
  window.addEventListener(messageEvent, receiveMessage);
})();

function receiveMessage(e) {
  return new Promise(function(resolve, reject) {
    if(e.origin === \"";
        // line 188
        echo ($context["opencart_server_base_url"] ?? null);
        echo "\" && e.data) {
      var message = JSON.parse(e.data);
      if(!message.success && message.error_message) {
        reject(new Error(message.error_message));
      } else if(message.installed) {
        // installed
        if(!message.pixel_id || !message.profiles || !message.profiles[0]) {
          var messageStr = JSON.stringify(message);
          reject(new Error(`An error occured when creating Facebook Business Extension setup. \${messageStr}`));
        } else {
          var settings = {
            facebook_pixel_id: message.pixel_id,
            facebook_page_id: message.profiles[0],
            facebook_fbe_v2_installed: message.installed,
            facebook_system_user_access_token: message.system_user_access_token,
            facebook_jssdk_version: 'v10.0',
            facebook_messenger_activated: false
          };
          resolve(settings);
        }
      } else if(message.updated) {
        // launch management view and updated configs
        var data = message.data;
        var settings = {
          updated: true,
          facebook_messenger_activated: data.messenger_chat.enabled,
          facebook_customization_locale: data.messenger_chat.default_locale
        };
        resolve(settings);
      } else {
        // uninstalled
        resolve();
      }
    }
  })
  .then(result => handleMessageReceived(result))
  .catch(error => logErrorMessage(error));
}

function handleMessageReceived(value) {
    if (!value) {
        return deleteSettings()
          .then(result => reloadCurrentPage(result));
    } else if (value.updated) {
        // management view
        return updateFacebookBusinessExtensionSettings(value);
    } else {
        // setup
        return updateFacebookBusinessExtensionSettings(value)
          .then(result => reloadCurrentPage(result));
    }
}

function updateFacebookBusinessExtensionSettings(data) {
    return new Promise(function(resolve, reject) {
        \$.ajax({
            url: \"index.php?route=extension/module/facebook_business/updateSettings&user_token=\" + window.facebookAdsToolboxConfig.token_string,
            type: \"post\",
            data: data,
            dataType: \"json\",
            success: function(json) {
                if(!json || !json.success) {
                    reject(new Error(\"An error occured when updating Facebook Business Extension settings.\"));
                } else {
                    resolve(\"\");
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                reject(new Error(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText));
            }
        });
    });
}

function deleteSettings() {
    return new Promise(function(resolve, reject) {
        \$.ajax({
          url: 'index.php?route=extension/module/facebook_business/deleteSettings&user_token=' + window.facebookAdsToolboxConfig.token_string,
          type: 'post',
          success: function(json) {
            if(!json || !json.success) {
              reject(new Error(\"An error occured when deleting Facebook Business Extension settings.\"));
            } else {
              resolve(\"Your FBE settings are deleted.\");
            }
          },
          error: function(xhr, ajaxOptions, thrownError) {
            reject(new Error(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText));
          }
        });
    });
};

function logErrorMessage(error) {
    window.facebookAdsToolboxConfig.error_message = error.message;
    alert(window.facebookAdsToolboxConfig.error_message);
}

function reloadCurrentPage(result) {
    if (result) {
        alert(result);
    }
    
    location.reload();
}
</script>";
    }

    public function getTemplateName()
    {
        return "extension/module/facebook_business.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  392 => 188,  379 => 178,  358 => 160,  340 => 145,  328 => 135,  323 => 133,  318 => 132,  313 => 130,  308 => 129,  306 => 128,  298 => 125,  292 => 121,  287 => 119,  282 => 118,  277 => 116,  272 => 115,  270 => 114,  264 => 111,  256 => 107,  248 => 102,  239 => 96,  235 => 95,  231 => 94,  224 => 90,  214 => 83,  206 => 78,  197 => 72,  193 => 71,  189 => 70,  182 => 66,  172 => 59,  169 => 58,  167 => 57,  161 => 54,  156 => 52,  152 => 51,  148 => 50,  144 => 49,  137 => 45,  129 => 40,  125 => 39,  120 => 37,  114 => 34,  110 => 32,  102 => 28,  99 => 27,  91 => 23,  89 => 22,  83 => 18,  72 => 16,  68 => 15,  63 => 13,  57 => 12,  53 => 11,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/module/facebook_business.twig", "");
    }
}

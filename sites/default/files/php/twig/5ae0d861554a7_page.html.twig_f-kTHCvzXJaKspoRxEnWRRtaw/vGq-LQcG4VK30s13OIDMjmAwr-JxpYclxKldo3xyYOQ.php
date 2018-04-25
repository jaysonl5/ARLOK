<?php

/* themes/custom/arl/templates/page/page.html.twig */
class __TwigTemplate_5e87dd879984009cd97b16ee5aff3248aa1aa0259be50c6324a7c9d37f9c6386 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("if" => 59);
        $filters = array("t" => 52, "trim" => 140, "striptags" => 140, "render" => 140);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
                array('t', 'trim', 'striptags', 'render'),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 45
        echo "
<div class=\"outer-wrapper\">
  <header id=\"site-header\" class=\"site-header\">
    <div class=\"container\">
      ";
        // line 49
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "tabs", array()), "html", null, true));
        echo "
      <div class=\"logo\">
        <a href=\"";
        // line 51
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true));
        echo "\">
          <img src=\"";
        // line 52
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logopath"] ?? null), "html", null, true));
        echo "\" alt=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("ARL")));
        echo "\"/>
        </a>
      </div>
      <div class=\"nav-wrap\">
        <div class=\"nav-inner\">
          <nav class=\"nav\">
            <a href=\"#\" class=\"btn-nav\"></a>
            ";
        // line 59
        if ($this->getAttribute(($context["page"] ?? null), "header_menu", array())) {
            // line 60
            echo "              ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header_menu", array()), "html", null, true));
            echo "
            ";
        }
        // line 62
        echo "          </nav>

          ";
        // line 64
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "

          ";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["client_login_button"] ?? null), "html", null, true));
        echo "

          <a class=\"btn-search\" href=\"#\"></a>

          <div class=\"search-wrap\">
            <div class=\"form form-search\">
              ";
        // line 72
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "search_form", array()), "html", null, true));
        echo "
            </div>
            <a class=\"btn-close\" href=\"#\"></a>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class=\"inner-wrapper\">
    <a id=\"main-content\" tabindex=\"-1\"></a>

    ";
        // line 84
        if ((($context["title"] ?? null) && ($context["title_top"] ?? null))) {
            // line 85
            echo "      <section class=\"section section-top\">
        ";
            // line 86
            if ($this->getAttribute(($context["top_values"] ?? null), "field_top_image", array())) {
                // line 87
                echo "          <div class=\"bg\"
               style=\"background-image: url(";
                // line 88
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top_values"] ?? null), "field_top_image", array()), "html", null, true));
                echo ");\"></div>
        ";
            }
            // line 90
            echo "
        <div class=\"container\">
          <div class=\"title\">

            ";
            // line 94
            if (($this->getAttribute(($context["top_values"] ?? null), "field_service_icon", array(), "array") && $this->getAttribute(($context["top_values"] ?? null), "field_service_show_icon", array(), "array"))) {
                // line 95
                echo "              <span class=\"ico\">
              <img src=\"";
                // line 96
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["top_values"] ?? null), "field_service_icon", array(), "array"), "html", null, true));
                echo "\">
            </span>
            ";
            }
            // line 99
            echo "            <h1>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h1>
          </div>
        </div>
      </section>
    ";
        }
        // line 104
        echo "
    ";
        // line 105
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "views_area", array()), "html", null, true));
        echo "

    ";
        // line 107
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "messages", array()), "html", null, true));
        echo "

    ";
        // line 109
        if ($this->getAttribute(($context["page"] ?? null), "content_top", array())) {
            // line 110
            echo "      <section class=\"section section-nav\">
        <div class=\"container\">
          ";
            // line 112
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_top", array()), "html", null, true));
            echo "
        </div>
      </section>
    ";
        }
        // line 116
        echo "
    <div ";
        // line 117
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["content_wrapper_class"] ?? null)), "method"), "html", null, true));
        echo ">
    ";
        // line 119
        echo "      <div class=\"container\">
        ";
        // line 120
        if ( !($context["title_top"] ?? null)) {
            // line 121
            echo "          <h1>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h1>
        ";
        }
        // line 123
        echo "
        ";
        // line 124
        if ((($context["show_breadcrumbs"] ?? null) || $this->getAttribute(($context["page"] ?? null), "additional_nav", array()))) {
            // line 125
            echo "          <div class=\"control\">
            ";
            // line 126
            if (($context["show_breadcrumbs"] ?? null)) {
                // line 127
                echo "              <div class=\"left-control\">
                ";
                // line 128
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumbs", array()), "html", null, true));
                echo "
              </div>
            ";
            }
            // line 131
            echo "
            ";
            // line 132
            if ($this->getAttribute(($context["page"] ?? null), "additional_nav", array())) {
                // line 133
                echo "              <div class=\"right-control\">
                ";
                // line 134
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "additional_nav", array()), "html", null, true));
                echo "
              </div>
            ";
            }
            // line 137
            echo "          </div>
        ";
        }
        // line 139
        echo "
        ";
        // line 140
        if (($this->getAttribute(($context["page"] ?? null), "content_sidebar", array(), "any", true, true) && twig_trim_filter(strip_tags($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["page"] ?? null), "content_sidebar", array())))))) {
            // line 141
            echo "          <div class=\"sidebar\">
            <div class=\"item-list\">
              ";
            // line 143
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_sidebar", array()), "html", null, true));
            echo "
            </div>
          </div>
        ";
        }
        // line 147
        echo "
        ";
        // line 148
        if ($this->getAttribute(($context["page"] ?? null), "content", array())) {
            // line 149
            echo "          <div class=\"content-inner\">
            ";
            // line 150
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 153
        echo "
        ";
        // line 154
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content_bottom", array()), "html", null, true));
        echo "
      </div>
    </div>
  </div>

  <footer id=\"site-footer\" class=\"site-footer\">
    <div class=\"container\">
      <div class=\"logo\">
        <a href=\"";
        // line 162
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["front_page"] ?? null), "html", null, true));
        echo "\">
          <img
            src=\"";
        // line 164
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["logopath"] ?? null), "html", null, true));
        echo "\"
            alt=\"";
        // line 165
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("ARL")));
        echo "\"/>
        </a>
      </div>
      ";
        // line 168
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top", array()), "html", null, true));
        echo "
      ";
        // line 169
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer", array()), "html", null, true));
        echo "
      ";
        // line 170
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_bottom", array()), "html", null, true));
        echo "
    </div>
  </footer>

</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/arl/templates/page/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 170,  296 => 169,  292 => 168,  286 => 165,  282 => 164,  277 => 162,  266 => 154,  263 => 153,  257 => 150,  254 => 149,  252 => 148,  249 => 147,  242 => 143,  238 => 141,  236 => 140,  233 => 139,  229 => 137,  223 => 134,  220 => 133,  218 => 132,  215 => 131,  209 => 128,  206 => 127,  204 => 126,  201 => 125,  199 => 124,  196 => 123,  190 => 121,  188 => 120,  185 => 119,  181 => 117,  178 => 116,  171 => 112,  167 => 110,  165 => 109,  160 => 107,  155 => 105,  152 => 104,  143 => 99,  137 => 96,  134 => 95,  132 => 94,  126 => 90,  121 => 88,  118 => 87,  116 => 86,  113 => 85,  111 => 84,  96 => 72,  87 => 66,  82 => 64,  78 => 62,  72 => 60,  70 => 59,  58 => 52,  54 => 51,  49 => 49,  43 => 45,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/arl/templates/page/page.html.twig", "/var/arl-new/trunk2/web/themes/custom/arl/templates/page/page.html.twig");
    }
}

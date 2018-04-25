<?php

/* themes/custom/arl/templates/views/views-view--news.html.twig */
class __TwigTemplate_197c706c5131a77d1a5d86f03bd201dc750da23d2101d61e3133d4238a4641d9 extends Twig_Template
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
        $tags = array("set" => 34, "if" => 46);
        $filters = array("clean_class" => 36);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if'),
                array('clean_class'),
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

        // line 34
        $context["classes"] = array(0 => "view", 1 => ("view-" . \Drupal\Component\Utility\Html::getClass(        // line 36
($context["id"] ?? null))), 2 => ("view-id-" .         // line 37
($context["id"] ?? null)), 3 => ("view-display-id-" .         // line 38
($context["display_id"] ?? null)), 4 => ((        // line 39
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . ($context["dom_id"] ?? null))) : ("")));
        // line 42
        echo "<section class=\"sections section-news\">
  <div class=\"container\">
    <div";
        // line 44
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["attributes"] ?? null), "addClass", array(0 => ($context["classes"] ?? null)), "method"), "html", null, true));
        echo ">
      ";
        // line 45
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
      ";
        // line 46
        if (($context["title"] ?? null)) {
            // line 47
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "
      ";
        }
        // line 49
        echo "      ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
      ";
        // line 50
        if (($context["header"] ?? null)) {
            // line 51
            echo "        <div class=\"view-header\">
          ";
            // line 52
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["header"] ?? null), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 55
        echo "      ";
        if (($context["exposed"] ?? null)) {
            // line 56
            echo "        <div class=\"view-filters\">
          ";
            // line 57
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["exposed"] ?? null), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 60
        echo "      ";
        if (($context["attachment_before"] ?? null)) {
            // line 61
            echo "        <div class=\"attachment attachment-before\">
          ";
            // line 62
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_before"] ?? null), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 65
        echo "
      ";
        // line 66
        if (($context["rows"] ?? null)) {
            // line 67
            echo "        <div class=\"view-content items\">
          ";
            // line 68
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["rows"] ?? null), "html", null, true));
            echo "
        </div>
      ";
        } elseif (        // line 70
($context["empty"] ?? null)) {
            // line 71
            echo "        <div class=\"view-empty\">
          ";
            // line 72
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["empty"] ?? null), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 75
        echo "
      ";
        // line 76
        if (($context["pager"] ?? null)) {
            // line 77
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["pager"] ?? null), "html", null, true));
            echo "
      ";
        }
        // line 79
        echo "      ";
        if (($context["attachment_after"] ?? null)) {
            // line 80
            echo "        <div class=\"attachment attachment-after\">
          ";
            // line 81
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attachment_after"] ?? null), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 84
        echo "      ";
        if (($context["more"] ?? null)) {
            // line 85
            echo "        ";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["more"] ?? null), "html", null, true));
            echo "
      ";
        }
        // line 87
        echo "      ";
        if (($context["footer"] ?? null)) {
            // line 88
            echo "        <div class=\"view-footer\">
          ";
            // line 89
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["footer"] ?? null), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 92
        echo "      ";
        if (($context["feed_icons"] ?? null)) {
            // line 93
            echo "        <div class=\"feed-icons\">
          ";
            // line 94
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["feed_icons"] ?? null), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 97
        echo "    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/arl/templates/views/views-view--news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 97,  183 => 94,  180 => 93,  177 => 92,  171 => 89,  168 => 88,  165 => 87,  159 => 85,  156 => 84,  150 => 81,  147 => 80,  144 => 79,  138 => 77,  136 => 76,  133 => 75,  127 => 72,  124 => 71,  122 => 70,  117 => 68,  114 => 67,  112 => 66,  109 => 65,  103 => 62,  100 => 61,  97 => 60,  91 => 57,  88 => 56,  85 => 55,  79 => 52,  76 => 51,  74 => 50,  69 => 49,  63 => 47,  61 => 46,  57 => 45,  53 => 44,  49 => 42,  47 => 39,  46 => 38,  45 => 37,  44 => 36,  43 => 34,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "themes/custom/arl/templates/views/views-view--news.html.twig", "/var/arl-new/trunk2/web/themes/custom/arl/templates/views/views-view--news.html.twig");
    }
}

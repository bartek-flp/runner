<?php

/* profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig */
class __TwigTemplate_ad9349d8e30510e6b44db8d157edc81337145109624aba1c70d6206cdd052f1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'featured' => array($this, 'block_featured'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("block" => 70, "if" => 98);
        $filters = array("t" => 69);
        $functions = array("attach_library" => 65);

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('block', 'if'),
                array('t'),
                array('attach_library')
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

        // line 65
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("droopler_subtheme/slick"), "html", null, true));
        echo "
";
        // line 66
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("droopler_subtheme/colorbox"), "html", null, true));
        echo "
<div id=\"page-wrapper\" class=\"page-wrapper\">
  <header id=\"header\" class=\"header large\" role=\"banner\"
          aria-label=\"";
        // line 69
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header")));
        echo "\">
    ";
        // line 70
        $this->displayBlock('head', $context, $blocks);
        // line 96
        echo "  </header>

  ";
        // line 98
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 99
            echo "    <div class=\"highlighted\">
      <aside class=\"";
            // line 100
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo " section clearfix\" role=\"complementary\">
        ";
            // line 101
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
            echo "
      </aside>
    </div>
  ";
        }
        // line 105
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", array())) {
            // line 106
            echo "    ";
            $this->displayBlock('featured', $context, $blocks);
            // line 114
            echo "  ";
        }
        // line 115
        echo "  <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
    ";
        // line 116
        $this->displayBlock('content', $context, $blocks);
        // line 129
        echo "  </div>
  ";
        // line 130
        if ((($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", array()) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", array())) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", array()))) {
            // line 131
            echo "    <div class=\"featured-bottom\">
      <aside class=\"";
            // line 132
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo " clearfix\" role=\"complementary\">
        ";
            // line 133
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_first", array()), "html", null, true));
            echo "
        ";
            // line 134
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", array()), "html", null, true));
            echo "
        ";
            // line 135
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", array()), "html", null, true));
            echo "
      </aside>
    </div>
  ";
        }
        // line 139
        echo "  <footer class=\"site-footer\">
    ";
        // line 140
        $this->displayBlock('footer', $context, $blocks);
        // line 158
        echo "  </footer>

</div>
";
    }

    // line 70
    public function block_head($context, array $blocks = array())
    {
        // line 71
        echo "      <nav";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["navbar_attributes"] ?? null), "html", null, true));
        echo ">
        <div class=\"container no-padding-sm\">
          <div class=\"navbar-brand\">
            ";
        // line 74
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          </div>
          ";
        // line 76
        if (($this->getAttribute(($context["page"] ?? null), "primary_menu", array()) || $this->getAttribute(($context["page"] ?? null), "lang_menu", array()))) {
            // line 77
            echo "            <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\"
                    data-target=\"#navbarNav\" aria-controls=\"navbarNav\"
                    aria-expanded=\"false\" aria-label=\"Toggle navigation\">
              <span class=\"navbar-toggler-icon\"></span>
            </button>
            <nav class=\"navbar navbar-expand-lg\">
              <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
                ";
            // line 84
            if ($this->getAttribute(($context["page"] ?? null), "primary_menu", array())) {
                // line 85
                echo "                  <div class=\"menu-region\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "primary_menu", array()), "html", null, true));
                echo "</div>
                ";
            }
            // line 87
            echo "                ";
            if ($this->getAttribute(($context["page"] ?? null), "lang_menu", array())) {
                // line 88
                echo "                  <div class=\"lang-region\">";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "lang_menu", array()), "html", null, true));
                echo "</div>
                ";
            }
            // line 90
            echo "              </div>
            </nav>
          ";
        }
        // line 93
        echo "        </div>
      </nav>
    ";
    }

    // line 106
    public function block_featured($context, array $blocks = array())
    {
        // line 107
        echo "      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section ";
        // line 108
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " clearfix\"
               role=\"complementary\">
          ";
        // line 110
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "featured_top", array()), "html", null, true));
        echo "
        </aside>
      </div>
    ";
    }

    // line 116
    public function block_content($context, array $blocks = array())
    {
        // line 117
        echo "      <div id=\"main\" class=\"container-fluid\">
        <div class=\"row clearfix\">
          ";
        // line 119
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "breadcrumb", array()), "html", null, true));
        echo "
          <main class=\"main-content\">
            <section class=\"section\">
              <a id=\"main-content\" tabindex=\"-1\"></a>
              ";
        // line 123
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
            </section>
          </main>
        </div>
      </div>
    ";
    }

    // line 140
    public function block_footer($context, array $blocks = array())
    {
        // line 141
        echo "      <div class=\"";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\">
        ";
        // line 142
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_main", array()), "html", null, true));
        echo "
        ";
        // line 143
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", array()) || $this->getAttribute(($context["page"] ?? null), "footer_second", array())) || $this->getAttribute(($context["page"] ?? null), "footer_third", array())) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()))) {
            // line 144
            echo "          <div class=\"site-footer__top clearfix\">
            ";
            // line 145
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_first", array()), "html", null, true));
            echo "
            ";
            // line 146
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_second", array()), "html", null, true));
            echo "
            ";
            // line 147
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_third", array()), "html", null, true));
            echo "
            ";
            // line 148
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fourth", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 151
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", array())) {
            // line 152
            echo "          <div class=\"site-footer__bottom\">
            ";
            // line 153
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_fifth", array()), "html", null, true));
            echo "
          </div>
        ";
        }
        // line 156
        echo "      </div>
    ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 156,  274 => 153,  271 => 152,  268 => 151,  262 => 148,  258 => 147,  254 => 146,  250 => 145,  247 => 144,  245 => 143,  241 => 142,  236 => 141,  233 => 140,  223 => 123,  216 => 119,  212 => 117,  209 => 116,  201 => 110,  196 => 108,  193 => 107,  190 => 106,  184 => 93,  179 => 90,  173 => 88,  170 => 87,  164 => 85,  162 => 84,  153 => 77,  151 => 76,  146 => 74,  139 => 71,  136 => 70,  129 => 158,  127 => 140,  124 => 139,  117 => 135,  113 => 134,  109 => 133,  105 => 132,  102 => 131,  100 => 130,  97 => 129,  95 => 116,  92 => 115,  89 => 114,  86 => 106,  83 => 105,  76 => 101,  72 => 100,  69 => 99,  67 => 98,  63 => 96,  61 => 70,  57 => 69,  51 => 66,  47 => 65,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig", "/var/www/html/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig");
    }
}

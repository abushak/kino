<?php

/* sites/dev.andrew.devshop.odnodumci.com/themes/bones_theme/templates/page--users.html.twig */
class __TwigTemplate_56891ec95210574eef4efb60fe132934ddcf44de4c3eb8584f8bbb71939a28d8 extends Twig_Template
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
        $tags = array("if" => 72);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if'),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 48
        echo "<div class=\"layout-container\">

  <header role=\"banner\">
       ";
        // line 51
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "header", array()), "html", null, true));
        echo "
  </header>

  ";
        // line 54
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "primary_menu", array()), "html", null, true));
        echo "
  ";
        // line 55
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "secondary_menu", array()), "html", null, true));
        echo "

  ";
        // line 57
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "breadcrumb", array()), "html", null, true));
        echo "

  ";
        // line 59
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "highlighted", array()), "html", null, true));
        echo "

  ";
        // line 61
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "
  <div class=\"user-filter\">
  \t<div class=\"filter-wr\">
  \t\t";
        // line 64
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["exposedformuser_gridpage_1"]) ? $context["exposedformuser_gridpage_1"] : null), "html", null, true));
        echo "
  \t</div>
  </div>

  <main role=\"main\">
    <div class=\"main-container\">
      <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 71
        echo "
      ";
        // line 72
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "right_sidebar", array())) {
            // line 73
            echo "        <aside class=\"layout-right-sidebar\" role=\"complementary\">
          ";
            // line 74
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "right_sidebar", array()), "html", null, true));
            echo "
        </aside>
      ";
        }
        // line 77
        echo "
      ";
        // line 78
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_sidebar", array())) {
            // line 79
            echo "        <aside class=\"layout-left-sidebar\" role=\"complementary\">
          ";
            // line 80
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "left_sidebar", array()), "html", null, true));
            echo "
        </aside>
      ";
        }
        // line 83
        echo "

      <div class=\"layout-content\">
        <div class=\"page-content\">

        <div class=\"top_content\">";
        // line 88
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_top", array()), "html", null, true));
        echo "</div>

        <div class=\"page_content_container\">";
        // line 90
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "</div>

        <div class=\"bottom_content\"> ";
        // line 92
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content_bottom", array()), "html", null, true));
        echo " </div>

        </div>
      </div>";
        // line 96
        echo "


    </div>
  </main>

  ";
        // line 102
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array())) {
            // line 103
            echo "    <footer role=\"contentinfo\">
    \t<div class=\"footer-wr\">
      \t\t\t";
            // line 105
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "footer", array()), "html", null, true));
            echo "
\t\t</div>
    </footer>
  ";
        }
        // line 109
        echo "
</div>";
    }

    public function getTemplateName()
    {
        return "sites/dev.andrew.devshop.odnodumci.com/themes/bones_theme/templates/page--users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 109,  153 => 105,  149 => 103,  147 => 102,  139 => 96,  133 => 92,  128 => 90,  123 => 88,  116 => 83,  110 => 80,  107 => 79,  105 => 78,  102 => 77,  96 => 74,  93 => 73,  91 => 72,  88 => 71,  79 => 64,  73 => 61,  68 => 59,  63 => 57,  58 => 55,  54 => 54,  48 => 51,  43 => 48,);
    }

    public function getSource()
    {
        return "{#
/**
 * @file
 * Theme override to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.highlighted: Items for the highlighted region.
 * - page.primary_menu: Items for the primary menu region.
 * - page.secondary_menu: Items for the secondary menu region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content_top: The top section content of the current page.
 * - page.content: The main content of the current page.
 * - page.content_bottom: The bottom section content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 * - page.breadcrumb: Items for the breadcrumb region.
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
<div class=\"layout-container\">

  <header role=\"banner\">
       {{ page.header }}
  </header>

  {{ page.primary_menu }}
  {{ page.secondary_menu }}

  {{ page.breadcrumb }}

  {{ page.highlighted }}

  {{ page.help }}
  <div class=\"user-filter\">
  \t<div class=\"filter-wr\">
  \t\t{{exposedformuser_gridpage_1}}
  \t</div>
  </div>

  <main role=\"main\">
    <div class=\"main-container\">
      <a id=\"main-content\" tabindex=\"-1\"></a>{# link is in html.html.twig #}

      {% if page.right_sidebar %}
        <aside class=\"layout-right-sidebar\" role=\"complementary\">
          {{ page.right_sidebar }}
        </aside>
      {% endif %}

      {% if page.left_sidebar %}
        <aside class=\"layout-left-sidebar\" role=\"complementary\">
          {{ page.left_sidebar }}
        </aside>
      {% endif %}


      <div class=\"layout-content\">
        <div class=\"page-content\">

        <div class=\"top_content\">{{ page.content_top }}</div>

        <div class=\"page_content_container\">{{ page.content }}</div>

        <div class=\"bottom_content\"> {{ page.content_bottom }} </div>

        </div>
      </div>{# /.layout-content #}



    </div>
  </main>

  {% if page.footer %}
    <footer role=\"contentinfo\">
    \t<div class=\"footer-wr\">
      \t\t\t{{ page.footer }}
\t\t</div>
    </footer>
  {% endif %}

</div>{# /.layout-container #}
";
    }
}

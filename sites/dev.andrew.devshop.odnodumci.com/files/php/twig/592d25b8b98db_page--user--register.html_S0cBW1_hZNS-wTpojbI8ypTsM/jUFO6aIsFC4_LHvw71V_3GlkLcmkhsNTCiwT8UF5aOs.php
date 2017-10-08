<?php

/* sites/dev.andrew.devshop.odnodumci.com/themes/bones_theme/templates/page--user--register.html.twig */
class __TwigTemplate_5dd671bb3c1ff6978d04ef5ff853d77d46532674b38edc56028987b797655e60 extends Twig_Template
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
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
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

        // line 1
        echo "    <div class=\"center\">

         <div id=\"top_part\"></div>

    </div>

<div id=\"auth_box\" class=\"login\">




  <div id=\"middle_part\">
       ";
        // line 13
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "
  </div>


</div>
";
    }

    public function getTemplateName()
    {
        return "sites/dev.andrew.devshop.odnodumci.com/themes/bones_theme/templates/page--user--register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 13,  43 => 1,);
    }

    public function getSource()
    {
        return "    <div class=\"center\">

         <div id=\"top_part\"></div>

    </div>

<div id=\"auth_box\" class=\"login\">




  <div id=\"middle_part\">
       {{ page.content }}
  </div>


</div>
";
    }
}

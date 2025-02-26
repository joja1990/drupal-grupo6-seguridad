<?php

/* core/themes/classy/templates/content-edit/filter-tips.html.twig */
class __TwigTemplate_0f2bad3618927a4be6c313533adb747a4a62d2ba8ec98983bc2c2fd4033a4208 extends Twig_Template
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
        $tags = array("if" => 19, "for" => 28, "set" => 31);
        $filters = array("t" => 20, "length" => 23, "clean_class" => 33, "replace" => 45);
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array('if', 'for', 'set'),
                array('t', 'length', 'clean_class', 'replace'),
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

        // line 19
        if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
            // line 20
            echo "  <h2>";
            echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->renderVar(t("Text Formats")));
            echo "</h2>
";
        }
        // line 22
        echo "
";
        // line 23
        if (twig_length_filter($this->env, (isset($context["tips"]) ? $context["tips"] : null))) {
            // line 24
            echo "  ";
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 25
                echo "    <div class=\"compose-tips\">
  ";
            }
            // line 27
            echo "
  ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tips"]) ? $context["tips"] : null));
            foreach ($context['_seq'] as $context["name"] => $context["tip"]) {
                // line 29
                echo "    ";
                if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                    // line 30
                    echo "      ";
                    // line 31
                    $context["tip_classes"] = array(0 => "filter-type", 1 => ("filter-" . \Drupal\Component\Utility\Html::getClass(                    // line 33
$context["name"])));
                    // line 36
                    echo "      <div";
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["tip"], "attributes", array()), "addClass", array(0 => (isset($context["tip_classes"]) ? $context["tip_classes"] : null)), "method"), "html", null, true));
                    echo ">
      <h3>";
                    // line 37
                    echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["tip"], "name", array()), "html", null, true));
                    echo "</h3>
    ";
                }
                // line 39
                echo "
    ";
                // line 40
                if (twig_length_filter($this->env, $this->getAttribute($context["tip"], "list", array()))) {
                    // line 41
                    echo "      <ul class=\"tips\">
      ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["tip"], "list", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 43
                        echo "        ";
                        // line 44
                        $context["item_classes"] = array(0 => ((                        // line 45
(isset($context["long"]) ? $context["long"] : null)) ? (("filter-" . twig_replace_filter($this->getAttribute($context["item"], "id", array()), array("/" => "-")))) : ("")));
                        // line 48
                        echo "        <li";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => (isset($context["item_classes"]) ? $context["item_classes"] : null)), "method"), "html", null, true));
                        echo ">";
                        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute($context["item"], "tip", array()), "html", null, true));
                        echo "</li>
      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 50
                    echo "      </ul>
    ";
                }
                // line 52
                echo "
    ";
                // line 53
                if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                    // line 54
                    echo "      </div>
    ";
                }
                // line 56
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['tip'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
  ";
            // line 58
            if ((isset($context["multiple"]) ? $context["multiple"] : null)) {
                // line 59
                echo "    </div>
  ";
            }
        }
    }

    public function getTemplateName()
    {
        return "core/themes/classy/templates/content-edit/filter-tips.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 59,  138 => 58,  135 => 57,  129 => 56,  125 => 54,  123 => 53,  120 => 52,  116 => 50,  105 => 48,  103 => 45,  102 => 44,  100 => 43,  96 => 42,  93 => 41,  91 => 40,  88 => 39,  83 => 37,  78 => 36,  76 => 33,  75 => 31,  73 => 30,  70 => 29,  66 => 28,  63 => 27,  59 => 25,  56 => 24,  54 => 23,  51 => 22,  45 => 20,  43 => 19,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override for a set of filter tips.*/
/*  **/
/*  * Available variables:*/
/*  * - tips: Descriptions and a CSS ID in the form of 'module-name/filter-id'*/
/*  *   (only used when 'long' is TRUE) for each filter in one or more text*/
/*  *   formats.*/
/*  * - long: A flag indicating whether the passed-in filter tips contain extended*/
/*  *   explanations, i.e. intended to be output on the path 'filter/tips'*/
/*  *   (TRUE), or are in a short format, i.e. suitable to be displayed below a*/
/*  *   form element. Defaults to FALSE.*/
/*  * - multiple: A flag indicating there is more than one filter tip.*/
/*  **/
/*  * @see template_preprocess_filter_tips()*/
/*  *//* */
/* #}*/
/* {% if multiple %}*/
/*   <h2>{{ 'Text Formats'|t }}</h2>*/
/* {% endif %}*/
/* */
/* {% if tips|length %}*/
/*   {% if multiple %}*/
/*     <div class="compose-tips">*/
/*   {% endif %}*/
/* */
/*   {% for name, tip in tips %}*/
/*     {% if multiple %}*/
/*       {%*/
/*         set tip_classes = [*/
/*           'filter-type',*/
/*           'filter-' ~ name|clean_class,*/
/*         ]*/
/*       %}*/
/*       <div{{ tip.attributes.addClass(tip_classes) }}>*/
/*       <h3>{{ tip.name }}</h3>*/
/*     {% endif %}*/
/* */
/*     {% if tip.list|length %}*/
/*       <ul class="tips">*/
/*       {% for item in tip.list %}*/
/*         {%*/
/*           set item_classes = [*/
/*             long ? 'filter-' ~ item.id|replace({'/': '-'}),*/
/*           ]*/
/*         %}*/
/*         <li{{ item.attributes.addClass(item_classes) }}>{{ item.tip }}</li>*/
/*       {% endfor %}*/
/*       </ul>*/
/*     {% endif %}*/
/* */
/*     {% if multiple %}*/
/*       </div>*/
/*     {% endif %}*/
/*   {% endfor %}*/
/* */
/*   {% if multiple %}*/
/*     </div>*/
/*   {% endif %}*/
/* {% endif %}*/
/* */

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

/* @Storefront/storefront/utilities/thumbnail.html.twig */
class __TwigTemplate_21c445f56d31aaeec0cc7c5d01b9cf85c908b19c9392195ba6782157d8a1531d extends \Twig\Template
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
        // line 2
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 2)) > 0)) {
            // line 3
            echo "    ";
            if ((($context["columns"] ?? null) &&  !(isset($context["sizes"]) || array_key_exists("sizes", $context)))) {
                // line 4
                echo "        ";
                // line 5
                echo "        ";
                $context["sizes"] = ["xs" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 6
($context["shopware"] ?? null), "theme", [], "any", false, false, false, 6), "breakpoint", [], "any", false, false, false, 6), "sm", [], "any", false, false, false, 6) - 1) . "px"), "sm" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 7
($context["shopware"] ?? null), "theme", [], "any", false, false, false, 7), "breakpoint", [], "any", false, false, false, 7), "md", [], "any", false, false, false, 7) - 1) . "px"), "md" => (twig_round(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 8
($context["shopware"] ?? null), "theme", [], "any", false, false, false, 8), "breakpoint", [], "any", false, false, false, 8), "lg", [], "any", false, false, false, 8) - 1) / ($context["columns"] ?? null)), 0, "ceil") . "px"), "lg" => (twig_round(((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,                 // line 9
($context["shopware"] ?? null), "theme", [], "any", false, false, false, 9), "breakpoint", [], "any", false, false, false, 9), "xl", [], "any", false, false, false, 9) - 1) / ($context["columns"] ?? null)), 0, "ceil") . "px")];
                // line 11
                echo "
        ";
                // line 13
                echo "        ";
                if ((($context["layout"] ?? null) == "full-width")) {
                    // line 14
                    echo "            ";
                    $context["container"] = 100;
                    // line 15
                    echo "            ";
                    $context["sizes"] = twig_array_merge(($context["sizes"] ?? null), ["xl" => (twig_round((($context["container"] ?? null) / ($context["columns"] ?? null)), 0, "ceil") . "vw")]);
                    // line 16
                    echo "        ";
                } else {
                    // line 17
                    echo "            ";
                    $context["container"] = 1360;
                    // line 18
                    echo "            ";
                    $context["sizes"] = twig_array_merge(($context["sizes"] ?? null), ["xl" => (twig_round((($context["container"] ?? null) / ($context["columns"] ?? null)), 0, "ceil") . "px")]);
                    // line 19
                    echo "        ";
                }
                // line 20
                echo "    ";
            }
            // line 21
            echo "
    ";
            // line 22
            $context["thumbnails"] = twig_reverse_filter($this->env, twig_sort_filter(twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 22)));
            // line 23
            echo "
    ";
            // line 25
            echo "    ";
            ob_start(function () { return ''; });
            ob_start(function () { return ''; });
            // line 26
            echo "        ";
            echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 26) + 1), "html", null, true);
            echo "w, ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["thumbnails"] ?? null));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["thumbnail"]) {
                echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeUrl(twig_get_attribute($this->env, $this->source, $context["thumbnail"], "url", [], "any", false, false, false, 26)), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["thumbnail"], "width", [], "any", false, false, false, 26), "html", null, true);
                echo "w";
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 26)) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thumbnail'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "    ";
            $___internal_9ba824e4c19d310ec2dbb02a3e0bd706774a0c08e310be816fae65aafaaec2c5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 25
            echo twig_spaceless($___internal_9ba824e4c19d310ec2dbb02a3e0bd706774a0c08e310be816fae65aafaaec2c5_);
            $context["srcsetValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 28
            echo "
    ";
            // line 30
            echo "    ";
            ob_start(function () { return ''; });
            ob_start(function () { return ''; });
            // line 31
            echo "        ";
            $context["sizeFallback"] = 100;
            // line 32
            echo "
        ";
            // line 34
            echo "        ";
            if (($context["columns"] ?? null)) {
                // line 35
                echo "            ";
                $context["sizeFallback"] = twig_round((($context["sizeFallback"] ?? null) / ($context["columns"] ?? null)), 0, "ceil");
                // line 36
                echo "        ";
            }
            // line 37
            echo "
        ";
            // line 38
            if ((twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 38) > twig_first($this->env, twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 38), "breakpoint", [], "any", false, false, false, 38))))) {
                // line 39
                echo "            ";
                $context["maxWidth"] = twig_get_attribute($this->env, $this->source, twig_first($this->env, ($context["thumbnails"] ?? null)), "width", [], "any", false, false, false, 39);
                // line 40
                echo "        ";
            }
            // line 41
            echo "
        ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_reverse_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["shopware"] ?? null), "theme", [], "any", false, false, false, 42), "breakpoint", [], "any", false, false, false, 42)));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                if (($context["maxWidth"] ?? null)) {
                    echo "(max-width: ";
                    echo twig_escape_filter($this->env, ($context["maxWidth"] ?? null), "html", null, true);
                    echo "px) and ";
                }
                echo "(min-width: ";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "px) ";
                echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["sizes"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[$context["key"]] ?? null) : null), "html", null, true);
                $context["maxWidth"] = ($context["value"] - 1);
                if ( !twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 42)) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ", ";
            echo twig_escape_filter($this->env, ($context["sizeFallback"] ?? null), "html", null, true);
            echo "vw
    ";
            $___internal_e57e3159333719ed51e2d6d5c058da5ed0c2b7a5c76a3f6f61dc7d471d8a6ef8_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 30
            echo twig_spaceless($___internal_e57e3159333719ed51e2d6d5c058da5ed0c2b7a5c76a3f6f61dc7d471d8a6ef8_);
            $context["sizesValue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        }
        // line 45
        echo "<img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Shopware\Storefront\Framework\Twig\Extension\UrlEncodingTwigFilter']->encodeMediaUrl(($context["media"] ?? null)), "html", null, true);
        echo "\"
    ";
        // line 46
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["media"] ?? null), "thumbnails", [], "any", false, false, false, 46)) > 0)) {
            // line 47
            echo "        srcset=\"";
            echo twig_escape_filter($this->env, ($context["srcsetValue"] ?? null), "html", null, true);
            echo "\"
        ";
            // line 48
            if ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["sizes"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144["default"] ?? null) : null)) {
                // line 49
                echo "        sizes=\"";
                echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["sizes"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b["default"] ?? null) : null), "html", null, true);
                echo "\"
        ";
            } elseif ((twig_length_filter($this->env,             // line 50
($context["sizes"] ?? null)) > 0)) {
                // line 51
                echo "        sizes=\"";
                echo twig_escape_filter($this->env, ($context["sizesValue"] ?? null), "html", null, true);
                echo "\"
        ";
            }
            // line 53
            echo "    ";
        }
        // line 54
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attributes"] ?? null));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            if (($context["value"] != "")) {
                echo " ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["value"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "/>

";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/utilities/thumbnail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  270 => 55,  254 => 54,  251 => 53,  245 => 51,  243 => 50,  238 => 49,  236 => 48,  231 => 47,  229 => 46,  224 => 45,  220 => 30,  173 => 42,  170 => 41,  167 => 40,  164 => 39,  162 => 38,  159 => 37,  156 => 36,  153 => 35,  150 => 34,  147 => 32,  144 => 31,  140 => 30,  137 => 28,  134 => 25,  131 => 27,  90 => 26,  86 => 25,  83 => 23,  81 => 22,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  57 => 14,  54 => 13,  51 => 11,  49 => 9,  48 => 8,  47 => 7,  46 => 6,  44 => 5,  42 => 4,  39 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/utilities/thumbnail.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/utilities/thumbnail.html.twig");
    }
}

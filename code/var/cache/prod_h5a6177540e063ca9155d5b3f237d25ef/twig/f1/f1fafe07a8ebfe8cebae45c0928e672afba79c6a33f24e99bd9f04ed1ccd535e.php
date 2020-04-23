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

/* @Storefront/storefront/component/product/card/box.html.twig */
class __TwigTemplate_cf52429b7c456d021c6c78e37851ac5c3f00fc003ce70fbc9b4dffb2f7b6fca3 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'component_product_box_include' => [$this, 'block_component_product_box_include'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('component_product_box_include', $context, $blocks);
    }

    public function block_component_product_box_include($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        // line 4
        echo "
    ";
        // line 5
        if (twig_test_empty(($context["layout"] ?? null))) {
            // line 6
            echo "        ";
            $context["layout"] = "standard";
            // line 7
            echo "    ";
        }
        // line 8
        echo "
    ";
        // line 9
        $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = null;
        try {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\InheritanceExtension')->getFinder();

                $includeTemplate = $finder->find($finder->getTemplateName((("@Storefront/storefront/component/product/card/box-" . ($context["layout"] ?? null)) . ".html.twig")));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/component/product/card/box.html.twig", 9);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) {
            $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4->display($context);
        }
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/component/product/card/box.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  61 => 9,  58 => 8,  55 => 7,  52 => 6,  50 => 5,  47 => 4,  45 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/component/product/card/box.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/component/product/card/box.html.twig");
    }
}

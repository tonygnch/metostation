<?php

/* /Users/tonyganchev/Projects/meteostation/vendor/cakephp/bake/src/Template/Bake/Layout/default.twig */
class __TwigTemplate_53ede872441033998d2eca9c31007a53d70fbc452c50de49bce643f63db82311 extends Twig_Template
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
        $__internal_ba1a06335b2a99b8c6d3ba99d7b98b9534a987b5ea5a1d3c4f53f8e3212caa49 = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_ba1a06335b2a99b8c6d3ba99d7b98b9534a987b5ea5a1d3c4f53f8e3212caa49->enter($__internal_ba1a06335b2a99b8c6d3ba99d7b98b9534a987b5ea5a1d3c4f53f8e3212caa49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/Users/tonyganchev/Projects/meteostation/vendor/cakephp/bake/src/Template/Bake/Layout/default.twig"));

        // line 16
        echo $this->getAttribute(($context["_view"] ?? null), "fetch", array(0 => "content"), "method");
        
        $__internal_ba1a06335b2a99b8c6d3ba99d7b98b9534a987b5ea5a1d3c4f53f8e3212caa49->leave($__internal_ba1a06335b2a99b8c6d3ba99d7b98b9534a987b5ea5a1d3c4f53f8e3212caa49_prof);

    }

    public function getTemplateName()
    {
        return "/Users/tonyganchev/Projects/meteostation/vendor/cakephp/bake/src/Template/Bake/Layout/default.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
{{ _view.fetch('content')|raw }}", "/Users/tonyganchev/Projects/meteostation/vendor/cakephp/bake/src/Template/Bake/Layout/default.twig", "");
    }
}

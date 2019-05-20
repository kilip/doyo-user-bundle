<?php

/*
 * This file is part of the DoyoUserBundle project.
 *
 * (c) Anthonius Munthi <me@itstoni.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

use Twig\Environment;
use Twig\Error\RuntimeError;
use Twig\Source;

/* @Twig/Exception/trace.txt.twig */
class __TwigTemplate_143e74eea9b92534526b36d4238fb7db67c2339c31d07c401a31c79abbe4596a extends \Twig\Template
{
    private $source;

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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions['Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension'];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@Twig/Exception/trace.txt.twig'));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions['Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension'];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), 'template', '@Twig/Exception/trace.txt.twig'));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context['trace']) || array_key_exists('trace', $context) ? $context['trace'] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 1, $this->source); })()), 'function', [], 'any', false, false, false, 1)) {
            // line 2
            echo 'at ';
            echo(twig_get_attribute($this->env, $this->source, (isset($context['trace']) || array_key_exists('trace', $context) ? $context['trace'] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 2, $this->source); })()), 'class', [], 'any', false, false, false, 2).twig_get_attribute($this->env, $this->source, (isset($context['trace']) || array_key_exists('trace', $context) ? $context['trace'] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 2, $this->source); })()), 'type', [], 'any', false, false, false, 2)).twig_get_attribute($this->env, $this->source, (isset($context['trace']) || array_key_exists('trace', $context) ? $context['trace'] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 2, $this->source); })()), 'function', [], 'any', false, false, false, 2);
            echo '(';
            echo $this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatArgsAsText(twig_get_attribute($this->env, $this->source, (isset($context['trace']) || array_key_exists('trace', $context) ? $context['trace'] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 2, $this->source); })()), 'args', [], 'any', false, false, false, 2));
            echo ')';
        }
        // line 4
        if ((!twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context['trace'] ?? null), 'file', [], 'any', true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context['trace'] ?? null), 'file', [], 'any', false, false, false, 4), '')) : (''))) && !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context['trace'] ?? null), 'line', [], 'any', true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context['trace'] ?? null), 'line', [], 'any', false, false, false, 4), '')) : (''))))) {
            // line 5
            echo (twig_get_attribute($this->env, $this->source, (isset($context['trace']) || array_key_exists('trace', $context) ? $context['trace'] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 5, $this->source); })()), 'function', [], 'any', false, false, false, 5)) ? ('
     (') : ('at ');
            echo twig_replace_filter(strip_tags($this->extensions['Symfony\Bridge\Twig\Extension\CodeExtension']->formatFile(twig_get_attribute($this->env, $this->source, (isset($context['trace']) || array_key_exists('trace', $context) ? $context['trace'] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 5, $this->source); })()), 'file', [], 'any', false, false, false, 5), twig_get_attribute($this->env, $this->source, (isset($context['trace']) || array_key_exists('trace', $context) ? $context['trace'] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 5, $this->source); })()), 'line', [], 'any', false, false, false, 5))), [(' at line '.twig_get_attribute($this->env, $this->source, (isset($context['trace']) || array_key_exists('trace', $context) ? $context['trace'] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 5, $this->source); })()), 'line', [], 'any', false, false, false, 5)) => '']);
            echo ':';
            echo twig_get_attribute($this->env, $this->source, (isset($context['trace']) || array_key_exists('trace', $context) ? $context['trace'] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 5, $this->source); })()), 'line', [], 'any', false, false, false, 5);
            echo (twig_get_attribute($this->env, $this->source, (isset($context['trace']) || array_key_exists('trace', $context) ? $context['trace'] : (function () { throw new RuntimeError('Variable "trace" does not exist.', 5, $this->source); })()), 'function', [], 'any', false, false, false, 5)) ? (')') : ('');
        }

        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);
    }

    public function getTemplateName()
    {
        return '@Twig/Exception/trace.txt.twig';
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return [52 => 5,  50 => 4,  43 => 2,  41 => 1];
    }

    public function getSourceContext()
    {
        return new Source("{% if trace.function %}
at {{ trace.class ~ trace.type ~ trace.function }}({{ trace.args|format_args_as_text }})
{%- endif -%}
{% if trace.file|default('') is not empty and trace.line|default('') is not empty %}
  {{- trace.function ? '\\n     (' : 'at '}}{{ trace.file|format_file(trace.line)|striptags|replace({ (' at line ' ~ trace.line): '' }) }}:{{ trace.line }}{{ trace.function ? ')' }}
{%- endif %}
", '@Twig/Exception/trace.txt.twig', '/project/doyo/user-bundle/vendor/symfony/twig-bundle/Resources/views/Exception/trace.txt.twig');
    }
}
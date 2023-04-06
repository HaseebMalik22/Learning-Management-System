<?php

class __Mustache_1917a139ded29a94ccd257b170fe7e14 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('thirdpartybutton');
        $buffer .= $this->section92506f46b3993bbe3a7039bde1cf4e7b($context, $indent, $value);
        $value = $context->find('thirdpartybutton');
        if (empty($value)) {
            
            $value = $context->find('thirdpartynodes');
            $buffer .= $this->section9b6e43424e97bfc3f90457629b9b5c48($context, $indent, $value);
        }

        return $buffer;
    }

    private function section21f130cf0a7ea549f02b659122d108c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="navitem">
        <a href="{{link}}" class="btn btn-secondary">{{text}}</a>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="navitem">
';
                $buffer .= $indent . '        <a href="';
                $value = $this->resolveValue($context->find('link'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="btn btn-secondary">';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section92506f46b3993bbe3a7039bde1cf4e7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    {{#thirdpartynodes}}
    <div class="navitem">
        <a href="{{link}}" class="btn btn-secondary">{{text}}</a>
    </div>
    {{/thirdpartynodes}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('thirdpartynodes');
                $buffer .= $this->section21f130cf0a7ea549f02b659122d108c6($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9b6e43424e97bfc3f90457629b9b5c48(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="navitem">
            {{> core/url_select}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/url_select')) {
                    $buffer .= $partial->renderInternal($context, $indent . '            ');
                }
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

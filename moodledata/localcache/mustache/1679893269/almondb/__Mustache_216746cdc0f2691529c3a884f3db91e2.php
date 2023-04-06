<?php

class __Mustache_216746cdc0f2691529c3a884f3db91e2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="container-fluid tertiary-navigation full-width-bottom-border">
';
        $buffer .= $indent . '    <div class="row">
';
        $value = $context->find('generalnavselector');
        $buffer .= $this->section70583f5a8fcc1cd4ae6828417b1997a8($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section70583f5a8fcc1cd4ae6828417b1997a8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="navitem">
                {{>core/tertiary_navigation_selector}}
            </div>
            <div class="navitem-divider"></div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="navitem">
';
                if ($partial = $this->mustache->loadPartial('core/tertiary_navigation_selector')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                ');
                }
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="navitem-divider"></div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

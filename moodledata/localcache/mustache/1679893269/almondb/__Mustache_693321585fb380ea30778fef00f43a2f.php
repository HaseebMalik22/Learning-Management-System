<?php

class __Mustache_693321585fb380ea30778fef00f43a2f extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('block18enabled');
        $buffer .= $this->sectionDfa108ddd70915fee553f0be288fac7d($context, $indent, $value);

        return $buffer;
    }

    private function sectionDfa108ddd70915fee553f0be288fac7d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <section id="block18">
        {{{block18caption}}}
    </section>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <section id="block18">
';
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('block18caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '    </section>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

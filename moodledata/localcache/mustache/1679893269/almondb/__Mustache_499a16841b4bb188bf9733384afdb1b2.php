<?php

class __Mustache_499a16841b4bb188bf9733384afdb1b2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="hidden_condition_advanced">
';
        $buffer .= $indent . '    <input type="hidden" name="showhidden" value="0" id="showhidden_off">
';
        $buffer .= $indent . '    <input id="showhidden_on" class="searchoptions mr-1" type="checkbox" value="1" name="showhidden" ';
        $value = $this->resolveValue($context->find('checked'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '    <label for="showhidden_on">';
        $value = $context->find('str');
        $buffer .= $this->sectionBb205b43c7c0eda47fd629ab4bfe6390($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionBb205b43c7c0eda47fd629ab4bfe6390(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' showhidden, question';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' showhidden, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

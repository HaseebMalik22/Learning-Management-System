<?php

class __Mustache_00ff8335bdbbc3d03834fcc21e26e791 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="category_condition_advanced">
';
        $buffer .= $indent . '    <input type="hidden" name="recurse" value="0" id="recurse_off">
';
        $buffer .= $indent . '    <input id="recurse_on" class="searchoptions mr-1" type="checkbox" value="1" name="recurse" ';
        $value = $this->resolveValue($context->find('checked'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '>
';
        $buffer .= $indent . '    <label for="recurse_on">';
        $value = $context->find('str');
        $buffer .= $this->section7099fb9a82c02a4366ff91964bca7053($context, $indent, $value);
        $buffer .= '</label>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section7099fb9a82c02a4366ff91964bca7053(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' includesubcategories, question';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' includesubcategories, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

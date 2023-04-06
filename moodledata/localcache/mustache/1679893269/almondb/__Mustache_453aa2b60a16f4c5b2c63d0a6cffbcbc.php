<?php

class __Mustache_453aa2b60a16f4c5b2c63d0a6cffbcbc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="createnewquestion mb-1">
';
        $value = $context->find('canadd');
        if (empty($value)) {
            
            $buffer .= $indent . '        ';
            $value = $context->find('str');
            $buffer .= $this->section917ee06a848ed615db0a90a59a4c7e59($context, $indent, $value);
            $buffer .= '
';
        }
        $value = $context->find('canadd');
        $buffer .= $this->section4dec527fbe433ce011decdd5de08afd4($context, $indent, $value);
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section917ee06a848ed615db0a90a59a4c7e59(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' nopermissionadd, question';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' nopermissionadd, question';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4dec527fbe433ce011decdd5de08afd4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        {{{buttonhtml}}}
        <div id="qtypechoicecontainer">
            {{{qtypeform}}}
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        ';
                $value = $this->resolveValue($context->find('buttonhtml'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        <div id="qtypechoicecontainer">
';
                $buffer .= $indent . '            ';
                $value = $this->resolveValue($context->find('qtypeform'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

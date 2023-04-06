<?php

class __Mustache_4ae91e0da1e9e7e68ca7995cb5aa7476 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="zero-state mx-auto w-50 text-center my-6">
';
        $buffer .= $indent . '    <img src="';
        $value = $this->resolveValue($context->find('imglink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" alt="';
        $value = $context->find('str');
        $buffer .= $this->section97e590d28137579818bf31d0d2cdb365($context, $indent, $value);
        $buffer .= '" aria-hidden="true" class="my-5">
';
        $buffer .= $indent . '    <h3>';
        $value = $context->find('str');
        $buffer .= $this->section97e590d28137579818bf31d0d2cdb365($context, $indent, $value);
        $buffer .= '</h3>
';
        $buffer .= $indent . '    <p>';
        $value = $context->find('str');
        $buffer .= $this->section936c0813455f3c4527b1bc16eee98be8($context, $indent, $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section97e590d28137579818bf31d0d2cdb365(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'viewsinglegradeitem, gradereport_singleview';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'viewsinglegradeitem, gradereport_singleview';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section936c0813455f3c4527b1bc16eee98be8(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'singleviewdescription, gradereport_singleview';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'singleviewdescription, gradereport_singleview';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

<?php

class __Mustache_237dc7c72199896649747dc2e8621676 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="report-navigation w-100">
';
        $buffer .= $indent . '    <div class="container w-100 d-flex">
';
        $value = $context->find('perpageselect');
        $buffer .= $this->section3a122d1febc6540d99213082bf2906c2($context, $indent, $value);
        $buffer .= $indent . '        <div class="d-flex ml-auto">
';
        $value = $context->find('previoususer');
        $buffer .= $this->section56fe3cd3dda518c144ac5f88993a6ffb($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="d-flex ml-auto">
';
        $value = $context->find('nextuser');
        $buffer .= $this->section33456e48dddc426a7af313b94d8735d0($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section3a122d1febc6540d99213082bf2906c2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
            <div class="d-flex report-paging">
                {{{perpageselect}}}
                {{{pager}}}
            </div>
        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '            <div class="d-flex report-paging">
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('perpageselect'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $this->resolveValue($context->find('pager'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '            </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section42c2142075a9c0545bfc751d406f8469(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' gotopreviousreport, gradereport_singleview ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' gotopreviousreport, gradereport_singleview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56fe3cd3dda518c144ac5f88993a6ffb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="previous d-flex">
                    <a href="{{url}}" aria-label="{{#str}} gotopreviousreport, gradereport_singleview {{/str}}">
                        <i class="fa fa-caret-{{previousarrow}} fa-lg pr-1"></i>
                        {{name}}
                    </a>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="previous d-flex">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->section42c2142075a9c0545bfc751d406f8469($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        <i class="fa fa-caret-';
                $value = $this->resolveValue($context->find('previousarrow'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' fa-lg pr-1"></i>
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD5dbb489b4c96fafa83b4f421b3f992e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' gotonextreport, gradereport_singleview ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' gotonextreport, gradereport_singleview ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section33456e48dddc426a7af313b94d8735d0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="next d-flex ml-auto">
                    <a href="{{url}}" aria-label="{{#str}} gotonextreport, gradereport_singleview {{/str}}">
                        {{name}}
                        <i class="fa fa-caret-{{nextarrow}} fa-lg pl-1"></i>
                    </a>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="next d-flex ml-auto">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('url'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" aria-label="';
                $value = $context->find('str');
                $buffer .= $this->sectionD5dbb489b4c96fafa83b4f421b3f992e($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                        <i class="fa fa-caret-';
                $value = $this->resolveValue($context->find('nextarrow'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' fa-lg pl-1"></i>
';
                $buffer .= $indent . '                    </a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

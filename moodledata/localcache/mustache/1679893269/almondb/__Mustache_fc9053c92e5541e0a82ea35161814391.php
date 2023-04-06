<?php

class __Mustache_fc9053c92e5541e0a82ea35161814391 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="search-widget dropdown d-flex" data-searchtype="user">
';
        $buffer .= $indent . '    <button aria-expanded="false" data-toggle="dropdown" class="btn dropdown-toggle d-flex text-left align-items-center p-0" data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" data-groupid="';
        $value = $this->resolveValue($context->find('groupid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->sectionE56a1481df90bdd980ab2c5c35cb3d25($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <div class="align-items-center d-flex">
';
        $value = $context->find('selectedoption');
        $buffer .= $this->section99539213395cbab6e90f4f2b1b5013b0($context, $indent, $value);
        $value = $context->find('selectedoption');
        if (empty($value)) {
            
            $buffer .= $indent . '                <div class="d-block pr-2">
';
            $buffer .= $indent . '                    <span class="userinitials"></span>
';
            $buffer .= $indent . '                </div>
';
            $buffer .= $indent . '                <div class="user-info d-block pr-3">
';
            $buffer .= $indent . '                    ';
            $value = $context->find('str');
            $buffer .= $this->sectionE56a1481df90bdd980ab2c5c35cb3d25($context, $indent, $value);
            $buffer .= '
';
            $buffer .= $indent . '                </div>
';
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </button>
';
        $buffer .= $indent . '    <div class="dropdown-menu wide">
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionE56a1481df90bdd980ab2c5c35cb3d25(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' selectauser, core_grades ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' selectauser, core_grades ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section600bd02a81dfe62c93b2544eb0073f4a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        {{{image}}}
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4f2d63874f09962a42fcec1456b5cdbb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <span class="d-block small">
                            {{additionaltext}}
                        </span>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <span class="d-block small">
';
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('additionaltext'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                        </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section99539213395cbab6e90f4f2b1b5013b0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="selected-option-img d-block pr-2">
                    {{#image}}
                        {{{image}}}
                    {{/image}}
                    {{^image}}
                        <span class="userinitials"></span>
                    {{/image}}
                </div>
                <div class="selected-option-info d-block pr-3">
                    <span class="selected-option-text p-0 font-weight-bold">
                        {{text}}
                    </span>
                    {{#additionaltext}}
                        <span class="d-block small">
                            {{additionaltext}}
                        </span>
                    {{/additionaltext}}
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="selected-option-img d-block pr-2">
';
                $value = $context->find('image');
                $buffer .= $this->section600bd02a81dfe62c93b2544eb0073f4a($context, $indent, $value);
                $value = $context->find('image');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                        <span class="userinitials"></span>
';
                }
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="selected-option-info d-block pr-3">
';
                $buffer .= $indent . '                    <span class="selected-option-text p-0 font-weight-bold">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('text'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    </span>
';
                $value = $context->find('additionaltext');
                $buffer .= $this->section4f2d63874f09962a42fcec1456b5cdbb($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

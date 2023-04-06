<?php

class __Mustache_66888a5291417753211f76f0fd3db3f2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div data-region="loading-placeholder-content" aria-hidden="true" id="';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '-course-index-placeholder">
';
        $buffer .= $indent . '    <ul class="media-list">
';
        $buffer .= $indent . '        <li class="media">
';
        $buffer .= $indent . '            <div class="media-body col-md-6 p-0 d-flex align-items-center">
';
        $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2"></div>
';
        $buffer .= $indent . '                <div class="bg-pulse-grey w-100"></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <li class="media">
';
        $buffer .= $indent . '            <div class="media-body col-md-6 p-0 d-flex align-items-center">
';
        $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2"></div>
';
        $buffer .= $indent . '                <div class="bg-pulse-grey w-100"></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <li class="media">
';
        $buffer .= $indent . '            <div class="media-body col-md-6 p-0 d-flex align-items-center">
';
        $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2"></div>
';
        $buffer .= $indent . '                <div class="bg-pulse-grey w-100"></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '        <li class="media">
';
        $buffer .= $indent . '            <div class="media-body col-md-6 p-0 d-flex align-items-center">
';
        $buffer .= $indent . '                <div class="bg-pulse-grey rounded-circle mr-2"></div>
';
        $buffer .= $indent . '                <div class="bg-pulse-grey w-100"></div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </li>
';
        $buffer .= $indent . '    </ul>
';
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->sectionD9c93bcc561152fc9aa17b315dba7e81($context, $indent, $value);

        return $buffer;
    }

    private function sectionD9c93bcc561152fc9aa17b315dba7e81(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([\'core_courseformat/local/courseindex/placeholder\'], function(component) {
    component.init(\'{{uniqid}}-course-index-placeholder\');
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([\'core_courseformat/local/courseindex/placeholder\'], function(component) {
';
                $buffer .= $indent . '    component.init(\'';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-course-index-placeholder\');
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

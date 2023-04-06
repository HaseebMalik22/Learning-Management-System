<?php

class __Mustache_8127bae14a2893a2c3db2d5c86670291 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="reportbuilder-report"
';
        $buffer .= $indent . '        data-region="core_reportbuilder/report"
';
        $buffer .= $indent . '        data-report-id="';
        $value = $this->resolveValue($context->find('id'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '        data-report-type="';
        $value = $this->resolveValue($context->find('type'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '        data-parameter="';
        $value = $this->resolveValue($context->find('parameters'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '">
';
        $buffer .= $indent . '            <div class="reportbuilder-wrapper">
';
        $value = $context->find('filterspresent');
        $buffer .= $this->sectionB44458dc80aefb6e06bbd9f71628c756($context, $indent, $value);
        $buffer .= $indent . '                <div class="mt-2">
';
        $buffer .= $indent . '                    ';
        $value = $this->resolveValue($context->find('table'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '</div>
';
        $buffer .= $indent . '
';
        $value = $context->find('js');
        $buffer .= $this->section89016fee42eec1ffda92551ac1b72968($context, $indent, $value);

        return $buffer;
    }

    private function sectionB44458dc80aefb6e06bbd9f71628c756(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="dropdown d-flex justify-content-end">
                        {{>core_reportbuilder/local/filters/area}}
                    </div>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="dropdown d-flex justify-content-end">
';
                if ($partial = $this->mustache->loadPartial('core_reportbuilder/local/filters/area')) {
                    $buffer .= $partial->renderInternal($context, $indent . '                        ');
                }
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section89016fee42eec1ffda92551ac1b72968(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    require([\'core_reportbuilder/report\'], function(report) {
        report.init();
    });
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    require([\'core_reportbuilder/report\'], function(report) {
';
                $buffer .= $indent . '        report.init();
';
                $buffer .= $indent . '    });
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

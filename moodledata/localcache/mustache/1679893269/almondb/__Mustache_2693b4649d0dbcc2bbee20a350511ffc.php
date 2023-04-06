<?php

class __Mustache_2693b4649d0dbcc2bbee20a350511ffc extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        if ($partial = $this->mustache->loadPartial('core/chooser')) {
            $buffer .= $partial->renderInternal($context);
        }
        $value = $context->find('js');
        $buffer .= $this->sectionD95106a93a53a31fcfd679a896ebfacf($context, $indent, $value);

        return $buffer;
    }

    private function sectionD95106a93a53a31fcfd679a896ebfacf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([
    \'core/yui\'
], function(Y) {
    Y.use(\'moodle-qbank_editquestion-chooser\', function() {
        M.question.init_chooser();
    });
});
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . 'require([
';
                $buffer .= $indent . '    \'core/yui\'
';
                $buffer .= $indent . '], function(Y) {
';
                $buffer .= $indent . '    Y.use(\'moodle-qbank_editquestion-chooser\', function() {
';
                $buffer .= $indent . '        M.question.init_chooser();
';
                $buffer .= $indent . '    });
';
                $buffer .= $indent . '});
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

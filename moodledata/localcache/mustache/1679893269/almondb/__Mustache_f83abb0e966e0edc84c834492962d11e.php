<?php

class __Mustache_f83abb0e966e0edc84c834492962d11e extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $buffer .= $indent . '<div class="container-fluid tertiary-navigation">
';
        $buffer .= $indent . '    <div class="row">
';
        $buffer .= $indent . '        <div class="navitem">
';
        if ($partial = $this->mustache->loadPartial('mod_forum/quick_search_form')) {
            $buffer .= $partial->renderInternal($context, $indent . '            ');
        }
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="navitem">
';
        $buffer .= $indent . '            ';
        $value = $this->resolveValue($context->find('newdiscussionbtn'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="ml-sm-auto navitem">
';
        $value = $context->find('subscribetoforum');
        $buffer .= $this->section5f5c311d5115bd768284dc342ceecce6($context, $indent, $value);
        $value = $context->find('unsubscribefromforum');
        $buffer .= $this->sectionA98dd9e7bb3a6ebc104baa9d577fcc8f($context, $indent, $value);
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionF259a1eb12e681fae1aae3a7a3b7c528(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'subscribe, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'subscribe, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f5c311d5115bd768284dc342ceecce6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a class="btn btn-secondary" href="{{ subscribetoforum }}">{{#str}}subscribe, mod_forum {{/str}}</a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a class="btn btn-secondary" href="';
                $value = $this->resolveValue($context->find('subscribetoforum'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionF259a1eb12e681fae1aae3a7a3b7c528($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC0fbbf241ef35993bc3b3a4ff1d905bd(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'unsubscribe, mod_forum ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'unsubscribe, mod_forum ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA98dd9e7bb3a6ebc104baa9d577fcc8f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <a class="btn btn-secondary" href="{{ unsubscribefromforum }}">{{#str}}unsubscribe, mod_forum {{/str}}</a>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <a class="btn btn-secondary" href="';
                $value = $this->resolveValue($context->find('unsubscribefromforum'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">';
                $value = $context->find('str');
                $buffer .= $this->sectionC0fbbf241ef35993bc3b3a4ff1d905bd($context, $indent, $value);
                $buffer .= '</a>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

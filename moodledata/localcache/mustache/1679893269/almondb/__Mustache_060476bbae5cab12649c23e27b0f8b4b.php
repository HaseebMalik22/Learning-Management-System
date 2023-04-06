<?php

class __Mustache_060476bbae5cab12649c23e27b0f8b4b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="page-toggler d-flex">
';
        $value = $context->find('displaylabel');
        $buffer .= $this->section5f3d58bfc022c5cfb71cc1e620985547($context, $indent, $value);
        $buffer .= $indent . '    <div class="btn-group align-items-center" role="group" aria-label="';
        $value = $context->find('str');
        $buffer .= $this->section56f25710d83399470d4bd859ad46fcac($context, $indent, $value);
        $buffer .= '">
';
        $buffer .= $indent . '        <a href="';
        $value = $this->resolveValue($context->find('userzerolink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '           role="button"
';
        $buffer .= $indent . '           class="btn btn-outline-primary ';
        $value = $context->find('userselectactive');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '           ';
        $value = $context->find('userselectactive');
        $buffer .= $this->section283c80daf5e7cc98a3c7fc21e817b280($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '           ';
        $value = $context->find('userselectactive');
        if (empty($value)) {
            
            $buffer .= 'aria-pressed="false"';
        }
        $buffer .= '
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->section91d79d5c47265da1738cf45f5e4ad8ff($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '        <a href="';
        $value = $this->resolveValue($context->find('gradezerolink'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"
';
        $buffer .= $indent . '           role="button"
';
        $buffer .= $indent . '           class="btn btn-outline-primary ';
        $value = $context->find('gradeselectactive');
        $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
        $buffer .= '"
';
        $buffer .= $indent . '           ';
        $value = $context->find('gradeselectactive');
        $buffer .= $this->section283c80daf5e7cc98a3c7fc21e817b280($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '           ';
        $value = $context->find('gradeselectactive');
        if (empty($value)) {
            
            $buffer .= 'aria-pressed="false"';
        }
        $buffer .= '
';
        $buffer .= $indent . '        >
';
        $buffer .= $indent . '            ';
        $value = $context->find('str');
        $buffer .= $this->section3588cfe6d97186b2e0bee02c94ed646a($context, $indent, $value);
        $buffer .= '
';
        $buffer .= $indent . '        </a>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function section9a4e97facf3043e3fec96fcb65be7516(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'viewby, gradereport_singleview';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'viewby, gradereport_singleview';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5f3d58bfc022c5cfb71cc1e620985547(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <p class="my-auto mr-3 text-uppercase">{{#str}}viewby, gradereport_singleview{{/str}}</p>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <p class="my-auto mr-3 text-uppercase">';
                $value = $context->find('str');
                $buffer .= $this->section9a4e97facf3043e3fec96fcb65be7516($context, $indent, $value);
                $buffer .= '</p>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section56f25710d83399470d4bd859ad46fcac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'ariareporttype, gradereport_singleview';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'ariareporttype, gradereport_singleview';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section283c80daf5e7cc98a3c7fc21e817b280(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'aria-pressed="true"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'aria-pressed="true"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section91d79d5c47265da1738cf45f5e4ad8ff(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'users';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'users';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3588cfe6d97186b2e0bee02c94ed646a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'gradeitems, grades';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'gradeitems, grades';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

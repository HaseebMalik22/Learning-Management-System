<?php

class __Mustache_dda9602913637e9e83a1e27d68fafdc2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('title');
        $buffer .= $this->sectionA8cda03576be8e252625aa390cd88cad($context, $indent, $value);
        $value = $context->find('description');
        $buffer .= $this->section5bfe31d17f2dde5fc03c7b45ce356db3($context, $indent, $value);

        return $buffer;
    }

    private function section166bf0fc7afe7b912636ae671a100b41(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' div, theme_almondb ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' div, theme_almondb ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB5538bf28cdda456a1a830b56bebd11a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' divdiv, theme_almondb ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' divdiv, theme_almondb ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA8cda03576be8e252625aa390cd88cad(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<script>

if (\'{{title}}\'.substring(0, 1) == \':\' || \'{{title}}\'.substring(0, 1) == \'!\' ) {
    var randomnumber = Math.floor((Math.random() * 10000) + 1);
    var headingId ="heading" + randomnumber;
    var collapseId = "collapse" + randomnumber;
    var buttonId = "button" + randomnumber;
    var standart = \'<div class="card border-0 pb-2 pt-2"> <div class="card-header border p-0 rounded" id="heading" > <h4 class="mb-0">\'; 
        standart += \'<button id="button" class="btn btn-link btn-block text-left text-decoration-none" type="button" data-toggle="collapse"\';
        standart += \'data-target="#collapse" aria-expanded="false" aria-controls="collapse" >\';
        standart += \'{{{title}}}\';
        standart += \'</button></h4></div>\';
        standart += \'<div id="collapse" class="collapse" aria-labelledby="heading" data-parent="#accordionHy">\';
        standart += \'<div class="card-body border rounded">\';

    if (\'{{title}}\'.substring(0, 1) == \':\') {
        document.write(\'<div class="accordion" id="accordionHy">\')
        document.write(standart);
        var randomnumber = Math.floor((Math.random() * 1000) + 1);
        var accordionHyId ="accordionHy" + randomnumber;
        document.getElementById(\'accordionHy\').id = accordionHyId;
        
        document.getElementById(\'heading\').id = headingId;
        document.getElementById(\'collapse\').id = collapseId;
        document.getElementById(\'button\').id = buttonId;
        document.getElementById(buttonId).setAttribute("aria-controls", collapseId);
        document.getElementById(buttonId).setAttribute("data-target", "#"+collapseId);
        document.getElementById(collapseId).setAttribute("aria-labelledby", headingId);
        document.getElementById(collapseId).setAttribute("data-parent", "#"+accordionHyId);

    } else if (\'{{title}}\' == \'--End--\'){
        document.write(\'{{#str}} div, theme_almondb {{/str}}\')
    } else {
        document.write(\'{{#str}} divdiv, theme_almondb {{/str}}\');
        document.write(standart);
        document.getElementById(\'heading\').id = headingId;
        document.getElementById(\'collapse\').id = collapseId;
        document.getElementById(\'button\').id = buttonId;
        document.getElementById(buttonId).setAttribute("aria-controls", collapseId);
        document.getElementById(buttonId).setAttribute("data-target", "#"+collapseId);
        document.getElementById(collapseId).setAttribute("aria-labelledby", headingId);
        document.getElementById(collapseId).setAttribute("data-parent", "#"+accordionHyId);
    }
} else {
    document.write(\'<h3 class="main">{{{title}}}</h3>\');
}
</script>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<script>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . 'if (\'';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\'.substring(0, 1) == \':\' || \'';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\'.substring(0, 1) == \'!\' ) {
';
                $buffer .= $indent . '    var randomnumber = Math.floor((Math.random() * 10000) + 1);
';
                $buffer .= $indent . '    var headingId ="heading" + randomnumber;
';
                $buffer .= $indent . '    var collapseId = "collapse" + randomnumber;
';
                $buffer .= $indent . '    var buttonId = "button" + randomnumber;
';
                $buffer .= $indent . '    var standart = \'<div class="card border-0 pb-2 pt-2"> <div class="card-header border p-0 rounded" id="heading" > <h4 class="mb-0">\'; 
';
                $buffer .= $indent . '        standart += \'<button id="button" class="btn btn-link btn-block text-left text-decoration-none" type="button" data-toggle="collapse"\';
';
                $buffer .= $indent . '        standart += \'data-target="#collapse" aria-expanded="false" aria-controls="collapse" >\';
';
                $buffer .= $indent . '        standart += \'';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '\';
';
                $buffer .= $indent . '        standart += \'</button></h4></div>\';
';
                $buffer .= $indent . '        standart += \'<div id="collapse" class="collapse" aria-labelledby="heading" data-parent="#accordionHy">\';
';
                $buffer .= $indent . '        standart += \'<div class="card-body border rounded">\';
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    if (\'';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\'.substring(0, 1) == \':\') {
';
                $buffer .= $indent . '        document.write(\'<div class="accordion" id="accordionHy">\')
';
                $buffer .= $indent . '        document.write(standart);
';
                $buffer .= $indent . '        var randomnumber = Math.floor((Math.random() * 1000) + 1);
';
                $buffer .= $indent . '        var accordionHyId ="accordionHy" + randomnumber;
';
                $buffer .= $indent . '        document.getElementById(\'accordionHy\').id = accordionHyId;
';
                $buffer .= $indent . '        
';
                $buffer .= $indent . '        document.getElementById(\'heading\').id = headingId;
';
                $buffer .= $indent . '        document.getElementById(\'collapse\').id = collapseId;
';
                $buffer .= $indent . '        document.getElementById(\'button\').id = buttonId;
';
                $buffer .= $indent . '        document.getElementById(buttonId).setAttribute("aria-controls", collapseId);
';
                $buffer .= $indent . '        document.getElementById(buttonId).setAttribute("data-target", "#"+collapseId);
';
                $buffer .= $indent . '        document.getElementById(collapseId).setAttribute("aria-labelledby", headingId);
';
                $buffer .= $indent . '        document.getElementById(collapseId).setAttribute("data-parent", "#"+accordionHyId);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    } else if (\'';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\' == \'--End--\'){
';
                $buffer .= $indent . '        document.write(\'';
                $value = $context->find('str');
                $buffer .= $this->section166bf0fc7afe7b912636ae671a100b41($context, $indent, $value);
                $buffer .= '\')
';
                $buffer .= $indent . '    } else {
';
                $buffer .= $indent . '        document.write(\'';
                $value = $context->find('str');
                $buffer .= $this->sectionB5538bf28cdda456a1a830b56bebd11a($context, $indent, $value);
                $buffer .= '\');
';
                $buffer .= $indent . '        document.write(standart);
';
                $buffer .= $indent . '        document.getElementById(\'heading\').id = headingId;
';
                $buffer .= $indent . '        document.getElementById(\'collapse\').id = collapseId;
';
                $buffer .= $indent . '        document.getElementById(\'button\').id = buttonId;
';
                $buffer .= $indent . '        document.getElementById(buttonId).setAttribute("aria-controls", collapseId);
';
                $buffer .= $indent . '        document.getElementById(buttonId).setAttribute("data-target", "#"+collapseId);
';
                $buffer .= $indent . '        document.getElementById(collapseId).setAttribute("aria-labelledby", headingId);
';
                $buffer .= $indent . '        document.getElementById(collapseId).setAttribute("data-parent", "#"+accordionHyId);
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '} else {
';
                $buffer .= $indent . '    document.write(\'<h3 class="main">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h3>\');
';
                $buffer .= $indent . '}
';
                $buffer .= $indent . '</script>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5bfe31d17f2dde5fc03c7b45ce356db3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="box generalbox formsettingheading">{{{descriptionformatted}}}</div>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="box generalbox formsettingheading">';
                $value = $this->resolveValue($context->find('descriptionformatted'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

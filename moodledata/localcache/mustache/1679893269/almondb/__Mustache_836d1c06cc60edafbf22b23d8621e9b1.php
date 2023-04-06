<?php

class __Mustache_836d1c06cc60edafbf22b23d8621e9b1 extends Mustache_Template
{
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';

        $buffer .= $indent . '<!-- Start section -->
';
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block01')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block02')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block09')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block04')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block03')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block07')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block08')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block05')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block06')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block10')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block11')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block18')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block19')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '
';
        if ($partial = $this->mustache->loadPartial('theme_almondb/frontpage/block20')) {
            $buffer .= $partial->renderInternal($context);
        }
        $buffer .= $indent . '<!-- End section -->
';

        return $buffer;
    }
}

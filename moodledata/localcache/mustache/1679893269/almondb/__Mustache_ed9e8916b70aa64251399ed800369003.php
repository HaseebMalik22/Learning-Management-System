<?php

class __Mustache_ed9e8916b70aa64251399ed800369003 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="card-text content calendarwrapper"';
        $buffer .= ' id="month-upcoming-mini-';
        $value = $this->resolveValue($context->find('uniqid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-context-id="';
        $value = $this->resolveValue($context->find('defaulteventcontext'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-courseid="';
        $value = $this->resolveValue($context->find('courseid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= ' data-categoryid="';
        $value = $this->resolveValue($context->find('categoryid'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '"';
        $buffer .= '>
';
        if ($partial = $this->mustache->loadPartial('core/overlay_loading')) {
            $buffer .= $partial->renderInternal($context, $indent . '    ');
        }
        $value = $context->find('events');
        $buffer .= $this->section3c8da1923923f2cc9077c111eead6988($context, $indent, $value);
        $value = $context->find('events');
        if (empty($value)) {
            
            $buffer .= $indent . '        ';
            $value = $context->find('str');
            $buffer .= $this->section67ada18cce7e46ad84d774c8a4b7a284($context, $indent, $value);
            $buffer .= '
';
        }
        $buffer .= $indent . '</div>
';
        $value = $context->find('js');
        $buffer .= $this->section9e7cfc7b2dbe6b1f10aa1a0bbe941da5($context, $indent, $value);

        return $buffer;
    }

    private function section800803d7bc3dd848813cb70b2e5017c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <img alt="{{alttext}}" title="{{alttext}}" src="{{{ iconurl }}}" class="icon ">
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <img alt="';
                $value = $this->resolveValue($context->find('alttext'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" title="';
                $value = $this->resolveValue($context->find('alttext'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" src="';
                $value = $this->resolveValue($context->find('iconurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="icon ">
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17144e6457bffc9fa0437cc7e3d39509(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' {{key}}, {{component}}, {{alttext}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('component'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ', ';
                $value = $this->resolveValue($context->find('alttext'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section013f1507aef4f83b74ee0e786cb3c7e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                {{#iconurl}}
                    <img alt="{{alttext}}" title="{{alttext}}" src="{{{ iconurl }}}" class="icon ">
                {{/iconurl}}
                {{^iconurl}}
                    {{#pix}} {{key}}, {{component}}, {{alttext}} {{/pix}}
                {{/iconurl}}
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $value = $context->find('iconurl');
                $buffer .= $this->section800803d7bc3dd848813cb70b2e5017c6($context, $indent, $value);
                $value = $context->find('iconurl');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    ';
                    $value = $context->find('pix');
                    $buffer .= $this->section17144e6457bffc9fa0437cc7e3d39509($context, $indent, $value);
                    $buffer .= '
';
                }
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section3c8da1923923f2cc9077c111eead6988(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div{{!
            }} class="event d-flex border-bottom pt-2 pb-3"{{!
            }} data-eventtype-{{normalisedeventtype}}="1"{{!
            }} data-region="event-item"{{!
        }}>
            <div class="activityiconcontainer small {{{purpose}}} courseicon mr-3">
                {{#icon}}
                {{#iconurl}}
                    <img alt="{{alttext}}" title="{{alttext}}" src="{{{ iconurl }}}" class="icon ">
                {{/iconurl}}
                {{^iconurl}}
                    {{#pix}} {{key}}, {{component}}, {{alttext}} {{/pix}}
                {{/iconurl}}
                {{/icon}}
            </div>
            <div class="overflow-auto">
                <h6 class="d-flex mb-1">
                    <a{{!
                        }} class="text-truncate"{{!
                        }} data-type="event"{{!
                        }} data-action="view-event"{{!
                        }} data-event-id="{{id}}"{{!
                        }} href="{{viewurl}}"{{!
                    }}>{{{name}}}</a>
                </h6>
                <div class="date small">{{{formattedtime}}}</div>
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div';
                $buffer .= ' class="event d-flex border-bottom pt-2 pb-3"';
                $buffer .= ' data-eventtype-';
                $value = $this->resolveValue($context->find('normalisedeventtype'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '="1"';
                $buffer .= ' data-region="event-item"';
                $buffer .= '>
';
                $buffer .= $indent . '            <div class="activityiconcontainer small ';
                $value = $this->resolveValue($context->find('purpose'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' courseicon mr-3">
';
                $value = $context->find('icon');
                $buffer .= $this->section013f1507aef4f83b74ee0e786cb3c7e1($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '            <div class="overflow-auto">
';
                $buffer .= $indent . '                <h6 class="d-flex mb-1">
';
                $buffer .= $indent . '                    <a';
                $buffer .= ' class="text-truncate"';
                $buffer .= ' data-type="event"';
                $buffer .= ' data-action="view-event"';
                $buffer .= ' data-event-id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $buffer .= ' href="';
                $value = $this->resolveValue($context->find('viewurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"';
                $buffer .= '>';
                $value = $this->resolveValue($context->find('name'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>
';
                $buffer .= $indent . '                </h6>
';
                $buffer .= $indent . '                <div class="date small">';
                $value = $this->resolveValue($context->find('formattedtime'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section67ada18cce7e46ad84d774c8a4b7a284(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'noupcomingevents, calendar';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'noupcomingevents, calendar';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9e7cfc7b2dbe6b1f10aa1a0bbe941da5(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
require([
    \'jquery\',
    \'core_calendar/selectors\',
    \'core_calendar/events\',
], function(
    $,
    CalendarSelectors,
    CalendarEvents
) {
    var root = $(\'#month-upcoming-mini-{{uniqid}}\');

    $(\'body\').on(CalendarEvents.filterChanged, function(e, data) {
        M.util.js_pending("month-upcoming-mini-{{uniqid}}-filterChanged");

        // A filter value has been changed.
        // Find all matching cells in the popover data, and hide them.
        var target = $("#month-upcoming-mini-{{uniqid}}").find(CalendarSelectors.eventType[data.type]);

        var transitionPromise = $.Deferred();
        if (data.hidden) {
            transitionPromise.then(function() {
                return target.slideUp(\'fast\').promise();
            });
        } else {
            transitionPromise.then(function() {
                return target.slideDown(\'fast\').promise();
            });
        }

        transitionPromise.then(function() {
            M.util.js_complete("month-upcoming-mini-{{uniqid}}-filterChanged");

            return;
        });

        transitionPromise.resolve();
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
                $buffer .= $indent . '    \'jquery\',
';
                $buffer .= $indent . '    \'core_calendar/selectors\',
';
                $buffer .= $indent . '    \'core_calendar/events\',
';
                $buffer .= $indent . '], function(
';
                $buffer .= $indent . '    $,
';
                $buffer .= $indent . '    CalendarSelectors,
';
                $buffer .= $indent . '    CalendarEvents
';
                $buffer .= $indent . ') {
';
                $buffer .= $indent . '    var root = $(\'#month-upcoming-mini-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '\');
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    $(\'body\').on(CalendarEvents.filterChanged, function(e, data) {
';
                $buffer .= $indent . '        M.util.js_pending("month-upcoming-mini-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-filterChanged");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        // A filter value has been changed.
';
                $buffer .= $indent . '        // Find all matching cells in the popover data, and hide them.
';
                $buffer .= $indent . '        var target = $("#month-upcoming-mini-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '").find(CalendarSelectors.eventType[data.type]);
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        var transitionPromise = $.Deferred();
';
                $buffer .= $indent . '        if (data.hidden) {
';
                $buffer .= $indent . '            transitionPromise.then(function() {
';
                $buffer .= $indent . '                return target.slideUp(\'fast\').promise();
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '        } else {
';
                $buffer .= $indent . '            transitionPromise.then(function() {
';
                $buffer .= $indent . '                return target.slideDown(\'fast\').promise();
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '        }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        transitionPromise.then(function() {
';
                $buffer .= $indent . '            M.util.js_complete("month-upcoming-mini-';
                $value = $this->resolveValue($context->find('uniqid'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '-filterChanged");
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '            return;
';
                $buffer .= $indent . '        });
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '        transitionPromise.resolve();
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
